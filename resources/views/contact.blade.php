<x-layout>

    <!-- head page -->

    <!-- Tarifs Page Title -->

    <x-head-page>

        <x-head-h1>

            Contact

        </x-head-h1>

        <x-head-h2>


            Vous pouvez nous contacter pour tout
            <br>
            partenariat commerciale et sponsoria avec nos contact suivant :


        </x-head-h2>

    </x-head-page>




    <x-info-1>


        <x-info-2 class="space-y-4" >

            <p class="font-bold">
                Via notre E-mail principale :
            </p>

            <p>
                email : MG-Glisse@glisse.com
            </p>

            <p class="font-bold mt-2">
                Via nos numeros Whatsapp :
            </p>

            <p>
                telephone 1 : 091 321 7661
                telephone 2 : 094 125 3030
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




    </body>
    </html>



</x-layout>
