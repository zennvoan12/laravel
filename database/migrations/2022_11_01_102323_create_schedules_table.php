<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->char('code_subject', 8)->index();
            $table->char('nidn', 10)->index();
            $table->char('class', 1);
            $table->string('day', 10);
            $table->timestamp('time');
            $table->foreign('code_subject')->references('code_subject')->on('subjects')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('nidn')->references('nidn')->on('lectures')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
};
