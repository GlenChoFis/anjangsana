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
        Schema::create('perizinan', function (Blueprint $table) {
            $table->id();
            // $table->increments('id_perizinan');
            // $table->integer('id')->nullable()->unsigned();
            $table->string('nama');
            $table->date('tanggal_lahir');
            $table->string('alamat_tinggal');
            $table->string('nomor_telepon');
            $table->string('nomor_telepon_keluarga');  
            $table->date('tanggal_pendakian');
            $table->foreignId('id_gunung')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perizinan');
    }
};
