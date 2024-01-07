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
        Schema::create('historyBorrow', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(App\Models\Collection::class);
            $table->string('bookTitle');
            $table->string('name');
            $table->date('BorrowedTime');
            $table->date('ReturnedTime');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('history');
    }
};
