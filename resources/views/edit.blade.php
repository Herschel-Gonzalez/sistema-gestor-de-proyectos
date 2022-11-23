<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" action="/users/update">
            @csrf
            
            
            <x-text-input class="block mt-1 w-full" type="hidden" name="user_id" :value="$user->id" />

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />

                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$user->name" required autofocus />

                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Paterno -->
            <div>
                <x-input-label for="paterno" :value="__('Paterno')" />

                <x-text-input id="paterno" class="block mt-1 w-full" type="text" name="paterno" :value="$user->paterno" required autofocus />

                <x-input-error :messages="$errors->get('paterno')" class="mt-2" />
            </div>

            <!-- Materno -->
            <div>
                <x-input-label for="materno" :value="__('Materno')" />

                <x-text-input id="materno" class="block mt-1 w-full" type="text" name="materno" :value="$user->materno" required autofocus />

                <x-input-error :messages="$errors->get('materno')" class="mt-2" />
            </div>


            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="$user->email" required />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Tipo -->
            <div>
                <x-input-label for="tipo" :value="__('Tipo')" />

                <x-text-input id="tipo" class="block mt-1 w-full" type="text" name="tipo" :value="$user->tipo" required autofocus />

                <x-input-error :messages="$errors->get('tipo')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
