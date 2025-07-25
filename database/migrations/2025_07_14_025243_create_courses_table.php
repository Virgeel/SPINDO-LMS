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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedSmallInteger('duration')->nullable();
            $table->unsignedBigInteger('uploader_id');
            $table->foreign('uploader_id')->references('id')->on('users');
            $table->text('description');
            $table->string('short_description');
            $table->string('photo')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->unsignedBigInteger('coursefor_id');
            $table->foreign('coursefor_id')->references('id')->on('job_positions');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
