@extends('layouts.areaReserva.criarReserva')

@section('title', 'Faça sua Reserva')

@section('content')

<x-menu-lateral  />

<main>
    <!--Container Main start-->
    <h1 class="h1">Reserve Sua Mesa</h1>
    <div class="height-100 bg-light">
        <div class="container-fluid d-flex align-items-center justify-content-center flex-wrap">
          
            <div class="container-fluid d-flex align-items-center justify-content-center mt-4 p-5 w-75 bg-dark text-white rounded">
              
                <form method="POST" action="{{url('/reserva/reservar/' . $mesas->id)}}">
                @csrf
                {{ csrf_field() }}
                    <div class="w-100">
                        <div class="mb-3 w-100">
                            <label for="name" class="form-label">Sejá Bem Vindo:</label>
                            <select id="name" class="form-select form-control input-reserva" name="name">
                                <option value="{{$user->id}}" name="name">{{$user->name}}</option>
                            </select>
                 
                        </div>

                        <div class="mb-3">
                            <label for="mesa" class="form-label">Você selecionou a mesa:</label>
                            <select id="mesa" class="form-select" name="mesa">
                                <option value="{{$mesas->id}}" name="mesa">{{$mesas->mesa}}</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="horario" class="form-label">Selecione o Horario que é melhor para você:</label>
                            <select id="horario" class="form-select" name="horario">
                                @foreach($horario as $item)
                                    <option value="{{$item->id}}" name="horario">{{$item->horarios_disponiveis}}</option>
                                @endforeach
                            </select>
                        </div>

                        @if($errors->any())
                        <div class="alert alert-danger" role="alert">
                            <h4>{{$errors->first()}}</h4>
                        </div>
                        @endif

                        <div class="mb-3">
                            <label for="valor" class="form-label">O valor por horário destá mesa é:</label>
                            <select id="valor" class="form-select" name="valor">
                                <option value="{{$mesas->id}}" name="valor">{{$mesas->preco_hora}}</option>
                            </select>
                        </div>

                        @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                        @endif

                        <button type="submit" class="btn btn-primary w-100 mt-3" name="submit" >Reservar</button>

                        <a type="button" class="btn btn-danger w-100 mt-4" href="{{url('/reserva/')}}">Escolher Outra Mesa</a>
                    </div>
                </form>
            </div>
        
        </div>
    </div>
</main>

@endsection