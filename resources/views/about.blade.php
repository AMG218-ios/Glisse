<x-layout>

    <!-- head page -->


    <!-- About Page Title -->

    <x-head-page>

        <x-head-h1>

            À propos de Glisse

        </x-head-h1>

        <x-head-h2>

            <h2 class="text-lg text-green-600 font-extrabold">
                            Notre mission
                        </h2>

                        <p class="text-md font-sans">
                            Fournir des transport ecologique pour se deplacer a Lyon
                        </p>

        </x-head-h2>

    </x-head-page>

    <x-info-1>

        <h3 class="text-xl font-bold text-gray-800 mb-2 text-center"> Notre Equipe </h3>

        <p class="text-gray-600 text-center"> Vous pouvez contacter notre equipe lorsque vous faite face a un probleme technique ou  aussi  </p>

        <x-info-2>

            <p class="font-bold">
                Abdelmoin Elmegrab :
            </p>

            <p>
                telephone : 0941253030
                email : abdelmoinfly@glisse.com
            </p>

            <p class="font-bold">
                Rashad Elmegrab :
            </p>

            <p>
                telephone : 0913217661
                email : rashad@glisse.com
            </p>

        </x-info-2>

    </x-info-1>





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








</x-layout>
