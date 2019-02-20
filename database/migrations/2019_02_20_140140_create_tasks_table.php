<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->date('start_test')->nullable();
            $table->date('end_test')->nullable();
            $table->string('file_log', 255)->nullable();
            $table->integer('correct_answer')->nullable();
            $table->float('point', 8, 2)->nullable();
            $table->unsignedInteger('exam_id');
            $table->unsignedInteger('user_id');

            $table->foreign('exam_id')->references('id')->on('exams')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->dropForeign('tasks_exam_id_foreign');
            $table->dropForeign('tasks_user_id_foreign');
        });
        
        Schema::dropIfExists('tasks');
    }
}
