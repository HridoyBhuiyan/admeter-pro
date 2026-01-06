<?php

namespace App\Http\Controllers;

use App\Jobs\SetupClientSiteJob;
use App\Models\Clients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class ClientSideController extends Controller
{
    function index()
    {
        return view('homepage.homepage');
    }
    function registration(Request $request)
    {
        return view('register.register');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:55|regex:/^[\pL\s\-]+$/u',
            'brandName' => 'required|string|max:55|unique:clients,brand_name',
            'phone' => 'required|max:55|unique:clients,phone',
            'email' => 'required|email|max:255|unique:clients,email',
        ], [
            'name.regex' => 'Only Full Name Allowed',
            'brandName.unique' => 'This Brand Name Already Exist. Please Try Another Name',
            'phone.unique' => 'This Phone Number Already Exist. Please Try Another Number',
            'email.unique' => 'This Email Already Exist. Please Try Another Email',
        ]);

        $brandSlug = Str::slug($request['brandName']);

        $client = Clients::create([
            'name'       => $request['name'],
            'brand_name' => $request['brandName'],
            'email'      => $request['email'],
            'phone'      => $request['phone'],
        ]);

        try {
            // Configs থেকে ডেটা নেওয়া
            $cpanelHost = str_replace(['https://', 'http://'], '', DB::table('configs')->where('key', 'cpanel_address')->value('value')); // business906.web-hosting.com
            $cpanelUser = DB::table('configs')->where('key', 'cpanel_username')->value('value'); // markyuiz
            $apiToken   = DB::table('configs')->where('key', 'api_token')->value('value');
            $port       = DB::table('configs')->where('key', 'port')->value('value') ?? 2083;
            $parentPath = DB::table('configs')->where('key', 'parent_path')->value('value'); // /home/markyuiz/admeterpro.com
            $gitUrl     = DB::table('configs')->where('key', 'git_url')->value('value'); // https://github.com/HridoyBhuiyan/admeter-pro

            // SSH Git URL-এ কনভার্ট করা (private repo-এর জন্য আবশ্যক)
            $sshGitUrl = preg_replace('#^https?://github\.com/#', 'git@github.com:', $gitUrl);
            if (!str_ends_with($sshGitUrl, '.git')) {
                $sshGitUrl .= '.git';
            }

            $repositoryRoot = rtrim($parentPath, '/') . '/' . $brandSlug;

            $url = "https://{$cpanelHost}:{$port}/execute/VersionControl/create";

            $params = [
                'type'            => 'git',
                'name'            => $brandSlug,
                'repository_root' => $repositoryRoot,
                'source_repository' => json_encode([
                    'remote_name' => 'origin',
                    'url'         => $sshGitUrl,  // SSH URL ব্যবহার করা
                ]),
                'branch'          => 'main',  // আপনার branch main
            ];

            $response = Http::withHeaders([
                'Authorization' => "cpanel {$cpanelUser}:{$apiToken}",
            ])->asForm()->post($url, $params);

            if ($response->successful()) {
                $data = $response->json();
                if ($data['status'] ?? 0 == 1) {
                    Log::info("Git repository successfully cloned for client: {$brandSlug}");
                } else {
                    Log::error("Git clone failed: " . json_encode($data['errors'] ?? $data));
                }
            } else {
                Log::error("Git API HTTP error: " . $response->status() . ' | ' . $response->body());
            }

        } catch (\Exception $e) {
            Log::error("Git repository creation exception: " . $e->getMessage());
        }

        SetupClientSiteJob::dispatch($client);

        return redirect()->route('registration')
            ->with('success', "রেজিস্ট্রেশন সফল! আপনার সাইট তৈরি হচ্ছে। URL: https://{$brandSlug}.admeterpro.com (৫-১০ মিনিট লাগতে পারে)");
    }

}
