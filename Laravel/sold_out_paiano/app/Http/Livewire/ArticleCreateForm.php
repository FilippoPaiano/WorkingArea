<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleCreateForm extends Component
{
    public $title;
    public $category;
    public $description;

    protected $rules = [
        'title' => 'required|min:10',
        'category' => 'required|min:10',
        'description' => 'required|min:100',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function store(){
        $this->validate();

       Article::create([
        'title' => $this->title,
        'category' => $this->category,
        'description' => $this->description,
       ]);

       session()->flash('articleCreated', "Hai correttamente inserito il tuo articolo");
        //Metodo1 PER RIPULIRE I CAMPI DEL FORM    
        $this->reset();

        //Metodo2 PER RIPULIRE I CAMPI DEL FORM
        // $this->cleanForm();
    }
    //Usiamo la protected perchè non serve far vedere al browser questa funzione
    // protected function cleanForm(){
    //     $this->title = "";
    //     $this->category = "";
    //     $this->description = "";
    // }

    public function render()
    {
        return view('livewire.article-create-form');
    }
}
