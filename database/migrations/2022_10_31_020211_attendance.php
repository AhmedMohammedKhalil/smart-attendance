<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendance', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lecture_id')->unsigned();
            $table->integer('student_id')->unsigned();
            $table->dateTime('entrance_time');
            $table->foreign('lecture_id')
            ->references('id')
            ->on('lectures')->onDelete("cascade")->onUpdate("cascade");

            $table->foreign('student_id')
            ->references('id')
            ->on('students')->onDelete("cascade")->onUpdate("cascade");
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
        //
    }
};
