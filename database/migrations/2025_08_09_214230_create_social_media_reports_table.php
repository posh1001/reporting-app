<?php

// database/migrations/2025_08_09_000002_create_social_media_reports_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialMediaReportsTable extends Migration
{
    public function up()
    {
        Schema::create('social_media_reports', function (Blueprint $table) {
            $table->id();
            $table->string('social_media');
            $table->integer('total_estimated_reach')->nullable();
            $table->string('engagement')->nullable();
            $table->string('conversion')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('social_media_reports');
    }
}

