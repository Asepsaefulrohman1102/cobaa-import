<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('tgl_21')->nullable();
            $table->string('tgl_22')->nullable();
            $table->string('tgl_23')->nullable();
            $table->string('tgl_24')->nullable();
            $table->string('tgl_25')->nullable();
            $table->string('tgl_26')->nullable();
            $table->string('tgl_27')->nullable();
            $table->string('tgl_28')->nullable();
            $table->string('tgl_29')->nullable();
            $table->string('tgl_30')->nullable();
            $table->string('tgl_31')->nullable();
            $table->string('tgl_1')->nullable();
            $table->string('tgl_2')->nullable();
            $table->string('tgl_3')->nullable();
            $table->string('tgl_4')->nullable();
            $table->string('tgl_5')->nullable();
            $table->string('tgl_6')->nullable();
            $table->string('tgl_7')->nullable();
            $table->string('tgl_8')->nullable();
            $table->string('tgl_9')->nullable();
            $table->string('tgl_10')->nullable();
            $table->string('tgl_11')->nullable();
            $table->string('tgl_12')->nullable();
            $table->string('tgl_13')->nullable();
            $table->string('tgl_14')->nullable();
            $table->string('tgl_15')->nullable();
            $table->string('tgl_16')->nullable();
            $table->string('tgl_17')->nullable();
            $table->string('tgl_18')->nullable();
            $table->string('tgl_19')->nullable();
            $table->string('tgl_20')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
