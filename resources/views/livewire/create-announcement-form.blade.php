<div>
   @if (session()->has('message'))
   <div class="alert alert-success">
    {{session('message')}}
   </div>
   @endif
   <form wire:submit.prevent="store">

    <div class="input-group mb-3">
        <input type="text" name="title" class="form-control" placeholder="Titolo" aria-label="Titolo" aria-describedby="basic-addon1" wire:model="title">
    </div>

   <div class=" my-3">
            <h4>Category</h4>
            {{-- <div class="row">
                @foreach ($categories as $category)
                    <div class="col-6 col-md-3 py-2">
                        <input class="form-check-input" type="radio" name="category_id" id="Radio{{$category->name}}" value="{{$category->id}}" wire:model="category_id">
                        <label class="form-lable" for="Radio{{$category->name}}">{{$category->name}}</label>
                    </div>
                @endforeach
            </div> --}}
    </div>

    <div class="input-group mb-3">
        <input type="number" name="price" step="0.01" class="form-control" placeholder="Prezzo" aria-label="Prezzo" aria-describedby="basic-addon1"  wire:model="number">
    </div>

    <div class="input-group mb-3">
        <textarea name="body" placeholder="Descrizione" aria-label="Descrizione" class="form-control" aria-label="With textarea"  wire:model="body"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Inserisci</button>

   </form>
</div>
