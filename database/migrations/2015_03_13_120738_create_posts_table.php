<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_user')->foreign();
			$table->string('post_title')->index();
			$table->string('post_thumbnail')->index();
			$table->text('post_content');
			$table->string('post_status');
			$table->string('post_type');
			$table->integer('post_category');
			$table->integer('post_tags');
			$table->string('post_slug')->unique();
			$table->integer('comment_status');
			$table->biginteger('hit');

			$table->softdeletes();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('posts');
	}

}
