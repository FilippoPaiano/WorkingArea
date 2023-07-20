<x-layout>

<x-header>
    Insert Article
</x-header>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            {{-- Form di creazione / Compo di livewire --}}
            @livewire('article-create-form')
        </div>
    </div>
</div>


</x-layout>