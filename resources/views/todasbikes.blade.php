@extends('header')
@extends('layouts.app')
@section('content')

<div class="content">
    <div class="title m-b-md">
    Todas as bikes
    </div>
    <div class="links">
        @foreach ($bikes as $bike)
        <p> Id Bike: {{ $bike->id }} <br>
        Descrição: {{ $bike->descricao }} <br>
        Modelo: {{ $bike->modelo }} <br>
        Preço: {{ $bike->preco }} <br>
        Disponível: {{ $bike->vendida == '0'?'Sim':'Não' }} <br>
        </p>
        @endforeach
    </div>
</div>
@endsection
