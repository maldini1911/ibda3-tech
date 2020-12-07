<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSettingsTable extends Migration {

	public function up()
	{
		Schema::create('settings', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('logo_nav');
			$table->string('logo_footer');
			$table->string('intro_image');
			$table->string('slogan');
			$table->string('address');
			$table->boolean('status_website');
			$table->mediumText('maintenance_message')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('settings');
	}
}