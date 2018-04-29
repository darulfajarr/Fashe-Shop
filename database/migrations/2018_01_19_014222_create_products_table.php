<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Kode');
            $table->integer('kategori_id')->unsigned();
            $table->string('nama_product');
            $table->string('bahan');
            $table->string('ukuran');
            $table->string('warna');
            $table->integer('harga');
            $table->integer('views');
            $table->string('cover')->nullable();
            $table->string('cover1')->nullable();
            $table->string('cover2')->nullable();
            $table->timestamps();
            $table->foreign('kategori_id')->references('id')->on('kategoris')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
