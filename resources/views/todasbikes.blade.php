@extends('header')
@extends('layouts.app')
@section('content')

<div class="content">
    <div class="title m-b-md">
    Todas as bikes
    </div>
    <div class="links">
        @foreach ($bikes as $bike)
        <hr class="mb-4">
        <div>
        <p> Id Bike: {{ $bike->id }} <br>
        Descrição: {{ $bike->descricao }} <br>
        Modelo: {{ $bike->modelo }} <br>
        Preço: {{ $bike->preco }} <br>
        Disponível: {{ $bike->vendida == '0'?'Sim':'Não' }} <br>
        </p>
        </div>
        @endforeach
    </div>
</div>
@endsection
