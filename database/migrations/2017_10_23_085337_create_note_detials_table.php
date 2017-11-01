<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNoteDetialsTable extends Migration {

	public function up()
	{
		Schema::create('note_detials', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('note_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('note_detials');
	}
}