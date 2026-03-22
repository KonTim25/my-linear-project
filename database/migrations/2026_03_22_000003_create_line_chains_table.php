<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Schema;

class CreateLineChainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('line_chains', function (Blueprint $table) {
            $table->id();
            $table->integer('level_number');
            $table->unsignedBigInteger('user_id');
            $table->integer('position');
            $table->boolean('is_technical_clone');
            $table->boolean('is_working_clone');
            $table->enum('status', ['active', 'skipped', 'completed']);
            $table->integer('accumulated_users')->nullable();
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
        Schema::dropIfExists('line_chains');
    }
}