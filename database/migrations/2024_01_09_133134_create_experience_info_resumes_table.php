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
        Schema::create('experience_info_resumes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('company_name');
            $table->string('company_business');
            $table->string('designation');
            $table->string('department');
            $table->string('responsibility');
            $table->string('company_location');
            $table->string('employment_period');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experience_info_resumes');
    }
};
