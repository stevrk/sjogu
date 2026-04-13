<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
    <title>Dashboard - Student Portal</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .mobile-menu {
            position: fixed;
            top: 0;
            left: -280px;
            width: 280px;
            height: 100%;
            background: white;
            z-index: 1000;
            transition: left 0.3s ease;
            overflow-y: auto;
        }
        .mobile-menu.active { left: 0; }
        .menu-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            z-index: 999;
            display: none;
        }
        .menu-overlay.active { display: block; }
        @media (min-width: 1024px) {
            .mobile-menu { display: none; }
            .menu-overlay { display: none !important; }
            .menu-toggle { display: none; }
        }
        @media (max-width: 768px) {
            .stat-card { padding: 12px; }
        }
    </style>
</head>
<body class="bg-gray-100">

    <div id="menuOverlay" class="menu-overlay"></div>
    <div id="mobileMenu" class="mobile-menu shadow-lg">
        <div class="p-4 border-b bg-white">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-red-600 rounded-full flex items-center justify-center">
                        <i class="fas fa-user text-white"></i>
                    </div>
                    <div>
                        <p class="font-semibold text-gray-800">John Doe</p>
                        <p class="text-xs text-gray-500">ID: 2024-001</p>
                    </div>
                </div>
                <button id="closeMenu" class="lg:hidden text-gray-500">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
        </div>
        <nav class="p-4">
            <ul class="space-y-1">
                <li><a href="/portal" class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-red-600 text-white"><span class="text-lg">📊</span> Dashboard</a></li>
                <li><a href="/portal/courses" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-700 hover:bg-red-50 hover:text-red-600 transition"><span class="text-lg">📚</span> My Courses</a></li>
                <li><a href="/portal/grades" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-700 hover:bg-red-50 hover:text-red-600 transition"><span class="text-lg">📈</span> Grades</a></li>
                <li><a href="/portal/attendance" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-700 hover:bg-red-50 hover:text-red-600 transition"><span class="text-lg">✅</span> Attendance</a></li>
                <li><a href="/portal/fees" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-700 hover:bg-red-50 hover:text-red-600 transition"><span class="text-lg">💰</span> Fee Status</a></li>
                <li><a href="/portal/profile" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-700 hover:bg-red-50 hover:text-red-600 transition"><span class="text-lg">👤</span> Profile</a></li>
            </ul>
        </nav>
        <div class="absolute bottom-0 w-full p-4 border-t bg-white">
             <div class="absolute bottom-0 w-full p-4 border-t bg-white"><a href="{{ route('portal.login') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-700 hover:bg-red-50 transition"><span class="text-lg">🚪</span> Logout</a></div>
        </div>
    </div>

    <div class="bg-white shadow-sm sticky top-0 z-50">
        <div class="flex justify-between items-center px-4 py-3">
            <div class="flex items-center gap-3">
                <button id="menuToggle" class="lg:hidden text-gray-600 p-1">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
                <div class="flex items-center gap-2">
                    <i class="fas fa-graduation-cap text-red-600 text-2xl"></i>
                    <span class="font-bold text-gray-800 text-base sm:text-lg">Student Portal</span>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <div class="relative">
                    <i class="fas fa-bell text-gray-500 text-xl cursor-pointer"></i>
                    <span class="absolute -top-1 -right-1 w-2.5 h-2.5 bg-red-600 rounded-full"></span>
                </div>
                <div class="flex items-center gap-2">
                    <div class="w-9 h-9 bg-red-600 rounded-full flex items-center justify-center">
                        <span class="text-white text-sm font-bold">JD</span>
                    </div>
                    <span class="text-sm font-medium text-gray-700 hidden sm:inline">John Doe</span>
                </div>
            </div>
        </div>
    </div>

    <div class="flex">
        <div class="hidden lg:block w-72 bg-white min-h-screen shadow-lg">
            <div class="p-5 border-b">
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 bg-red-600 rounded-full flex items-center justify-center">
                        <i class="fas fa-user text-white text-xl"></i>
                    </div>
                    <div>
                        <p class="font-semibold text-gray-800 text-lg">John Doe</p>
                        <p class="text-xs text-gray-500">Student ID: 2024-001</p>
                    </div>
                </div>
            </div>
            <nav class="p-4">
                <ul class="space-y-1">
                    <li><a href="/portal" class="flex items-center gap-3 px-4 py-3 rounded-lg bg-red-600 text-white font-medium"><span class="text-xl">📊</span> Dashboard</a></li>
                    <li><a href="/portal/courses" class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-red-50 hover:text-red-600 transition font-medium"><span class="text-xl">📚</span> My Courses</a></li>
                    <li><a href="/portal/grades" class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-red-50 hover:text-red-600 transition font-medium"><span class="text-xl">📈</span> Grades</a></li>
                    <li><a href="/portal/attendance" class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-red-50 hover:text-red-600 transition font-medium"><span class="text-xl">✅</span> Attendance</a></li>
                    <li><a href="/portal/fees" class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-red-50 hover:text-red-600 transition font-medium"><span class="text-xl">💰</span> Fee Status</a></li>
                    <li><a href="/portal/profile" class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-red-50 hover:text-red-600 transition font-medium"><span class="text-xl">👤</span> Profile</a></li>
                </ul>
            </nav>
            <div class="absolute bottom-0 w-72 p-4 border-t">
                <a href="{{ route('portal.login') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-red-50 transition font-medium"><span class="text-xl">🚪</span> Logout</a>
            </div>
        </div>

        <div class="flex-1 p-4 sm:p-6">
            <div class="bg-gradient-to-r from-red-600 to-red-700 rounded-xl p-5 sm:p-6 mb-6">
                <h2 class="text-white text-2xl sm:text-3xl font-bold">Welcome back, John! 👋</h2>
                <p class="text-red-100 text-sm sm:text-base mt-1">Here's your academic summary for the 2024 Academic Year</p>
            </div>

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-4 mb-6">
                <div class="bg-white rounded-lg p-3 sm:p-4 shadow hover:shadow-md transition">
                    <p class="text-gray-500 text-xs sm:text-sm">Current GPA</p>
                    <p class="text-2xl sm:text-3xl font-bold text-green-600">3.75</p>
                    <p class="text-xs text-gray-500 mt-1">↑ 0.2 from last sem</p>
                </div>
                <div class="bg-white rounded-lg p-3 sm:p-4 shadow hover:shadow-md transition">
                    <p class="text-gray-500 text-xs sm:text-sm">Enrolled Courses</p>
                    <p class="text-2xl sm:text-3xl font-bold text-gray-800">6</p>
                    <p class="text-xs text-gray-500 mt-1">18 Credits</p>
                </div>
                <div class="bg-white rounded-lg p-3 sm:p-4 shadow hover:shadow-md transition">
                    <p class="text-gray-500 text-xs sm:text-sm">Attendance Rate</p>
                    <p class="text-2xl sm:text-3xl font-bold text-green-600">92%</p>
                    <p class="text-xs text-gray-500 mt-1">Above requirement</p>
                </div>
                <div class="bg-white rounded-lg p-3 sm:p-4 shadow hover:shadow-md transition">
                    <p class="text-gray-500 text-xs sm:text-sm">Fee Balance</p>
                    <p class="text-2xl sm:text-3xl font-bold text-green-600">MK 0</p>
                    <p class="text-xs text-gray-500 mt-1">Fully paid</p>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <div class="bg-white rounded-lg shadow">
                    <div class="border-b px-5 py-4">
                        <h3 class="font-semibold text-gray-800 text-lg">Recent Grades</h3>
                    </div>
                    <div class="p-5 space-y-4">
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="font-medium text-gray-800">Clinical Medicine</p>
                                <p class="text-xs text-gray-500">CLM 401 - Dr. M. Banda</p>
                            </div>
                            <span class="bg-green-100 text-green-700 px-3 py-1.5 rounded-full text-sm font-bold">A (85%)</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="font-medium text-gray-800">Nursing Practice</p>
                                <p class="text-xs text-gray-500">NUR 402 - Prof. J. Phiri</p>
                            </div>
                            <span class="bg-blue-100 text-blue-700 px-3 py-1.5 rounded-full text-sm font-bold">B+ (78%)</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="font-medium text-gray-800">Public Health</p>
                                <p class="text-xs text-gray-500">PUB 403 - Dr. L. Chibwana</p>
                            </div>
                            <span class="bg-yellow-100 text-yellow-700 px-3 py-1.5 rounded-full text-sm font-bold">B (72%)</span>
                        </div>
                    </div>
                    <div class="border-t px-5 py-3">
                        <a href="/portal/grades" class="text-red-600 text-sm font-medium hover:underline">View all grades →</a>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow">
                    <div class="border-b px-5 py-4">
                        <h3 class="font-semibold text-gray-800 text-lg">Upcoming Events</h3>
                    </div>
                    <div class="p-5 space-y-4">
                        <div class="flex gap-4">
                            <div class="bg-red-100 rounded-xl px-4 py-2 text-center min-w-[70px]">
                                <p class="text-xs text-red-600 font-medium">APR</p>
                                <p class="text-xl font-bold text-red-600">15</p>
                            </div>
                            <div>
                                <p class="font-medium text-gray-800">Mid-Semester Exams Begin</p>
                                <p class="text-xs text-gray-500">8:00 AM - Main Hall</p>
                                <p class="text-xs text-gray-400 mt-1">All students must report on time</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="bg-yellow-100 rounded-xl px-4 py-2 text-center min-w-[70px]">
                                <p class="text-xs text-yellow-600 font-medium">APR</p>
                                <p class="text-xl font-bold text-yellow-600">20</p>
                            </div>
                            <div>
                                <p class="font-medium text-gray-800">Guest Lecture: Future of Healthcare</p>
                                <p class="text-xs text-gray-500">2:00 PM - Conference Room</p>
                                <p class="text-xs text-gray-400 mt-1">Featuring Prof. David Mwale</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="bg-green-100 rounded-xl px-4 py-2 text-center min-w-[70px]">
                                <p class="text-xs text-green-600 font-medium">APR</p>
                                <p class="text-xl font-bold text-green-600">25</p>
                            </div>
                            <div>
                                <p class="font-medium text-gray-800">Research Symposium</p>
                                <p class="text-xs text-gray-500">9:00 AM - University Auditorium</p>
                                <p class="text-xs text-gray-400 mt-1">Present your research findings</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-6 bg-white rounded-lg shadow">
                <div class="border-b px-5 py-4">
                    <h3 class="font-semibold text-gray-800 text-lg">Latest Announcements</h3>
                </div>
                <div class="p-5 space-y-4">
                    <div class="flex gap-3">
                        <i class="fas fa-bullhorn text-red-600 text-lg mt-1"></i>
                        <div>
                            <p class="font-medium text-gray-800">Library Hours Extended</p>
                            <p class="text-sm text-gray-600">The library will remain open until 10:00 PM during the exam period. Extra study spaces available.</p>
                            <p class="text-xs text-gray-400 mt-1">2 hours ago</p>
                        </div>
                    </div>
                    <div class="flex gap-3">
                        <i class="fas fa-graduation-cap text-red-600 text-lg mt-1"></i>
                        <div>
                            <p class="font-medium text-gray-800">Scholarship Applications Open</p>
                            <p class="text-sm text-gray-600">Apply for the 2024 Merit Scholarship by April 30th. Visit the financial aid office for details.</p>
                            <p class="text-xs text-gray-400 mt-1">Yesterday</p>
                        </div>
                    </div>
                    <div class="flex gap-3">
                        <i class="fas fa-calendar-alt text-red-600 text-lg mt-1"></i>
                        <div>
                            <p class="font-medium text-gray-800">Course Registration Deadline Extended</p>
                            <p class="text-sm text-gray-600">Last day to add/drop courses is now April 30th. Late registration fee applies after.</p>
                            <p class="text-xs text-gray-400 mt-1">3 days ago</p>
                        </div>
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

        if (menuToggle) {
            menuToggle.addEventListener('click', () => {
                mobileMenu.classList.add('active');
                overlay.classList.add('active');
                document.body.style.overflow = 'hidden';
            });
        }

        const closeMenuFunc = () => {
            mobileMenu.classList.remove('active');
            overlay.classList.remove('active');
            document.body.style.overflow = '';
        };

        if (closeMenu) closeMenu.addEventListener('click', closeMenuFunc);
        if (overlay) overlay.addEventListener('click', closeMenuFunc);
    </script>
</body>
</html>