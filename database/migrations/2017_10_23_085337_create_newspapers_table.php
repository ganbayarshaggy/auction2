<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNewspapersTable extends Migration {

	public function up()
	{
		Schema::create('newspapers', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 255);
			$table->string('number');
			$table->date('date');
			$table->integer('invitation_id');
		});
	}

	public function down()
	{
		Schema::drop('newspaper');
	}
}