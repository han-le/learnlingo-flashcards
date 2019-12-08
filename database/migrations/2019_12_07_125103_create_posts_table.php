<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string("title",255)->nullable();
            $table->string("url",255);
            $table->string("featured_img_url", 255);

            $table->enum("category", [
                "vocabulary",
                "grammar",
                "reading",
                "stories"
            ])->default("vocabulary");

            $table->enum("language", [
                "vietnamese",
                "english",
            ]);

            $table->dateTime("published_date");
            $table->boolean("visible")->default(true);

            $table->integer("num_of_clicks")->default(0);

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
        Schema::dropIfExists('posts');
    }
}
