@extends('layouts.guest')

@section('title')
    Welcome
@endsection

@section('content')
    <div class="w-full h-screen flex items-center justify-center bg-[#1F3C88] px-4">
        <div>
            <div class="mx-auto">
                <x-logo logo="{{ asset('images/white-logo.svg') }}" class="w-32 h-32 mx-auto" />
            </div>

            <div class="text-center justify-start mt-6">
                <span class="text-white sm:text-4xl text-2xl font-normal sm:leading-[60px] leading-[40px]">Welcome to
                    the<br /></span>
                <span class="text-white sm:text-4xl text-2xl font-semibold sm:leading-[60px] leading-[40px]">EDM Solution
                    Dashboard</span>
            </div>
            <div class="text-center mt-6 justify-start text-white text-2xl font-normal  leading-9">Right Staff Right
                Place Right Time</div>
            <div class="w-48 h-0.5 opacity-30 bg-white my-6 mx-auto"></div>
            <div class="flex items-center justify-center">
                <button onclick="window.location.href='{{ route('pages.login') }}'"
                    class="px-16 cursor-pointer sm:py-6 py-4 bg-white  rounded-[50px]  text-[#1F3C88] text-3xl font-semibold leading-9 gap-2">
                    Continued
                </button>
            </div>
        </div>
    </div>
@endsection
