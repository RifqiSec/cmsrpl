<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('post_id');
			$table->string('comment_author');
			$table->string('comment_email');
			$table->string('comment_ip');
			$table->string('comment_date');
			$table->string('comment_content');
			$table->integer('comment_approved');
			$table->text('comment_agent');
			$table->integer('comment_parent');

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
		Schema::drop('comments');
	}

}
