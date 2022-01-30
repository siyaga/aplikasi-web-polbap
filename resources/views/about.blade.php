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
            margin-bottom: 15px;

            font-family: sans-serif;
            font-style: normal;
            font-size: 18px;
            line-height: 15px;
            /* identical to box height */


            color: #4A96DD;
        }
        .jContent{
            margin-top: 10px;
            margin-bottom: 5px;

            font-family: Roboto;
            font-size: 15px;
            line-height: 15px;
            /* identical to box height */


            color: black;
        }

        .detailJurnal{
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            padding: 10px 10px 20px 20px;

            width: 770px;
            height: auto;

            border: 2px solid #4A96DD;
            box-sizing: border-box;
            border-radius: 15px;       
        }



        p{
            margin-top: 0px;
            margin-bottom: 5px;
            font-family: sans-serif;
            font-style: normal;
            font-size: 14px;
            line-height: 14px;

            color: #000000;
        }

        

</style>


<div class="content">
    <b>About Jurnal</b>
    <div class="detailJurnal">
        <b class="jContent">Nama Jurnal</b>
            <p>Jurnal Ilmiah Kesehatan Politeknik Bhakti Asih Purwakarta</p>
        <b class="jContent">Frekuensi</b>
            <p>Setahun 2 kali (Januari dan Juli)</p>
        <b class="jContent">Penerbit</b>
            <p>Pusat Penelitian dan Pengabdian Kepada Masyarakat</p>
        <b class="jContent">Deskripsi</b>
            <p>Jurnal Ilmiah Kesehatan Politeknik Bhakti Asih Purwakarta adalah jurnal ilmiah yang diterbitkan oleh Pusat Penelitian dan Pengabdian Kepada Masyarakat  Politeknik Bhakti Asih Purwakarta dan sebagai sarana publikasi hasil penelitian dan pengabdian kepada masyarakat dalam bidang kesehatan. Periode penerbitan jurnal ini dilakukan pada bulan Maret dan September.</p>
    </div>

    <b>Dewan Redaksi</b>
    <div class="detailJurnal">
        <b class="jContent">Penanggung Jawab</b>
            <p>Dr. Hj. Maimunah, S.ST., SKM., M.Kes</p>
        <b class="jContent">Pengarah</b>
            <p>Dr. Ai Yeyeh Rukiyah S.Si.T. MKM. CHE.</p>
            <p>Lia Yulianti, Am.Keb., SKM., M.K.M</p>
        <b class="jContent">Ketua Redaksi</b>
            <p>Dita Humaeroh, S.Si.T., MKM</p>
        <b class="jContent">Editor</b>
            <p>Desi Trisiani, Am.Keb, SKM, M.Kes CPHCT, CHt</p>
            <p>Daris Yolanda Sari, S.ST., M.Keb</p>
            <p>Armiyanti, S.ST., M.Tr.Keb</p>
            <p>Nova Rati Lova, S.Tr.Keb., M.Keb</p>
            <p>Nur Auliawati, SKM., MKM</p>
        <b class="jContent">Data dan Informasi</b>
            <p>Dewi Puspasari, S.E., M.M</p>
            <p>Sandra Haryanto, S.S.I</p>
            <p>Metaliasari, S.Tr.Keb</p>
            <p>Try Mustika Aji Krishna S.T</p>
    </div>

</div>

@endsection