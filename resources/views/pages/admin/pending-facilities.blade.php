@extends('layouts.auth')
@section('title')
    Facilities Management
@endsection

@section('content')
    <main class="flex-1 p-4 lg:p-6 overflow-auto">
        <div class="flex items-center justify-between pb-6">
            <div>
                <div class=" text-zinc-900 text-2xl font-normal leading-7">Facilities Management</div>
                <div class="font-[Arial] text-[#717182] font-normal text-[16px] leading-[24px] tracking-[0px]">
                    Oversee facility accounts and their activities
                </div>
            </div>
            <div>
                <x-button title="Add Facility"
                    icon='<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>
                    ' />
            </div>
        </div>
        <div class="px-6 py-4 space-x-4 border flex items-center justify-between border-[#0000001A] rounded-lg">
            <div class="relative w-full">
                <input type="text" placeholder="Search by name or email..."
                    class="w-full pl-10 bg-[#e9e9ea] pr-4 py-2 border border-[#e9e9ea] rounded-md text-sm focus:outline-none" />
                <svg class="absolute left-3 top-2.5 w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </div>
        </div>

        <div class="py-6 flex items-center space-x-3">
            <div class=" bg-[#ECECF0] p-1.5 space-x-1 w-[330px] rounded-full flex items-center justify-between">
                <a href="/facilities" class=" py-2 px-7 text-[14px] rounded-full  font-normal text-[#0A0A0A]">
                    All Facilities
                </a>
                <a href="/pending-facilities"
                    class="bg-white py-2 px-7 text-[14px] rounded-full  font-normal text-[#0A0A0A]">
                    Pending Approvals
                </a>
            </div>
            <div class="text-[#894B00] bg-[#FEF9C2] px-2 rounded-lg">
                1
            </div>
        </div>

        <!-- Table Container -->
        <div class="overflow-x-auto mt-6 border border-[#0000001A] rounded-lg bg-white p-6">
            <div class="mb-6">
                <h2 class="text-[16px] font-normal text-gray-800">Pending Facility Approvals</h2>
            </div>

            <div class="border border-[#0000001A] rounded-lg bg-white p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="text-[#0A0A0A] text-[16px] font-normal">Riverside Clinic</h1>
                        <h1 class="text-[#717182] text-[16px] font-normal">Contact: Mark Johnson • <br /> +1-555-1002</h1>
                    </div>
                    <div class="flex items-center space-x-2">
                        <x-button title="Approve"
                            icon='<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        ' />
                        <x-outline-button title="Reject"
                            icon='<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>' />
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
