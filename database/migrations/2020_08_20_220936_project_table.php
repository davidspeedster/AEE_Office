<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('projectName');
            $table->string('projectCategoryName')->nullable()->default("N/A");
            $table->string("client");
            $table->string("involvement");
            $table->string("architect");
            $table->string("contractor")->default("N/A");
            $table->longText("description");
            $table->string("duration");
            $table->string("status");
            $table->string("location");
            $table->string("isForMain");
            $table->string("isFeatured");
            $table->string('image')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
