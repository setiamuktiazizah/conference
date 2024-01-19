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
        Schema::table('reviews', function (Blueprint $table) {
            $table->foreign('conference_id')->references('id')->on('conferences');
            $table->foreign('article_id')->references('id')->on('articles');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('form_id')->references('id')->on('forms');
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
        Schema::table('reviews', function (Blueprint $table) {
            $table->dropForeign(['conference_id']);
            $table->dropForeign(['article_id']);
            $table->dropForeign(['user_id']);
            $table->dropForeign(['form_id']);
            $table->dropForeign(['created_by']);
            $table->dropForeign(['updated_by']);
        });
    }
};
