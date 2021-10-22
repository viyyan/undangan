<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeStatusIntegerToAllTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('banners', function (Blueprint $table) {
            $table->integer('status')->change();
        });
        Schema::table('posts', function (Blueprint $table) {
            $table->integer('status')->change();
        });
        Schema::table('categories', function (Blueprint $table) {
            $table->integer('status')->change();
        });
        Schema::table('products', function (Blueprint $table) {
            $table->integer('status')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('banners', function (Blueprint $table) {
            $table->bigInteger('status')->change();
        });
        Schema::table('posts', function (Blueprint $table) {
            $table->bigInteger('status')->change();
        });
        Schema::table('categories', function (Blueprint $table) {
            $table->bigInteger('status')->change();
        });
        Schema::table('products', function (Blueprint $table) {
            $table->bigInteger('status')->change();
        });
    }
}
