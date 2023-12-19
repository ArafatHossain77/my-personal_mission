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
        Schema::table('personal_cv', function (Blueprint $table) {
            $table->string('full_name', 200)->after('id');
            $table->string('father_name', 200)->after('first_name');
            $table->string('mother_name', 200)->after('first_name');
            $table->string('date_of_birth');
            $table->string('about_me');
            $table->string('present_address');
            $table->string('city');
            $table->string('region');
            $table->string('zip_code');
            $table->string('zip_code');
            $table->string('email');
            $table->string('social_link');
            $table->string('mobile_number');
            $table->string('emergency_contact');
            $table->string('level_of_education');
            $table->string('major_group');
            $table->string('result_division_class');
            $table->string('marks');
            $table->string('years_of_passing');
            $table->string('institute_name');
            $table->string('company_name');
            $table->string('company_business');
            $table->string('designation');
            $table->string('department');
            $table->string('responsibility');
            $table->string('company_location');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('personal_cv', function (Blueprint $table) {
            //
        });
    }
};
