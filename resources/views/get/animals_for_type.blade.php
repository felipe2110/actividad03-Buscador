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
                <p class="card-text text-truncate" data-bs-toggle="tooltip" data-bs-placement="top" title="{{$animal->description}}">{{$animal->description}}</p>
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
