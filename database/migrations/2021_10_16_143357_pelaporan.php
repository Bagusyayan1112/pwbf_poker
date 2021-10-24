<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pelaporan extends Migration
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
            $table->date('WAKTU_PELAPORAN');
            $table->char('status',50);
        });

        Schema::table('pelaporan', function (Blueprint $table) {
            $table->foreignId('ID_USER')->constrained('users');
            $table->foreignId('ID_BENCANA')->constrained('bencana');
            $table->foreignId('ID_KECAMATAN')->constrained('kecamatan');
          
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
