<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePagesTable extends Migration {

	public function up()
	{
		Schema::create('pages', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('title');
			$table->mediumText('content');
			$table->string('image');
			$table->boolean('show_in_menu');
			$table->string('slug');
			$table->integer('user_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('pages');
	}
}