<x-layout>
    <x-slot name="title">
        Contattaci | Hack-61
    </x-slot>

    {{--Header--}}
    <div class="container-fluid p-5 bg-warning text-white text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1">
                    Contattaci
                </h1>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form class="p-5 border bg-dark text-white" method="POST" action="{{route('contattaci.submit')}}">
                    @csrf
                    <div class="mb-3">
                      <label for="email" class="form-label">Indirizzo e-mail</label>
                      <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome e Cognome</label>
                        <input type="text" name="name" class="form-control" id="name">
                      </div>
                      <div class="mb-3">
                        <label for="message" class="form-label">Il tuo messaggio</label>
                        <textarea name="message" class="form-control" id="message" rows="7"></textarea>
                      </div>
                    <button type="submit" class="btn btn-light">Contattaci</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>