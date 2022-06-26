<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('user_id');
            $table->string('name');
            $table->string('slug');
            $table->bigInteger('hero_id')->nullable();
            $table->bigInteger('sub_hero_id')->nullable();
            $table->string('bride')->nullable();
            $table->string('groom')->nullable();
            $table->string('bride_desc')->nullable();
            $table->string('groom_desc')->nullable();
            $table->date('event_date');
            $table->string('venue')->nullable();
            $table->string('venue_address')->nullable();
            $table->string('city')->nullable();
            $table->decimal('latitude', 11, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();
            $table->bigInteger('status');
            $table->bigInteger('type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
