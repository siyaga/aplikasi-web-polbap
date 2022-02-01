<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Jurnal;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Adi Riyanto',
            'username' =>'adiriyanto',
            'email' => 'Lifeforme@gmail.com',
            'password'=> bcrypt('123456'),
            'is_admin' => '1'

        ]);
        User::create([
            'name' => 'Rangga',
            'username' =>'rangga',
            'email' => 'rangga@gmail.com',
            'password'=> bcrypt('123456'),
            'is_admin' => '0'

        ]);

        Jurnal::create([
            'nama_jurnal' => 'Jurnal Ilmiah Kesehatan Politeknik Bhakti Asih Purwakarta',
            'slug' => 'jurnal-ilmiah-kesehatan-politeknik-bhakti-asih-purwakarta',
            'versi' => 'Vol 2 no 2',
            'frekuensi' => 'Setahun 2 kali (Januari dan Juli)',
            'penerbit' => 'Pusat Penelitian dan Pengabdian Kepada Masyarakat',
            'deskripsi'=> 'Jurnal Ilmiah Kesehatan Politeknik Bhakti Asih Purwakarta adalah jurnal ilmiah yang diterbitkan oleh Pusat Penelitian dan Pengabdian Kepada Masyarakat Politeknik Bhakti Asih Purwakarta dan sebagai sarana publikasi hasil penelitian dan pengabdian kepada masyarakat dalam bidang kesehatan. Periode penerbitan jurnal ini dilakukan pada bulan Maret dan September.',
            'link_jurnal'=> 'http://aplikasi-web-polbap.test/about',
            'link_artikel'=> 'http://aplikasi-web-polbap.test/about',
            'penanggung_jawab'=> 'Dr. Hj. Maimunah, S.ST., SKM., M.Kes',
            'pengarah1'=> 'Dr. Ai Yeyeh Rukiyah S.Si.T. MKM. CHE.',
            'pengarah2'=> 'Lia Yulianti, Am.Keb., SKM., M.K.M',
            'ketua_redaksi'=> 'Dita Humaeroh, S.Si.T., MKM',
            'editor1'=> 'Desi Trisiani, Am.Keb, SKM, M.Kes CPHCT, CHt',
            'editor2'=> 'Daris Yolanda Sari, S.ST., M.Keb',
            'editor3'=> 'Armiyanti, S.ST., M.Tr.Keb',
            'editor4'=> 'Nova Rati Lova, S.Tr.Keb., M.Keb',
            'editor5'=> 'Nur Auliawati, SKM., MKM',
            'data_dan_informasi1'=> 'Dewi Puspasari, S.E., M.M',
            'data_dan_informasi2'=> 'Sandra Haryanto, S.S.I',
            'data_dan_informasi3'=> 'Metaliasari, S.Tr.Keb',
            'data_dan_informasi4'=> 'Try Mustika Aji Krishna S.T',
            'user_id' => '1'

            
        ]);
    }
}
