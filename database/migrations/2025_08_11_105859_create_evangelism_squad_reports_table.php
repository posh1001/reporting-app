<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('evangelism_squad_reports', function (Blueprint $table) {
            $table->id();
            $table->string('location');
            $table->unsignedInteger('number_led_to_christ')->default(0);
            $table->unsignedInteger('number_confirmed_for_attendance')->default(0);
            $table->unsignedInteger('data_collated')->default(0);
            $table->unsignedInteger('testimonies')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('evangelism_squad_reports');
    }
};
