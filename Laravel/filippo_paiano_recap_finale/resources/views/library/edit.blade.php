<x-layout>

<x-header>
    Edit Library
</x-header>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            {{-- FOPRM / COMPO LIVEWIRE --}}
            @livewire('library-edit-form', ['libraryId' => $library->id])
        </div>
    </div>
</div>

</x-layout>