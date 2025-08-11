<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRadioPublicityReportsTable extends Migration
{
    public function up()
    {
        Schema::create('radio_publicity_reports', function (Blueprint $table) {
            $table->id();
            $table->string('stations')->nullable();
            $table->integer('total_slot_required')->default(0);
            $table->integer('total_completed')->default(0);
            $table->integer('total_calls_received')->default(0);
            $table->integer('seats_reserved')->default(0);
            $table->integer('number_registered')->default(0);
            $table->integer('slots_yet_to_be_commissioned')->default(0);
            $table->integer('number_of_contact_that_have_come_to_church')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('radio_publicity_reports');
    }
}
