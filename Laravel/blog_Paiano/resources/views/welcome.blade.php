    <x-layout>
        
        <x-slot name="title">
            Benvenuto | Hack-61
        </x-slot>
        
        {{--Header--}}
        <div class="container-fluid p-5 bg-warning text-white text-center">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 class="display-1">
                        Paiano Hack-61
                    </h1>
                    
                    @if (session('emailSent'))
                    <div class="alert alert-success">
                        {{session('emailSent')}}
                    </div>
                    @endif
                    
                    @if (session('emailError'))
                    <div class="alert alert-danger">
                        {{session('emailError')}}
                    </div>
                    @endif
                </div>
            </div>
        </div>
        
    </x-layout>
    