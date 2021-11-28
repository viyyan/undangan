<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIndustryResearchIdInCaseStudiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('case_studies', function (Blueprint $table) {
            $table->dropColumn('sub_title_1');
            $table->dropColumn('sub_title_2');
            $table->dropColumn('sub_title_3');
            $table->dropColumn('sub_content_1');
            $table->dropColumn('sub_content_2');
            $table->dropColumn('sub_content_3');
            $table->dropColumn('category_id');
            $table->dropColumn('author_id');

            $table->text('objective')->nullable();
            $table->text('approach')->nullable();
            $table->text('result')->nullable();
            $table->text('recomendation')->nullable();
            $table->string('tools')->nullable();
            $table->json('cat_research_ids');
            $table->bigInteger('cat_industry_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('case_studies', function (Blueprint $table) {
            $table->string('sub_title_1')->nullable();
            $table->string('sub_title_2')->nullable();
            $table->string('sub_title_3')->nullable();
            $table->text('sub_content_1')->nullable();
            $table->text('sub_content_2')->nullable();
            $table->text('sub_content_3')->nullable();
            $table->bigInteger('category_id');
            $table->bigInteger('author_id');

            $table->dropColumn('objective');
            $table->dropColumn('approach');
            $table->dropColumn('result');
            $table->dropColumn('recomendation');
            $table->dropColumn('tools');
            $table->dropColumn('cat_research_ids');
            $table->dropColumn('cat_industry_id');
        });
    }
}
