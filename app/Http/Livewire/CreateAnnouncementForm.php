<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Support\Facades\Auth;

class CreateAnnouncementForm extends Component
{
    public $title;
    public $category_id;
    public $user_id;
    public $price;
    public $body;

    protected $rules = [
        'title' => 'required|min:2',
        'price' => 'required|numeric|min:1|max:99999',
        'category_id' => 'required',
        'body' => 'required|min:2'
    ];

     protected $messages = [
        'required' => 'Il campo :attribute è obbligatorio',
        'min' => 'Il campo :attribute dev\'essere di almeno :min caratteri',
        'price.min'=> 'Il prezzo dev\'essere di min 1 €',
        'price.max' => 'Il prezzo dev\'essere di max 5 cifre'
    ];

    protected $validationAttributes = [
        'title' => 'titolo',
        'price' => 'prezzo',
        'body' => 'descrizione',
        'category_id' => 'categoria',

    ];
    
    
    public function store(){
        //primi di inserire i dati ricordiamoci di validarli!!!!
        $this->validate();
        
        
        //il metodo create prepara i dati da inserire nella tabella articles
        
        Announcement::create([
            
            'category_id' =>  $this->category_id,
            'user_id' => Auth::user()->id,
            'title' => $this->title,
            'price' => $this->price,
            'body' => $this->body
            
        ]);
        
        // svuota, resetta tutti i campi
        $this->reset();
        
        session()->flash('message', 'Annuncio inserito con successo.');
        
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
