<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Onboarding') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-100 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h4 class="mb-4 text-gray-900">What is your expected salary?</h4>
                    <form method="POST" action="{{ route('onboarding.salary.store') }}">
                        @csrf
                        
                        <div class="sm:col-span-3">
                            <div class="mt-2">
                                <select id="type" name="type" autocomplete="type-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6"
                                required>
                                    <option value="Monthly" {{ 'Monthly' == $user->salary?->type ? 'selected' : '' }}>Monthly</option>
                                    <option value="Hourly" {{ 'Hourly' == $user->salary?->type ? 'selected' : '' }}>Hourly</option>
                                    <option value="Annually" {{ 'Annually' == $user->salary?->type ? 'selected' : '' }}>Annually</option>
                                </select>
                            </div>
                        </div>

                        <div class="mt-4 sm:col-span-3">
                            <div class="mt-2">
                                <select id="currency" name="currency" autocomplete="currency" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6"
                                required>
                                    <option value="USD" {{ 'USD' == $user->salary?->currency ? 'selected' : '' }}>USD</option>
                                    <option value="NGN" {{ 'NGN' == $user->salary?->currency ? 'selected' : '' }}>NGN</option>
                                    <option value="EUR" {{ 'EUR' == $user->salary?->currency ? 'selected' : '' }}>EUR</option>
                                </select>
                            </div>
                        </div>

                        <div class="mt-4 sm:col-span-3">
                            <div class="mt-2">
                                <input type="number" value="{{$user->salary?->amount}}" name="amount" placeholder="amount" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6"
                                required />
                            </div>
                        </div>

                        <div class="flex items-center justify-end mt-6 gap-x-6">
                            <a href="{{route('onboarding.about')}}" class="text-sm font-semibold leading-6 text-gray-900">Go back</a>
                            <button type="submit" class="px-3 py-2 text-sm font-semibold text-white bg-indigo-600 rounded-md shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                Continue
                            </button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
