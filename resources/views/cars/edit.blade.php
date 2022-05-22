<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <title>Document</title>
</head>
<body>
    <section class="container-fluid">
        <div class="row justify-content-center p-3">
            <div class="row justify-content-center p-3">
            <div class="col-7">
                @if ($errors->any())
                    
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            {{ $error }}
                        @endforeach
                    </div>
                    
                @endif
            </div>
            <div class="col-8">
                <h1 class="text-uppercase fw-bolder"> Edit car :  <strong> {{$car->model}} -  {{$car->numero_telaio}} </strong> </h1>
    
                <form action="{{route("cars.update",$car)}}" method="POST">
                    @method('PUT')
                    @csrf
    
                    <div class="form-group">
                        <label for="image">Immagine</label>
                        <input class="form-control" type="text" name="image" id="image" value="{{$car->image}}">
                    </div>
    
                    <div class="form-row justify-content-between">
                        <div class="form-group">
                            <label for="numero_telaio">Numero di telaio</label>
                            <input class="form-control" type="text" name="numero_telaio" id="numero_telaio" value="{{$car->numero_telaio}}">
                        </div> 
        
                        <div class="form-group">
                            <label for="model">Modello</label>
                            <input class="form-control" type="text" name="model" id="model" value="{{$car->model}}">
                        </div>
        
                        
                        <div class="form-group">
                            <label for="porte">Porte</label>
                            <input class="form-control" type="text" name="porte" id="porte" value="{{$car->porte}}">
                        </div>
                    </div>
    
                    <div class="form-row justify-content-between">
                        
                        <div class="form-group">
                            <label for="data_immatricolazione">Immatricolazione</label>
                            <input class="form-control" type="text" name="data_immatricolazione" id="data_immatricolazione" value="{{$car->data_immatricolazione}}">
                        </div>
                        
                        <div class="form-group">
                            <label for="marca">Marca</label>
                            <input class="form-control" type="text" name="marca" id="marca" value="{{$car->marca}}">
                        </div>
            
                        <div class="form-group">
                            <label for="alimentazione">Alimentazione</label>
                            <input class="form-control" type="text" name="alimentazione" id="alimentazione"  value="{{$car->alimentazione}}"> 
                        </div>
    
                        <div class="form-group">
                            <label for="prezzo">Prezzo</label>
                            <input class="form-control" type="text" name="prezzo" id="prezzo"  value="{{$car->prezzo}}"> 
                        </div>
    
                    </div>
    
                    <div class="d-flex justify-content-center mt-5">
                        <button type="submit" class="btn btn-warning w-50 text-uppercase fw-bolder">Update info</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>