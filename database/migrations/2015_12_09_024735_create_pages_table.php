<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePagesTable extends Migration {
    public function up() {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id', 11);
            $table->string('title');
            $table->string('slug');
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->string('author');
            $table->smallInteger('click_count')->unsigned();
            $table->tinyInteger('layout')->unsigned();
            $table->timestamps();
            $table->timestamp('deleted_at');
            $table->timestamp('published_at');
        });
    }

    public function down() {
        Schema::drop('pages');
    }
}
