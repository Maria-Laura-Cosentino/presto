<div>
   @if (session()->has('message'))
   <div class="alert alert-success">
    {{session('message')}}
   </div>
   @endif
   <form wire:submit.prevent="store">

        <div class="input-group">
            <input type="text" name="title" class="form-control" placeholder="{{__('ui.title')}}" aria-label="Titolo" aria-describedby="basic-addon1" wire:model="title">
        </div>
        <div class="text-danger mb-4">@error('title') <span class="error">{{ $message }}</span> @enderror</div>

        <div class="">
            {{-- <h4>Category</h4> --}}
            <label class="form-label">{{__('ui.category')}}</label>
            {{-- @dd($categories) --}}
            <select class="form-select" aria-label="Default select example" name="category_id" wire:model="category_id">
                <option selected >{{__('ui.no_category_selected')}}</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" >{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="text-danger mb-4">@error('category_id') <span class="error">{{ $message }}</span> @enderror</div>

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
    

        <div class="input-group">
            <input type="number" name="price" step="0.01" class="form-control" placeholder="{{__('ui.price')}}" aria-label="Prezzo" aria-describedby="basic-addon1"  wire:model="price">
        </div>
        <div class="text-danger mb-4">@error('price') <span class="error">{{ $message }}</span> @enderror</div>

        <div class="input-group">
            <textarea name="body" placeholder="{{__('ui.description')}}" aria-label="Descrizione" class="form-control" aria-label="With textarea"  wire:model="body"></textarea> 
        </div>
        <div class="text-danger mb-4">@error('body') <span class="error">{{ $message }}</span> @enderror</div>

        <button type="submit" class="btn btn-dark">{{__('ui.create_ad')}}</button>

   </form>
</div>
