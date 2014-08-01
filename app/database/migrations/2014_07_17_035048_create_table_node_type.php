<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableNodeType extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('node_type', function(Blueprint $table)
		{
			$table->string('type', 32);
            $table->string('name', 255)->default('');
            $table->mediumText('description');
            $table->mediumText('help');
            $table->tinyInteger('locked')->default('0');
            $table->tinyInteger('disabled')->default('0');
			$table->timestamps();

            $table->primary('type');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('node_type');
	}

}
