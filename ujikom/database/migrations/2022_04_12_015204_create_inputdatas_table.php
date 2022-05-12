<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInputdatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inputdatas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_user');
            $table->date('tanggal');
            $table->time('jam');
            $table->string('lokasi');
            $table->float('suhu');
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
        Schema::dropIfExists('inputdatas');
    }
}
