@extends('layouts.app')

{{-- Header hero section --}}

@section('hero')
    <div class="header_hero bg-light text-primary">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6 d-flex align-items-center justify-content-center h-100">
                    <div class="text-center">
                        <h1 style="font-family: 'Abril Fatface', cursive;">Enjoy Food All <br /> Over The
                            World
                        </h1>
                        <a href="{{route('menu.index')}}" class="btn btn-lg mt-3 btn-primary">Order Online Now</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    @endsection


@section('content')

    

    
    

    
@endsection
