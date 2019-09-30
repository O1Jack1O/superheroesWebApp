@extends('layouts.app')

@section('content')
<h1 class="text-center pt-2 pb-4">Add new hero:</h1>

<div class="row">
    <div class="col-10">
        <a href="/superheroes" class="btn btn-primary p-3 float-right">Return back</a>
    </div>
</div>


<div class="container">
    <form action="/superheroes" method="post" enctype="multipart/form-data">


        <div class="form-group">
            <label for="nickname​"><strong>Hero`s name:</strong></label>
            <input type="text" class="form-control mb-2" name="nickname​" id="nickname​" aria-describedby="emailHelp"
                   placeholder="Enter hero`s name">

            <label for="real_name"><strong>Real name of the hero:</strong></label>
            <input type="text" class="form-control mb-2" name="real_name" id="real_name" aria-describedby="emailHelp"
                   placeholder="Enter real name of the hero">

            <label for="origin_description​"><strong>Origin description​:</strong></label>
            <textarea class="form-control mb-2" name="origin_description" id="origin_description​" rows="2"
                      placeholder="Enter description​ of the hero"></textarea>

            <label for="superpowers"><strong>Superpowers of hero:</strong></label>
            <textarea class="form-control mb-2" name="superpowers" id="superpowers" rows="2"
                      placeholder="Enter superpowers of the hero"></textarea>

            <label for="catch_phrase"><strong>Catch phrase:</strong></label>
            <textarea class="form-control mb-2" name="catch_phrase" id="catch_phrase" rows="2"
                      placeholder="Enter catch phrase of the hero"></textarea>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01"><strong>Upload image of hero</strong></span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="image" id="image"
                       aria-describedby="image">
                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
        </div>
        @csrf
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
