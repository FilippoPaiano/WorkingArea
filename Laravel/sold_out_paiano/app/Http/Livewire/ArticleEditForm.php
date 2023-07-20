<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ArticleEditForm extends Component
{
    public $title, $category, $description, $article;

    protected $rules = [
        'title' => 'required|min:6',
        'category' => 'required|min:6',
        'description' => 'required|min:100',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function update(){
        $this->validate();

        $this->article->update([
            
            'title'=> $this->title,
            'category'=> $this->category,
            'description'=> $this->description,
            
        ]);
        
        session()->flash('articleUpdated', "L'articolo è stato correttamente aggiornato");
    }

    public function mount(){
        $this->title = $this->article->title;
        $this->category = $this->article->category;
        $this->description = $this->article->description;
    }

    public function render()
    {
        return view('livewire.article-edit-form');
    }
}
