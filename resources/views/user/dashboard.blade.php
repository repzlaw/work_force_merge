<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if($user->profile->stage < 5)
                    <div class="p-4 rounded-md bg-yellow-50">
                        <div class="flex">
                          <div class="flex-shrink-0">
                            <svg class="w-5 h-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd" d="M8.485 2.495c.673-1.167 2.357-1.167 3.03 0l6.28 10.875c.673 1.167-.17 2.625-1.516 2.625H3.72c-1.347 0-2.189-1.458-1.515-2.625L8.485 2.495zM10 5a.75.75 0 01.75.75v3.5a.75.75 0 01-1.5 0v-3.5A.75.75 0 0110 5zm0 9a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                            </svg>
                          </div>
                          <div class="ml-3">
                            <h3 class="text-sm font-medium text-yellow-800">Attention needed</h3>
                            <div class="mt-2 text-sm text-yellow-700">
                                <p class="font-bold">Please complete your profile to apply for jobs</p>
                                <a href="/onboarding">Click here to complete profile</a>
                            </div>
                          </div>
                        </div>
                    </div>
                      
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
