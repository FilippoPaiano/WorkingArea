<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class ArticleEditForm extends Component
{
    use WithFileUploads;

    public $articleId, $name, $category, $old_image, $image, $description;

    public function update(){
        $article = Article::find($this->articleId);

        $article->update([
            'name' => $this->name,
            'category' => $this->category,
            'description' => $this->description,
        ]);

        if($this->image){
            $article->update([
                'image' => $this->image->store('/public/images'),
            ]);
            $this->old_image = $this->image->temporaryUrl();
            $this->reset('image');
        }
        session()->flash('successMessage', 'Hai correttamente aggiornato il tuo articolo');
    }

    public function destroy(){
        Article::find($this->articleId)->delete();

        return redirect(route('article.index'))->with('successMessage', 'Hai rimosso il tuo articolo correttamente');
    }

    public function mount(){
       $article = Article::find($this->articleId);

       $this->name = $article->name;
       $this->category = $article->category;
       $this->old_image = Storage::url($article->image);
       $this->description = $article->description; 
    }
    public function render()
    {
        return view('livewire.article-edit-form');
    }
}
