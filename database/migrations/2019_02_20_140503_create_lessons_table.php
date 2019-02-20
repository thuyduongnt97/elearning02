<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title');
            $table->text('content')->nullable();
            $table->string('file', 255)->nullable();
            $table->date('create_time')->nullable();
            $table->unsignedInteger('subject_id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('class_id');

            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('class_id')->references('id')->on('classes')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lessons', function (Blueprint $table) {
            $table->dropForeign('lessons_subject_id_foreign');
            $table->dropForeign('lessons_user_id_foreign');
            $table->dropForeign('lessons_class_id_foreign');
        });

        Schema::dropIfExists('lessons');
    }
}
