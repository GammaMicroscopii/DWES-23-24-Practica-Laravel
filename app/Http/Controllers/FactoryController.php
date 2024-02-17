<?php

namespace App\Http\Controllers;

use App\Models\Factory;
use Illuminate\Http\Request;

class FactoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $factories = Factory::all();
        return view('factories.index', compact('factories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('factories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'telefono_contacto' => 'required|max:32',
            'articulos_provistos' => 'required|numeric|gte:0|lte:9999999999'
        ]);

        $factory = Factory::create($request->all());
       
        return redirect()->route('factories.index')->with('exito', 'Fábrica creada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Factory $factory)
    {
        return view('factories.show', compact('factory'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Factory $factory)
    {
        return view('factories.edit', compact('factory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
    {
      
        
        $request->validate([
            'telefono_contacto' => 'required | ' . /*regex:/[+]?[[0-9]|\s|[-]]+/ | */'max:32',
            'articulos_provistos' => 'required | numeric | gte:0 | lte: 9999999999'
        ]);

     
        $factory2 = Factory::find($id);
    
    
        
        if ($factory2) {
            $factory2->fill($request->all());
            $factory2->save();       
            
           return redirect()->route('factories.index')->with('exito', 'Fábrica creada correctamente.');
        } else {
            return redirect()->route('factories.index')->with('fracaso', 'Fábrica no existe.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Factory $factory)
    {
        $factory->delete();
        return redirect()->route('factories.index')->with('exito', "Fábrica borrada correctamente");
    }
}
