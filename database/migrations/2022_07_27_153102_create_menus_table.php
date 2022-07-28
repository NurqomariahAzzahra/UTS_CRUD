<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('nama_makanan');
            $table->bigInteger('restoran_id')->unsigned();
            $table->string('gambar')->unique();
            $table->string('kategori');
            $table->integer('harga');
            $table->string('deskripsi');
            $table->timestamps();
            $table->foreign('restoran_id')->references('id')->on('restorans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
