<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('pesans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbigInteger('admin_id')->nullable();
            $table->foreign('admin_id')->references('id')->on('admins');
            $table->unsignedbigInteger('driver_id')->nullable();
            $table->foreign('driver_id')->references('id')->on('drivers');
            $table->unsignedbigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->date('tgl_pesan');
            $table->unsignedbigInteger('jam_id')->nullable();
            $table->foreign('jam_id')->references('id')->on('jams');
            $table->string('alamat_pesan', 250);
            $table->string('deskripsi_pesan', 250);
            $table->string('bukti_pembayaran', 250);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesans');
    }
}
