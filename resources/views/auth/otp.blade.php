<x-guest-layout>
    <form method="POST" action="{{ route('verify-otp') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="request('email', old('email'))" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        
        <!-- OTP -->
        <div class="mt-4">
            <x-input-label for="otp" :value="__('OTP')" />
            <x-text-input id="otp" class="block w-full mt-1" type="text" name="otp" :value="request('otp', old('otp'))" required autofocus autocomplete="otp" />
            <x-input-error :messages="$errors->get('otp')" class="mt-2" />
        </div>
        
        <div class="flex items-center justify-end mt-4">
            <a class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Verify') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
