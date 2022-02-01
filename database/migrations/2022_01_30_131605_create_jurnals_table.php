<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJurnalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jurnals', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('id_dewan');
            $table->foreignId('user_id');
            $table->string('nama_jurnal');
            $table->string('slug')->unique();
            $table->string('versi');
            $table->string('frekuensi');
            $table->string('penerbit');
            $table->text('deskripsi');
            $table->string('link_jurnal');
            $table->string('link_artikel');
            $table->string('penanggung_jawab');
            $table->string('pengarah1');
            $table->string('pengarah2')->nullable;
            $table->string('ketua_redaksi');
            $table->string('editor1');
            $table->string('editor2')->nullable;
            $table->string('editor3')->nullable;
            $table->string('editor4')->nullable;
            $table->string('editor5')->nullable;
            $table->string('data_dan_informasi1');
            $table->string('data_dan_informasi2')->nullable;
            $table->string('data_dan_informasi3')->nullable;
            $table->string('data_dan_informasi4')->nullable;
            
            $table->timestamp('published_at')->nullable();
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
        Schema::dropIfExists('jurnals');
    }
}
