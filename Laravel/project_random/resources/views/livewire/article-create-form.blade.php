<div>
    <form wire:submit.prevent="store" enctype="multipart/form-data">
        
        <x-validation-errors />
        <x-session-messages />

        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome dell'articolo</label>
            <input type="text" wire:model="name" class="form-control" id="name">
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Categoria</label>
            <input type="text" wire:model="category" class="form-control" id="category">
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Immagine</label>
            <input type="file" wire:model="image" class="form-control" id="image">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" id="description" wire:model="description" cols="30" rows="7">@csrf</textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Inserisci Articolo</button>
    </form>
</div>