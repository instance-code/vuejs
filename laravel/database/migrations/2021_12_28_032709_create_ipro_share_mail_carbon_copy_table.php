<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIproShareMailCarbonCopyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ipro_share_mail_carbon_copy', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->string('uuid',100);
            $table->unsignedBigInteger('mail_group_id');
            $table->string('type',3);
            $table->string('recipient',255)->nullable();
            $table->string('mail_address',255)->nullable();
            $table->string('send_result',1)->default(0);
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
        Schema::dropIfExists('ipro_share_mail_carbon_copy');
    }
}
