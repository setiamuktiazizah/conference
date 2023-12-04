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
            $table->foreign('id_conference')->references('id')->on('conferences');
            $table->foreign('id_article')->references('id')->on('articles');
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_form')->references('id')->on('forms');
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
            $table->dropForeign(['id_conference']);
            $table->dropForeign(['id_article']);
            $table->dropForeign(['id_user']);
            $table->dropForeign(['id_form']);
            $table->dropForeign(['created_by']);
            $table->dropForeign(['updated_by']);
        });
    }
};