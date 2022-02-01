@extends('layouts.jurnalLayout')

@section('container')
    <style>
        @font-face{
            font-family: Roboto;
            src: url(Roboto.ttf);
        }

        .content{
            display: flex;
            flex-direction: column;
            justify-content: left;
            align-items: flex-start;
            padding: 20px 50px 16px 130px;
            margin-bottom: 30px;

            width: 900px;
            height: auto;

            

        }

        b{
            margin-top: 30px;
            margin-bottom: 20px;

            font-family: sans-serif;
            font-style: normal;
            font-weight: 600;
            font-size: 18px;
            line-height: 15px;
            /* identical to box height */


            color: #4A96DD;
        }

        .detailJurnal{
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            padding: 10px 20px 10px 20px;

            width: 770px;
            height: auto;

            border: 2px solid #4A96DD;
            box-sizing: border-box;
            border-radius: 15px;       
        }

        .judul{
            color: black;
            margin-top: 10px;
        }

        .img{
            align-self: left;
            alignment-baseline: central;
            width: 180px;
            height: 273px;
            margin-right: 20px;

        }

        p{
            margin-top: 10px;
            margin-bottom: 10px;
            font-family: sans-serif;
            font-style: normal;
            font-weight: normal;
            font-size: 14px;
            line-height: 16px;
            display: flex;
            align-items: center;

            color: #000000;
        }

        button{
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            padding: 10px 10px;
            margin-bottom: 15px;

            width: 150px;
            height: 36px;

            background: #4A96DD;
            border-radius: 5px;
            border-color: 2px solid #4A96DD;
            transition-delay: 0.04s;

            font-family: sans-serif;
            font-style: normal;
            font-weight: 600;
            font-size: 15px;
            line-height: 16px;
            color: #F7F7F7;
 

        }

        button:hover{
            background: white;
            border-radius: 5px;
            border-color: 2px solid #4A96DD;
            color: #4A96DD;
        }

    </style>

  

    <div class="content">
        <b>Current Issue</b>
        <div class="detailJurnal">
            <b class="judul"> {{ $jurnal->versi }}: {{ $jurnal->nama_jurnal }}</b>
            {{-- gambar --}}
            <img class="img" src="img/imgJurnal.jpg" alt="">
            <p>{{ $jurnal->deskripsi }}</p>
            <p>Publish : {{ $jurnal->penerbit }}</p>
            <button class="dArticle">Download Jurnal</button> 
            <button class="dArticle">Download Article</button> 
        </div>
    </div>

@endsection