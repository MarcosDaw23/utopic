<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        // En un caso real, aquí cargaríamos los posts desde la base de datos
        $posts = [
            ['id' => 1, 'title' => 'Los mejores destinos para el verano', 'excerpt' => 'Descubre los destinos más populares para vacacionar este verano.'],
            ['id' => 2, 'title' => 'Guía para viajar con poco presupuesto', 'excerpt' => 'Consejos y trucos para viajar sin gastar demasiado.'],
            ['id' => 3, 'title' => 'Experiencias gastronómicas imperdibles', 'excerpt' => 'Los mejores lugares para disfrutar de la gastronomía local durante tus viajes.'],
        ];
        
        return view('blog.index', compact('posts'));
    }
    
    public function show($id)
    {
        // En un caso real, aquí cargaríamos el post específico desde la base de datos
        $post = [
            'id' => $id,
            'title' => 'Los mejores destinos para el verano',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'created_at' => now()->format('d/m/Y')
        ];
        
        return view('blog.show', compact('post'));
    }
} 