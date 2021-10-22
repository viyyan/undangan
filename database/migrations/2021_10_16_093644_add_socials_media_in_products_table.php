<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSocialsMediaInProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('facebook_name')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('instagram_name')->nullable();
            $table->string('instagram_url')->nullable();
            $table->integer('highlight')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('facebook_name');
            $table->dropColumn('facebook_url');
            $table->dropColumn('instagram_name');
            $table->dropColumn('instagram_url');
            $table->dropColumn('highlight');
        });
    }
}
