<div class="container my-5">
    <div class="row justify-content-center">
        @forelse ($libraries as $library)
        <div class="col-12 col-md-4">
            <div class="card">
                <img src="{{Storage::url($library->image)}}" class="card-img-top" alt="{{$library->name}}">
                <div class="card-body">
                    <h5 class="card-title">{{$library->name}}</h5>
                    <p class="card-text">{{$library->address}}</p>
                    <a href="{{route('library.show', compact('library'))}}" class="btn btn-primary mt-3">View Detail!</a>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12 text-center">
            <h2>There are no libraries. Come back later!</h2>
        </div> 
        @endforelse
    </div>
</div>