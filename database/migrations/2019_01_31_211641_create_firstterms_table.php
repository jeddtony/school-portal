<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFirsttermsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firstterms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id');
            $table->integer('subject_id');
            $table->integer('studentclass_id');
            $table->integer('assessment');
            $table->integer('exam');
            $table->integer('total');
            $table->string('comment');
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
        Schema::dropIfExists('firstterms');
    }
}
