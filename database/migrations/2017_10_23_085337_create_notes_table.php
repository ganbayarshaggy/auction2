<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNotesTable extends Migration {

	public function up()
	{
		Schema::create('notes', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('auction_id')->unsigned();
			$table->integer('bidder_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('note');
	}
}