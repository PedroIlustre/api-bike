@extends('header')
@extends('layouts.app')
@section('content')

<div class="content">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <div class="title m-b-md">
                    Gerenciamento de Bikes
                </div>

                <div class="links">
                    <a href="{{ route('listar') }}">Listar Todas Bikes</a>
                    <a href="{{ route('consultar') }}">Consultar </a>
                    <a href="{{ route('criar') }}">Criar</a>
                    <a href="{{ url('/api/atualizar') }}">Atualizar </a>
                    <a href="{{ url('/api/editar') }}">Editar </a>
                </div>
            </div>
</div>
@endsection
