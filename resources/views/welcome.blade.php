<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
        body{
            margin: 0;
            padding: 0;
        }

        /*ENCABEZADO*/
        .navbar {
            background-color: gray;
            display: flex;
        }

        .logo{
            border: 1px solid black;
        
        }

        .logo img {
            width: 100px;
            padding: 5px;
            border: 1px solid black;
        }

        .navbar ul {
            list-style: none;
            display: flex;
            align-items: center;
            margin-left: 90px;
        }

        .navbar ul li {
            padding: 20px 200px 20px 5px;
            margin-right: 90px;
              
        }

        .item1{
            background-color: black;
            border: 1px solid black;
        }

        .navbar a {
            font-size: 20px;
            text-decoration: none;
            color: white;
            transition: color 0.3s ease;
        }

        .navbar a:hover {
            color: #4a5568;
        }

        /*PRIMERA SECCIÓN */
        .titulo{
            font-size: 2rem;
        }

        .info-container {
            display: flex;
        }

        .image-container {
            flex: 1; /* Establece el tamaño del contenedor de la imagen */
            margin: 0 20px 0 20px;
            overflow: hidden;
        }

        .image-container img {
            width: 70%;
            height: 100%;
            padding: 10px;
            margin-left: 200px;
        }

        .info-text {
            padding: 10px;
            flex: 1;
            
        }

        .titulo1{
            font-size: 25px;
        }

        .titulo2{
            font-size: 20px;
        }

        p {
            text-align: justify;
            font-size: 15px;
        }

        /*SEGUNDA SECCIÓN */
        .table-container {
            font-size: 20px;
            display: flex; /* Nueva propiedad para colocar las tablas una al lado de la otra */
            margin: 10px;
            overflow: hidden; /* Para evitar que las tablas sobresalgan del contenedor */
        }

        .table-wrapper {
            flex: 1; /* Ocupa todo el espacio disponible */
            padding: 20px;
            margin-left: 15px;
            box-sizing: border-box;
            border: 1px solid #ddd;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
            background-color: #e6e6e6;
        }

        /*TERCERA SECCIÓN */
        .figure {
            display: flex;
            justify-content: center;
        }

        /*CUARTA SECCIÓN */
        .end{
            padding: 10px;
            font-size: 20px;
            background: gray;
        }

            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased">
    
    <!--ENCABEZADO -->
    <div class="navbar">
        <div class="logo">
            <img src="https://cdn.pixabay.com/photo/2018/03/26/19/49/food-3263812_1280.jpg" alt="Logo">
        </div>
        <div class="nav">    
            <ul>
                <li class="item1"><a href="#" class="text-gray-600 hover:text-gray-900">Estadísticas</a></li>
                <li><a href="#" class="text-gray-600 hover:text-gray-900">Reglas</a></li>
                <!-- Agrega más elementos de navegación según sea necesario -->
            </ul>
        </div>

        @if (Route::has('login'))
            <div class="login-section sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                    <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>


    <br>
    <div class="titulo">
        <h1><center>TORNEO DE FUTBOL SOFTWARE 2024</center></h1>
    </div>
    <br>
    <div class="info-container">
        <div class="image-container">
            <img src="https://software-el.espe.edu.ec/wp-content/uploads/2019/01/espe-carrera-de-software.png" alt="Descripción de la imagen">
        </div>
        <div class="info-text">
            <h1 class="titulo1">Título 1</h1>
            <h2 class="titulo2">Título 2</h2>
            <p>La Carrera de Software de la Escuela Politécnica del Ejército (ESPE-L) organizó un emocionante torneo de fútbol que reunió a estudiantes, profesores y personal administrativo en un ambiente de camaradería y competencia deportiva. El evento, diseñado para fomentar el espíritu deportivo y fortalecer los lazos entre los miembros de la comunidad universitaria, contó con equipos representativos de diferentes niveles académicos.</p>
        </div>
    </div>

    <br>
    <div class="table-container">
        <div class="table-wrapper">
            <h2><center><strong>Tabla de Posiciones - Grupo A</strong></center></h2>
            <table>
                <thead>
                    <tr>
                        <th>Equipo</th>
                        <th>Puntos</th>
                        <th>Goles a favor</th>
                        <th>Goles en contra</th>
                    </tr>
                </thead>
                <tbody>
                
                </tbody>
            </table>
        </div>

        <div class="table-wrapper">
            <h2><center><strong>Tabla de Posiciones - Grupo B</strong></center></h2>
            <table>
                <thead>
                    <tr>
                        <th>Equipo</th>
                        <th>Puntos</th>
                        <th>Goles a favor</th>
                        <th>Goles en contra</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Agrega las filas de la tabla según sea necesario -->
                </tbody>
            </table>
        </div>
    </div>

    <div class="table-container">
        <div class="table-wrapper">
            <h2><center><strong>Goleadores</strong></center></h2>
            <table>
                <thead>
                    <tr>
                        <th>Jugador</th>
                        <th>Equipo</th>
                        <th>Goles</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Agrega las filas de la tabla según sea necesario -->
                </tbody>
            </table>
        </div>

            <div class="table-wrapper">
                <h2><center><strong>Proximos Encuentros</strong></center></h2>
                <table>
                    <thead>
                        <tr>
                            <th>Equipo local</th>
                            <th>Equipo visitante</th>
                            <th>Fecha</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Agrega las filas de la tabla según sea necesario -->
                    </tbody>
                </table>
            </div>
        </div>
    <br>
        <div class="figure">
            <img src="data:image/jpeg;base64,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" alt="">
        </div>
    <br>
        <div class="end">
            <p><center>(G4) Desarrollo Web Avanzado 2024</center></p>
        </div>

    </body>
</html>







<!-- 
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                    <svg viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto bg-gray-100">
                        <path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z" fill="#FF2D20"/>
                    </svg>
                </div>

                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <a href="https://laravel.com/docs" class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900">Documentation</h2>

                                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                                    Laravel has wonderful documentation covering every aspect of the framework. Whether you are a newcomer or have prior experience with Laravel, we recommend reading our documentation from beginning to end.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laracasts.com" class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900">Laracasts</h2>

                                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laravel-news.com" class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900">Laravel News</h2>

                                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <div class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900">Vibrant Ecosystem</h2>

                                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Forge</a>, <a href="https://vapor.laravel.com" class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Vapor</a>, <a href="https://nova.laravel.com" class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Nova</a>, and <a href="https://envoyer.io" class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Telescope</a>, and more.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center gap-4">
                            <a href="https://github.com/sponsors/taylorotwell" class="group inline-flex items-center hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="-mt-px mr-1 w-5 h-5 stroke-gray-400 group-hover:stroke-gray-600">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
-->
