<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Add role as a foreign key
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('role', 'user_role')->references('id')->on('roles')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Down role
        Schema::table('users', function(Blueprint $table){
            $table->dropForeign('user_role');
        });
    }
};
