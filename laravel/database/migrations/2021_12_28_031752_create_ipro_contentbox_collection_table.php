<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIproContentboxCollectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ipro_contentbox_collection', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->string('uuid',100);
            $table->string('contentbox_uuid',100);
            $table->string('data_type',20);
            $table->unsignedBigInteger('content_id')->nullable()->default(0);
            $table->unsignedBigInteger('page_no')->nullable()->default(0);
            $table->unsignedBigInteger('slide_id')->nullable()->default(0);
            $table->string('story_uuid',100)->nullable();
            $table->unsignedBigInteger('bookmark_id')->nullable();
            $table->integer('ordering')->default(0);
            $table->dateTime('publication_period')->nullable();
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
        Schema::dropIfExists('ipro_contentbox_collection');
    }
}
