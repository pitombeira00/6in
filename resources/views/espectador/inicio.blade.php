@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="card card-menu col-2">
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
        <div class="card col-10 card-conteudo">
            <div class="card-header">
                <p class="">Confira os eventos de sua preferência</p>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                      <div class="card card-nob card-conteudo">
                        <div class="card-body">
                          <a href="{{route('sala')}}">
                              <img class="img-fluid" src="{{ asset('img/ev1.png') }}" alt="Responsive image">
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="card card-nob card-conteudo">
                        <div class="card-body">
                            <a href="#!">
                                <img class="img-fluid" src="{{ asset('img/ev2.png') }}" alt="Responsive image">
                            </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="card card-nob card-conteudo">
                        <div class="card-body">
                            <a href="#!">
                                <img class="img-fluid" src="{{ asset('img/ev3.png') }}" alt="Responsive image">
                            </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="card card-nob card-conteudo">
                        <div class="card-body">
                            <a href="#!">
                                <img class="img-fluid" src="{{ asset('img/ev4.png') }}" alt="Responsive image">
                            </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="card card-nob card-conteudo">
                        <div class="card-body">
                            <a href="#!">
                                <img class="img-fluid" src="{{ asset('img/ev5.1.png') }}" alt="Responsive image">
                            </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="card card-nob card-conteudo">
                        <div class="card-body">
                            <a href="#!">
                                <img class="img-fluid" src="{{ asset('img/ev6.png') }}" alt="Responsive image">
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
