<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('configs', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->string('value')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        DB::table('configs')->insert([
            [
                'key'       => 'cpanel_address',
                'value'     => null,
                'is_active' => true,
            ],
            [
                'key'       => 'cpanel_username',
                'value'     => null,
                'is_active' => true,
            ],
            [
                'key'       => 'port',
                'value'     => null,
                'is_active' => true,
            ],
            [
                'key'       => 'api_token',
                'value'     => null,
                'is_active' => true,
            ],
            [
                'key'       => 'parent_path',
                'value'     => null,
                'is_active' => true,
            ],[
                'key'       => 'git_url',
                'value'     => null,
                'is_active' => true,
            ],[
                'key'       => 'git_token',
                'value'     => null,
                'is_active' => true,
            ],[
                'key'       => 'cpanel_ssh_key',
                'value'     => null,
                'is_active' => true,
            ],
        ]);
    }

//ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABAQDR8y2Kd8emKON2q/N0iJs/lz84wcHrPl4NNwjuBlwL96ELB4eSN6+r7HB3rZfxagVEUsBGN+HuHpgKjRxlWPjtmM3YmGXg86jYHH6EA0XLyXpEDA+iUCiUPqWqTLQZHziCZAXk7M3ourmWBZDmXCc9vStMjOR7U8jn126axDgMj8G0gPHGBBDqniu7sOPS+1b10BQ8Y6lTvQXgyfq6x1BafqUXbnjv23yrCQiruT0nLOptL88EFCCmIFdzBhQcO4GTolCMteUdBan6g0Il9n8Wqgdbu7a1YbJsbQTHQUM/NWzQ3HdRwTz9OvyGNmH6qp3WdZDlECkCXG9u67Z6PKj9





    public function down(): void
    {
        Schema::dropIfExists('configs');
    }
};

