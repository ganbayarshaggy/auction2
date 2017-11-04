<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAddresesTable extends Migration {

	public function up()
	{
		Schema::create('addreses', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->integer('type');
			$table->integer('invitation_id');
		});
	}

	public function down()
	{
		Schema::drop('address');
	}
}