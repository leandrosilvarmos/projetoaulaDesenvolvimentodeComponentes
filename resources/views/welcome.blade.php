@extends('layouts.app')

@section('link')
<a class="btn btn-primary px-5" href="{{ route('login') }}">{{ __('Login') }}</a>
@endsection

@section('content')



<!-- For Demo Purpose -->
<div class="container py-3">
    <h2 class="h3 font-weight-bold">Portal Informativo</h2>
    <div class="row">
        <div class="col-lg-10 mb-4">
            <p class="font-italic text-muted"> Nosso condominio sempre preservando pelo bem-estar de nossos condominos, desenvolvemos um portal</p>
            <p class="font-italic text-muted">de noticias para você estar sempre atualizado, com as informações da <strong class="font-weight-bold text-dark">COVID-19.</strong></p>
        </div>
        <div class="col-lg-8">
            <p class="font-italic text-muted"> E sempre lembrando a todos, se mantenha em segurança sua e de seus familiares, juntos iremos superar todas as dificuldades do momento atual.</p>
        </div>
    </div>
</div>

@endsection