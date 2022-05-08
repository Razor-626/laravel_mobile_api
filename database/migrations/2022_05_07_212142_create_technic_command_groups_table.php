<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechnicCommandGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technic_command_groups', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('command_set_id');
            $table->unsignedBigInteger('command_id');
            $table->timestamps();

            $table->foreign('command_set_id')->references('id')->on('command_sets');
            $table->foreign('command_id')->references('id')->on('technic_commands');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('technic_command_groups');
    }
}
