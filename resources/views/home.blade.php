@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @guest
            <div class="card special-card">
                
                <img class="img-logo rounded mx-auto d-block" src="{{ asset('img/logo.svg') }} " alt="Responsive image">

                <h4 class="rounded mx-auto d-block text-white">Faça seu login</h4>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"></label>
                            

                            <div class="col-md-6">
                                   
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror input-icon" name="email" value="{{ old('email') }}" required autocomplete="email"  placeholder="&#xF0e0; E-mail" autofocus>
                               
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror input-icon" name="password" placeholder="&#xF023; Senha" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-warning btn-block">
                                    {{ __('Entrar') }}
                                </button>
                        </div>
                        <div class="col-md-6 offset-md-5">
                            @if (Route::has('password.request'))
                                <a class="btn btn-link text-white" href="{{ route('password.request') }}">
                                    {{ __('Esqueci minha senha') }}
                                </a>
                            @endif
                        </div>
                        <div class="col-md-6 offset-md-5 item-criar ">
                            @if (Route::has('password.request'))
                                <a class="btn btn-link text-white" href="{{ route('register') }}">
                                    {{ __('Criar Conta') }}
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
            @else 
            <div class="card special-card">
                
                <div class="card-header text-white">Dashboard</div>

                <h4 class="rounded mx-auto d-block text-white">Dashboard</h4>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                </div>
            </div>
            @endguest
            
        </div>
    </div>
</div>
@endsection
