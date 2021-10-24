<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DetailKorban extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        

        Schema::create('detail_korban', function (Blueprint $table) {
            $table->id();
            $table->integer('UMUR');
            $table->char('NIK',50);
            $table->string('KONDISI',50);
            $table->string('NAMA_KORBAN',50);
            });
        Schema::table('detail_korban', function (Blueprint $table) {
            $table->foreignId('ID_LAPORAN')->constrained('pelaporan');
          
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
