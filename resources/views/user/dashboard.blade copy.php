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

                    <div class="my-5">
                      <h1>Indicate your expression of interest by applying for these roles.</h1>
                    </div>

                    <div class="relative flex flex-col items-center justify-center overflow-hidden">
                    
                      @foreach ( $jobs as $key => $job)
                       <div>
                          <p></p>
                       </div>
                      @endforeach
                      <div class="flex flex-col justify-between w-full gap-3 px-5 py-4 mt-5 bg-white rounded-md shadow-sm max-w-1xl shadow-gray-100 sm:flex-row sm:items-center">
                        <div>
                          <span class="text-sm text-purple-800">Engineering</span>
                          <h3 class="mt-px font-bold text-purple-800">Senior Full Stack Backend Engineer</h3>
                          <div class="flex items-center gap-3 mt-2">
                            <span class="px-3 py-1 text-sm text-purple-700 bg-purple-100 rounded-full">Full-time</span>
                            <span class="flex items-center gap-1 text-sm text-slate-600"> 
                              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                              </svg> Remote, UK</span>
                          </div>
                        </div>
                        <div>
                          <button class="flex items-center gap-1 px-4 py-2 font-medium text-white bg-purple-900 rounded-md">Apply Now <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                            </svg>
                          </button>
                        </div>
                      </div>
                      
                      <div class="flex flex-col justify-between w-full gap-3 px-5 py-4 mt-5 bg-white rounded-md shadow-sm max-w-1xl shadow-gray-100 sm:flex-row sm:items-center">
                        <div>
                          <span class="text-sm text-purple-800">Design</span>
                          <h3 class="mt-px font-bold text-purple-800">UI/UX Designer</h3>
                          <div class="flex items-center gap-3 mt-2">
                            <span class="px-3 py-1 text-sm text-purple-700 bg-purple-100 rounded-full">Full-time</span>
                            <span class="flex items-center gap-1 text-sm text-slate-600"> 
                              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                              </svg> Onsite, Germany</span>
                          </div>
                        </div>
                        <div>
                          <button class="flex items-center gap-1 px-4 py-2 font-medium text-white bg-purple-900 rounded-md">Apply Now <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                            </svg>
                          </button>
                        </div>
                      </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
