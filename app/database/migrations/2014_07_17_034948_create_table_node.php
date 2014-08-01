<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableNode extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('node', function(Blueprint $table)
		{
			$table->increments('nid');
            $table->integer('vid');
            $table->string('type', 32)->default('');
            $table->string('title', 255)->default('');
            $table->integer('uid')->default('0');
            $table->integer('status')->default('1');
            $table->integer('comment')->default('0');
            $table->integer('sticky')->default('0');

			$table->timestamps();

            $table->unique('vid');

            $table->index(array('status', 'type', 'nid'), 'node_status_type');
            $table->index('uid', 'uid');

            //tododev: falta asigar algunas key's mediante sql y otra migration
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('node');
	}

}
