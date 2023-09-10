<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('profession')->nullable();
            $table->unsignedBigInteger('country_id')->nullable();
            $table->foreign('country_id')
                  ->references('id')->on('country')
                  ->onDelete('cascade');
            $table->string('email')->unique()->nullable();
            $table->string('password')->nullable();
            $table->string('status')->nullable();
            $table->string('is_deleted')->nullable();   
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
