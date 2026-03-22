<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
    <title>Grades - Student Portal</title>
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
                <li><a href="/portal/grades" class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-red-600 text-white"><span class="text-lg">📈</span> Grades</a></li>
                <li><a href="/portal/attendance" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-700 hover:bg-red-50 hover:text-red-600 transition"><span class="text-lg">✅</span> Attendance</a></li>
                <li><a href="/portal/fees" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-700 hover:bg-red-50 hover:text-red-600 transition"><span class="text-lg">💰</span> Fee Status</a></li>
                <li><a href="/portal/profile" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-700 hover:bg-red-50 hover:text-red-600 transition"><span class="text-lg">👤</span> Profile</a></li>
            </ul>
        </nav>
        <div class="absolute bottom-0 w-full p-4 border-t bg-white"><a href="/student-login" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-700 hover:bg-red-50 transition"><span class="text-lg">🚪</span> Logout</a></div>
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
                    <li><a href="/portal" class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-red-50 hover:text-red-600 transition font-medium"><span class="text-xl">📊</span> Dashboard</a></li>
                    <li><a href="/portal/courses" class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-red-50 hover:text-red-600 transition font-medium"><span class="text-xl">📚</span> My Courses</a></li>
                    <li><a href="/portal/grades" class="flex items-center gap-3 px-4 py-3 rounded-lg bg-red-600 text-white font-medium"><span class="text-xl">📈</span> Grades</a></li>
                    <li><a href="/portal/attendance" class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-red-50 hover:text-red-600 transition font-medium"><span class="text-xl">✅</span> Attendance</a></li>
                    <li><a href="/portal/fees" class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-red-50 hover:text-red-600 transition font-medium"><span class="text-xl">💰</span> Fee Status</a></li>
                    <li><a href="/portal/profile" class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-red-50 hover:text-red-600 transition font-medium"><span class="text-xl">👤</span> Profile</a></li>
                </ul>
            </nav>
            <div class="absolute bottom-0 w-full p-4 border-t bg-white"><a href="{{ route('portal.login') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-700 hover:bg-red-50 transition"><span class="text-lg">🚪</span> Logout</a></div>
        </div>

        <div class="flex-1 p-4 sm:p-6">
            <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-2">Academic Grades</h1>
            <p class="text-gray-600 text-sm mb-6">Semester 1, 2024 Academic Year</p>

            <div class="grid grid-cols-2 lg:grid-cols-3 gap-4 mb-6">
                <div class="bg-white rounded-xl p-5 text-center shadow">
                    <p class="text-gray-500 text-sm">Current GPA</p>
                    <p class="text-3xl font-bold text-green-600">3.75</p>
                    <p class="text-xs text-gray-500 mt-1">↑ 0.2 from last sem</p>
                </div>
                <div class="bg-white rounded-xl p-5 text-center shadow">
                    <p class="text-gray-500 text-sm">Cumulative GPA</p>
                    <p class="text-3xl font-bold text-blue-600">3.68</p>
                    <p class="text-xs text-gray-500 mt-1">Good Standing</p>
                </div>
                <div class="bg-white rounded-xl p-5 text-center shadow">
                    <p class="text-gray-500 text-sm">Total Credits</p>
                    <p class="text-3xl font-bold text-red-600">42</p>
                    <p class="text-xs text-gray-500 mt-1">Completed</p>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-50 border-b">
                        <tr>
                            <th class="px-5 py-4 text-left text-sm font-semibold text-gray-600">Course Code</th>
                            <th class="px-5 py-4 text-left text-sm font-semibold text-gray-600">Course Name</th>
                            <th class="px-5 py-4 text-left text-sm font-semibold text-gray-600">Credits</th>
                            <th class="px-5 py-4 text-left text-sm font-semibold text-gray-600">Grade</th>
                            <th class="px-5 py-4 text-left text-sm font-semibold text-gray-600">Score</th>
                            <th class="px-5 py-4 text-left text-sm font-semibold text-gray-600">Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y">
                        <tr class="hover:bg-gray-50">
                            <td class="px-5 py-4 text-sm">CLM 401</td>
                            <td class="px-5 py-4 text-sm font-medium">Clinical Medicine</td>
                            <td class="px-5 py-4 text-sm">3</td>
                            <td class="px-5 py-4"><span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-bold">A</span></td>
                            <td class="px-5 py-4 text-sm">85%</td>
                            <td class="px-5 py-4"><span class="text-green-600 text-sm">Passed</span></td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-5 py-4 text-sm">NUR 402</td>
                            <td class="px-5 py-4 text-sm font-medium">Nursing Practice</td>
                            <td class="px-5 py-4 text-sm">4</td>
                            <td class="px-5 py-4"><span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm font-bold">B+</span></td>
                            <td class="px-5 py-4 text-sm">78%</td>
                            <td class="px-5 py-4"><span class="text-green-600 text-sm">Passed</span></td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-5 py-4 text-sm">PUB 403</td>
                            <td class="px-5 py-4 text-sm font-medium">Public Health</td>
                            <td class="px-5 py-4 text-sm">3</td>
                            <td class="px-5 py-4"><span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-sm font-bold">B</span></td>
                            <td class="px-5 py-4 text-sm">72%</td>
                            <td class="px-5 py-4"><span class="text-green-600 text-sm">Passed</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="mt-6 bg-blue-50 border border-blue-200 rounded-xl p-5">
                <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
                    <div>
                        <h3 class="font-semibold text-gray-800">Request Official Transcript</h3>
                        <p class="text-sm text-gray-600 mt-1">Official academic transcript for employment or further studies</p>
                    </div>
                    <button class="bg-red-600 text-white px-6 py-2.5 rounded-lg hover:bg-red-700 transition font-medium">Request Now</button>
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