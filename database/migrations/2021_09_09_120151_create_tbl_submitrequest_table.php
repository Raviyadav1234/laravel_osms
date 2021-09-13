<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblSubmitrequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_submitrequest', function (Blueprint $table) {
            $table->id();
            $table->text('request_info');
            $table->text('request_desc');
            $table->string('requester_name');
            $table->text('requester_add1');
            $table->text('requester_add2');
            $table->string('requester_city');
            $table->string('requester_state');
            $table->string('requester_pin');
            $table->string('requester_email');
            $table->string('requester_mobile');
            $table->string('request_date');
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
        Schema::dropIfExists('tbl_submitrequest');
    }
}
