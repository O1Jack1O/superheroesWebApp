@extends('layouts.app')

@section('content')
    <h1 class="text-center pt-2 pb-4">Edit hero:</h1>

    <div class="container">
        <form action="/superheroes/{{$superhero->id}}" method="post" enctype="multipart/form-data">
            @method('PATCH')
            <a href="/superheroes" class="btn btn-primary p-3 float-right">Return back</a>
            <div class="text-center">
                <img
                    src="{{ asset('/storage/'.$superhero->url_image) }}"
                    style="max-width: 250px; max-height: 230px;"
                    class="card-img-top " alt="Image of hero">
            </div>
            <div class="form-group">
                <label for="nickname​"><strong>Hero`s name:</strong></label>
                <input type="text" class="form-control mb-2" name="nickname​" id="nickname​"
                       aria-describedby="emailHelp"
                       value="{{ $superhero->nickname​ }}">

                <label for="real_name"><strong>Real name of the hero:</strong></label>
                <input type="text" class="form-control mb-2" name="real_name" id="real_name"
                       aria-describedby="emailHelp"
                       value="{{ $superhero->real_name​ }}">

                <label for="origin_description​"><strong>Origin description​:</strong></label>
                <textarea class="form-control mb-2" name="origin_description" id="origin_description​" rows="2"
                          value="">{{ $superhero->origin_description​ }}</textarea>

                <label for="superpowers"><strong>Superpowers of hero:</strong></label>
                <textarea class="form-control mb-2" name="superpowers" id="superpowers" rows="2"
                          value="">{{ $superhero->superpowers }}</textarea>

                <label for="catch_phrase"><strong>Catch phrase:</strong></label>
                <textarea class="form-control mb-2" name="catch_phrase" id="catch_phrase" rows="2"
                          value="">{{ $superhero->catch_phrase }}</textarea>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"
                          id="inputGroupFileAddon01"><strong>Upload image of hero</strong></span>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image" id="image"
                           aria-describedby="image">
                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                </div>
            </div>
            @csrf
            <button type="submit" class="btn btn-primary">Confirm edit</button>
        </form>

    </div>
@endsection
