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
                <x-button title="Add Shift"
                    icon='<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>
                    ' />
            </div>
        </div>
        <div class="px-6 py-4 space-x-4 border flex items-center justify-between border-[#0000001A] rounded-lg">
            <div class="relative w-[80%]">
                <input type="text" placeholder="Search by name or email..."
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
                <h2 class="text-[16px] font-normal text-gray-800">Shifts List ( 6 )</h2>
            </div>
            <table class="w-full table table-auto">
                <thead class=" border-b border-[#0000001A]">
                    <tr>
                        <th class="px-6 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            ID
                        </th>
                        <th class="px-6 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            Facility
                        </th>
                        <th class="px-6 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            Date
                        </th>
                        <th class="px-6 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            Time
                        </th>
                        <th class="px-6 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            Assigned User
                        </th>
                        <th class="px-6 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            Location
                        </th>
                        <th class="px-6 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            Status
                        </th>
                        <th class="px-6 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            Actions
                        </th>
                    </tr>
                </thead>

                <tbody class=" ">
                    <tr class="border-b border-[#0000001A]">
                        <td class="px-6 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            S001
                        </td>
                        <td class="px-6 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            General Hospital
                        </td>
                        <td class="px-6 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            Oct 5, 2025
                        </td>
                        <td class="px-6 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            8:00 AM - 4:00 PM
                        </td>
                        <td class="px-6 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            Sarah Johnson
                        </td>
                        <td class="px-6 py-3 text-left text-[15px] font-medium text-[#717182] capitalize tracking-wider">
                            New York, NY
                        </td>
                        <td class="px-6 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            <div class="bg-[#F3E8FF] px-2 py-1 text-[#6E11B0] rounded-xl">
                                Confirmed
                            </div>
                        </td>
                        <td
                            class="px-6 py-3 flex items-center justify-end text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
                            </svg>
                        </td>
                    </tr>
                    <tr class="border-b border-[#0000001A]">
                        <td class="px-6 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            S001
                        </td>
                        <td class="px-6 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            General Hospital
                        </td>
                        <td class="px-6 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            Oct 5, 2025
                        </td>
                        <td class="px-6 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            8:00 AM - 4:00 PM
                        </td>
                        <td class="px-6 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            Sarah Johnson
                        </td>
                        <td class="px-6 py-3 text-left text-[15px] font-medium text-[#717182] capitalize tracking-wider">
                            New York, NY
                        </td>
                        <td class="px-6 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            <div class="bg-[#F3E8FF] px-2 py-1 text-[#6E11B0] rounded-xl">
                                Confirmed
                            </div>
                        </td>
                        <td
                            class="px-6 py-3 flex items-center justify-end text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
                            </svg>
                        </td>
                    </tr>
                    <tr class="border-b border-[#0000001A]">
                        <td class="px-6 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            S001
                        </td>
                        <td class="px-6 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            General Hospital
                        </td>
                        <td class="px-6 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            Oct 5, 2025
                        </td>
                        <td class="px-6 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            8:00 AM - 4:00 PM
                        </td>
                        <td class="px-6 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            Sarah Johnson
                        </td>
                        <td class="px-6 py-3 text-left text-[15px] font-medium text-[#717182] capitalize tracking-wider">
                            New York, NY
                        </td>
                        <td class="px-6 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            <div class="bg-[#F3E8FF] px-2 py-1 text-[#6E11B0] rounded-xl">
                                Confirmed
                            </div>
                        </td>
                        <td
                            class="px-6 py-3 flex items-center justify-end text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
                            </svg>
                        </td>
                    </tr>
                    <tr class="border-b border-[#0000001A]">
                        <td class="px-6 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            S001
                        </td>
                        <td class="px-6 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            General Hospital
                        </td>
                        <td class="px-6 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            Oct 5, 2025
                        </td>
                        <td class="px-6 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            8:00 AM - 4:00 PM
                        </td>
                        <td class="px-6 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            Sarah Johnson
                        </td>
                        <td class="px-6 py-3 text-left text-[15px] font-medium text-[#717182] capitalize tracking-wider">
                            New York, NY
                        </td>
                        <td class="px-6 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            <div class="bg-[#F3E8FF] px-2 py-1 text-[#6E11B0] rounded-xl">
                                Confirmed
                            </div>
                        </td>
                        <td
                            class="px-6 py-3 flex items-center justify-end text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
                            </svg>
                        </td>
                    </tr>
                    <tr class="border-b border-[#0000001A]">
                        <td class="px-6 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            S001
                        </td>
                        <td class="px-6 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            General Hospital
                        </td>
                        <td class="px-6 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            Oct 5, 2025
                        </td>
                        <td class="px-6 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            8:00 AM - 4:00 PM
                        </td>
                        <td class="px-6 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            Sarah Johnson
                        </td>
                        <td class="px-6 py-3 text-left text-[15px] font-medium text-[#717182] capitalize tracking-wider">
                            New York, NY
                        </td>
                        <td class="px-6 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            <div class="bg-[#F3E8FF] px-2 py-1 text-[#6E11B0] rounded-xl">
                                Confirmed
                            </div>
                        </td>
                        <td
                            class="px-6 py-3 flex items-center justify-end text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
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
