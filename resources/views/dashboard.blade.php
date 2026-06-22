<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NGO Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Nunito', sans-serif;
        }

        .progress-bar {
            border-radius: 999px;
            height: 6px;
            background: #e5e7eb;
            overflow: hidden;
        }

        .progress-fill {
            height: 100%;
            border-radius: 999px;
        }

        .sidebar-link {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 10px 16px;
            border-radius: 12px;
            color: #6b7280;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.2s;
        }

        .sidebar-link:hover {
            background: #f0fdf4;
            color: #22c55e;
        }

        .sidebar-link.active {
            background: #dcfce7;
            color: #22c55e;
            font-weight: 700;
        }
    </style>
</head>

<body class="bg-gray-50 min-h-screen">

    <div class="flex h-screen overflow-hidden">

        {{-- SIDEBAR --}}
        <aside class="w-56 bg-white flex flex-col shadow-sm border-r border-gray-100">

            {{-- Logo --}}
            <div class="px-5 py-5 flex items-center gap-2">
                <div class="w-9 h-9 bg-green-500 rounded-xl flex items-center justify-center">
                    <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                </div>
                <span class="text-xl font-extrabold text-gray-800">NGO</span>
            </div>

            {{-- Nav --}}
            <nav class="flex-1 px-3 py-2 space-y-1">
                <a href="#" class="sidebar-link active">
                    <svg class="w-5 h-5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    Dashboard
                </a>
                <a href="Donations" class="sidebar-link">
                    <svg class="w-5 h-5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Donations
                </a>
                <a href="#" class="sidebar-link">
                    <svg class="w-5 h-5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    Projects
                </a>
                <a href="#" class="sidebar-link">
                    <svg class="w-5 h-5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    Beneficiaries
                </a>
                <a href="#" class="sidebar-link">
                    <svg class="w-5 h-5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    Volunteers
                </a>
                <a href="#" class="sidebar-link">
                    <svg class="w-5 h-5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    Events
                </a>
                <a href="#" class="sidebar-link">
                    <svg class="w-5 h-5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                    Reports
                </a>
                <a href="#" class="sidebar-link">
                    <svg class="w-5 h-5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    Messages
                </a>
                <a href="#" class="sidebar-link">
                    <svg class="w-5 h-5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    Settings
                </a>
            </nav>

            {{-- Bottom card --}}
            <div class="mx-3 mb-4 bg-green-50 rounded-2xl p-4 text-center">
                <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center mx-auto mb-2 shadow-sm">
                    <svg class="w-6 h-6 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                </div>
                <p class="text-xs font-semibold text-gray-600 leading-snug">Together we can<br>make a difference.</p>
            </div>
        </aside>

        {{-- MAIN --}}
        <div class="flex-1 flex flex-col overflow-hidden">

            {{-- Topbar --}}
            <header class="bg-white border-b border-gray-100 px-6 py-4 flex items-center justify-between">
                <div class="flex items-center gap-4">
                    <button class="text-gray-500">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                    <h1 class="text-xl font-extrabold text-gray-800">Dashboard</h1>
                </div>
                <div class="flex items-center gap-3">
                    <button class="relative p-2 text-gray-400 hover:bg-gray-100 rounded-xl">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                        <span class="absolute top-1.5 right-1.5 w-2 h-2 bg-red-500 rounded-full"></span>
                    </button>
                    <div class="flex items-center gap-2 cursor-pointer">
                        <div class="w-8 h-8 bg-gray-200 rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <span class="font-semibold text-gray-700 text-sm">Admin</span>
                        <svg class="w-4 h-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                </div>
            </header>

            {{-- Content --}}
            <main class="flex-1 overflow-y-auto p-6 space-y-5">

                <p class="text-gray-500 font-medium">Welcome back, Admin!</p>

                {{-- STAT CARDS --}}
                <div class="grid grid-cols-4 gap-4">
                    <div class="bg-white rounded-2xl p-5 shadow-sm flex items-center gap-4">
                        <div class="w-14 h-14 bg-green-500 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-7 h-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Total Donations</p>
                            <p class="text-2xl font-extrabold text-gray-800">$24,980</p>
                            <p class="text-xs text-green-500 font-semibold">This Month</p>
                        </div>
                    </div>
                    <div class="bg-white rounded-2xl p-5 shadow-sm flex items-center gap-4">
                        <div class="w-14 h-14 bg-blue-400 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-7 h-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Total Beneficiaries</p>
                            <p class="text-2xl font-extrabold text-gray-800">1,245</p>
                            <p class="text-xs text-blue-400 font-semibold">This Month</p>
                        </div>
                    </div>
                    <div class="bg-white rounded-2xl p-5 shadow-sm flex items-center gap-4">
                        <div class="w-14 h-14 bg-purple-500 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-7 h-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Total Projects</p>
                            <p class="text-2xl font-extrabold text-gray-800">18</p>
                            <p class="text-xs text-purple-500 font-semibold">This Month</p>
                        </div>
                    </div>
                    <div class="bg-white rounded-2xl p-5 shadow-sm flex items-center gap-4">
                        <div class="w-14 h-14 bg-orange-400 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-7 h-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Total Volunteers</p>
                            <p class="text-2xl font-extrabold text-gray-800">320</p>
                            <p class="text-xs text-orange-400 font-semibold">This Month</p>
                        </div>
                    </div>
                </div>

                {{-- MIDDLE ROW --}}
                <div class="grid grid-cols-3 gap-4">

                    {{-- Recent Donations --}}
                    <!-- <div class="col-span-2 bg-white rounded-2xl shadow-sm p-5">
                        <h2 class="text-base font-bold text-gray-800 mb-4">Recent Donations</h2>
                        <table class="w-full text-sm">
                            <thead>
                                <tr class="text-gray-400 font-semibold border-b border-gray-100">
                                    <th class="text-left pb-3 font-semibold">Donor</th>
                                    <th class="text-left pb-3 font-semibold">Purpose</th>
                                    <th class="text-left pb-3 font-semibold">Amount</th>
                                    <th class="text-left pb-3 font-semibold">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $donations = [
                                ['name'=>'Sarah Thompson','purpose'=>'Education for All Project','amount'=>'$500','date'=>'2 hours ago'],
                                ['name'=>'John Doe', 'purpose'=>'Clean Water Initiative', 'amount'=>'$250','date'=>'5 hours ago'],
                                ['name'=>'Anna Mueller', 'purpose'=>'Food for Needy', 'amount'=>'$300','date'=>'1 day ago'],
                                ['name'=>'Robert King', 'purpose'=>'Health Awareness Camp', 'amount'=>'$150','date'=>'2 days ago'],
                                ['name'=>'Michael Brown', 'purpose'=>'Shelter Support', 'amount'=>'$200','date'=>'3 days ago'],
                                ];
                                @endphp
                                @foreach($donations as $d)
                                <tr class="border-b border-gray-50 hover:bg-gray-50">
                                    <td class="py-3 font-medium text-gray-700">{{ $d['name'] }}</td>
                                    <td class="py-3 text-gray-500">{{ $d['purpose'] }}</td>
                                    <td class="py-3 font-bold text-green-500">{{ $d['amount'] }}</td>
                                    <td class="py-3 text-gray-400">{{ $d['date'] }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="mt-4 text-right">
                            <a href="#" class="text-sm text-green-500 font-semibold hover:underline">View all donations</a>
                        </div>
                    </div> -->

                    <!-- {{-- Recent Projects --}}
                    <div class="bg-white rounded-2xl shadow-sm p-5">
                        <h2 class="text-base font-bold text-gray-800 mb-4">Recent Projects</h2>
                        <div class="space-y-5">

                            <div>
                                <div class="flex items-center gap-3 mb-2">
                                    <div class="w-9 h-9 bg-green-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                        <svg class="w-5 h-5 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5zm0 0v6" />
                                        </svg>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <div class="flex justify-between">
                                            <p class="text-sm font-bold text-gray-800">Education for All</p>
                                            <span class="text-sm font-bold text-gray-700">75%</span>
                                        </div>
                                        <p class="text-xs text-gray-400">Help children get quality education</p>
                                    </div>
                                </div>
                                <div class="progress-bar">
                                    <div class="progress-fill bg-green-500" style="width:75%"></div>
                                </div>
                            </div>

                            <div>
                                <div class="flex items-center gap-3 mb-2">
                                    <div class="w-9 h-9 bg-blue-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                        <svg class="w-5 h-5 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1M4.22 4.22l.707.707m12.728 12.728l.707.707M1 12h2m18 0h2M4.22 19.78l.707-.707M18.364 5.636l.707-.707" />
                                        </svg>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <div class="flex justify-between">
                                            <p class="text-sm font-bold text-gray-800">Clean Water Initiative</p>
                                            <span class="text-sm font-bold text-gray-700">60%</span>
                                        </div>
                                        <p class="text-xs text-gray-400">Providing clean drinking water</p>
                                    </div>
                                </div>
                                <div class="progress-bar">
                                    <div class="progress-fill bg-blue-500" style="width:60%"></div>
                                </div>
                            </div>

                            <div>
                                <div class="flex items-center gap-3 mb-2">
                                    <div class="w-9 h-9 bg-orange-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                        <svg class="w-5 h-5 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                        </svg>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <div class="flex justify-between">
                                            <p class="text-sm font-bold text-gray-800">Food for Needy</p>
                                            <span class="text-sm font-bold text-gray-700">40%</span>
                                        </div>
                                        <p class="text-xs text-gray-400">Providing meals to the needy</p>
                                    </div>
                                </div>
                                <div class="progress-bar">
                                    <div class="progress-fill bg-orange-400" style="width:40%"></div>
                                </div>
                            </div>

                        </div>
                        <div class="mt-5 text-right">
                            <a href="#" class="text-sm text-green-500 font-semibold hover:underline">View all projects</a>
                        </div>
                    </div> -->
                </div>



            </main>
        </div>
    </div>

</body>

</html>