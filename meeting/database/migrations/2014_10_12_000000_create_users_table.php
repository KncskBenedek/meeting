<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id("user_id");
            $table->string('name');
            $table->string('email')->unique();
            
        });
        //Required::create(['piece'=>1,'material'=>1,'pcs'=>2]);
        User::create(['name'=> 'Undok Sára', 'email'=>'asd@asd.com']);
        User::create(['name'=> 'Undok Balázs', 'email'=>'asd@db.com']);
        User::create(['name'=> 'Tímár László', 'email'=>'asdbsd@khjeo.com']);
    }


    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
