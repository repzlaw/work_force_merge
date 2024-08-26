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
                   
                    <form method="POST" action="{{ route('onboarding.about.store') }}">
                        @csrf
                        
                        <div class="sm:col-span-3">
                            <label for="motivation" class="block text-sm font-medium leading-6 text-gray-900">
                                What motivates you towards getting things done?
                            </label>
                            <div class="mt-2">
                            <input type="text" value="{{$user->profile->motivation}}" name="motivation" id="motivation" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            required>
                            </div>
                        </div>

                        <div class="mt-3 sm:col-span-3">
                            <label for="project_links" class="block text-sm font-medium leading-6 text-gray-900">
                                Enter links to previous projects you’ve worked on
                            </label>
                            <div class="mt-2">
                            <textarea rows="5" type="text" name="project_links" id="project_links" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 
                            ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            required>{{$user->profile->project_links}}</textarea>
                            </div>
                        </div>

                        <div class="mt-3 sm:col-span-3">
                            <label for="methodologies" class="block text-sm font-medium leading-6 text-gray-900">
                                What are your methodologies?
                            </label>
                            <div class="mt-2">
                            <textarea rows="5" type="text" name="methodologies" id="methodologies" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 
                            ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            required>{{$user->profile->methodologies}}</textarea>
                            </div>
                        </div>

                        <div class="mt-4 sm:col-span-3">
                            <label for="portfolio_link" class="block text-sm font-medium leading-6 text-gray-900">
                                Portfolio link
                            </label>
                            <div class="mt-2">
                            <input type="text" value="{{$user->profile->portfolio_link}}" name="portfolio_link" id="portfolio_link" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            required>
                            </div>
                        </div>

                        <div class="flex items-center justify-end mt-6 gap-x-6">
                            <a href="{{route('onboarding.skill-category')}}" class="text-sm font-semibold leading-6 text-gray-900">Go back</a>
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
