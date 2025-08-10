<?php

// database/migrations/2025_08_09_000000_create_transit_media_reports_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransitMediaReportsTable extends Migration
{
    public function up()
    {
        Schema::create('transit_media_reports', function (Blueprint $table) {
            $table->id();
            $table->string('group')->nullable();
            $table->string('church')->nullable();
            $table->integer('total_number_in_lagos_island')->nullable();
            $table->integer('location')->nullable();
            $table->integer('total_number_in_eti_osa')->nullable();
            $table->integer('number_conmissioned_in_eti_osa')->nullable();
            $table->integer('total_number_in_ibeju_lekki')->nullable();
            $table->integer('total_number_commissioned_in_ibeju_lekki')->nullable();
            $table->integer('total_number_in_epe')->nullable();
            $table->integer('total_number_commissioned_in_epe')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('transit_media_reports');
    }
}
