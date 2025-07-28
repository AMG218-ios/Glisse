<form {{ $attributes->merge([ 'class' => 'bg-green-600  rounded-lg shadow-lg space-y-6 max-w-md mx-auto' ]) }} >

    {{ $slot }}

</form>
