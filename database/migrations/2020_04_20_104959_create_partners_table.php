<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->enum('category', ['donor', 'Organization', 'volunteer']);
			$table->unsignedBigInteger('interest_id')->nullable();
			$table->unsignedBigInteger('project_id')->nullable();
			$table->string('name');
			$table->string('slug');
			$table->string('email', 255);
			$table->string('phone');
			$table->string('location');
			$table->double('amount', 8, 2)->nullable();
			$table->boolean('approved')->default(false);
			$table->text('description')->nullable();
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
        Schema::dropIfExists('partners');
    }
}
