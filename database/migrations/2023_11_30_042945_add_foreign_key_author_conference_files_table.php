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
        Schema::table('author_conference_files', function (Blueprint $table) {
            $table->foreign('article_id')->references('id')->on('articles');
            $table->foreign('filetype_id')->references('id')->on('conference_file_types');
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
        Schema::table('author_conference_files', function (Blueprint $table) {
            $table->dropForeign(['article_id']);
            $table->dropForeign(['filetype_id']);
            $table->dropForeign(['created_by']);
            $table->dropForeign(['updated_by']);
        });
    }
};
