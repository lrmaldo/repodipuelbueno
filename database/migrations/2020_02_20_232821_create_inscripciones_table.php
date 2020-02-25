<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscripcionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inscripciones', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id');
				$table->string('nombre');
				$table->string('direccion');
				$table->string('municipio');
				$table->string('cp');
				$table->string('num_celular');
				$table->string('email')->unique();
				$table->string('edad');
				$table->string('sexo');
				$table->string('instituto');
				$table->boolean('asistio')->default(false);
				$table->integer('id_evento')->unsigned();
				$table->foreign('id_evento')->references('id')->on('eventos');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('inscripciones');
	}

}
