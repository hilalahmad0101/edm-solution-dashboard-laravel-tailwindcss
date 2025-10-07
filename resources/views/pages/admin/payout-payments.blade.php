@extends('layouts.auth')
@section('title')
    Shifts Management
@endsection

@section('content')
    <main class="flex-1 p-4 lg:p-6 overflow-auto">
        <div class="flex items-center justify-between pb-6">
            <div>
                <div class=" text-zinc-900 text-2xl font-normal leading-7">Payments & Finance</div>
                <div class="font-[Arial] text-[#717182] font-normal text-[16px] leading-[24px] tracking-[0px]">
                    Manage financial flow between facilities, users, and platform
                </div>
            </div>
            <div>
                <x-button title="Export Report"
                    icon='<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                    </svg>' />
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <x-payment-card title="Total Earnings" count="$12,430" sub_title="+$1,430 since last month" />
            <x-payment-card title="Pending Payments" count="$3,200" sub_title="From 28 invoices" />
            <x-payment-card title="Commission Earned" count="24" sub_title="10% platform fee" />
        </div>

        <div class="py-6 flex items-center space-x-3">
            <div class="bg-[#ECECF0] p-1.5  w-[500px] rounded-full space-x-5 flex items-center justify-between">
                <a href="/payments" class="  py-2 px-5 text-[14px] rounded-full  font-normal text-[#0A0A0A]">
                    Facility Payments
                </a>
                <a href="/payout-payments" class=" bg-white py-2 px-5 text-[14px] rounded-full  font-normal text-[#0A0A0A]">
                    User Payouts
                </a>
                <a href="/pending-facilities" class=" py-2 px-5 text-[14px] rounded-full  font-normal text-[#0A0A0A]">
                    Commission Tracking
                </a>
            </div>
        </div>
        <!-- Table Container -->
        <div class="overflow-x-auto mt-6 border border-[#0000001A] rounded-lg bg-white p-6">
            <div class="mb-6">
                <h2 class="text-[16px] font-normal text-gray-800">User Payout Schedule( 6 )</h2>
            </div>
            <table class="w-full table table-auto">
                <thead class=" border-b border-[#0000001A]">
                    <tr>
                        <th class="px-6 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            Payout ID
                        </th>
                        <th class="px-6 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            User
                        </th>
                        <th class="px-6 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            Amount
                        </th>
                        <th class="px-6 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            Shifts Completed
                        </th>
                        <th class="px-6 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            Payment Date
                        </th>
                        <th class="px-6 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            Status
                        </th>
                        <th class="px-6 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            Action
                        </th>
                    </tr>
                </thead>

                <tbody class=" ">
                    <tr class="border-b border-[#0000001A]">
                        <td class="px-6 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            PAY-001
                        </td>
                        <td class="px-6 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            Sarah Johnson
                        </td>
                        <td class="px-6 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            $12,450
                        </td>
                        <td class="px-6 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            12
                        </td>
                        <td class="px-6 py-3 text-left text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            Oct 10, 2025
                        </td>
                        <td class="px-6 py-3 text-center text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            <div class="bg-[#DCFCE7] px-2 py-1 text-[#016630] rounded-xl">
                                Paid
                            </div>
                        </td>
                        <td class="px-6 py-3 text-center text-[15px] font-medium text-[#0A0A0A] capitalize tracking-wider">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                            </svg>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
@endsection
