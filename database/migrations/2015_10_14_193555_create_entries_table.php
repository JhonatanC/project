<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('entry_title');
            $table->string('entry_description');
            $table->string('entry_img');
            $table->date('entry_start_date');
            $table->date('entry_end_date');
            $table->integer('entry_status')->default(1);
            $table->string('meta_title');
            $table->string('meta_description');
            $table->integer('category_id');
            $table->integer('tag_id');
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
        Schema::drop('entries');
    }
}
