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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_topic');
            $table->unsignedBigInteger('id_review_article');
            $table->unsignedBigInteger('id_auth_conf_file');
            $table->string('title');
            $table->text('abstract');
            $table->string('status');
            $table->string('filepath');
            $table->string('filepath_turnitin');
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->timestamps();
        });
        Schema::table('articles', function (Blueprint $table) {
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_topic')->references('id')->on('topics');
            $table->foreign('id_review_article')->references('id')->on('articles');
            $table->foreign('id_auth_conf_file')->references('id')->on('author_conference_file_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
