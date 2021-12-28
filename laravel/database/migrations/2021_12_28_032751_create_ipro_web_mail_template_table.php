<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIproWebMailTemplateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ipro_web_mail_template', function (Blueprint $table) {
            $table->id();
            $table->string('meeting_type',100);
            $table->string('mail_subject',1000)->nullable();
            $table->text('mail_body_main')->nullable();
            $table->text('mail_body_guide')->nullable();
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
        Schema::dropIfExists('ipro_web_mail_template');
    }
}
