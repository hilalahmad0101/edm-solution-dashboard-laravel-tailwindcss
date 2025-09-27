@extends('layouts.auth')
@section('title')
    Dashboard
@endsection

@section('content')
    <main class="flex-1 p-4 lg:p-6 overflow-auto">
        <div class="pt-6 px-6 pb-12">
            <div class=" text-zinc-900 text-4xl font-bold leading-7">Dashboard</div>
        </div>
        <div class="">
            <!-- Metrics Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="metric-card card-animation bg-blue-500 text-white p-6 rounded-lg shadow-lg">
                    <div class="self-stretch justify-start text-white text-xl font-normal  leading-7">Pending
                        Approvals</div>
                    <div class="self-stretch justify-start text-white text-3xl font-semibold  leading-7 mt-4">32
                    </div>
                </div>
                <div class="metric-card card-animation bg-green-500 text-white p-6 rounded-lg shadow-lg">
                    <div class="self-stretch justify-start text-white text-xl font-normal  leading-7">Active
                        Shifts</div>
                    <div class="self-stretch justify-start text-white text-3xl font-semibold  leading-7 mt-4">124
                    </div>
                </div>
                <div class="metric-card card-animation bg-orange-500 text-white p-6 rounded-lg shadow-lg">
                    <div class="w-52 justify-start text-white text-xl font-normal  leading-7">Expiring
                        Credentials</div>
                    <div class="self-stretch justify-start text-white text-3xl font-semibold  leading-7 mt-4">32
                    </div>
                </div>
                <div class="metric-card card-animation bg-red-500 text-white p-6 rounded-lg shadow-lg">
                    <div class="self-stretch justify-start text-white text-xl font-normal  leading-7">Disputes</div>
                    <div class="self-stretch justify-start text-white text-3xl font-semibold  leading-7 mt-4">32</div>
                </div>
            </div>

            <!-- Charts -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Revenue and Fulfillment Chart -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-lg font-semibold text-gray-800 mb-6">Revenue and Fulfillment</h3>
                    <div class="flex items-end space-x-2 h-64">
                        <div class="flex flex-col items-center flex-1">
                            <div class="chart-bar bg-blue-500 w-full rounded-t"
                                style="--bar-height: 120px; --delay: 0.1s; height: 120px;"></div>
                            <span class="text-xs text-gray-600 mt-2">17 Sun</span>
                        </div>
                        <div class="flex flex-col items-center flex-1">
                            <div class="chart-bar bg-blue-500 w-full rounded-t"
                                style="--bar-height: 100px; --delay: 0.2s; height: 100px;"></div>
                            <span class="text-xs text-gray-600 mt-2">18 Mon</span>
                        </div>
                        <div class="flex flex-col items-center flex-1">
                            <div class="chart-bar bg-blue-500 w-full rounded-t"
                                style="--bar-height: 80px; --delay: 0.3s; height: 80px;"></div>
                            <span class="text-xs text-gray-600 mt-2">19 Tue</span>
                        </div>
                        <div class="flex flex-col items-center flex-1">
                            <div class="chart-bar bg-blue-500 w-full rounded-t"
                                style="--bar-height: 140px; --delay: 0.4s; height: 140px;"></div>
                            <span class="text-xs text-gray-600 mt-2">20 Wed</span>
                        </div>
                        <div class="flex flex-col items-center flex-1">
                            <div class="chart-bar bg-blue-500 w-full rounded-t"
                                style="--bar-height: 160px; --delay: 0.5s; height: 160px;"></div>
                            <span class="text-xs text-gray-600 mt-2">21 Thu</span>
                        </div>
                        <div class="flex flex-col items-center flex-1">
                            <div class="chart-bar bg-blue-500 w-full rounded-t"
                                style="--bar-height: 180px; --delay: 0.6s; height: 180px;"></div>
                            <span class="text-xs text-gray-600 mt-2">22 Fri</span>
                        </div>
                        <div class="flex flex-col items-center flex-1">
                            <div class="chart-bar bg-blue-500 w-full rounded-t"
                                style="--bar-height: 150px; --delay: 0.7s; height: 150px;"></div>
                            <span class="text-xs text-gray-600 mt-2">23 Sat</span>
                        </div>
                    </div>
                </div>

                <!-- Shift Progress Chart -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-lg font-semibold text-gray-800 mb-6">Shift Progress</h3>
                    <div class="flex items-end space-x-2 h-64">
                        <div class="flex flex-col items-center flex-1">
                            <div class="chart-bar bg-blue-600 w-full rounded-t"
                                style="--bar-height: 180px; --delay: 0.1s; height: 180px;"></div>
                            <span class="text-xs text-gray-600 mt-2">17 Sun</span>
                        </div>
                        <div class="flex flex-col items-center flex-1">
                            <div class="chart-bar bg-blue-600 w-full rounded-t"
                                style="--bar-height: 120px; --delay: 0.2s; height: 120px;"></div>
                            <span class="text-xs text-gray-600 mt-2">18 Mon</span>
                        </div>
                        <div class="flex flex-col items-center flex-1">
                            <div class="chart-bar bg-blue-600 w-full rounded-t"
                                style="--bar-height: 90px; --delay: 0.3s; height: 90px;"></div>
                            <span class="text-xs text-gray-600 mt-2">19 Tue</span>
                        </div>
                        <div class="flex flex-col items-center flex-1">
                            <div class="chart-bar bg-blue-600 w-full rounded-t"
                                style="--bar-height: 140px; --delay: 0.4s; height: 140px;"></div>
                            <span class="text-xs text-gray-600 mt-2">20 Wed</span>
                        </div>
                        <div class="flex flex-col items-center flex-1">
                            <div class="chart-bar bg-blue-600 w-full rounded-t"
                                style="--bar-height: 160px; --delay: 0.5s; height: 160px;"></div>
                            <span class="text-xs text-gray-600 mt-2">21 Thu</span>
                        </div>
                        <div class="flex flex-col items-center flex-1">
                            <div class="chart-bar bg-blue-600 w-full rounded-t"
                                style="--bar-height: 170px; --delay: 0.6s; height: 170px;"></div>
                            <span class="text-xs text-gray-600 mt-2">22 Fri</span>
                        </div>
                        <div class="flex flex-col items-center flex-1">
                            <div class="chart-bar bg-blue-600 w-full rounded-t"
                                style="--bar-height: 150px; --delay: 0.7s; height: 150px;"></div>
                            <span class="text-xs text-gray-600 mt-2">23 Sat</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
