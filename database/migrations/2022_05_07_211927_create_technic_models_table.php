<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechnicModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technic_models', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('brand_id');
            $table->string('model');
            $table->text('description');
            $table->unsignedBigInteger('command_set_id');
            $table->unsignedBigInteger('type_id');
            $table->timestamps();

            $table->foreign('brand_id')->references('id')->on('brands');
            $table->foreign('command_set_id')->references('id')->on('command_sets');
            $table->foreign('type_id')->references('id')->on('technic_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('technic_models');
    }
}
