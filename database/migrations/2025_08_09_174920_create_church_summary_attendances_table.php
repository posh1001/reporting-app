<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('church_summary_attendances', function (Blueprint $table) {
           $table->id();
            $table->string('church');
            $table->integer('membership_strength')->default(0);
            $table->integer('confirmed_via_link')->default(0);
            $table->integer('yet_to_confirm')->default(0);
            $table->integer('coming_with_own_cars')->default(0);
            $table->integer('coming_with_bus')->default(0);
            $table->integer('expecting_healing')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('church_summary_attendances');
    }
};
