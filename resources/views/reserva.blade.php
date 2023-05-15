@extends('layouts.areaReserva.reserva')

@section('title', 'Reserva')

@section('content')

<x-menu-lateral  />

<main>
    <!--Container Main start-->
    <h1 class="h1">Escolha Qual Mesa Deseja Reservar</h1>
    <div class="height-100 bg-light">
        <div class="container-fluid d-flex align-items-center justify-content-center flex-wrap">
            @foreach($mesas as $item)
            <div class="card bg-dark mesas m-4">

                <img class="card-img-top  foto-mesa" src="img/mesas.jpg" alt="Card image cap">
                <div class="card-header text-white align-items-center justify-content-center d-flex">
                    <h4 class="h4">{{$item->mesa}}</h4>
                </div>

                <div class="card-body text-white">
                    
                    <h5 class="h5">Está mesa está: Ativa</h5>
                    <h5 class="h5">Para até: {{$item->quantidade_pessoas}} pessoas</h5>
                    <h5 class="h5">No valor de: {{$item->preco_hora}}R$ a hora</h5>

                </div>

                <div class="d-flex justify-content-center p-5">
                    <a href="{{url('/reserva/reservar/' . $item->id )}}" type="button" class="btn btn-primary w-100 h-10vh">Reservar</a>
                </div>
                
            </div>
            @endforeach
        
    </div>
        
</main>

@endsection