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
        Schema::create('dons', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_cause')->nullable();
            $table->string('nom')->nullable();
            $table->string('numero')->nullable();
            $table->string('email')->nullable();
            $table->string('montant')->nullable();
            $table->string('montant_avant')->nullable();
            $table->string('montant_apres')->nullable();
            $table->string('transaction_id')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dons');
    }
};
