<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubMenuMainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_menu_mains', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('main_menus_id')->unsigned();
            $table->foreign('main_menus_id')->references('id')->on('main_menus')->onDelete('cascade');
            $table->string('url');
            $table->string('class');
            $table->integer('level');
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
        Schema::drop('sub_menu_mains');
    }
}
