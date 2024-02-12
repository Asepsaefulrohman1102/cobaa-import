<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataFile30sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data__file_30s', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // $table->string('nama_pegawai')->references('nama_pegawai')->on('pegawais')->onDelete('cascade');
            $table->string('tgl_21');
            $table->string('tgl_22');
            $table->string('tgl_23');
            $table->string('tgl_24');
            $table->string('tgl_25');
            $table->string('tgl_26');
            $table->string('tgl_27');
            $table->string('tgl_28');
            $table->string('tgl_29');
            $table->string('tgl_30');
            $table->string('tgl_1');
            $table->string('tgl_2');
            $table->string('tgl_3');
            $table->string('tgl_4');
            $table->string('tgl_5');
            $table->string('tgl_6');
            $table->string('tgl_7');
            $table->string('tgl_8');
            $table->string('tgl_9');
            $table->string('tgl_10');
            $table->string('tgl_11');
            $table->string('tgl_12');
            $table->string('tgl_13');
            $table->string('tgl_14');
            $table->string('tgl_15');
            $table->string('tgl_16');
            $table->string('tgl_17');
            $table->string('tgl_18');
            $table->string('tgl_19');
            $table->string('tgl_20');
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
        Schema::dropIfExists('data__file_30s');
    }
}
