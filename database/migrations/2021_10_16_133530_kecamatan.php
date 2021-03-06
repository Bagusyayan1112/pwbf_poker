<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Kecamatan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('kecamatan', function (Blueprint $table) {
            $table->id();
            $table->string('NAMA_KEC',50);
            });
        Schema::table('kecamatan', function (Blueprint $table) {
            $table->foreignId('ID_KOTA')->constrained('kota'); 
        });
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
