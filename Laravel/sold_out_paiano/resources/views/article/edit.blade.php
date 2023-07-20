<x-layout>

<x-header>
    Modify Article
</x-header>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            {{-- Form di modifica / Compo di livewire --}}
            @livewire('article-edit-form', ['article' => $article])
        </div>
    </div>
</div>


</x-layout>