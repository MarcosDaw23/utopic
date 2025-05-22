<x-app-layout>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <a href="{{ route('blog.index') }}" class="inline-flex items-center text-sm font-medium text-blue-600 hover:text-blue-500">
                        <svg class="h-5 w-5 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        Volver al blog
                    </a>
                    
                    <h1 class="mt-4 text-3xl font-extrabold text-gray-900">
                        {{ $post['title'] }}
                    </h1>
                    
                    <div class="flex items-center mt-3 text-sm text-gray-500">
                        <svg class="h-5 w-5 mr-1 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                        </svg>
                        Publicado el {{ $post['created_at'] }}
                    </div>
                    
                    <div class="mt-8 prose lg:prose-lg">
                        <p>{{ $post['content'] }}</p>
                        
                        <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        
                        <h2 class="mt-6">Lugares imprescindibles</h2>
                        
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        
                        <ul>
                            <li>Monumento histórico principal</li>
                            <li>Mercado local tradicional</li>
                            <li>Parque natural con vistas panorámicas</li>
                            <li>Restaurante con gastronomía típica</li>
                            <li>Museo de historia y cultura</li>
                        </ul>
                        
                        <h2 class="mt-6">Consejos para viajeros</h2>
                        
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        
                        <blockquote>
                            "El viaje de mil millas comienza con un solo paso." - Lao Tzu
                        </blockquote>
                        
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                    </div>
                    
                    <div class="mt-8 border-t border-gray-200 pt-8">
                        <h3 class="text-lg font-medium text-gray-900">Comentarios (3)</h3>
                        
                        <div class="mt-6 space-y-6">
                            <div class="flex">
                                <div class="mr-4 flex-shrink-0">
                                    <div class="h-10 w-10 rounded-full bg-gray-300 flex items-center justify-center">
                                        <span class="text-sm font-medium text-gray-700">MV</span>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-sm font-medium text-gray-900">María Vázquez</h4>
                                    <div class="mt-1 text-sm text-gray-700">
                                        <p>¡Gran artículo! Me ha sido muy útil para planificar mi próximo viaje.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="flex">
                                <div class="mr-4 flex-shrink-0">
                                    <div class="h-10 w-10 rounded-full bg-gray-300 flex items-center justify-center">
                                        <span class="text-sm font-medium text-gray-700">JL</span>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-sm font-medium text-gray-900">Juan López</h4>
                                    <div class="mt-1 text-sm text-gray-700">
                                        <p>¿Alguien ha estado ahí recientemente? Me gustaría saber si sigue siendo tan recomendable.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="flex">
                                <div class="mr-4 flex-shrink-0">
                                    <div class="h-10 w-10 rounded-full bg-gray-300 flex items-center justify-center">
                                        <span class="text-sm font-medium text-gray-700">AG</span>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-sm font-medium text-gray-900">Ana González</h4>
                                    <div class="mt-1 text-sm text-gray-700">
                                        <p>Yo estuve allí el mes pasado y es tal como lo describe el artículo. Añadiría que es mejor evitar la temporada alta si quieres disfrutar con tranquilidad.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        @auth
                            <div class="mt-8">
                                <h4 class="text-sm font-medium text-gray-900">Deja un comentario</h4>
                                <div class="mt-2">
                                    <textarea rows="4" class="shadow-sm block w-full focus:ring-blue-500 focus:border-blue-500 sm:text-sm border border-gray-300 rounded-md"></textarea>
                                </div>
                                <div class="mt-2 flex justify-end">
                                    <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                        Comentar
                                    </button>
                                </div>
                            </div>
                        @else
                            <div class="mt-6 rounded-md bg-gray-50 px-6 py-4 text-sm">
                                <p>Para dejar un comentario, <a href="{{ route('login') }}" class="font-medium text-blue-600 hover:text-blue-500">inicia sesión</a> o <a href="{{ route('register') }}" class="font-medium text-blue-600 hover:text-blue-500">regístrate</a>.</p>
                            </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 