<x-layout>
    
    <x-header>
        {{$console->name}}
    </x-header>
    
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <img src="{{Storage::url($console->logo)}}" alt="{{$console->name}}" class="img-fluid">
                <h3>{{$console->brand}}</h3>
                <p>{{$console->description}}</p>
                @if(count($console->games) > 0)
                    <hr>
                    <p>I videogiochi disponibili:</p>
                    <ul>
                        @foreach($console->games as $game)
                        <li>{{$game->title}}, {{$game->softwarehouse}}</li>
                        @endforeach
                    </ul>
                    <hr>
                @endif
            </div>
            <div class="col-6">
                <a href="{{route('console.index')}}" class="btn btn-warning">Torna indietro</a>
                @if ($console->user_id == Auth::user()->id)
                <a href="{{route('console.edit', compact('console'))}}" class="btn btn-dark">Modifica</a>
                <form action="{{route('console.destroy', compact('console'))}}" method="POST" class="d-inline">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Elimina</button>
                </form>
                @endif
            </div>
        </div>
    </div>
    
    
    
</x-layout>