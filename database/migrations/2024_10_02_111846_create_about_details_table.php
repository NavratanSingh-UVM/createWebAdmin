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
        Schema::create('about_details', function (Blueprint $table) {
            $table->id('about_id');
            $table->int('admin_id');
            $table->string('about_profile_img');
            $table->string('about_video_url');
            $table->string('about_heading');
            $table->string('about_content');
            $table->string('about_news');
            $table->date('about_inst_date');
            $table->date('about_update_date');
            $table->string('about_ip');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_details');
    }
};
