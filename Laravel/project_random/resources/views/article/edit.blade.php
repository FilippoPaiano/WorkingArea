<x-layout>
    <x-header>
        Aggiorna l'articolo
    </x-header>
    
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                {{-- Form - Componente Livewire --}}
                @livewire('article-edit-form', ['articleId' => $article->id])
            </div> 
        </div>
    </div>
    
</x-layout>