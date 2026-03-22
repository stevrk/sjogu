<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
    <title>Fee Status - Student Portal</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .mobile-menu { position: fixed; top: 0; left: -280px; width: 280px; height: 100%; background: white; z-index: 1000; transition: left 0.3s ease; overflow-y: auto; }
        .mobile-menu.active { left: 0; }
        .menu-overlay { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 999; display: none; }
        .menu-overlay.active { display: block; }
        @media (min-width: 1024px) { .mobile-menu { display: none; } .menu-overlay { display: none !important; } .menu-toggle { display: none; } }
    </style>
</head>
<body class="bg-gray-100">

    <div id="menuOverlay" class="menu-overlay"></div>
    <div id="mobileMenu" class="mobile-menu shadow-lg">
        <div class="p-4 border-b bg-white">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-red-600 rounded-full flex items-center justify-center"><i class="fas fa-user text-white"></i></div>
                    <div><p class="font-semibold text-gray-800">John Doe</p><p class="text-xs text-gray-500">ID: 2024-001</p></div>
                </div>
                <button id="closeMenu" class="lg:hidden text-gray-500"><i class="fas fa-times text-xl"></i></button>
            </div>
        </div>
        <nav class="p-4">
            <ul class="space-y-1">
                <li><a href="/portal" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-700 hover:bg-red-50 hover:text-red-600 transition"><span class="text-lg">📊</span> Dashboard</a></li>
                <li><a href="/portal/courses" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-700 hover:bg-red-50 hover:text-red-600 transition"><span class="text-lg">📚</span> My Courses</a></li>
                <li><a href="/portal/grades" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-700 hover:bg-red-50 hover:text-red-600 transition"><span class="text-lg">📈</span> Grades</a></li>
                <li><a href="/portal/attendance" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-700 hover:bg-red-50 hover:text-red-600 transition"><span class="text-lg">✅</span> Attendance</a></li>
                <li><a href="/portal/fees" class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-red-600 text-white"><span class="text-lg">💰</span> Fee Status</a></li>
                <li><a href="/portal/profile" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-700 hover:bg-red-50 hover:text-red-600 transition"><span class="text-lg">👤</span> Profile</a></li>
            </ul>
        </nav>
          <div class="absolute bottom-0 w-full p-4 border-t bg-white"><a href="{{ route('portal.login') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-700 hover:bg-red-50 transition"><span class="text-lg">🚪</span> Logout</a></div>
    </div>

    <div class="bg-white shadow-sm sticky top-0 z-50">
        <div class="flex justify-between items-center px-4 py-3">
            <div class="flex items-center gap-3">
                <button id="menuToggle" class="lg:hidden text-gray-600 p-1"><i class="fas fa-bars text-2xl"></i></button>
                <div class="flex items-center gap-2"><i class="fas fa-graduation-cap text-red-600 text-2xl"></i><span class="font-bold text-gray-800 text-base sm:text-lg">Student Portal</span></div>
            </div>
            <div class="flex items-center gap-4">
                <i class="fas fa-bell text-gray-500 text-xl cursor-pointer"></i>
                <div class="flex items-center gap-2">
                    <div class="w-9 h-9 bg-red-600 rounded-full flex items-center justify-center"><span class="text-white text-sm font-bold">JD</span></div>
                    <span class="text-sm font-medium text-gray-700 hidden sm:inline">John Doe</span>
                </div>
            </div>
        </div>
    </div>

    <div class="flex">
        <div class="hidden lg:block w-72 bg-white min-h-screen shadow-lg">
            <div class="p-5 border-b"><div class="flex items-center gap-3"><div class="w-12 h-12 bg-red-600 rounded-full flex items-center justify-center"><i class="fas fa-user text-white text-xl"></i></div><div><p class="font-semibold text-gray-800 text-lg">John Doe</p><p class="text-xs text-gray-500">Student ID: 2024-001</p></div></div></div>
            <nav class="p-4">
                <ul class="space-y-1">
                    <li><a href="/portal/Dashboard" class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-red-50 hover:text-red-600 transition font-medium"><span class="text-xl">📊</span> Dashboard</a></li>
                    <li><a href="/portal/courses" class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-red-50 hover:text-red-600 transition font-medium"><span class="text-xl">📚</span> My Courses</a></li>
                    <li><a href="/portal/grades" class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-red-50 hover:text-red-600 transition font-medium"><span class="text-xl">📈</span> Grades</a></li>
                    <li><a href="/portal/attendance" class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-red-50 hover:text-red-600 transition font-medium"><span class="text-xl">✅</span> Attendance</a></li>
                    <li><a href="/portal/fees" class="flex items-center gap-3 px-4 py-3 rounded-lg bg-red-600 text-white font-medium"><span class="text-xl">💰</span> Fee Status</a></li>
                    <li><a href="/portal/profile" class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-red-50 hover:text-red-600 transition font-medium"><span class="text-xl">👤</span> Profile</a></li>
                </ul>
            </nav>
            <div class="absolute bottom-0 w-72 p-4 border-t"><a href="/student-login" class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-red-50 transition font-medium"><span class="text-xl">🚪</span> Logout</a></div>
        </div>

        <div class="flex-1 p-4 sm:p-6">
            <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-2">Fee Statement</h1>
            <p class="text-gray-600 text-sm mb-6">Academic Year 2024/2025 - Semester 1</p>

            <div class="bg-green-50 border border-green-200 rounded-xl p-5 mb-6">
                <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
                    <div>
                        <p class="text-sm text-gray-600">Outstanding Balance</p>
                        <p class="text-3xl font-bold text-green-600">MK 0.00</p>
                        <p class="text-xs text-gray-500 mt-1">All fees cleared</p>
                    </div>
                    <span class="bg-green-100 text-green-700 px-5 py-2 rounded-full text-sm font-semibold">Fully Paid ✓</span>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-50 border-b">
                        <tr>
                            <th class="px-5 py-4 text-left text-sm font-semibold text-gray-600">Description</th>
                            <th class="px-5 py-4 text-left text-sm font-semibold text-gray-600">Amount (MK)</th>
                            <th class="px-5 py-4 text-left text-sm font-semibold text-gray-600">Due Date</th>
                            <th class="px-5 py-4 text-left text-sm font-semibold text-gray-600">Payment Date</th>
                            <th class="px-5 py-4 text-left text-sm font-semibold text-gray-600">Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y">
                        <tr class="hover:bg-gray-50">
                            <td class="px-5 py-4 text-sm font-medium">Tuition Fee</td>
                            <td class="px-5 py-4 text-sm">500,000</td>
                            <td class="px-5 py-4 text-sm">March 15, 2024</td>
                            <td class="px-5 py-4 text-sm">March 10, 2024</td>
                            <td class="px-5 py-4"><span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs">Paid</span></td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-5 py-4 text-sm font-medium">Library Fee</td>
                            <td class="px-5 py-4 text-sm">25,000</td>
                            <td class="px-5 py-4 text-sm">March 15, 2024</td>
                            <td class="px-5 py-4 text-sm">March 10, 2024</td>
                            <td class="px-5 py-4"><span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs">Paid</span></td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-5 py-4 text-sm font-medium">ICT Fee</td>
                            <td class="px-5 py-4 text-sm">50,000</td>
                            <td class="px-5 py-4 text-sm">March 15, 2024</td>
                            <td class="px-5 py-4 text-sm">March 10, 2024</td>
                            <td class="px-5 py-4"><span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs">Paid</span></td>
                        </tr>
                        <tr class="bg-gray-50 font-bold">
                            <td class="px-5 py-4 text-sm">Total</td>
                            <td class="px-5 py-4 text-sm">575,000</td>
                            <td class="px-5 py-4 text-sm"></td>
                            <td class="px-5 py-4 text-sm"></td>
                            <td class="px-5 py-4"><span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs">Cleared</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mt-6">
                <div class="bg-white rounded-xl shadow p-4 text-center hover:shadow-lg transition cursor-pointer">
                    <i class="fas fa-credit-card text-3xl text-red-600 mb-2"></i>
                    <p class="font-semibold">Credit/Debit Card</p>
                    <p class="text-xs text-gray-500">Visa, Mastercard</p>
                </div>
                <div class="bg-white rounded-xl shadow p-4 text-center hover:shadow-lg transition cursor-pointer">
                    <i class="fas fa-mobile-alt text-3xl text-red-600 mb-2"></i>
                    <p class="font-semibold">Mobile Money</p>
                    <p class="text-xs text-gray-500">Airtel, TNM</p>
                </div>
                <div class="bg-white rounded-xl shadow p-4 text-center hover:shadow-lg transition cursor-pointer">
                    <i class="fas fa-university text-3xl text-red-600 mb-2"></i>
                    <p class="font-semibold">Bank Transfer</p>
                    <p class="text-xs text-gray-500">Direct Deposit</p>
                </div>
            </div>

            <div class="mt-6 bg-white rounded-xl shadow">
                <div class="border-b px-5 py-4"><h3 class="font-semibold text-gray-800">Payment History</h3></div>
                <div class="p-5 space-y-3">
                    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-2 p-3 bg-gray-50 rounded-lg">
                        <div><p class="font-medium">Tuition Fee Payment</p><p class="text-xs text-gray-500">Reference: TXN-2024-001</p></div>
                        <div class="text-right"><p class="font-bold text-green-600">MK 500,000</p><p class="text-xs text-gray-500">March 10, 2024</p></div>
                    </div>
                    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-2 p-3 bg-gray-50 rounded-lg">
                        <div><p class="font-medium">Library & ICT Fees</p><p class="text-xs text-gray-500">Reference: TXN-2024-002</p></div>
                        <div class="text-right"><p class="font-bold text-green-600">MK 75,000</p><p class="text-xs text-gray-500">March 10, 2024</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const menuToggle = document.getElementById('menuToggle');
        const closeMenu = document.getElementById('closeMenu');
        const mobileMenu = document.getElementById('mobileMenu');
        const overlay = document.getElementById('menuOverlay');
        if (menuToggle) menuToggle.addEventListener('click', () => { mobileMenu.classList.add('active'); overlay.classList.add('active'); document.body.style.overflow = 'hidden'; });
        const closeFunc = () => { mobileMenu.classList.remove('active'); overlay.classList.remove('active'); document.body.style.overflow = ''; };
        if (closeMenu) closeMenu.addEventListener('click', closeFunc);
        if (overlay) overlay.addEventListener('click', closeFunc);
    </script>
</body>
</html>