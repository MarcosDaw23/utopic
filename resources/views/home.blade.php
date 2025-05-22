<x-app-layout>
    <!-- Hero Section con slider de imágenes -->
    <div class="relative h-screen">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-blue-900 opacity-70 z-10"></div>
            <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e" alt="Playa paradisíaca" class="w-full h-full object-cover">
        </div>
        
        <div class="relative z-20 flex items-center justify-center h-full">
            <div class="text-center px-4 max-w-5xl">
                <h1 class="text-5xl md:text-6xl font-bold text-white mb-6 drop-shadow-lg">Descubre el mundo Acuático con Utopic Viajes</h1>
                <p class="text-xl md:text-2xl text-white mb-10 max-w-3xl mx-auto">Experiencias náuticas exclusivas y aventuras inolvidables en los mejores destinos turísticos</p>
                
                <!-- Search Form -->
                <div class="bg-white p-5 rounded-lg shadow-lg max-w-4xl mx-auto">
                    <form id="search-form" action="{{ route('search-results') }}" method="GET" class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Destino</label>
                            <div class="relative">
                                <input type="text" id="pais-input" name="destination" class="w-full p-3 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" placeholder="Escribe un país..." autocomplete="off" required>
                                <div id="paises-lista" class="absolute z-10 w-full mt-1 bg-white shadow-lg rounded-md border border-gray-300 max-h-60 overflow-y-auto hidden"></div>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Fecha</label>
                            <input type="date" name="date" class="w-full p-3 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" required min="{{ date('Y-m-d') }}">
                        </div>
                        <div class="flex items-end">
                            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-md transition duration-300">
                                Buscar Aventuras
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Servicios Destacados -->
    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                    Experiencias Náuticas Exclusivas
                </h2>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 mx-auto">
                    Descubre nuestros servicios premium para una experiencia marítima inolvidable
                </p>
            </div>

            <div class="grid gap-8 grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
                <!-- Servicio 1 -->
                <div class="group relative bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:transform hover:scale-105">
                    <div class="h-52 bg-blue-100 group-hover:opacity-90">
                        <img src="https://images.unsplash.com/photo-1564133934929-566276b46c9f" alt="Alquiler de barcos" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900">Alquiler de Barcos</h3>
                        <p class="mt-2 text-gray-600">Alquila embarcaciones de lujo para navegar por las aguas más cristalinas del mundo.</p>
                        <div class="mt-4">
                            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Ver opciones →</a>
                        </div>
                    </div>
                </div>

                <!-- Servicio 2 -->
                <div class="group relative bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:transform hover:scale-105">
                    <div class="h-52 bg-blue-100 group-hover:opacity-90">
                        <img src="https://images.unsplash.com/photo-1533743983669-94fa5c4338ec" alt="Pesca deportiva" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900">Pesca Deportiva</h3>
                        <p class="mt-2 text-gray-600">Excursiones de pesca guiadas por expertos en los mejores caladeros internacionales.</p>
                        <div class="mt-4">
                            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Explorar tours →</a>
                        </div>
                    </div>
                </div>

                <!-- Servicio 3 -->
                <div class="group relative bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:transform hover:scale-105">
                    <div class="h-52 bg-blue-100 group-hover:opacity-90">
                        <img src="https://images.unsplash.com/photo-1599640842225-85d111c60e6b" alt="Cruceros privados" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900">Cruceros Privados</h3>
                        <p class="mt-2 text-gray-600">Disfruta de la exclusividad de un crucero a medida para ti y tus acompañantes.</p>
                        <div class="mt-4">
                            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Descubrir más →</a>
                        </div>
                    </div>
                </div>

                <!-- Servicio 4 -->
                <div class="group relative bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:transform hover:scale-105">
                    <div class="h-52 bg-blue-100 group-hover:opacity-90">
                        <img src="https://images.unsplash.com/photo-1544551763-46a013bb70d5" alt="Buceo y snorkel" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900">Buceo y Snorkel</h3>
                        <p class="mt-2 text-gray-600">Explora los fondos marinos más espectaculares con nuestros guías certificados.</p>
                        <div class="mt-4">
                            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Ver actividades →</a>
                        </div>
                    </div>
                </div>
                
                <!-- Servicio 5 -->
                <div class="group relative bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:transform hover:scale-105">
                    <div class="h-52 bg-blue-100 group-hover:opacity-90">
                        <img src="https://images.unsplash.com/photo-1596464716127-f2a82984de30" alt="Paseos en velero" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900">Paseos en Velero</h3>
                        <p class="mt-2 text-gray-600">Navega con el viento disfrutando de la experiencia más auténtica en el mar.</p>
                        <div class="mt-4">
                            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Reservar ahora →</a>
                        </div>
                    </div>
                </div>
                
                <!-- Servicio 6 -->
                <div class="group relative bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:transform hover:scale-105">
                    <div class="h-52 bg-blue-100 group-hover:opacity-90">
                        <img src="https://images.unsplash.com/photo-1534185372994-55f9e64235f5" alt="Jet ski" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900">Jet Ski y Motos Acuáticas</h3>
                        <p class="mt-2 text-gray-600">Vive la emoción y la adrenalina sobre las olas con nuestras potentes motos acuáticas.</p>
                        <div class="mt-4">
                            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Ver ofertas →</a>
                        </div>
                    </div>
                </div>
                
                <!-- Servicio 7 -->
                <div class="group relative bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:transform hover:scale-105">
                    <div class="h-52 bg-blue-100 group-hover:opacity-90">
                        <img src="https://images.unsplash.com/photo-1583529246608-aff7c2a51d3e" alt="Kayak y paddle surf" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900">Kayak y Paddle Surf</h3>
                        <p class="mt-2 text-gray-600">Actividades tranquilas para explorar calas y costas a tu ritmo de manera sostenible.</p>
                        <div class="mt-4">
                            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Descubrir →</a>
                        </div>
                    </div>
                </div>
                
                <!-- Servicio 8 -->
                <div class="group relative bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:transform hover:scale-105">
                    <div class="h-52 bg-blue-100 group-hover:opacity-90">
                        <img src="https://images.unsplash.com/photo-1559615454-c32c4bd32c31" alt="Eventos en barco" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900">Eventos en Barco</h3>
                        <p class="mt-2 text-gray-600">Celebra fiestas, bodas y eventos corporativos en escenarios marítimos exclusivos.</p>
                        <div class="mt-4">
                            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Organizar evento →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Destinos Populares -->
    <div class="py-16 bg-gradient-to-r from-blue-50 to-cyan-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                    Destinos Destacados
                </h2>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 mx-auto">
                    Los paraísos marítimos más exclusivos para tus próximas vacaciones
                </p>
            </div>

            <div class="grid gap-8 grid-cols-1 md:grid-cols-3">
                <!-- Destino 1 -->
                <div class="group relative bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl">
                    <div class="h-72 group-hover:opacity-90">
                        <img src="https://images.unsplash.com/photo-1514282401047-d79a71a590e8" alt="Islas Maldivas" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-blue-900 to-transparent opacity-70"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <h3 class="text-2xl font-bold text-white">Islas Maldivas</h3>
                            <p class="text-sm text-white opacity-90">Paraíso tropical en el Océano Índico</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-4">
                            <div class="flex items-center">
                                <span class="text-yellow-500 mr-1">★★★★★</span>
                                <span class="text-sm text-gray-600">(48 opiniones)</span>
                            </div>
                            <span class="text-blue-600 font-semibold">Desde $1,299</span>
                        </div>
                        <p class="text-gray-600 mb-4">Disfruta de aguas cristalinas, playas de arena blanca y exclusivos paseos en barco entre islas paradisíacas.</p>
                        <a href="#" class="block text-center py-2 px-4 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition duration-300">Ver paquetes</a>
                    </div>
                </div>

                <!-- Destino 2 -->
                <div class="group relative bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl">
                    <div class="h-72 group-hover:opacity-90">
                        <img src="https://images.unsplash.com/photo-1516483638261-f4dbaf036963" alt="Costa Amalfitana" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-blue-900 to-transparent opacity-70"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <h3 class="text-2xl font-bold text-white">Costa Amalfitana</h3>
                            <p class="text-sm text-white opacity-90">La joya del Mediterráneo italiano</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-4">
                            <div class="flex items-center">
                                <span class="text-yellow-500 mr-1">★★★★★</span>
                                <span class="text-sm text-gray-600">(36 opiniones)</span>
                            </div>
                            <span class="text-blue-600 font-semibold">Desde $1,499</span>
                        </div>
                        <p class="text-gray-600 mb-4">Recorre en barco los pintorescos pueblos costeros de Italia y disfruta de su gastronomía única.</p>
                        <a href="#" class="block text-center py-2 px-4 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition duration-300">Ver paquetes</a>
                    </div>
                </div>

                <!-- Destino 3 -->
                <div class="group relative bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl">
                    <div class="h-72 group-hover:opacity-90">
                        <img src="https://images.unsplash.com/photo-1533105079780-92b9be482077" alt="Islas Griegas" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-blue-900 to-transparent opacity-70"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <h3 class="text-2xl font-bold text-white">Islas Griegas</h3>
                            <p class="text-sm text-white opacity-90">Santoríni, Mykonos y más</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-4">
                            <div class="flex items-center">
                                <span class="text-yellow-500 mr-1">★★★★★</span>
                                <span class="text-sm text-gray-600">(52 opiniones)</span>
                            </div>
                            <span class="text-blue-600 font-semibold">Desde $1,199</span>
                        </div>
                        <p class="text-gray-600 mb-4">Navega por las islas más hermosas del Mediterráneo y descubre el encanto de la cultura griega.</p>
                        <a href="#" class="block text-center py-2 px-4 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition duration-300">Ver paquetes</a>
                    </div>
                </div>
                
                <!-- Destino 4 -->
                <div class="group relative bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl">
                    <div class="h-72 group-hover:opacity-90">
                        <img src="https://images.unsplash.com/photo-1602002418082-dd4a1f45c3a1" alt="Riviera Maya" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-blue-900 to-transparent opacity-70"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <h3 class="text-2xl font-bold text-white">Riviera Maya</h3>
                            <p class="text-sm text-white opacity-90">Paraíso caribeño mexicano</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-4">
                            <div class="flex items-center">
                                <span class="text-yellow-500 mr-1">★★★★★</span>
                                <span class="text-sm text-gray-600">(41 opiniones)</span>
                            </div>
                            <span class="text-blue-600 font-semibold">Desde $899</span>
                        </div>
                        <p class="text-gray-600 mb-4">Cenotes, arrecifes de coral y playas de ensueño te esperan en este increíble destino caribeño.</p>
                        <a href="#" class="block text-center py-2 px-4 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition duration-300">Ver paquetes</a>
                    </div>
                </div>
                
                <!-- Destino 5 -->
                <div class="group relative bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl">
                    <div class="h-72 group-hover:opacity-90">
                        <img src="https://images.unsplash.com/photo-1509233725247-49e657c54213" alt="Bali" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-blue-900 to-transparent opacity-70"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <h3 class="text-2xl font-bold text-white">Bali</h3>
                            <p class="text-sm text-white opacity-90">La isla de los dioses</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-4">
                            <div class="flex items-center">
                                <span class="text-yellow-500 mr-1">★★★★★</span>
                                <span class="text-sm text-gray-600">(63 opiniones)</span>
                            </div>
                            <span class="text-blue-600 font-semibold">Desde $1,099</span>
                        </div>
                        <p class="text-gray-600 mb-4">Cultura, templos, playas y aventuras acuáticas en uno de los destinos más exóticos de Asia.</p>
                        <a href="#" class="block text-center py-2 px-4 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition duration-300">Ver paquetes</a>
                    </div>
                </div>
                
                <!-- Destino 6 -->
                <div class="group relative bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl">
                    <div class="h-72 group-hover:opacity-90">
                        <img src="https://images.unsplash.com/photo-1593693814118-9861707a67bf" alt="Seychelles" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-blue-900 to-transparent opacity-70"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <h3 class="text-2xl font-bold text-white">Seychelles</h3>
                            <p class="text-sm text-white opacity-90">Islas vírgenes del Índico</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-4">
                            <div class="flex items-center">
                                <span class="text-yellow-500 mr-1">★★★★★</span>
                                <span class="text-sm text-gray-600">(29 opiniones)</span>
                            </div>
                            <span class="text-blue-600 font-semibold">Desde $1,799</span>
                        </div>
                        <p class="text-gray-600 mb-4">Playas de ensueño, formaciones rocosas únicas y una biodiversidad marina extraordinaria.</p>
                        <a href="#" class="block text-center py-2 px-4 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition duration-300">Ver paquetes</a>
                    </div>
                </div>
            </div>

            <div class="mt-12 text-center">
                <a href="#" class="inline-flex items-center px-6 py-3 border border-transparent text-lg font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 transition duration-300">
                    Explorar todos los destinos
                </a>
            </div>
        </div>
    </div>

    <!-- Testimonios -->
    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                    Lo que dicen nuestros clientes
                </h2>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 mx-auto">
                    Experiencias reales de viajeros que han disfrutado de nuestros servicios
                </p>
            </div>

            <div class="grid gap-8 grid-cols-1 md:grid-cols-3">
                <!-- Testimonio 1 -->
                <div class="bg-blue-50 rounded-xl p-8 shadow-sm">
                    <div class="flex items-center mb-6">
                        <div class="h-12 w-12 rounded-full overflow-hidden bg-gray-200 mr-4">
                            <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Avatar" class="h-full w-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-semibold text-lg">María García</h4>
                            <div class="flex text-yellow-400">
                                <span>★★★★★</span>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"Una experiencia increíble. El alquiler del barco fue perfecto, la tripulación muy profesional y el itinerario espectacular. Repetiremos sin duda."</p>
                </div>

                <!-- Testimonio 2 -->
                <div class="bg-blue-50 rounded-xl p-8 shadow-sm">
                    <div class="flex items-center mb-6">
                        <div class="h-12 w-12 rounded-full overflow-hidden bg-gray-200 mr-4">
                            <img src="https://randomuser.me/api/portraits/men/47.jpg" alt="Avatar" class="h-full w-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-semibold text-lg">Alejandro Martín</h4>
                            <div class="flex text-yellow-400">
                                <span>★★★★★</span>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"La excursión de pesca fue lo mejor de nuestras vacaciones. El capitán conocía los mejores lugares y pudimos pescar especies que jamás habíamos visto antes."</p>
                </div>

                <!-- Testimonio 3 -->
                <div class="bg-blue-50 rounded-xl p-8 shadow-sm">
                    <div class="flex items-center mb-6">
                        <div class="h-12 w-12 rounded-full overflow-hidden bg-gray-200 mr-4">
                            <img src="https://randomuser.me/api/portraits/women/59.jpg" alt="Avatar" class="h-full w-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-semibold text-lg">Laura Fernández</h4>
                            <div class="flex text-yellow-400">
                                <span>★★★★★</span>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"Nuestro crucero privado por las Islas Griegas superó todas nuestras expectativas. El servicio, la comida y los lugares que visitamos fueron extraordinarios."</p>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="py-16 bg-blue-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-extrabold text-white sm:text-4xl mb-8">
                ¿Listo para tu próxima aventura marina?
            </h2>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto mb-10">
                Reserva ahora y obtén un 10% de descuento en tu primera experiencia con nosotros
            </p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="#" class="inline-flex items-center justify-center px-8 py-4 border border-transparent text-base font-medium rounded-md text-blue-700 bg-white hover:bg-blue-50 transition duration-300">
                    Explorar paquetes
                </a>
                <a href="#" class="inline-flex items-center justify-center px-8 py-4 border border-white text-base font-medium rounded-md text-white hover:bg-blue-800 transition duration-300">
                    Contactar con un asesor
                </a>
            </div>
        </div>
    </div>

    <!-- JavaScript para autocompletado de países -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Lista de países para el autocompletado
            const paises = [
                "España", "Francia", "Italia", "Grecia", "Portugal", "Alemania", "Reino Unido", 
                "Croacia", "Turquía", "México", "Estados Unidos", "Canadá", "Brasil", "Argentina", 
                "Chile", "Colombia", "Perú", "Ecuador", "Venezuela", "Tailandia", "Japón", "China", 
                "India", "Australia", "Nueva Zelanda", "Egipto", "Marruecos", "Sudáfrica", "Kenia", 
                "Tanzania", "Emiratos Árabes Unidos", "Maldivas", "Indonesia", "Filipinas", "Vietnam", 
                "Singapur", "Malasia", "Islas Mauricio", "Seychelles", "Costa Rica", "Panamá", 
                "República Dominicana", "Cuba", "Jamaica", "Bahamas", "Barbados", "Puerto Rico"
            ];
            
            const paisInput = document.getElementById('pais-input');
            const paisesList = document.getElementById('paises-lista');
            
            // Función para mostrar sugerencias basadas en el texto ingresado
            function mostrarSugerencias(texto) {
                // Limpiar lista anterior
                paisesList.innerHTML = '';
                
                // Filtrar países que coincidan con el texto de entrada
                const coincidencias = paises.filter(pais => 
                    pais.toLowerCase().includes(texto.toLowerCase())
                );
                
                if (coincidencias.length > 0) {
                    paisesList.classList.remove('hidden');
                    
                    // Crear elementos de lista para cada coincidencia
                    coincidencias.forEach(pais => {
                        const item = document.createElement('div');
                        item.classList.add('p-2', 'hover:bg-blue-50', 'cursor-pointer');
                        
                        // Resaltar la parte coincidente
                        const indice = pais.toLowerCase().indexOf(texto.toLowerCase());
                        let html = '';
                        
                        if (indice >= 0) {
                            html = pais.substring(0, indice) + 
                                  '<strong>' + pais.substring(indice, indice + texto.length) + '</strong>' + 
                                  pais.substring(indice + texto.length);
                        } else {
                            html = pais;
                        }
                        
                        item.innerHTML = html;
                        
                        // Evento al hacer clic en un país sugerido
                        item.addEventListener('click', function() {
                            paisInput.value = pais;
                            paisesList.classList.add('hidden');
                        });
                        
                        paisesList.appendChild(item);
                    });
                } else {
                    paisesList.classList.add('hidden');
                }
            }
            
            // Evento de entrada en el campo de texto
            paisInput.addEventListener('input', function() {
                const textoIngresado = this.value.trim();
                if (textoIngresado.length > 0) {
                    mostrarSugerencias(textoIngresado);
                } else {
                    paisesList.classList.add('hidden');
                }
            });
            
            // Ocultar la lista si se hace clic fuera del input
            document.addEventListener('click', function(e) {
                if (e.target !== paisInput && e.target !== paisesList) {
                    paisesList.classList.add('hidden');
                }
            });
            
            // Eventos de teclado para navegar por las sugerencias
            paisInput.addEventListener('keydown', function(e) {
                const items = paisesList.querySelectorAll('div');
                
                if (items.length === 0) return;
                
                // Obtener elemento actualmente seleccionado
                const seleccionado = paisesList.querySelector('.bg-blue-100');
                let indice = -1;
                
                if (seleccionado) {
                    indice = Array.from(items).indexOf(seleccionado);
                }
                
                // Tecla flecha abajo
                if (e.key === 'ArrowDown') {
                    e.preventDefault();
                    if (paisesList.classList.contains('hidden')) {
                        mostrarSugerencias(this.value.trim());
                        return;
                    }
                    
                    if (indice < items.length - 1) {
                        if (seleccionado) seleccionado.classList.remove('bg-blue-100');
                        items[indice + 1].classList.add('bg-blue-100');
                        items[indice + 1].scrollIntoView({ block: 'nearest' });
                    }
                }
                
                // Tecla flecha arriba
                else if (e.key === 'ArrowUp') {
                    e.preventDefault();
                    if (indice > 0) {
                        if (seleccionado) seleccionado.classList.remove('bg-blue-100');
                        items[indice - 1].classList.add('bg-blue-100');
                        items[indice - 1].scrollIntoView({ block: 'nearest' });
                    }
                }
                
                // Tecla Enter
                else if (e.key === 'Enter' && seleccionado) {
                    e.preventDefault();
                    paisInput.value = seleccionado.textContent;
                    paisesList.classList.add('hidden');
                }
                
                // Tecla Escape
                else if (e.key === 'Escape') {
                    paisesList.classList.add('hidden');
                }
            });
            
            // Mostrar todas las opciones al hacer clic en un campo vacío
            paisInput.addEventListener('focus', function() {
                if (this.value.trim() === '') {
                    paisesList.innerHTML = '';
                    
                    paises.forEach(pais => {
                        const item = document.createElement('div');
                        item.classList.add('p-2', 'hover:bg-blue-50', 'cursor-pointer');
                        item.textContent = pais;
                        
                        item.addEventListener('click', function() {
                            paisInput.value = pais;
                            paisesList.classList.add('hidden');
                        });
                        
                        paisesList.appendChild(item);
                    });
                    
                    paisesList.classList.remove('hidden');
                }
            });
            
            // Añadir estilos adicionales para el autocompletado
            const style = document.createElement('style');
            style.textContent = `
                #paises-lista {
                    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
                    transition: all 0.2s ease;
                }
                #paises-lista div {
                    transition: background-color 0.2s ease;
                }
                #paises-lista div:hover {
                    background-color: #EBF5FF;
                }
                #paises-lista div.bg-blue-100 {
                    background-color: #DBEAFE;
                }
                #paises-lista div strong {
                    font-weight: bold;
                    color: #2563EB;
                }
                #pais-input:focus {
                    border-color: #3B82F6;
                    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2);
                }
            `;
            document.head.appendChild(style);
            
            // Manipulación del formulario de búsqueda
            const searchForm = document.getElementById('search-form');
            if (searchForm) {
                searchForm.addEventListener('submit', function(e) {
                    const paisInput = document.getElementById('pais-input');
                    const dateInput = document.querySelector('input[name="date"]');
                    
                    // Validar que el país esté en la lista
                    if (!paises.includes(paisInput.value)) {
                        e.preventDefault();
                        alert('Por favor, selecciona un país válido de la lista.');
                        return false;
                    }
                    
                    // Validar que la fecha sea futura
                    const selectedDate = new Date(dateInput.value);
                    const today = new Date();
                    today.setHours(0, 0, 0, 0);
                    
                    if (selectedDate < today) {
                        e.preventDefault();
                        alert('Por favor, selecciona una fecha futura para tu viaje.');
                        return false;
                    }
                    
                    // Simulación de indicador de carga
                    const submitButton = searchForm.querySelector('button[type="submit"]');
                    submitButton.innerHTML = '<span class="inline-block animate-spin mr-2">⏳</span> Buscando...';
                    submitButton.disabled = true;
                });
            }
        });
    </script>
</x-app-layout> 