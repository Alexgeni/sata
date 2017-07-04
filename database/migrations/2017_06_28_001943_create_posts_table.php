<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('sata');
            $table->string('freq');
            $table->string('polar');
            $table->string('polar_ar');
            $table->string('srate');
            $table->string('fec');
            $table->string('name_ar');
            $table->string('sata_ar');
            $table->boolean("revised")->default(0);
            $table->timestamps('update');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
