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
        Schema::create('sound_review_post_detail', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sound_review_post_id')->references('id')->on('sound_review_posts');
            $table->text('item_name');
            $table->text('item_description');
            $table->integer('number_of_Like');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sound_review_post_detail');
    }
};
