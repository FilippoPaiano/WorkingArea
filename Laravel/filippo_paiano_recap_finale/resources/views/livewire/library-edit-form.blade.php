<div>
    <form class="mb-3" wire:submit.prevent="update" enctype="multipart/form-data">
        
        <x-validation-errors />
        <x-session-messages />
        
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Library Name</label>
            <input type="text" wire:model="name" class="form-control" id="name">
        </div>
        
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" wire:model="address" class="form-control" id="address">
        </div>

        <div class="mb-3">
            Current Image:<br>
            <img class="img-preview" class="rounded" src="{{$old_image}}">
        </div>
        
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" wire:model="image" class="form-control" id="image">
        </div>

        @if ($image)
        <div class="mb-3">
            Image Preview:<br>
            <img class="img-preview" class="rounded" src="{{ $image->temporaryUrl() }}">
        </div>
        @endif

        <div class="mb-3">
            <label for="bestsellers" class="form-label">BestSellers</label>
            <select wire:model="bestsellers" id="bestsellers" multiple class="form-control selectbox">
                @foreach($books as $book)
                <option value="{{$book->id}}">"{{$book->title}}", "{{$book->author}}"</option>
                @endforeach
            </select>
        </div>
        
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" wire:model="description" id="description" cols="30" rows="7">@csrf</textarea>
        </div>
        <a href="{{route('library.index')}}" class="btn btn-outline-primary me-3">Go to index library</a>
        <button type="submit" class="btn btn-primary">Confirm Edit</button>
        <button type="button" class="btn btn-danger" wire:click="destroy()">Delete Library</button>
    </form>
</div>   