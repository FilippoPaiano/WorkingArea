<x-layout>

<x-header>
    Benvenuti nel nostro <br> National Park
</x-header>

@if (session('emailSent'))
    <div class="container alert alert-success mt-3">
        <div class="row justify-content-center text-center">
            <div class="col-6">
                {{session('emailSent')}}
            </div>
        </div>
    </div>
@endif

@if (session('emailError'))
    <div class="container alert alert-danger mt-3">
        <div class="row justify-content-center text-center">
            <div class="col-6">
                {{session('emailError')}}
            </div>
        </div>
    </div>
@endif


</x-layout>