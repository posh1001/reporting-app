<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('bus_service_reports', function (Blueprint $table) {
            $table->id();
            $table->string('church');
            $table->string('cell_responsible')->nullable();
            $table->string('leader_responsible')->nullable();
            $table->integer('number_to_deliver')->default(0);
            $table->string('catchment_name')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bus_service_reports');
    }
};
