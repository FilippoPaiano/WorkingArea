<x-layout>
    <x-header>
        {{$article->title}}
    </x-header>

    <div class="container my-5">
        <div class="row justify-content-evenly">
            <div class="col-12 col-md-6">
                <img src="{{Storage::url($article->logo)}}" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-md-6 text-center">
                <h1>{{$article->title}}</h1>
                <p>{{$article->description}}</p>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-md-4 d-flex justify-content-evenly">
                <a href="{{route('blog.index')}}" class="btn btn-success">Torna indietro</a>
                <a href="" class="btn btn-warning">Modifica</a>
                <a href="" class="btn btn-danger">Elimina</a>
            </div>
        </div>
    </div>


</x-layout>