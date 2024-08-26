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
                   
                    <form method="POST" action="{{ route('onboarding.skill-category.store') }}">
                        @csrf
                        
                        <div class="sm:col-span-3">
                            <label for="skill_category" class="block text-sm font-medium leading-6 text-gray-900">What are your interested in?</label>
                            <div class="mt-2">
                                <select id="skill_category" name="skill_category" autocomplete="skill_category-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6"
                                required>
                                    <option value="">select one</option>
                                    @foreach($skillCategories as $category)
                                        <option value="{{ $category->id }}" {{ $category->id == $user->profile->skill_category_id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="flex items-center justify-end mt-6 gap-x-6">
                            <a href="{{route('dashboard')}}" class="text-sm font-semibold leading-6 text-gray-900">Go back</a>
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
