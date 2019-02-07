<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('category');
            $table->boolean('science')->nullable();
            $table->boolean('commercial')->nullable();
            $table->boolean('arts')->nullable();
            $table->timestamps();
        });

        Schema::create('subject_user', function (Blueprint $table){
//            $table->increments('id');
            $table->integer('subject_id');
            $table->integer('user_id');
            $table->primary(['subject_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subjects');
    }
}
