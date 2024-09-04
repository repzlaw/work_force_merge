<x-app-layout>
  <div style="width: 100%">
    <div class="content_box">
      <div class="white-box-top">
        <p class="m-0 text-xl font-medium gray-500">Welcome, {{ Auth::user()->name }}</p>
        <h1 class="mt-6 mb-2 text-4xl font-semibold gray-800">
          Find your next {{$user->profile?->skillCategory?->name}} job!
        </h1>
        <p class="gray-500">
          Explore amazing opportunities from amazing companies!
        </p>
        <div class="input-search-bar">
          <div class="form-control">
            <div class="form-input-icon">
              <input
                type="text"
                name="email"
                id="email"
                class="m-0 form-input"
                placeholder="UX Designer"
              />
              <span class="input_icon input_icon_left"
                ><img src="../src/assets/search-normal.svg" alt=""
              /></span>
            </div>
          </div>
          <div class="form-control">
            <div class="form-input-icon">
              <input
                type="text"
                name="email"
                id="email"
                class="form-input"
                placeholder="UX Designer"
              />
              <span class="input_icon input_icon_left"
                ><img src="../src/assets/search-normal.svg" alt=""
              /></span>
            </div>
          </div>
          <div class="input-search-bar-btn">
            <a href="#" class="btn-blue btn">Search</a>
          </div>
        </div>
      </div>

  
      <div class="white-box-main">
        <div class="white-box-main-container">
          <div class="text-center profile-details">
            <div class="w-full user-details">
              <div class="user-short-name">JD</div>
              <div class="mt-4 font-medium capitalize gray-500">
              {{ Auth::user()->name }}
              </div>
            </div>
            <div class="">
              <a
                href="#"
                class="w-48 mx-auto my-2 btn green-btn round-btn"
                ><img
                  src="../src/assets/briefcase.svg"
                  alt="briefcase"
                  class="mr-4"
                />
                Available for work</a
              >
            </div>
            <h3 class="text-2xl font-semibold">{{$user->profile?->skillCategory?->name}}</h3>
            <div class="flex justify-center">
              <ul class="switch-tabs">
                <li class="active">overview</li>
                <li>about</li>
              </ul>
            </div>
          </div>

          @if(isset($user->profile) && $user->profile->stage < 5)

            <div class="w-1/2 px-4 py-6 mx-auto setup_profile-box ">
              <h6 class="mb-2 text-xl font-medium">Setup your profile</h6>
              <p class="mb-4 text-sm gray-400">
                Completing your profile gives you the opportunity to apply
                for jobs and gives us the opportunity to understand your
                career preferences and best suited matches.
              </p>
              <a
                href="/onboarding"
                class="font-bold btn btn-blue btn-dark-blue round-btn"
                >Setup your profile
                <img src="../src/assets/arrow-right.svg" alt="arrow"
              /></a>
            </div>
          @endif
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
