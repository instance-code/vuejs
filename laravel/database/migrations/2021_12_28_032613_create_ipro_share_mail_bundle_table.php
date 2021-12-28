<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIproShareMailBundleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ipro_share_mail_bundle', function (Blueprint $table) {
            $table->id();
            $table->string('uuid',100);
            $table->string('meeting_uuid',100);
            $table->text('meeting_url')->nullable();
            $table->string('userid',255);
            $table->string('mail_send_type',10);
            $table->string('owner_name',400)->nullable();
            $table->string('owner_mail',255);
            $table->text('owner_signature')->nullable();
            $table->string('mail_subject',1000);
            $table->text('mail_body');
            $table->integer('mail_template_id')->nullable();
            $table->string('status',1);
            $table->dateTime('send_date')->nullable();
            $table->dateTime('reserve_date')->nullable();
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
        Schema::dropIfExists('ipro_share_mail_bundle');
    }
}
