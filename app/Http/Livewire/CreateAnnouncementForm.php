<?php

namespace App\Http\Livewire;

use App\Models\Announcement;
use Livewire\Component;

class CreateAnnouncementForm extends Component
{
    public $title;
    public $category_id;
    public $price;
    public $body;

    protected $rules = [
        'title' => 'required|min:6',
        'price' => 'required',
        'category_id' => 'required',
        'body' => 'required|min:20'
    ];

     protected $messages = [
        'required' => 'Il campo :attribute è obbligatorio',
        'min' => 'Il campo :attribute deve essere di almeno :min catatteri!!!',
    ];

    protected $validationAttributes = [
        'title' => 'titolo',
        'price' => 'prezzo',
        'body' => 'descrizione',
        'category_id' => 'categoria',

    ];

    // validazione real time di tutti gli input
    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }


    public function store(){
        //primi di inserire i dati ricordiamoci di validarli!!!!
        $this->validate();
        //il metodo create prepara i dati da inserire nella tabella articles

        Announcement::create([

            'category_id' =>  $this->category_id,
            'title' => $this->title,
            'price' => $this->price,
            'body' => $this->body
        ]);

        //Se si vuo svuotare i campi dopo aver creato nuvo articolo sinfgolarmente
        // $this->title = '';
        // $this->subtitle = '';
        // $this->body = '';

        // svuota, resetta tutti i campi
        $this->reset();

        session()->flash('message', 'Annuncio inserito con successo.');

        // redirect()->route('showArticles');
    }

    public function render()
    {
        return view('livewire.create-announcement-form');
    }
}
