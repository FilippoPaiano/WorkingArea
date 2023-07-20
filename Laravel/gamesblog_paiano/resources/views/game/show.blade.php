<x-layout>
    
    <x-header>
        {{$game->title}}
    </x-header>
    
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">

                @if ($game->cover)
                <img src="{{Storage::url($game->cover)}}" alt="{{$game->title}}" class="img-fluid">
                @else
                <img src="https://picsum.photos/300" alt="{{$game->title}}" class="img-fluid">
                @endif
                
                <h3>{{$game->softwarehouse}}</h3>
                <p>{{$game->description}}</p>
            </div>
            <div class="col-6">
                <a href="{{route('game.index')}}" class="btn btn-warning">Torna indietro</a>
                
                @if ($game->user_id == Auth::user()->id)
                    <a href="{{route('game.edit', compact('game'))}}" class="btn btn-dark">Modifica</a>
                    <form action="{{route('game.destroy', compact('game'))}}" method="POST" class="d-inline">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Elimina</button>
                    </form>
                    @endif
                    
                </div>
            </div>
        </div>
        
        
        
    </x-layout>