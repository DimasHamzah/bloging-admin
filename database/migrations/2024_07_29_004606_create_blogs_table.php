<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new


class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->foreignId('user_id')->constrained('users', 'id');
            $table->foreignId('category_id')->constrained('categories', 'id');
            $table->string('title', 25);
            $table->string('subtitle', 50);
            $table->text('description');
            $table->longText('images');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
