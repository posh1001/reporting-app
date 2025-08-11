<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('group_overall_registration_reports', function (Blueprint $table) {
            $table->id();
            $table->string('church_group');
            $table->integer('attendance_target')->default(0);
            $table->integer('confirmed_via_link')->default(0);
            $table->integer('yet_to_confirm')->default(0);
            $table->integer('yet_to_be_invited')->default(0);
            $table->integer('expecting_healing')->default(0);
            $table->integer('expected_attendance')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('group_overall_registration_reports');
    }
};
