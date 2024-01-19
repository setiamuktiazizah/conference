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
        Schema::create('conferences', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reviewer_id')->nullable();
            $table->unsignedBigInteger('topic_id');
            $table->unsignedBigInteger('schedule_id');
            $table->string('name');
            $table->string('venue');
            $table->string('url_venue');
            $table->string('type');
            $table->unsignedBigInteger('total_reviewer');
            $table->string('logo');
            $table->dateTime('timezone');
            $table->string('url');
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conferences');
    }
};
