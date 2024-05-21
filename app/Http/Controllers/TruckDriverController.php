<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TruckDriverController extends Controller
{
    public function index(){

        $truck_drivers = Trucker::orderBy('id', 'desc')->get();
        return view('truckers.listar', compact('truckers'));

    }


    public function create(){
        return view('truckers.create');

    }

    public function store(Request $request){
        $truck_driver = new Trucker();
        $truck_driver->nombre=$request->nombre;
        $truck_driver->poblacion=$request->poblacion;
        $truck_driver->telefono=$request->telefono;
        $truck_driver->direccion=$request->direccion;
        $truck_driver->salario=$request->salario;
        $truck_driver->save();

        return $truck_driver;
    }

    public function show(Trucker $trucker){
        return view('truckers.show',compact('trucker'));
    }

    public function destroy (Trucker $trucker){
        $trucker->delete();
        return redirect()->route('trucker.index');
      }


      public function edit(Trucker $trucker){

        return view('truckers.edit',compact('trucker'));

      }


      public function update(Request $request, Trucker $trucker){

            $trucker->nombre=$request->nombre;
            $trucker->poblacion=$request->poblacion;
            $trucker->telefono=$request->telefono;
            $trucker->direccion=$request->direccion;
            $trucker->salario=$request->salario;

            $trucker->save();

        return redirect()->route('truck_driver.index');

      }
}
