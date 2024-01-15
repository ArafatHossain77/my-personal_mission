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
        Schema::create('contact_info_resumes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('email');
            $table->string('social_link');
            $table->string('mobile_number');
            $table->string('emergency_contact');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_info_resumes');
    }
};
