<x-layout>
    <x-header>
        Tutti i giochi
    </x-header>

    <div class="container my-5">
        <div class="row justify-content-center">
            @foreach ($games as $game)
                <div class="col-12 col-md-3">
                    <div class="card h-100">
                        @if ($game->cover)
                        <img src="{{Storage::url($game->cover)}}" class="card-img-top" alt="...">    
                        @else
                        <img src="https://picsum.photos/300" class="card-img-top" alt="...">
                        @endif    
                        <div class="card-body">
                          <h5 class="card-title">{{$game->title}}</h5>
                          <p class="text-muted fst-italic">{{$game->softwarehouse}}</p>
                          <p class="card-text">{{$game->description}}</p>
                          <hr>

                            <p class="small fst-italic">Creato da: {{$game->user->name}}</p>

                          <hr>
                          <a href="{{route('game.show', compact('game'))}}" class="btn btn-primary">Scopri di più</a>
                        </div>
                      </div>
                </div>
            @endforeach
        </div>
    </div>



</x-layout>