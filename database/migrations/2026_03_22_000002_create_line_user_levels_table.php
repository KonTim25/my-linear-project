<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Schema;

class CreateLineUserLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('line_user_levels', function ($table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->integer('level_number');
            $table->enum('status', ['active', 'waiting_completion', 'completed', 'closed']);
            $table->integer('users_count');
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
        Schema::dropIfExists('line_user_levels');
    }
}
