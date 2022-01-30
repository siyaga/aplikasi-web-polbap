

@extends('layouts.main')

@section('container')
<style>
    /*container=========================*/
			.content-group{

display: flex;
flex-direction: row;
flex-flow: wrap;
justify-content: space-between;
align-items: center;
position: static;
padding: 25px 50px;
width: 100%;
height: 100%;

background-color: #ffffff;


}
.content{
display: flex;
justify-content: center;
align-items: center;
width: 609px;
height: 363px;
paddding: 45px 45px 45px 45px;
border-radius: 15px;
transition-duration: 0.4s;

background: #ffffff;
box-shadow: 0px 10px 30px rgba(30, 30, 30, 0.1);

/* Inside auto layout */

}
.content:hover{
background-color: #F0F8FF;
cursor: pointer;

}
.content:onclick{

}

.detail{
display: flex;
flex-direction: column;
align-items: center;
position: static;

width: 352px;
height: 273px;
}

.imgJurnal{
position: static;
align-self: center;
alignment-baseline: central;
width: 180px;
height: 273px;
margin-right: 20px;

}
.judulJurnal{
position: static;
margin-bottom: 5px;
width: 312px;
height: 46px;

font-family: Roboto;
font-style: bold;
font-weight: 900;
font-size: 17px;
line-height: 20px;
color: black;
}
.versiJurnal{
position: static;
margin-bottom: 5px;
width: 312px;
height: 23px;

font-family: Roboto;
font-style: normal;
font-size: 13px;
line-height: 20px;
color: black;
}
.deskripsiJurnal{
position: static;
margin-bottom: 5px;
width: 312px;
height: 179px;

font-family: Roboto;
font-style: normal;
font-weight: normal;
font-size: 13px;
line-height: 15px;
text-align: justify;
color: black;
}
.autorJurnal{
position: static;
width: 312px;
height: 18px;

font-family: Roboto;
font-style: normal;
font-size: 15px;
line-height: 18px;
color: black;
/* identical to box height */

}

a:hover{
    text-decoration: none;
}

</style>

<div class="content-group">
    <a href="/jurnal">
        <div class="content " onclick="/jurnal">
            <div class="imgJurnal ml-3">
                <img src="img/{{ $image }}" alt="jurnal" style="width: 180px; height: 273px;">
            </div>
            <div class="detail m-2">
            
                <div class="judulJurnal">{{ $title }}</div>
                <div class="versiJurnal">{{ $version }}</div>
                <div class="deskripsiJurnal">{{ $description }}</div>
                <div class="autorJurnal">{{ $author }}</div>
            </div>
        </div>
    </a>
    
    
    

</div>
@endsection