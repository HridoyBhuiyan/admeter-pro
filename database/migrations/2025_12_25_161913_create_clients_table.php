<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('brand_name')->unique();
            $table->string('email')->unique();
            $table->string('whatsapp')->unique();
            $table->boolean('trial')->default(true);
            $table->string('brand_slug')->unique()->nullable();
            $table->string('site_url')->nullable();
            $table->string('ip_address', 45)->nullable();
            $table->timestamp('last_activity', 6)->index();
            $table->string('region')->nullable();
            $table->string('city')->nullable();
            $table->enum('status', ['pending', 'processing', 'completed', 'failed'])->default('pending');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
