<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTanggalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_tanggals', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_awal');
            $table->date('tanggal_akhir');
            $table->date('tgl_1');
            $table->date('tgl_2');
            $table->date('tgl_3');
            $table->date('tgl_4');
            $table->date('tgl_5');
            $table->date('tgl_6');
            $table->date('tgl_7');
            $table->date('tgl_8');
            $table->date('tgl_9');
            $table->date('tgl_10');
            $table->date('tgl_11');
            $table->date('tgl_12');
            $table->date('tgl_13');
            $table->date('tgl_14');
            $table->date('tgl_15');
            $table->date('tgl_16');
            $table->date('tgl_17');
            $table->date('tgl_18');
            $table->date('tgl_19');
            $table->date('tgl_20');
            $table->date('tgl_21');
            $table->date('tgl_22');
            $table->date('tgl_23');
            $table->date('tgl_24');
            $table->date('tgl_25');
            $table->date('tgl_26');
            $table->date('tgl_27');
            $table->date('tgl_28');
            $table->date('tgl_29');
            $table->date('tgl_30');
            $table->date('tgl_31');
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
        Schema::dropIfExists('data_tanggals');
    }
}
