<x-layout>
    
    
    <x-header>
        Inserisci la tua console preferita
    </x-header>

    @if (session('consoleCreated'))
    <div class="row justify-content-center text-center">

        <div class="col-6">
            <div class="alert alert-success">
                {{session('consoleCreated')}}
            </div>
        </div>
        
    </div>
    @endif
    
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                {{--Form--}}
                <form class="p-5 shadow" method="POST" action="{{route('console.store')}}" enctype="multipart/form-data">
                    
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
                        <label for="name" class="form-label">Nome console</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{old('name')}}">
                    </div>
                    
                    <div class="mb-3">
                        <label for="brand" class="form-label">Brand</label>
                        <input type="text" name="brand" class="form-control" id="brand" value="{{old('brand')}}">
                    </div>
                    
                    <div class="mb-3">
                        <label for="logo" class="form-label">Logo</label>
                        <input type="file" name="logo" class="form-control" id="logo">
                    </div>

                    <div class="mb-3">
                        <label for="games" class="form-label">Giochi Disponibili</label>
                        <select name="game" id="game" class="form-control">
                            <option value="">Nessun Gioco</option>
                            @foreach ($games as $game)
                            <option value="{{$game->id}}">{{$game->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea name="description" id="description" rows="7" class="form-control">{{old('description')}}</textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Inserisci la console</button>
                </form>
            </div>
        </div>
    </div>
    
</x-layout>