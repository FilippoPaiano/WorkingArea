<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class ArticleCreateForm extends Component
{
    use WithFileUploads;
    
    public $name, $category, $image, $description;

    public function store(){
        Article::create([
            'name' => $this->name,
            'category' => $this->category,
            'image' => $this->image->store('/public/images'),
            'description' => $this->description,
            'user_id' => Auth::user()->id,
        ]);
        session()->flash('successMessage', 'Hai creato con successo il tuo articolo');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.article-create-form');
    }
}
