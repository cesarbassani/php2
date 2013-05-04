<?php

use Illuminate\Database\Migrations\Migration;

class CreateProfileTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::create('profiles', function($table)
            {
                    $table->increments('id');
                    $table->string('name', 200)->index();
                    $table->string('celphone',20);
                    $table->string('photo', 128);
                    $table->timestamps();
                    
                    $table->integer('user_id')->unsigned();

                    $table->foreign('user_id')->references('id')->on('users')
                            ->on_update('cascade')
                            ->on_delete('restrict');
                });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('profiles');
	}

}