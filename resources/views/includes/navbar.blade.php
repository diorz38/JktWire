<nav class="bg-white border-b border-gray-300">
    <div class="flex items-center justify-between flex-wrap mx-auto max-w-screen-xl">
        <div class="flex items-center mx-2 py-3 md:py-0">
            <div class="flex items-center">
                <button class="md:hidden mx-3">
                    <i class="text-2xl bx bx-menu"></i>
                </button>
                <a href="{{ route('home') }}" class="font-bold text-xl pr-6">Pemetaan<span class="text-gray-500 font-normal">ST2023</span></a>
            </div>
            <ul class="text-sm font-normal hidden md:flex">
                <li class="mx-3 py-4 font-medium text-green-500 border-b-2 border-green-500">
                    <a href="{{ route('home') }}" class="inline-flex items-center">
                        <i class="bx bx-home mr-1"></i>
                        Home
                    </a>
                </li>
                <li class="mx-3 py-4 text-gray-600 hover:text-gray-900 inline-block relative text-left">
                    <a href="#" class="inline-flex text-sm items-center text-gray-600 dropdown-toggle"
                        data-dropdown="dropdownMenuDashboard">
                        <i class="bx bx-pie-chart-alt mr-1"></i>
                        <span>Dashboard</span>
                        <i class="bx bx-chevron-down ml-1"></i>
                    </a>

                    <div class="origin-top-right absolute right-0 mt-3 z-10 w-40 rounded-md shadow-lg hidden"
                        id="dropdownMenuDashboard">
                        <div class="rounded-md bg-white shadow-xs" role="menu" aria-orientation="vertical"
                            aria-labelledby="options-menu">
                            <div class="py-1">
                                <a href="./../index.html"
                                    class="block px-3 py-2 text-sm leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Dashboard
                                    v1</a>
                                <a href="#"
                                    class="block px-3 py-2 text-sm leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Dashboard
                                    v2</a>
                                <a href="#"
                                    class="block px-3 py-2 text-sm leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Dashboard
                                    v3</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="mx-3 py-4 text-gray-600 hover:text-gray-900 relative inline-block text-left">
                    <a href="#" class="inline-flex items-center dropdown-toggle" data-dropdown="uiComponentMenu">
                        <i class="bx bx-outline mr-1"></i>
                        <span>UI Component</span>
                        <i class="bx bx-chevron-down ml-1"></i>
                    </a>

                    <div class="origin-top-right absolute right-0 mt-3 z-10 w-40 rounded-md shadow-lg hidden"
                        id="uiComponentMenu">
                        <div class="rounded-md bg-white shadow-xs" role="menu" aria-orientation="vertical"
                            aria-labelledby="options-menu">
                            <div class="py-1">
                                <a href="{{ route('ui.form') }}"
                                    class="block px-3 py-2 text-sm leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Form</a>
                                <a href="{{ route('ui.card') }}"
                                    class="block px-3 py-2 text-sm leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Card</a>
                                <a href="#"
                                    class="block px-3 py-2 text-sm leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Chart</a>
                                <a href="{{ route('ui.button') }}"
                                    class="block px-3 py-2 text-sm leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Buttons</a>
                                <a href="#"
                                    class="block px-3 py-2 text-sm leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Dropdown</a>
                                <a href="#"
                                    class="block px-3 py-2 text-sm leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Navbar</a>
                                <a href="#"
                                    class="block px-3 py-2 text-sm leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Maps</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="mx-3 py-4 text-gray-600 hover:text-gray-900 relative inline-block text-left">
                    <a href="#" class="inline-flex items-center dropdown-toggle" data-dropdown="pagesNav">
                        <i class="bx bx-book mr-1"></i>
                        <span>Pages</span>
                        <i class="bx bx-chevron-down ml-1"></i>
                    </a>

                    <div class="origin-top-right absolute right-0 mt-3 z-10 w-40 rounded-md shadow-lg hidden"
                        id="pagesNav">
                        <div class="rounded-md bg-white shadow-xs" role="menu" aria-orientation="vertical"
                            aria-labelledby="options-menu">
                            <div class="py-1">
                                <a href="#"
                                    class="block px-3 py-2 text-sm leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Login</a>
                                <a href="#"
                                    class="block px-3 py-2 text-sm leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Register</a>
                                <a href="#"
                                    class="block px-3 py-2 text-sm leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">User
                                    Profile</a>
                                <a href="#"
                                    class="block px-3 py-2 text-sm leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">User
                                    Settings</a>
                                <a href="#"
                                    class="block px-3 py-2 text-sm leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Blog</a>
                                <a href="#"
                                    class="block px-3 py-2 text-sm leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Timeline</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="mx-3 py-4 text-gray-600 hover:text-gray-900 relative inline-block text-left">
                    <a href="#" class="inline-flex items-center dropdown-toggle" data-dropdown="layoutNav"><i
                            class="bx bx-dock-right mr-1"></i>
                        <span> Layout</span>
                        <i class="bx bx-chevron-down ml-1"></i></a>

                    <div class="origin-top-right absolute right-0 mt-3 z-10 w-40 rounded-md shadow-lg hidden"
                        id="layoutNav">
                        <div class="rounded-md bg-white shadow-xs" role="menu" aria-orientation="vertical"
                            aria-labelledby="options-menu">
                            <div class="py-1">
                                <a href="#"
                                    class="block px-3 py-2 text-sm leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Vertical</a>
                                <a href="#"
                                    class="block px-3 py-2 text-sm leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Vertical
                                    fluid</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <div class="flex items-center">
            @auth
            <button class="mt-1 relative mx-2">
                <i class="bx bx-bell text-xl text-gray-600"></i>
                <span aria-hidden="true"
                    class="absolute top-0 right-0 inline-block w-3 h-3 transform translate-x-1 -translate-y-1 bg-red-600 border-2 border-white rounded-full dark:border-gray-800"></span>
            </button>
            <div class="inline-block relative text-left">
                <a class="flex items-center mx-2 dropdown-toggle" href="" data-dropdown="dropDownMenu">
                    <img class="w-8 h-8 mr-3 rounded-full object-cover" src="{{ asset('jakarta/avatar/nis.png') }}"
                        alt="Avatar" />
                    <div class="mt-1 hidden md:block">
                        <div class="leading-3 text-sm text-gray-700">
                            {{ Auth::user()->name }}
                        </div>
                        <small class="text-xs text-gray-500">{{ Auth::user()->email }}</small>
                    </div>
                </a>

                <div class="origin-top-right absolute right-0 mt-3 z-56 w-56 rounded-md shadow-lg hidden"
                    id="dropDownMenu">
                    <div class="rounded-md bg-white shadow-xs" role="menu" aria-orientation="vertical"
                        aria-labelledby="options-menu">
                        <div class="py-1">
                            <a href="#"
                                class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900"
                                role="menuitem">Settings</a>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900"
                                role="menuitem">Logout</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            @else
            <div class="mx-2">
                @if (Route::has('login'))
                <a href="{{ route('login') }}"
                    class="px-2 py-1 border text-sm mx-1 border-transparent rounded bg-blue-500 text-white hover:bg-blue-400 focus:outline-none focus:border-blue-500 focus:shadow-outline-blue active:bg-blue-500 transition duration-150 ease-in-out inline-flex items-center">
                    <i class="bx bx-log-in-circle text-white mr-2 text-base"></i>
                    LogIn
                </a>
                {{-- <a href="{{ route('login') }}"
                    class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">Log
                    in</a> --}}
                @endif

                @if (Route::has('register'))
                <a href="{{ route('register') }}"
                class="px-2 py-1 border text-sm mx-1 border-transparent rounded bg-indigo-500 text-white hover:bg-indigo-400 focus:outline-none focus:border-indigo-500 focus:shadow-outline-indigo active:bg-indigo-500 transition duration-150 ease-in-out inline-flex items-center">
                <i class="bx bx-group text-white mr-2 text-base"></i>
                    Register
                </a>
                @endif
            </div>

            @endauth
        </div>
    </div>
</nav>
