<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMassMediaReportsTable extends Migration
{
    public function up()
    {
        Schema::create('mass_media_reports', function (Blueprint $table) {
            $table->id();
            $table->string('church')->nullable();
            $table->string('platform')->nullable();
            $table->string('location')->default(0);
            $table->integer('number_commissioned_in_eti_osa')->default(0);
            $table->integer('total_number_commissioned_in_ibeju_lekki')->default(0);
            $table->integer('total_number_commissioned_in_epe')->default(0);
            $table->integer('number_of_contact_that_have_come_to_church')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mass_media_reports');
    }
}
