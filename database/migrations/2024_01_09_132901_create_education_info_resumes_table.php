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
        Schema::create('education_info_resumes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('level_of_education');
            $table->string('major_group');
            $table->string('result_division_class');
            $table->string('marks');
            $table->string('years_of_passing');
            $table->string('institute_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education_info_resumes');
    }
};
