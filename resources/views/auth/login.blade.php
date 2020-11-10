@extends('layouts.app')

@section('link')
<a class="btn btn-primary px-5" href="{{ url('/') }}">{{ __('Inicio') }}</a>
@endsection

@section('content')


<div class="login container" id="container">

    <div class="form-container sign-in-container">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h1 class="mt-1"> Realizar Login</h1>
            <p>Para ter acesso as informações do nosso condominio, você pode realizar o login atravês de alguma das redes 
                sociais listadas abaixo,facil, rapido e pratico. Se mantenha informado é em segurança. 
            </p>

            <div class="social-container">
                <a href="{{route('social.login', ['provider'=>'github'])}}" class="social"><i class="fab fa-github"></i></a>
                <a href="{{route('social.login', ['provider'=>'facebook'])}}" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="{{route('social.login', ['provider'=>'google'])}}" class="social"><i class="fab fa-google-plus-g"></i></a>
            </div>

        </form>
    </div>

    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-right">
                <h1 class="mt-1">Nosso portal de noticias</h1>
                <p>Para manter voce sempre informando, com todas as regras e avisos do nosso condomino.
                   </p>
                <p>Esperamos sempre poder contribuir para o seu bem-estar em nosso condominio, seguindos as normas de segurança para todos os condominos.</p>
            </div>
        </div>
    </div>


</div>
@endsection