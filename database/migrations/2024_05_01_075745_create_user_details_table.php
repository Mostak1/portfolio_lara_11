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
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned()->unique();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('full_name');
            $table->string('image');
            $table->string('present_address')->nullable();
            $table->string('permanent_address')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('alternative_mobile_no')->nullable();
            $table->string('email')->nullable();
            $table->string('alternative_email')->nullable();
            $table->text('career_object')->nullable();
            $table->string("father_name")->nullable();
            $table->string("mother_name")->nullable();
            $table->date("date_of_birth")->nullable();
            $table->enum('gender', ['Male', 'Female', 'Other'])->nullable();
            $table->enum('marital_status', ['Single', 'Married', 'Divorced', 'Widowed'])->nullable();
            $table->string("nationality")->nullable();
            $table->string("religion")->nullable();
            $table->string("blood_group")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_details');
    }
};
