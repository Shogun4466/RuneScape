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
            $table->string('username', 13)->primary();
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('rank')->nullable();
            $table->timestamps();

            $table->foreign('username')->references('username')->on('members');
        });
        Schema::create('strength', function (Blueprint $table) {
            $table->string('username', 13)->primary();
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('rank')->nullable();
            $table->timestamps();

            $table->foreign('username')->references('username')->on('members');
        });
        Schema::create('defence', function (Blueprint $table) {
            $table->string('username', 13)->primary();
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('rank')->nullable();
            $table->timestamps();

            $table->foreign('username')->references('username')->on('members');
        });
        Schema::create('ranged', function (Blueprint $table) {
            $table->string('username', 13)->primary();
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('rank')->nullable();
            $table->timestamps();

            $table->foreign('username')->references('username')->on('members');
        });
        Schema::create('prayer', function (Blueprint $table) {
            $table->string('username', 13)->primary();
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('rank')->nullable();
            $table->timestamps();

            $table->foreign('username')->references('username')->on('members');
        });
        Schema::create('magic', function (Blueprint $table) {
            $table->string('username', 13)->primary();
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('rank')->nullable();
            $table->timestamps();

            $table->foreign('username')->references('username')->on('members');
        });
        Schema::create('runecrafting', function (Blueprint $table) {
            $table->string('username', 13)->primary();
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('rank')->nullable();
            $table->timestamps();

            $table->foreign('username')->references('username')->on('members');
        });
        Schema::create('construction', function (Blueprint $table) {
            $table->string('username', 13)->primary();
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('rank')->nullable();
            $table->timestamps();

            $table->foreign('username')->references('username')->on('members');
        });
        Schema::create('dungeoneering', function (Blueprint $table) {
            $table->string('username', 13)->primary();
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('rank')->nullable();
            $table->timestamps();

            $table->foreign('username')->references('username')->on('members');
        });
        Schema::create('constitution', function (Blueprint $table) {
            $table->string('username', 13)->primary();
            $table->integer('level')->default(10);
            $table->integer('xp')->default(0);
            $table->integer('rank')->nullable();
            $table->timestamps();

            $table->foreign('username')->references('username')->on('members');
        });
        Schema::create('agility', function (Blueprint $table) {
            $table->string('username', 13)->primary();
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('rank')->nullable();
            $table->timestamps();

            $table->foreign('username')->references('username')->on('members');
        });
        Schema::create('herblore', function (Blueprint $table) {
            $table->string('username', 13)->primary();
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('rank')->nullable();
            $table->timestamps();

            $table->foreign('username')->references('username')->on('members');
        });
        Schema::create('thieving', function (Blueprint $table) {
            $table->string('username', 13)->primary();
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('rank')->nullable();
            $table->timestamps();

            $table->foreign('username')->references('username')->on('members');
        });
        Schema::create('crafting', function (Blueprint $table) {
            $table->string('username', 13)->primary();
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('rank')->nullable();
            $table->timestamps();

            $table->foreign('username')->references('username')->on('members');
        });
        Schema::create('fletching', function (Blueprint $table) {
            $table->string('username', 13)->primary();
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('rank')->nullable();
            $table->timestamps();

            $table->foreign('username')->references('username')->on('members');
        });
        Schema::create('slayer', function (Blueprint $table) {
            $table->string('username', 13)->primary();
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('rank')->nullable();
            $table->timestamps();

            $table->foreign('username')->references('username')->on('members');
        });
        Schema::create('hunter', function (Blueprint $table) {
            $table->string('username', 13)->primary();
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('rank')->nullable();
            $table->timestamps();

            $table->foreign('username')->references('username')->on('members');
        });
        Schema::create('divination', function (Blueprint $table) {
            $table->string('username', 13)->primary();
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('rank')->nullable();
            $table->timestamps();

            $table->foreign('username')->references('username')->on('members');
        });
        Schema::create('mining', function (Blueprint $table) {
            $table->string('username', 13)->primary();
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('rank')->nullable();
            $table->timestamps();

            $table->foreign('username')->references('username')->on('members');
        });
        Schema::create('smithing', function (Blueprint $table) {
            $table->string('username', 13)->primary();
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('rank')->nullable();
            $table->timestamps();

            $table->foreign('username')->references('username')->on('members');
        });
        Schema::create('fishing', function (Blueprint $table) {
            $table->string('username', 13)->primary();
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('rank')->nullable();
            $table->timestamps();

            $table->foreign('username')->references('username')->on('members');
        });
        Schema::create('cooking', function (Blueprint $table) {
            $table->string('username', 13)->primary();
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('rank')->nullable();
            $table->timestamps();

            $table->foreign('username')->references('username')->on('members');
        });
        Schema::create('firemaking', function (Blueprint $table) {
            $table->string('username', 13)->primary();
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('rank')->nullable();
            $table->timestamps();

            $table->foreign('username')->references('username')->on('members');
        });
        Schema::create('woodcutting', function (Blueprint $table) {
            $table->string('username', 13)->primary();
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('rank')->nullable();
            $table->timestamps();

            $table->foreign('username')->references('username')->on('members');
        });
        Schema::create('farming', function (Blueprint $table) {
            $table->string('username', 13)->primary();
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('rank')->nullable();
            $table->timestamps();

            $table->foreign('username')->references('username')->on('members');
        });
        Schema::create('summoning', function (Blueprint $table) {
            $table->string('username', 13)->primary();
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('rank')->nullable();
            $table->timestamps();

            $table->foreign('username')->references('username')->on('members');
        });
        Schema::create('invention', function (Blueprint $table) {
            $table->string('username', 13)->primary();
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('rank')->nullable();
            $table->timestamps();

            $table->foreign('username')->references('username')->on('members');
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