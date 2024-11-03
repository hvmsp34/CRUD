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
        Schema::create('sim_cards', function (Blueprint $table) {
            $table->unsignedInteger('IMEI');
            $table->timestamps('date_create');
            $table->unsignedInteger('number');
            $table->foreignId('client_id')->constrained();
            $table->foreignId('plan_id')->constrained();
            $table->boolean('visible');
            $table->integer('balance');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sim_cards');
    }
};
