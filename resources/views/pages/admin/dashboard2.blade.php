@extends('layouts.auth')
@section('title')
    Dashboard
@endsection

@section('content')
    <main class="flex-1  p-4 lg:p-6 overflow-auto">
        <h1 class="text-2xl font-bold mb-6" style="color: #1F3C88;">Dashboard</h1>

        <!-- Top Stats Cards -->
        <div class="grid grid-cols-3 gap-4 mb-6">
            <!-- Shifts Today -->
            <div class="bg-white rounded-lg border-2 p-4" style="border-color: #1F3C88;">
                <h3 class="text-sm font-semibold mb-2" style="color: #1F3C88;">Shifts Today</h3>
                <div class="text-4xl font-bold mb-1" style="color: #1F3C88;">124</div>
                <div class="text-xs text-gray-600">110 filled</div>
                <div class="flex gap-4 text-xs text-gray-600 mt-2">
                    <span>110 filled</span>
                    <span>14 unfilled</span>
                </div>
            </div>

            <!-- Active Staff -->
            <div class="bg-white rounded-lg border-2 p-4" style="border-color: #1F3C88;">
                <h3 class="text-sm font-semibold mb-2" style="color: #1F3C88;">Active Staff</h3>
                <div class="text-4xl font-bold mb-1" style="color: #1F3C88;">560</div>
                <div class="text-xs text-gray-600">Pending Approval: 24</div>
            </div>

            <!-- Expiring Credentials -->
            <div class="bg-white rounded-lg border-2 p-4" style="border-color: #1F3C88;">
                <h3 class="text-sm font-semibold mb-2" style="color: #1F3C88;">Expiring Credentials</h3>
                <div class="text-4xl font-bold mb-1" style="color: #1F3C88;">15</div>
                <div class="text-xs text-gray-600">within 30 days</div>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="grid grid-cols-3 gap-4 mb-6">
            <button class="text-white py-2 px-4 rounded font-medium hover:opacity-90"
                style="background-color: #1F3C88;">Post a Shift</button>
            <button class="text-white py-2 px-4 rounded font-medium hover:opacity-90"
                style="background-color: #1F3C88;">Approve Timesheets</button>
            <button class="text-white py-2 px-4 rounded font-medium hover:opacity-90"
                style="background-color: #1F3C88;">Upload Credential</button>
        </div>

        <!-- Charts Row -->
        <div class="grid grid-cols-2 gap-4 mb-6">
            <!-- Shift Fill Rate -->
            <div class="bg-white rounded-lg border-2 p-4" style="border-color: #1F3C88;">
                <h3 class="text-sm font-semibold mb-4" style="color: #1F3C88;">Shift Fill Rate</h3>
                <div style="height: 200px;">
                    <canvas id="fillRateChart"></canvas>
                </div>
                <div class="text-xs text-gray-600 mt-2">Weekly</div>
            </div>

            <!-- Revenue vs. Payroll -->
            <div class="bg-white rounded-lg border-2 p-4" style="border-color: #1F3C88;">
                <h3 class="text-sm font-semibold mb-4" style="color: #1F3C88;">Revenue vs. Payroll</h3>
                <div style="height: 200px;">
                    <canvas id="revenueChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Bottom Row -->
        <div class="grid grid-cols-2 gap-4 mb-6">
            <!-- Real-Time Alerts -->
            <div class="bg-white rounded-lg border-2 p-4" style="border-color: #1F3C88;">
                <h3 class="text-sm font-semibold mb-3" style="color: #1F3C88;">Real-Time Alerts</h3>
                <ul class="space-y-2 text-sm">
                    <li class="flex items-start">
                        <span class="text-red-500 mr-2">•</span>
                        <span>Nurse Jane Doe license expiring in 6 days</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-red-500 mr-2">•</span>
                        <span>Facility ABC has 3 unfilled shifts for tonight</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-red-500 mr-2">•</span>
                        <span>Invoice #5567 is overdue by 7 days</span>
                    </li>
                </ul>
            </div>

            <!-- Staff Utilization -->
            <div class="bg-white rounded-lg border-2 p-4" style="border-color: #1F3C88;">
                <h3 class="text-sm font-semibold mb-4" style="color: #1F3C88;">Staff Utilization</h3>
                <div style="height: 150px;">
                    <canvas id="utilizationChart"></canvas>
                </div>
                <div class="text-xs text-gray-600 text-center mt-2">Top 10 staff Assigned</div>
            </div>
        </div>

        <!-- Calendar -->
        <div class="bg-white rounded-lg border-2 p-4" style="border-color: #1F3C88;">
            <h3 class="text-sm font-semibold mb-4" style="color: #1F3C88;">Calendar</h3>
            <div class="grid grid-cols-7 gap-2">
                <div class="text-center text-xs font-semibold py-2" style="color: #1F3C88;">Sun</div>
                <div class="text-center text-xs font-semibold py-2" style="color: #1F3C88;">Mon</div>
                <div class="text-center text-xs font-semibold py-2" style="color: #1F3C88;">Tue</div>
                <div class="text-center text-xs font-semibold py-2" style="color: #1F3C88;">Wed</div>
                <div class="text-center text-xs font-semibold py-2" style="color: #1F3C88;">Thu</div>
                <div class="text-center text-xs font-semibold py-2" style="color: #1F3C88;">Fri</div>
                <div class="text-center text-xs font-semibold py-2" style="color: #1F3C88;">Sat</div>
                <div class="border rounded p-3 h-20"></div>
                <div class="border rounded p-3 h-20"></div>
                <div class="border rounded p-3 h-20 bg-gray-50">
                    <div class="w-16 h-2 rounded-full mx-auto" style="background-color: #1F3C88;"></div>
                </div>
                <div class="border rounded p-3 h-20"></div>
                <div class="border rounded p-3 h-20"></div>
                <div class="border rounded p-3 h-20"></div>
                <div class="border rounded p-3 h-20"></div>
            </div>
        </div>

    </main>
@endsection
@push('scripts')
    <script>
        // Shift Fill Rate Chart
        const fillRateCtx = document.getElementById('fillRateChart').getContext('2d');
        new Chart(fillRateCtx, {
            type: 'line',
            data: {
                labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
                datasets: [{
                    data: [65, 75, 72, 85],
                    borderColor: '#1F3C88',
                    backgroundColor: 'rgba(31, 60, 136, 0.1)',
                    tension: 0.4,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 100
                    },
                    x: {
                        display: false
                    }
                }
            }
        });

        // Revenue vs Payroll Chart
        const revenueCtx = document.getElementById('revenueChart').getContext('2d');
        new Chart(revenueCtx, {
            type: 'bar',
            data: {
                labels: ['Q1', 'Q2', 'Q3', 'Q4'],
                datasets: [{
                    data: [45000, 52000, 58000, 62000],
                    backgroundColor: '#1F3C88'
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Staff Utilization Chart
        const utilizationCtx = document.getElementById('utilizationChart').getContext('2d');
        new Chart(utilizationCtx, {
            type: 'doughnut',
            data: {
                labels: ['Assigned', 'Available'],
                datasets: [{
                    data: [75, 25],
                    backgroundColor: ['#1F3C88', '#E5E7EB']
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    </script>
@endpush
