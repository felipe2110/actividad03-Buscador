@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br/>
            <br />
            <figure class="text-center">
                <h1>Crea un animal y agregale imagenes</h1>
            </figure>
            <form action="{{route('Animals.store')}}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for="">Descripcion</label>
                    <input class="form-control" id="description" name="description" rows="3"></input>
                </div>
                <div class="form-group">
                    <label for="">Tipo:</label>
                    <select id="Select" class="form-select" name="type">
                        <option value="Mamíferos">Mamíferos</option>
                        <option value="Aves">Aves</option>
                        <option value="Peces">Peces</option>
                        <option value="Reptiles">Reptiles</option>
                        <option value="Anfibios">Anfibios</option>
                        <option value="Invertebrados">Invertebrados</option>

                    </select>
                </div>
                <div class="form-group">
                    <label for="">Imagen</label>
                    <input class="form-control" type="file" id="formFileMultiple" multiple name="fileImage[]">
                </div>
                <hr>
                <div class="form-group">
                    <button class="btn btn-primary">Crear</button>
                    <a href="{{url('Animals')}}" class="btn btn-dark">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
