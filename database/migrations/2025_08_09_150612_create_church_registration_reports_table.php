<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('church_registration_reports', function (Blueprint $table) {
            $table->id();
            $table->string('church');
            $table->integer('attendance_target')->nullable();
            $table->integer('confirmed_via_link')->nullable();
            $table->integer('yet_to_confirm')->nullable();
            $table->integer('confirmed_via_call_center')->nullable();
            $table->integer('invitees')->nullable();
            $table->integer('expected_attendance')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('church_registration_reports');
    }
};
