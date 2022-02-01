<?php

namespace App\Http\Controllers;

use App\Models\Jurnal;
use App\Models\User;
use Illuminate\Http\Request;

class JurnalController extends Controller
{
    public function index()
    {  
        $title ='';

        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' by '. $author;
        }
        
        return view('home', [
            "title" => "Polbap Jurnal",
            "active" => "jurnal",
            "jurnals"=> Jurnal::latest()->filter(request(['search', 'author']))
            ->paginate(6)->withQueryString()
        ]);
    }
    public function show(Jurnal $jurnal)
    {
        return view('jurnal', [
            "title" => "Jurnal",
            "jurnal" => $jurnal
        ]);
    }
    public function showabout(Jurnal $jurnal)
    {
        return view('about', [
            "title" => "About Jurnal",
            "jurnal" => $jurnal
        ]);
    }
}
