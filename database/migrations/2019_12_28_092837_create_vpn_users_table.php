<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVpnUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vpn_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('vpn_user_group_id');
            $table->unsignedBigInteger('user_id');
            $table->string('vpn_username');
            $table->string('remote_address')->nullable();
            $table->bigInteger('no_ticket');
            $table->dateTime('expiry_date');
            $table->boolean('completed');
            $table->boolean('rejected');
            $table->boolean('active');
            $table->foreign('vpn_user_group_id')->references('id')->on('vpn_user_groups');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vpn_users');
    }
}
