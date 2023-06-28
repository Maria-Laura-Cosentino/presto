<x-layout>
    <div class="container-fluid mb-4">
        <div class="row bg-body-tertiary py-5">
            <div class="col-12">
                <h1 class="text-center fw-semibold display-2">
                    {{$announcement_to_check ? __('ui.announcements_to_review') : __('ui.there_are_no_announcements_to_review')}}
                </h1>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row mb-5">
            <div class="col-12 d-flex justify-content-end">
                <a href="{{route('revisor.history')}}" class="text-reset text-decoration-none border rounded-1 fw-semibold shadow p-3 fs-3">{{__('ui.revised_announcements')}} <i class="fa-solid fa-circle-arrow-right"></i></a>
            </div>
        </div>
        <div class="row my-3">
            @if (session()->has('reject.message'))
            <div class="alert alert-danger">
             {{session('reject.message')}}
            </div>
            @endif

            @if (session()->has('accept.message'))
            <div class="alert alert-success">
             {{session('accept.message')}}
            </div>
            @endif
        </div>
    </div>
    <div class={{$announcement_to_check ? "d-none" :"empy-space"}} ></div>
    @if($announcement_to_check)
        <div class="container pt-5">
            <div class="row justify-content-center">
                <div class="col-12 mb-5">
                    <div id="carouselExampleAutoplaying" class="carousel slide">
                        {{-- @if(count($announcement_to_check->images))
                        @else
                        @endif --}}
                        @if($announcement_to_check->images)
                            <div class="carousel-inner">
                                @foreach ($announcement_to_check->images as $image )
                                <div class="carousel-item @if($loop->first)active @endif">
                                    <div class="d-block d-md-flex justify-content-md-center">
                                        <div class="img-carousel">
                                            <img src="{{$image->getUrl(800, 800)}}" class="w-100 rounded-2"  alt="...">
                                        </div>
                                        <div class="text-carousel-cont ps-md-5 pt-4 pt-md-0">
                                            <div>
                                                <div class="my-3">
                                                    <h5> Tags </h5>
                                                    @if($image->labels)
                                                        @foreach ($image->labels as $label)
                                                            @if (!$loop->last)
                                                                <p class="d-inline"> {{$label}}, </p>
                                                            @else
                                                                <p class="d-inline"> {{$label}}. </p>
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                </div>
                                                <hr>
                                                <div class="card-body">
                                                    <h5>{{__('ui.image_review')}}</h5>
                                                    <p> {{__('ui.adult')}}: <span class="{{$image->adult}}"> </span></p> 
                                                    <p> {{__('ui.spoof')}}: <span class="{{$image->spoof}}"> </span></p>
                                                    <p> {{__('ui.medical')}}: <span class="{{$image->medical}}"> </span></p>
                                                    <p> {{__('ui.violence')}}: <span class="{{$image->violence}}"> </span></p>
                                                    <p> {{__('ui.racy')}}: <span class="{{$image->racy}}"> </span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                            @endif
                            @if ($announcement_to_check->images()->get()->isEmpty())
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
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                            @endif
                        </div>     
                        <div>
                            <div class="p-custom pt-5">
                                <div class="card">
                                    <div class="card-header">
                                        {{__('ui.category')}}: {{$announcement_to_check->category->name}}
                                    </div>
                                    <div class="card-body">
                                      <h5 class="card-title">{{$announcement_to_check->title}}</h5>
                                        <p class="card-title pt-3"> <span class="fw-semibold"> {{__('ui.price')}}: </span>  {{$announcement_to_check->price}} €</p>   
                                      <p class="py-2"> <span class="fw-semibold"> {{__('ui.description')}}: </span> <br> {{$announcement_to_check->body}}</p>
                                    </div>
                                    <div class="card-footer text-body-secondary">
                                        {{__('ui.published_on')}}: {{$announcement_to_check->created_at->format('d/m/Y')}}
                                    </div>
                                  </div>
                            </div>
                            <div class="p-custom">
                                <p class="fs-2 py-2 text-uppercase border-bottom border-2 mt-2">{{__('ui.category')}}: {{$announcement_to_check->category->name}}</p>
                                <h2 class="display-5 fw-bold">{{$announcement_to_check->title}}</h2>
                                <p class="fs-4 py-2">{{$announcement_to_check->price}} €</p>        
                                <p class="fs-3 py-2 fw-semibold">{{__('ui.published_on')}}: {{$announcement_to_check->created_at->format('d/m/Y')}}</p>
                                <p class="fs-5 p-3 bg-light">{{$announcement_to_check->body}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="p-custom my-5">
                <div class="my-3 d-flex justify-content-between">
                {{-- <div class="col-12 col-md-6"> --}}
                    <form action="{{route('revisor.accept_announcement', ['announcement' => $announcement_to_check])}}" method="post">
                        @csrf
                        @method('patch')
                        <button class="submit btn btn-success shadow fs-3">{{__('ui.accept')}}</button>
                    </form>
                {{-- </div> --}}
                {{-- <div class="col-12 col-md-6 text-end"> --}}
                    <form action="{{route('revisor.reject_announcement', ['announcement' => $announcement_to_check])}}" method="post">
                        @csrf
                        @method('patch')
                        <button class="submit btn btn-danger shadow fs-3">{{__('ui.reject')}}</button>
                    </form>
                </div>
            </div>
        </div>
    @endif
</x-layout>

{{-- {{$announcement_to_check->user->name}} --}}
