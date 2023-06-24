<div class="col-12 col-md-4 my-4 d-flex justify-content-center">
    <div class="card shadow">
        <img src="{{!$announcement->images()->get()->isEmpty() ? Storage::url($announcement->images()->first()->path) : "https://picsum.photos/1200/1200"}}" class="card-img-top" alt="...">
        <div class="card-body px-4">
            <div class="badge bg-dark bg-gradient rounded-pill mb-3 p-2">{{__('ui.category')}}: {{$announcement->category->name}} </div>
            <h5 class="card-title f-title mb-3">{{$announcement->title}}</h5>
            <p class="card-text">{{substr($announcement->body, 0, 100)}}</p>
        </div>
            <ul class="list-group list-group-flush">
            <li class="list-group-item fw-semibold"> {{$announcement->price}} € </li>
            {{-- <li class="list-group-item">Categoria: {{$announcement->category->name}} </li> --}}
            <li class="list-group-item">{{__('ui.published_on')}}: {{$announcement->created_at->format('d/m/Y')}}</li>
            </ul>
        <div class="card-body px-4 my-3">
            <a href="{{route('detailShow',compact('announcement'))}}" class="text-reset text-decoration-none fw-semibold fs-5">{{__('ui.detail')}} <i class="fa-solid fa-circle-arrow-right"></i></a>
        </div> 
    </div>
</div>    