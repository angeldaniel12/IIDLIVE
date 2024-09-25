@extends('layouts.consumidor')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bienvenido(a)') }}  {{ auth()->user()->nombre }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Hola, como estas el dia de hoy') }}
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