@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <h1>DC Comics</h1>
            </div>
        </div>
        <div class="row mt-5">
            @foreach ($comics as $comic)
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card my-3">
                        <div class="card-img-top">
                            <img class="img-fluid" src="{{ $comic->thumb }}" alt="">
                        </div>
                        <div class="card-body">
                            <div class="card-title">
                                <h4>{{ $comic->title }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection