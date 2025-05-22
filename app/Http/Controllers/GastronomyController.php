<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GastronomyController extends Controller
{
    public function index()
    {
        return view('gastronomy.index');
    }
    
    public function show($id)
    {
        // Aquí normalmente recuperaríamos los datos de la base de datos
        // Pero por ahora, usaremos datos estáticos
        
        $dishes = [
            1 => [
                'id' => 1,
                'name' => 'Paella Valenciana',
                'description' => 'La auténtica paella valenciana, preparada con los ingredientes más frescos y siguiendo la receta tradicional.',
                'full_description' => 'La paella valenciana es el plato más internacional de la cocina española. Originaria de la región de Valencia, esta preparación a base de arroz, azafrán, verduras y carne (tradicionalmente pollo y conejo) se cocina en una paella, una sartén ancha y poco profunda que le da su nombre. Los valencianos preparan este plato típicamente los domingos en reuniones familiares.',
                'ingredients' => ['Arroz', 'Pollo', 'Conejo', 'Judías verdes', 'Garrofón', 'Tomate', 'Pimentón', 'Azafrán', 'Aceite de oliva', 'Sal'],
                'origin' => 'Valencia, España',
                'image' => 'https://via.placeholder.com/800x600'
            ],
            2 => [
                'id' => 2,
                'name' => 'Tapas Variadas',
                'description' => 'Selección de las mejores tapas españolas, perfectas para compartir y disfrutar de la gastronomía local.',
                'full_description' => 'Las tapas son una de las expresiones culinarias más representativas de España. Estos pequeños aperitivos que se sirven en los bares junto con la bebida son una tradición arraigada en toda la geografía española. Desde tortilla de patatas hasta jamón ibérico, croquetas o patatas bravas, la variedad es inmensa y forma parte esencial de la cultura gastronómica y social española.',
                'popular_tapas' => ['Tortilla de patatas', 'Jamón ibérico', 'Croquetas', 'Patatas bravas', 'Calamares a la romana', 'Boquerones en vinagre'],
                'origin' => 'España (tradición nacional)',
                'image' => 'https://via.placeholder.com/800x600'
            ],
            3 => [
                'id' => 3,
                'name' => 'Gazpacho Andaluz',
                'description' => 'Refrescante sopa fría andaluza, ideal para los días calurosos de verano.',
                'full_description' => 'El gazpacho es una sopa fría originaria de Andalucía, elaborada principalmente con verduras crudas trituradas. Sus ingredientes básicos son tomate, pepino, pimiento, cebolla, ajo, aceite de oliva, vinagre y sal. Es especialmente popular durante los meses de verano por sus propiedades refrescantes y su alto contenido en vitaminas. Existen muchas variantes regionales como el salmorejo cordobés o el ajoblanco malagueño.',
                'ingredients' => ['Tomates maduros', 'Pepino', 'Pimiento verde', 'Cebolla', 'Ajo', 'Pan duro', 'Aceite de oliva virgen extra', 'Vinagre', 'Sal'],
                'origin' => 'Andalucía, España',
                'image' => 'https://via.placeholder.com/800x600'
            ]
        ];
        
        // Verificar si existe el plato
        if (!isset($dishes[$id])) {
            abort(404);
        }
        
        return view('gastronomy.show', ['dish' => $dishes[$id]]);
    }
}
