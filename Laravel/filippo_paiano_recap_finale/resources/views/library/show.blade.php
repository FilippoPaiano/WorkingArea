<x-layout>

    <div class="my-5">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 class="display-1">{{$library->name}}</h1>
                </div>
            </div>
            <hr>
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <img src="{{Storage::url($library->image)}}" alt="{{$library->name}}" class="img-fluid">
                    <p class="small fst-italic">{{$library->address}} - Created by: {{$library->user->name}} - {{$library->created_at->format('d/m/Y')}} </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <p>{{$library->description}}</p>
                </div>

                @if(count($library->books))
                <div class="col-12 col-md-8">
                    <p>The BestSellers:</p>
                    <ul>
                        @foreach($library->books as $book)
                        <li>"{{$book->title}}", di <span class="fst-italic">{{$book->author}}</span></li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <div class="col-12 col-md-6">
                    <a href="{{route('library.index')}}" class="btn btn-primary">Go Back</a>
                    @if(Auth::user() && Auth::user()->id == $library->user_id)
                    <a href="{{route('library.edit', compact('library'))}}" class="btn btn-warning">Modify</a>
                    @endif
                </div>
            </div>
        </div>
    </div>


</x-layout>