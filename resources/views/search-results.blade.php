<x-app-layout>
    <div class="bg-blue-50 py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Título específico del país -->
            <div class="text-center py-8">
                <h1 id="pais-titulo" class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                    Experiencias Náuticas en {{ $destination ?? 'destino seleccionado' }}
                </h1>
                <p id="pais-descripcion" class="mt-4 max-w-3xl mx-auto text-xl text-gray-500">
                    Descubre las mejores embarcaciones disponibles para disfrutar de las aguas de {{ $destination ?? 'destino seleccionado' }}
                </p>
            </div>
            
            <!-- Filtros y ordenación -->
            <div class="bg-white rounded-lg shadow-md p-4 mb-6">
                <form id="refinement-form" class="grid grid-cols-1 md:grid-cols-5 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Destino</label>
                        <input type="text" id="destination" class="w-full p-2 border border-gray-300 rounded-md" value="{{ $destination ?? '' }}" readonly>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Fecha</label>
                        <input type="date" id="travel-date" class="w-full p-2 border border-gray-300 rounded-md" value="{{ $date ?? '' }}" readonly>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Tipo de embarcación</label>
                        <select class="w-full p-2 border border-gray-300 rounded-md">
                            <option>Todos los tipos</option>
                            <option>Yate</option>
                            <option>Velero</option>
                            <option>Catamarán</option>
                            <option>Barco a motor</option>
                        </select>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Precio máximo</label>
                        <select class="w-full p-2 border border-gray-300 rounded-md">
                            <option>Cualquier precio</option>
                            <option>Hasta €500</option>
                            <option>Hasta €1000</option>
                            <option>Hasta €2000</option>
                            <option>Hasta €5000</option>
                        </select>
                    </div>
                    
                    <div class="flex items-end">
                        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md transition duration-300">
                            Actualizar búsqueda
                        </button>
                    </div>
                </form>
            </div>
            
            <!-- Opciones de ordenación -->
            <div class="flex flex-wrap items-center justify-between mb-4 bg-white rounded-lg shadow-sm p-3">
                <div class="text-sm font-medium text-gray-700">
                    <span id="results-count">24</span> resultados encontrados para <span id="search-destination">{{ $destination ?? 'destino seleccionado' }}</span>
                </div>
                <div class="flex space-x-2 text-sm">
                    <span class="text-gray-700 font-medium">Ordenar por:</span>
                    <button class="px-3 py-1 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition duration-300">Lo mejor</button>
                    <button class="px-3 py-1 bg-white text-gray-700 rounded-md hover:bg-gray-100 transition duration-300">Precio</button>
                    <button class="px-3 py-1 bg-white text-gray-700 rounded-md hover:bg-gray-100 transition duration-300">Duración</button>
                    <button class="px-3 py-1 bg-white text-gray-700 rounded-md hover:bg-gray-100 transition duration-300">Popularidad</button>
                </div>
            </div>
            
            <!-- Listado de resultados -->
            <div id="search-results" class="space-y-4">
                <!-- Resultado 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="md:flex">
                        <div class="md:w-1/3 relative">
                            <img src="https://images.unsplash.com/photo-1565625415477-7ff096f3c8fd" alt="Yate de lujo" class="w-full h-full object-cover">
                            <div class="absolute top-2 left-2 bg-blue-600 text-white text-xs font-bold px-2 py-1 rounded">
                                Oferta especial
                            </div>
                        </div>
                        <div class="md:w-2/3 p-6">
                            <div class="md:flex justify-between">
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900">Yate de Lujo Oceanis 54</h3>
                                    <div class="flex items-center mt-1">
                                        <span class="text-yellow-500">★★★★★</span>
                                        <span class="text-sm text-gray-600 ml-1">(24 opiniones)</span>
                                        <span class="mx-2 text-gray-300">|</span>
                                        <span class="text-sm text-blue-600 font-medium">Excelente</span>
                                    </div>
                                </div>
                                <div class="md:text-right mt-4 md:mt-0">
                                    <div class="text-sm text-gray-500">Precio por día</div>
                                    <div class="text-2xl font-bold text-gray-900">€899</div>
                                    <div class="text-xs text-gray-500">Incluye impuestos y tasas</div>
                                </div>
                            </div>
                            
                            <div class="mt-4 border-t border-gray-100 pt-4">
                                <div class="flex flex-wrap gap-2 mb-3">
                                    <span class="inline-flex items-center px-2 py-1 bg-blue-50 text-xs text-blue-700 rounded">
                                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm0-2a6 6 0 100-12 6 6 0 000 12zm-1-5h2v2H9v-2zm0-6h2v4H9V5z"></path>
                                        </svg>
                                        5 camarotes
                                    </span>
                                    <span class="inline-flex items-center px-2 py-1 bg-blue-50 text-xs text-blue-700 rounded">
                                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
                                        </svg>
                                        Capacidad 10 personas
                                    </span>
                                    <span class="inline-flex items-center px-2 py-1 bg-blue-50 text-xs text-blue-700 rounded">
                                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        Cocina equipada
                                    </span>
                                    <span class="inline-flex items-center px-2 py-1 bg-blue-50 text-xs text-blue-700 rounded">
                                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                        </svg>
                                        Puerto: Marina Botafoch
                                    </span>
                                </div>
                                
                                <div class="flex justify-between items-center mt-4">
                                    <div class="text-sm text-green-600">
                                        <span class="font-bold">Cancelación gratuita</span> hasta 48h antes
                                    </div>
                                    <div class="flex space-x-2">
                                        <button type="button" class="inline-flex items-center justify-center px-4 py-2 border border-blue-300 text-sm font-medium rounded-md text-blue-600 bg-white hover:bg-blue-50 transition duration-300 ver-detalles-btn" data-id="1">
                                            Ver detalles
                                        </button>
                                        <button type="button" class="inline-flex items-center justify-center px-6 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 transition duration-300 reservar-btn" data-id="1">
                                            Reservar ahora
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Resultado 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="md:flex">
                        <div class="md:w-1/3 relative">
                            <img src="https://images.unsplash.com/photo-1589579234096-29e5241b75fa" alt="Catamarán" class="w-full h-full object-cover">
                            <div class="absolute top-2 left-2 bg-green-600 text-white text-xs font-bold px-2 py-1 rounded">
                                15% descuento
                            </div>
                        </div>
                        <div class="md:w-2/3 p-6">
                            <div class="md:flex justify-between">
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900">Catamarán Lagoon 42</h3>
                                    <div class="flex items-center mt-1">
                                        <span class="text-yellow-500">★★★★☆</span>
                                        <span class="text-sm text-gray-600 ml-1">(18 opiniones)</span>
                                        <span class="mx-2 text-gray-300">|</span>
                                        <span class="text-sm text-blue-600 font-medium">Muy bueno</span>
                                    </div>
                                </div>
                                <div class="md:text-right mt-4 md:mt-0">
                                    <div class="text-sm text-gray-500">Precio por día</div>
                                    <div class="flex items-center justify-end">
                                        <div class="text-sm text-gray-400 line-through mr-2">€880</div>
                                        <div class="text-2xl font-bold text-gray-900">€749</div>
                                    </div>
                                    <div class="text-xs text-gray-500">Incluye impuestos y tasas</div>
                                </div>
                            </div>
                            
                            <div class="mt-4 border-t border-gray-100 pt-4">
                                <div class="flex flex-wrap gap-2 mb-3">
                                    <span class="inline-flex items-center px-2 py-1 bg-blue-50 text-xs text-blue-700 rounded">
                                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm0-2a6 6 0 100-12 6 6 0 000 12zm-1-5h2v2H9v-2zm0-6h2v4H9V5z"></path>
                                        </svg>
                                        4 camarotes
                                    </span>
                                    <span class="inline-flex items-center px-2 py-1 bg-blue-50 text-xs text-blue-700 rounded">
                                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
                                        </svg>
                                        Capacidad 8 personas
                                    </span>
                                    <span class="inline-flex items-center px-2 py-1 bg-blue-50 text-xs text-blue-700 rounded">
                                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        Aire acondicionado
                                    </span>
                                    <span class="inline-flex items-center px-2 py-1 bg-blue-50 text-xs text-blue-700 rounded">
                                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                        </svg>
                                        Puerto: Marina Ibiza
                                    </span>
                                </div>
                                
                                <div class="flex justify-between items-center mt-4">
                                    <div class="text-sm text-green-600">
                                        <span class="font-bold">Cancelación gratuita</span> hasta 72h antes
                                    </div>
                                    <div class="flex space-x-2">
                                        <button type="button" class="inline-flex items-center justify-center px-4 py-2 border border-blue-300 text-sm font-medium rounded-md text-blue-600 bg-white hover:bg-blue-50 transition duration-300 ver-detalles-btn" data-id="2">
                                            Ver detalles
                                        </button>
                                        <button type="button" class="inline-flex items-center justify-center px-6 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 transition duration-300 reservar-btn" data-id="2">
                                            Reservar ahora
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Resultado 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="md:flex">
                        <div class="md:w-1/3 relative">
                            <img src="https://images.unsplash.com/photo-1606040821944-19288d41230e" alt="Velero" class="w-full h-full object-cover">
                        </div>
                        <div class="md:w-2/3 p-6">
                            <div class="md:flex justify-between">
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900">Velero Beneteau 45</h3>
                                    <div class="flex items-center mt-1">
                                        <span class="text-yellow-500">★★★★☆</span>
                                        <span class="text-sm text-gray-600 ml-1">(15 opiniones)</span>
                                        <span class="mx-2 text-gray-300">|</span>
                                        <span class="text-sm text-blue-600 font-medium">Muy bueno</span>
                                    </div>
                                </div>
                                <div class="md:text-right mt-4 md:mt-0">
                                    <div class="text-sm text-gray-500">Precio por día</div>
                                    <div class="text-2xl font-bold text-gray-900">€599</div>
                                    <div class="text-xs text-gray-500">Incluye impuestos y tasas</div>
                                </div>
                            </div>
                            
                            <div class="mt-4 border-t border-gray-100 pt-4">
                                <div class="flex flex-wrap gap-2 mb-3">
                                    <span class="inline-flex items-center px-2 py-1 bg-blue-50 text-xs text-blue-700 rounded">
                                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm0-2a6 6 0 100-12 6 6 0 000 12zm-1-5h2v2H9v-2zm0-6h2v4H9V5z"></path>
                                        </svg>
                                        3 camarotes
                                    </span>
                                    <span class="inline-flex items-center px-2 py-1 bg-blue-50 text-xs text-blue-700 rounded">
                                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
                                        </svg>
                                        Capacidad 6 personas
                                    </span>
                                    <span class="inline-flex items-center px-2 py-1 bg-blue-50 text-xs text-blue-700 rounded">
                                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        Equipo de navegación
                                    </span>
                                    <span class="inline-flex items-center px-2 py-1 bg-blue-50 text-xs text-blue-700 rounded">
                                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                        </svg>
                                        Puerto: Puerto Banús
                                    </span>
                                </div>
                                
                                <div class="flex justify-between items-center mt-4">
                                    <div class="text-sm text-green-600">
                                        <span class="font-bold">Cancelación gratuita</span> hasta 24h antes
                                    </div>
                                    <div class="flex space-x-2">
                                        <button type="button" class="inline-flex items-center justify-center px-4 py-2 border border-blue-300 text-sm font-medium rounded-md text-blue-600 bg-white hover:bg-blue-50 transition duration-300 ver-detalles-btn" data-id="3">
                                            Ver detalles
                                        </button>
                                        <button type="button" class="inline-flex items-center justify-center px-6 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 transition duration-300 reservar-btn" data-id="3">
                                            Reservar ahora
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Resultado 4 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="md:flex">
                        <div class="md:w-1/3 relative">
                            <img src="https://images.unsplash.com/photo-1575467678930-c7acd65f2e44" alt="Barco a motor" class="w-full h-full object-cover">
                            <div class="absolute top-2 left-2 bg-orange-600 text-white text-xs font-bold px-2 py-1 rounded">
                                Alta demanda
                            </div>
                        </div>
                        <div class="md:w-2/3 p-6">
                            <div class="md:flex justify-between">
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900">Barco a Motor Cranchi 40</h3>
                                    <div class="flex items-center mt-1">
                                        <span class="text-yellow-500">★★★★★</span>
                                        <span class="text-sm text-gray-600 ml-1">(22 opiniones)</span>
                                        <span class="mx-2 text-gray-300">|</span>
                                        <span class="text-sm text-blue-600 font-medium">Excelente</span>
                                    </div>
                                </div>
                                <div class="md:text-right mt-4 md:mt-0">
                                    <div class="text-sm text-gray-500">Precio por día</div>
                                    <div class="text-2xl font-bold text-gray-900">€650</div>
                                    <div class="text-xs text-gray-500">Incluye impuestos y tasas</div>
                                </div>
                            </div>
                            
                            <div class="mt-4 border-t border-gray-100 pt-4">
                                <div class="flex flex-wrap gap-2 mb-3">
                                    <span class="inline-flex items-center px-2 py-1 bg-blue-50 text-xs text-blue-700 rounded">
                                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm0-2a6 6 0 100-12 6 6 0 000 12zm-1-5h2v2H9v-2zm0-6h2v4H9V5z"></path>
                                        </svg>
                                        2 camarotes
                                    </span>
                                    <span class="inline-flex items-center px-2 py-1 bg-blue-50 text-xs text-blue-700 rounded">
                                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
                                        </svg>
                                        Capacidad 8 personas
                                    </span>
                                    <span class="inline-flex items-center px-2 py-1 bg-blue-50 text-xs text-blue-700 rounded">
                                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        Motor 400 HP
                                    </span>
                                    <span class="inline-flex items-center px-2 py-1 bg-blue-50 text-xs text-blue-700 rounded">
                                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                        </svg>
                                        Puerto: Puerto Calanova
                                    </span>
                                </div>
                                
                                <div class="flex justify-between items-center mt-4">
                                    <div class="text-sm text-amber-600">
                                        <span class="font-bold">¡Solo quedan 2 disponibles!</span> para esa fecha
                                    </div>
                                    <div class="flex space-x-2">
                                        <button type="button" class="inline-flex items-center justify-center px-4 py-2 border border-blue-300 text-sm font-medium rounded-md text-blue-600 bg-white hover:bg-blue-50 transition duration-300 ver-detalles-btn" data-id="4">
                                            Ver detalles
                                        </button>
                                        <button type="button" class="inline-flex items-center justify-center px-6 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 transition duration-300 reservar-btn" data-id="4">
                                            Reservar ahora
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Paginación -->
            <div class="flex justify-center mt-8">
                <nav class="inline-flex rounded-md shadow">
                    <a href="#" class="px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-l-md hover:bg-gray-50">
                        Anterior
                    </a>
                    <a href="#" class="px-4 py-2 text-sm font-medium text-blue-600 bg-blue-50 border border-gray-300 hover:bg-blue-100">
                        1
                    </a>
                    <a href="#" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 hover:bg-gray-50">
                        2
                    </a>
                    <a href="#" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 hover:bg-gray-50">
                        3
                    </a>
                    <a href="#" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-r-md hover:bg-gray-50">
                        Siguiente
                    </a>
                </nav>
            </div>
        </div>
    </div>
    
    <!-- Modal de Detalles -->
    <div id="detalles-modal" class="fixed inset-0 bg-gray-900 bg-opacity-50 z-50 hidden overflow-y-auto">
        <div class="flex items-center justify-center min-h-screen p-4">
            <div class="bg-white rounded-lg shadow-xl max-w-4xl w-full max-h-full overflow-hidden">
                <div class="px-6 py-4 bg-blue-700 text-white flex justify-between items-center">
                    <h3 class="text-xl font-bold" id="modal-titulo">Detalles del barco</h3>
                    <button type="button" class="cerrar-modal text-white hover:text-blue-200">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-6 overflow-y-auto" style="max-height: 80vh;">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <div class="h-64 rounded-lg overflow-hidden">
                                <img id="modal-imagen" src="" alt="Imagen del barco" class="w-full h-full object-cover">
                            </div>
                            <div class="mt-4 grid grid-cols-4 gap-2">
                                <div class="h-16 rounded-md overflow-hidden cursor-pointer hover:opacity-80 transition-opacity">
                                    <img id="thumb-1" src="" alt="Miniatura 1" class="w-full h-full object-cover">
                                </div>
                                <div class="h-16 rounded-md overflow-hidden cursor-pointer hover:opacity-80 transition-opacity">
                                    <img id="thumb-2" src="" alt="Miniatura 2" class="w-full h-full object-cover">
                                </div>
                                <div class="h-16 rounded-md overflow-hidden cursor-pointer hover:opacity-80 transition-opacity">
                                    <img id="thumb-3" src="" alt="Miniatura 3" class="w-full h-full object-cover">
                                </div>
                                <div class="h-16 rounded-md overflow-hidden cursor-pointer hover:opacity-80 transition-opacity">
                                    <img id="thumb-4" src="" alt="Miniatura 4" class="w-full h-full object-cover">
                                </div>
                            </div>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-gray-900 mb-2" id="modal-subtitulo"></h4>
                            <div class="flex items-center mb-4">
                                <span class="text-yellow-500 mr-1" id="modal-estrellas">★★★★★</span>
                                <span class="text-sm text-gray-600" id="modal-opiniones"></span>
                            </div>
                            
                            <div class="mb-4">
                                <h5 class="font-bold text-gray-900 mb-2">Descripción</h5>
                                <p class="text-gray-600" id="modal-descripcion"></p>
                            </div>
                            
                            <div class="mb-4">
                                <h5 class="font-bold text-gray-900 mb-2">Características</h5>
                                <ul class="grid grid-cols-1 md:grid-cols-2 gap-2 text-sm text-gray-600" id="modal-caracteristicas">
                                </ul>
                            </div>
                            
                            <div class="flex items-center justify-between mt-6">
                                <div>
                                    <div class="text-sm text-gray-500">Precio por día</div>
                                    <div class="text-2xl font-bold text-blue-600" id="modal-precio"></div>
                                </div>
                                <button type="button" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 transition duration-300 reservar-desde-modal" id="modal-reservar-btn">
                                    Reservar ahora
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-8 border-t border-gray-200 pt-6">
                        <h4 class="text-xl font-bold text-gray-900 mb-4">Calendario de disponibilidad</h4>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <div class="text-center text-gray-500">
                                <p>Seleccione su fecha de reserva para ver disponibilidad.</p>
                                <div class="mt-3 grid grid-cols-7 gap-1 text-xs">
                                    <div class="font-bold text-gray-600">Lu</div>
                                    <div class="font-bold text-gray-600">Ma</div>
                                    <div class="font-bold text-gray-600">Mi</div>
                                    <div class="font-bold text-gray-600">Ju</div>
                                    <div class="font-bold text-gray-600">Vi</div>
                                    <div class="font-bold text-gray-600">Sa</div>
                                    <div class="font-bold text-gray-600">Do</div>
                                    
                                    <!-- Ejemplo de calendario simulado -->
                                    <div class="py-2 bg-white border rounded">1</div>
                                    <div class="py-2 bg-white border rounded">2</div>
                                    <div class="py-2 bg-white border rounded">3</div>
                                    <div class="py-2 bg-white border rounded">4</div>
                                    <div class="py-2 bg-white border rounded">5</div>
                                    <div class="py-2 bg-green-50 border rounded cursor-pointer hover:bg-green-100">6</div>
                                    <div class="py-2 bg-green-50 border rounded cursor-pointer hover:bg-green-100">7</div>
                                    <div class="py-2 bg-green-50 border rounded cursor-pointer hover:bg-green-100">8</div>
                                    <div class="py-2 bg-green-50 border rounded cursor-pointer hover:bg-green-100">9</div>
                                    <div class="py-2 bg-white border rounded line-through text-gray-400">10</div>
                                    <div class="py-2 bg-white border rounded line-through text-gray-400">11</div>
                                    <div class="py-2 bg-white border rounded line-through text-gray-400">12</div>
                                    <div class="py-2 bg-green-50 border rounded cursor-pointer hover:bg-green-100">13</div>
                                    <div class="py-2 bg-green-50 border rounded cursor-pointer hover:bg-green-100">14</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal de Reserva -->
    <div id="reserva-modal" class="fixed inset-0 bg-gray-900 bg-opacity-50 z-50 hidden overflow-y-auto">
        <div class="flex items-center justify-center min-h-screen p-4">
            <div class="bg-white rounded-lg shadow-xl max-w-lg w-full">
                <div class="px-6 py-4 bg-blue-700 text-white flex justify-between items-center">
                    <h3 class="text-xl font-bold">Reserva</h3>
                    <button type="button" class="cerrar-modal text-white hover:text-blue-200">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="px-6 py-4">
                    <div class="mb-4">
                        <h4 class="text-lg font-bold text-gray-900" id="reserva-titulo"></h4>
                        <p class="text-gray-600" id="reserva-puerto"></p>
                    </div>
                    
                    <form id="reserva-form" class="space-y-4">
                        <input type="hidden" id="reserva-id" name="barco_id">
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Fechas de reserva</label>
                            <div class="grid grid-cols-2 gap-3">
                                <div>
                                    <label class="block text-xs text-gray-500">Desde</label>
                                    <input type="date" name="fecha_inicio" class="w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" required min="{{ date('Y-m-d') }}">
                                </div>
                                <div>
                                    <label class="block text-xs text-gray-500">Hasta</label>
                                    <input type="date" name="fecha_fin" class="w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" required min="{{ date('Y-m-d') }}">
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Número de personas</label>
                            <input type="number" name="num_personas" min="1" class="w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" required>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Servicios adicionales</label>
                            <div class="space-y-2">
                                <div class="flex items-center">
                                    <input type="checkbox" id="servicio-patron" name="servicios[]" value="patron" class="h-4 w-4 text-blue-600 rounded focus:ring-blue-500">
                                    <label for="servicio-patron" class="ml-2 text-sm text-gray-700">Patrón profesional (+€120/día)</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="servicio-limpieza" name="servicios[]" value="limpieza" class="h-4 w-4 text-blue-600 rounded focus:ring-blue-500">
                                    <label for="servicio-limpieza" class="ml-2 text-sm text-gray-700">Limpieza final (€90)</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="servicio-equipo" name="servicios[]" value="equipo" class="h-4 w-4 text-blue-600 rounded focus:ring-blue-500">
                                    <label for="servicio-equipo" class="ml-2 text-sm text-gray-700">Equipo de snorkel (€15/persona)</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="border-t border-gray-200 pt-4">
                            <div class="flex justify-between mb-2">
                                <span class="text-gray-600">Precio base:</span>
                                <span class="font-medium" id="precio-base">€0</span>
                            </div>
                            <div class="flex justify-between mb-2 text-sm text-gray-500" id="servicios-extra-container" style="display:none;">
                                <span>Servicios adicionales:</span>
                                <span id="precio-servicios">€0</span>
                            </div>
                            <div class="flex justify-between font-bold text-lg">
                                <span>Total:</span>
                                <span class="text-blue-600" id="precio-total">€0</span>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="px-6 py-4 bg-gray-50 flex justify-end space-x-3 rounded-b-lg">
                    <button type="button" class="cerrar-modal px-4 py-2 border border-gray-300 text-gray-700 font-medium rounded-md hover:bg-gray-100 transition duration-300">
                        Cancelar
                    </button>
                    <button type="button" id="confirmar-reserva-btn" class="px-4 py-2 bg-blue-600 text-white font-medium rounded-md hover:bg-blue-700 transition duration-300">
                        Confirmar reserva
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal de Notificación / Alerta -->
    <div id="alerta-modal" class="fixed inset-0 bg-gray-900 bg-opacity-50 z-50 hidden flex items-center justify-center">
        <div class="bg-white rounded-lg shadow-xl max-w-md w-full">
            <div class="p-6">
                <div class="flex items-center justify-center mb-4">
                    <div class="rounded-full bg-yellow-100 p-3">
                        <svg class="h-8 w-8 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                        </svg>
                    </div>
                </div>
                <h3 class="text-xl text-center font-bold text-gray-900 mb-2" id="alerta-titulo">Atención</h3>
                <p class="text-gray-600 text-center" id="alerta-mensaje">Es necesario estar registrado para realizar una reserva.</p>
                <div class="mt-6 flex justify-center space-x-3">
                    <a href="{{ route('login') }}" class="px-4 py-2 bg-blue-600 text-white font-medium rounded-md hover:bg-blue-700 transition duration-300">
                        Iniciar sesión
                    </a>
                    <a href="{{ route('register') }}" class="px-4 py-2 border border-blue-300 text-blue-600 font-medium rounded-md hover:bg-blue-50 transition duration-300">
                        Registrarse
                    </a>
                    <button type="button" class="cerrar-alerta px-4 py-2 border border-gray-300 text-gray-700 font-medium rounded-md hover:bg-gray-100 transition duration-300">
                        Cerrar
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- JavaScript para el funcionamiento de la página de resultados -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Obtener parámetros de la URL para mostrar resultados relevantes
            const urlParams = new URLSearchParams(window.location.search);
            const destination = urlParams.get('destination') || '';
            const date = urlParams.get('date') || '';
            
            // Actualizar elementos en la página
            if (destination) {
                document.getElementById('destination').value = destination;
                document.getElementById('search-destination').textContent = destination;
                actualizarResultadosPorPais(destination);
            }
            
            if (date) {
                document.getElementById('travel-date').value = date;
            }
            
            // Simulación de resultados de búsqueda
            const resultCount = Math.floor(Math.random() * 15) + 5;
            document.getElementById('results-count').textContent = resultCount;
        });
        
        // Función para actualizar los resultados según el país seleccionado
        function actualizarResultadosPorPais(pais) {
            // Definir datos específicos para cada país
            const datosPaises = {
                "España": {
                    descripcion: "Descubre el encanto de las costas españolas, desde las cristalinas aguas de Baleares hasta la elegante Costa del Sol. España ofrece un clima perfecto, marinas de primera clase y destinos emblemáticos para los amantes del mar.",
                    puertos: ["Marina Botafoch (Ibiza)", "Puerto Banús (Marbella)", "Marina Ibiza", "Puerto Calanova (Mallorca)", "Marina Valencia"],
                    imagenes: [
                        "https://images.unsplash.com/photo-1565625415477-7ff096f3c8fd",
                        "https://images.unsplash.com/photo-1589579234096-29e5241b75fa",
                        "https://images.unsplash.com/photo-1606040821944-19288d41230e",
                        "https://images.unsplash.com/photo-1575467678930-c7acd65f2e44"
                    ],
                    titulos: ["Yate de Lujo Oceanis 54", "Catamarán Lagoon 42", "Velero Beneteau 45", "Barco a Motor Cranchi 40"],
                    precios: [899, 749, 599, 650],
                    preciosOriginal: [null, 880, null, null],
                    etiquetas: ["Oferta especial", "15% descuento", "", "Alta demanda"],
                    etiquetasColor: ["bg-blue-600", "bg-green-600", "", "bg-orange-600"]
                },
                "Italia": {
                    descripcion: "Navega por la Riviera italiana, la Costa Amalfitana o las islas de Sicilia y Cerdeña. Italia combina historia milenaria, gastronomía exquisita y costas de ensueño para una experiencia náutica inolvidable.",
                    puertos: ["Marina de Positano", "Porto Cervo (Cerdeña)", "Marina Grande (Capri)", "Porto di Sorrento", "Marina di Portofino"],
                    imagenes: [
                        "https://images.unsplash.com/photo-1544140708-514b7837c325",
                        "https://images.unsplash.com/photo-1593351798409-313bae1fc74b",
                        "https://images.unsplash.com/photo-1583028281249-8951b462a319",
                        "https://images.unsplash.com/photo-1569263900347-06b1e8c825ab"
                    ],
                    titulos: ["Yate Azimut 68", "Catamarán Nautitech 46", "Velero Bavaria 50", "Barco a Motor Riva 56"],
                    precios: [1299, 849, 699, 950],
                    preciosOriginal: [1599, null, 799, null],
                    etiquetas: ["20% descuento", "", "12% descuento", "Premium"],
                    etiquetasColor: ["bg-green-600", "", "bg-green-600", "bg-purple-600"]
                },
                "Grecia": {
                    descripcion: "Explora el paraíso de las islas griegas, con sus aguas turquesas, pueblos blancos y puestas de sol espectaculares. Con más de 6.000 islas e islotes, Grecia es el destino perfecto para los amantes de la navegación.",
                    puertos: ["Marina Alimos (Atenas)", "Puerto de Mykonos", "Marina de Santorini", "Puerto de Corfú", "Marina de Rodas"],
                    imagenes: [
                        "https://images.unsplash.com/photo-1629285483773-6b5cde2171d1",
                        "https://images.unsplash.com/photo-1587137355353-237d7e6a6707",
                        "https://images.unsplash.com/photo-1598281283660-cf70e809bc39",
                        "https://images.unsplash.com/photo-1584724108250-83e7309faa1e"
                    ],
                    titulos: ["Yate Sunseeker 75", "Catamarán Fountaine Pajot 45", "Velero Jeanneau 54", "Barco a Motor Sea Ray 550"],
                    precios: [1499, 899, 749, 1050],
                    preciosOriginal: [null, 1050, 899, null],
                    etiquetas: ["Lujo", "15% descuento", "Solo 1 disponible", "Oferta limitada"],
                    etiquetasColor: ["bg-blue-800", "bg-green-600", "bg-red-600", "bg-yellow-600"]
                },
                "Francia": {
                    descripcion: "Disfruta del glamour y la elegancia de la Costa Azul francesa, desde Saint-Tropez hasta Mónaco. Francia ofrece puertos exclusivos, restaurantes de estrellas Michelin y paisajes costeros impresionantes.",
                    puertos: ["Marina Port Vauban (Antibes)", "Vieux Port (Cannes)", "Port Hercule (Mónaco)", "Port Grimaud", "Marina de Saint-Tropez"],
                    imagenes: [
                        "https://images.unsplash.com/photo-1560251180-1a0b9a9d2f48",
                        "https://images.unsplash.com/photo-1608460112116-a5a685c9cfbf",
                        "https://images.unsplash.com/photo-1604666635528-07751e59e73c",
                        "https://images.unsplash.com/photo-1605281317010-fe5ffe798166"
                    ],
                    titulos: ["Yate Princess 88", "Catamarán Privilege 6", "Velero Dufour 56", "Barco a Motor Sessa 54"],
                    precios: [1799, 1099, 849, 1250],
                    preciosOriginal: [1999, null, null, 1450],
                    etiquetas: ["10% descuento", "Exclusivo", "", "15% descuento"],
                    etiquetasColor: ["bg-green-600", "bg-purple-600", "", "bg-green-600"]
                },
                "Croacia": {
                    descripcion: "Navega por el 'Caribe de Europa' con más de 1.200 islas e islotes a lo largo de la costa croata. Croacia te sorprenderá con sus aguas cristalinas, ciudades medievales y calas escondidas.",
                    puertos: ["ACI Marina Split", "ACI Marina Dubrovnik", "Marina Hvar", "Marina Kornati (Biograd)", "Marina Frapa (Rogoznica)"],
                    imagenes: [
                        "https://images.unsplash.com/photo-1618941716939-553df3c6c278",
                        "https://images.unsplash.com/photo-1540946485063-a40da27545f7",
                        "https://images.unsplash.com/photo-1544551763-46a013bb70d5",
                        "https://images.unsplash.com/photo-1561531597-cf2cba1c7adf"
                    ],
                    titulos: ["Yate Ferretti 68", "Catamarán Bali 4.3", "Velero Hanse 508", "Barco a Motor Prestige 520"],
                    precios: [1199, 799, 649, 950],
                    preciosOriginal: [null, 899, 749, null],
                    etiquetas: ["Recomendado", "11% descuento", "13% descuento", "Best Seller"],
                    etiquetasColor: ["bg-blue-600", "bg-green-600", "bg-green-600", "bg-yellow-600"]
                },
                "México": {
                    descripcion: "Disfruta del Caribe mexicano o el Mar de Cortés, con increíbles oportunidades para el avistamiento de ballenas, snorkel en arrecifes de coral y acceso a playas exclusivas de arena blanca.",
                    puertos: ["Marina Cabo San Lucas", "Marina Vallarta", "Marina Riviera Nayarit", "Puerto Aventuras", "Marina Cozumel"],
                    imagenes: [
                        "https://images.unsplash.com/photo-1518549945153-64368b032957",
                        "https://images.unsplash.com/photo-1617154090957-697abf32ba84",
                        "https://images.unsplash.com/photo-1602002418082-dd4a1f45c3a1",
                        "https://images.unsplash.com/photo-1620060189922-7d2908982cc2"
                    ],
                    titulos: ["Yate Galeon 640", "Catamarán Leopard 58", "Velero Beneteau Oceanis 62", "Barco a Motor Sea Ray 60"],
                    precios: [1299, 899, 749, 1099],
                    preciosOriginal: [1499, 999, null, null],
                    etiquetas: ["15% descuento", "10% descuento", "", "Todo incluido"],
                    etiquetasColor: ["bg-green-600", "bg-green-600", "", "bg-purple-600"]
                },
                "Portugal": {
                    descripcion: "Descubre la costa atlántica portuguesa, desde Lisboa hasta el Algarve, con sus impresionantes acantilados, playas doradas y puertos históricos. Portugal ofrece una perfecta combinación de tradición y modernidad.",
                    puertos: ["Marina de Cascais", "Marina de Lagos", "Marina de Vilamoura", "Marina de Portimão", "Doca de Belém (Lisboa)"],
                    imagenes: [
                        "https://images.unsplash.com/photo-1555881400-74d7acaacd8b",
                        "https://images.unsplash.com/photo-1580323956609-27536c519cf7",
                        "https://images.unsplash.com/photo-1578912191074-e2406a220066",
                        "https://images.unsplash.com/photo-1577958194277-1c9f5428602b"
                    ],
                    titulos: ["Yate Sunseeker Manhattan 60", "Catamarán Lagoon 46", "Velero Bavaria 47", "Barco a Motor Mochi Craft 52"],
                    precios: [1199, 799, 649, 950],
                    preciosOriginal: [1399, null, 749, 1100],
                    etiquetas: ["15% descuento", "", "13% descuento", "Oferta especial"],
                    etiquetasColor: ["bg-green-600", "", "bg-green-600", "bg-blue-600"]
                },
                "Turquía": {
                    descripcion: "Recorre la espectacular Costa Turquesa de Turquía, con sus bahías protegidas, aguas cristalinas y una rica historia que combina culturas milenarias con hermosos paisajes naturales.",
                    puertos: ["Marina Bodrum", "Göcek Marina", "Marmaris Yacht Marina", "Fethiye Marina", "Antalya Marina"],
                    imagenes: [
                        "https://images.unsplash.com/photo-1583505093722-be82be7be05b",
                        "https://images.unsplash.com/photo-1584132869994-873f9363a562",
                        "https://images.unsplash.com/photo-1524231757912-21c4c58a0c55",
                        "https://images.unsplash.com/photo-1605283676373-53f3aeb942b5"
                    ],
                    titulos: ["Yate Numarine 70", "Catamarán Fountaine Pajot 50", "Velero Beneteau Oceanis 51", "Barco a Motor Fairline 60"],
                    precios: [1399, 899, 699, 1150],
                    preciosOriginal: [1599, 1050, null, 1300],
                    etiquetas: ["12% descuento", "15% descuento", "Tradicional", "Exclusivo"],
                    etiquetasColor: ["bg-green-600", "bg-green-600", "bg-blue-600", "bg-purple-600"]
                },
                "Estados Unidos": {
                    descripcion: "Explora la diversidad costera de los Estados Unidos, desde la vibrante Miami y los Cayos de Florida hasta la elegancia de Newport y la belleza natural de la costa californiana.",
                    puertos: ["Miami Beach Marina", "Marina del Rey (Los Ángeles)", "Newport Marina", "Montauk Yacht Club", "Marina San Francisco"],
                    imagenes: [
                        "https://images.unsplash.com/photo-1559003656-16f192953aa1",
                        "https://images.unsplash.com/photo-1554254648-2d58a1bc3fd5",
                        "https://images.unsplash.com/photo-1594524952992-0cddcede63cc",
                        "https://images.unsplash.com/photo-1515404929826-76fff9fef6fe"
                    ],
                    titulos: ["Yate Sea Ray 680", "Catamarán Leopard 53", "Velero Hunter 50", "Barco a Motor Boston Whaler 42"],
                    precios: [1799, 1099, 899, 1350],
                    preciosOriginal: [1999, 1299, null, null],
                    etiquetas: ["10% descuento", "15% descuento", "Premium", "Nuevo"],
                    etiquetasColor: ["bg-green-600", "bg-green-600", "bg-purple-600", "bg-blue-600"]
                },
                "Australia": {
                    descripcion: "Navega por las espectaculares costas de Australia, desde la icónica Bahía de Sídney, la Gran Barrera de Coral hasta las pristinas Islas Whitsunday con sus playas de arena blanca y aguas turquesas.",
                    puertos: ["Sídney Harbour", "Marina Hamilton Island", "Airlie Beach Marina", "Cairns Marlin Marina", "Marina Gold Coast"],
                    imagenes: [
                        "https://images.unsplash.com/photo-1551407542-969d0c9a5a25",
                        "https://images.unsplash.com/photo-1525530064275-b5f61cfe1956",
                        "https://images.unsplash.com/photo-1565031491910-e57fac031c41",
                        "https://images.unsplash.com/photo-1523376774653-96d8fb58eb5d"
                    ],
                    titulos: ["Yate Maritimo 70", "Catamarán Seawind 52", "Velero Jeanneau 54", "Barco a Motor Riviera 60"],
                    precios: [1699, 1049, 849, 1250],
                    preciosOriginal: [null, 1249, 999, 1450],
                    etiquetas: ["Exclusivo", "16% descuento", "15% descuento", "13% descuento"],
                    etiquetasColor: ["bg-purple-600", "bg-green-600", "bg-green-600", "bg-green-600"]
                },
                "Tailandia": {
                    descripcion: "Descubre el exotismo de Tailandia, navegando entre las islas de Phuket, Phi Phi y la Bahía de Phang Nga, con sus formaciones de piedra caliza, playas escondidas y una cultura fascinante.",
                    puertos: ["Yacht Haven Marina (Phuket)", "Ao Po Grand Marina", "Royal Phuket Marina", "Phi Phi Island Marina", "Krabi Boat Lagoon"],
                    imagenes: [
                        "https://images.unsplash.com/photo-1552465011-b4e21bf6e79a",
                        "https://images.unsplash.com/photo-1518509562904-e7ef99cdcc86",
                        "https://images.unsplash.com/photo-1596460338956-e82135dc0327",
                        "https://images.unsplash.com/photo-1537954032236-40d712b263ad"
                    ],
                    titulos: ["Yate Azimut 62", "Catamarán Lagoon 50", "Velero Hanse 548", "Barco a Motor Princess 58"],
                    precios: [1399, 899, 749, 1099],
                    preciosOriginal: [1599, 1050, 899, null],
                    etiquetas: ["12% descuento", "15% descuento", "17% descuento", "Experiencia única"],
                    etiquetasColor: ["bg-green-600", "bg-green-600", "bg-green-600", "bg-blue-600"]
                },
                "Brasil": {
                    descripcion: "Navega por la exuberante costa brasileña, desde Río de Janeiro hasta Angra dos Reis y Búzios, con sus bahías tropicales, islas paradisíacas y el fascinante ambiente de la cultura brasileña.",
                    puertos: ["Marina da Glória (Río)", "Marina Bracuhy (Angra)", "Marina Porto Búzios", "Marina Costabella (Florianópolis)", "Yacht Club Ilhabela"],
                    imagenes: [
                        "https://images.unsplash.com/photo-1516306580123-e6e52b1b7b5f",
                        "https://images.unsplash.com/photo-1548964095-b9a292144866",
                        "https://images.unsplash.com/photo-1509124808941-391e3e100067",
                        "https://images.unsplash.com/photo-1664478546384-d57efe9ffb91"
                    ],
                    titulos: ["Yate Intermarine 62", "Catamarán Schaefer 50", "Velero Beneteau Sense 55", "Barco a Motor Ferretti 670"],
                    precios: [1299, 849, 699, 1199],
                    preciosOriginal: [1599, 999, null, 1399],
                    etiquetas: ["20% descuento", "15% descuento", "Especial", "14% descuento"],
                    etiquetasColor: ["bg-green-600", "bg-green-600", "bg-blue-600", "bg-green-600"]
                },
                "Maldivas": {
                    descripcion: "Sumérgete en el paraíso tropical de las Maldivas, con sus atolones de coral, aguas de color turquesa intenso y una vida marina espectacular que convierte cada navegación en una experiencia incomparable.",
                    puertos: ["Malé Yacht Marina", "Maafushi Harbour", "Hulhumalé Marina", "Meerufenfushi Yacht Club", "Velassaru Marina"],
                    imagenes: [
                        "https://images.unsplash.com/photo-1573843981267-be1999ff37cd",
                        "https://images.unsplash.com/photo-1514282401047-d79a71a590e8",
                        "https://images.unsplash.com/photo-1586500412081-dceaafc95d70",
                        "https://images.unsplash.com/photo-1540979388789-6cee28a1cdc9"
                    ],
                    titulos: ["Yate Majesty 88", "Catamarán Sunreef 60", "Dhoni Tradicional de Lujo", "Barco a Motor Prestige 75"],
                    precios: [2499, 1899, 1299, 2099],
                    preciosOriginal: [2999, null, 1599, 2499],
                    etiquetas: ["17% descuento", "Ultra Lujo", "19% descuento", "16% descuento"],
                    etiquetasColor: ["bg-green-600", "bg-purple-600", "bg-green-600", "bg-green-600"]
                },
                "Indonesia": {
                    descripcion: "Navega por el archipiélago indonesio, explorando Bali, las Islas Gili y Komodo, con sus playas volcánicas, arrecifes de coral increíbles y la posibilidad de avistar a los famosos dragones de Komodo.",
                    puertos: ["Benoa Harbour (Bali)", "Marina del Rey Lombok", "Labuan Bajo Marina", "Gili Islands Yacht Club", "Serangan Harbour"],
                    imagenes: [
                        "https://images.unsplash.com/photo-1518548419970-58e3b4079ab2",
                        "https://images.unsplash.com/photo-1536489885071-87983c3e2859",
                        "https://images.unsplash.com/photo-1577401239170-897942555fb3",
                        "https://images.unsplash.com/photo-1515404929826-76fff9fef6fe"
                    ],
                    titulos: ["Yate de Lujo Phinisi", "Catamarán Manta 65", "Velero Tradicional Bugis", "Barco a Motor Horizon 65"],
                    precios: [1699, 1099, 899, 1299],
                    preciosOriginal: [1999, 1299, null, 1499],
                    etiquetas: ["15% descuento", "15% descuento", "Tradicional", "13% descuento"],
                    etiquetasColor: ["bg-green-600", "bg-green-600", "bg-blue-600", "bg-green-600"]
                },
                "Canadá": {
                    descripcion: "Explora las costas canadienses, desde la belleza salvaje de la Columbia Británica hasta los pintorescos pueblos costeros de las provincias atlánticas, con fiordos espectaculares, ballenas y paisajes de bosques que llegan hasta el mar.",
                    puertos: ["Coal Harbour Marina (Vancouver)", "Victoria Inner Harbour", "Halifax Waterfront", "St. John's Harbour", "Quebec Yacht Club"],
                    imagenes: [
                        "https://images.unsplash.com/photo-1519181245277-cffeb31da2e3",
                        "https://images.unsplash.com/photo-1585003387496-9287bfbefae4",
                        "https://images.unsplash.com/photo-1596484552834-6a58f850e0a1",
                        "https://images.unsplash.com/photo-1590584288933-6ab5ca05e8a7"
                    ],
                    titulos: ["Yate Carver 57", "Catamarán Lagoon 52", "Velero Jeanneau 53", "Barco a Motor Cruisers 50"],
                    precios: [1299, 899, 749, 999],
                    preciosOriginal: [1499, 999, 899, null],
                    etiquetas: ["13% descuento", "10% descuento", "17% descuento", "Naturaleza"],
                    etiquetasColor: ["bg-green-600", "bg-green-600", "bg-green-600", "bg-blue-600"]
                }
            };
            
            // Seleccionar datos para el país, o usar España como predeterminado si no está en la lista
            const datosPais = datosPaises[pais] || datosPaises["España"];
            
            // Actualizar título y descripción del país
            document.getElementById('pais-titulo').textContent = `Experiencias Náuticas en ${pais}`;
            document.getElementById('pais-descripcion').textContent = datosPais.descripcion;
            
            // Obtener todas las tarjetas de resultados
            const resultados = document.querySelectorAll('#search-results > div');
            
            // Actualizar cada tarjeta con información específica del país
            resultados.forEach((resultado, index) => {
                if (index < 4) { // Solo actualizar las 4 tarjetas que tenemos
                    // Actualizar imagen
                    const imagen = resultado.querySelector('img');
                    if (imagen) {
                        imagen.src = datosPais.imagenes[index];
                        imagen.alt = datosPais.titulos[index];
                    }
                    
                    // Actualizar etiqueta (si existe)
                    const etiqueta = resultado.querySelector('.absolute.top-2.left-2');
                    if (etiqueta && datosPais.etiquetas[index]) {
                        etiqueta.textContent = datosPais.etiquetas[index];
                        etiqueta.className = `absolute top-2 left-2 ${datosPais.etiquetasColor[index]} text-white text-xs font-bold px-2 py-1 rounded`;
                    } else if (etiqueta) {
                        etiqueta.style.display = 'none';
                    }
                    
                    // Actualizar título
                    const titulo = resultado.querySelector('h3');
                    if (titulo) {
                        titulo.textContent = datosPais.titulos[index];
                    }
                    
                    // Actualizar precio
                    const precio = resultado.querySelector('.text-2xl.font-bold');
                    if (precio) {
                        precio.textContent = `€${datosPais.precios[index]}`;
                    }
                    
                    // Actualizar precio original (tachado) si existe
                    const precioOriginal = resultado.querySelector('.text-sm.text-gray-400.line-through');
                    const precioDiv = resultado.querySelector('.flex.items-center.justify-end');
                    
                    if (precioDiv) {
                        // Si hay un precio original, mostrar ambos
                        if (datosPais.preciosOriginal[index]) {
                            if (precioOriginal) {
                                precioOriginal.textContent = `€${datosPais.preciosOriginal[index]}`;
                            } else {
                                // Crear elemento de precio original si no existe
                                const nuevoOriginal = document.createElement('div');
                                nuevoOriginal.className = 'text-sm text-gray-400 line-through mr-2';
                                nuevoOriginal.textContent = `€${datosPais.preciosOriginal[index]}`;
                                precioDiv.prepend(nuevoOriginal);
                            }
                        } else if (precioOriginal) {
                            // Ocultar precio original si no hay descuento
                            precioOriginal.style.display = 'none';
                        }
                    }
                    
                    // Actualizar puerto
                    const puerto = resultado.querySelector('.flex-wrap.gap-2.mb-3 span:last-child');
                    if (puerto) {
                        const puertoTexto = puerto.querySelector('svg').outerHTML + ' Puerto: ' + datosPais.puertos[index % datosPais.puertos.length];
                        puerto.innerHTML = puertoTexto;
                    }
                }
            });
        }
    </script>
</x-app-layout> 