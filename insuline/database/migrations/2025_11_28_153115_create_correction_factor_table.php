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
        Schema::create('correction_factor', function (Blueprint $table) {
            $table->id();
            $table->integer('glycemia_min')->comment('glicemia mínima');
            $table->integer('glycemia_max')->nullable()->comment('glicemia máxima');
            $table->integer('fc')->comment('factor corrección');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('correction_factor');
    }
};
