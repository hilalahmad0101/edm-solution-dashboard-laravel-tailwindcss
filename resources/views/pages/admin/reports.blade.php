@extends('layouts.auth')
@section('title')
    Reports
@endsection

@section('content')
    <main class="flex-1 p-4 lg:p-6 overflow-auto">
        <div class="pt-6 px-6 pb-12">
            <div class=" text-zinc-900 text-4xl font-bold leading-7">Reports</div>
        </div>
        <div class="">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Revenue Card -->
                <div
                    class=" pl-4 pr-2.5 pt-5 pb-2.5 bg-white rounded-[10px] shadow-[0px_4px_4px_0px_rgba(0,0,0,0.10)] inline-flex flex-col justify-start items-center gap-3">
                    <div class="self-stretch justify-start text-blue-600 text-xl font-semibold  leading-7">
                        Revenue</div>
                    <div class="self-stretch justify-start text-zinc-950 text-xl font-normal  leading-7">Total
                        : $1230-</div>
                    <div class="self-stretch justify-start text-zinc-950 text-xl font-normal  leading-7">
                        Facility Billing : $1230-</div>
                    <div class="self-stretch justify-start text-zinc-950 text-xl font-normal  leading-7">
                        Commission : $1230-</div>
                </div>

                <!-- Shift Fulfillment Card -->
                <div
                    class=" pl-4 pr-2.5 pt-5 pb-2.5 bg-white rounded-[10px] shadow-[0px_4px_4px_0px_rgba(0,0,0,0.10)] inline-flex flex-col justify-start items-center gap-3">
                    <div class="self-stretch justify-start text-blue-600 text-xl font-semibold  leading-7">
                        Shift Fulfillment</div>
                    <div class="self-stretch justify-start text-zinc-950 text-xl font-normal  leading-7">Shift
                        Posted : 420</div>
                    <div class="self-stretch justify-start text-zinc-950 text-xl font-normal  leading-7">Shift
                        Filled : 420 ( 90 % )</div>
                    <div class="self-stretch justify-start text-zinc-950 text-xl font-normal  leading-7">
                        Cancelled : 20</div>
                </div>

                <!-- Worker Performance Card -->
                <div
                    class=" pl-4 pr-2.5 pt-5 pb-2.5 bg-white rounded-[10px] shadow-[0px_4px_4px_0px_rgba(0,0,0,0.10)] inline-flex flex-col justify-start items-center gap-3">
                    <div class="self-stretch justify-start text-blue-600 text-xl font-semibold  leading-7">
                        Worker Performance</div>
                    <div class="self-stretch justify-start text-zinc-950 text-xl font-normal  leading-7">Top
                        Worker : ALex ( 50 Jobs )</div>
                    <div class="self-stretch justify-start text-zinc-950 text-xl font-normal  leading-7">
                        Average rating : 4.9/5</div>
                    <div class="self-stretch justify-start text-zinc-950 text-xl font-normal  leading-7">Late
                        Clock ins : 4%</div>
                </div>

                <!-- Attendance & Payout Card -->
                <div
                    class=" pl-4 pr-2.5 pt-5 pb-2.5 bg-white rounded-[10px] shadow-[0px_4px_4px_0px_rgba(0,0,0,0.10)] inline-flex flex-col justify-start items-center gap-3">
                    <div class="self-stretch justify-start text-blue-600 text-xl font-semibold  leading-7">
                        Attendance & Payout</div>
                    <div class="self-stretch justify-start text-zinc-950 text-xl font-normal  leading-7">On
                        time Attendance : 95 %</div>
                    <div class="self-stretch justify-start text-zinc-950 text-xl font-normal  leading-7">
                        Missed Shifts : 42</div>
                    <div class="self-stretch justify-start text-zinc-950 text-xl font-normal  leading-7">
                        Payouts Processed : $20,000</div>
                </div>
            </div>
        </div>
    </main>
@endsection
