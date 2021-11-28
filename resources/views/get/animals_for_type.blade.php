<div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach($animals as $animal)
    <div class="col">
        <div class="card">
            <div id="carouselExampleControls{{$animal->id}}" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach($animal->images as $image )
                    <div class="carousel-item @if($loop->index==0) active @endif">
                        <img src="{{ url('uploads/animal/'.$image->image)}}" height="300px" class="d-block w-100" alt="...">
                    </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls{{$animal->id}}" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls{{$animal->id}}" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="card-body">
                <h5 class="card-title">{{$animal->name}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{$animal->type}}</h6>
                <p class="card-text text-truncate" data-bs-toggle="popover" data-bs-placement="top" title="{{$animal->description}}">{{$animal->description}}</p>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$animal->id}}">
                    Ver Información
                </button>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal{{$animal->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="card-title">{{$animal->name}}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div id="carouselExampleControls{{$animal->id}}00" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach($animal->images as $image )
                                    <div class="carousel-item @if($loop->index==0) active @endif">
                                        <img src="{{ url('uploads/animal/'.$image->image)}}" height="300px" class="d-block w-100" alt="...">
                                    </div>
                                    @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls{{$animal->id}}00" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls{{$animal->id}}00" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                {{$animal->description}}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    @endforeach
</div>

@if($count = count($animals) == 0)
<figure class="text-center">
    <h1>No hay resultados para la busqueda</h1>
</figure>
@endif
