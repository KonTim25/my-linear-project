<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema;\n
class CreateLineTechnicalClonesFundTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('line_technical_clones_fund', function (Blueprint $table) {
            $table->id();
            $table->decimal('balance', 10, 2);
            $table->timestamp('last_distribution')->nullable();
            $table->timestamp('next_distribution')->nullable();
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
        Schema::dropIfExists('line_technical_clones_fund');
    }
}