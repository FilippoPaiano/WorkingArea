<x-layout>
    
    
    <x-header>
        Inserisci il tuo videogioco preferito
    </x-header>
    
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                {{--Form--}}
                <form class="p-5 shadow" method="POST" action="{{route('game.store')}}" enctype="multipart/form-data">
                    <!-- /resources/views/post/create.blade.php -->
                    
                    <h1>Create Post</h1>
                    
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
                    
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" name="title" class="form-control" id="title" value="{{old('title')}}">
                    </div>
                    
                    <div class="mb-3">
                        <label for="softwarehouse" class="form-label">Software House</label>
                        <input type="text" name="softwarehouse" class="form-control" id="softwarehouse" value="{{old('softwarehouse')}}">
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
                        <textarea name="description" id="description" rows="7" class="form-control">{{old('description')}}</textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Inserisci il gioco</button>
                </form>
            </div>
        </div>
    </div>
    
</x-layout>