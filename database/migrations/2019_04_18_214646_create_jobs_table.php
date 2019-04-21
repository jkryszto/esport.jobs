<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('title');
            $table->string('alias');
            $table->integer('category_id')->unsigned();
            $table->integer('job_type_id')->unsigned();
            $table->integer('job_level_id')->unsigned();
            $table->text('description');
            $table->string('location');
            $table->integer('from')->nullable();
            $table->integer('to')->nullable();
            $table->string('currency', 3)->nullable();
            $table->string('other_apply')->nullable();
            $table->date('start_date');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('job_type_id')->references('id')->on('job_types');
            $table->foreign('job_level_id')->references('id')->on('job_levels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
