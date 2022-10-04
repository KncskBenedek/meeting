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
            $table->foreignId("meeting_id")->references("meeting_id")->on("meetings");
            $table->foreignId("user_id")->references("user_id")->on("meetings");
           $table->integer("user_id")->primary();
           $table->string("name");
           $table->primary(['meeting_id', 'user_id']);
        });
        //Required::create(['piece'=>1,'material'=>1,'pcs'=>2]);
        Apply::create(['mmeting_id'=> 1,"user_id"=> 1,"name"=> "?"]);
        Apply::create(['mmeting_id'=> 1,"user_id"=> 2,"name"=> "?"]);
        Apply::create(['mmeting_id'=> 1,"user_id"=> 3,"name"=> "?"]);
        Apply::create(['mmeting_id'=> 2,"user_id"=> 3,"name"=> "?"]);
        Apply::create(['mmeting_id'=> 3,"user_id"=> 3,"name"=> "?"]);
        Apply::create(['mmeting_id'=> 3,"user_id"=> 2,"name"=> "?"]);
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
