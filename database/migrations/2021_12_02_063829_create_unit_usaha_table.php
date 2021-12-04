<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitUsahaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unit_usaha', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->longText('keterangan');
            $table->string('gambar');
            $table->string('slug');
            $table->integer('dilihat')->nullable();
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
        Schema::dropIfExists('unit_usaha');
    }
}
