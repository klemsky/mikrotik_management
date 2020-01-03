<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVpnAclListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vpn_acl_lists', function (Blueprint $table) {
            $table->unsignedBigInteger('vpn_user_group_id');
            $table->bigInteger('no_ticket');
            $table->string('address');
            $table->bigInteger('no_ticket')->nullable();
            $table->boolean('completed');
            $table->boolean('rejected');
            $table->boolean('active');
            $table->foreign('vpn_user_group_id')->references('id')->on('vpn_user_groups');
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
        Schema::dropIfExists('vpn_acl_lists');
    }
}
