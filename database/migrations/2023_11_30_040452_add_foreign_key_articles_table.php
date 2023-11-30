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
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_topic')->references('id')->on('topics');
            $table->foreign('id_review_article')->references('id')->on('articles');
            $table->foreign('id_auth_conf_file')->references('id')->on('author_conference_files');
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
            $table->dropForeign(['id_user']);
            $table->dropForeign(['id_topic']);
            $table->dropForeign(['id_review_article']);
            $table->dropForeign(['id_auth_conf_file']);
            $table->dropForeign(['created_by']);
            $table->dropForeign(['updated_by']);
        });
    }
};
