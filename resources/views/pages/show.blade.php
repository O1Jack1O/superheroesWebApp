@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-12 ">
            <div class="card shadow-lg p-1 mb-3 bg-white rounded m-0">
                <div class="text-center">
                    <img
                        src="{{ asset('/storage/'.$superhero->url_image) }}"
                        style="width:400px;"
                        class="card-img-top " alt="Image of hero">
                </div>
                <div class="card-body text-center p-0">
                    <h3 class="card-title">{{ $superhero->nickname​ }}</h3>
                    <p class="card-text"><b>Real name: </b> <i>{{ $superhero->real_name​ }}</i></p>
                    <p class="card-text"><b>Description​: </b> <i>{{ $superhero->origin_description​ }}</i></p>
                    <p class="card-text"><b>Superpowers: </b> <i>{{ $superhero->superpowers }}</i></p>
                    <p class="card-text"><b>Catch phrase: </b>{{ $superhero->catch_phrase }}</p>
                    <a href="/superheroes" class="btn btn-primary p-3">Return back</a>

                </div>
            </div>
        </div>
    </div>

</div>

