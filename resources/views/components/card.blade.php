<div class="col-12 col-md-4 my-4 px-2 d-flex justify-content-center">
    <div class="card w-75">
        <img src="https://picsum.photos/200/200" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">{{$announcement->title}}</h5>
        <p class="card-text">{{$announcement->body}}</p>
        </div>
        <ul class="list-group list-group-flush">
        <li class="list-group-item"> {{$announcement->price}} € </li>
        <li class="list-group-item">Categoria: {{$announcement->category->name}} </li>
        <li class="list-group-item">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}}</li>
        </ul>
        <div class="card-body">
        <a href="{{route('detailShow',compact('announcement'))}}" class="btn btn-primary">Dettaglio</a>
        </div>
    </div>
</div>    