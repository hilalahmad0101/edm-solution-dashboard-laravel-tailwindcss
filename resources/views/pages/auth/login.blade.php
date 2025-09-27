@extends('layouts.guest')

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
@endsection
