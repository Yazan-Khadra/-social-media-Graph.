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
        Schema::create('_posts__users__pivot', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId("user_id")->references("id")->on("users")->cascadeOnDelete();
            $table->foreignId("post_id")->references("id")->on("posts")->cascadeOnDelete();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_posts__users__pivot');
    }
};
