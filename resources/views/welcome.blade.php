@extends('layouts.auth.main')

@section('title', 'Login')

@section('content')

<x-header/>

<main>
    <div class="container-fluid mt-5 p-1">
        <div class="row justify-content-center">
            <div class="col-md-8 p-2">
                <div class="card  bg-dark">
                    <div class="h2 d-flex justify-content-center p-1 text-light">Entre em sua conta para realizar sua reserva</div>

                    <div class="card-body">
                  

                        <form method="POST" action="#">
                        @csrf
                        <div class="row mb-3 justify-content-center d-flex text-light">

                            <div class="input mb-3">
                                <span class="h4"><label for="email" class=" col-form-label text-md-end">Digite Seu Endereço de Email</label></span>
                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror p-3" name="email" value="{{ old('email') }}" required autocomplet>
                                </div> 

                                @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>

                            <div class="input mb-3">
                                <span class="h4"><label for="password" class=" col-form-label text-md-end">Digite Sua Senha</label></span>
                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror p-3" name="password" value="{{ old('password') }}" required autocomplet>
                                </div> 

                                @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            
                            <div class="row ps-0 mt-3 ">
                                <div class="d-flex me-5 justify-content-between">
                                    <button type="submit" class="btn btn-outline-danger w-50 ">
                                    <div class="d-flex flex-row align-items-center justify-content-center me-5">
                                        <img src="/img/angle-right-b.svg" class="logo">
                                        <h2 class="h3">Entrar</h2>
                                    </div>
                                    </button>

                                    <div class="d-flex align-items-end">
                                        <a class="h5 text-info" href="{{ url('auth/register')}}">Ainda não Possui seu cadastro?<br>Cadastre-se aqui!</a>
                                    </div>
                                </div>

                            
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
      

