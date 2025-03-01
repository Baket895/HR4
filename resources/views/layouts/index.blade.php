<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('img/jvdlogo.png') }}" type="image/x-icon">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css')}}" />
    <wireui:scripts />
    @livewireStyles
    <!-- Datatable -->
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.dataTables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.dataTables.min.css')}}" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 antialiased">
    <div class="flex min-h-screen scroll-smooth w-full flex-col">
            <nav class="min-h-[10vh] bg-white px-20 flex justify-between items-center sticky top-0 shadow-sm z-20 gap-10">
                @include('components.app.index-navbar')
            </nav>


                <!-- Content Main -->
                <article class="min-h-[90vh] w-full flex items-center justify-center">
                    @yield('content')
                </article>
                
                <!-- Footer -->

            <footer class="bg-white px-10 py-4 shadow-md text-center">
                @include('components.app.index-footer')
            </footer>
    </div>

    @livewireScripts
    @vite('resources/js/app.js')
    <script src="{{ asset('assets/js/chart.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>

    <!-- Datatable -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/js/canvas.js.min.js') }}"></script>
    <script src="{{ asset('assets/js/flowbite.min.js') }}"></script>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
