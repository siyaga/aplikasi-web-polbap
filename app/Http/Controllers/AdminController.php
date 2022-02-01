<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        
        return view('home',[
            "titleWeb" => "home",
            "title" => "JURNAL ILMIAH KESEHATAN POLITEKNIK BHAKTI ASIH",
            "image" => "imgJurnal.jpg",
            "version" => "Vol 1 No 1 ",
            "description" => "Jurnal Ilmiah Kesehatan Politeknik Bhakti Asih Purwakarta adalah jurnal ilmiah yang diterbitkan oleh Lembaga Penelitian dan Pengabdian Masyarakat Politeknik Bhakti Asih Purwakarta dan sebagai sarana publikasi hasil penelitian dan pengabdian kepada masyarakat dalam bidang kesehatan. Periode penerbitan jurnal ini dilakukan pada bulan Januari dan Juli.",
            "author" => "Daris Yolanda Sari, 2022-01-24"
        ]);
    }

    
}
