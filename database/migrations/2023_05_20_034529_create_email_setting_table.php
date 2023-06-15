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
        Schema::create('emailSettings', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
            $table->string('email_send');
            $table->string('title');
            $table->string('body');
            $table->string('ending');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emailSettings');
    }
};
