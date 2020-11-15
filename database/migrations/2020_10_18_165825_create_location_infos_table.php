<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location_infos', function (Blueprint $table) {
            $table->id();
            $table->string('location_info')->nullable();
            $table->string('po_box_info')->nullable();
            $table->string('telephone_numbers')->nullable();
            $table->string('fax_info')->nullable();
            $table->string('email')->nullable();
            $table->longText('google_map_link')->nullable();
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
        Schema::dropIfExists('location_infos');
    }
}
