<x-layout>
    <div class="min-h-cust mt-5 ">
        <div class="container-fluid mb-4">
            <div class="row bg-body-tertiary py-5">
              <div class="col-12">
                  <h1 class="text-center fw-semibold display-2">{{__('ui.announcements')}}</h1>
              </div>
            </div>
          </div>
          <div class="container ">
            <div class="row">
                <form class="col-12 d-flex  mt-3 mt-md-5" role="search" action="{{route('announcements.search')}}" method="get">
                    <a class="py-3 px-4 me-3 bg-dark text-white refresh rounded-2" href="{{route('indexShow')}}"><i class="fa-solid fa-rotate-right"></i></a>
                    <input name="searched" class="form-control me-2" type="search" type="search" placeholder="{{__('ui.search')}}" aria-label="Search">
                    <button class="btn btn_Search ms-2 px-4 py-2 " type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
          </div>
        <div class="container my-5">
            <div class="row my-3">
                @forelse ($announcements as $announcement)                    
                <x-card
                :announcement="$announcement"></x-card>
                @empty
                    <div class="col-12 m-3 ">
                        <div class="alert alert-warning py-3 shadow">
                            <p>Non ci sono annunci presenti per questa ricerca</p>
                        </div> 
                    </div>
                @endforelse
            </div>
            <div class="row justify-content-center">
                <div class="col-3 col-md-1">
                    {{$announcements->links()}}
                </div>
              
            </div>
        </div>
    </div>
    
</x-layout>