<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIproWebToolUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ipro_web_tool_user', function (Blueprint $table) {
            $table->id();
            $table->string('uuid',100);
            $table->string('ipro_userid',255);
            $table->string('web_tool_id',100);
            $table->string('userid',255)->nullable();
            $table->string('user_email',255);
            $table->bigInteger('user_pml')->nullable();
            $table->string('user_account_id',255)->nullable();
            $table->string('user_host_key',255)->nullable();
            $table->string('user_first_name',500)->nullable();
            $table->string('user_last_name',500)->nullable();
            $table->string('user_type',3)->nullable();
            $table->string('user_role_name',100)->nullable();
            $table->string('client_id',500)->nullable();
            $table->string('authen_request_key',255);
            $table->string('authen_access_key',255)->nullable();
            $table->string('authen_flag',1)->nullable();
            $table->string('default_flag',1)->nullable();
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
        Schema::dropIfExists('ipro_web_tool_user');
    }
}
