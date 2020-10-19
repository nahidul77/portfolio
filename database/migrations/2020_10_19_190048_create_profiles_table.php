<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title');
            $table->string('sub_title');
            $table->longText('description');
            $table->string('fb_link');
            $table->string('tw_link');
            $table->string('in_link');
            $table->string('git_link');
            $table->string('service_head');
            $table->string('portfolio_head');
            $table->string('about_head');
            $table->string('resume');
            $table->string('profile_img');
            $table->string('fav_img');
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
        Schema::dropIfExists('profiles');
    }
}
