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
        Schema::table('conferences', function (Blueprint $table) {
            $table->foreign('reviewer_id')->references('id')->on('reviewers');
            $table->foreign('topic_id')->references('id')->on('topics');
            $table->foreign('schedule_id')->references('id')->on('schedules');
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
        Schema::table('conferences', function (Blueprint $table) {
            $table->dropForeign(['reviewer_id']);
            $table->dropForeign(['topic_id']);
            $table->dropForeign(['schedule_id']);
            $table->dropForeign(['created_by']);
            $table->dropForeign(['updated_by']);
        });
    }
};
