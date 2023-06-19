<x-layout>
    <h1>Presto.it</h1>
    <div class="container my-5">
        <div class="row my-3">
            @foreach ($announcements as $announcement)                    
            <x-card
            :announcement="$announcement"></x-card>
            @endforeach
        </div>
    </div>
</x-layout>