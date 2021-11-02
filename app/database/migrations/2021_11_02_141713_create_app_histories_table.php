<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('apps_id')->constrained()->onDelete('cascade');
            $table->double('price');
            $table->double('old_price');
            $table->integer('active');
            $table->text('description');
            $table->string('title');
            $table->text('property');
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
        Schema::dropIfExists('app_histories');
    }
}
