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
        .form-input:focus {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }
        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }
        .contact-icon {
            transition: all 0.4s ease;
        }
        .contact-card:hover .contact-icon {
            transform: rotate(360deg);
            background-color: #1E40AF;
        }
        .social-icon:hover {
            transform: translateY(-5px);
        }
        .faq-item:hover {
            transform: translateX(5px);
            border-left: 4px solid #2563EB;
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
            <img src="https://images.unsplash.com/photo-1516738901171-8eb4fc13bd20" alt="Contacto" class="w-full h-full object-cover">
        </div>
        
        <div class="wave-animation absolute bottom-0 left-0 right-0 h-16 opacity-10">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,192L48,181.3C96,171,192,149,288,154.7C384,160,480,192,576,192C672,192,768,160,864,165.3C960,171,1056,213,1152,218.7C1248,224,1344,192,1392,176L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        </div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl" data-aos="fade-down">
                Contacta con Nosotros
            </h1>
            <p class="mt-6 text-xl text-blue-100 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                Estamos aquí para ayudarte a planificar tu próxima aventura marítima
            </p>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div data-aos="fade-right">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Envíanos un Mensaje</h2>
                    
                    <form action="#" method="POST" class="space-y-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Nombre completo</label>
                            <input type="text" name="name" id="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 form-input transition-all duration-300" placeholder="Tu nombre">
                        </div>
                        
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Correo electrónico</label>
                            <input type="email" name="email" id="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 form-input transition-all duration-300" placeholder="tu@email.com">
                        </div>
                        
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700">Teléfono</label>
                            <input type="tel" name="phone" id="phone" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 form-input transition-all duration-300" placeholder="+34 600 000 000">
                        </div>
                        
                        <div>
                            <label for="service" class="block text-sm font-medium text-gray-700">Servicio de interés</label>
                            <select id="service" name="service" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 form-input transition-all duration-300">
                                <option value="">Selecciona un servicio</option>
                                <option value="alquiler">Alquiler de barcos</option>
                                <option value="pesca">Excursiones de pesca</option>
                                <option value="cruceros">Cruceros privados</option>
                                <option value="buceo">Buceo y snorkel</option>
                                <option value="otro">Otro</option>
                            </select>
                        </div>
                        
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700">Mensaje</label>
                            <textarea id="message" name="message" rows="5" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 form-input transition-all duration-300" placeholder="¿En qué podemos ayudarte?"></textarea>
                        </div>
                        
                        <div class="flex items-center">
                            <input id="privacy" name="privacy" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                            <label for="privacy" class="ml-2 block text-sm text-gray-700">
                                Acepto la política de privacidad y el tratamiento de mis datos
                            </label>
                        </div>
                        
                        <div>
                            <button type="submit" class="inline-flex justify-center py-3 px-6 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 hover-scale transition-all duration-300">
                                Enviar mensaje
                            </button>
                        </div>
                    </form>
                </div>
                
                <!-- Contact Information -->
                <div data-aos="fade-left" data-aos-delay="200">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Información de Contacto</h2>
                    
                    <div class="space-y-8">
                        <div class="flex contact-card p-4 rounded-lg transition-all duration-300">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-600 text-white contact-icon transition-all duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Teléfono</h3>
                                <p class="mt-1 text-gray-600">
                                    <a href="tel:+34900000000" class="hover:text-blue-600">+34 900 000 000</a>
                                </p>
                                <p class="mt-1 text-gray-600">Lunes a Viernes: 9:00 - 20:00</p>
                                <p class="text-gray-600">Sábado: 10:00 - 14:00</p>
                            </div>
                        </div>
                        
                        <div class="flex contact-card p-4 rounded-lg transition-all duration-300">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-600 text-white contact-icon transition-all duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Email</h3>
                                <p class="mt-1 text-gray-600">
                                    <a href="mailto:info@aquamarina.com" class="hover:text-blue-600">info@aquamarina.com</a>
                                </p>
                                <p class="mt-1 text-gray-600">
                                    <a href="mailto:reservas@aquamarina.com" class="hover:text-blue-600">reservas@aquamarina.com</a>
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex contact-card p-4 rounded-lg transition-all duration-300">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-600 text-white contact-icon transition-all duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Dirección</h3>
                                <p class="mt-1 text-gray-600">
                                    Puerto Deportivo, Muelle A<br>
                                    29640 Marbella, Málaga<br>
                                    España
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Map -->
                    <div class="mt-10 bg-gray-200 rounded-lg h-64 overflow-hidden" data-aos="zoom-in" data-aos-delay="300">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2905.468473963139!2d-2.9425533842614537!3d43.26226798533535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4e502367ef4d4f%3A0xf5bc0feeb7370363!2sIndautxu%2C%20Bilbao%2C%20Vizcaya!5e0!3m2!1ses!2ses!4v1650888283329!5m2!1ses!2ses" width="100%" height="100%" style="border:0; transition: transform 0.5s ease;" class="hover-scale" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    
                    <!-- Social Media -->
                    <div class="mt-8" data-aos="fade-up" data-aos-delay="400">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Síguenos</h3>
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-500 hover:text-blue-600 social-icon transition-all duration-300">
                                <span class="sr-only">Facebook</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="text-gray-500 hover:text-blue-600 social-icon transition-all duration-300">
                                <span class="sr-only">Instagram</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="text-gray-500 hover:text-blue-600 social-icon transition-all duration-300">
                                <span class="sr-only">Twitter</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                                </svg>
                            </a>
                            <a href="#" class="text-gray-500 hover:text-blue-600 social-icon transition-all duration-300">
                                <span class="sr-only">YouTube</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center" data-aos="fade-up">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                    Preguntas Frecuentes
                </h2>
                <p class="mt-4 text-xl text-gray-500 max-w-2xl mx-auto">
                    Resolvemos las dudas más comunes sobre nuestros servicios
                </p>
            </div>
            
            <div class="mt-12 space-y-6 max-w-3xl mx-auto">
                <div class="bg-white rounded-lg shadow-sm p-6 faq-item transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="text-lg font-medium text-gray-900">¿Es necesario tener experiencia previa para alquilar un barco?</h3>
                    <div class="mt-2 text-gray-600">
                        <p>Para alquilar un barco sin patrón, necesitarás disponer de una licencia de navegación adecuada según el tipo de embarcación. También ofrecemos la opción de alquilar con patrón incluido, donde no se requiere experiencia previa.</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-sm p-6 faq-item transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="text-lg font-medium text-gray-900">¿Qué incluyen los precios de alquiler?</h3>
                    <div class="mt-2 text-gray-600">
                        <p>Nuestros precios incluyen el alquiler de la embarcación, seguro básico, equipo de seguridad y limpieza final. No incluyen combustible, amarres fuera del puerto base, ni servicios adicionales como catering o actividades.</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-sm p-6 faq-item transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                    <h3 class="text-lg font-medium text-gray-900">¿Con cuánta antelación debo reservar?</h3>
                    <div class="mt-2 text-gray-600">
                        <p>Recomendamos reservar con al menos un mes de antelación, especialmente para temporada alta (julio y agosto) o si buscas modelos específicos. Para grupos grandes o eventos especiales, es aconsejable reservar con 2-3 meses de anticipación.</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-sm p-6 faq-item transition-all duration-300" data-aos="fade-up" data-aos-delay="400">
                    <h3 class="text-lg font-medium text-gray-900">¿Cuál es la política de cancelación?</h3>
                    <div class="mt-2 text-gray-600">
                        <p>Si cancelas con más de 30 días de antelación, te reembolsamos el 90% del importe. Entre 30 y 15 días, el 50%. Con menos de 15 días, no hay reembolso. Ofrecemos la opción de seguro de cancelación para mayor flexibilidad.</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-sm p-6 faq-item transition-all duration-300" data-aos="fade-up" data-aos-delay="500">
                    <h3 class="text-lg font-medium text-gray-900">¿Las excursiones de pesca son adecuadas para niños?</h3>
                    <div class="mt-2 text-gray-600">
                        <p>Tenemos excursiones específicas para familias con niños, donde adaptamos la duración, el tipo de pesca y las actividades a realizar. Generalmente, recomendamos estas actividades para niños a partir de 6 años.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Inicialización de AOS -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                once: true,
                offset: 100,
                duration: 800
            });
        });
    </script>
</x-app-layout> 