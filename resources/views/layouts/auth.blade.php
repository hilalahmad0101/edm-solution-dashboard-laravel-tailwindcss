<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDM Solution - @yield('title')</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body class="bg-[#F4F5F7] font-sans overflow-hidden">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-[300px] bg-[#1F3C88] text-white px-[28px] py-[48px] flex flex-col shadow-lg relative lg:relative lg:translate-x-0 transition-transform duration-300 ease-in-out"
            id="sidebar">
            <!-- Logo/Header -->
            <div class="mb-10">
                <div
                    class="text-center justify-start text-white text-2xl font-extrabold  leading-loose tracking-widest">
                    EDM Solution</div>
            </div>

            <!-- Navigation Menu -->
            <nav class="flex-1">
                <div class="space-y-4">
                    <!-- Dashboard -->
                    <a href="{{ route('pages.dashboard') }}"
                        class="flex items-center px-4 py-3 {{ Request::routeIs('pages.dashboard') ? 'bg-white' : '' }} text-gray-200 hover:bg-white hover:text-black rounded transition-colors duration-200 group">
                        <div class="w-6 h-6 mr-4 flex items-center justify-center">
                            <img src="{{ asset('images/Overview.svg') }}"
                                class="{{ Request::routeIs('pages.dashboard') ? 'hidden' : 'block' }} group-hover:hidden" />
                            <img src="{{ asset('images/black-Overview.svg') }}"
                                class="{{ Request::routeIs('pages.dashboard') ? 'block' : 'hidden' }} group-hover:block" />
                        </div>
                        <span
                            class="{{ Request::routeIs('pages.dashboard') ? 'text-black' : 'text-white' }} group-hover:text-black text-base font-semibold leading-normal">Dashboard</span>
                    </a>

                    <!-- User -->
                    <a href="{{ route('pages.user') }}"
                        class="flex items-center px-4 py-3 {{ Request::routeIs('pages.user') ? 'bg-white' : '' }} text-gray-200 hover:bg-white hover:text-black rounded transition-colors duration-200 group">
                        <div class="w-6 h-6 mr-4 flex items-center justify-center">
                            <img src="{{ asset('images/User.svg') }}"
                                class="{{ Request::routeIs('pages.user') ? 'hidden' : 'block' }} group-hover:hidden" />
                            <img src="{{ asset('images/black-User.svg') }}"
                                class="{{ Request::routeIs('pages.user') ? 'block' : 'hidden' }} group-hover:block" />
                        </div>
                        <span
                            class="{{ Request::routeIs('pages.user') ? 'text-black' : 'text-white' }} group-hover:text-black text-base font-semibold leading-normal">User</span>
                    </a>

                    <!-- Credentials -->
                    <a href="{{ route('pages.credential') }}"
                        class="flex items-center px-4 py-3 {{ Request::routeIs('pages.credential') ? 'bg-white' : '' }} text-gray-200 hover:bg-white hover:text-black rounded transition-colors duration-200 group">
                        <div class="w-6 h-6 mr-4 flex items-center justify-center">
                            <img src="{{ asset('images/Transaction.svg') }}"
                                class="{{ Request::routeIs('pages.credential') ? 'hidden' : 'block' }} group-hover:hidden" />
                            <img src="{{ asset('images/black-Transaction.svg') }}"
                                class="{{ Request::routeIs('pages.credential') ? 'block' : 'hidden' }} group-hover:block" />
                        </div>
                        <span
                            class="{{ Request::routeIs('pages.credential') ? 'text-black' : 'text-white' }} group-hover:text-black text-base font-semibold leading-normal">Credentials</span>
                    </a>

                    <!-- Shifts -->
                    <a href="{{ route('pages.shifts') }}"
                        class="flex items-center px-4 py-3 {{ Request::routeIs('pages.shifts') ? 'bg-white' : '' }} text-gray-200 hover:bg-white hover:text-black rounded transition-colors duration-200 group">
                        <div class="w-6 h-6 mr-4 flex items-center justify-center">
                            <img src="{{ asset('images/briefcase.svg') }}"
                                class="{{ Request::routeIs('pages.shifts') ? 'hidden' : 'block' }} group-hover:hidden" />
                            <img src="{{ asset('images/black-briefcase.svg') }}"
                                class="{{ Request::routeIs('pages.shifts') ? 'block' : 'hidden' }} group-hover:block" />
                        </div>
                        <span
                            class="{{ Request::routeIs('pages.shifts') ? 'text-black' : 'text-white' }} group-hover:text-black text-base font-semibold leading-normal">Shifts</span>
                    </a>

                    <!-- Facility -->
                    <a href="{{ route('pages.facilities') }}"
                        class="flex items-center px-4 py-3 {{ Request::routeIs('pages.facilities') ? 'bg-white' : '' }} text-gray-200 hover:bg-white hover:text-black rounded transition-colors duration-200 group">
                        <div class="w-6 h-6 mr-4 flex items-center justify-center">
                            <img src="{{ asset('images/UsersFour.svg') }}"
                                class="{{ Request::routeIs('pages.facilities') ? 'hidden' : 'block' }} group-hover:hidden" />
                            <img src="{{ asset('images/black-UsersFour.svg') }}"
                                class="{{ Request::routeIs('pages.facilities') ? 'block' : 'hidden' }} group-hover:block" />
                        </div>
                        <span
                            class="{{ Request::routeIs('pages.facilities') ? 'text-black' : 'text-white' }} group-hover:text-black text-base font-semibold leading-normal">Facility</span>
                    </a>

                    <a href="{{ route('pages.reports') }}"
                        class="flex items-center px-4 py-3 {{ Request::routeIs('pages.reports') ? 'bg-white' : '' }} text-gray-200 hover:bg-white hover:text-black rounded transition-colors duration-200 group">
                        <div class="w-6 h-6 mr-4 flex items-center justify-center">
                            <img src="{{ asset('images/FileText.svg') }}"
                                class="{{ Request::routeIs('pages.reports') ? 'hidden' : 'block' }} group-hover:hidden" />
                            <img src="{{ asset('images/black-FileText.svg') }}"
                                class="{{ Request::routeIs('pages.reports') ? 'block' : 'hidden' }} group-hover:block" />
                        </div>
                        <span
                            class="{{ Request::routeIs('pages.reports') ? 'text-black' : 'text-white' }} group-hover:text-black text-base font-semibold leading-normal">Report</span>
                    </a>
                </div>
            </nav>

            <!-- Logout Button -->
            <div class="py-4">
                <button onclick="window.location.href='{{ route('pages.login') }}'"
                    class="flex cursor-pointer items-center px-4 py-3 opacity-75 bg-white/10 rounded transition-colors duration-200 w-full">
                    <div class="w-6 h-6 mr-4 flex items-center justify-center">
                        <img src="{{ asset('images/logout.svg') }}" />
                    </div>
                    <span
                        class="text-white group-hover:text-black text-base font-semibold  leading-normal">Logout</span>
                </button>
            </div>

            <!-- User Info at Bottom -->
            <div class="p-4 bg-opacity-50">
                <div class=" text-white text-base font-semibold leading-normal">Alexander Smith</div>

            </div>
        </div>

        <!-- Mobile overlay -->
        <div class="fixed inset-0 bg-black bg-opacity-50 z-40 lg:hidden hidden" id="sidebar-overlay"></div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col min-w-0">
            <!-- Header -->
            <header class=" border-b border-gray-200 px-4 lg:px-6 py-5">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-4">
                        <!-- Mobile menu button -->
                        <button
                            class="lg:hidden p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500"
                            id="mobile-menu-button">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>

                        <div class="flex items-center space-x-2">
                            <div class=" text-zinc-900 text-2xl font-bold  leading-7">
                                Welcome</div>

                            <img src="{{ asset('images/right-arrow.svg') }}" alt="right arrow" class="ml-8" />
                            <div class="justify-start text-zinc-950 text-sm font-normal leading-tight">
                                May 19, 2025</div>
                        </div>
                    </div>

                    <div class="flex items-center space-x-3">
                        <img src="{{ asset('images/notification.svg') }}" alt="notification" />
                        <div class="relative hidden sm:block ml-6">
                            <div
                                class="pl-8 w-[400px] pr-6 py-3 bg-white rounded-xl shadow-[0px_26px_26px_0px_rgba(106,22,58,0.04)]">
                                <input type="text" placeholder="Search here" class="outline-none w-full pr-6">
                                <div class="absolute right-3 top-1/2 transform -translate-y-1/2">
                                    <img src="{{ asset('images/search.svg') }}" />
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </header>

            <!-- Main Content Area -->
            @yield('content')
        </div>
    </div>

    <script>
        // Mobile menu functionality
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const sidebar = document.getElementById('sidebar');
        const sidebarOverlay = document.getElementById('sidebar-overlay');

        function toggleMobileMenu() {
            sidebar.classList.toggle('-translate-x-full');
            sidebarOverlay.classList.toggle('hidden');
        }

        mobileMenuButton.addEventListener('click', toggleMobileMenu);
        sidebarOverlay.addEventListener('click', toggleMobileMenu);

        // Close mobile menu on window resize
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 1024) {
                sidebar.classList.remove('-translate-x-full');
                sidebarOverlay.classList.add('hidden');
            }
        });
    </script>
</body>

</html>
