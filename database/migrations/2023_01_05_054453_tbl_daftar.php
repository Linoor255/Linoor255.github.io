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
        Schema::create('daftar', function (Blueprint $table) {
            $table->bigIncrements('id_daftar');
            $table->char('kd_daftar', 10);
            $table->string('nm');
            $table->string('gender');
            $table->date('tgl_lahir');
            $table->string('agama');
            $table->text('surat_baptis')->nullable();
            $table->text('akte');
            $table->text('kk');
            $table->string('alamat');
            $table->string('nm_ortu');
            $table->string('pekerjaan');
            $table->string('nohp');
            $table->text('ktp');
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
        Schema::dropIfExists('daftar');
    }
};
