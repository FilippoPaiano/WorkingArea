<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleDashboard extends Component
{
    public function destroy(Article $article){
        $article->delete();

        session()->flash('articleDeleted', "Hai eliminato un articolo!");
    }

    public function render()
    {
        $articles = Article::all();
        
        return view('livewire.article-dashboard', compact('articles'));
    }
}
