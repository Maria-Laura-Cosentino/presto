<div>
   @if (session()->has('message'))
   <div class="alert alert-success">
    {{session('message')}}
   </div>
   @endif
   <form wire:submit.prevent="store">

    <div class="input-group mb-3">
        <input type="text" name="title" class="form-control" placeholder="Titolo" aria-label="Titolo" aria-describedby="basic-addon1" wire:model="title">

        @error('title') <span class="error">{{ $message }}</span> @enderror
    </div>

   <div class=" my-3">
            {{-- <h4>Category</h4> --}}

            <div>
                <label class="form-label">Categoria</label>
                {{-- @dd($categories) --}}
                <select class="form-select" aria-label="Default select example" name="category_id" wire:model="category_id">
                    <option selected >Nessuna categoria selezionata</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" >{{ $category->name }}</option>
                    @endforeach
                </select>

                @error('category_id') <span class="error">{{ $message }}</span> @enderror
            </div>

            {{-- <div class="input-group mb-3">
                <input type="file" name="img" class="form-control" placeholder="Immagine" aria-label="Img" aria-describedby="basic-addon1" wire:model="img">        
            </div>         --}}
            

            {{-- <div class="form-floating">
                <select class="form-select selectpicker" id="floatingSelect" aria-label="Category"
                title="Nessuna categoria selezionata">
                    
                    <option selected >Nessuna categoria selezionata</option>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}" wire:model="category_id">
                            <input class="form-check-input" type="radio" name="category_id" id="Radio{{$category->name}}" value="{{$category->id}}" wire:model="category_id">
                        </option>{{$category->name}}
                    @endforeach
                </select>
                <label for="floatingSelect">Seleziona Categoria</label>
            </div> --}}


            <!-- Selct one category with radio -->
           {{-- <div class="row">
                @foreach ($categories as $category)
                    <div class="col-6 col-md-3 py-2">
                        <input class="form-check-input" type="radio" name="category_id" id="Radio{{$category->name}}" value="{{$category->id}}" wire:model="category_id">
                        <label class="form-lable ps-2" for="Radio{{$category->name}}">{{$category->name}}</label>
                    </div>
                @endforeach
            </div> --}}
    </div>

    <div class="input-group mb-3">
        <input type="number" name="price" step="0.01" class="form-control" placeholder="Prezzo" aria-label="Prezzo" aria-describedby="basic-addon1"  wire:model="price">

        @error('price') <span class="error">{{ $message }}</span> @enderror
    </div>

    <div class="input-group mb-3">
        <textarea name="body" placeholder="Descrizione" aria-label="Descrizione" class="form-control" aria-label="With textarea"  wire:model="body"></textarea>

        @error('body') <span class="error">{{ $message }}</span> @enderror
    </div>

    <button type="submit" class="btn btn-primary">Inserisci</button>

   </form>
</div>
