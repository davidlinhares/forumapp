<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->timestamps();
        });

        DB::table('topics')->insert([
          ['name' => 'ask', 'description' => 'Here you can ask something for the forumapp users'],
          ['name' => 'education', 'description' => 'A place where you can share your knowledge and learne from others'],
          ['name' => 'entertainment', 'description' => 'Movies, videos, TV series, all of it in just one place'],
          ['name' => 'humor', 'description' => 'What\'s funny on the world? Let\'s find out'],
          ['name' => 'lifestyle', 'description' => 'Share or learn life hacks'],
          ['name' => 'media', 'description' => 'Videos, pictures, gifs, everything'],
          ['name' => 'news', 'description' => 'Morning, on today\'s news we have a car on space'],
          ['name' => 'science', 'description' => 'There\'s more than a car in our space'],
          ['name' => 'sports', 'description' => 'Exercises, competition, everything about human challenges'],
          ['name' => 'tech', 'description' => '1110010101001']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('topics');
    }
}
