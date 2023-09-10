<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('country', function (Blueprint $table) {
            $table->id();
            $table->string('iso')->nullable();
            $table->string('name')->nullable();
            $table->string('nicename')->nullable();
            $table->string('iso3')->nullable();
            $table->string('numcode')->nullable();
            $table->string('phonecode');
            $table->timestamps();          
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('country');
    }
};
