
<x-layout>
    <div class="container-fluid mb-4">
        <div class="row bg-body-tertiary py-5">
          <div class="col-12">
              <h1 class="text-center fw-semibold display-2">{{__('ui.category')}}: {{$category->name}}</h1>
          </div>
        </div>
      </div>
    <div class="container my-5">
        {{-- <div class="row">
            <div class="col-12 mt-3">
                <h1>Categoria: {{$category->name}} </h1>
            </div>
        </div> --}}
        <div class="row">
            @forelse ($category->announcements as $announcement)
                <x-card :announcement="$announcement"></x-card>            
            @empty
                <div class="col-12 m-3">
                    <h2 class="mb-5">Non ci sono annunci presenti per questa categoria</h2>
                    <h4>Inserisci nuovo annuncio: 
                        <a href="{{route('announcement.create')}}">  
                            <i class="fa-solid fa-file-circle-plus text-dark fa-lg m-3"></i>
                        </a>
                    </h4>
                    <div class="empy-space"></div>
                </div>
            @endforelse
        </div>       
    </div>
</x-layout>