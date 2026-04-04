<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Clients;
use Inertia\Inertia;
use Inertia\Response;

class AllUserController extends Controller
{
    public function index(): Response
    {
        $clients = Clients::query()
            ->latest()
            ->paginate(10);

        return Inertia::render('Admin/AllUsers', [
            'clients' => $clients,
        ]);
    }
}
