<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIproLoungeRoomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ipro_lounge_room', function (Blueprint $table) {
            $table->id();
            $table->string('uuid',100);
            $table->string('userid',255);
            $table->string('data_type',20)->default('bundle');
            $table->string('room_type',20)->default('free');
            $table->string('title',255)->nullable();
            $table->text('description')->nullable();
            $table->integer('ordering')->default(1);
            $table->text('data')->nullable();
            $table->dateTime('created');
            $table->integer('created_by')->default(0);
            $table->dateTime('modified');
            $table->integer('modified_by');
            $table->integer('delflag')->default(0);
            $table->dateTime('deleted')->nullable();
            $table->integer('deleted_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ipro_lounge_room');
    }
}
