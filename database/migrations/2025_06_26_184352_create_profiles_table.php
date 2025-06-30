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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->text('bio')->nullable();
            $table->string('name');
            $table->date('birth_date');
            $table->integer('age');
            $table->string('website')->nullable();
            $table->string('degree')->nullable();
            $table->string('phone');
            $table->string('email');
            $table->string('address');
            $table->enum('freelance', ['Available', 'Not Available']);
            $table->string('pic'); // Optional profile picture field
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
