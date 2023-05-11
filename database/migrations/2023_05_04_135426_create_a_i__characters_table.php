<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAICharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('a_i__characters', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("user_handle")->nullable();
            $table->string("gender")->nullable();
            $table->string("firstname")->nullable();
            $table->string("lastname")->nullable();
            $table->integer("age")->nullable();
            $table->string("birthdate")->nullable();
            $table->string("nationality")->nullable();
            $table->string("body_type")->nullable();
            $table->string("breast_size")->nullable();
            $table->string("country")->nullable();
            $table->string("state")->nullable();
            $table->string("city")->nullable();
            $table->string("cultural_background")->nullable();
            $table->boolean("interested_in_sexting")->nullable();
            $table->string("personality")->nullable();
            $table->unsignedBigInteger("interest_id")->nullable();
            $table->foreign('interest_id')->references('id')->on('interests');
            $table->string("bio")->nullable();
            $table->string("occupation")->nullable();
            $table->string("relationship")->nullable();
            $table->string("current_partner")->nullable();
            $table->string("personal_style")->nullable();
            $table->string("hips_width")->nullable();
            $table->unsignedBigInteger("favorite_colors_and_pattern_id")->nullable();
            $table->foreign('favorite_colors_and_pattern_id')->references('id')->on('favorite_colors_and_patterns');
            $table->string("time_period_fashion")->nullable();
            $table->string("social_rank")->nullable();
            $table->string("looking_for_relationship")->nullable();
            $table->string("goal_on_platform")->nullable();
            $table->string("speech_style")->nullable();
            $table->string("voice_style")->nullable();
            $table->string("current_home")->nullable();
            $table->string("current_workplace")->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('a_i__characters');
    }
}
