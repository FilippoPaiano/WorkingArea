<?php

namespace App\Http\Livewire;

use App\Models\Book;
use App\Models\Library;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class LibraryEditForm extends Component
{
    use WithFileUploads;

    public $libraryId, $name, $address, $old_image, $image, $description, $bestsellers;

    public function update(){
        $library = Library::find($this->libraryId);

        $library->update([
            'name' => $this->name,
            'address' => $this->address,
            'description' => $this->description,
        ]);

        if($this->image){
            $library->update([
                'image' => $this->image->store('/public/images'),
            ]);

            $this->old_image = $this->image->temporaryUrl();
            $this->reset('image');
        }
        $library->books()->sync($this->bestsellers);
        
        session()->flash('successMessage', 'You have been updated this library');
    }

    public function destroy(){
        Library::find($this->libraryId)->delete();
        return redirect(route('library.index'))->with('successMessage', 'You have been deleted your library');
    }

    public function mount(){
        $library = Library::find($this->libraryId);
        
        $this->name = $library->name;
        $this->address = $library->address;
        $this->old_image = Storage::url($library->image);
        $this->description = $library->description;
        $this->bestsellers = $library->books->pluck('id');
    }

    public function render()
    {
        $books = Book::all();
        
        return view('livewire.library-edit-form', compact('books'));
    }
}
