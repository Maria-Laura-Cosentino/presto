<x-layout>
  <div class="container my-5">
      <div class="row">
          <div class="col-4">
              <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="https://picsum.photos/200/201" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="https://picsum.photos/200/202" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="https://picsum.photos/200/203" class="d-block w-100" alt="...">
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
          <div class="col-8">
              <h5 class="">{{$announcement->title}}</h5>
              <p class="">{{$announcement->body}}</p>
              <p class="">{{$announcement->price}} €</p>        
              <p class="">Creato da: {{$announcement->user->name}} il: {{$announcement->created_at->format('d/m/Y')}}</p>
              <p>Categoria: {{$announcement->category->name}}</p>
              {{-- {{$category = $categories->find($announcement->category_id->id)}} --}}
              {{-- <a href="{{ route('categoryShow', compact('category'))}}">{{$announcement->category->name}}</a> --}}
          </div>
      </div>
  </div>
</x-layout>