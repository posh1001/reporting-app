<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

 class CreateProgramOrganizationsTable extends Migration

{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
          Schema::create('program_organizations', function (Blueprint $table) {
    $table->id();
    $table->string('sub_committee');
    $table->string('chairman');
    $table->string('status_plan')->nullable();
    $table->string('status_budget')->nullable();
    $table->unsignedInteger('workforce_capacity')->nullable();
    $table->dateTime('prayer_schedule')->nullable();
    $table->dateTime('meeting_schedule')->nullable();
    $table->string('meeting_participants')->nullable();
    $table->string('key_decision_action_points')->nullable();
    $table->string('next_action')->nullable();
    $table->string('remarks')->nullable();
    $table->timestamps();
});

    }


    public function down(): void
    {
        Schema::dropIfExists('program_organizations');
    }
};
