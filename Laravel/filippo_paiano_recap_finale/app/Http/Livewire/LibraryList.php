<?php

namespace App\Http\Livewire;

use App\Models\Library;
use Livewire\Component;

class LibraryList extends Component
{
    public function render()
    {
        $libraries = Library::all();

        return view('livewire.library-list', compact('libraries'));
    }
}
