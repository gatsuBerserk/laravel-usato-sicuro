{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <title>Document</title>
</head>
<body>
    
</body>
</html> --}}

@extends('layouts.app')

@section('content')
     <a class="btn btn-dark m-5" href="{{route("welcome")}}">Torna alla Home</a>
     @if(Auth::check())
        <a class="btn btn-success" href="{{route("cars.create")}}">Aggiungi Auto</a>
     @endif
    <h1>
        Lista auto
    </h1>
   <div class="container-fluid  mx-auto">
       <div class="row">
                @foreach ($cars as $car)
                    <div class="col-3"> 
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{$car->image}}" class="img-fluid rounded-start" alt="{{$car->model}}">
                            </div>
                            <div class="col-md-8">
                                    <div class="card-body">
                                    <h5 class="card-title">{{$car->marca}}</h5>
                                    <p class="card-text">{{$car->model}}</p>
                                    <p class="card-text">{{$car->alimentazione}}</p>
                                    <a class="btn btn-primary" href="{{route("cars.show", $car->id)}}">Info</a>
                                @if(Auth::check())
                                    <a class="btn btn-warning" href="{{route("cars.edit", $car->id)}}">Modifica</a> 
                                    <form action="{{route("cars.destroy", $car)}}" method="POST" class="delete" car-model={{$car->model}}>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"> Elimina </button>

                                    </form>
                                @endif
                                </div>
                            </div>
                            </div>
                        </div> 
                    </div> 
                @endforeach
       </div>
    </div>  
@endsection

@section('content')
    <script>
        const deleteForms = document.querySelectorAll('.delete');
            deleteForms.forEach(singleForm => {
                singleForm.addEventListener('submit', function (event) {
                    event.preventDefault(); // § blocchiamo l'invio del form
                    userConfirmation = window.confirm(`Sei sicuro di voler eliminare ${this.getAttribute('car-model')}?` );
                    if (userConfirmation) {
                        this.submit();
                    }
                })
            });
    </script>   
@endsection