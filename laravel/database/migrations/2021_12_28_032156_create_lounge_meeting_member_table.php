<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoungeMeetingMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lounge_meeting_member', function (Blueprint $table) {
            $table->id();
            $table->string('uuid',100);
            $table->string('meeting-uuid',100);
            $table->string('member_type',10);
            $table->tinyInteger('auth_type_owner')->default(0);
            $table->tinyInteger('auth_type_alternate_owner')->default(0);
            $table->tinyInteger('auth_type_speaker')->default(0);
            $table->tinyInteger('auth_type_guest')->default(0);
            $table->tinyInteger('is_role_changed')->default(0);
            $table->string('fac_cd',50)->nullable();
            $table->string('dep_cd',50)->nullable();
            $table->string('cust_cd',50)->nullable();
            $table->string('mr_cd',50)->nullable();
            $table->string('web_tool_user_uuid',50)->nullable();
            $table->string('status',50)->nullable();
            $table->dateTime('perform_date')->nullable();
            $table->integer('pratice_count')->nullable();
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
        Schema::dropIfExists('lounge_meeting_member');
    }
}
