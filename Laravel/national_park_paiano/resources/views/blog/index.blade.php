<x-layout>

    <x-header>Tutti gli articoli!</x-header>

    <div class="container my-5">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
                <div class="col-12 col-md-3">
                    <div class="card h-100 text-center">
                        <img src="{{Storage::url($article->logo)}}" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column justify-content-end">
                          <h5 class="card-title">{{$article->title}}</h5>
                          <a href="{{route('blog.show', compact('article'))}}" class="btn btn-primary mx-5 mt-3">Scopri di più</a>
                        </div>
                      </div>
                </div>
            @endforeach
        </div>
    </div>

</x-layout>