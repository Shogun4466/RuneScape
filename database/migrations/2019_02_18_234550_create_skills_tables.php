<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attack', function (Blueprint $table) {
            $table->string('username');
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('rank')->nullable();
            $table->timestamps();
        });

        Schema::create('strength', function (Blueprint $table) {
            $table->string('username');
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('rank')->nullable();
            $table->timestamps();
        });

        Schema::create('defence', function (Blueprint $table) {
            $table->string('username');
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('rank')->nullable();
            $table->timestamps();
        });

        Schema::create('ranged', function (Blueprint $table) {
            $table->string('username');
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('rank')->nullable();
            $table->timestamps();
        });

        Schema::create('prayer', function (Blueprint $table) {
            $table->string('username');
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('rank')->nullable();
            $table->timestamps();
        });

        Schema::create('magic', function (Blueprint $table) {
            $table->string('username');
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('rank')->nullable();
            $table->timestamps();
        });

        Schema::create('runecrafting', function (Blueprint $table) {
            $table->string('username');
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('rank')->nullable();
            $table->timestamps();
        });

        Schema::create('construction', function (Blueprint $table) {
            $table->string('username');
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('rank')->nullable();
            $table->timestamps();
        });

        Schema::create('dungeoneering', function (Blueprint $table) {
            $table->string('username');
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('rank')->nullable();
            $table->timestamps();
        });

        Schema::create('constitution', function (Blueprint $table) {
            $table->string('username');
            $table->integer('level')->default(10);
            $table->integer('xp')->default(0);
            $table->integer('rank')->nullable();
            $table->timestamps();
        });

        Schema::create('agility', function (Blueprint $table) {
            $table->string('username');
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('rank')->nullable();
            $table->timestamps();
        });

        Schema::create('herblore', function (Blueprint $table) {
            $table->string('username');
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('rank')->nullable();
            $table->timestamps();
        });

        Schema::create('thieving', function (Blueprint $table) {
            $table->string('username');
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('rank')->nullable();
            $table->timestamps();
        });

        Schema::create('crafting', function (Blueprint $table) {
            $table->string('username');
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('rank')->nullable();
            $table->timestamps();
        });

        Schema::create('fletching', function (Blueprint $table) {
            $table->string('username');
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('rank')->nullable();
            $table->timestamps();
        });

        Schema::create('slayer', function (Blueprint $table) {
            $table->string('username');
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('rank')->nullable();
            $table->timestamps();
        });

        Schema::create('hunter', function (Blueprint $table) {
            $table->string('username');
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('rank')->nullable();
            $table->timestamps();
        });

        Schema::create('divination', function (Blueprint $table) {
            $table->string('username');
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('rank')->nullable();
            $table->timestamps();
        });

        Schema::create('mining', function (Blueprint $table) {
            $table->string('username');
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('rank')->nullable();
            $table->timestamps();
        });

        Schema::create('smithing', function (Blueprint $table) {
            $table->string('username');
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('rank')->nullable();
            $table->timestamps();
        });

        Schema::create('fishing', function (Blueprint $table) {
            $table->string('username');
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('rank')->nullable();
            $table->timestamps();
        });

        Schema::create('cooking', function (Blueprint $table) {
            $table->string('username');
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('rank')->nullable();
            $table->timestamps();
        });

        Schema::create('firemaking', function (Blueprint $table) {
            $table->string('username');
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('rank')->nullable();
            $table->timestamps();
        });

        Schema::create('woodcutting', function (Blueprint $table) {
            $table->string('username');
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('rank')->nullable();
            $table->timestamps();
        });

        Schema::create('farming', function (Blueprint $table) {
            $table->string('username');
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('rank')->nullable();
            $table->timestamps();
        });

        Schema::create('summoning', function (Blueprint $table) {
            $table->string('username');
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('rank')->nullable();
            $table->timestamps();
        });

        Schema::create('invention', function (Blueprint $table) {
            $table->string('username');
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('rank')->nullable();
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
        Schema::dropIfExists('skills_tables');
    }
}
