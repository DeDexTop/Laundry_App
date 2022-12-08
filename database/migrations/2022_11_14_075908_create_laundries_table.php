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
        Schema::create('laundries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pegawai_id');
            $table->string('pelanggan');
            $table->timestamp('tgl_masuk');
            $table->date('tgl_selesai');
            $table->string('no_telp');
            $table->string('alamat');
            $table->string('status_pembayaran');
            $table->string('total'); 
            $table->string('status_pencucian');
            $table->string('pilihan_pengantaran');
            $table->string('status_pengiriman');
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
        Schema::dropIfExists('laundries');
    }
};
