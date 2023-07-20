<?php

namespace App\Http\Livewire;

use App\Models\Book;
use App\Models\Library;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class LibraryCreateForm extends Component
{
    use WithFileUploads;

    public $name, $address, $image, $description, $bestsellers;

    public function store(){
        $library = Library::create([
            'name' => $this->name,
            'address' => $this->address,
            'image' => $this->image->store('/public/photos'),
            'description' => $this->description,
            'user_id' => Auth::user()->id,
        ]);

        $library->books()->attach($this->bestsellers);

        session()->flash('successMessage', 'Your Library has been created');
        $this->reset();
    }


    public function render()
    {
        $books = Book::all();
        return view('livewire.library-create-form', compact('books'));
    }
}
