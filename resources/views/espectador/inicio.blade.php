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
            <div class="card-header">
                <p class="text-white">Confira os eventos</p>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                      <div class="card">
                        <div class="card-body">
                            <a href="#!">
                                <img class="img-fluid" src="{{ asset('img/teste.png') }}" alt="Responsive image">
                            </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="card">
                        <div class="card-body">
                            <a href="#!">
                                <img class="img-fluid" src="https://d335luupugsy2.cloudfront.net/images%2Flanding_page%2F716644%2FFacebook-anuncio_1200x628px.png" alt="Responsive image">
                            </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="card">
                        <div class="card-body">
                            <a href="#!">
                                <img class="img-fluid" src="https://blog.geofusion.com.br/hubfs/1%20Webinar%20an%C3%BAncio%20linkedin.png" alt="Responsive image">
                            </a>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            

        
        </div>
    </div>
</div>
@endsection
