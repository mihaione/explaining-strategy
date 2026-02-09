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
        Schema::create('fees', static function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('country');
            $table->string('full_fee');
            $table->string('early_bird');
            $table->string('discount_full');
            $table->string('discount_early');
            $table->string('discount_group');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fees');
    }
};
