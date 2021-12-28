<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIproMailSenderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ipro_mail_sender', function (Blueprint $table) {
            $table->id();
            $table->string('ipro_userid',255);
            $table->string('owner_name',400)->nullable();
            $table->string('owner_mail',255);
            $table->text('owner_signature')->nullable();
            $table->string('sort_no',1)->nullable();
            $table->string('default_flag',1)->default(0);
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
        Schema::dropIfExists('ipro_mail_sender');
    }
}
