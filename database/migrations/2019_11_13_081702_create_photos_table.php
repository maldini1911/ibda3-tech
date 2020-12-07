<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePhotosTable extends Migration {

	public function up()
	{
		Schema::create('photos', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('url');
			$table->string('ext');
			$table->integer('project_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('photos');
	}
}