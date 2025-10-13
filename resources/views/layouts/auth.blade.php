{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDM Solution - @yield('title')</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body class="bg-gradient-to-br from-gray-50 to-gray-100 font-sans overflow-hidden">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="fixed lg:relative w-[280px] bg-gradient-to-b from-gray-900 via-gray-800 to-gray-900 text-white p-4 flex flex-col shadow-2xl z-50 h-full -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out"
            id="sidebar">
            <!-- Close button for mobile -->
            <button class="lg:hidden absolute top-4 right-4 text-white hover:text-gray-300 transition-colors"
                id="close-sidebar">
                <i class="fas fa-times text-2xl"></i>
            </button>

            <!-- Logo/Header -->
            <div class="pb-6 border-b border-white/10">
                <div
                    class="text-left text-white text-2xl font-extrabold leading-loose tracking-wide flex items-center gap-3">
                    <div
                        class="w-10 h-10 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-lg flex items-center justify-center">
                        <span class="text-xl">🏥</span>
                    </div>
                    <span>EDM Solution</span>
                </div>
            </div>

            <!-- Navigation Menu -->
            <nav class="flex-1 overflow-y-auto mt-6">
                <div class="space-y-2">
                    <!-- Dashboard -->
                    <a href="{{ route('pages.dashboard') }}"
                        class="flex items-center px-4 py-3 {{ Request::routeIs('pages.dashboard') ? 'bg-gradient-to-r from-blue-600 to-indigo-600 shadow-lg' : 'hover:bg-white/5' }} text-gray-200 rounded-xl transition-all duration-200 group">
                        <div class="w-6 h-6 mr-4 flex items-center justify-center">
                            <img src="{{ asset('images/Overview.svg') }}"
                                class="{{ Request::routeIs('pages.dashboard') ? 'hidden' : 'block' }} group-hover:hidden" />
                            <img src="{{ asset('images/black-Overview.svg') }}"
                                class="{{ Request::routeIs('pages.dashboard') ? 'block' : 'hidden' }} group-hover:block" />
                        </div>
                        <span
                            class="{{ Request::routeIs('pages.dashboard') ? 'text-white font-bold' : 'text-gray-300' }} group-hover:text-white text-base leading-normal">Dashboard</span>
                    </a>

                    <!-- User -->
                    <a href="{{ route('pages.user') }}"
                        class="flex items-center px-4 py-3 {{ Request::routeIs('pages.user') ? 'bg-gradient-to-r from-blue-600 to-indigo-600 shadow-lg' : 'hover:bg-white/5' }} text-gray-200 rounded-xl transition-all duration-200 group">
                        <div class="w-6 h-6 mr-4 flex items-center justify-center">
                            <img src="{{ asset('images/User.svg') }}"
                                class="{{ Request::routeIs('pages.user') ? 'hidden' : 'block' }} group-hover:hidden" />
                            <img src="{{ asset('images/black-User.svg') }}"
                                class="{{ Request::routeIs('pages.user') ? 'block' : 'hidden' }} group-hover:block" />
                        </div>
                        <span
                            class="{{ Request::routeIs('pages.user') ? 'text-white font-bold' : 'text-gray-300' }} group-hover:text-white text-base leading-normal">User</span>
                    </a>

                    <!-- Facility -->
                    <a href="{{ route('pages.facilities') }}"
                        class="flex items-center px-4 py-3 {{ Request::routeIs('pages.facilities') ? 'bg-gradient-to-r from-blue-600 to-indigo-600 shadow-lg' : 'hover:bg-white/5' }} text-gray-200 rounded-xl transition-all duration-200 group">
                        <div class="w-6 h-6 mr-4 flex items-center justify-center">
                            <img src="{{ asset('images/UsersFour.svg') }}"
                                class="{{ Request::routeIs('pages.facilities') ? 'hidden' : 'block' }} group-hover:hidden" />
                            <img src="{{ asset('images/black-UsersFour.svg') }}"
                                class="{{ Request::routeIs('pages.facilities') ? 'block' : 'hidden' }} group-hover:block" />
                        </div>
                        <span
                            class="{{ Request::routeIs('pages.facilities') ? 'text-white font-bold' : 'text-gray-300' }} group-hover:text-white text-base leading-normal">Facility</span>
                    </a>

                    <!-- Shifts -->
                    <a href="{{ route('pages.shifts') }}"
                        class="flex items-center px-4 py-3 {{ Request::routeIs('pages.shifts') ? 'bg-gradient-to-r from-blue-600 to-indigo-600 shadow-lg' : 'hover:bg-white/5' }} text-gray-200 rounded-xl transition-all duration-200 group">
                        <div class="w-6 h-6 mr-4 flex items-center justify-center">
                            <img src="{{ asset('images/briefcase.svg') }}"
                                class="{{ Request::routeIs('pages.shifts') ? 'hidden' : 'block' }} group-hover:hidden" />
                            <img src="{{ asset('images/black-briefcase.svg') }}"
                                class="{{ Request::routeIs('pages.shifts') ? 'block' : 'hidden' }} group-hover:block" />
                        </div>
                        <span
                            class="{{ Request::routeIs('pages.shifts') ? 'text-white font-bold' : 'text-gray-300' }} group-hover:text-white text-base leading-normal">Shifts</span>
                    </a>

                    <!-- Payments -->
                    <a href="{{ route('pages.payments') }}"
                        class="flex items-center px-4 py-3 {{ Request::routeIs('pages.payments') ? 'bg-gradient-to-r from-blue-600 to-indigo-600 shadow-lg' : 'hover:bg-white/5' }} text-gray-200 rounded-xl transition-all duration-200 group">
                        <div class="w-6 h-6 mr-4 flex items-center justify-center">
                            <img src="{{ asset('images/briefcase.svg') }}"
                                class="{{ Request::routeIs('pages.payments') ? 'hidden' : 'block' }} group-hover:hidden" />
                            <img src="{{ asset('images/black-briefcase.svg') }}"
                                class="{{ Request::routeIs('pages.payments') ? 'block' : 'hidden' }} group-hover:block" />
                        </div>
                        <span
                            class="{{ Request::routeIs('pages.payments') ? 'text-white font-bold' : 'text-gray-300' }} group-hover:text-white text-base leading-normal">Payments</span>
                    </a>

                    <!-- Reports -->
                    <a href="{{ route('pages.reports') }}"
                        class="flex items-center px-4 py-3 {{ Request::routeIs('pages.reports') ? 'bg-gradient-to-r from-blue-600 to-indigo-600 shadow-lg' : 'hover:bg-white/5' }} text-gray-200 rounded-xl transition-all duration-200 group">
                        <div class="w-6 h-6 mr-4 flex items-center justify-center">
                            <img src="{{ asset('images/FileText.svg') }}"
                                class="{{ Request::routeIs('pages.reports') ? 'hidden' : 'block' }} group-hover:hidden" />
                            <img src="{{ asset('images/black-FileText.svg') }}"
                                class="{{ Request::routeIs('pages.reports') ? 'block' : 'hidden' }} group-hover:block" />
                        </div>
                        <span
                            class="{{ Request::routeIs('pages.reports') ? 'text-white font-bold' : 'text-gray-300' }} group-hover:text-white text-base leading-normal">Report</span>
                    </a>

                    <!-- Support -->
                    <a href="{{ route('pages.support') }}"
                        class="flex items-center px-4 py-3 {{ Request::routeIs('pages.support') ? 'bg-gradient-to-r from-blue-600 to-indigo-600 shadow-lg' : 'hover:bg-white/5' }} text-gray-200 rounded-xl transition-all duration-200 group">
                        <div class="w-6 h-6 mr-4 flex items-center justify-center">
                            <img src="{{ asset('images/FileText.svg') }}"
                                class="{{ Request::routeIs('pages.support') ? 'hidden' : 'block' }} group-hover:hidden" />
                            <img src="{{ asset('images/black-FileText.svg') }}"
                                class="{{ Request::routeIs('pages.support') ? 'block' : 'hidden' }} group-hover:block" />
                        </div>
                        <span
                            class="{{ Request::routeIs('pages.support') ? 'text-white font-bold' : 'text-gray-300' }} group-hover:text-white text-base leading-normal">Support</span>
                    </a>

                    <!-- Notification -->
                    <a href="{{ route('pages.notification') }}"
                        class="flex items-center px-4 py-3 {{ Request::routeIs('pages.notification') ? 'bg-gradient-to-r from-blue-600 to-indigo-600 shadow-lg' : 'hover:bg-white/5' }} text-gray-200 rounded-xl transition-all duration-200 group">
                        <div class="w-6 h-6 mr-4 flex items-center justify-center">
                            <img src="{{ asset('images/FileText.svg') }}"
                                class="{{ Request::routeIs('pages.notification') ? 'hidden' : 'block' }} group-hover:hidden" />
                            <img src="{{ asset('images/black-FileText.svg') }}"
                                class="{{ Request::routeIs('pages.notification') ? 'block' : 'hidden' }} group-hover:block" />
                        </div>
                        <span
                            class="{{ Request::routeIs('pages.notification') ? 'text-white font-bold' : 'text-gray-300' }} group-hover:text-white text-base leading-normal">Notification</span>
                    </a>
                </div>
            </nav>

            <!-- User Info & Logout -->
            <div class="pt-4 border-t border-white/10 space-y-3">
                <!-- User Info -->
                <div class="px-4 py-3 bg-white/5 rounded-xl">
                    <div class="flex items-center gap-3">
                        <div
                            class="w-10 h-10 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-full flex items-center justify-center text-white font-semibold">
                            AS
                        </div>
                        <div>
                            <div class="text-white text-sm font-semibold">Alexander Smith</div>
                            <div class="text-gray-400 text-xs">Administrator</div>
                        </div>
                    </div>
                </div>

                <!-- Logout Button -->
                <button onclick="window.location.href='{{ route('pages.login') }}'"
                    class="flex cursor-pointer items-center px-4 py-3 bg-red-600/10 hover:bg-red-600/20 border border-red-600/20 rounded-xl transition-all duration-200 w-full group">
                    <div class="w-6 h-6 mr-4 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5 text-red-400 group-hover:text-red-300">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                        </svg>
                    </div>
                    <span
                        class="text-red-400 group-hover:text-red-300 text-base font-medium leading-normal">Logout</span>
                </button>
            </div>
        </div>

        <!-- Mobile overlay -->
        <div class="fixed inset-0 bg-black/50  z-40  hidden" id="sidebar-overlay"></div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col min-w-0">
            <!-- Top Header with Mobile Menu Button -->
            <div class="lg:hidden bg-white shadow-md p-4 flex items-center justify-between">
                <button class="text-gray-600 hover:text-gray-900 transition-colors" id="mobile-menu-button">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
                <div class="text-gray-900 text-xl font-bold flex items-center gap-2">
                    <span>🏥</span>
                    EDM Solution
                </div>
                <div class="w-8"></div> <!-- Spacer for centering -->
            </div>

            <!-- Main Content Area -->
            @yield('content')
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.0/chart.umd.min.js"></script>

    <script>
        // Mobile menu functionality
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const closeSidebarButton = document.getElementById('close-sidebar');
        const sidebar = document.getElementById('sidebar');
        const sidebarOverlay = document.getElementById('sidebar-overlay');

        function toggleMobileMenu() {
            sidebar.classList.toggle('-translate-x-full');
            sidebarOverlay.classList.toggle('hidden');
        }

        if (mobileMenuButton) {
            mobileMenuButton.addEventListener('click', toggleMobileMenu);
        }

        if (closeSidebarButton) {
            closeSidebarButton.addEventListener('click', toggleMobileMenu);
        }

        if (sidebarOverlay) {
            sidebarOverlay.addEventListener('click', toggleMobileMenu);
        }
    </script>

    @stack('scripts')
</body>

</html> --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDM Solution - @yield('title')</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body class="bg-gradient-to-br from-gray-50 to-gray-100 font-sans overflow-hidden">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="fixed lg:relative w-[280px] bg-gradient-to-b from-gray-900 via-gray-800 to-gray-900 text-white p-4 flex flex-col shadow-2xl z-50 h-full -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out"
            id="sidebar">
            <!-- Close button for mobile -->
            <button class="lg:hidden absolute top-4 right-4 text-white hover:text-gray-300 transition-colors"
                id="close-sidebar">
                <i class="fas fa-times text-2xl"></i>
            </button>

            <!-- Logo/Header -->
            <div class="pb-6 border-b border-white/10">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-[#1F3C88] rounded-lg flex items-center justify-center">
                        <span class="text-white text-sm font-bold">E</span>
                    </div>
                    <span class="text-white text-lg font-semibold hidden sm:block">EDM Solutions</span>
                </div>
            </div>

            <!-- Navigation Menu -->
            <nav class="flex-1 overflow-y-auto mt-6">
                <div class="space-y-2">
                    <!-- Dashboard -->
                    <a href="{{ route('pages.dashboard') }}"
                        class="flex items-center px-4 py-3 {{ Request::routeIs('pages.dashboard') ? 'bg-gradient-to-r from-blue-600 to-indigo-600 shadow-lg' : 'hover:bg-white/5' }} text-gray-200 rounded-xl transition-all duration-200 group">
                        <div class="w-6 h-6 mr-4 flex items-center justify-center">
                            <img src="{{ asset('images/Overview.svg') }}"
                                class="{{ Request::routeIs('pages.dashboard') ? 'hidden' : 'block' }} group-hover:hidden" />
                            <img src="{{ asset('images/black-Overview.svg') }}"
                                class="{{ Request::routeIs('pages.dashboard') ? 'block' : 'hidden' }} group-hover:block" />
                        </div>
                        <span
                            class="{{ Request::routeIs('pages.dashboard') ? 'text-white font-bold' : 'text-gray-300' }} group-hover:text-white text-base leading-normal">Dashboard</span>
                    </a>

                    <!-- User -->
                    <a href="{{ route('pages.user') }}"
                        class="flex items-center px-4 py-3 {{ Request::routeIs('pages.user') ? 'bg-gradient-to-r from-blue-600 to-indigo-600 shadow-lg' : 'hover:bg-white/5' }} text-gray-200 rounded-xl transition-all duration-200 group">
                        <div class="w-6 h-6 mr-4 flex items-center justify-center">
                            <img src="{{ asset('images/User.svg') }}"
                                class="{{ Request::routeIs('pages.user') ? 'hidden' : 'block' }} group-hover:hidden" />
                            <img src="{{ asset('images/black-User.svg') }}"
                                class="{{ Request::routeIs('pages.user') ? 'block' : 'hidden' }} group-hover:block" />
                        </div>
                        <span
                            class="{{ Request::routeIs('pages.user') ? 'text-white font-bold' : 'text-gray-300' }} group-hover:text-white text-base leading-normal">User</span>
                    </a>

                    <!-- Facility -->
                    <a href="{{ route('pages.facilities') }}"
                        class="flex items-center px-4 py-3 {{ Request::routeIs('pages.facilities') ? 'bg-gradient-to-r from-blue-600 to-indigo-600 shadow-lg' : 'hover:bg-white/5' }} text-gray-200 rounded-xl transition-all duration-200 group">
                        <div class="w-6 h-6 mr-4 flex items-center justify-center">
                            <img src="{{ asset('images/UsersFour.svg') }}"
                                class="{{ Request::routeIs('pages.facilities') ? 'hidden' : 'block' }} group-hover:hidden" />
                            <img src="{{ asset('images/black-UsersFour.svg') }}"
                                class="{{ Request::routeIs('pages.facilities') ? 'block' : 'hidden' }} group-hover:block" />
                        </div>
                        <span
                            class="{{ Request::routeIs('pages.facilities') ? 'text-white font-bold' : 'text-gray-300' }} group-hover:text-white text-base leading-normal">Facility</span>
                    </a>

                    <!-- Shifts -->
                    <a href="{{ route('pages.shifts') }}"
                        class="flex items-center px-4 py-3 {{ Request::routeIs('pages.shifts') ? 'bg-gradient-to-r from-blue-600 to-indigo-600 shadow-lg' : 'hover:bg-white/5' }} text-gray-200 rounded-xl transition-all duration-200 group">
                        <div class="w-6 h-6 mr-4 flex items-center justify-center">
                            <img src="{{ asset('images/briefcase.svg') }}"
                                class="{{ Request::routeIs('pages.shifts') ? 'hidden' : 'block' }} group-hover:hidden" />
                            <img src="{{ asset('images/black-briefcase.svg') }}"
                                class="{{ Request::routeIs('pages.shifts') ? 'block' : 'hidden' }} group-hover:block" />
                        </div>
                        <span
                            class="{{ Request::routeIs('pages.shifts') ? 'text-white font-bold' : 'text-gray-300' }} group-hover:text-white text-base leading-normal">Shifts</span>
                    </a>

                    <!-- Payments -->
                    <a href="{{ route('pages.payments') }}"
                        class="flex items-center px-4 py-3 {{ Request::routeIs('pages.payments') ? 'bg-gradient-to-r from-blue-600 to-indigo-600 shadow-lg' : 'hover:bg-white/5' }} text-gray-200 rounded-xl transition-all duration-200 group">
                        <div class="w-6 h-6 mr-4 flex items-center justify-center">
                            <img src="{{ asset('images/briefcase.svg') }}"
                                class="{{ Request::routeIs('pages.payments') ? 'hidden' : 'block' }} group-hover:hidden" />
                            <img src="{{ asset('images/black-briefcase.svg') }}"
                                class="{{ Request::routeIs('pages.payments') ? 'block' : 'hidden' }} group-hover:block" />
                        </div>
                        <span
                            class="{{ Request::routeIs('pages.payments') ? 'text-white font-bold' : 'text-gray-300' }} group-hover:text-white text-base leading-normal">Payments</span>
                    </a>

                    <!-- Reports -->
                    <a href="{{ route('pages.reports') }}"
                        class="flex items-center px-4 py-3 {{ Request::routeIs('pages.reports') ? 'bg-gradient-to-r from-blue-600 to-indigo-600 shadow-lg' : 'hover:bg-white/5' }} text-gray-200 rounded-xl transition-all duration-200 group">
                        <div class="w-6 h-6 mr-4 flex items-center justify-center">
                            <img src="{{ asset('images/FileText.svg') }}"
                                class="{{ Request::routeIs('pages.reports') ? 'hidden' : 'block' }} group-hover:hidden" />
                            <img src="{{ asset('images/black-FileText.svg') }}"
                                class="{{ Request::routeIs('pages.reports') ? 'block' : 'hidden' }} group-hover:block" />
                        </div>
                        <span
                            class="{{ Request::routeIs('pages.reports') ? 'text-white font-bold' : 'text-gray-300' }} group-hover:text-white text-base leading-normal">Report</span>
                    </a>

                    <!-- Support -->
                    <a href="{{ route('pages.support') }}"
                        class="flex items-center px-4 py-3 {{ Request::routeIs('pages.support') ? 'bg-gradient-to-r from-blue-600 to-indigo-600 shadow-lg' : 'hover:bg-white/5' }} text-gray-200 rounded-xl transition-all duration-200 group">
                        <div class="w-6 h-6 mr-4 flex items-center justify-center">
                            <img src="{{ asset('images/FileText.svg') }}"
                                class="{{ Request::routeIs('pages.support') ? 'hidden' : 'block' }} group-hover:hidden" />
                            <img src="{{ asset('images/black-FileText.svg') }}"
                                class="{{ Request::routeIs('pages.support') ? 'block' : 'hidden' }} group-hover:block" />
                        </div>
                        <span
                            class="{{ Request::routeIs('pages.support') ? 'text-white font-bold' : 'text-gray-300' }} group-hover:text-white text-base leading-normal">Support</span>
                    </a>

                    <!-- Notification -->
                    <a href="{{ route('pages.notification') }}"
                        class="flex items-center px-4 py-3 {{ Request::routeIs('pages.notification') ? 'bg-gradient-to-r from-blue-600 to-indigo-600 shadow-lg' : 'hover:bg-white/5' }} text-gray-200 rounded-xl transition-all duration-200 group">
                        <div class="w-6 h-6 mr-4 flex items-center justify-center">
                            <img src="{{ asset('images/FileText.svg') }}"
                                class="{{ Request::routeIs('pages.notification') ? 'hidden' : 'block' }} group-hover:hidden" />
                            <img src="{{ asset('images/black-FileText.svg') }}"
                                class="{{ Request::routeIs('pages.notification') ? 'block' : 'hidden' }} group-hover:block" />
                        </div>
                        <span
                            class="{{ Request::routeIs('pages.notification') ? 'text-white font-bold' : 'text-gray-300' }} group-hover:text-white text-base leading-normal">Notification</span>
                    </a>
                </div>
            </nav>

            <!-- User Info & Logout -->
            <div class="pt-4 border-t border-white/10 space-y-3">
                <!-- User Info -->
                <div class="px-4 py-3 bg-white/5 rounded-xl">
                    <div class="flex items-center gap-3">
                        <div
                            class="w-10 h-10 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-full flex items-center justify-center text-white font-semibold">
                            AS
                        </div>
                        <div>
                            <div class="text-white text-sm font-semibold">Saddam Khoso</div>
                            <div class="text-gray-400 text-xs">Administrator</div>
                        </div>
                    </div>
                </div>

                <!-- Logout Button -->
                <button onclick="window.location.href='{{ route('pages.login') }}'"
                    class="flex cursor-pointer items-center px-4 py-3 bg-red-600/10 hover:bg-red-600/20 border border-red-600/20 rounded-xl transition-all duration-200 w-full group">
                    <div class="w-6 h-6 mr-4 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5 text-red-400 group-hover:text-red-300">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                        </svg>
                    </div>
                    <span
                        class="text-red-400 group-hover:text-red-300 text-base font-medium leading-normal">Logout</span>
                </button>
            </div>
        </div>

        <!-- Mobile overlay -->
        <div class="fixed inset-0 bg-black/50 z-40 hidden" id="sidebar-overlay"></div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col min-w-0">
            <!-- Top Navigation Bar -->
            <div class="bg-white shadow-sm border-b border-gray-200 px-6 py-3">
                <div class="flex items-center justify-between">
                    <!-- Left: Mobile Menu + Logo -->
                    <div class="flex items-center gap-4">
                        <!-- Mobile Menu Button -->
                        <button class="lg:hidden text-gray-600 hover:text-gray-900 transition-colors"
                            id="mobile-menu-button">
                            <i class="fas fa-bars text-xl"></i>
                        </button>

                        <!-- Logo & Brand -->
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 bg-[#1F3C88] rounded-lg flex items-center justify-center">
                                <span class="text-white text-sm font-bold">E</span>
                            </div>
                            <span class="text-gray-900 text-base font-semibold hidden sm:block">EDM Solutions</span>
                        </div>
                    </div>

                    <!-- Center: Search Bar -->
                    <div class="hidden md:flex flex-1 max-w-xl mx-8">
                        <div class="relative w-full">
                            <input type="text" placeholder="Search users, facilities, shifts..."
                                class="w-full pl-10 pr-4 py-2 bg-gray-50 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" />
                            <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                    </div>

                    <!-- Right: Notifications & User -->
                    <div class="flex items-center gap-4">
                        <!-- Notification Bell -->
                        <button
                            class="relative p-2 text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded-lg transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                                </path>
                            </svg>
                            <span class="absolute top-1 right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                        </button>

                        <!-- Messages -->
                        <button
                            class="relative p-2 text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded-lg transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z">
                                </path>
                            </svg>
                            <span class="absolute top-1 right-1 w-2 h-2 bg-blue-500 rounded-full"></span>
                        </button>

                        <!-- User Profile -->
                        <div class="flex items-center gap-3 pl-3 border-l border-gray-200">
                            <div class="w-9 h-9 bg-[#1F3C88] rounded-full flex items-center justify-center">
                                <span class="text-white text-sm font-semibold">A</span>
                            </div>
                            <div class="hidden lg:block">
                                <div class="text-sm font-semibold text-gray-900">Saddam Khoso</div>
                                <div class="text-xs text-gray-500">Super Admin</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content Area -->
            @yield('content')
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.0/chart.umd.min.js"></script>

    <script>
        // Mobile menu functionality
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const closeSidebarButton = document.getElementById('close-sidebar');
        const sidebar = document.getElementById('sidebar');
        const sidebarOverlay = document.getElementById('sidebar-overlay');

        function toggleMobileMenu() {
            sidebar.classList.toggle('-translate-x-full');
            sidebarOverlay.classList.toggle('hidden');
        }

        if (mobileMenuButton) {
            mobileMenuButton.addEventListener('click', toggleMobileMenu);
        }

        if (closeSidebarButton) {
            closeSidebarButton.addEventListener('click', toggleMobileMenu);
        }

        if (sidebarOverlay) {
            sidebarOverlay.addEventListener('click', toggleMobileMenu);
        }
    </script>

    @stack('scripts')
</body>

</html>
