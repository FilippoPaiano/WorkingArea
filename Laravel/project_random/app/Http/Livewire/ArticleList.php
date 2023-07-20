<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleList extends Component
{
    public function render()
    {
        $articles = Article::all();
        
        return view('livewire.article-list', compact('articles'));
    }
}
