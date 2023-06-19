
<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 mt-3">
                <h1>Categoria: {{$category->name}} </h1>
            </div>
        </div>
        <div class="row">
            @forelse ($category->announcements as $announcement)
                <x-card :announcement="$announcement"></x-card>            
            @empty
                <div class="col-12 m-3">
                    <p>Non ci sono annunci presenti per questa categoria</p>
                    <p>Inserisci nuovo annuncio: 
                        <a href="{{route('announcement.create')}}">  
                            <i class="fa-solid fa-file-circle-plus text-white fa-lg m-3"></i>
                        </a>
                    </p>
                </div>
            @endforelse
        </div>       
    </div>
</x-layout>