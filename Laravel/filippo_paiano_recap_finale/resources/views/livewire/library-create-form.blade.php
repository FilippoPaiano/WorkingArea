<div>
    <form wire:submit.prevent="store" enctype="multipart/form-data">
        
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
            <label for="image" class="form-label">Image</label>
            <input type="file" wire:model="image" class="form-control" id="image">
        </div>

        @if ($image)
        <div class="mb-3">
            Image Preview:
            <img class="img-preview" src="{{ $image->temporaryUrl() }}">
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
        
        <button type="submit" class="btn btn-primary">Insert Library</button>
    </form>
</div>   