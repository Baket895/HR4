<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('img/jvdlogo.png') }}" type="image/x-icon">
    @vite('resources/css/app.css')
    <wireui:scripts />
    @livewireStyles
    <!-- Datatable -->
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.dataTables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.dataTables.min.css')}}" />

    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 antialiased scroll-smooth">

    <div class="flex h-auto w-full min-h-screen">

        <!-- Sidebar -->
        <div id="sidebar" class="fixed bg-white text-gray-500 w-60 h-full min-h-screen flex flex-col transition-all z-10 transform translate-x-0 overflow-auto">
            @include('components.app.admin-sidebar')
        </div>
    
        <!-- Main Content -->
        <div id="main-content" class="flex-1 px-4 pt-4 ml-60 transition-all duration-300 flex flex-col justify-between overflow-x-auto">
    
            <!-- Navbar Main -->
            <nav class="bg-white px-10 py-2 rounded-t-lg flex justify-between items-center sticky top-0 border-b-2 border-gray-100 z-20">
                @include('components.app.admin-navbar')
            </nav>
    
            <!-- Main Content with Header and Content -->
            <div class="flex-1">
                <!-- Header Main -->
                <header class="bg-white px-10 py-4 shadow-md rounded-b-lg">
                    @yield('header')
                </header>
    
                <!-- Content Main -->
                <article class="py-4">
                    @yield('content')
                    @yield('scripts')
                </article>
            </div>
    
            <!-- Footer Main -->
            <footer class="bg-white px-10 py-4 shadow-md text-center mt-auto">
                @include('components.app.admin-footer')
            </footer>
            
        </div>
    </div>

    @livewireScripts
    @vite('resources/js/app.js')
    <script src="{{ asset('assets/js/chart.js') }}"></script>

    <!-- Datatable -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/js/canvas.js.min.js') }}"></script>
    <script src="{{ asset('assets/js/flowbite.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</body>
</html>
