<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Glisse</title>
</head>
<body class="bg-stone-100">


<nav class="w-full px-6 py-4 flex md:flex-row md:items-center md:justify-between md:shadow-sm items-center  justify-between">
    <!-- Logo -->
    <div class="
    flex items-center space-x-2">
        <div class="bg-green-600 text-white font-bold text-lg w-8 h-8 rounded-full flex items-center justify-center">G</div>
        <span class="text-green-600 text-xl font-semibold">Glisse</span>
    </div>


    <!-- Desktop Nav -->
    <div class="md:flex space-x-6 text-sm lg:text-base xl:text-lg">
        <x-nav-link href="/" >Aceuille</x-nav-link>
        <x-nav-link href="/about" >A propos</x-nav-link>
        <x-nav-link href="/tarifs" >Tarifs</x-nav-link>
        <x-nav-link href="/contact" >Contact</x-nav-link>
    </div>

    <!-- Connexion Button -->
    <div class="sm:hidden lg:flex space-x-2">
        <button class="bg-green-600 text-white px-4 py-2 rounded-full text-sm lg:text-base hover:bg-green-700 transition">

            <a href="/sign-in">
                Sign In
            </a>

        </button>

        <button class="bg-green-600 text-white px-4 py-2 rounded-full text-sm lg:text-base hover:bg-green-700 transition">

            <a href="/log-in">
                Log In
            </a>

        </button>
    </div>

    <!-- Hamburger Menu -->
    <div class="lg:hidden  relative">
        <button id="mobile-menu-button" class="text-gray-800 hover:text-green-600">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>

        <!-- Mobile Menu Dropdown -->
        <div id="mobile-menu" class="hidden absolute right-0 mt-2 py-2 w-32 bg-green-600 rounded-lg shadow-lg border">
            <a href="/sign-in" class="block px-4 py-2 text-sm text-white hover:bg-gray-100">Sign In</a>
            <a href="/log-in" class="block px-4 py-2 text-sm text-white hover:bg-gray-100">Log In</a>
        </div>
    </div>

</nav>

<script>
    // Toggle mobile menu
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });
</script>


        {{ $slot }}



</body>
</html>

