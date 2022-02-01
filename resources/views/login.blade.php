@extends('layouts.jurnalLayoutLogin')

@section('container')
@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

</div>
    
@endif

@if (session()->has('loginError'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('loginError') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

</div>
    
@endif
<style>

    .content{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 50px;

        width: 100%;
        height: 500px;
    }
    .loginForm{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-content: center;

        width: 400px;
        height: auto;
        padding: 15px;
        border: 2px solid #4A96DD;
        border-radius: 15px;
    }

    label{
        margin-bottom: 5px;
        margin-top: 5px;
    }

    input[type=text], input[type=password]{
        margin-top: 5;
        margin-bottom: 5px;
    }

    input[type=text]:focus, input[type=password]:focus{
        border: 2px solid #4A96DD;
    }

    button{
        margin-top: 10px;
        margin-bottom: 10px;
        color: white;
        background: #4A96DD;

        border: 2px solid #4A96DD;
        border-radius: 5px;
    }

    button:hover{
        background: white;
        color:#4A96DD;

    }



</style>



    <div class="content">

    <form action="/login" method="post">
        @csrf
        <div class="loginForm">
            <label for="uname"><b>Username</b></label>
            <input type="username" name="username" placeholder="Enter Username" id="username" class="@error('username') is-invalid @enderror" value="{{ old ('username') }}" autofocus required>
            @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" id="password" required>
        
            <button type="submit">Login</button>
            </div>
    </form>
    </div>
@endsection