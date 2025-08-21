<x-guest-layout>
    <div class="flex flex-col items-center justify-center min-h-[80vh] space-y-6">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-gray-800 mb-2">Registro de Usuario</h1>
            <p class="text-gray-600 text-lg">Crea tu cuenta para comenzar a gestionar tus tareas</p>
        </div>

        <form method="POST" action="{{ route('register') }}" class="w-full max-w-md bg-white p-6 rounded-lg shadow space-y-4">
            @csrf

            <!-- Nombre -->
            <div>
                <label for="name" class="block text-gray-700 font-medium mb-1">Nombre</label>
                <input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name"
                    class="block w-full border border-gray-300 bg-white text-gray-900 rounded-md shadow-sm px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400">
                <x-input-error :messages="$errors->get('name')" class="mt-1 text-sm text-red-600" />
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-gray-700 font-medium mb-1">Correo Electrónico</label>
                <input id="email" type="email" name="email" :value="old('email')" required autocomplete="username"
                    class="block w-full border border-gray-300 bg-white text-gray-900 rounded-md shadow-sm px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400">
                <x-input-error :messages="$errors->get('email')" class="mt-1 text-sm text-red-600" />
            </div>

            <!-- Contraseña -->
            <div>
                <label for="password" class="block text-gray-700 font-medium mb-1">Contraseña</label>
                <input id="password" type="password" name="password" required autocomplete="new-password"
                    class="block w-full border border-gray-300 bg-white text-gray-900 rounded-md shadow-sm px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400">
                <x-input-error :messages="$errors->get('password')" class="mt-1 text-sm text-red-600" />
            </div>

            <!-- Confirmar Contraseña -->
            <div>
                <label for="password_confirmation" class="block text-gray-700 font-medium mb-1">Confirmar Contraseña</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password"
                    class="block w-full border border-gray-300 bg-white text-gray-900 rounded-md shadow-sm px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400">
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1 text-sm text-red-600" />
            </div>

            <!-- Botón y enlace a login -->
            <div class="flex items-center justify-between mt-4">
                <a href="{{ route('login') }}" class="text-blue-600 hover:underline text-sm">¿Ya tienes cuenta? Inicia sesión</a>

                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-6 py-2 rounded shadow">
                    Registrarse
                </button>
            </div>
        </form>
    </div>
</x-guest-layout>
