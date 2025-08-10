<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('call_center_reports', function (Blueprint $table) {
            $table->id();
            $table->string('church');
            $table->integer('database_type');
            $table->integer('number_confirmed_today')->default(0);
            $table->integer('number_yet_to_confirm')->default(0);
            $table->integer('number_expecting_healing')->default(0);
            $table->string('location_coming_from');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('call_center_reports');
    }
};
