<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBlockTypeNodeTypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('block_type_node_type', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('block_type_id')->unsigned()->index();
			$table->foreign('block_type_id')->references('id')->on('block_types')->onDelete('cascade');
			$table->integer('node_type_id')->unsigned()->index();
			$table->foreign('node_type_id')->references('id')->on('node_types')->onDelete('cascade');
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
		Schema::drop('block_type_node_type');
	}

}
