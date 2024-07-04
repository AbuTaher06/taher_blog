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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Make sure this matches the 'id' type in 'users' table
            $table->unsignedBigInteger('category_id'); // Make sure this matches the 'id' type in 'categories' table
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('body');
            $table->bigInteger('views')->default(0);
            $table->timestamps();

            // Define foreign key constraints after columns are defined
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreign('categories_id')->references('id')->on('categories')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
