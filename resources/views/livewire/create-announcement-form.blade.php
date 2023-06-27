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

        <div class="input-group">
            <input type="file" name="images" multiple placeholder="Img" class="form-control shadow @error('temporary_images.*') is-invalid @enderror" aria-label="Immagine" aria-describedby="basic-addon1"  wire:model="temporary_images">
        </div>
        <div class="text-danger mb-4">@error('temporary_images.*') <span class="error">{{ $message }}</span> @enderror</div>
        @if (!empty ($images))
        <div class="row">
            <div class="col-12">
                <p>{{__('ui.photo_preview')}}</p>
                <div class="row border border-4 border-info rounded shadow py-4 mb-4">
                    @foreach ($images as $key => $image)
                    <div class="col-4 my-3">
                        <div class="w-100 mx-auto shadow rounded" style="background-image: url({{$image->temporaryUrl()}}); background-size:cover; background-position:center; height:200px"></div>
                        <button class="btn btn-danger shadow d-block text-center mt-2 mx-auto" type="button" wire:click="removeImage({{$key}})">{{__('ui.delete')}}</button>
                    </div> 
                    @endforeach
                </div>
            </div>
        </div>   
        @endif

        <button type="submit" class="btn btn-dark">{{__('ui.create_ad')}}</button>

   </form>
</div>
