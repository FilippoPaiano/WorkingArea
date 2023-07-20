<div>
    <form class="p-5 shadow" wire:submit.prevent="update">
        @if(session('articleUpdated'))
        <div class="alert alert-success">
            {{session('articleUpdated')}}
        </div>
        @endif
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" wire:model.lazy="title" class="form-control @error('title') is-invalid @enderror" id="title">
            @error('title')
            <span class="fst-italic small text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <input type="text" wire:model.lazy="category" class="form-control @error('category') is-invalid @enderror" id="category">
            @error('category')
            <span class="fst-italic small text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" wire:model.lazy="description" id="description" cols="30" rows="7"></textarea>
            @error('description')
            <span class="fst-italic small text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Modify!</button>
        <a href="{{route('article.index')}}" class="btn btn-dark">Go back <=</a>
    </form>
</div>
    