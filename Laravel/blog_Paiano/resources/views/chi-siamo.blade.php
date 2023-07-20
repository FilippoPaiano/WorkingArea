<x-layout>

    <x-slot name="title">
        Chi siamo | Hack-61 
    </x-slot>
    
    {{--Header--}}
    <div class="container-fluid p-5 bg-warning text-white text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1">
                    Chi Siamo
                </h1>
            </div>
        </div>
    </div>

    {{--Corpo--}}

    <div class="container my-5">
        <div class="row justify-content-center">
            @foreach ($workers as $worker)
                <div class="col-12 col-md-3">
                    <div class="card">
                        <img src="https://picsum.photos/350" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">{{$worker['name']}} {{$worker['surname']}}</h5>
                            <p class="card-text">Anni: {{$worker['age']}}</p>
                            <a href="#" class="btn btn-primary mt-3">Go Somewhere</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>