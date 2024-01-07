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
        Schema::create('bookcollections', function (Blueprint $table) {
            $table->id();
            $table->string('Title')->nullable();
            $table->string('Author');
            $table->string('Penerbit');
            $table->string('Tahun');
            $table->string('Status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookcollections');
    }
};