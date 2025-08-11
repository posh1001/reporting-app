<?php

// database/migrations/2025_08_11_000000_create_dignitaries_reports_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDignitariesReportsTable extends Migration
{
    public function up()
    {
        Schema::create('dignitaries_reports', function (Blueprint $table) {
            $table->id();
            $table->string('church');
            $table->unsignedInteger('dignitaries_invited_today')->nullable();
            $table->unsignedInteger('number_confirmed_to_attend')->nullable();
            $table->string('gift_distributed_today')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dignitaries_reports');
    }
}
