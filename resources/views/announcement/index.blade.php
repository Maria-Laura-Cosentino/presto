<x-layout>
    <div class="container-fluid mb-4">
        <div class="row bg-body-tertiary py-5">
          <div class="col-12">
              <h1 class="text-center fw-semibold display-2">{{__('ui.announcements')}}</h1>
          </div>
        </div>
      </div>
    <div class="container my-5">
        <div class="row my-3">
            @forelse ($announcements as $announcement)                    
            <x-card
            :announcement="$announcement"></x-card>
            @empty
                <div class="col-12 m-3">
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
</x-layout>