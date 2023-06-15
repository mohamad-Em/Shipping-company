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
        Schema::create('customes', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->string('fullName');
            $table->string('phone');
            $table->string('image');
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customes');
    }
};
