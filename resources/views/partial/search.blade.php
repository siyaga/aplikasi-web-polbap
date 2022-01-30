<style>

    .searchbox{

    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    position: static;
    padding: 0px 16px;
    width: 75%;
    height: 40px;
    left: 0px;
    top: 0px;
    border-radius: 25px;
    padding: auto;
    margin-bottom: 30px;

    background: white;
    }

    .searchfield{

    position: static;
    width: 95%;
    height: 40px;
    border: none;
    }
    .searchfield:focus{
    outline: none;
    border-color: inherit;
    box-shadow: none;
    }
    .iconSearch{
				position: static;
				align-items: : right;
				width: 25px;
				height: 26px;
				border: none;
				background: url(img/iconSearch.png);
				size: 26px;

    }
    .iconSearch:focus{
        outline: none;
    }
    

</style>


<div class="d-flex justify-content-between" style="height:100%">
    <img src="img/art kiri.png" alt="art kiri">
    <div class="d-flex flex-column justify-content-between p-4" style="background: #4A96DD; width: 100%;">
        <h1 class="align-self-center text-center font-weight-bold" style="color: white;">JURNAL POLITEKNIK BHAKTI ASIH PURWAKARTA</h1>
        
          <form class="searchbox align-self-center mb-2">
				<input type="search" class="searchfield" placeholder="Cari Jurnal...">
					<button class="iconSearch"></button>
				</form>
    </div>
    <img src="img/art kanan.png" alt="art kanan">


</div>