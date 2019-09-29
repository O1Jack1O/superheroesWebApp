<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row d-flex justify-content-center" >
        @foreach($Superheroes as $superhero)
            <div class="col-12 col-md-4 my-2 d-flex justify-content-center">
                <div class="card shadow-lg p-3 mb-3 bg-white rounded m-0" style="width: 16rem; height: 384px ">
                    <img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQNfwQFcyjsJ0XhUAzknw4OB7qVvZ0Gr4PAE_w5m71DWtqcWxBIA"
                        class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h2 class="card-title">{{ $superhero->nickname​ }}</h2>
                        {{--                        <p class="card-text"><b>Real name: </b> <i>{{ $superhero->real_name​ }}</i></p>--}}
                        {{--                        <p class="card-text"><b>Description​: </b> <i>{{ $superhero->origin_description​ }}</i></p>--}}
                        {{--                        <p class="card-text"><b>Superpowers: </b> <i>{{ $superhero->superpowers }}</i></p>--}}
                        {{--                        <p class="card-text"><b>Catch phrase: </b>{{ $superhero->catch_phrase }}</p>--}}
                        <a href="#" class="btn btn-primary">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
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
</body>
</html>
