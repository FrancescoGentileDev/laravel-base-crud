<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comic', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string("description");
            $table->string("thumb");
            $table->float("price", 6, 2);
            $table->string("series");
            $table->date("sale_date");
            $table->string("type");

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
        Schema::dropIfExists('comic');
    }
}
