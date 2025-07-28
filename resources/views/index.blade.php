<x-layout>

    <!--head first page -->

    <div class="mt-5 ml-8">
        <section class="flex px-6 md:px-16 lg:px-20 xl:px-24 2xl:px-18 py-16">

            <div>
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-gray-800">
                    Location de vélos<br />
                    et trottinettes
                </h1>
                <p class="mt-6 text-base sm:text-lg md:text-xl text-gray-700 max-w-xl">
                    Découvrez la ville avec notre gamme<br class="hidden sm:inline" />
                    de vélos et trottinettes disponibles à la location.
                </p>

            </div>

            <!-- Find a vehicule button -->

            <div class="ml-5 mt-32">
                <a href="/tarifs"
                   class="bg-green-600 hover:bg-green-700 text-white font-semibold
              py-3 px-3 lg:py-4 lg:px-4
              rounded-full shadow
              whitespace-nowrap
              text-sm sm:text-base lg:text-lg
              transition-all duration-300">
                    Reserver Maintenant
                </a>
            </div>


            <!-- Bicycle image -->
            <img
                src="{{ asset('images/Mint Green Classic Bicycle Profile.png') }}"
                alt="Classic Bicycle"
                class="absolute right-1  sm:mr-44 md:22
                 lg:mr-1 bottom-44 w-[270px] md:w-[370px] lg:w-[470px] 2xl:w-[570px] z-0 pointer-events-none select-none transition-all duration-300 "
            />


        </section>

        <!-- Features Section -->
        <section class="mb-16  sm:mt-32  lg:mt-10">
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-8">
                <!-- Large Choix -->
                <x-info-1>
                    <img src="{{ asset('images/icons8-bicycle-100.png') }}"
                         alt="bike logo"
                         class="w-10 mb-4">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Large Choix</h3>
                    <p class="text-gray-600">Choisissez parmi une variété de vélos et trottinettes pour répondre à vos besoins.</p>
                </x-info-1>

                <!-- Tarifs Abordables -->
                <x-info-1>
                    <img src="{{ asset('images/icons8-euro-100.png') }}"
                         alt="euro logo"
                         class="w-10 mb-4">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Tarifs Abordables</h3>
                    <p class="text-gray-600">Profitez de tarifs compétitifs sans frais cachés.</p>
                </x-info-1>

                <!-- Emplacements Pratiques -->
                <x-info-1>
                    <img src="{{ asset('images/icons8-location-100.png') }}"
                         alt="location logo"
                         class="w-10 mb-4">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Emplacements Pratiques</h3>
                    <p class="text-gray-600">Trouvez et louez des vélos ou trottinettes aux emplacements dans toute la ville.</p>
                </x-info-1>
            </div>
        </section>



    </div>

</x-layout>
