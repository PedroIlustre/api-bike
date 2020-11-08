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
                    <a href="{{ route('list') }}">Listar Todas Bikes</a>
                    <a href="{{ route('consult') }}">Consultar </a>
                    <a href="{{ route('create') }}">Criar</a>
                </div>
            </div>
</div>
@endsection
