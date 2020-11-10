<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersRegisterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usersregister', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('firstname', 191);
			$table->string('lastname', 191);
			$table->string('email', 191)->unique();
			$table->string('hobi', 191);
            $table->string('password', 191);
			$table->string('address', 191);
			$table->date('birthdate');
            $table->boolean('gender')->default(1);			
            $table->integer('membership_type');		
            $table->string('fee_vat');	
            $table->string('cc_number');
            $table->string('cc_type');
			$table->date('cc_expireddate');
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
        Schema::dropIfExists('usersregister');
    }
}
