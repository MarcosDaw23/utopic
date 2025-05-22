<x-app-layout>
    <!-- Header Section with animation -->
    <div class="relative py-16 bg-gradient-to-r from-blue-600 to-blue-800 animate-gradient-x">
        <div class="absolute inset-0 z-0 opacity-20 overflow-hidden">
            <img src="https://images.unsplash.com/photo-1560813962-ff3d8fcf59ba" alt="Fondo marino" class="w-full h-full object-cover transform hover:scale-110 transition duration-700">
            <div class="absolute inset-0 bg-blue-900 opacity-20"></div>
        </div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl animate-fade-in-down">
                Nuestros Servicios Marítimos
            </h1>
            <p class="mt-6 text-xl text-blue-100 max-w-3xl mx-auto animate-fade-in-up">
                Descubre toda nuestra gama de experiencias náuticas exclusivas para unas vacaciones perfectas
            </p>
        </div>
    </div>

    <!-- Filtros with interactive highlight -->
    <div class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="py-6">
                <form>
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                        <div class="transform transition duration-300 hover:scale-105">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Tipo de experiencia</label>
                            <select class="w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500 transition-colors duration-300 hover:border-blue-400">
                                <option>Todos los servicios</option>
                                <option>Alquiler de barcos</option>
                                <option>Pesca deportiva</option>
                                <option>Cruceros privados</option>
                                <option>Buceo y snorkel</option>
                            </select>
                        </div>
                        <div class="transform transition duration-300 hover:scale-105">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Destino</label>
                            <select class="w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500 transition-colors duration-300 hover:border-blue-400">
                                <option>Todos los destinos</option>
                                <option>Mediterráneo</option>
                                <option>Caribe</option>
                                <option>Sudeste Asiático</option>
                                <option>Océano Índico</option>
                            </select>
                        </div>
                        <div class="transform transition duration-300 hover:scale-105">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Duración</label>
                            <select class="w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500 transition-colors duration-300 hover:border-blue-400">
                                <option>Cualquier duración</option>
                                <option>1-3 días</option>
                                <option>4-7 días</option>
                                <option>1-2 semanas</option>
                                <option>Más de 2 semanas</option>
                            </select>
                        </div>
                        <div class="flex items-end">
                            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md transition duration-300 transform hover:scale-105 hover:shadow-lg active:scale-95">
                                Filtrar resultados
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Listado de Servicios with animations -->
    <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="pb-12">
                <h2 class="text-3xl font-bold text-gray-900 relative inline-block animate-fade-in-down">
                    Alquiler de Barcos
                    <span class="absolute bottom-0 left-0 w-full h-1 bg-blue-600 transform origin-left transition-transform duration-300 group-hover:scale-x-100"></span>
                </h2>
                <div class="h-1 w-20 bg-blue-600 mt-2 mb-8 animate-width-expand"></div>
                
                <div class="grid gap-8 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                    <!-- Servicio 1 -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden transform transition duration-500 hover:shadow-xl hover:scale-105 animate-fade-in-up">
                        <div class="relative h-60 overflow-hidden group">
                            <img src="https://images.unsplash.com/photo-1565625415477-7ff096f3c8fd" alt="Yate de lujo" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 group-hover:rotate-1">
                            <div class="absolute inset-0 bg-gradient-to-t from-blue-900 to-transparent opacity-0 group-hover:opacity-30 transition-opacity duration-300"></div>
                            <div class="absolute top-4 right-4 bg-blue-600 text-white font-bold px-3 py-1 rounded-full text-sm transform transition duration-300 hover:scale-110 hover:bg-blue-700">Premium</div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2 transform transition duration-300 hover:text-blue-600">Yate de Lujo Oceanis 54</h3>
                            <div class="flex items-center mb-4">
                                <span class="text-yellow-500 mr-1">★★★★★</span>
                                <span class="text-sm text-gray-600">(24 valoraciones)</span>
                            </div>
                            <p class="text-gray-600 mb-4">Disfruta de un yate de lujo con capacidad para 10 personas, perfecto para navegar por las aguas cristalinas del Mediterráneo.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-blue-600 font-bold text-xl">Desde $899/día</span>
                                <a href="#" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition duration-300 transform hover:scale-105 hover:shadow-md active:scale-95">Reservar</a>
                            </div>
                            <div class="mt-4 pt-4 border-t border-gray-100">
                                <button class="text-blue-500 hover:text-blue-700 text-sm font-medium flex items-center w-full justify-center transition duration-300 focus:outline-none" onclick="toggleDetails(this)">
                                    Ver detalles
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div class="hidden mt-3 text-sm text-gray-500">
                                    <ul class="list-disc pl-5 space-y-1">
                                        <li>5 camarotes con baño privado</li>
                                        <li>Cocina completamente equipada</li>
                                        <li>Plataforma de baño</li>
                                        <li>Equipo de snorkel incluido</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Servicio 2 -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden transform transition duration-500 hover:shadow-xl hover:scale-105 animate-fade-in-up" style="animation-delay: 100ms;">
                        <div class="relative h-60 overflow-hidden group">
                            <img src="https://images.unsplash.com/photo-1589579234096-29e5241b75fa" alt="Catamarán" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 group-hover:rotate-1">
                            <div class="absolute inset-0 bg-gradient-to-t from-blue-900 to-transparent opacity-0 group-hover:opacity-30 transition-opacity duration-300"></div>
                            <div class="absolute top-4 right-4 bg-green-600 text-white font-bold px-3 py-1 rounded-full text-sm transform transition duration-300 hover:scale-110 hover:bg-green-700">Oferta</div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2 transform transition duration-300 hover:text-blue-600">Catamarán Lagoon 42</h3>
                            <div class="flex items-center mb-4">
                                <span class="text-yellow-500 mr-1">★★★★☆</span>
                                <span class="text-sm text-gray-600">(18 valoraciones)</span>
                            </div>
                            <p class="text-gray-600 mb-4">Espacioso catamarán ideal para familias, con 4 camarotes dobles y amplio espacio en cubierta para relajarse y disfrutar.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-blue-600 font-bold text-xl">Desde $749/día</span>
                                <a href="#" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition duration-300 transform hover:scale-105 hover:shadow-md active:scale-95">Reservar</a>
                            </div>
                            <div class="mt-4 pt-4 border-t border-gray-100">
                                <button class="text-blue-500 hover:text-blue-700 text-sm font-medium flex items-center w-full justify-center transition duration-300 focus:outline-none" onclick="toggleDetails(this)">
                                    Ver detalles
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div class="hidden mt-3 text-sm text-gray-500">
                                    <ul class="list-disc pl-5 space-y-1">
                                        <li>4 camarotes dobles</li>
                                        <li>Dos salones, interior y exterior</li>
                                        <li>Generador y aire acondicionado</li>
                                        <li>Paddle surf incluido</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Servicio 3 -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden transform transition duration-500 hover:shadow-xl hover:scale-105 animate-fade-in-up" style="animation-delay: 200ms;">
                        <div class="relative h-60 overflow-hidden group">
                            <img src="https://images.unsplash.com/photo-1606040821944-19288d41230e" alt="Velero" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 group-hover:rotate-1">
                            <div class="absolute inset-0 bg-gradient-to-t from-blue-900 to-transparent opacity-0 group-hover:opacity-30 transition-opacity duration-300"></div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2 transform transition duration-300 hover:text-blue-600">Velero Beneteau 45</h3>
                            <div class="flex items-center mb-4">
                                <span class="text-yellow-500 mr-1">★★★★☆</span>
                                <span class="text-sm text-gray-600">(15 valoraciones)</span>
                            </div>
                            <p class="text-gray-600 mb-4">Velero deportivo y elegante con 3 camarotes, perfecto para navegar con amigos y familia por cualquier costa.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-blue-600 font-bold text-xl">Desde $599/día</span>
                                <a href="#" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition duration-300 transform hover:scale-105 hover:shadow-md active:scale-95">Reservar</a>
                            </div>
                            <div class="mt-4 pt-4 border-t border-gray-100">
                                <button class="text-blue-500 hover:text-blue-700 text-sm font-medium flex items-center w-full justify-center transition duration-300 focus:outline-none" onclick="toggleDetails(this)">
                                    Ver detalles
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div class="hidden mt-3 text-sm text-gray-500">
                                    <ul class="list-disc pl-5 space-y-1">
                                        <li>3 camarotes espaciosos</li>
                                        <li>Velas en perfecto estado</li>
                                        <li>GPS y equipo de navegación moderno</li>
                                        <li>Ducha exterior</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Servicio 4 (Nuevo) -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden transform transition duration-500 hover:shadow-xl hover:scale-105 animate-fade-in-up" style="animation-delay: 300ms;">
                        <div class="relative h-60 overflow-hidden group">
                            <img src="https://images.unsplash.com/photo-1575467678930-c7acd65f2e44" alt="Barco a motor" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 group-hover:rotate-1">
                            <div class="absolute inset-0 bg-gradient-to-t from-blue-900 to-transparent opacity-0 group-hover:opacity-30 transition-opacity duration-300"></div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2 transform transition duration-300 hover:text-blue-600">Barco a Motor Cranchi 40</h3>
                            <div class="flex items-center mb-4">
                                <span class="text-yellow-500 mr-1">★★★★★</span>
                                <span class="text-sm text-gray-600">(22 valoraciones)</span>
                            </div>
                            <p class="text-gray-600 mb-4">Potente embarcación a motor para jornadas de velocidad por la costa, ideal para excursiones de día o deportes acuáticos.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-blue-600 font-bold text-xl">Desde $650/día</span>
                                <a href="#" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition duration-300 transform hover:scale-105 hover:shadow-md active:scale-95">Reservar</a>
                            </div>
                            <div class="mt-4 pt-4 border-t border-gray-100">
                                <button class="text-blue-500 hover:text-blue-700 text-sm font-medium flex items-center w-full justify-center transition duration-300 focus:outline-none" onclick="toggleDetails(this)">
                                    Ver detalles
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div class="hidden mt-3 text-sm text-gray-500">
                                    <ul class="list-disc pl-5 space-y-1">
                                        <li>Capacidad para 8 personas</li>
                                        <li>Motor de 400 HP</li>
                                        <li>Plataforma de baño y solarium</li>
                                        <li>Nevera y cocina básica</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Servicio 5 (Nuevo) -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden transform transition duration-500 hover:shadow-xl hover:scale-105 animate-fade-in-up" style="animation-delay: 400ms;">
                        <div class="relative h-60 overflow-hidden group">
                            <img src="https://images.unsplash.com/photo-1570049462332-9a0048b64f3b" alt="Yate de lujo grande" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 group-hover:rotate-1">
                            <div class="absolute inset-0 bg-gradient-to-t from-blue-900 to-transparent opacity-0 group-hover:opacity-30 transition-opacity duration-300"></div>
                            <div class="absolute top-4 right-4 bg-purple-600 text-white font-bold px-3 py-1 rounded-full text-sm transform transition duration-300 hover:scale-110 hover:bg-purple-700">Exclusivo</div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2 transform transition duration-300 hover:text-blue-600">Super Yate Azimut 80</h3>
                            <div class="flex items-center mb-4">
                                <span class="text-yellow-500 mr-1">★★★★★</span>
                                <span class="text-sm text-gray-600">(9 valoraciones)</span>
                            </div>
                            <p class="text-gray-600 mb-4">El máximo lujo en el mar con camarotes de ensueño, tripulación completa y todas las comodidades para una experiencia VIP.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-blue-600 font-bold text-xl">Desde $3,500/día</span>
                                <a href="#" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition duration-300 transform hover:scale-105 hover:shadow-md active:scale-95">Reservar</a>
                            </div>
                            <div class="mt-4 pt-4 border-t border-gray-100">
                                <button class="text-blue-500 hover:text-blue-700 text-sm font-medium flex items-center w-full justify-center transition duration-300 focus:outline-none" onclick="toggleDetails(this)">
                                    Ver detalles
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div class="hidden mt-3 text-sm text-gray-500">
                                    <ul class="list-disc pl-5 space-y-1">
                                        <li>4 camarotes de lujo con baño privado</li>
                                        <li>Tripulación de 3 personas incluida</li>
                                        <li>Jacuzzi en cubierta</li>
                                        <li>Equipos para buceo y deportes acuáticos</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Servicio 6 (Nuevo) -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden transform transition duration-500 hover:shadow-xl hover:scale-105 animate-fade-in-up" style="animation-delay: 500ms;">
                        <div class="relative h-60 overflow-hidden group">
                            <img src="https://images.unsplash.com/photo-1548080819-84d55276c1c6" alt="Velero clásico" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 group-hover:rotate-1">
                            <div class="absolute inset-0 bg-gradient-to-t from-blue-900 to-transparent opacity-0 group-hover:opacity-30 transition-opacity duration-300"></div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2 transform transition duration-300 hover:text-blue-600">Velero Clásico Bavaria 38</h3>
                            <div class="flex items-center mb-4">
                                <span class="text-yellow-500 mr-1">★★★★☆</span>
                                <span class="text-sm text-gray-600">(17 valoraciones)</span>
                            </div>
                            <p class="text-gray-600 mb-4">Elegante velero tradicional de línea clásica, ideal para amantes de la navegación auténtica. Capacidad para 6 personas.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-blue-600 font-bold text-xl">Desde $450/día</span>
                                <a href="#" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition duration-300 transform hover:scale-105 hover:shadow-md active:scale-95">Reservar</a>
                            </div>
                            <div class="mt-4 pt-4 border-t border-gray-100">
                                <button class="text-blue-500 hover:text-blue-700 text-sm font-medium flex items-center w-full justify-center transition duration-300 focus:outline-none" onclick="toggleDetails(this)">
                                    Ver detalles
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div class="hidden mt-3 text-sm text-gray-500">
                                    <ul class="list-disc pl-5 space-y-1">
                                        <li>2 camarotes amplios</li>
                                        <li>Equipamiento tradicional de navegación</li>
                                        <li>Sistema de audio con Bluetooth</li>
                                        <li>Posibilidad de alquilar con patrón</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="py-12 border-t border-gray-200">
                <h2 class="text-3xl font-bold text-gray-900 relative inline-block animate-fade-in-down">
                    Excursiones de Pesca
                    <span class="absolute bottom-0 left-0 w-full h-1 bg-blue-600 transform origin-left transition-transform duration-300 group-hover:scale-x-100"></span>
                </h2>
                <div class="h-1 w-20 bg-blue-600 mt-2 mb-8 animate-width-expand"></div>
                
                <div class="grid gap-8 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                    <!-- Servicio 1 -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden transform transition duration-500 hover:shadow-xl hover:scale-105 animate-fade-in-up">
                        <div class="relative h-60 overflow-hidden group">
                            <img src="https://images.unsplash.com/photo-1512629746569-cf35f9b9f8cf" alt="Pesca de altura" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 group-hover:rotate-1">
                            <div class="absolute inset-0 bg-gradient-to-t from-blue-900 to-transparent opacity-0 group-hover:opacity-30 transition-opacity duration-300"></div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2 transform transition duration-300 hover:text-blue-600">Pesca de Altura en Costa del Sol</h3>
                            <div class="flex items-center mb-4">
                                <span class="text-yellow-500 mr-1">★★★★★</span>
                                <span class="text-sm text-gray-600">(31 valoraciones)</span>
                            </div>
                            <p class="text-gray-600 mb-4">Jornada completa de pesca deportiva en busca de atunes, peces espada y dorados con guías expertos y todo el equipo necesario.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-blue-600 font-bold text-xl">Desde $399/persona</span>
                                <a href="#" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition duration-300 transform hover:scale-105 hover:shadow-md active:scale-95">Reservar</a>
                            </div>
                            <div class="mt-4 pt-4 border-t border-gray-100">
                                <button class="text-blue-500 hover:text-blue-700 text-sm font-medium flex items-center w-full justify-center transition duration-300 focus:outline-none" onclick="toggleDetails(this)">
                                    Ver detalles
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div class="hidden mt-3 text-sm text-gray-500">
                                    <ul class="list-disc pl-5 space-y-1">
                                        <li>8 horas de actividad</li>
                                        <li>Comida y bebida incluidas</li>
                                        <li>Equipo profesional completo</li>
                                        <li>Posibilidad de cocinar tu pesca</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Servicio 2 -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden transform transition duration-500 hover:shadow-xl hover:scale-105 animate-fade-in-up" style="animation-delay: 100ms;">
                        <div class="relative h-60 overflow-hidden group">
                            <img src="https://images.unsplash.com/photo-1544551763-46a013bb70d5" alt="Pesca en los Cayos" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 group-hover:rotate-1">
                            <div class="absolute inset-0 bg-gradient-to-t from-blue-900 to-transparent opacity-0 group-hover:opacity-30 transition-opacity duration-300"></div>
                            <div class="absolute top-4 right-4 bg-green-600 text-white font-bold px-3 py-1 rounded-full text-sm transform transition duration-300 hover:scale-110 hover:bg-green-700">Oferta</div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2 transform transition duration-300 hover:text-blue-600">Pesca en los Cayos de Florida</h3>
                            <div class="flex items-center mb-4">
                                <span class="text-yellow-500 mr-1">★★★★★</span>
                                <span class="text-sm text-gray-600">(27 valoraciones)</span>
                            </div>
                            <p class="text-gray-600 mb-4">Excursión de medio día por los famosos cayos de Florida, con posibilidad de capturar múltiples especies, ideal para principiantes.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-blue-600 font-bold text-xl">Desde $249/persona</span>
                                <a href="#" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition duration-300 transform hover:scale-105 hover:shadow-md active:scale-95">Reservar</a>
                            </div>
                            <div class="mt-4 pt-4 border-t border-gray-100">
                                <button class="text-blue-500 hover:text-blue-700 text-sm font-medium flex items-center w-full justify-center transition duration-300 focus:outline-none" onclick="toggleDetails(this)">
                                    Ver detalles
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div class="hidden mt-3 text-sm text-gray-500">
                                    <ul class="list-disc pl-5 space-y-1">
                                        <li>4 horas de actividad</li>
                                        <li>Refrigerios incluidos</li>
                                        <li>Guía especializado en inglés y español</li>
                                        <li>Apto para todas las edades</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Servicio 3 -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden transform transition duration-500 hover:shadow-xl hover:scale-105 animate-fade-in-up" style="animation-delay: 200ms;">
                        <div class="relative h-60 overflow-hidden group">
                            <img src="https://images.unsplash.com/photo-1518049807-46d54430e9fd" alt="Pesca en arrecifes" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 group-hover:rotate-1">
                            <div class="absolute inset-0 bg-gradient-to-t from-blue-900 to-transparent opacity-0 group-hover:opacity-30 transition-opacity duration-300"></div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2 transform transition duration-300 hover:text-blue-600">Pesca en Arrecifes de Coral</h3>
                            <div class="flex items-center mb-4">
                                <span class="text-yellow-500 mr-1">★★★★☆</span>
                                <span class="text-sm text-gray-600">(19 valoraciones)</span>
                            </div>
                            <p class="text-gray-600 mb-4">Aventura de pesca sostenible en los arrecifes de coral del Caribe, con guías expertos y comida a bordo incluida.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-blue-600 font-bold text-xl">Desde $329/persona</span>
                                <a href="#" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition duration-300 transform hover:scale-105 hover:shadow-md active:scale-95">Reservar</a>
                            </div>
                            <div class="mt-4 pt-4 border-t border-gray-100">
                                <button class="text-blue-500 hover:text-blue-700 text-sm font-medium flex items-center w-full justify-center transition duration-300 focus:outline-none" onclick="toggleDetails(this)">
                                    Ver detalles
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div class="hidden mt-3 text-sm text-gray-500">
                                    <ul class="list-disc pl-5 space-y-1">
                                        <li>6 horas de actividad</li>
                                        <li>Comida local tradicional incluida</li>
                                        <li>Pesca sostenible y responsable</li>
                                        <li>Zonas exclusivas de arrecifes</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Servicio 4 (Nuevo) -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden transform transition duration-500 hover:shadow-xl hover:scale-105 animate-fade-in-up" style="animation-delay: 300ms;">
                        <div class="relative h-60 overflow-hidden group">
                            <img src="https://images.unsplash.com/photo-1542627469-f88cef6e225f" alt="Pesca fluvial" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 group-hover:rotate-1">
                            <div class="absolute inset-0 bg-gradient-to-t from-blue-900 to-transparent opacity-0 group-hover:opacity-30 transition-opacity duration-300"></div>
                            <div class="absolute top-4 right-4 bg-orange-600 text-white font-bold px-3 py-1 rounded-full text-sm transform transition duration-300 hover:scale-110 hover:bg-orange-700">Novedad</div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2 transform transition duration-300 hover:text-blue-600">Pesca Fluvial en el Ebro</h3>
                            <div class="flex items-center mb-4">
                                <span class="text-yellow-500 mr-1">★★★★★</span>
                                <span class="text-sm text-gray-600">(12 valoraciones)</span>
                            </div>
                            <p class="text-gray-600 mb-4">Aventura de pesca en agua dulce en el famoso río Ebro, conocido por sus grandes siluros y carpas. Ideal para aficionados.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-blue-600 font-bold text-xl">Desde $189/persona</span>
                                <a href="#" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition duration-300 transform hover:scale-105 hover:shadow-md active:scale-95">Reservar</a>
                            </div>
                            <div class="mt-4 pt-4 border-t border-gray-100">
                                <button class="text-blue-500 hover:text-blue-700 text-sm font-medium flex items-center w-full justify-center transition duration-300 focus:outline-none" onclick="toggleDetails(this)">
                                    Ver detalles
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div class="hidden mt-3 text-sm text-gray-500">
                                    <ul class="list-disc pl-5 space-y-1">
                                        <li>Jornada completa de 8 horas</li>
                                        <li>Posibilidad de capturar siluros gigantes</li>
                                        <li>Picnic campestre incluido</li>
                                        <li>Traslados desde el hotel incluidos</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Servicio 5 (Nuevo) -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden transform transition duration-500 hover:shadow-xl hover:scale-105 animate-fade-in-up" style="animation-delay: 400ms;">
                        <div class="relative h-60 overflow-hidden group">
                            <img src="https://images.unsplash.com/photo-1589584649799-5821556eae28" alt="Pesca nocturna" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 group-hover:rotate-1">
                            <div class="absolute inset-0 bg-gradient-to-t from-blue-900 to-transparent opacity-0 group-hover:opacity-30 transition-opacity duration-300"></div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2 transform transition duration-300 hover:text-blue-600">Pesca Nocturna en Mallorca</h3>
                            <div class="flex items-center mb-4">
                                <span class="text-yellow-500 mr-1">★★★★☆</span>
                                <span class="text-sm text-gray-600">(8 valoraciones)</span>
                            </div>
                            <p class="text-gray-600 mb-4">Una experiencia única de pesca bajo las estrellas en aguas baleares, ideal para capturar especies nocturnas con técnicas especiales.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-blue-600 font-bold text-xl">Desde $279/persona</span>
                                <a href="#" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition duration-300 transform hover:scale-105 hover:shadow-md active:scale-95">Reservar</a>
                            </div>
                            <div class="mt-4 pt-4 border-t border-gray-100">
                                <button class="text-blue-500 hover:text-blue-700 text-sm font-medium flex items-center w-full justify-center transition duration-300 focus:outline-none" onclick="toggleDetails(this)">
                                    Ver detalles
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div class="hidden mt-3 text-sm text-gray-500">
                                    <ul class="list-disc pl-5 space-y-1">
                                        <li>Salida al atardecer, 5 horas de duración</li>
                                        <li>Cena a bordo con productos locales</li>
                                        <li>Equipo especializado con luces</li>
                                        <li>Guía experto en pesca nocturna</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Servicio 6 (Nuevo) -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden transform transition duration-500 hover:shadow-xl hover:scale-105 animate-fade-in-up" style="animation-delay: 500ms;">
                        <div class="relative h-60 overflow-hidden group">
                            <img src="https://images.unsplash.com/photo-1593194632878-51abf003d7b2" alt="Pesca submarina" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 group-hover:rotate-1">
                            <div class="absolute inset-0 bg-gradient-to-t from-blue-900 to-transparent opacity-0 group-hover:opacity-30 transition-opacity duration-300"></div>
                            <div class="absolute top-4 right-4 bg-blue-600 text-white font-bold px-3 py-1 rounded-full text-sm transform transition duration-300 hover:scale-110 hover:bg-blue-700">Premium</div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2 transform transition duration-300 hover:text-blue-600">Pesca Submarina en Cabo de Gata</h3>
                            <div class="flex items-center mb-4">
                                <span class="text-yellow-500 mr-1">★★★★★</span>
                                <span class="text-sm text-gray-600">(14 valoraciones)</span>
                            </div>
                            <p class="text-gray-600 mb-4">Aventura subacuática de pesca con arpón en las cristalinas aguas del Parque Natural de Cabo de Gata. Para buceadores experimentados.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-blue-600 font-bold text-xl">Desde $359/persona</span>
                                <a href="#" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition duration-300 transform hover:scale-105 hover:shadow-md active:scale-95">Reservar</a>
                            </div>
                            <div class="mt-4 pt-4 border-t border-gray-100">
                                <button class="text-blue-500 hover:text-blue-700 text-sm font-medium flex items-center w-full justify-center transition duration-300 focus:outline-none" onclick="toggleDetails(this)">
                                    Ver detalles
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div class="hidden mt-3 text-sm text-gray-500">
                                    <ul class="list-disc pl-5 space-y-1">
                                        <li>Se requiere certificado de buceo</li>
                                        <li>Equipo completo incluido</li>
                                        <li>Licencia de pesca submarina incluida</li>
                                        <li>Instrucción sobre pesca sostenible</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action with pulse animation -->
    <div class="bg-blue-700 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-white mb-6 animate-fade-in-down">¿Necesitas ayuda para elegir?</h2>
            <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto animate-fade-in-up">
                Nuestros asesores especializados pueden ayudarte a encontrar la experiencia perfecta para ti
            </p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="#" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-blue-700 bg-white hover:bg-blue-50 transition duration-300 transform hover:scale-105 hover:shadow-lg relative group">
                    <span class="absolute w-full h-full rounded-md animate-ping bg-white opacity-75 group-hover:opacity-100"></span>
                    <span class="relative flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                        </svg>
                        Llamar ahora
                    </span>
                </a>
                <a href="#" class="inline-flex items-center justify-center px-6 py-3 border border-white text-base font-medium rounded-md text-white hover:bg-blue-800 transition duration-300 transform hover:scale-105 hover:shadow-lg active:scale-95">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                    </svg>
                    Enviar mensaje
                </a>
            </div>
        </div>
    </div>

    <!-- JavaScript para animaciones interactivas -->
    <script>
        // Función para alternar la visibilidad de los detalles
        function toggleDetails(button) {
            const details = button.nextElementSibling;
            const icon = button.querySelector('svg');
            
            if (details.classList.contains('hidden')) {
                details.classList.remove('hidden');
                details.classList.add('animate-fade-in');
                icon.classList.add('rotate-180');
                button.textContent = button.textContent.replace('Ver detalles', 'Ocultar detalles');
                button.prepend(document.createTextNode('Ocultar detalles'));
            } else {
                details.classList.add('hidden');
                icon.classList.remove('rotate-180');
                button.textContent = button.textContent.replace('Ocultar detalles', 'Ver detalles');
                button.prepend(document.createTextNode('Ver detalles'));
            }
        }

        // Añadir clases de animación al cargar la página
        document.addEventListener('DOMContentLoaded', function() {
            // Animación secuencial para las tarjetas
            const cards = document.querySelectorAll('.animate-fade-in-up');
            cards.forEach((card, index) => {
                card.style.animationDelay = `${index * 100}ms`;
            });
        });
    </script>

    <style>
        /* Animaciones personalizadas */
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes widthExpand {
            from {
                width: 0;
            }
            to {
                width: 5rem;
            }
        }
        
        @keyframes gradientX {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }
        
        .animate-fade-in-down {
            animation: fadeInDown 0.6s ease-out forwards;
        }
        
        .animate-fade-in-up {
            animation: fadeInUp 0.6s ease-out forwards;
        }
        
        .animate-width-expand {
            animation: widthExpand 0.8s ease-out forwards;
        }
        
        .animate-gradient-x {
            background-size: 200% 200%;
            animation: gradientX a15s ease infinite;
        }

        .animate-fade-in {
            animation: fadeIn 0.4s ease-out forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</x-app-layout> 