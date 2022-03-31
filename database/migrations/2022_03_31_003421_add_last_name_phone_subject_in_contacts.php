<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLastNamePhoneSubjectInContacts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->string('last_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('subject')->nullable();
            $table->dropColumn('file');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->dropColumn('last_name');
            $table->dropColumn('phone');
            $table->dropColumn('subject');
            $table->string('file')->nullable();
        });
    }
}
