<x-layout>
    
    
    <x-header>
        Modifica il tuo videogioco preferito
    </x-header>
    
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                {{--Form--}}
                <form class="p-5 shadow" method="POST" action="{{'game.update', compact('game')}}" enctype="multipart/form-data">
                    
                    
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    
                    <!-- Create Post Form -->
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" name="title" class="form-control" id="title" value="{{$game->title}}">
                    </div>
                    
                    <div class="mb-3">
                        <label for="softwarehouse" class="form-label">Software House</label>
                        <input type="text" name="softwarehouse" class="form-control" id="softwarehouse" value="{{$game->softwarehouse}}">
                    </div>

                    <div class="mb-3">
                        <label for="current_cover" class="form-label">Copertina Attuale</label>
                        <img style="width: 300px" src="{{Storage::url($game->cover)}}" alt="">
                    </div>
                    
                    <div class="mb-3">
                        <label for="cover" class="form-label">Copertina</label>
                        <input type="file" name="cover" class="form-control" id="cover">
                    </div>

                    <div class="mb-3">
                        <label for="console" class="form-label">Console</label>
                        <select name="console" id="console" class="form-control">
                            <option value="">Nessuna Console</option>
                            @foreach ($consoles as $console)
                            <option value="{{$console->id}}">{{$console->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea name="description" id="description" rows="7" class="form-control">{{$game->description}}</textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Inserisci il gioco</button>
                </form>
            </div>
        </div>
    </div>
    
</x-layout>