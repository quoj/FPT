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
        Schema::create('books', function (Blueprint $table) {
            // Định nghĩa cột bookid với kiểu bigIncrements và là khóa chính
            $table->bigIncrements("bookid");
            // Định nghĩa cột authorid với kiểu integer
            $table->integer("authorid");
            // Định nghĩa các cột khác
            $table->string("title", 55);
            $table->string("ISBN", 25);
            $table->smallInteger("pub_year");
            $table->tinyInteger("available");
            // Các cột timestamps
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
