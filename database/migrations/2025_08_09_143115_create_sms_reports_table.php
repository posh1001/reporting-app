<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('sms_reports', function (Blueprint $table) {
            $table->id();
            $table->string('church_group');
            $table->string('church');
            $table->enum('Type_of_Sms', ['Registration', 'Prayer Request', 'Unspecified']);
            $table->unsignedInteger('Number_As_At_Today')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sms_reports');
    }
};
