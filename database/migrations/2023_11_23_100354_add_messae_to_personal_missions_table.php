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
        Schema::table('personal_missions', function (Blueprint $table) {
            $table->tinyInteger('message')->default(0)->comment('Your message');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('personal_missions', function (Blueprint $table) {
            $table->dropColumn([
                'user_id',
                'first_name',
                'message',

            ]);
        });
    }
};
