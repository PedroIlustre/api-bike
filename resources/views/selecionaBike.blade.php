@extends('header')
@extends('layouts.app')
@section('content')
<div class="content">
    <center>
        <h2>Busque sua bike pelo ID</h2>
        <div class="links">
        <form method="post" action="{{ route('actionbike') }}">
        @csrf
            <select name="idBike"> 
                <option value=""> .: Todas :. </option>
                @foreach ($bikes as $bike)
                <option value="{{ $bike->id }}"> {{ $bike->modelo }}</option>
                @endforeach
            </select>
            <br> <br>
            <input type="submit" name="consultar" class="btn-primary consultar" value="Consultar">
            <input type="submit" id="deletar" name="deletar" class="btn-danger deletar" value="Deletar" >
        </form>
        </div>  
    </center>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>        
<script>
    $("#deletar").on("click", function(){
        return confirm("Deseja mesmo deletar Bike?");
    });
</script>
@endsection