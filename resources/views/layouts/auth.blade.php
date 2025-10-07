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
        <div class="w-[300px] bg-[#1F3C88] text-white p-4 flex flex-col shadow-lg relative lg:relative lg:translate-x-0 transition-transform duration-300 ease-in-out"
            id="sidebar">
            <!-- Logo/Header -->
            <div class="pb-4">
                <div class="text-left justify-start text-white text-2xl font-extrabold  leading-loose tracking-widest">
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


                    <!-- Payments -->
                    <a href="{{ route('pages.payments') }}"
                        class="flex items-center px-4 py-3 {{ Request::routeIs('pages.payments') ? 'bg-white' : '' }} text-gray-200 hover:bg-white hover:text-black rounded transition-colors duration-200 group">
                        <div class="w-6 h-6 mr-4 flex items-center justify-center">
                            <img src="{{ asset('images/briefcase.svg') }}"
                                class="{{ Request::routeIs('pages.payments') ? 'hidden' : 'block' }} group-hover:hidden" />
                            <img src="{{ asset('images/black-briefcase.svg') }}"
                                class="{{ Request::routeIs('pages.payments') ? 'block' : 'hidden' }} group-hover:block" />
                        </div>
                        <span
                            class="{{ Request::routeIs('pages.payments') ? 'text-black' : 'text-white' }} group-hover:text-black text-base font-semibold leading-normal">Payments</span>
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

                    <a href="{{ route('pages.support') }}"
                        class="flex items-center px-4 py-3 {{ Request::routeIs('pages.support') ? 'bg-white' : '' }} text-gray-200 hover:bg-white hover:text-black rounded transition-colors duration-200 group">
                        <div class="w-6 h-6 mr-4 flex items-center justify-center">
                            <img src="{{ asset('images/FileText.svg') }}"
                                class="{{ Request::routeIs('pages.support') ? 'hidden' : 'block' }} group-hover:hidden" />
                            <img src="{{ asset('images/black-FileText.svg') }}"
                                class="{{ Request::routeIs('pages.support') ? 'block' : 'hidden' }} group-hover:block" />
                        </div>
                        <span
                            class="{{ Request::routeIs('pages.support') ? 'text-black' : 'text-white' }} group-hover:text-black text-base font-semibold leading-normal">Support</span>
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
        <div class="flex-1 flex flex-col min-w-0 ">
            <!-- Main Content Area -->
            @yield('content')
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.0/chart.umd.min.js"></script>


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

    @stack('scripts')
</body>

</html>
