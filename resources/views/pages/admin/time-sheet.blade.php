@extends('layouts.auth')
@section('title')
    Timesheet Exceptions
@endsection

@section('content')
    <main class="flex-1 p-4 lg:p-6 overflow-auto bg-white">
        <!-- Header -->
        <div class="flex items-center justify-between mb-6">
            <div>
                <h1 class="text-xl font-semibold text-gray-900 mb-1">Timesheet Exceptions</h1>
                <p class="text-sm text-gray-500">Review and approve flagged timesheet entries</p>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
            <!-- Pending Review -->
            <div class="bg-white rounded-xl border border-gray-200 p-5">
                <div class="flex items-center justify-between mb-3">
                    <span class="text-sm font-medium text-gray-700">Pending Review</span>
                    <div class="w-8 h-8 bg-orange-100 rounded-lg flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5 text-orange-600">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </div>
                </div>
                <div class="text-3xl font-bold text-gray-900 mb-1">5</div>
                <p class="text-xs text-gray-500">Awaiting approval</p>
            </div>

            <!-- High Priority -->
            <div class="bg-white rounded-xl border border-gray-200 p-5">
                <div class="flex items-center justify-between mb-3">
                    <span class="text-sm font-medium text-gray-700">High Priority</span>
                    <div class="w-8 h-8 bg-red-100 rounded-lg flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5 text-red-600">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                        </svg>
                    </div>
                </div>
                <div class="text-3xl font-bold text-gray-900 mb-1">1</div>
                <p class="text-xs text-gray-500">Urgent exceptions</p>
            </div>

            <!-- Total Discrepancy -->
            <div class="bg-white rounded-xl border border-gray-200 p-5">
                <div class="flex items-center justify-between mb-3">
                    <span class="text-sm font-medium text-gray-700">Total Discrepancy</span>
                    <div class="w-8 h-8 bg-purple-100 rounded-lg flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5 text-purple-600">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </div>
                </div>
                <div class="text-3xl font-bold text-gray-900 mb-1">+1.00h</div>
                <p class="text-xs text-gray-500">Hours variance</p>
            </div>

            <!-- Approved Today -->
            <div class="bg-white rounded-xl border border-gray-200 p-5">
                <div class="flex items-center justify-between mb-3">
                    <span class="text-sm font-medium text-gray-700">Approved Today</span>
                    <div class="w-8 h-8 bg-green-100 rounded-lg flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5 text-green-600">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </div>
                </div>
                <div class="text-3xl font-bold text-gray-900 mb-1">1</div>
                <p class="text-xs text-gray-500">Processed entries</p>
            </div>
        </div>

        <!-- Search and Filters -->

        <!-- Search and Filters -->
        <div class="bg-white rounded-xl border border-gray-200 p-4 mb-6 shadow-sm">
            <div class="flex flex-col md:flex-row gap-3">
                <div class="relative flex-1">
                    <input type="text" placeholder="Search credentials..."
                        class="w-full pl-10 pr-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all" />
                    <svg class="absolute left-3 top-3 w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <select
                    class="px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all min-w-[140px]">
                    <option value="">All Status</option>
                    <option value="active">Active</option>
                    <option value="expiring">Expiring Soon</option>
                    <option value="expired">Expired</option>
                </select>
                <select
                    class="px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all min-w-[140px]">
                    <option value="">All Severity</option>
                    <option value="low">Low</option>
                    <option value="medium">Medium</option>
                    <option value="high">High Priority</option>
                </select>
            </div>
        </div>

        <!-- Table Container -->
        <div class="overflow-x-auto border border-gray-200 rounded-xl bg-white shadow-sm">
            <div class="p-6 border-b border-gray-200">
                <h2 class="text-lg font-semibold text-gray-800">Flagged Timesheet Entries</h2>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-600">ID</th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-600">Staff Name</th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-600">Facility</th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-600">Shift Date</th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-600">Scheduled</th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-600">Actual</th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-600">Discrepancy</th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-600">Severity</th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-600">Status</th>
                            <th class="px-6 py-4 text-center text-xs font-medium text-gray-600">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        <!-- Row 1 -->
                        <tr class="border-b border-gray-100 hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4 text-sm text-gray-900">TE001</td>
                            <td class="px-6 py-4 text-sm text-gray-900">Sarah Johnson</td>
                            <td class="px-6 py-4 text-sm text-gray-700">St. Mary's Hospital</td>
                            <td class="px-6 py-4 text-sm text-gray-700">2024-10-10</td>
                            <td class="px-6 py-4 text-sm text-gray-700">08:00 AM - 04:00 PM</td>
                            <td class="px-6 py-4 text-sm text-gray-700">08:15 AM - 04:30 PM</td>
                            <td class="px-6 py-4 text-sm text-green-600 font-medium">+0.25h</td>
                            <td class="px-6 py-4">
                                <span
                                    class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-xs font-medium">Low</span>
                            </td>
                            <td class="px-6 py-4">
                                <span
                                    class="px-3 py-1 bg-orange-100 text-orange-700 rounded-full text-xs font-medium flex items-center gap-1 w-fit">
                                    <span class="w-1.5 h-1.5 bg-orange-500 rounded-full"></span>
                                    Pending
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center justify-center gap-2">
                                    <button class="p-2 hover:bg-gray-100 rounded-lg transition-colors"
                                        title="View Details">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-600">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        </svg>
                                    </button>
                                    <button class="p-2 hover:bg-green-100 rounded-lg transition-colors" title="Approve">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-green-600">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                    </button>
                                    <button class="p-2 hover:bg-red-100 rounded-lg transition-colors" title="Reject">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-red-600">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 2 -->
                        <tr class="border-b border-gray-100 hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4 text-sm text-gray-900">TE002</td>
                            <td class="px-6 py-4 text-sm text-gray-900">Michael Chen</td>
                            <td class="px-6 py-4 text-sm text-gray-700">General Medical</td>
                            <td class="px-6 py-4 text-sm text-gray-700">2024-10-11</td>
                            <td class="px-6 py-4 text-sm text-gray-700">08:00 AM - 04:00 PM</td>
                            <td class="px-6 py-4 text-sm text-gray-700">07:45 AM - 03:00 PM</td>
                            <td class="px-6 py-4 text-sm text-red-600 font-medium">-0.75h</td>
                            <td class="px-6 py-4">
                                <span
                                    class="px-3 py-1 bg-yellow-100 text-yellow-700 rounded-full text-xs font-medium">Medium</span>
                            </td>
                            <td class="px-6 py-4">
                                <span
                                    class="px-3 py-1 bg-orange-100 text-orange-700 rounded-full text-xs font-medium flex items-center gap-1 w-fit">
                                    <span class="w-1.5 h-1.5 bg-orange-500 rounded-full"></span>
                                    Pending
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center justify-center gap-2">
                                    <button class="p-2 hover:bg-gray-100 rounded-lg transition-colors"
                                        title="View Details">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-600">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        </svg>
                                    </button>
                                    <button class="p-2 hover:bg-green-100 rounded-lg transition-colors" title="Approve">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-green-600">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                    </button>
                                    <button class="p-2 hover:bg-red-100 rounded-lg transition-colors" title="Reject">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-red-600">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 3 -->
                        <tr class="border-b border-gray-100 hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4 text-sm text-gray-900">TE003</td>
                            <td class="px-6 py-4 text-sm text-gray-900">Emma Davis</td>
                            <td class="px-6 py-4 text-sm text-gray-700">City Hospital</td>
                            <td class="px-6 py-4 text-sm text-gray-700">2024-10-12</td>
                            <td class="px-6 py-4 text-sm text-gray-700">02:00 PM - 10:00 PM</td>
                            <td class="px-6 py-4 text-sm text-gray-700">02:30 PM - 10:00 PM</td>
                            <td class="px-6 py-4 text-sm text-red-600 font-medium">-0.5h</td>
                            <td class="px-6 py-4">
                                <span
                                    class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-xs font-medium">Low</span>
                            </td>
                            <td class="px-6 py-4">
                                <span
                                    class="px-3 py-1 bg-orange-100 text-orange-700 rounded-full text-xs font-medium flex items-center gap-1 w-fit">
                                    <span class="w-1.5 h-1.5 bg-orange-500 rounded-full"></span>
                                    Pending
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center justify-center gap-2">
                                    <button class="p-2 hover:bg-gray-100 rounded-lg transition-colors"
                                        title="View Details">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-600">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        </svg>
                                    </button>
                                    <button class="p-2 hover:bg-green-100 rounded-lg transition-colors" title="Approve">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-green-600">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                    </button>
                                    <button class="p-2 hover:bg-red-100 rounded-lg transition-colors" title="Reject">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-red-600">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 4 -->
                        <tr class="border-b border-gray-100 hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4 text-sm text-gray-900">TE004</td>
                            <td class="px-6 py-4 text-sm text-gray-900">James Wilson</td>
                            <td class="px-6 py-4 text-sm text-gray-700">County Hospital</td>
                            <td class="px-6 py-4 text-sm text-gray-700">2024-10-13</td>
                            <td class="px-6 py-4 text-sm text-gray-700">10:00 PM - 06:00 AM</td>
                            <td class="px-6 py-4 text-sm text-gray-700">10:00 PM - 08:00 AM</td>
                            <td class="px-6 py-4 text-sm text-green-600 font-medium">+2.0h</td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1 bg-red-100 text-red-700 rounded-full text-xs font-medium">High
                                    Priority</span>
                            </td>
                            <td class="px-6 py-4">
                                <span
                                    class="px-3 py-1 bg-orange-100 text-orange-700 rounded-full text-xs font-medium flex items-center gap-1 w-fit">
                                    <span class="w-1.5 h-1.5 bg-orange-500 rounded-full"></span>
                                    Pending
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center justify-center gap-2">
                                    <button class="p-2 hover:bg-gray-100 rounded-lg transition-colors"
                                        title="View Details">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-600">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        </svg>
                                    </button>
                                    <button class="p-2 hover:bg-green-100 rounded-lg transition-colors" title="Approve">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-green-600">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                    </button>
                                    <button class="p-2 hover:bg-red-100 rounded-lg transition-colors" title="Reject">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-red-600">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 5 -->
                        <tr class="border-b border-gray-100 hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4 text-sm text-gray-900">TE005</td>
                            <td class="px-6 py-4 text-sm text-gray-900">Lisa Anderson</td>
                            <td class="px-6 py-4 text-sm text-gray-700">St. Mary's Hospital</td>
                            <td class="px-6 py-4 text-sm text-gray-700">2024-10-14</td>
                            <td class="px-6 py-4 text-sm text-gray-700">08:00 AM - 04:00 PM</td>
                            <td class="px-6 py-4 text-sm text-gray-700">08:00 AM - 04:00 PM</td>
                            <td class="px-6 py-4 text-sm text-gray-600 font-medium">0.0h</td>
                            <td class="px-6 py-4">
                                <span
                                    class="px-3 py-1 bg-yellow-100 text-yellow-700 rounded-full text-xs font-medium">Medium</span>
                            </td>
                            <td class="px-6 py-4">
                                <span
                                    class="px-3 py-1 bg-orange-100 text-orange-700 rounded-full text-xs font-medium flex items-center gap-1 w-fit">
                                    <span class="w-1.5 h-1.5 bg-orange-500 rounded-full"></span>
                                    Pending
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center justify-center gap-2">
                                    <button class="p-2 hover:bg-gray-100 rounded-lg transition-colors"
                                        title="View Details">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-600">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        </svg>
                                    </button>
                                    <button class="p-2 hover:bg-green-100 rounded-lg transition-colors" title="Approve">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-green-600">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                    </button>
                                    <button class="p-2 hover:bg-red-100 rounded-lg transition-colors" title="Reject">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-red-600">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 6 -->
                        <tr class="border-b border-gray-100 hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4 text-sm text-gray-900">TE006</td>
                            <td class="px-6 py-4 text-sm text-gray-900">David Martinez</td>
                            <td class="px-6 py-4 text-sm text-gray-700">Care Home Plus</td>
                            <td class="px-6 py-4 text-sm text-gray-700">2024-10-09</td>
                            <td class="px-6 py-4 text-sm text-gray-700">08:00 AM - 04:00 PM</td>
                            <td class="px-6 py-4 text-sm text-gray-700">09:30 AM - 05:30 PM</td>
                            <td class="px-6 py-4 text-sm text-gray-600 font-medium">0.0h</td>
                            <td class="px-6 py-4">
                                <span
                                    class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-xs font-medium">Low</span>
                            </td>
                            <td class="px-6 py-4">
                                <span
                                    class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-medium flex items-center gap-1 w-fit">
                                    <span class="w-1.5 h-1.5 bg-green-500 rounded-full"></span>
                                    Approved
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center justify-center gap-2">
                                    <button class="p-2 hover:bg-gray-100 rounded-lg transition-colors"
                                        title="View Details">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-600">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection
