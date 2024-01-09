<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('personal_resume', function (Blueprint $table) {
            $table->id();
            $table->string('full_name', 200);
            $table->string('father_name', 200);
            $table->string('mother_name', 200);
            $table->string('date_of_birth');
            $table->string('about_me', 1000);
            $table->string('present_address', 200);
            $table->string('city');
            $table->string('region');
            $table->string('zip_code');
            $table->string('Country');
            $table->string('social_link');
            $table->string('mobile_number');
            $table->string('email');
            $table->string('emergency_contact');
            $table->string('level_of_education', 200);
            $table->string('major_group');
            $table->string('result_division_class', 500);
            $table->string('marks', 200);
            $table->string('years_of_passing', 200);
            $table->string('institute_name', 200);
            $table->string('company_name', 200);
            $table->string('company_business', 200);
            $table->string('designation', 200);
            $table->string('department', 100);
            $table->string('responsibility', 200);
            $table->string('company_location', 100);
            $table->string('employment_period', 100);
            $table->string('highlights', 500);
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('personal_resume', function (Blueprint $table) {
            $table->string('name');

            $table->dropColumn([
                'full_name',
                'father_name',
                'mother_name',
                'date_of_birth',
                'about_me',
                'present_address',
                'city',
                'region',
                'zip_code',
                'country',
                'email',
                'social_link',
                'mobile_number',
                'email',
                'emergency_contact',
                'level_of_education',
                'major_group',
                'result_division_class',
                'marks',
                'years_of_passing',
                'institute_name',
                'company_name',
                'company_business',
                'designation',
                'department',
                'responsibility',
                'company_location',
                'employment_period',
                'highlights',
            ]);
        });
    }
};
