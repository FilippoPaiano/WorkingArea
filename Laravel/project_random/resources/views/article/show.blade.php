<x-layout>

<div class="min-vh-100">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 text-center">
            <h1 class="display-1">{{$article->name}}</h1>
        </div>
    </div>

    <div class="row justify-content-between">
        <div class="col-12 col-md-6 p-5">
            <img style="width: 500px" src="{{Storage::url($article->image)}}" alt="{{$article->name}}" class="img-fluid">
        </div>
        <div class="col-12 col-md-6 p-5 text-center">
            <p class="small fst-italic text-center">{{$article->category}}</p>
            <p>{{$article->description}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center">
            <a href="{{route('article.index')}}" class="btn btn-primary">Torna agli articoli</a>
            @if(Auth::user() && Auth::user()->id == $article->user_id)
            <a href="{{route('article.edit', compact('article'))}}" class="btn btn-warning">Modifica l'annuncio</a>
            @endif
        </div>
    </div>
</div>
</div>


</x-layout>