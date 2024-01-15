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
        Schema::create('personal_info_resumes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('full_name', 200);
            $table->string('father_name', 200);
            $table->string('mother_name', 200);
            $table->string('date_of_birth');
            $table->string('about_me', 1000);
            $table->string('present_address', 200);
            $table->string('city');
            $table->string('region');
            $table->string('zip_code');
            $table->string('country');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_info_resumes');
    }
};

