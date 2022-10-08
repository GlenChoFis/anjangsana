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
        Schema::create('detail_perizinan', function (Blueprint $table) {
            $table->integer('id_perizinan')->nullable()->unsigned();
            $table->integer('id_gunung')->nullable()->unsigned();
            $table->integer('id_pembayaran')->nullable()->unsigned();
            $table->integer('total_harga');

            $table->foreign('id_perizinan', 'fk_id_perizinan')->references('id_perizinan')->on('perizinan');
            $table->foreign('id_gunung', 'fk_id_gunung')->references('id_gunung')->on('gunung');
            $table->foreign('id_pembayaran', 'fk_id_pembayaran')->references('id_pembayaran')->on('pembayaran');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_perizinan');
    }
};
