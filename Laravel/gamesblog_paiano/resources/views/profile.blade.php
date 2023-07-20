<x-layout>

<x-header>
    Profilo di {{Auth::user()->name}}
</x-header>


<div class="container my-5">
    <div class="row justify-content-center">
        <h2>Le console che hai inserito:</h2>

        @foreach (Auth::user()->consoles as $console)
        <div class="col-12 col-md-3">
            <div class="card">
                <img src="{{Storage::url($console->logo)}}" class="card-img-top" alt="{{$console->name}}">
                <div class="card-body">
                    <h5 class="card-title">{{$console->name}}</h5>
                    <p class="card-text fst-italic text-mutex">{{$console->brand}}</p>
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

<div class="container my-5">
    <div class="row justify-content-center">
        <h2>I videogiochi che hai inserito:</h2>

        @foreach (Auth::user()->games as $game)
        <div class="col-12 col-md-3">
            <div class="card">
                <img src="{{Storage::url($game->cover)}}" class="card-img-top" alt="{{$game->title}}">
                <div class="card-body">
                    <h5 class="card-title">{{$game->title}}</h5>
                    <p class="card-text fst-italic text-mutex">{{$game->softwarehouse}}</p>
                    <a href="#" class="btn btn-primary mt-3">Scopri di più</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <form action="{{route('user.destroy')}}" method="POST">
            @csrf
            @method('delete')
            
            <button type="submit" class="btn btn-danger">Cancellati dal sito!</button>
            </form>
        </div>
    </div>
</div>


</x-layout>