<div class="left-menu-bar" style="max-width: 320px; width: 320px">
          <div>
            <a href="#"
              ><img src="../src/assets/WFM-logo.svg" alt="WFM-logo"
            /></a>
          </div>
          <div class="flex border border-x-0 py-4 user-details">
            <div class="user-short-name">JD</div>
            <div>
              <div class="capitalize font-bold gray-800 user-name">
              {{ Auth::user()->name }}
              </div>
              <div class="gray-500 text-sm user-email">{{ Auth::user()->email }}</div>
            </div>
          </div>
          <div>
            <p class="gray-500 text-sm">Menu</p>
            <ul class="main-menu">
              <li>
                <a
                  href="{{route('dashboard')}}"
                  class="flex items-center gray-800 capitalize text-sm mb-2 menu-list active"
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
                  class="flex items-center gray-800 capitalize text-sm mb-2 menu-list"
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
                  class="flex items-center gray-800 capitalize text-sm mb-2 menu-list"
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
                  class="flex items-center gray-800 capitalize text-sm mb-2 menu-list"
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
                  class="flex items-center gray-800 capitalize text-sm mb-2 menu-list"
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