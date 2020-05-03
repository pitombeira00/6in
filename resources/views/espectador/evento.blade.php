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
            <div class="embed-responsive embed-responsive-21by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/pDMAfc1ya1M" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
        </div>
        
        <div class="card col-9">
            <div class="card-header text-white">
                Sala de Café
                <a data-toggle="tooltip" data-placement="top" title="Entra na sala ">
                    <i class="fa fa-info-circle fa-lx" aria-hidden="true"></i>
                </a>
            </div>
            <div class="embed-responsive embed-responsive-21by9">
                <iframe class="embed-responsive-item" src="https://video-app-5079-dev.twil.io/?passcode=5874755079" allow=" microphone; camera;  " ></iframe>
              </div>
        </div>
        <div class="card col-3">
            <div class="card-header text-white">
                 Reacoes
            </div>
            <div class="card-body">
                <div class="card bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-body">
                        <div class="row">

                            <a href="#" class="btn col-6 btn-outline-info"><i class="fa fa-hand-peace-o fa-4x " aria-hidden="true"></i></a>
                            <a href="#" class="btn col-6 btn-outline-success"><i class="fa fa-hand-spock-o fa-4x " aria-hidden="true"></i></a>
                            <a href="#" class="btn col-6 btn-outline-danger"><i class="fa fa-heart-o fa-4x " aria-hidden="true"></i></a>
                            <a href="#" class="btn col-6 btn-outline-dark"><i class="fa fa-frown-o fa-4x " aria-hidden="true"></i></a>
                            
                        </div>
                        

                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
