<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    @vite(['resources/js/app.js'])
    @vite(['resources/css/app.css'])
    <title>Glisse</title>
</head>
<body class="bg-stone-100 mb-54">

<main>

<div class="flex flex-col items-center justify-center py-32 text-center space-y-8 ">

    <div class="flex items-center justify-between px-6 mb-6  sm:space-x-22 lg:space-x-32">

        <a href="/"
           class="-ml-64 bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded-md transition">
            ← Aceuille
        </a>

        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-gray-800">

            Log In

        </h1>

    </div>


    <div class="space-y-2">

        <h2 class="text-lg text-green-600 font-extrabold">
            Acceder a votre compte Glisse ,
            <br>
            et glissez a une vitesse BIO !
        </h2>

    </div>

</div>

<x-form class="p-12" >

    <div>

        <label
            for="email" class="block text-white font-semibold mb-1">Your Email</label>
        <input id="email" name="email" class="w-full border border-black rounded-md p-2">

    </div>

    <div>

        <label for="password" class="block text-white font-semibold mb-1"> Your Password</label>
        <input id="password" name="password" class="w-full border border-black rounded-md p-2">

    </div>

    <!-- Submit -->

    <button type="submit"
            class="w-full bg-stone-100 hover:bg-green-700 text-green-600 hover:text-white font-semibold py-2 px-4 rounded-md transition">
        Log In !
    </button>

    <div class="mt-6" >

        <p> Tu n'as pas encore un compte Glisse ? <a class="text-stone-100 hover:text-stone-200" href="/sign-in">Sign In !</a></p>

    </div>

</x-form>


</main>`

</body>
