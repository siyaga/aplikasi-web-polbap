@extends('layouts.inputLayout')

@section('container')

<style>
    form{
        display: flex;
        flex-direction: row;
        padding: 20px;

    }

    .dataJurnal{
        width: 400px;
        height: auto;
        margin-left: 100px;
        padding: 20px;
        border-radius: 15px;
        border: 2px solid #4A96DD;
            background-color: #fff; 
    }

    .dataredaksi{
        width: 400px;
        height: auto;
        margin-left: 50px;
        padding: 20px;
        border-radius: 15px;
        border: 2px solid #4A96DD;
            background-color: #fff; 
    }

    .confirm{
        width: 200px;
        height: auto;
        margin-left: 50px;
    }

    textarea{
        width: auto;
        
    }

    label{
        margin: 10px 10px 10px 10px;
    }
    
    input{
        width: auto;
        height: 25px;
    }
    .confirmBtn{
        margin-bottom: 10px;
        font-weight: 600;
    }
    .cancelBtn{
        margin-bottom: 10px;
        font-weight: 600;
        border: 1px solid blue;
    }

    .dewan{
        margin-bottom: 6px;
    }
</style>

<form action="">

    <div class="dataJurnal">
        <h4>Data Jurnal</h4>
        <fieldset disabled="disabled">

            <label for="kodeJurnal" class="col-form-label disable">Kode Jurnal</label>
            <input type="text" class="form-control" id="kodeJurnal" placeholder="Kode Jurnal">
        </fieldset>

        <label for="namaJurnal" class="col-form-label">Nama Jurnal</label>
        <textarea class="form-control " id="nama_jurnal" name="nama_jurnal" rows="3"></textarea>

        <label for="versiJurnal" class="col-form-label">Versi</label>
        <input type="text" class="form-control" id="versi" name="versi" placeholder="Versi Jurnal">

        <label for="frekuensi" class="col-form-label">Frekuensi</label>
        <input type="text" class="form-control" id="frekuensi" name="frekuensi" placeholder="Frekuensi Jurnal">

        <label for="penerbit" class="col-form-label">Penerbit</label>
        <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Penerbit Jurnal">

        <label for="deskripsiJurnal" class="col-form-label">Deskripsi Jurnal</label>
        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>

        <label for="linkJurnal" class="col-form-label">Link Jurnal</label>
        <input type="text" class="form-control" id="link_jurnal" name="link_jurnal" placeholder="link Jurnal">

        <label for="linkArtikel" class="col-form-label">Link Artikel</label>
        <input type="text" class="form-control" id="link_artikel" name="link_artikel" placeholder="Link Artikel">
    </div>

    <div class="dataredaksi">
        <h4>Data Dewan Redaksi</h4>
        <label for="penanggungJawab" class=" col-form-label">Penanggung Jawab</label>
        <input type="text" class="dewan form-control" id="penanggungJawab" placeholder="penanggung Jawab">

        <label for="pengarah1" class=" col-form-label">Pengarah</label>
        <input type="text" class="dewan form-control" id="pengarah1" name="pengarah1" placeholder="pengarah 1">
        <input type="text" class="dewan form-control" id="pengarah2" name="pengarah2" placeholder="pengarah 2">

        <label for="ketuaRedaksi" class=" col-form-label">Ketua Redaksi</label>
        <input type="text" class="dewan form-control" id="ketuaRedaksi" placeholder="Ketua Redaksi">

        <label for="editor1" class=" col-form-label">Editor</label>
        <input type="text" class="dewan form-control" id="editor1" name="editor1" placeholder="Editor 1">
        <input type="text" class="dewan form-control" id="editor2" name="editor2" placeholder="Editor 2">
        <input type="text" class="dewan form-control" id="editor3" name="editor3" placeholder="Editor 3">
        <input type="text" class="dewan form-control" id="editor4" name="editor4" placeholder="Editor 4">
        <input type="text" class="dewan form-control" id="editor5" name="editor5" placeholder="Editor 5">

        <label for="dataInformasi1" class=" col-form-label">Data dan Informasi</label>
        <input type="text" class="dewan form-control" id="data_dan_formasi1" name="data_dan_formasi1" placeholder="Data dan Informasi 1">
        <input type="text" class="dewan form-control" id="data_dan_formasi2" name="data_dan_formasi2" placeholder="Data dan Informasi 2">
        <input type="text" class="dewan form-control" id="data_dan_formasi3" name="data_dan_formasi3" placeholder="Data dan Informasi 3">
        <input type="text" class="dewan form-control" id="data_dan_formasi4" name="data_dan_formasi4" placeholder="Data dan Informasi 4">
        <input type="text" class="dewan form-control" id="data_dan_formasi5" name="data_dan_formasi5" placeholder="Data dan Informasi 5">
        
    </div>
    
    <div class="confirm">
        <button type="submit" class="btn confirmBtn btn-primary col">Input Data</button>
        <button type="submit" class="btn cancelBtn btn-second col">Cancel</button>
    </div>

</form>

<script>
    const nama_jurnal = document.querySelector('#nama_jurnal');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function(){
        fetch('/inputjurnal/' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });
</script>


@endsection