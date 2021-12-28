<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIproWebToolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ipro_web_tool', function (Blueprint $table) {
            $table->id();
            $table->string('web_tool_id',100);
            $table->string('web_tool_name',100);
            $table->string('sort_no',1)->nullable();
            $table->string('default_flag',1);
            $table->string('on_service_flag',1);
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
        Schema::dropIfExists('ipro_web_tool');
    }
}
