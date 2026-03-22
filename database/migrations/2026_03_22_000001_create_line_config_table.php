<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Schema;

class CreateLineConfigTable extends Migration
{
    public function up()
    {
        Schema::create('line_configs', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedInteger('level_number')->comment('Level number ranging from 1 to 7');
            $table->decimal('entry_cost', 10, 2);
            $table->boolean('is_active')->default(true);
            $table->timestamps(); // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('line_configs');
    }
}