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
        Schema::create('organisations', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('logo')->nullable();
            $table->string('responsable')->nullable();
            $table->text('description')->nullable();
            $table->string('lien_facebook')->nullable();
            $table->string('lien_insta')->nullable();
            $table->string('numero')->nullable();
            $table->string('email')->nullable();
            $table->string('whatsapp')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organisations');
    }
};
