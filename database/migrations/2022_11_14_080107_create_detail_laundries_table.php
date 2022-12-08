<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_laundries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('laundry_id');
            $table->foreignId('kategori_id');
            $table->string('berat');
            $table->string('subtotal');
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
        Schema::dropIfExists('detail_laundries');
    }
};

/*
 publc function total(int harga, int jumlah)
 {
    jumlah = textbox.text
    harga =  $harga
 }
*/