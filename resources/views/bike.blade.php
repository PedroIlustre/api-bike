@extends('header')
@extends('layouts.app')
@section('content')
<div class="content">
    <div class="title m-b-md">
    Sua Bike selecionada
    </div>
    <div class="links">
        <p> Id Bike: {{ $bike->id }} <br>
        Descrição: {{ $bike->descricao }} <br>
        Modelo: {{ $bike->modelo }} <br>
        Preço: {{ $bike->preco }} <br>
        Disponível: {{ $bike->vendida == '0'?'Sim':'Não' }} <br>
        </p>
    </div>
</div>
@endsection