<?php

use App\Models\Meeting;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meetings', function (Blueprint $table) {
            $table->id("meeting_id");
            $table->date("date");
            $table->string("location");
            $table->integer("max_number");
           
        });
        //Required::create(['piece'=>1,'material'=>1,'pcs'=>2]);
        Meeting::create(['date'=>"2022-01-01", "location"=>"loc", "max_number"=> 10]);
        Meeting::create(['date'=>"2022-01-02", "location"=>"loc2", "max_number"=> 20]);
        Meeting::create(['date'=>"2022-01-03", "location"=>"loc", "max_number"=> 15]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meetings');
    }
}
