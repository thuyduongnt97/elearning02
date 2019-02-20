<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamCategoryQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_category_question', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quantity');
            $table->unsignedInteger('category_question_id');
            $table->unsignedInteger('exam_id');

            $table->foreign('category_question_id')->references('id')->on('category_questions')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('exam_id')->references('id')->on('exams')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('exam_category_question', function (Blueprint $table) {
            $table->dropForeign('exam_category_question_category_question_id_foreign');
            $table->dropForeign('exam_category_question_exam_id_foreign');
        });
        
        Schema::dropIfExists('exam_category_question');
    }
}
