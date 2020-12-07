<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsTable extends Migration {

	public function up()
	{
		Schema::create('posts', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('title');
			$table->string('content');
			$table->string('image');
			$table->integer('views')->nullable();
			$table->string('slug');
			$table->integer('user_id')->unsigned()->nullable();
		});
	}

	public function down()
	{
		Schema::drop('posts');
	}
}