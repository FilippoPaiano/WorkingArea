<x-layout>
    
    <x-header>
        Contattaci
    </x-header>
    
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form class="p-5 border bg-light mt-3" method="POST" action="{{route('contattaci.submit')}}">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label">Indirizzo Mail</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome e Cognome</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Il tuo Messaggio</label>
                        <textarea class="form-control" name="message" id="message" rows="7"></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-success mt-3">Contattaci</button>
                </form>
            </div>
        </div>
    </div>
    
    
</x-layout>