<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChiTietHoaDon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_bills', function (Blueprint $table) {
            $table->string('id_bill');
            $table->string('id_pitch')->comment('ma san bong');
            $table->string('id_time_slot')->comment('ma khung gio');
            $table->string('soccer_day')->comment('ngay da');
            $table->string('price')->comment('gia');
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
        Schema::drop('detail_bills');
    }
}