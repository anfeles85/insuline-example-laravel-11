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
        Schema::create('food', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('nombre');
            $table->string('portion')->comment('porción');
            $table->integer('weight_gr')->comment('peso en gramos');
            $table->integer('chos_gr')->comment('gramos CHOs');
            $table->foreignId('category_id')->constrained('category')->onDelete('cascade')->onUpdate('cascade')->comment('FK tabla category');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food');
    }
};
