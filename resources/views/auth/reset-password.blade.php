<x-guest-layout>
    <div class="flex flex-col items-center justify-center min-h-[80vh] space-y-6">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-gray-800 mb-2">Restablecer Contraseña</h1>
            <p class="text-gray-600 text-lg">Introduce tu nueva contraseña para tu cuenta</p>
        </div>

        <form method="POST" action="{{ route('password.store') }}" class="w-full max-w-md bg-white p-6 rounded-lg shadow space-y-4">
            @csrf

            <!-- Token de Restablecimiento -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Correo Electrónico -->
            <div>
                <label for="email" class="block text-gray-700 font-medium mb-1">Correo Electrónico</label>
                <input id="email" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username"
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

            <!-- Botón -->
            <div class="flex items-center justify-end mt-4">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-6 py-2 rounded shadow">
                    Restablecer Contraseña
                </button>
            </div>
        </form>
    </div>
</x-guest-layout>
