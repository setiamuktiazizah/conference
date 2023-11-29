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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_conference');
            $table->unsignedBigInteger('id_article');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_form');
            $table->string('revision_path');
            $table->float('score');
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->timestamps();
            $table->foreign('id_conference')->references('id')->on('conferences');
            $table->foreign('id_article')->references('id')->on('articles');
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_form')->references('id')->on('forms');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
