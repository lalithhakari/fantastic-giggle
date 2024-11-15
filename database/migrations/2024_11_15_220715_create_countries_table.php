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
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cca2');
            $table->string('cca3');
            $table->string('ccn3');
            $table->string('flag');
            $table->string('flag_cdn');
            $table->string('region');
            $table->json('postal_code');
            $table->string('currency_name');
            $table->string('currency_code');
            $table->string('currency_symbol');
            $table->boolean('is_active');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};
