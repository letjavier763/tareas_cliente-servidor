<x-guest-layout>
    <div class="flex items-center justify-center min-h-screen bg-gray-50">
        <div class="bg-white p-10 rounded-xl shadow-md w-full max-w-md">
            <h1 class="text-3xl font-bold text-gray-800 text-center mb-6">Iniciar Sesión</h1>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}" class="space-y-4">
                @csrf

                <!-- Correo Electrónico -->
                <div>
                    <x-input-label for="email" :value="__('Correo Electrónico')" />
                    <x-text-input id="email" class="block mt-1 w-full border-gray-300 bg-white text-gray-900 rounded-md shadow-sm focus:ring-blue-400 focus:border-blue-400"
                        type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-red-600" />
                </div>

                <!-- Contraseña -->
                <div>
                    <x-input-label for="password" :value="__('Contraseña')" />
                    <x-text-input id="password" class="block mt-1 w-full border-gray-300 bg-white text-gray-900 rounded-md shadow-sm focus:ring-blue-400 focus:border-blue-400"
                        type="password" name="password" required autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm text-red-600" />
                </div>

                <!-- Recordarme -->
                <div class="flex items-center">
                    <input id="remember_me" type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded" name="remember">
                    <label for="remember_me" class="ml-2 block text-sm text-gray-700">
                        Recuérdame
                    </label>
                </div>

                <!-- Acciones -->
                <div class="flex flex-col sm:flex-row items-center justify-between mt-4">
                    @if (Route::has('password.request'))
                        <a class="text-sm text-blue-600 hover:underline mb-2 sm:mb-0" href="{{ route('password.request') }}">
                            ¿Olvidaste tu contraseña?
                        </a>
                    @endif

                    <x-primary-button class="w-full sm:w-auto px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded shadow">
                        Iniciar Sesión
                    </x-primary-button>
                </div>
            </form>

            @if (Route::has('register'))
            <div class="mt-6 text-center text-gray-600 text-sm">
                ¿No tienes cuenta? 
                <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Regístrate</a>
            </div>
            @endif
        </div>
    </div>
</x-guest-layout>
