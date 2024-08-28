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
        Schema::create('user_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('company')->nullable();
            $table->string('description')->nullable();
            $table->string('work_type')->nullable();
            $table->string('work_mode')->nullable();
            $table->json('skills')->nullable();
            $table->string('payment_type')->nullable();
            $table->string('payment_amount')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('country')->nullable();
            $table->unsignedBigInteger('skill_category_id')->nullable();
            $table->unsignedBigInteger('employer_id')->nullable()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_jobs');
    }
};
