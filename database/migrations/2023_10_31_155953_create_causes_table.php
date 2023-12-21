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
        Schema::create('causes', function (Blueprint $table) {
            $table->id();
            $table->string('libelle');
            $table->string('photo')->nullable();
            $table->bigInteger('objectif');
            $table->bigInteger('collecte')->nullable();
            $table->text('description')->nullable();
            $table->string('galerie')->nullable();
            $table->string('status')->nullable()->default('collecte');
            $table->bigInteger('id_org');
            $table->bigInteger('id_cate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('causes');
    }
};
