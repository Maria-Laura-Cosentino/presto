<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <h1>
                    {{$announcement_to_check ? 'Ecco l\'annuncio da revisionare' : 'Non ci sono annunci da revisionare'}}
                </h1>
            </div>
        </div>
    </div>
    @if($announcement_to_check)
        <div class="container pt-5">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="https://picsum.photos/700/400" class="d-block" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="https://picsum.photos/700/401" class="d-block" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="https://picsum.photos/700/403" class="d-block" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center py-5">
                <div class="col-12 col-md-4">
                    <h5 class="">{{$announcement_to_check->title}}</h5>
                    <p class="">{{$announcement_to_check->body}}</p>
                    <p class="">{{$announcement_to_check->price}} €</p>        
                    <p class="">Creato il: {{$announcement_to_check->created_at->format('d/m/Y')}}</p>
                    <p>Categoria: {{$announcement_to_check->category->name}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <form action="{{route('revisor.accept_announcement', ['announcement' => $announcement_to_check])}}" method="post">
                        @csrf
                        @method('patch')
                        <button class="submit btn btn-success shadow">Accetta</button>
                    </form>
                </div>
                <div class="col-12 col-md-6 text-end">
                    <form action="{{route('revisor.reject_announcement', ['announcement' => $announcement_to_check])}}" method="post">
                        @csrf
                        @method('patch')
                        <button class="submit btn btn-danger shadow">Rifiuta</button>
                    </form>
                </div>
            </div>
        </div>
        @endif
</x-layout>

{{-- {{$announcement_to_check->user->name}} --}}