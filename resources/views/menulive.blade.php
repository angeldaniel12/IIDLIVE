@extends('layouts.liveview') <!-- Panel para la vista de Livestreaming-->

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12"> <!-- Tamaño del contenedor de bienvenida-->
            <div class="card">
                <div class="card-header">{{ __('Bienvenido al Panel de Livestreamings') }} {{ auth()->user()->nombre }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Hola, como estas el dia de hoy?') }} 
                </div>
                @auth
                <!--buscar el router para poder poner la principal la cual tendra acceso el usuario
                <a href="{{ url('/principal') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">CONTINUAR</a>-->
                @endauth
               
            </div>
        </div>
    </div>
</div>
@endsection