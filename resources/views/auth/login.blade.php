<style>
    .button{
        margin: 0 !important;

    }

    .register-button{
        margin-top: 2px !important;
        border: 1px solid black;
        border-radius: 6px;
        padding: 8px 16px;
        font-size: 14px;
    }

    .register-button:hover{
        border: 1px solid white;
        color: white;
        background-color: #252f3f;
    }
</style>

<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Senha') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>


            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Lembre-se de mim') }}</span>
                </label>
            </div>

            

            <div class="flex mt-4 items-center justify-between">
                <x-jet-button class="button ml-4 self-center">
                    {{ __('Login') }}
                </x-jet-button>

                <a class="button register-button ml-4 self-center" href="{{route('register')}}">
                    Cadastrar
                </a>

             
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
