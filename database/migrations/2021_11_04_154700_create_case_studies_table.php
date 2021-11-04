<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaseStudiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case_studies', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('hero_id')->nullable();
            $table->string('title');
            $table->string('slug');
            $table->string('excerpt')->nullable();
            $table->string('sub_title_1')->nullable();
            $table->string('sub_title_2')->nullable();
            $table->string('sub_title_3')->nullable();
            $table->text('sub_content_1')->nullable();
            $table->text('sub_content_2')->nullable();
            $table->text('sub_content_3')->nullable();
            $table->bigInteger('author_id');
            $table->bigInteger('category_id');
            $table->boolean('featured')->default(false);
            $table->integer('status');
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
        Schema::dropIfExists('case_studies');
    }
}
