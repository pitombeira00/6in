@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="card col-2">
            <div class="card-header text-white">
                <img class="rounded mx-auto d-block" src="{{ asset('img/logo.svg') }} " alt="Responsive image">
            </div>
            <div class="card-body">
                <div class="d-flex flex-column">
                    <div class="p-2 "><a class="text-white" href="{{route('home')}}">Inicio</a></div>
                    <div class="p-2 "><a class="text-white" href="{{route('home')}}">Perfil</a></div>
                    <div class="p-2 "><a class="text-white" href="{{route('eventos')}}">Salas</a></div>
                    <div class="p-2 "><a class="text-white" href="{{route('home')}}">Lembretes</a></div>
                  </div>
            </div>
        </div>
        <div class="card col-10">
            <div class="card-header text-white">
               Bem vindo
            </div>
        </div>

    </div>
</div>
@endsection
