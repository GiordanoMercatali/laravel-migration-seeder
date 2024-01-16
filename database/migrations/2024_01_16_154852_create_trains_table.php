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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('company', 15);
            $table->string('start_station', 50);
            $table->string('arrival_station', 50);
            $table->datetime('start_time');
            $table->datetime('arrival_time');
            $table->tinyInteger('coach')->unsigned();
            $table->boolean('is_on_time')->default(0);
            $table->boolean('has_been_canceled')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
