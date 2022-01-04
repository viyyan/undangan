<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropSubOptions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('quiz_option_children', function (Blueprint $table) {
            $table->dropColumn('sub_options');
        });
        Schema::table('quiz_options', function (Blueprint $table) {
            $table->dropColumn('sub_options');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('quiz_option_children', function (Blueprint $table) {
            $table->json('sub_options')->nullable();
        });
        Schema::table('quiz_options', function (Blueprint $table) {
            $table->json('sub_options')->nullable();
        });
    }
}
