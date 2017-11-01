<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBiddersTable extends Migration {

	public function up()
	{
		Schema::create('bidders', function(Blueprint $table) {
			$table->increments('id');
			$table->string('last_name', 100);
			$table->string('first_name', 100);
			$table->string('register_number', 10);
			$table->string('agent_name', 100);
			$table->string('agent_parent', 100);
			$table->string('agent_register', 10);
			$table->float('prepayment_price');
			$table->string('prepayment_word', 255);
			$table->datetime('prepayment_date');
			$table->string('address', 255);
			$table->integer('phone_number');
			$table->string('condition_or_name', 255);
			$table->boolean('approve');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('bidder');
	}
}