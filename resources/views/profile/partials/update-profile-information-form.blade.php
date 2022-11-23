<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">Información del perfil</h2>
        <p class="mt-1 text-sm text-gray-600">Para actualizar tus datos personales contacta a tu supervisor.</p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Nombre')" />
            <x-text-input id="name" name="name" type="text" readonly class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Correo')" />
            <x-text-input id="email" name="email" type="email" readonly class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="email" />
        </div>

        
    </form>
</section>
