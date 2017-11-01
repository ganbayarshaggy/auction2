<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePhoneNumberTable extends Migration {

	public function up()
	{
		Schema::create('phone_number', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('phone_number');
			$table->tinyInteger('type');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('phone_number');
	}
}