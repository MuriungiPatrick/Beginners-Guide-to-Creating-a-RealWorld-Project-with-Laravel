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
        Schema::disableforeignKeyConstraints();
        Schema::create('jobs', function (Blueprint $table) {
          $table->increments('id');
            $table->string('job_title');
            $table->string('job_types');
            $table->text('job_description');
            $table->double('salary');
            $table->string('slug')->unique();
            $table->integer('posted_by')->unsigned();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('posted_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');

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
