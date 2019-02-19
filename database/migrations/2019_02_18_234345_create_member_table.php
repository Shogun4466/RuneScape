<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('username');
            $table->string('rank')->default('Recruit');
            $table->string('xp')->default('0');
            $table->integer('kills')->default('0');
            $table->integer('total_level')->nullable();
            $table->string('total_xp')->nullable();
            $table->string('hiscore_rank')->nullable();
            $table->enum('private', ['no', 'yes'])->default('no');
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
        Schema::dropIfExists('member');
    }
}
