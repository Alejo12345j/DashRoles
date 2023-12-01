<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vanguard Institute of Technology</title>
    <!-- Enlace a Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto Mono', monospace;      
        }
        #section1{
            position: relative;
            margin: 0;
            padding: 0;
            background-image: url('https://images.e-flux-systems.com/112760_b4beeebd69f595751ff1e524105a8b37.jpg,1600');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
        #section2{
            font-family: 'Roboto Mono', monospace;
            position: relative;
            margin: 0;
            padding: 0;
            background-color: #1a202c;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
        .underline-animation::after {
            content: '';
            display: block;
            width: 0;
            height: 2px;
            background: white; /* Cambia el color según sea necesario */
            transition: width 0.3s;
        }
        .underline-animation:hover::after {
            width: 100%;
        }
    </style>
</head>
<body class="bg-white font-sans leading-normal">

    <!-- Encabezado -->
    <header class="bg-indigo-500 text-white">
        <div class="container mx-auto flex justify-between items-center p-4 flex-wrap">
            <h1 class="text-xl underline-animation">Vanguard Institute of Technology (VIT)</h1>
            <nav>
                <ul class="flex space-x-4 flex-row">
                    {{-- <li><a href="#" class="hover:text-blue-200">Acerca de Nosotros</a></li>
                    <li><a href="#" class="hover:text-blue-200">Admisiones</a></li>
                    <li><a href="#" class="hover:text-blue-200">Contacto</a></li> --}}
                    @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="hover:text-blue-200 transition duration-300 ease-in-out">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="hover:text-blue-200 transition duration-300 ease-in-out">Register</a>
                        @endif
                    @endauth
                    @endif
                    {{-- <li><a href="#" class="hover:text-blue-200">Programas Académicos</a></li> --}}
                </ul>
            </nav>
        </div>
    </header>

    <!-- Banner Principal -->
    <div id="section1">
        <section>
            <section class="text-center py-8">
                <div class="overflow-hidden mx-auto h-auto max-w-xl rounded-lg">
                    <img src="https://nypost.com/wp-content/uploads/sites/2/2021/11/MIT.jpg?quality=90&strip=all" 
                     alt="Imagen del Colegio" class="mx-auto px-6 md:px-0 transition transform duration-200 hover:scale-125 cursor-pointer">
                </div>
                <h2 class="text-white text-3xl mt-4 font-semibold transition-colors duration-200 hover:text-blue-400">
                    Bienvenidos al Vanguard Institute of Technology</h2>
            </section>
            
        
            <!-- Sección Acerca de Nosotros -->
            <section class="container mx-auto px-16 lg:px-32 xl:px-64 text-white">
                <h3 class="text-2xl font-semibold mb-2 text-center">Acerca de Nosotros</h3>
                <p class="text-justify text-lg tracking-tight">En el Vanguard Institute of Technology, nos enorgullecemos de ser una institución líder en el campo de la tecnología y la innovación. Inspirados por la excelencia y el espíritu pionero de instituciones renombradas como el MIT, nos dedicamos a forjar el futuro de la educación tecnológica.</p>
                <br>
                <h3 class="text-2xl font-semibold mb-2 text-center">Nuestra Misión</h3>
                <p class="text-justify text-lg tracking-tight" >Empoderar a las mentes más brillantes del mundo para abordar desafíos complejos y fomentar un cambio positivo. Creemos en la fusión de la teoría y la práctica, proporcionando a nuestros estudiantes una educación que no solo es rigurosa en lo académico, sino también rica en experiencias prácticas.</p>
                <br>
            </section>
        </section>
    </div>

    <!-- Sección Noticias y Eventos -->
    <section class="bg-gray-100 p-4">
        <div class="container mx-auto text-center">
            <h3 class="text-2xl font-semibold mb-2">Noticias y Eventos</h3>
            <div class="flex justify-around flex-wrap">
                {{-- PRIMER CARD DE CONTENIDO --}}
                <div class="max-w-sm rounded overflow-hidden shadow-lg my-2">
                    <img class="w-full" src="https://i.blogs.es/8b6b17/robot-mit/1366_2000.jpg" alt="Sunset in the mountains">
                    <div class="px-6 py-4">
                      <div class="font-bold text-xl mb-2">ADVANCES IN ROBOTICS</div>
                      <p class="text-gray-700 text-base">
                        “I believe by using AI, whether generative or otherwise, we have the opportunity to find the language of humanity,” media artist Refik Anadol told an MIT audience on the first day of MIT’s Generative AI Week.
                      </p>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#Robotics</span>
                      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#Technology</span>
                      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#MIT</span>
                    </div>
                  </div>
                {{-- SEGUNDO CARD DE CONTENIDO --}}
                <div class="max-w-sm rounded overflow-hidden shadow-lg my-2">
                    <img class="w-full" src="https://physicianscientists.wustl.edu/wp-content/uploads/2020/06/physci-banner3a.jpg" alt="Sunset in the mountains">
                    <div class="px-6 py-4">
                      <div class="font-bold text-xl mb-2">ADVANCES IN AI</div>
                      <p class="text-gray-700 text-base">
                        What does the future hold for generative AI? Rodney Brooks, co-founder of iRobot, kicked off an MIT symposium on the promise and potential pitfalls of increasingly powerful AI tools like ChatGPT.
                      </p>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#OpenAi</span>
                      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#Prompts</span>
                      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#SCJ UNICAH</span>
                    </div>
                </div>
                {{-- TERCER CARD DE CONTENIDO --}}
                <div class="max-w-sm rounded overflow-hidden shadow-lg my-2">
                    <img class=" object-scale-down" src="https://cdn.computerhoy.com/sites/navi.axelspringer.es/public/media/image/2023/02/instituto-tecnologico-massachusetts-2965884.jpg" alt="Sunset in the mountains">
                    <div class="px-6 py-4">
                      <div class="font-bold text-xl mb-2">CAMPUS NEWS</div>
                      <p class="text-gray-700 text-base">
                        A new study suggests a way to tune clocks, lasers, and other oscillators to super-quantum precision. The team hopes its work “will advance our fundamental ability to keep time accurately, and enable new revolutionary technologies,” Hudson Laughlin says.
                      </p>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#campus</span>
                      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#Engineering</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Galería de Imágenes -->
    <div id="section2">
        <section class="container mx-auto p-4" >
            <h3 class="text-2xl mb-6 text-center text-white uppercase">Galería</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="grid gap-4">
                    <div class="overflow-hidden rounded-lg">
                        <img class="h-auto max-w-full transition transform duration-200 hover:scale-125" src="https://www.mit.edu/files/images/202311/MIT-Quantum-Clock-SL.jpg" alt="">
                    </div>
                    <div class="overflow-hidden rounded-lg">
                        <img class="h-auto max-w-full transition transform duration-200 hover:scale-125" src="https://www.mit.edu/files/images/202311/MIT-GenerativeAI_01-PRESS_0a.jpg" alt="">
                    </div>
                    <div class="overflow-hidden rounded-lg">
                        <img class="h-auto max-w-full transition transform duration-200 hover:scale-125" src="https://www.mit.edu/files/images/202311/MIT-GenerativeAI-01-press_0a.jpg" alt="">
                    </div>
                </div>
                <div class="grid gap-4">
                    <div class="overflow-hidden rounded-lg">
                        <img class="h-auto max-w-full transition transform duration-200 hover:scale-125" src="https://www.mit.edu/files/images/202311/MIT_Imaging-Cells-sub.jpg" alt="">
                    </div>
                    <div class="overflow-hidden rounded-lg">
                        <img class="h-auto max-w-full transition transform duration-200 hover:scale-125" src="https://media.nature.com/lw767/magazine-assets/d41586-023-03745-5/d41586-023-03745-5_26368204.jpg?as=webp" alt="">
                    </div>
                    <div class="overflow-hidden rounded-lg">
                        <img class="h-auto max-w-full transition transform duration-200 hover:scale-125" src="https://www.mit.edu/files/images/202311/oscilloscope.jpg" alt="">
                    </div>
                </div>
                <div class="grid gap-4">
                    <div class="overflow-hidden rounded-lg">
                        <img class="h-auto max-w-full transition transform duration-200 hover:scale-125" src="https://www.nvidia.com/content/dam/en-zz/Solutions/geforce/ada/rtx-4090/geforce-ada-4090-web-og-1200x630.jpg" alt="">
                    </div>
                    <div class="overflow-hidden rounded-lg">
                        <img class="h-auto max-w-full transition transform duration-200 hover:scale-125" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-7.jpg" alt="">
                    </div>
                    <div class="overflow-hidden rounded-lg">
                        <img class="h-auto max-w-full transition transform duration-200 hover:scale-125" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-8.jpg" alt="">
                    </div>
                </div>
                <div class="grid gap-4">
                    <div class="overflow-hidden rounded-lg">
                        <img class="h-auto max-w-full transition transform duration-200 hover:scale-125" src="https://depor.com/resizer/frolPX_haR2ySZoWqKPP9plFOcE=/1200x1200/smart/filters:format(jpeg):quality(75)/cloudfront-us-east-1.images.arcpublishing.com/elcomercio/PUYX7VIVDFARROAOER2ILMEGIM.jpg" alt="">
                    </div>
                    <div class="overflow-hidden rounded-lg">
                        <img class="h-auto max-w-full transition transform duration-200 hover:scale-125" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-10.jpg" alt="">
                    </div>
                    <div class="overflow-hidden rounded-lg">
                        <img class="h-auto max-w-full transition transform duration-200 hover:scale-125 rounded" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Pie de Página -->
    <footer class="bg-indigo-500 text-white text-center p-4">
        <p>Información de contacto, enlaces a redes sociales y derechos de autor @2024</p>
    </footer>

</body>
</html>
