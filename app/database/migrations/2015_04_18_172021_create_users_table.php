<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
    {
            Schema::create('users', function($table) {
                // default required columns
                $table->increments('id'); 
                $table->string('firstname', 100); // VARCHAR 100
                $table->string('lastname',100);
                $table->string('email');
                $table->string('password', 60);
                $table->string('telephone');
                $table->boolean('admin')->default(0);
                $table->timestamps();
               
               });
               
               Schema::table('users',function($table){
                   $table->rememberToken();
               });
           }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
               Schema::drop('users');
    }
	
}
