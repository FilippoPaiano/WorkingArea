<div class="container my-5">
    <div class="row justify-content-center">
        @forelse($articles as $article)
        <div class="col-12 col-md-4">
            <div class="card">
                <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="Foto di {{$article->name}}">
                <div class="card-body">
                  <h5 class="card-title">{{$article->name}}</h5>
                  <p class="card-text text-muted fst-italic">{{$article->category}}</p>
                  <a href="{{route('article.show', compact('article'))}}" class="btn btn-primary">Scopri di più</a>
                </div>
              </div>
        </div>
        @empty
        <div class="col-12 text-center">
            <h2>Non sono ancora stati inseriti degli articoli.</h2>
        </div>
        @endforelse
    </div>
</div>
