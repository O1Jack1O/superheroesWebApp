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
                <div class="col-12 col-md-4 my-0 d-flex justify-content-center"
                     style="width: 260px; height: 337px; ">
                    <div class="card shadow-lg p-1 mb-3 bg-white rounded m-0">
                        <img
                            src="{{ asset('/storage/'.$superhero->url_image) }}"
                            class="card-img-top" alt="Image of hero"
                            style="max-width: 250px; max-height: 230px;"
                        >
                        <div class="card-body text-center p-0">
                            <h3 class="card-title">{{ $superhero->nickname​ }}</h3>


                            <a href="/superheroes/{{$superhero->id}}" class="btn btn-light p-1">More</a>
                            <a href="/superheroes/{{$superhero->id}}/edit" class="btn btn-primary p-1">Edit</a>
                            <form action="/superheroes/{{$superhero->id}}" method="post" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger p-1">Delete</button>
                            </form>
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

