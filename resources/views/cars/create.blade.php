@extends('home')

@section('content')
    

    <h1>
        Aggiungi una nuova auto
    </h1>
    <div class="d-flex justify-content-center">
        <a class="btn btn-primary" href="{{route("cars.index")}}">Lista Completa</a>
    </div>
    
    <section class="container-fluid">
        <div class="row justify-content-center p-3">
            <div class="col-7">
                <h1 class="text-uppercase fw-bolder">Info necessarie per auto</h1>
    
                <form action="{{route("cars.store")}}" method="POST">
                    @csrf
    
                    <div class="form-group">
                        <label for="image">Immagine</label>
                        <input class="form-control" type="text" name="image" id="image">
                        @error('image')
                                <div class="alert alert-danger">
                                    {{$message}}
                                </div>
                            @enderror
                    </div>
    
                    <div class="form-row justify-content-between">
                        <div class="form-group">
                            <label for="numero_telaio">Numero di telaio</label>
                            <input class="form-control" type="text" name="numero_telaio" id="numero_telaio">
                            @error('numero_telaio')
                                <div class="alert alert-danger">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
        
                        <div class="form-group">
                            <label for="model">Modello</label>
                            <input class="form-control" type="text" name="model" id="model">
                            @error('model')
                                <div class="alert alert-danger">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
    
                        <div class="form-group">
                            <label for="porte">Porte</label>
                            <input class="form-control" type="text" name="porte" id="porte">
                            @error('porte')
                                <div class="alert alert-danger">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                    </div>
    
                    
                    <div class="form-row justify-content-between">
                        <div class="form-group">
                            <label for="data_immatricolazione">Immatricolazione</label>
                            <input class="form-control" type="date" name="data_immatricolazione" id="data_immatricolazione">
                            @error('data_immatricolazione')
                                <div class="alert alert-danger">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="marca">Marca</label>
                            <input class="form-control" type="text" name="marca" id="marca">
                            @error('marca')
                                <div class="alert alert-danger">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                
                        <div class="form-group">
                            <label for="alimentazione">Alimentazione</label>
                            <input class="form-control" type="text" name="alimentazione" id="alimentazione"> 
                            @error('alimentazione')
                                <div class="alert alert-danger">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
        
                        <div class="form-group">
                            <label for="prezzo">Prezzo</label>
                            <input class="form-control" type="text" name="prezzo" id="prezzo"> 
        
                            @error('prezzo')
                                <div class="alert alert-danger">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                    </div>
    
                    <div class="d-flex justify-content-center mt-5">
                        <button type="submit" class="btn btn-primary w-50 text-uppercase fw-bolder">Aggiungi</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection