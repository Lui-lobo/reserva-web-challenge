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
                    <div class="w-100">
                        <div class="mb-3 w-100">
                            <label for="name" class="form-label">Sejá Bem Vindo:</label>
                            <input type="text" class="form-control input-reserva" id="name" aria-describedby="name" value="{{$user->name}}" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="mesa" class="form-label">Você selecionou a mesa:</label>
                            <select id="mesa" class="form-select" disabled>
                                <option value="{{$mesas->id}}">{{$mesas->mesa}}</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="horario" class="form-label">Selecione o Horario que é melhor para você:</label>
                            <select id="horario" class="form-select">
                                @foreach($horario as $item)
                                    <option value="{{$item->id}}">{{$item->horarios_disponiveis}}</option>
                                @endforeach
                            </select>
                        </div>

                        @if($errors->any())
                            <h4>{{$errors->first()}}</h4>
                        @endif

                        <div class="mb-3">
                            <label for="valor" class="form-label">O valor por horário destá mesa é:</label>
                            <input type="text" class="form-control" id="valor" aria-describedby="valor" value="{{$mesas->preco_hora}}" disabled>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 mt-3">Reservar</button>

                        <a type="button" class="btn btn-danger w-100 mt-4" href="{{url('/reserva/')}}">Escolher Outra Mesa</a>
                    </div>
                </form>
            </div>
        
        </div>
    </div>
</main>

@endsection