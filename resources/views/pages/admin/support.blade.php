@extends('layouts.auth')
@section('title')
    Shifts Management
@endsection

@section('content')
    <main class="flex-1 p-4 lg:p-6 overflow-auto">
        <div class="flex items-center justify-between pb-6">
            <div>
                <div class=" text-zinc-900 text-2xl font-normal leading-7">Shifts Management</div>
                <div class="font-[Arial] text-[#717182] font-normal text-[16px] leading-[24px] tracking-[0px]">
                    Manage user accounts, documents, and activity
                </div>
            </div>
            <div>
                <x-button title="Create Ticket"
                    icon='<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 0 1 1.037-.443 48.282 48.282 0 0 0 5.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
</svg>

                    ' />
            </div>
        </div>

        <div class="p-6 mb-6  border border-[#FFC9C9] bg-[#FEF2F2] rounded-lg">
            <div class="flex items-center space-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#E7000B"
                    class="size-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                </svg>
                <h2 class="text-[16px] font-normal text-[#0A0A0A]">Escalations Requiring Attention (2)</h2>
            </div>

            <div class="border border-[#FFC9C9] rounded-lg bg-white my-4 p-2.5">
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="text-[#0A0A0A] text-[16px] font-normal">T004 - Profile verification issue</h1>
                        <h1 class="text-[#717182] text-[16px] font-normal">User: Emma Davis • <br /> Needs assignment</h1>
                    </div>
                    <div class="flex items-center space-x-2">
                        <x-button title="Review" class="py-1.5 px-3" />
                    </div>
                </div>
            </div>
            <div class="border border-[#FFC9C9] rounded-lg bg-white my-4 p-2.5">
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="text-[#0A0A0A] text-[16px] font-normal">T005 - Account access problem</h1>
                        <h1 class="text-[#717182] text-[16px] font-normal">User: Riverside Clinic • <br /> Critical priority
                        </h1>
                    </div>
                    <div class="flex items-center space-x-2">
                        <x-button title="Review" class="py-1.5 px-3" />
                    </div>
                </div>
            </div>

        </div>
        <div class="px-6 py-4 space-x-4 border flex items-center justify-between border-[#0000001A] rounded-lg">
            <div class="relative w-[80%]">
                <input type="text" placeholder="Search by user or issue..."
                    class="w-full pl-10 bg-[#e9e9ea] pr-4 py-2 border border-[#e9e9ea] rounded-md text-sm focus:outline-none" />
                <svg class="absolute left-3 top-2.5 w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </div>
            <select class="w-[20%] bg-[#e9e9ea] px-4 py-2 border border-[#e9e9ea] rounded-md text-sm focus:outline-none">
                <option value="">All Statuses</option>
            </select>
        </div>

        <!-- Table Container -->
        <div class="overflow-x-auto mt-6 border border-[#0000001A] rounded-lg bg-white p-6">
            <div class="mb-6">
                <h2 class="text-[16px] font-normal text-gray-800">Support Tickets (5)</h2>
            </div>
            <table class="w-full table table-auto">
                <thead class=" border-b border-[#0000001A]">
                    <tr>
                        <th class="px-1 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            Ticket ID
                        </th>
                        <th class="px-1 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            User/Facility
                        </th>
                        <th class="px-1 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            Issue
                        </th>
                        <th class="px-1 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            Assigned Agent
                        </th>
                        <th class="px-1 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            Priority
                        </th>
                        <th class="px-1 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            Status
                        </th>
                        <th class="px-1 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            Created
                        </th>
                        <th class="px-1 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            Actions
                        </th>
                    </tr>
                </thead>

                <tbody class=" ">
                    <tr class="border-b border-[#0000001A]">
                        <td class="px-1 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            T001
                        </td>
                        <td class="px-1 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            Sarah Johnson
                        </td>
                        <td class="px-1 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            Payment delay issue
                        </td>
                        <td class="px-1 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            Admin-1
                        </td>
                        <td class="px-1 py-3 text-center text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            <div class="bg-[#FFE2E2] px-2 py-1 text-[#9F0712] rounded-xl">
                                High
                            </div>
                        </td>
                        <td class="px-1 py-3 text-center text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            <div class="bg-[#FFE2E2] px-2 py-1 text-[#9F0712] rounded-xl">
                                Open
                            </div>
                        </td>
                        <td class="px-1 py-3 text-left text-[15px] font-medium text-[#717182] capitalize tracking-wider">
                            Sep 28, 2025
                        </td>
                        <td
                            class="px-1 py-3 flex items-center justify-end text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
                            </svg>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
@endsection
