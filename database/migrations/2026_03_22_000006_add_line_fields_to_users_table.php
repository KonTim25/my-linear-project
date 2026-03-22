<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Schema;

class AddLineFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function ($table) {
            $table->enum('user_type', ['user', 'technical_clone', 'working_clone']);
            $table->enum('line_status', ['active', 'closed']);
            $table->unsignedBigInteger('clone_parent_id')->nullable();
            $table->unsignedInteger('clone_count');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function ($table) {
            $table->dropColumn('user_type');
            $table->dropColumn('line_status');
            $table->dropColumn('clone_parent_id');
            $table->dropColumn('clone_count');
        });
    }
}