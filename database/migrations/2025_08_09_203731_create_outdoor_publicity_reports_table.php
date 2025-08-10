<?php

// database/migrations/2025_08_09_000001_create_outdoor_publicity_reports_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutdoorPublicityReportsTable extends Migration
{
    public function up()
    {
        Schema::create('outdoor_publicity_reports', function (Blueprint $table) {
            $table->id();

            $table->string('group');
            $table->string('church');
            $table->string('lga');
            $table->integer('number_of_ward')->nullable();
            $table->integer('number_of_street')->nullable();
            $table->integer('number_of_busstop_placed')->nullable();
            $table->integer('number_of_homes_placed')->nullable();
            $table->integer('number_of_business_placed')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('outdoor_publicity_reports');
    }
}

