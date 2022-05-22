<?php

namespace App\Http\Controllers;
use App\Car;

use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars= Car::all();
        return view("cars.index", compact("cars"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("cars.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $data = $request->all();

        $request->validate([
            "image"=> "required",
            'numero_telaio' => 'required',
            'model' => 'required|min:3',
            'porte' => 'required|integer|max:5',
            'data_immatricolazione' => 'required|date',
            'marca' => 'required|min:3',
            'alimentazione' => 'required|min:3',
            'prezzo' => 'required|numeric|min:4',
        ]);
        
        $car = new Car();
            $car->image= $data["image"];
            $car->numero_telaio= $data["numero_telaio"];
            $car->model=$data["model"]; 
            $car->porte=$data["porte"];
            $car->data_immatricolazione=$data["data_immatricolazione"];
            $car->marca=$data["marca"];
            $car->alimentazione=$data["alimentazione"];
            $car->prezzo=$data["prezzo"];
            $car->save();
            
            
            
            return redirect()->route("cars.show", $car->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car= Car::findOrFail($id);
        return view("cars.show", compact("car"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
