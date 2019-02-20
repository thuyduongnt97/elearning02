<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('exam_time');
            $table->date('create_time');
            $table->string('status', 20);
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('subject_id');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('exams', function (Blueprint $table) {
            $table->dropForeign('exams_user_id_foreign');
            $table->dropForeign('exams_subject_id_foreign');
        });
        
        Schema::dropIfExists('exams');
    }
}
