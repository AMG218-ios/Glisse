<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <title>Glisse</title>
</head>
<body class="bg-stone-100">


<nav class="w-full px-6 py-4 flex items-center justify-between sm:shadow-sm">
    <!-- Logo -->
    <div class="
    flex items-center space-x-2">
        <div class="bg-green-600 text-white font-bold text-lg w-8 h-8 rounded-full flex items-center justify-center">G</div>
        <span class="text-green-600 text-xl font-semibold">Glisse</span>
    </div>

    <!-- Desktop Nav -->
    <div class="md:flex space-x-6 text-sm lg:text-base xl:text-lg">
        <a href="/" class="text-gray-800 hover:text-green-600 transition">Accueil</a>
        <a href="/about" class="text-gray-800 hover:text-green-600 transition">À propos</a>
        <a href="/tarifs" class="text-gray-800 hover:text-green-600 transition">Tarifs</a>
        <a href="/contact" class="text-gray-800 hover:text-green-600 transition">Contact</a>
    </div>


    <!-- Mobile Menu Toggle -->
    <div class="md:hidden">
        <button id="menu-toggle" class="text-gray-700 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>
</nav>




<!-- head page -->

    <!-- Tarifs Page Title -->
    <x-head-page>

        <x-head-h1>

            Tarifs

        </x-head-h1>

        <x-head-h2>

            Vous pouvez ici vous renseigner des prix a gauche
            <br>
            et a droite terminer votre reservation

        </x-head-h2>

    </x-head-page>



    <div class=" sm:ml-72 max-w-5xl mx-auto grid md:grid-cols-2 gap-8 items-start px-4 mb-14 ">

        <!-- Prices List -->
        <div class="space-y-6 text-xl md:text-2xl">
            <div class="flex items-baseline space-x-4">
                <span class="font-extrabold text-black">1 heure</span>
                <span class="text-green-600">8 €</span>
            </div>
            <div class="flex items-baseline space-x-4">
                <span class="font-extrabold text-black">3 heures</span>
                <span class="text-green-600">14 €</span>
            </div>
            <div class="flex items-baseline space-x-4">
                <span class="font-extrabold text-black">1 jour</span>
                <span class="text-green-600">30 €</span>
            </div>
            <div class="flex items-baseline space-x-4">
                <span class="font-extrabold text-black">2 jours</span>
                <span class="text-green-600">50 €</span>
            </div>
            <div class="flex items-baseline space-x-4">
                <span class="font-extrabold text-black">3 jours</span>
                <span class="text-green-600">65 €</span>
            </div>
            <div class="flex items-baseline space-x-4">
                <span class="font-extrabold text-black">1 semaine</span>
                <span class="text-green-600">140 €</span>
            </div>
        </div>

        <!-- Reservation Form -->
        <form class="bg-green-600 p-6 rounded-lg shadow-md space-y-6">

            <!-- Duration -->
            <div>
                <label for="duration" class="block text-white font-semibold mb-1">Durée de location</label>
                <select id="duration" name="duration" class="w-full border border-black rounded-md p-2">
                    <option value="1h">1 heure - 8 €</option>
                    <option value="3h">3 heures - 14 €</option>
                    <option value="1d">1 jour - 30 €</option>
                    <option value="2d">2 jours - 50 €</option>
                    <option value="3d">3 jours - 65 €</option>
                    <option value="1w">1 semaine - 140 €</option>
                </select>
            </div>

            <!-- Vehicle -->
            <div>
                <label for="vehicle" class="block text-white font-semibold mb-1">Véhicule à choisir</label>
                <select id="vehicle" name="vehicle" class="w-full border border-black rounded-md p-2">
                    <option value="bike">Vélo</option>
                    <option value="scooter">Trottinette</option>
                </select>
            </div>

            <!-- Station -->
            <div>
                <label for="station" class="block text-white font-semibold mb-1">Station de réservation</label>
                <select id="station" name="station" class="w-full border border-black rounded-md p-2">
                    <option>Hotel Carlton Lyon - MGallery</option>
                    <option>CROUS student residences</option>
                    <option>Carrefour Supermarché</option>
                    <option>Parc de la Tête d’Or</option>
                </select>
            </div>

            <!-- Submit -->
            <button type="submit"
                    class="w-full bg-stone-100 hover:bg-green-700 text-green-600 hover:text-white font-semibold py-2 px-4 rounded-md transition">
                Réserver maintenant
            </button>
        </form>
    </div>



<!-- Mobile Menu -->
<div id="mobile-menu" class="md:hidden hidden px-6 py-4 space-y-2 bg-white shadow">
    <a href="#" class="block text-gray-800 hover:text-green-600">Accueil</a>
    <a href="#" class="block text-gray-800 hover:text-green-600">À propos</a>
    <a href="#" class="block text-gray-800 hover:text-green-600">Tarifs</a>
    <a href="#" class="block text-gray-800 hover:text-green-600">Contact</a>
    <button class="w-full mt-2 bg-green-600 text-white py-2 rounded-full hover:bg-green-700">
        Connexion
    </button>
</div>

<script>
    // Toggle mobile menu
    document.getElementById('menu-toggle').addEventListener('click', () => {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });
</script>




</body>
</html>

