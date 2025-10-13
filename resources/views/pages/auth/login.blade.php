{{-- @extends('layouts.guest')

@section('title')
    Login
@endsection

@section('content')
    <div class="bg-gradient-to-br from-gray-50 to-gray-200 min-h-screen flex items-center justify-center p-5">
        <div class=" w-full max-w-lg">
            <!-- Logo -->
            <div class="flex justify-center mb-8">
                <x-logo logo="{{ asset('images/black-logo.svg') }}" class="w-32 h-32" />
            </div>

            <!-- Header -->
            <div class="text-center justify-start">
                <span class="text-[#1F3C88] sm:text-4xl text-2xl font-normal sm:leading-[60px] leading-[40px]">Welcome to
                    the<br /></span>
                <span class="text-[#1F3C88] sm:text-4xl text-2xl font-semibold sm:leading-[60px] leading-[40px]">EDM
                    Solution Dashboard</span>
            </div>

            <!-- Form -->
            <form class="space-y-4 max-w-xs container mx-auto mt-7">

                <!-- Email Address -->
                <div>
                    <label class="block text-[#1F3C88] text-sm mb-2 text-left">Email Address</label>
                    <input type="email"
                        class="w-full px-3.5 py-2.5 bg-white rounded-lg shadow-[0px_1px_2px_0px_rgba(16,24,40,0.05)] outline outline-1 outline-offset-[-1px] outline-gray-300 inline-flex justify-start items-center gap-2">
                </div>

                <!-- Password -->
                <div>
                    <label class="block text-[#1F3C88] text-sm mb-2 text-left">Password</label>
                    <div class="relative">
                        <input type="password" id="password"
                            class="w-full px-3.5 py-2.5 bg-white rounded-lg shadow-[0px_1px_2px_0px_rgba(16,24,40,0.05)] outline outline-1 outline-offset-[-1px] outline-gray-300 inline-flex justify-start items-center gap-2">
                        <div class="absolute right-4 top-1/2 transform -translate-y-1/2 w-5 h-5 eye-icon"
                            onclick="togglePassword('password')"></div>
                    </div>
                </div>

                <!-- Sign Up Button -->
                <button onclick="window.location.href='{{ route('pages.dashboard') }}'" type="button"
                    class="cursor-pointer w-full mt-2 px-6 py-5 bg-blue-900 rounded-[100px]  text-center justify-center text-white text-sm font-normal leading-tight">
                    Login in</button>
            </form>

            <!-- Divider -->
            <div class="flex items-center my-6">
                <div class="flex-1 h-px bg-gray-200"></div>
                <span class="px-4 text-gray-500 text-sm">or Continue with</span>
                <div class="flex-1 h-px bg-gray-200"></div>
            </div>

            <!-- Social Buttons -->
            <div class="container mx-auto max-w-xs">
                <div class="flex gap-4 mb-6">
                    <button
                        class="flex cursor-pointer w-full items-center justify-center px-7 space-x-3 py-3 rounded-[100px] outline outline-1 outline-offset-[-0.50px] outline-teal-600/80">
                        <x-logo logo="{{ asset('images/google-logo.svg') }}" class="w-5 h-5" />
                        <span>Google</span>
                    </button>
                    <button
                        class="flex cursor-pointer w-full items-center justify-center px-7 space-x-3 py-3 rounded-[100px] outline outline-1 outline-offset-[-0.50px] outline-teal-600/80">
                        <x-logo logo="{{ asset('images/apple-logo.svg') }}" class="w-5 h-5" />
                        <span>Apple</span>
                    </button>

                </div>
            </div>

            <!-- Login Link -->
            <div class="text-center justify-start"><span class="text-zinc-500/80 text-sm font-normal  leading-tight">Don't
                    Have an account?</span>
                <span class="text-zinc-500 text-sm font-normal  leading-tight">
                </span>
                <a href="{{ route('pages.register') }}" class="text-blue-900 text-sm font-normal  leading-tight">Sign up</a>
            </div>
        </div>

        <script>
            function togglePassword(inputId) {
                const input = document.getElementById(inputId);
                if (input.type === 'password') {
                    input.type = 'text';
                } else {
                    input.type = 'password';
                }
            }
        </script>
    </div>
@endsection --}}


@extends('layouts.guest')

@section('title')
    Login
@endsection

@section('content')
    <div class="bg-gradient-to-br from-blue-50 via-white to-blue-50 min-h-screen flex items-center justify-center p-5">
        <div class="w-full max-w-md">
            <!-- Logo -->
            <div class="flex justify-center mb-6 animate-fade-in">
                <x-logo logo="{{ asset('images/black-logo.svg') }}" class="w-24 h-24 drop-shadow-lg" />
            </div>

            <!-- Header -->
            <div class="text-center mb-8">
                <h1 class="text-[#1F3C88] text-3xl sm:text-4xl font-light mb-2">
                    Welcome to the
                </h1>
                <h2 class="text-[#1F3C88] text-3xl sm:text-4xl font-bold">
                    EDM Solution Dashboard
                </h2>
                <p class="text-gray-600 mt-3 text-sm">Sign in to continue to your account</p>
            </div>

            <!-- Form Card -->
            <div class="bg-white rounded-2xl shadow-xl p-8 backdrop-blur-sm border border-gray-100">
                <form class="space-y-5" method="POST">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <label class="block text-[#1F3C88] text-sm font-medium mb-2">Email Address</label>
                        <input type="email" name="email" required autocomplete="email" placeholder="you@example.com"
                            class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 hover:border-gray-300">
                    </div>

                    <!-- Password -->
                    <div>
                        <label class="block text-[#1F3C88] text-sm font-medium mb-2">Password</label>
                        <div class="relative">
                            <input type="password" id="password" name="password" required autocomplete="current-password"
                                placeholder="Enter your password"
                                class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 hover:border-gray-300 pr-12">
                            <button type="button"
                                class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600 transition-colors focus:outline-none"
                                onclick="togglePassword('password', this)">
                                <svg class="w-5 h-5 eye-open" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                <svg class="w-5 h-5 eye-closed hidden" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Remember & Forgot Password -->
                    <div class="flex items-center justify-between text-sm">
                        <label class="flex items-center cursor-pointer group">
                            <input type="checkbox" name="remember"
                                class="w-4 h-4 text-blue-900 border-gray-300 rounded focus:ring-2 focus:ring-blue-500">
                            <span class="ml-2 text-gray-600 group-hover:text-gray-900">Remember me</span>
                        </label>
                        <a href="{{ route('pages.forget-password') }}"
                            class="text-blue-900 hover:text-blue-700 font-medium transition-colors">
                            Forgot password?
                        </a>
                    </div>

                    <!-- Login Button -->
                    <button type="button" onclick="window.location.href='{{ route('pages.dashboard') }}'"
                        class="w-full px-6 py-3.5 bg-gradient-to-r from-blue-900 to-blue-800 hover:from-blue-800 hover:to-blue-700 rounded-xl text-white text-sm font-semibold shadow-lg shadow-blue-900/30 transition-all duration-200 transform hover:scale-[1.02] active:scale-[0.98] focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Sign In
                    </button>
                </form>

                <!-- Divider -->
                <div class="flex items-center my-6">
                    <div class="flex-1 h-px bg-gradient-to-r from-transparent via-gray-300 to-transparent"></div>
                    <span class="px-4 text-gray-500 text-xs font-medium uppercase tracking-wider">Or continue with</span>
                    <div class="flex-1 h-px bg-gradient-to-r from-transparent via-gray-300 to-transparent"></div>
                </div>

                <!-- Social Buttons -->
                <div class="grid grid-cols-2 gap-3">
                    <button type="button"
                        class="flex items-center justify-center gap-3 px-4 py-3 rounded-xl border-2 border-gray-200 hover:border-gray-300 hover:bg-gray-50 transition-all duration-200 group">
                        <x-logo logo="{{ asset('images/google-logo.svg') }}" class="w-5 h-5" />
                        <span class="text-gray-700 text-sm font-medium group-hover:text-gray-900">Google</span>
                    </button>
                    <button type="button"
                        class="flex items-center justify-center gap-3 px-4 py-3 rounded-xl border-2 border-gray-200 hover:border-gray-300 hover:bg-gray-50 transition-all duration-200 group">
                        <x-logo logo="{{ asset('images/apple-logo.svg') }}" class="w-5 h-5" />
                        <span class="text-gray-700 text-sm font-medium group-hover:text-gray-900">Apple</span>
                    </button>
                </div>
            </div>

            <!-- Sign Up Link -->
            <div class="text-center mt-6">
                <span class="text-gray-600 text-sm">Don't have an account? </span>
                <a href="{{ route('pages.register') }}"
                    class="text-blue-900 text-sm font-semibold hover:text-blue-700 transition-colors">
                    Sign up
                </a>
            </div>
        </div>
    </div>

    <style>
        @keyframes fade-in {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in {
            animation: fade-in 0.6s ease-out;
        }
    </style>

    <script>
        function togglePassword(inputId, button) {
            const input = document.getElementById(inputId);
            const eyeOpen = button.querySelector('.eye-open');
            const eyeClosed = button.querySelector('.eye-closed');

            if (input.type === 'password') {
                input.type = 'text';
                eyeOpen.classList.add('hidden');
                eyeClosed.classList.remove('hidden');
            } else {
                input.type = 'password';
                eyeOpen.classList.remove('hidden');
                eyeClosed.classList.add('hidden');
            }
        }
    </script>
@endsection
