<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvitationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invitations', function (Blueprint $table) {
            $table->increments('id');
            $table->datetime('rule_date');
            $table->smallInteger('rule_number');
            $table->text('intro');
            $table->datetime('enddate');
            $table->string('location', 255);
            $table->datetime('request_date');
            $table->string('request_address', 255);
            $table->string('news_webaddress', 255);
            $table->string('news_address', 255);
            $table->integer('phone_number_id');
            $table->integer('address_id');
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
        Schema::dropIfExists('invitations');
    }
}
