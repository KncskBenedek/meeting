<?php

use App\Models\Apply;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applies', function (Blueprint $table) {
            $table->foreignId("meeting")->references("meeting_id")->on("meetings");
            $table->foreignId("user")->references("user_id")->on("users");
           $table->string("name");
           $table->timestamps();
           $table->primary(['meeting', 'user']);
           
        });
        //Required::create(['piece'=>1,'material'=>1,'pcs'=>2]);
        Apply::create(['meeting'=> 1,"user"=> 1,"name"=> "a"]);
        Apply::create(['meeting'=> 1,"user"=> 2,"name"=> "a"]);
        Apply::create(['meeting'=> 1,"user"=> 3,"name"=> "a"]);
        Apply::create(['meeting'=> 2,"user"=> 3,"name"=> "a"]);
        Apply::create(['meeting'=> 3,"user"=> 3,"name"=> "a"]);
        Apply::create(['meeting'=> 3,"user"=> 2,"name"=> "a"]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applies');
    }
}
