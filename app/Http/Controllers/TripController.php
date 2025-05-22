<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TripController extends Controller
{
    public function index()
    {
        // En un caso real, aquí cargaríamos los viajes del usuario desde la base de datos
        $trips = [
            ['id' => 1, 'destination' => 'Barcelona', 'start_date' => '15/07/2023', 'end_date' => '22/07/2023'],
            ['id' => 2, 'destination' => 'Roma', 'start_date' => '10/09/2023', 'end_date' => '17/09/2023'],
        ];
        
        return view('trips.index', compact('trips'));
    }
    
    public function create()
    {
        return view('trips.create');
    }
    
    public function store(Request $request)
    {
        // Validación y almacenamiento del viaje
        $request->validate([
            'destination' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);
        
        // En un caso real, aquí guardaríamos el viaje en la base de datos
        
        return redirect()->route('trips.index')->with('success', 'Viaje creado correctamente');
    }
    
    public function show($id)
    {
        // En un caso real, aquí cargaríamos el viaje específico desde la base de datos
        $trip = [
            'id' => $id,
            'destination' => 'Barcelona',
            'start_date' => '15/07/2023',
            'end_date' => '22/07/2023',
            'notes' => 'Recordar llevar el pasaporte y reservar el tour de la Sagrada Familia'
        ];
        
        return view('trips.show', compact('trip'));
    }
    
    public function edit($id)
    {
        // En un caso real, aquí cargaríamos el viaje a editar desde la base de datos
        $trip = [
            'id' => $id,
            'destination' => 'Barcelona',
            'start_date' => '15/07/2023',
            'end_date' => '22/07/2023',
            'notes' => 'Recordar llevar el pasaporte y reservar el tour de la Sagrada Familia'
        ];
        
        return view('trips.edit', compact('trip'));
    }
    
    public function update(Request $request, $id)
    {
        // Validación y actualización del viaje
        $request->validate([
            'destination' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);
        
        // En un caso real, aquí actualizaríamos el viaje en la base de datos
        
        return redirect()->route('trips.show', $id)->with('success', 'Viaje actualizado correctamente');
    }
    
    public function destroy($id)
    {
        // En un caso real, aquí eliminaríamos el viaje de la base de datos
        
        return redirect()->route('trips.index')->with('success', 'Viaje eliminado correctamente');
    }
} 