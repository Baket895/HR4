<!-- Logo and ToggleNav Icon -->
<img class="w-24" src="{{ asset('img/jvdlogo.png') }}" alt="Logo">

<!-- Toggle Navigation (Hamburger Icon) -->
<a id="toggleNav" class="md:hidden cursor-pointer">
    <i class="fas fa-bars"></i>
</a>

<!-- Overlay (Will appear when navMenu is open) -->
<div id="overlay" class="fixed inset-0 bg-gray-200 opacity-50 hidden z-40"></div>

<!-- Navigation Menu (Hidden by default) -->
<div id="navMenu" class="absolute top-12 left-0 w-full bg-white rounded-lg shadow-lg hidden overflow-y-auto z-50 p-4">
    <div class="p-4 relative text-center uppercase">
        <!-- Close Button -->
        <button id="closeNav" class="absolute top-4 right-10 text-gray-600 hover:text-gray-900">
            <i class="fa-solid fa-xmark"></i>
        </button>

        <!-- Dropdown Menu Items -->
        <a href="#" class="block p-4 text-gray-700 hover:bg-gray-200">Home</a>
        <a href="#" class="block p-4 text-gray-700 hover:bg-gray-200">Carrers</a>
        <a href="#" class="block p-4 text-gray-700 hover:bg-gray-200">About</a>
        <a href="#" class="block p-4 text-gray-700 hover:bg-gray-200">Blog</a>
        <a href="#" class="block p-4 text-gray-700 hover:bg-gray-200">Services</a>
        <a href="#" class="block p-4 text-gray-700 hover:bg-gray-200">Contact</a>
        <a href="#" class="block p-4 text-gray-700 hover:bg-gray-200">Login</a>
        <a href="#" class="block p-4 text-gray-700 hover:bg-gray-200">Register</a>
    </div>
</div>

<!-- Normal Navigation Menu (Visible on larger screens) -->
<ul class="flex flex-row gap-10 hidden md:flex">
    <li class="hover:underline underline-offset-8 hover:text-blue-600 hover:decoration-2 hover:decoration-blue-600 hover:scale-110 transition">
        <a href="/">Home</a>
    </li>
    <li class="hover:underline underline-offset-8 hover:text-blue-600 hover:decoration-2 hover:decoration-blue-600 hover:scale-110 transition">
        <a href="#">Carrers</a>
    </li>
    <li class="hover:underline underline-offset-8 hover:text-blue-600 hover:decoration-2 hover:decoration-blue-600 hover:scale-110 transition">
        <a href="#">About</a>
    </li>
    <li class="hover:underline underline-offset-8 hover:text-blue-600 hover:decoration-2 hover:decoration-blue-600 hover:scale-110 transition">
        <a href="#">Blog</a>
    </li>
    <li class="hover:underline underline-offset-8 hover:text-blue-600 hover:decoration-2 hover:decoration-blue-600 hover:scale-110 transition">
        <a href="#">Services</a>
    </li>
    <li class="hover:underline underline-offset-8 hover:text-blue-600 hover:decoration-2 hover:decoration-blue-600 hover:scale-110 transition">
        <a href="#contact-us">Contact</a>
    </li>
</ul>

<div class="transition-transform duration-300 ease-in-out transform rounded-md bg-gradient-to-r from-violet-600 to-violet-500 text-white py-2 px-4 hover:scale-110 hover:from-violet-700 hover:to-violet-600 hidden md:flex"
>
    <a href="/login" class="block">Sign In</a>
</div>
