<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('church_service_reports', function (Blueprint $table) {
            $table->id();
            $table->string('church');
            $table->string('product');
            $table->integer('total_produced')->default(0);
            $table->integer('total_deployed')->default(0);
            $table->integer('total_languages_for_language_church')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('church_service_reports');
    }
};
