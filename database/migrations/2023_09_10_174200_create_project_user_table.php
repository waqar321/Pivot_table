<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('projects_id')->constrained();
            $table->foreignId('users_id')->constrained();
            // $table->boolean('is_manager')->default(false);
            $table->timestamps();
            $table->foreignId('manager_id')->references('id')->on('users');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects_users');
    }
};
