<x-layout>
    <div class="container-fluid mb-4 mt-5">
        <div class="row bg-body-tertiary py-5">
            <div class="col-12 mt-5">
                <h1 class="text-center fw-semibold display-2">
                    {{$announcement_to_restore ? 'Annunci revisionati' : 'Non ci sono annunci revisionati'}}
                </h1>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row my-3">
            @if (session()->has('restore.message'))
            <div class="alert alert-success">
             {{session('restore.message')}}
            </div>
            @endif
        </div>
    </div>
    <div class={{$announcement_to_restore ? "d-none" :"empy-space"}} ></div>
    @if($announcement_to_restore)
    <div class="container pt-5">
        <div class="row">
            <div class="col-12">
                <h2 class="fs-1">Annunci rifiutati</h2>
            </div>
            @foreach($announcement_to_restore as $announcement)
            <div class="col-12 col-md-4 my-4 d-flex justify-content-center">
                <div class="card shadow">
                    <img src="{{!$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(800, 800) : "https://picsum.photos/1200/1200"}}" class="card-img-top" alt="...">
                    <div class="card-body px-4">
                        <div class="badge bg-dark bg-gradient rounded-pill mb-3 p-2">{{__('ui.category')}}: {{$announcement->category->name}} </div>
                        <h5 class="card-title f-title mb-3">{{$announcement->title}}</h5>
                        <p class="">{{__('ui.published_on')}}: {{$announcement->created_at->format('d/m/Y')}}</p>
                    </div>
                    <div class="px-4 my-3 d-flex justify-content-between">
                        <a href="{{route('detailShow',compact('announcement'))}}" class="text-reset text-decoration-none fw-semibold fs-5">{{__('ui.detail')}} <i class="fa-solid fa-circle-arrow-right"></i></a>
                        <form action="{{route('revisor.update_announcement', ['announcement' => $announcement])}}" method="post">
                            @csrf
                            @method('patch')
                            <button class="submit btn btn-dark shadow border rounded-3 fs-6">Ripristina</button>
                        </form>
                    </div>
                </div>
            </div>   
            @endforeach
            <div class="row justify-content-center mt-3">
                <div class="col-3 col-md-1">
                    {{$announcement_to_restore->links()}}
                </div>
              
            </div>
            <div class="col-12">
                <h2 class="pt-5 fs-1">Annunci accettati</h2>
            </div>
            @foreach($announcement_to_restore_t as $announcement)
            <div class="col-12 col-md-4 my-4 d-flex justify-content-center">
                <div class="card shadow">
                    <img src="{{!$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(800, 800) : "https://picsum.photos/1200/1200"}}" class="card-img-top" alt="...">
                    <div class="card-body px-4">
                        <div class="badge bg-dark bg-gradient rounded-pill mb-3 p-2">{{__('ui.category')}}: {{$announcement->category->name}} </div>
                        <h5 class="card-title f-title mb-3">{{$announcement->title}}</h5>
                        <p class="">{{__('ui.published_on')}}: {{$announcement->created_at->format('d/m/Y')}}</p>
                    </div>
                    <div class="px-4 my-3 d-flex justify-content-between">
                        <a href="{{route('detailShow',compact('announcement'))}}" class="text-reset text-decoration-none fw-semibold fs-5">{{__('ui.detail')}} <i class="fa-solid fa-circle-arrow-right"></i></a>
                        <form action="{{route('revisor.update_announcement', ['announcement' => $announcement])}}" method="post">
                            @csrf
                            @method('patch')
                            <button class="submit btn btn-dark shadow border rounded-3 fs-6">Ripristina</button>
                        </form>
                    </div>
                </div>
            </div>   
            @endforeach
        </div>
    </div>
    <div class="row justify-content-center mt-3">
        <div class="col-10 col-md-4 d-flex justify-content-center">
            {{$announcement_to_restore_t->links()}}
        </div>
      
    </div>
    @endif
</x-layout>