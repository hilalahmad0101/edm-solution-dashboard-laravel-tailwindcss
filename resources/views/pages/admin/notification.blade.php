@extends('layouts.auth')
@section('title')
    Support & Complaints
@endsection

@section('content')
    <main class="flex-1 p-4 lg:p-6 overflow-auto">
        <div class="flex items-center justify-between pb-6">
            <div>
                <div class=" text-zinc-900 text-2xl font-normal leading-7">Support & Complaints</div>
                <div class="font-[Arial] text-[#717182] font-normal text-[16px] leading-[24px] tracking-[0px]">
                    Ticketing system to handle user and facility issues
                </div>
            </div>
            <div>
                <x-button title="Send New Notification"
                    icon='<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 0 1 1.037-.443 48.282 48.282 0 0 0 5.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
</svg>

                    ' />
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="p-6 mb-6  border border-[#0000001A] rounded-lg">
                <div>
                    <h2 class="text-[16px] font-normal text-gray-800">Push Notification</h2>
                    <h2 class="text-[16px] font-normal text-[#717182]">Instant mobile alert</h2>
                </div>
            </div>
            <div class="p-6 mb-6  border border-[#0000001A] rounded-lg">
                <div>
                    <h2 class="text-[16px] font-normal text-gray-800">Email Alert</h2>
                    <h2 class="text-[16px] font-normal text-[#717182]">Detailed email message</h2>
                </div>
            </div>
            <div class="p-6 mb-6  border border-[#0000001A] rounded-lg">
                <div>
                    <h2 class="text-[16px] font-normal text-gray-800">SMS Alert</h2>
                    <h2 class="text-[16px] font-normal text-[#717182]">Quick text message</h2>
                </div>
            </div>
        </div>

        <!-- Table Container -->
        <div class="overflow-x-auto  border border-[#0000001A] rounded-lg bg-white p-6">
            <div class="mb-6">
                <h2 class="text-[16px] font-normal text-gray-800">Recent Notifications (5)</h2>
            </div>
            <table class="w-full table table-auto">
                <thead class=" border-b border-[#0000001A]">
                    <tr>
                        <th class="px-1 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            ID
                        </th>
                        <th class="px-1 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            Title
                        </th>
                        <th class="px-1 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            Recipients
                        </th>
                        <th class="px-1 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            Type
                        </th>
                        <th class="px-1 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            Sent Date
                        </th>
                        <th class="px-1 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            Delivery Rate
                        </th>
                        <th class="px-1 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            Status
                        </th>
                    </tr>
                </thead>

                <tbody class=" ">
                    <tr class="border-b border-[#0000001A]">
                        <td class="px-1 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            N001
                        </td>
                        <td class="px-1 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            Welcome to the Platform
                        </td>
                        <td class="px-1 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            All Users
                        </td>
                        <td class="px-1 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            Push
                        </td>

                        <td class="px-1 py-3 text-left text-[15px] font-medium text-[#717182] capitalize tracking-wider">
                            Sep 28, 2025
                        </td>
                        <td class="px-1 py-3 text-left text-[15px] font-medium text-[#717182] capitalize tracking-wider">
                            90%
                        </td>
                        <td class="px-1 py-3 text-center text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            <div class="bg-[#DCFCE7] px-2 py-1 text-[#016630] rounded-xl">
                                Sent
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="p-6 my-6  border border-[#0000001A] bg-white rounded-lg">
            <div class="flex items-center space-x-3">
                <h2 class="text-[16px] font-normal text-[#0A0A0A]">Scheduled System Announcements</h2>
            </div>

            <div class="border border-[#0000001A] rounded-lg bg-white my-4 p-2.5">
                <div class="flex items-center justify-between px-3">
                    <div>
                        <h1 class="text-[#0A0A0A] text-[16px] font-normal">Holiday Hours Update</h1>
                        <h1 class="text-[#717182] text-[16px] font-normal">Scheduled for Oct 15, 2025 • Audience: All Users
                        </h1>
                    </div>
                    <div class="flex items-center space-x-2">
                        <x-outline-button title="Edit" class="py-1.5 px-3" />
                        <x-outline-button title="Cancel" class="py-1.5 px-3" />
                    </div>
                </div>
            </div>
            <div class="border border-[#0000001A] rounded-lg bg-white my-4 p-2.5">
                <div class="flex items-center justify-between px-3">
                    <div>
                        <h1 class="text-[#0A0A0A] text-[16px] font-normal">New Features Launch</h1>
                        <h1 class="text-[#717182] text-[16px] font-normal">Scheduled for Oct 20, 2025 • Audience: All
                            Facilities</h1>
                    </div>
                    <div class="flex items-center space-x-2">
                        <x-outline-button title="Edit" class="py-1.5 px-3" />
                        <x-outline-button title="Cancel" class="py-1.5 px-3" />
                    </div>
                </div>
            </div>

        </div>

        <div class="p-6 mb-6  border border-[#FFC9C9] bg-[#FEF2F2] rounded-lg">
            <div class="flex items-center space-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="#E7000B" class="size-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                </svg>
                <h2 class="text-[16px] font-normal text-[#0A0A0A]">Failed Delivery Logs (1)</h2>
            </div>

            <div class="border border-[#FFC9C9] rounded-lg bg-white my-4 p-2.5">
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="text-[#0A0A0A] text-[16px] font-normal">Payment Processed - SMS</h1>
                        <h1 class="text-[#717182] text-[16px] font-normal">Recipient: Sarah Johnson • Sep 30, 2025</h1>
                    </div>
                    <div class="flex items-center space-x-2">
                        <x-outline-button title="Retry" class="py-1.5 px-3" />
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
