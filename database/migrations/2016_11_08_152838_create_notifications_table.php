<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('notifications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('from_id');
            $table->integer('to_id');
            $table->integer('comment_id');
            $table->text('notification');
            $table->boolean('read');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('notifications');
    }
}