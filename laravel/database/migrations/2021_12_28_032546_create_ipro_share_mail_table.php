<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIproShareMailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ipro_share_mail', function (Blueprint $table) {
            $table->id();
            $table->string('uuid',100);
            $table->bigInteger('mail_group_id');
            $table->string('meeting_uuid',100);
            $table->string('meeting_member_uuid',100);
            $table->text('meeting_url')->nullable();
            $table->string('fac_cd',100)->nullable();
            $table->string('dep_cd',100)->nullable();
            $table->string('cust_cd',100)->nullable();
            $table->string('mr_cd',255)->nullable();
            $table->string('facility_name',800)->nullable();
            $table->string('recipient',400)->nullable();
            $table->string('mail_address',255)->nullable();
            $table->string('mail_subject',1000)->nullable();
            $table->text('mail_body')->nullable();
            $table->string('send_result',1);
            $table->integer('link_open_count')->nullable();
            $table->dateTime('link_open_first_date')->nullable();
            $table->dateTime('link_open_last_date')->nullable();
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
        Schema::dropIfExists('ipro_share_mail');
    }
}
