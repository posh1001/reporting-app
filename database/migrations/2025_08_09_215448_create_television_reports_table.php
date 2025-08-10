<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTelevisionReportsTable extends Migration
{
    public function up()
    {
        Schema::create('television_reports', function (Blueprint $table) {
            $table->id();

            $table->string('group');
            $table->string('tv_station');
            $table->integer('total_slot_required')->default(0);
            $table->integer('total_podcast_required')->default(0);
            $table->integer('total_slots_done')->default(0);
            $table->integer('total_slots_yet_to_be_commissioned')->default(0);
            $table->integer('resources_required')->default(0);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('television_reports');
    }
}
