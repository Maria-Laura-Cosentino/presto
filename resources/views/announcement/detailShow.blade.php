<x-layout>
  <div class="container-fluid mb-4">
    <div class="row bg-body-tertiary py-5">
      <div class="col-12">
          <h1 class="text-center fw-semibold display-2">{{__('ui.detail')}}</h1>
      </div>
    </div>
  </div>

  <div class="container px-4 px-lg-5 my-5">
    <div class="row gx-4 gx-lg-5 align-items-center">
        <div class="col-md-6">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    
              @if($announcement->images)
              <div class="carousel-inner">
                  @foreach ($announcement->images as $image )
                  <div class="carousel-item @if($loop->first)active @endif">
                      <img src="{{Storage::url($image->path)}}" class="w-100 rounded-2"  alt="...">
                  </div>
                  @endforeach
                  </div>
              @endif
              @if ($announcement->images()->get()->isEmpty())
                  <div class="carousel-inner">
                      <div class="carousel-item active">
                          <img src="https://picsum.photos/1200/1200" class="w-100 rounded-2"  alt="...">
                      </div>
                      <div class="carousel-item">
                          <img src="https://picsum.photos/1200/1201" class="w-100 rounded-2" alt="...">
                      </div>
                      <div class="carousel-item">
                          <img src="https://picsum.photos/1200/1203" class="w-100 rounded-2" alt="...">
                      </div>
                  </div>
              @endif
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
        <div class="col-md-6">
          <div class="small mb-1">{{__('ui.category')}}: {{$announcement->category->name}}</div>
          <h1 class="display-5 fw-bolder t-title">{{$announcement->title}}</h1>
          <div class="fs-5 mb-5">
              <span class="">{{$announcement->price}} €</span>
              {{-- <span>$40.00</span> --}}
          </div>
          <p class="lead">{{$announcement->body}}</p>
          <div class="card-footer my-5 pt-0 bg-transparent border-top-0">
            <div class="d-flex align-items-end justify-content-between">
                <div class="d-flex align-items-center">
                    <img class="rounded-circle me-3" src="https://dummyimage.com/100x100/ced4da/6c757d" alt="...">
                    <div class="">
                        <div class="fs-5 mb-1">{{__('ui.created_by')}}:<span class="fw-semibold"> {{$announcement->user->name}}</span></div>
                        <div class="fs-5">{{__('ui.published_on')}}: <span class="fw-semibold">{{$announcement->created_at->format('d/m/Y')}}</span></div>
                    </div>
                </div>
            </div>
        </div>
      </div>
        {{-- <div class="col-md-6">
            <h5 class="">{{$announcement->title}}</h5>
            <p class="">{{$announcement->body}}</p>
            <p class="">{{$announcement->price}} €</p>        
            <p class="">Creato da: {{$announcement->user->name}} il: {{$announcement->created_at->format('d/m/Y')}}</p>
            <p>Categoria: {{$announcement->category->name}}</p>
            {{-- {{$category = $categories->find($announcement->category_id->id)}} --}}
            {{-- <a href="{{ route('categoryShow', compact('category'))}}">{{$announcement->category->name}}</a>
        </div> --}}
    </div>
  </div>
</x-layout>