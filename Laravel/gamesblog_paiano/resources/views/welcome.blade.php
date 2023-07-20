<x-layout>

<x-header>
    GamingBlog
</x-header>


    @if (session('gameCreated'))
    <div class="row justify-content-center text-center">

        <div class="col-6">
            <div class="alert alert-success">
                {{session('gameCreated')}}
            </div>
        </div>
        
    </div>
    @endif

    @if (session('userDeleted'))
    <div class="row justify-content-center text-center">

        <div class="col-6">
            <div class="alert alert-danger">
                {{session('userDeleted')}}
            </div>
        </div>
        
    </div>
    @endif




</x-layout>