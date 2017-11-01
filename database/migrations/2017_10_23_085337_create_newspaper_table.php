<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNewspaperTable extends Migration {

	public function up()
	{
		Schema::create('newspaper', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 255);
			$table->string('number');
			$table->date('date');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('newspaper');
	}
}