
@extends('home')

@section('content')
    

    <div>
        <h1>
            Auto Singola
        </h1>
        <div class="d-flex justify-content-around">
            <a class="btn btn-dark" href="{{route("welcome")}}">Home page</a>
        <a class="btn btn-primary" href="{{route("cars.index")}}">Lista Completa</a>
        </div>
        
    </div>
    <section class="container-fluid">
        <div class="row justify-content-center py-3">
    
            <div class="col-12 py-2 edit-messsage">
                @if(session('message'))
                    <div class="alert alert-success">
                        <p>{{session('message')}}</p>
                    </div>
                @endif
            </div>
    
            <div class="car-card p-2 col-8">
                <div class="car-img d-flex justify-content-center">
                    <img class="mb-2" src="{{$car->image}}" alt="{{$car->model}}">
                </div>
                <div class="d-flex flex-column align-items-center mb-4">
                    <h1><strong class="text-uppercase">{{$car->model}}</strong> - <strong class="text-uppercase">{{$car->marca}}</strong></h1>
                    <h2 class="mb-2">Informazioni auto</h2>
                    <div class="info-box" style="width: 18rem;">
                        <ul class="list-group text-center list-group-flush">
                            <li class="list-group-item">Numero telaio: {{ strtoupper($car->numero_telaio)}}</li>
                            <li class="list-group-item">Data immatricolazione: {{$car->data_immatricolazione}}</li>
                            <li class="list-group-item condizione">Condizione {{$car->is_new}}</li>
                            <li class="list-group-item">Alimentazione: {{$car->alimentazione}}</li>
                        </ul>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
@endsection
