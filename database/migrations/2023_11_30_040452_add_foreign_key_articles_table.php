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
        //
        Schema::table('articles', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('conference_id')->references('id')->on('conferences');
            $table->foreign('topic_id')->references('id')->on('topics');
            $table->foreign('review_article_id')->references('id')->on('review_articles');
            $table->foreign('auth_conf_file')->references('id')->on('author_conference_files');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('articles', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['conference_id']);
            $table->dropForeign(['topic_id']);
            $table->dropForeign(['review_article_id']);
            $table->dropForeign(['auth_conf_file']);
            $table->dropForeign(['created_by']);
            $table->dropForeign(['updated_by']);
        });
    }
};
