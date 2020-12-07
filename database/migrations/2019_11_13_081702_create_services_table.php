<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServicesTable extends Migration {

	public function up()
	{
		Schema::create('services', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('title');
			$table->mediumText('content');
			$table->string('image');
			$table->boolean('is_active');
			$table->string('slug');
			$table->integer('user_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('services');
	}
}