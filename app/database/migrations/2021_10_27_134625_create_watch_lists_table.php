<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWatchListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     *
     * таблица списка отслеживания
     * user_id - пользователь
     * title - название списка
     * active - активность
     * list - json со списком отслеживания
     *
     *
     * @return void
     */
    public function up()
    {
        Schema::create('watch_lists', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable(false);
            $table->string('title')->nullable(false);
            $table->integer('active')->default('1');
            $table->text('list');
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
        Schema::dropIfExists('watch_lists');
    }
}
