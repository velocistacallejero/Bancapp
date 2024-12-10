<!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>@yield('titulo','Retiros')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link  href="{{asset('css/cajero.css') }} " rel="stylesheet" >
        <link rel="stylesheet" href="{{ asset('post-inicio.css') }}">
      
        

       
    </head>
    <body class="antialiased">
    <header>
        <h2>BancApp</h2>
        <nav class="nav-iconos">
            <h6>Cuenta</h6>
            <img href="#" src="usuario.png" style="width: 30px" class="notificacion">
            <img href="#" src="notificacion1.png" style="width:30px" alt="Notificación" class="notificacion">
        </nav>
    </header>
        <!-- desde aqui -->
        <div class="container">
        <!-- Barra lateral -->
        <div class="barra sidebar">
            <div class="imagen">
            <img  src="{{ asset('/img/3d_avatar_1.png') }}" class="rounded-circle notificacion" style="width: 150px;"
  alt="Avatar" />
            </div>
            <div onclick="window.location.href='{{route('cajero')}}'" class="sidebar-item">
            <svg xmlns="http://www.w3.org/2000/svg" height="48px" transform="translate(-40, 0)" viewBox="0 -960 960 960" width="48px" fill="#000000"><path d="M451-120v-84q-57-10-93.5-43.5T305-332l56-23q17 48 49 71.5t77 23.5q48 0 79-24t31-66q0-44-27.5-68T466-467q-72-23-107.5-61T323-623q0-55 35.5-92t92.5-42v-83h60v83q45 5 77.5 29.5T638-665l-56 24q-14-32-37.5-46.5T483-702q-46 0-73 21t-27 57q0 38 30 61.5T524-514q68 21 100.5 60.5T657-354q0 63-37 101.5T511-203v83h-60Z"/></svg>
                <p >RETIROS</p>
            </div>
            <div onclick="window.location.href='{{route('estado')}}'"   class="sidebar-item">
            <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px" fill="#000000"><path d="M639.44-402.5q-52.77 0-86.7-34.18-33.94-34.19-33.94-86.7 0-52.51 34.11-86.82 34.11-34.3 86.52-34.3 52.51 0 86.82 34.39 34.32 34.39 34.32 86.65 0 52.83-34.42 86.9-34.41 34.06-86.71 34.06Zm-241.64 251v-69.43q0-19.87 9.21-37.72 9.2-17.86 25.42-24.89 44.35-31.98 98.06-47.72Q584.2-347 639.44-347q55.06 0 108.21 16.99 53.15 16.99 99.28 46.47 14.72 10.06 24.68 26.39 9.96 16.34 9.96 36.22v69.43H397.8Zm57.27-74.5v11.5h369V-226q-39.28-26-90.1-42-50.81-16-94.62-16t-95.13 16q-51.32 16-89.15 42Zm184.5-239.5q25.5 0 41.75-16.12t16.25-41.88q0-25.5-16.25-41.75t-42-16.25q-25.75 0-41.75 16.25t-16 42q0 25.51 16 41.63t42 16.12Zm0-58Zm0 309ZM119.26-405.3v-65.87H423.8v65.87H119.26Zm0-338.74v-65.63h468.87v65.63H119.26Zm349.33 169H119.26v-65.63H502.3q-11.64 13.78-20.51 30.55-8.88 16.77-13.2 35.08Z"/></svg>
                <p >ESTADO DE CUENTA</p>
            </div>
            <div  onclick="window.location.href='{{route('consignacion')}}'" class="sidebar-item">
            <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px" fill="#000000"><path d="M447.43-159.02V-675.7L205.26-434.02 159.02-480 480-801.22 801.22-480l-46.48 45.98L513.07-675.7v516.68h-65.64Z"/></svg>
                <p >CONSIGNACIONES</p>
            </div>
            <div onclick="window.location.href='{{route('estracto')}}'"  class="sidebar-item">
            <svg xmlns="http://www.w3.org/2000/svg" height="48px" transform="translate(10, 0)" viewBox="0 -960 960 960" width="48px" fill="#000000"><path d="M436.74-80.78q-76.44-6.55-141.88-40.65-65.45-34.11-113.28-88.32-47.84-54.21-74.82-123.82-26.98-69.62-26.98-147.1 0-155.72 102.17-270.38 102.16-114.67 255.79-130.17v65.87q-125.91 19.17-209.12 113.74-83.21 94.57-83.21 220.85 0 126.04 82.71 220.49t208.62 113.86v65.63Zm43.5-200.81L280.83-480.26l42.91-42.91L450.3-396.61v-283.8h60.13v283.3l126.31-126.06 42.91 42.41-199.41 199.17Zm43.5 200.81v-65.45q45.02-6.18 86.91-23.56 41.89-17.38 77.65-45.64l48.48 48.47q-46.17 36.12-100.14 58.89-53.97 22.77-112.9 27.29ZM689.3-745.57q-37.26-26.76-78.72-44.77-41.47-18.01-86.84-25.01v-65.87q58.93 6.76 112.53 29.03 53.59 22.27 100.51 58.15l-47.48 48.47Zm103.98 517.11-47.48-46.47q28.03-36.27 44.79-78.41 16.76-42.14 23.18-87.16h66.45q-6.76 58.93-28.4 112.91-21.65 53.98-58.54 99.13Zm20.25-293.04q-6.42-45.02-23.06-87.41-16.64-42.39-44.67-78.9l51.24-44.73q35.88 46.15 56.53 99.63t26.65 111.41h-66.69Z"/></svg>
                <p >EXTRACTOS BANCARIOS</p>
            </div>
        </div>
        <!-- primera parte -->
@yield('content')
         <!-- Footer -->
    <footer class="footer">
        <p > ©2024 Bancapp. Todos los derechos reservados. </p>
        <div class="social-icons">
            <a href="#">
            <svg href="" xmlns="http://www.w3.org/2000/svg" 
            viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - 
            https://fontawesome.com License - https://fontawesome.com/license/free
             Copyright 2024 Fonticons, Inc.--><path d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"/></svg></a>
            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="50" height="50">
  <path d="M549.655 124.083C534.823 81.208 492.612 53.67 447.046 53.67c-78.206-.119-156.524-.172-234.696 0-45.561 0-87.773 27.538-102.606 70.41C96.5 168.125 92 205.626 92 243.13s4.501 75.002 17.698 119.046c14.833 42.874 57.045 70.412 102.606 70.412 78.167.171 156.489.223 234.696 0 45.565 0 87.776-27.538 102.606-70.412C480.5 318.132 485 280.631 485 243.13s-4.501-75.006-17.698-119.047zM239.254 333.66V175.376l144.369 79.148-144.369 79.136z"/>
</svg>
</a>
            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="50" height="50">
  <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9S160.5 370.8 224.1 370.8 339 319.5 339 255.9 287.7 141 224.1 141zm0 186.6c-39.6 0-71.7-32.1-71.7-71.7s32.1-71.7 71.7-71.7 71.7 32.1 71.7 71.7-32.1 71.7-71.7 71.7zm146.4-194.3c0 14.9-12.1 27-27 27s-27-12.1-27-27 12.1-27 27-27 27 12.1 27 27zm76.1 27.2c-1.7-35.9-9.9-67.7-36.3-94.1s-58.2-34.6-94.1-36.3C293.3 32 253.5 32 224 32s-69.3 0-92.2 1.7c-35.9 1.7-67.7 9.9-94.1 36.3S3.9 128.5 2.2 164.4C0.5 187.3 0 227.1 0 256.6s0 69.3 1.7 92.2c1.7 35.9 9.9 67.7 36.3 94.1s58.2 34.6 94.1 36.3c22.9 1.7 62.7 1.7 92.2 1.7s69.3 0 92.2-1.7c35.9-1.7 67.7-9.9 94.1-36.3s34.6-58.2 36.3-94.1c1.7-22.9 1.7-62.7 1.7-92.2s0-69.3-1.7-92.2zm-48.7 213.7c-7.8 19.7-23.1 35-42.8 42.8-29.6 11.8-99.9 9-132.9 9s-103.3 2.8-132.9-9c-19.7-7.8-35-23.1-42.8-42.8-11.8-29.6-9-99.9-9-132.9s-2.8-103.3 9-132.9c7.8-19.7 23.1-35 42.8-42.8 29.6-11.8 99.9-9 132.9-9s103.3-2.8 132.9 9c19.7 7.8 35 23.1 42.8 42.8 11.8 29.6 9 99.9 9 132.9s2.8 103.3-9 132.9z"/>
</svg>
</a>
        </div>
    </footer>
        <!-- hasta aqui -->
    </body>
</html>