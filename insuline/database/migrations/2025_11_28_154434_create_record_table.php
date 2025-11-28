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
        Schema::create('record', function (Blueprint $table) {
            $table->id();
            $table->dateTime('record_datetime')->comment('fecha y hora del registro');
            $table->foreignId('ratio_id')->constrained('ratio')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('correction_factor_id')->constrained('correction_factor')->onDelete('cascade')->onUpdate('cascade');
            $table->decimal('food_insuline', 10, 2)->comment('insulina alimentos');
            $table->decimal('total_insuline', 10, 2)->comment('insulina total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('record');
    }
};
