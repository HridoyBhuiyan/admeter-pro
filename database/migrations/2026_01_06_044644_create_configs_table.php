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
            ],
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('configs');
    }
};
