@extends('layouts.auth')
@section('title')
    Shifts Details
@endsection

@section('content')
    <main class="flex-1 p-4 lg:p-6 overflow-auto">
        <div class="pt-6 px-6 pb-12">
            <div class=" text-zinc-900 text-4xl font-bold leading-7">Shifts Details</div>
        </div>
        <div class="">

            <div class="flex flex-wrap gap-4 px-6 mb-9">
                <button
                    class="w-36 px-4 py-3 bg-teal-600 rounded inline-flex justify-center items-center gap-3
                      text-white text-base font-semibold  leading-normal">
                    Active</button>
                <button
                    class="w-36 px-4 py-3 bg-[#C0C0C0] rounded inline-flex justify-center items-center gap-3
                      text-white text-base font-semibold  leading-normal">Upcoming</button>
                <button
                    class="w-36 px-4 py-3 bg-[#C0C0C0] rounded inline-flex justify-center items-center gap-3
                      text-white text-base font-semibold  leading-normal">Complete</button>
                <button
                    class="w-36 px-4 py-3 bg-[#C0C0C0] rounded inline-flex justify-center items-center gap-3
                      text-white text-base font-semibold  leading-normal">Cancel</button>
            </div>

            <div class="overflow-x-auto px-6">
                <table class="w-full min-w-full table table-auto">
                    <thead class=" bg-white">
                        <tr>
                            <th
                                class="px-6 rounded-l-md py-6 text-left  text-sm font-semibold  text-[#1F3C88] capitalize tracking-wider">
                                Shift ID
                            </th>
                            <th
                                class="px-6 py-6 text-left  text-sm font-semibold  text-[#1F3C88] capitalize tracking-wider">
                                Facility
                            </th>
                            <th
                                class="px-6 py-6 text-left  text-sm font-semibold  text-[#1F3C88] capitalize tracking-wider">
                                Worker
                            </th>
                            <th
                                class="px-6 py-6 text-left  text-sm font-semibold  text-[#1F3C88] capitalize tracking-wider">
                                Time
                            </th>
                            <th
                                class="px-6 py-6 text-left  text-sm font-semibold  text-[#1F3C88] capitalize tracking-wider">
                                Status
                            </th>
                            <th
                                class="px-6 rounded-r-md py-6 text-left  text-sm font-semibold  text-[#1F3C88] capitalize tracking-wider">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        <tr class="h-3" />
                        <tr class="">
                            <td class="px-6 py-4 rounded-l-md whitespace-nowrap text-sm font-medium text-gray-900">
                                Alexander Smith
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                City hospital
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                Sarah
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                08:00 AM - 04:00 PM
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                Active
                            </td>
                            <td class="px-6 rounded-r-md py-4 whitespace-nowrap text-sm space-x-2">
                                <button class=" px-8 py-1 cursor-pointer bg-red-700 rounded-[50px] text-white">
                                    Cancel
                                </button>
                            </td>
                        </tr>
                        <tr class="h-3" />

                        <tr class="">
                            <td class="px-6 py-4 rounded-l-md whitespace-nowrap text-sm font-medium text-gray-900">
                                Alexander Smith
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                City hospital
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                Sarah
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                08:00 AM - 04:00 PM
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                Active
                            </td>
                            <td class="px-6 rounded-r-md py-4 whitespace-nowrap text-sm space-x-2">
                                <button class="py-1 px-8 cursor-pointer bg-red-700 rounded-[50px] text-white">
                                    Cancel
                                </button>
                            </td>
                        </tr>
                        <tr class="h-3" />
                        <tr class="">
                            <td class="px-6 py-4 rounded-l-md whitespace-nowrap text-sm font-medium text-gray-900">
                                Alexander Smith
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                City hospital
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                Sarah
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                08:00 AM - 04:00 PM
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                Active
                            </td>
                            <td class="px-6 rounded-r-md py-4 whitespace-nowrap text-sm space-x-2">
                                <button class="py-1 px-8 cursor-pointer bg-red-700 rounded-[50px] text-white">
                                    Cancel
                                </button>
                            </td>
                        </tr>
                        <tr class="h-3" />
                        <tr class="">
                            <td class="px-6 py-4 rounded-l-md whitespace-nowrap text-sm font-medium text-gray-900">
                                Alexander Smith
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                City hospital
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                Sarah
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                08:00 AM - 04:00 PM
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                Active
                            </td>
                            <td class="px-6 rounded-r-md py-4 whitespace-nowrap text-sm space-x-2">
                                <button class="py-1 px-8 cursor-pointer bg-red-700 rounded-[50px] text-white">
                                    Cancel
                                </button>
                            </td>
                        </tr>
                        <tr class="h-3" />
                        <tr class="">
                            <td class="px-6 py-4 rounded-l-md whitespace-nowrap text-sm font-medium text-gray-900">
                                Alexander Smith
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                City hospital
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                Sarah
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                08:00 AM - 04:00 PM
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                Active
                            </td>
                            <td class="px-6 rounded-r-md py-4 whitespace-nowrap text-sm space-x-2">
                                <button class="py-1 px-8 cursor-pointer bg-red-700 rounded-[50px] text-white">
                                    Cancel
                                </button>
                            </td>
                        </tr>
                        <tr class="h-3" />
                        <tr class="">
                            <td class="px-6 py-4 rounded-l-md whitespace-nowrap text-sm font-medium text-gray-900">
                                Alexander Smith
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                City hospital
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                Sarah
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                08:00 AM - 04:00 PM
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                Active
                            </td>
                            <td class="px-6 rounded-r-md py-4 whitespace-nowrap text-sm space-x-2">
                                <button class="py-1 px-8 cursor-pointer bg-red-700 rounded-[50px] text-white">
                                    Cancel
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection
