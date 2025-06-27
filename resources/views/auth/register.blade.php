<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Type Membership -->
        <div class="mt-4">
            <x-input-label for="role" :value="__('Type Membership')" />
            <select id="role" name="role" class="block mt-1 w-full rounded border-gray-300" required>
                <option value="A" {{ old('role') == 'A' ? 'selected' : '' }}>A</option>
                <option value="B" {{ old('role') == 'B' ? 'selected' : '' }}>B</option>
                <option value="C" {{ old('role') == 'C' ? 'selected' : '' }}>C</option>
            </select>
            <x-input-error :messages="$errors->get('role')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
    <hr class="mt-10">
    <div class="mt-8 text-center">
        <a class="mr-1 rounded bg-blue-600 px-1 py-2 text-white" href="/auth/redirect/google"
            class="btn btn-primary">Register with
            Google</a>
        <a class="rounded bg-blue-600 px-1 py-2 text-white" href="/auth/redirect/facebook"
            class="btn btn-secondary">Register
            with Facebook</a>
    </div>
</x-guest-layout>
