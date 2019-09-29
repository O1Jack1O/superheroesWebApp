@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="m-0">Superheroes:</h1>
                <a href="/superheroes/create" class="btn btn-danger p-1 float-right">Create new hero</a>

            </div>
        </div>
        <div class="row d-flex justify-content-center">
            @foreach($Superheroes as $superhero)
                <div class="col-12 col-md-4 my-1 d-flex justify-content-center">
                    <div class="card shadow-lg p-3 mb-3 bg-white rounded m-0" style="width: 16rem; height: 355px ">
                        <img
                            src="{{ asset('/storage/'.$superhero->url_image) }}"
                            class="card-img-top" alt="Image of hero">
                        <div class="card-body text-center">
                            <h3 class="card-title">{{ $superhero->nickname​ }}</h3>

                            <a href="#" class="btn btn-light p-1">More</a>
                            <a href="#" class="btn btn-primary p-1">Edit</a>
                            <a href="#" class="btn btn-danger p-1">Delete</a>
                        </div>
                    </div>
                </div>

            @endforeach

        </div>
        <div class="row">
            <div class="col-12 p-0 d-flex justify-content-center">
                {{ $Superheroes->links() }}
            </div>
        </div>
    </div>
@endsection

{{--                        <p class="card-text"><b>Real name: </b> <i>{{ $superhero->real_name​ }}</i></p>--}}
{{--                        <p class="card-text"><b>Description​: </b> <i>{{ $superhero->origin_description​ }}</i></p>--}}
{{--                        <p class="card-text"><b>Superpowers: </b> <i>{{ $superhero->superpowers }}</i></p>--}}
{{--                        <p class="card-text"><b>Catch phrase: </b>{{ $superhero->catch_phrase }}</p>--}}

