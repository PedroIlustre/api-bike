@extends('header')
@extends('layouts.app')
@section('content')

<div class="col-md-8 order-md-1">
    <h4 class="mb-3">Cadastro de Bike</h4>
    <form class="needs-validation" novalidate method="post" action="{{ route('store') }}">
    @csrf
    <div class="row">
        <div class="col-md-6 mb-3">
        <label for="descricao">Descrição</label>
        <input type="text" class="form-control" name="descricao" id="descricao" placeholder="" value="" required>
        <div class="invalid-feedback">
        Campo de digitação obrigatório.
        </div>
        </div>
        <div class="col-md-6 mb-3">
        <label for="modelo">Modelo</label>
        <input type="text" class="form-control" name="modelo" id="modelo" placeholder="" value="" required>
        <div class="invalid-feedback">
            Campo de digitação obrigatório.
        </div>
        </div>
        <div class="col-md-6 mb-3">
        <label for="preco">Preço</label>
        <input type="text" class="form-control" name="preco" id="preco" placeholder="" value="" required>
        <div class="invalid-feedback">
            Campo de digitação obrigatório.
        </div>
        </div>
        <div class="col-md-6 mb-3">
        <label for="data_cadastro">Data Recebimento</label>
        <input type="text" class="form-control" data-mask="00/00/0000" name="data_cadastro" id="data_cadastro" placeholder="" value="" required>
        <div class="invalid-feedback">
            Campo de digitação obrigatório.
        </div>
        </div>
    </div>

    <hr class="mb-4">
    <h4 class="mb-3">Vendida</h4>
    <div class="d-block my-3">
        <div class="custom-control custom-radio">
        <input id="nao" name="vendida" type="radio" class="custom-control-input" checked required>
        <label class="custom-control-label" for="nao">Não</label>
        </div>
        <div class="custom-control custom-radio">
        <input id="sim" name="vendida" type="radio" class="custom-control-input"  required>
        <label class="custom-control-label" for="sim">Sim</label>
        </div>
    </div>
    <hr class="mb-4">
    <button class="btn btn-primary btn-lg btn-block" type="submit">Salvar</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../../assets/js/vendor/popper.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>
<script src="../../assets/js/vendor/holder.min.js"></script>
<script>
    (function() {
    'use strict';
    window.addEventListener('load', function() {
        var forms = document.getElementsByClassName('needs-validation');
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
    })();
</script>
@endsection