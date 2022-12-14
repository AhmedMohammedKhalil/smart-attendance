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
        Schema::create('subjects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('content');
            $table->string('approval')->default('لم يتم الرد');
            $table->integer('department_id')->unsigned();
            $table->foreign('department_id')
                ->references('id')->on('departments')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->integer('professor_id')->unsigned();
            $table->foreign('professor_id')
                ->references('id')->on('professors')
                ->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('subjects');
    }
};
