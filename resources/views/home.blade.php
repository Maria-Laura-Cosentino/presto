<x-layout>

    <x-masthead></x-masthead>
   
    <div class="container">
        <div class="row my-3">
            @if (session()->has('access.denied'))
            <div class="alert alert-danger">
             {{session('access.denied')}}
            </div>
            @endif

            @if (session()->has('message'))
            <div class="alert alert-success">
             {{session('message')}}
            </div>
            @endif
        
          
        </div>
    </div>
   

    <div class="container my-5">
        <div class="row my-3">
            @foreach ($announcements as $announcement)                    
            <x-card
            :announcement="$announcement"></x-card>
            @endforeach
        </div>
    </div>
</x-layout>