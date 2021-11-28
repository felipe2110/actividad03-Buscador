@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <br />
            <br />
            <figure class="text-center">
                <h1>Animales</h1>
            </figure>
            <div class="container">
                <div class="row">
                    <div class="col-10">
                        <label for="formGroupExampleInput2" class="form-label">Busca un Animal</label>
                        <input type="search" class="form-control" id="search_value" name="search_value" placeholder="Puedes buscar por tipo">
                    </div>
                    <div class="col">
                        <a href="{{url('Animals/create')}}" class="btn btn-success">Crear nuevo Animal</a>
                    </div>
                </div>
                <br />
                <br />
            </div>
            <div class="container">
                <div class="row" id="animals_value">
                    <figure class="text-center">
                        <h1>¿Qué esperas?.. empieza a buscar</h1>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
