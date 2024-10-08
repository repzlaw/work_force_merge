<div class="left-menu-bar" style="max-width: 320px; width: 320px">
          <div>
            <a href="/dashboard"
              ><img src="../src/assets/WFM-logo.svg" alt="WFM-logo"
            /></a>
          </div>
          <div class="flex py-4 border border-x-0 user-details">
            <div class="user-short-name">JD</div>
            <div>
              <div class="font-bold capitalize gray-800 user-name">
              {{ Auth::user()->name }}
              </div>
              <div class="text-sm gray-500 user-email">{{ Auth::user()->email }}</div>
            </div>
          </div>
          <div>
            <p class="text-sm gray-500">Menu</p>
            <ul class="main-menu">
              <li>
                <a
                  href="{{route('dashboard')}}"
                  class="flex items-center mb-2 text-sm capitalize gray-800 menu-list active"
                  ><img
                    src="../src/assets/home.svg"
                    alt="home"
                    class="mr-1"
                  />dashboard</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="flex items-center mb-2 text-sm capitalize gray-800 menu-list"
                  ><img
                    src="../src/assets/search-normal.svg"
                    alt="home"
                    class="mr-1"
                  />search job</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="flex items-center mb-2 text-sm capitalize gray-800 menu-list"
                  ><img
                    src="../src/assets/send.svg"
                    alt="home"
                    class="mr-1"
                  />my application</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="flex items-center mb-2 text-sm capitalize gray-800 menu-list"
                  ><img
                    src="../src/assets/messages.svg"
                    alt="home"
                    class="mr-1"
                  />message</a
                >
              </li>
              <li>
                <a
                  href="{{route('profile.edit')}}"
                  class="flex items-center mb-2 text-sm capitalize gray-800 menu-list"
                  ><img
                    src="../src/assets/profile.svg"
                    alt="home"
                    class="mr-1"
                  />profile</a
                >
              </li>
              <li>
                   <!-- Authentication -->
                   <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
</li>
            </ul>
          </div>
        </div>