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
        Schema::create('populasis', function (Blueprint $table) {
            $table->id();
            $table->string('wilayah');
            $table->integer('populasi_2018');
            $table->integer('populasi_2019');
            $table->integer('populasi_2020');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('populasis');
    }
};
