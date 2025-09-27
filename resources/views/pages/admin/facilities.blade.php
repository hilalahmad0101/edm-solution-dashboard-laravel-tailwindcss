@extends('layouts.auth')
@section('title')
    Facilities
@endsection

@section('content')
    <main class="flex-1 p-4 lg:p-6 overflow-auto">
        <div class="pt-6 px-6 pb-12">
            <div class=" text-zinc-900 text-4xl font-bold leading-7">Facilities</div>
        </div>
        <div class="">
            <div class="overflow-x-auto px-6">
                <table class="w-full min-w-full table table-auto">
                    <thead class=" bg-white">
                        <tr>
                            <th
                                class="px-6 rounded-l-md py-6 text-left  text-sm font-semibold  text-[#1F3C88] capitalize tracking-wider">
                                Facility ID
                            </th>
                            <th class="px-6 py-6 text-left  text-sm font-semibold  text-[#1F3C88] capitalize tracking-wider">
                                Name
                            </th>
                            <th class="px-6 py-6 text-left  text-sm font-semibold  text-[#1F3C88] capitalize tracking-wider">
                                Location
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
                                12221221
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                City hospital;
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                Sarah York
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                Approved
                            </td>
                            <td class="px-6 rounded-r-md py-4 whitespace-nowrap text-sm space-x-2">
                                <button class=" px-8 py-1 cursor-pointer bg-[#B91414] rounded-[50px] text-white">
                                    Reject
                                </button>
                            </td>
                        </tr>
                        <tr class="h-3" />

                        <tr class="">
                            <td class="px-6 py-4 rounded-l-md whitespace-nowrap text-sm font-medium text-gray-900">
                                12221221
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                City hospital;
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                Sarah York
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                Approved
                            </td>
                            <td class="px-6 rounded-r-md py-4 whitespace-nowrap text-sm space-x-2">
                                <button class="py-1 px-8 cursor-pointer bg-[#B91414] rounded-[50px] text-white">
                                    Reject
                                </button>
                            </td>
                        </tr>
                        <tr class="h-3" />
                        <tr class="">
                            <td class="px-6 py-4 rounded-l-md whitespace-nowrap text-sm font-medium text-gray-900">
                                12221221
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                City hospital;
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                Sarah York
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                Approved
                            </td>
                            <td class="px-6 rounded-r-md py-4 whitespace-nowrap text-sm space-x-2">
                                <button class="py-1 px-8 cursor-pointer bg-[#B91414] rounded-[50px] text-white">
                                    Reject
                                </button>
                            </td>
                        </tr>
                        <tr class="h-3" />
                        <tr class="">
                            <td class="px-6 py-4 rounded-l-md whitespace-nowrap text-sm font-medium text-gray-900">
                                12221221
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                City hospital;
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                Sarah York
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                Approved
                            </td>
                            <td class="px-6 rounded-r-md py-4 whitespace-nowrap text-sm space-x-2">
                                <button class="py-1 px-8 cursor-pointer bg-[#B91414] rounded-[50px] text-white">
                                    Reject
                                </button>
                            </td>
                        </tr>
                        <tr class="h-3" />
                        <tr class="">
                            <td class="px-6 py-4 rounded-l-md whitespace-nowrap text-sm font-medium text-gray-900">
                                12221221
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                City hospital;
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                Sarah York
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                Approved
                            </td>
                            <td class="px-6 rounded-r-md py-4 whitespace-nowrap text-sm space-x-2">
                                <button class="py-1 px-8 cursor-pointer bg-[#B91414] rounded-[50px] text-white">
                                    Reject
                                </button>
                            </td>
                        </tr>
                        <tr class="h-3" />
                        <tr class="">
                            <td class="px-6 py-4 rounded-l-md whitespace-nowrap text-sm font-medium text-gray-900">
                                12221221
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                City hospital;
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                Sarah York
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                Approved
                            </td>
                            <td class="px-6 rounded-r-md py-4 whitespace-nowrap text-sm space-x-2">
                                <button class="py-1 px-8 cursor-pointer bg-[#B91414] rounded-[50px] text-white">
                                    Reject
                                </button>
                            </td>
                        </tr>
                        <tr class="h-3" />
                        <tr class="">
                            <td class="px-6 py-4 rounded-l-md whitespace-nowrap text-sm font-medium text-gray-900">
                                12221221
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                City hospital;
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                Sarah York
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                Approved
                            </td>
                            <td class="px-6 rounded-r-md py-4 whitespace-nowrap text-sm space-x-2">
                                <button class="py-1 px-8 cursor-pointer bg-[#B91414] rounded-[50px] text-white">
                                    Reject
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection
