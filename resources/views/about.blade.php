<x-app-layout>
    <!-- AOS CSS y JS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    
    <style>
        .hover-scale {
            transition: transform 0.3s ease;
        }
        .hover-scale:hover {
            transform: scale(1.05);
        }
        .team-card {
            transition: all 0.3s ease;
            overflow: hidden;
        }
        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .team-card img {
            transition: transform 0.6s ease;
        }
        .team-card:hover img {
            transform: scale(1.1);
        }
        .value-icon {
            transition: all 0.3s ease;
        }
        .value-card:hover .value-icon {
            transform: rotate(360deg);
            background-color: #1E40AF;
            color: white;
        }
        .certification-icon {
            transition: all 0.4s ease;
        }
        .certification-wrapper:hover .certification-icon {
            transform: rotateY(180deg);
        }
        .wave-animation {
            animation: wave 8s linear infinite;
        }
        @keyframes wave {
            0% {transform: translateX(0) translateY(0);}
            25% {transform: translateX(-5px) translateY(5px);}
            50% {transform: translateX(0) translateY(10px);}
            75% {transform: translateX(5px) translateY(5px);}
            100% {transform: translateX(0) translateY(0);}
        }
    </style>

    <!-- Header -->
    <div class="relative py-16 bg-gradient-to-r from-blue-600 to-blue-800 overflow-hidden">
        <div class="absolute inset-0 z-0 opacity-20">
            <img src="https://images.unsplash.com/photo-1534412638304-75a1a729c3a3" alt="Equipo" class="w-full h-full object-cover">
        </div>
        
        <div class="wave-animation absolute bottom-0 left-0 right-0 h-16 opacity-10">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,192L48,181.3C96,171,192,149,288,154.7C384,160,480,192,576,192C672,192,768,160,864,165.3C960,171,1056,213,1152,218.7C1248,224,1344,192,1392,176L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        </div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl" data-aos="fade-down" data-aos-duration="1000">
                Sobre Utropic
            </h1>
            <p class="mt-6 text-xl text-blue-100 max-w-3xl mx-auto" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                Expertos en experiencias desde 2005
            </p>
        </div>
    </div>

    <!-- Our Story -->
    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center" data-aos="fade-up" data-aos-duration="800">
                <h2 class="text-lg text-blue-600 font-semibold">Nuestra Historia</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Más de 15 años creando experiencias únicas
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    Descubre cómo AquaMarina se convirtió en la agencia de servicios náuticos líder en España y el Mediterráneo.
                </p>
            </div>

            <div class="mt-12">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div data-aos="fade-right" data-aos-duration="1000">
                        <p class="text-lg text-gray-600 mb-6">
                            Utropic nació en 2005 en Bilbao, de la mano de un grupo de apasionados del mar y la navegación que soñaban con compartir su pasión con viajeros de todo el mundo.
                        </p>
                        <p class="text-lg text-gray-600 mb-6">
                            Lo que comenzó como una pequeña empresa familiar de alquiler de barcos , creció hasta convertirse en un referente en experiencias marítimas premium en todo el Mediterráneo. 
                        </p>
                        <p class="text-lg text-gray-600">
                            Hoy, con más de 15 años de experiencia y habiendo atendido a más de 100.000 clientes, seguimos manteniendo los valores de excelencia, sostenibilidad y pasión por el mar que nos caracterizaron desde el primer día.
                        </p>
                    </div>
                    <div data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                        <img src="https://images.unsplash.com/photo-1533760881669-80db4d7b4c15" alt="Historia de AquaMarina" class="rounded-lg shadow-lg hover-scale">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Our Values -->
    <div class="py-16 bg-blue-50 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center" data-aos="fade-up" data-aos-duration="800">
                <h2 class="text-lg text-blue-600 font-semibold">Nuestros Valores</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Principios que nos guían
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    En cada una de nuestras actividades, estos valores son nuestra brújula
                </p>
            </div>

            <div class="mt-16">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Value 1 -->
                    <div class="bg-white rounded-lg shadow-md p-8 text-center value-card hover-scale" data-aos="flip-left" data-aos-duration="800" data-aos-delay="0">
                        <div class="inline-flex items-center justify-center h-16 w-16 rounded-full bg-blue-100 text-blue-600 mb-6 value-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-medium text-gray-900 mb-2">Excelencia</h3>
                        <p class="text-gray-600">
                            Nos esforzamos por ofrecer el mejor servicio posible en cada interacción, cuidando hasta el último detalle para superar las expectativas de nuestros clientes.
                        </p>
                    </div>

                    <!-- Value 2 -->
                    <div class="bg-white rounded-lg shadow-md p-8 text-center value-card hover-scale" data-aos="flip-left" data-aos-duration="800" data-aos-delay="200">
                        <div class="inline-flex items-center justify-center h-16 w-16 rounded-full bg-blue-100 text-blue-600 mb-6 value-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-medium text-gray-900 mb-2">Pasión</h3>
                        <p class="text-gray-600">
                            Amamos lo que hacemos y lo transmitimos en cada experiencia. Nuestra pasión por el mar y los viajes es el motor que nos impulsa a mejorar continuamente.
                        </p>
                    </div>

                    <!-- Value 3 -->
                    <div class="bg-white rounded-lg shadow-md p-8 text-center value-card hover-scale" data-aos="flip-left" data-aos-duration="800" data-aos-delay="400">
                        <div class="inline-flex items-center justify-center h-16 w-16 rounded-full bg-blue-100 text-blue-600 mb-6 value-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-medium text-gray-900 mb-2">Sostenibilidad</h3>
                        <p class="text-gray-600">
                            Respetamos y protegemos el medio ambiente marino. Todas nuestras actividades están diseñadas para minimizar el impacto ambiental y promover la conservación de los ecosistemas marinos.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Our Team -->
    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center" data-aos="fade-up" data-aos-duration="800">
                <h2 class="text-lg text-blue-600 font-semibold">Nuestro Equipo</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Conozca a los expertos de AquaMarina
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    Profesionales apasionados que harán de su experiencia algo inolvidable
                </p>
            </div>

            <div class="mt-16">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Team Member 1 -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-md team-card" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="0">
                        <img src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5" alt="Carlos Martínez" class="w-full h-64 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-medium text-gray-900 mb-1">Carlos Martínez</h3>
                            <p class="text-blue-600 mb-4">CEO & Fundador</p>
                            <p class="text-gray-600 text-sm">
                                Capitán experimentado con más de 25 años navegando por el Mediterráneo y fundador de AquaMarina.
                            </p>
                        </div>
                    </div>

                    <!-- Team Member 2 -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-md team-card" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="150">
                        <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956" alt="Ana Fernández" class="w-full h-64 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-medium text-gray-900 mb-1">Ana Fernández</h3>
                            <p class="text-blue-600 mb-4">Directora de Operaciones</p>
                            <p class="text-gray-600 text-sm">
                                Experta en gestión turística que coordina todas nuestras actividades para garantizar experiencias perfectas.
                            </p>
                        </div>
                    </div>

                    <!-- Team Member 3 -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-md team-card" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="300">
                        <img src="https://images.unsplash.com/photo-1557862921-37829c790f19" alt="Javier López" class="w-full h-64 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-medium text-gray-900 mb-1">Javier López</h3>
                            <p class="text-blue-600 mb-4">Jefe de Guías</p>
                            <p class="text-gray-600 text-sm">
                                Biólogo marino y guía de buceo con amplia experiencia en la conservación de ecosistemas marinos.
                            </p>
                        </div>
                    </div>

                    <!-- Team Member 4 -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-md team-card" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="450">
                        <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e" alt="Elena Gómez" class="w-full h-64 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-medium text-gray-900 mb-1">Elena Gómez</h3>
                            <p class="text-blue-600 mb-4">Responsable de Atención al Cliente</p>
                            <p class="text-gray-600 text-sm">
                                Especialista en experiencia del cliente, dedicada a asegurar que cada momento sea especial.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Certifications -->
    <div class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center" data-aos="fade-up" data-aos-duration="800">
                <h2 class="text-lg text-blue-600 font-semibold">Certificaciones</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Calidad garantizada
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    Nuestros servicios cuentan con el respaldo de las principales certificaciones del sector
                </p>
            </div>

            <div class="mt-12">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                    <div class="flex flex-col items-center certification-wrapper" data-aos="fade-up" data-aos-duration="800" data-aos-delay="0">
                        <div class="bg-white p-4 rounded-full shadow-md h-28 w-28 flex items-center justify-center hover-scale">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-blue-600 certification-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <p class="mt-4 text-center font-medium text-gray-900">ISO 9001</p>
                    </div>
                    <div class="flex flex-col items-center certification-wrapper" data-aos="fade-up" data-aos-duration="800" data-aos-delay="150">
                        <div class="bg-white p-4 rounded-full shadow-md h-28 w-28 flex items-center justify-center hover-scale">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-green-600 certification-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11m0-5.5a1.5 1.5 0 013 0v3m0 0V11" />
                            </svg>
                        </div>
                        <p class="mt-4 text-center font-medium text-gray-900">ISO 14001</p>
                    </div>
                    <div class="flex flex-col items-center certification-wrapper" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                        <div class="bg-white p-4 rounded-full shadow-md h-28 w-28 flex items-center justify-center hover-scale">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-yellow-600 certification-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </div>
                        <p class="mt-4 text-center font-medium text-gray-900">SICTED</p>
                    </div>
                    <div class="flex flex-col items-center certification-wrapper" data-aos="fade-up" data-aos-duration="800" data-aos-delay="450">
                        <div class="bg-white p-4 rounded-full shadow-md h-28 w-28 flex items-center justify-center hover-scale">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-blue-400 certification-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                            </svg>
                        </div>
                        <p class="mt-4 text-center font-medium text-gray-900">Q Calidad Turística</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action -->
    <div class="bg-blue-700 py-12 relative overflow-hidden">
        <div class="wave-animation absolute top-0 left-0 right-0 h-16 opacity-10 transform rotate-180">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,192L48,181.3C96,171,192,149,288,154.7C384,160,480,192,576,192C672,192,768,160,864,165.3C960,171,1056,213,1152,218.7C1248,224,1344,192,1392,176L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <h2 class="text-3xl font-bold text-white mb-6" data-aos="fade-up" data-aos-duration="800">¿Listo para vivir tu propia aventura?</h2>
            <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                Nuestro equipo está listo para ayudarte a crear la experiencia perfecta
            </p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="400">
                <a href="#" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-blue-700 bg-white hover:bg-blue-50 transition duration-300 hover-scale">
                    Ver servicios
                </a>
                <a href="#" class="inline-flex items-center justify-center px-6 py-3 border border-white text-base font-medium rounded-md text-white hover:bg-blue-800 transition duration-300 hover-scale">
                    Contactar ahora
                </a>
            </div>
        </div>
    </div>
    
    <!-- Inicialización de AOS -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                once: true,
                mirror: false,
                offset: 120,
                easing: 'ease-out-cubic'
            });
        });
    </script>
</x-app-layout> 