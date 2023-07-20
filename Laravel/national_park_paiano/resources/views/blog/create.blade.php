<x-layout>
    <x-header>Inserisci un articolo!</x-header>
    @if (session('articleCreated'))
        <div class="row justify-content-center text-center mt-3">
            <div class="col-6">
                <div class="alert alert-success">
                    {{session('articleCreated')}}
                </div>
            </div>
        </div>
    @endif
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                {{--Form--}}
                <form class="p-5 shadow" method="POST" action="{{route('blog.store')}}" enctype="multipart/form-data">
                    
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
                        <label for="logo" class="form-label">Logo</label>
                        <input type="file" name="logo" class="form-control" id="logo">
                    </div>
                    
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea name="description" id="description" rows="7" class="form-control">{{old('description')}}</textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Inserisci l'articolo</button>
                </form>
            </div>
        </div>
    </div>


</x-layout>