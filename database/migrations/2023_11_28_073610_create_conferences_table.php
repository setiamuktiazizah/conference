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
            $table->unsignedBigInteger('id_reviewer');
            $table->string('name');
            $table->string('venue');
            $table->string('type');
            $table->unsignedBigInteger('total_reviewer');
            $table->string('logo');
            $table->dateTime('timezone');
            $table->string('url');
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->timestamps();
        });
        Schema::table('conferences', function (Blueprint $table) {
            $table->foreign('id_reviewer')->references('id')->on('reviewers');
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
