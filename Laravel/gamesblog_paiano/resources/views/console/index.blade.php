<x-layout>
    
    <x-header>Tutte le console</x-header>
    
    @if (session('consoleCreated'))
    <div class="row justify-content-center text-center">

        <div class="col-6">
            <div class="alert alert-success">
                {{session('consoleCreated')}}
            </div>
        </div>
        
    </div>
    @endif

    @if (session('consoleUpdated'))
    <div class="row justify-content-center text-center">

        <div class="col-6">
            <div class="alert alert-success">
                {{session('consoleUpdated')}}
            </div>
        </div>
        
    </div>
    @endif

    @if (session('consoleDeleted'))
    <div class="row justify-content-center text-center">

        <div class="col-6">
            <div class="alert alert-danger">
                {{session('consoleDeleted')}}
            </div>
        </div>
        
    </div>
    @endif



    <div class="container my-5">
        <div class="row justify-content-center">
            @foreach ($consoles as $console)

            <div class="col-12 col-md-3">
                <div class="card">
                    <img src="{{Storage::url($console->logo)}}" class="card-img-top" alt="{{$console->name}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$console->name}}</h5>
                        <p class="card-text fst-italic text-mutex">{{$console->brand}}</p>
                        <hr>
                        {{-- 
                            TRAVERSARE IL MODELLO
                            DALL'OGGETTO DI CLASSE CONSOLE -> TRAMITE LA RELAZIONE -> ARRIVARE A USER
                            --}}
                        <p class="small fst-italic">Creato da: {{$console->user->name}}</p>

                        <hr>
                        <a href="{{route('console.show',
                         [
                            'console' => $console,
                            'name' => $console->name,
                         ]   
                        )}}" class="btn btn-primary mt-3">Scopri di più</a>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>
    
    
    
</x-layout>