@extends('layouts.auth')
@section('title')
    Report Management
@endsection

@section('content')
    <main class="flex-1 p-4 lg:p-6 overflow-auto">
        <div class="flex items-center justify-between pb-6">
            <div>
                <div class=" text-zinc-900 text-2xl font-normal leading-7">Reports & Analytics</div>
                <div class="font-[Arial] text-[#717182] font-normal text-[16px] leading-[24px] tracking-[0px]">
                    Insights on growth, revenue, and activity
                </div>
            </div>
            <div class="flex items-center space-x-4">

                <x-outline-button title="Export CSV"
                    icon='<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="black" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
</svg>' />

                <x-button title="Export PDF"
                    icon='<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
</svg>' />
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <x-payment-card title="Total Users" count="450" sub_title="+15.5% vs last month" />
            <x-payment-card title="Shift Fill Rate" count="92.5%" sub_title="+2.3% vs last month" />
            <x-payment-card title="Cancellation Rate" count="5.2%" sub_title="-1.1% vs last month" />
            <x-payment-card title="Total Revenue" count="$602K" sub_title="+18.2% vs last month" />
        </div>
        <!-- Table Container -->

        <div class="overflow-x-auto mt-6 border border-[#0000001A] rounded-lg bg-white p-6">
            <div class="mb-6">
                <h2 class="text-[16px] font-normal text-gray-800">Facility Usage Statistics</h2>
            </div>
            <div class="mx-auto bg-white rounded-lg  ">
                <div class="relative" style="height: 400px;">
                    <canvas id="userGrowthChart"></canvas>
                </div>
            </div>
        </div>

        <div class="overflow-x-auto mt-6 border border-[#0000001A] rounded-lg bg-white p-6">
            <div class="mb-6">
                <h2 class="text-[16px] font-normal text-gray-800">User Growth Trend</h2>
            </div>
            <div class="mx-auto bg-white rounded-lg  ">
                <div class="relative" style="height: 400px;">
                    <canvas id="facilityChart"></canvas>
                </div>
            </div>
        </div>

        <div class="overflow-x-auto mt-6 border border-[#0000001A] rounded-lg bg-white p-6">
            <div class="mb-6">
                <h2 class="text-[16px] font-normal text-gray-800">Revenue & Payouts Comparison</h2>
            </div>
            <div class="mx-auto bg-white rounded-lg  ">
                <div class="relative" style="height: 400px;">
                    <canvas id="revenueChart"></canvas>
                </div>
            </div>
        </div>

        <div class="overflow-x-auto mt-6 border border-[#0000001A] rounded-lg bg-white p-6">
            <div class="mb-6">
                <h2 class="text-[16px] font-normal text-gray-800">Key Takeaways</h2>
            </div>
            <div class="mx-auto bg-white rounded-lg px-6">
                <h2 class="text-[16px] font-normal my-2 text-gray-800">User base grew by 15.5% this month, with consistent
                    new
                    user acquisition</h2>
                <h2 class="text-[16px] font-normal my-2 text-gray-800">Shift fill rate remains strong at 92.5%, indicating
                    high platform utilization</h2>
                <h2 class="text-[16px] font-normal my-2 text-gray-800">Cancellation rate decreased to 5.2%, showing improved
                    commitment from both parties</h2>
                <h2 class="text-[16px] font-normal my-2 text-gray-800">Revenue increased by 18.2% compared to last month,
                    driven by increased facility usage</h2>
                <h2 class="text-[16px] font-normal my-2 text-gray-800">General Hospital and Sunset Care Home are the most
                    active facilities</h2>
            </div>
        </div>
    </main>
@endsection

@push('scripts')
    <script>
        const ctx = document.getElementById('userGrowthChart').getContext('2d');

        const userGrowthChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                        label: 'Total Users',
                        data: [133, 175, 233, 300, 367, 450],
                        borderColor: '#3b82f6',
                        backgroundColor: 'rgba(59, 130, 246, 0.1)',
                        borderWidth: 2,
                        tension: 0.4,
                        pointRadius: 5,
                        pointHoverRadius: 7,
                        pointBackgroundColor: '#3b82f6',
                        pointBorderColor: '#fff',
                        pointBorderWidth: 2,
                        fill: true
                    },
                    {
                        label: 'New Users',
                        data: [50, 67, 58, 67, 67, 67],
                        borderColor: '#14b8a6',
                        backgroundColor: 'rgba(20, 184, 166, 0.1)',
                        borderWidth: 2,
                        tension: 0.4,
                        pointRadius: 5,
                        pointHoverRadius: 7,
                        pointBackgroundColor: '#14b8a6',
                        pointBorderColor: '#fff',
                        pointBorderWidth: 2,
                        fill: true
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                interaction: {
                    intersect: false,
                    mode: 'index'
                },
                plugins: {
                    legend: {
                        display: true,
                        position: 'bottom',
                        labels: {
                            usePointStyle: true,
                            padding: 20,
                            font: {
                                size: 13,
                                family: "'Inter', sans-serif"
                            }
                        }
                    },
                    tooltip: {
                        backgroundColor: 'rgba(0, 0, 0, 0.8)',
                        padding: 12,
                        borderColor: 'rgba(255, 255, 255, 0.2)',
                        borderWidth: 1,
                        titleFont: {
                            size: 14,
                            weight: 'bold'
                        },
                        bodyFont: {
                            size: 13
                        },
                        displayColors: true,
                        callbacks: {
                            label: function(context) {
                                return context.dataset.label + ': ' + context.parsed.y + ' users';
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 600,
                        ticks: {
                            stepSize: 150,
                            font: {
                                size: 12
                            },
                            color: '#6b7280'
                        },
                        grid: {
                            color: 'rgba(0, 0, 0, 0.05)',
                            drawBorder: false
                        }
                    },
                    x: {
                        ticks: {
                            font: {
                                size: 12
                            },
                            color: '#6b7280'
                        },
                        grid: {
                            display: false,
                            drawBorder: false
                        }
                    }
                }
            }
        });

        const ctx1 = document.getElementById('facilityChart').getContext('2d');

        const facilityChart = new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: ['General Hospital', 'City Medical', 'Skilled Care', 'Metro Health'],
                datasets: [{
                        label: 'Shifts Posted',
                        data: [45, 37, 57, 30],
                        backgroundColor: '#3b82f6',
                        borderColor: '#2563eb',
                        borderWidth: 1,
                        borderRadius: 4
                    },
                    {
                        label: 'Shifts Filled',
                        data: [40, 34, 52, 27],
                        backgroundColor: '#14b8a6',
                        borderColor: '#0d9488',
                        borderWidth: 1,
                        borderRadius: 4
                    },
                    {
                        label: 'Shifts Cancelled',
                        data: [5, 3, 5, 3],
                        backgroundColor: '#ef4444',
                        borderColor: '#dc2626',
                        borderWidth: 1,
                        borderRadius: 4
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                interaction: {
                    intersect: false,
                    mode: 'index'
                },
                plugins: {
                    legend: {
                        display: true,
                        position: 'bottom',
                        labels: {
                            usePointStyle: true,
                            padding: 20,
                            font: {
                                size: 13,
                                family: "'Inter', sans-serif"
                            }
                        }
                    },
                    tooltip: {
                        backgroundColor: 'rgba(0, 0, 0, 0.8)',
                        padding: 12,
                        borderColor: 'rgba(255, 255, 255, 0.2)',
                        borderWidth: 1,
                        titleFont: {
                            size: 14,
                            weight: 'bold'
                        },
                        bodyFont: {
                            size: 13
                        },
                        displayColors: true,
                        callbacks: {
                            label: function(context) {
                                return context.dataset.label + ': ' + context.parsed.y + ' shifts';
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 60,
                        ticks: {
                            stepSize: 15,
                            font: {
                                size: 12
                            },
                            color: '#6b7280'
                        },
                        grid: {
                            color: 'rgba(0, 0, 0, 0.05)',
                            drawBorder: false
                        }
                    },
                    x: {
                        ticks: {
                            font: {
                                size: 12
                            },
                            color: '#6b7280'
                        },
                        grid: {
                            display: false,
                            drawBorder: false
                        }
                    }
                }
            }
        });

        const ctx2 = document.getElementById('revenueChart').getContext('2d');

        new Chart(ctx2, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                        label: 'Revenue',
                        data: [5500, 7000, 8500, 10500, 13000, 15500],
                        borderColor: '#14b8a6',
                        backgroundColor: 'rgba(20, 184, 166, 0)',
                        borderWidth: 2,
                        tension: 0.4,
                        pointRadius: 4,
                        pointHoverRadius: 6,
                        pointBackgroundColor: '#14b8a6',
                        pointBorderColor: '#14b8a6',
                        pointBorderWidth: 2
                    },
                    {
                        label: 'Payouts',
                        data: [5000, 6500, 8000, 9500, 12000, 14000],
                        borderColor: '#f59e0b',
                        backgroundColor: 'rgba(245, 158, 11, 0)',
                        borderWidth: 2,
                        tension: 0.4,
                        pointRadius: 4,
                        pointHoverRadius: 6,
                        pointBackgroundColor: '#f59e0b',
                        pointBorderColor: '#f59e0b',
                        pointBorderWidth: 2
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                interaction: {
                    intersect: false,
                    mode: 'index'
                },
                plugins: {
                    legend: {
                        display: true,
                        position: 'bottom',
                        labels: {
                            usePointStyle: true,
                            padding: 20,
                            font: {
                                size: 13
                            }
                        }
                    },
                    tooltip: {
                        backgroundColor: 'rgba(0, 0, 0, 0.8)',
                        padding: 12,
                        borderColor: 'rgba(255, 255, 255, 0.2)',
                        borderWidth: 1,
                        titleFont: {
                            size: 14,
                            weight: 'bold'
                        },
                        bodyFont: {
                            size: 13
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 16000,
                        ticks: {
                            stepSize: 4000,
                            font: {
                                size: 11
                            },
                            color: '#6b7280'
                        },
                        grid: {
                            color: 'rgba(0, 0, 0, 0.05)',
                            drawBorder: false
                        }
                    },
                    x: {
                        ticks: {
                            font: {
                                size: 11
                            },
                            color: '#6b7280'
                        },
                        grid: {
                            display: false,
                            drawBorder: false
                        }
                    }
                }
            }
        });
    </script>
@endpush
