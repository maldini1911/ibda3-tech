<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSocialMediaTable extends Migration {

	public function up()
	{
		Schema::create('social_media', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('icon_name');
			$table->string('media_name');
		});
	}

	public function down()
	{
		Schema::drop('social_media');
	}
}