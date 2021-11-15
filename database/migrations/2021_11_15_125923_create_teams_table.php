<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('photo_1');
            $table->string('photo_2');
            $table->string('photo_3');
            $table->string('phone_1');
            $table->string('phone_2');
            $table->string('phone_3');
            $table->string('email_1');
            $table->string('email_2');
            $table->string('email_3');
            $table->string('link_1');
            $table->string('link_2');
            $table->string('link_3');
            $table->string('link_4');
            $table->string('link_5');
            $table->string('link_6');
            $table->string('link_7');
            $table->string('link_8');
            $table->string('link_9');
            $table->softDeletes();
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
        Schema::dropIfExists('teams');
    }
}
