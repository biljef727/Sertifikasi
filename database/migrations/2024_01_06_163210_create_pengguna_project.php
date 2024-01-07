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
        Schema::create('pengguna_project', function (Blueprint $table) {
            $table->id();
            $table->string('Username');
            $table->string('Password');
            $table->string('Name');
            $table->string('Status');
            $table->mediumText('Profile')->nullable();
            $table->string('Delete');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengguna_project');
    }
};
