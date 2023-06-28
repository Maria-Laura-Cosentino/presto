<?php

namespace App\Http\Livewire;

use App\Jobs\AddLogo;
use Livewire\Component;
use App\Models\Category;
use App\Jobs\RemoveFaces;

use App\Jobs\ResizeImage;
use App\Models\Announcement;
use Livewire\WithFileUploads;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CreateAnnouncementForm extends Component
{
    use WithFileUploads;

    public $title;
    public $category_id;
    public $user_id;
    public $price;
    public $body;
    public $temporary_images;
    public $images = [];
    public $image;
    // public $form_id;
    public $announcement;
   

    protected $rules = [
        'title' => 'required|min:2',
        'price' => 'required|numeric|min:1|max:99999',
        'category_id' => 'required',
        'body' => 'required|min:2',
        'images.*' => 'image|max:1024',
        'temporary_images.*'=> 'image|max:1024',

    ];


    //  protected $messages = [
    //     'required' => 'Il campo :attribute è obbligatorio.',
    //     'min' => 'Il campo :attribute dev\'essere di almeno :min caratteri',
    //     'price.min'=> 'Il prezzo dev\'essere di min 1 €',
    //     'price.max' => 'Il prezzo dev\'essere di max 5 cifre',
    //     'temporary_images.required' => 'Immagine richiesta',
    //     'temporary_images.*.image' => 'I file devono essere immagini',
    //     'temporary_images.*.max' => 'L\'immagine deve essere massimo di 1mb'

    // ];

    // protected $validationAttributes = [
    //     'title' => 'titolo',
    //     'price' => 'prezzo',
    //     'body' => 'descrizione',
    //     'category_id' => 'categoria',

    // ];

    public function updatedTemporaryImages(){

        if($this->validate([
            'temporary_images.*'=> 'image|max:1024',
        ])) {

            foreach($this->temporary_images as $image){

                $this->images[] = $image;
            }
        }
    }

    public function removeImage($key){

        if(in_array($key, array_keys($this->images))){

            unset($this->images[$key]);
        }
    }
    
    
    public function store(){
        //primi di inserire i dati ricordiamoci di validarli!!!!
        $this->validate();

        // $this->announcement = Category::find($this->category)->announcements()->create($this->validate());

        
        //il metodo create prepara i dati da inserire nella tabella articles
        
        $this->announcement = Announcement::create([
            
            'category_id' =>  $this->category_id,
            'user_id' => Auth::user()->id,
            'title' => $this->title,
            'price' => $this->price,
            'body' => $this->body,

            
        ]);

        if(count($this->images)){
            foreach($this->images as $image){

                $newFileName = "announcements/{$this->announcement->id}";
                $newImage = $this->announcement->images()->create(['path' => $image->store($newFileName, 'public')]);

                // $this->announcement->images()->create(['path' => $image->store('images', 'public')]);
                RemoveFaces::withChain([
                    new ResizeImage($newImage->path, 800, 800),
                    new GoogleVisionSafeSearch($newImage->id),
                    new GoogleVisionLabelImage($newImage->id),
                    
                ])->dispatch($newImage->id);

                dispatch(new AddLogo($newImage->id));

                // dispatch(new ResizeImage($newImage->path, 800, 800));
                // dispatch(new GoogleVisionSafeSearch($newImage->id));
                // dispatch(new GoogleVisionLabelImage($newImage->id));
                // dispatch(new RemoveFaces($newImage->id));  
               
            }

            File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }
        
        // svuota, resetta tutti i campi
        $this->reset();
        
        session()->flash('message', __('ui.success'));
        
        // redirect()->route('showArticles');
    }
    
        // validazione real time di tutti gli input
        public function updated($propertyName){
            $this->validateOnly($propertyName);
        }
    
    public function render(){
        
        return view('livewire.create-announcement-form', ['categories' => Category::all()]);
    }
}
