@extends('layouts.auth')
@section('title')
    Shifts Management - Calendar View
@endsection

@section('content')
    <main class="flex-1 p-4 lg:p-6 overflow-auto bg-gradient-to-br from-gray-50 to-gray-100">
        <!-- Header -->
        <div class="mb-6 flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-bold text-gray-900 mb-1">Shift Calendar View</h1>
                <p class="text-sm text-gray-500">Visual calendar showing open and filled shifts</p>
            </div>
            <div class="flex items-center justify-between space-x-3">
                <button
                    class="px-4 py-2 bg-[#2B4A99] text-white rounded-lg text-sm font-medium hover:bg-gray-800 transition-colors">
                    Week View
                </button>
                <button
                    class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-200 transition-colors">
                    Month View
                </button>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
            <!-- Total Shifts -->
            <div class="bg-white rounded-xl border border-gray-200 p-5 hover:shadow-md transition-shadow">
                <div class="flex items-center justify-between mb-2">
                    <span class="text-sm font-medium text-gray-600">Total Shifts</span>
                    <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
                <div class="text-3xl font-bold text-gray-900">9</div>
                <p class="text-xs text-gray-500 mt-1">Week</p>
            </div>

            <!-- Open Shifts -->
            <div class="bg-white rounded-xl border border-gray-200 p-5 hover:shadow-md transition-shadow">
                <div class="flex items-center justify-between mb-2">
                    <span class="text-sm font-medium text-gray-600">Open Shifts</span>
                    <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                    </svg>
                </div>
                <div class="text-3xl font-bold text-gray-900">4</div>
                <p class="text-xs text-gray-500 mt-1">Need assignment</p>
            </div>

            <!-- Filled Shifts -->
            <div class="bg-white rounded-xl border border-gray-200 p-5 hover:shadow-md transition-shadow">
                <div class="flex items-center justify-between mb-2">
                    <span class="text-sm font-medium text-gray-600">Filled Shifts</span>
                    <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div class="text-3xl font-bold text-gray-900">5</div>
                <p class="text-xs text-gray-500 mt-1">Staff assigned</p>
            </div>
        </div>

        <!-- Calendar -->
        <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
            <!-- Calendar Header -->
            <div class="p-6 border-b border-gray-200 flex items-center justify-between">
                <div class="flex items-center gap-4">
                    <button class="p-2 hover:bg-gray-100 rounded-lg transition-colors">
                        <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <h2 class="text-lg font-semibold text-gray-900">Week of October 13, 2024</h2>
                    <button class="p-2 hover:bg-gray-100 rounded-lg transition-colors">
                        <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
                <div class="flex items-center gap-2">

                    <button
                        class="ml-2 px-4 py-2 bg-gray-900 text-white rounded-lg text-sm font-medium hover:bg-blue-700 transition-colors">
                        Today
                    </button>
                </div>
            </div>

            <!-- Calendar Grid -->
            <div class="p-6">
                <div class="grid grid-cols-7 gap-4">
                    <!-- Day Headers -->
                    <div class="text-center pb-4">
                        <div class="text-sm font-semibold text-gray-700">Sunday</div>
                    </div>
                    <div class="text-center pb-4">
                        <div class="text-sm font-semibold text-gray-700">Monday</div>
                    </div>
                    <div class="text-center pb-4">
                        <div class="text-sm font-semibold text-gray-700">Tuesday</div>
                    </div>
                    <div class="text-center pb-4">
                        <div class="text-sm font-semibold text-gray-700">Wednesday</div>
                    </div>
                    <div class="text-center pb-4">
                        <div class="text-sm font-semibold text-gray-700">Thursday</div>
                    </div>
                    <div class="text-center pb-4">
                        <div class="text-sm font-semibold text-gray-700">Friday</div>
                    </div>
                    <div class="text-center pb-4">
                        <div class="text-sm font-semibold text-gray-700">Saturday</div>
                    </div>

                    <!-- Sunday 13 -->
                    <div class="bg-gray-50 rounded-lg p-3 min-h-[180px] border border-gray-200">
                        <div class="text-sm font-medium text-gray-900 mb-2">13</div>
                    </div>

                    <!-- Monday 14 -->
                    <div class="bg-gray-50 rounded-lg p-3 min-h-[180px] border border-gray-200">
                        <div class="text-sm font-medium text-gray-900 mb-2">14</div>
                    </div>

                    <!-- Tuesday 15 - Selected Day -->
                    <div class="bg-blue-50 rounded-lg p-3 min-h-[180px] border-2 border-blue-500">
                        <div class="text-sm font-semibold text-blue-900 mb-3">15</div>

                        <!-- Shift 1 -->
                        <div class="bg-green-100 border-l-4 border-green-500 rounded p-2 mb-2">
                            <div class="flex items-start justify-between mb-1">
                                <span class="text-xs font-semibold text-green-800">8:00 AM</span>
                            </div>
                            <div class="text-xs font-medium text-gray-900">St. Mary's</div>
                            <div class="text-xs text-green-700 font-medium">RN</div>
                        </div>

                        <!-- Shift 2 -->
                        <div class="bg-yellow-100 border-l-4 border-yellow-500 rounded p-2">
                            <div class="flex items-start justify-between mb-1">
                                <span class="text-xs font-semibold text-yellow-800">2:00 PM</span>
                            </div>
                            <div class="text-xs font-medium text-gray-900">General Medical</div>
                            <div class="text-xs text-yellow-700 font-medium">LPN</div>
                        </div>
                    </div>

                    <!-- Wednesday 16 -->
                    <div class="bg-gray-50 rounded-lg p-3 min-h-[180px] border border-gray-200">
                        <div class="text-sm font-medium text-gray-900 mb-3">16</div>

                        <div class="bg-green-100 border-l-4 border-green-500 rounded p-2">
                            <div class="flex items-start justify-between mb-1">
                                <span class="text-xs font-semibold text-green-800">10:00 PM</span>
                            </div>
                            <div class="text-xs font-medium text-gray-900">City Hospital</div>
                            <div class="text-xs text-green-700 font-medium">CNA</div>
                        </div>
                    </div>

                    <!-- Thursday 17 -->
                    <div class="bg-gray-50 rounded-lg p-3 min-h-[180px] border border-gray-200">
                        <div class="text-sm font-medium text-gray-900 mb-2">17</div>
                    </div>

                    <!-- Friday 18 -->
                    <div class="bg-gray-50 rounded-lg p-3 min-h-[180px] border border-gray-200">
                        <div class="text-sm font-medium text-gray-900 mb-3">18</div>

                        <div class="bg-yellow-100 border-l-4 border-yellow-500 rounded p-2">
                            <div class="flex items-start justify-between mb-1">
                                <span class="text-xs font-semibold text-yellow-800">6:00 AM</span>
                            </div>
                            <div class="text-xs font-medium text-gray-900">Care Home</div>
                            <div class="text-xs text-yellow-700 font-medium">RN</div>
                        </div>
                    </div>

                    <!-- Saturday 19 -->
                    <div class="bg-gray-50 rounded-lg p-3 min-h-[180px] border border-gray-200">
                        <div class="text-sm font-medium text-gray-900 mb-3">19</div>

                        <div class="bg-green-100 border-l-4 border-green-500 rounded p-2 mb-2">
                            <div class="flex items-start justify-between mb-1">
                                <span class="text-xs font-semibold text-green-800">6:00 PM</span>
                            </div>
                            <div class="text-xs font-medium text-gray-900">County Hospital</div>
                            <div class="text-xs text-green-700 font-medium">LPN</div>
                        </div>

                        <div class="bg-yellow-100 border-l-4 border-yellow-500 rounded p-2">
                            <div class="flex items-start justify-between mb-1">
                                <span class="text-xs font-semibold text-yellow-800">11:00 AM</span>
                            </div>
                            <div class="text-xs font-medium text-gray-900">St. Mary's</div>
                            <div class="text-xs text-yellow-700 font-medium">RN</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Legend -->
            <div class="px-6 pb-6">
                <div class="flex items-center gap-6 text-sm">
                    <div class="flex items-center gap-2">
                        <div class="w-4 h-4 bg-green-500 rounded"></div>
                        <span class="text-gray-700">Filled - Staff Assigned</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="w-4 h-4 bg-yellow-500 rounded"></div>
                        <span class="text-gray-700">Open - Need Assignment</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="w-4 h-4 bg-red-500 rounded"></div>
                        <span class="text-gray-700">Cancelled</span>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
