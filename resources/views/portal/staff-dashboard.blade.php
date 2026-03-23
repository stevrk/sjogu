<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
    <title>Staff Dashboard - St John of God University</title>
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
                        <i class="fas fa-chalkboard-user text-white"></i>
                    </div>
                    <div>
                        <p class="font-semibold text-gray-800">Dr. John Doe</p>
                        <p class="text-xs text-gray-500">Faculty ID: STAFF-001</p>
                    </div>
                </div>
                <button id="closeMenu" class="lg:hidden text-gray-500">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
        </div>
        <nav class="p-4">
            <ul class="space-y-1">
                <li><a href="{{ route('staff.dashboard') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-red-600 text-white"><span class="text-lg">📊</span> Dashboard</a></li>
                <li><a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-700 hover:bg-red-50 hover:text-red-600 transition"><span class="text-lg">👥</span> Students</a></li>
                <li><a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-700 hover:bg-red-50 hover:text-red-600 transition"><span class="text-lg">📚</span> Courses</a></li>
                <li><a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-700 hover:bg-red-50 hover:text-red-600 transition"><span class="text-lg">📊</span> Grades</a></li>
                <li><a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-700 hover:bg-red-50 hover:text-red-600 transition"><span class="text-lg">📅</span> Schedule</a></li>
                <li><a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-700 hover:bg-red-50 hover:text-red-600 transition"><span class="text-lg">👤</span> Profile</a></li>
            </ul>
        </nav>
        <div class="absolute bottom-0 w-full p-4 border-t bg-white">
            <a href="{{ route('staff.login') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-700 hover:bg-red-50 transition"><span class="text-lg">🚪</span> Logout</a>
        </div>
    </div>

    <div class="bg-white shadow-sm sticky top-0 z-50">
        <div class="flex justify-between items-center px-4 py-3">
            <div class="flex items-center gap-3">
                <button id="menuToggle" class="lg:hidden text-gray-600 p-1">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
                <div class="flex items-center gap-2">
                    <i class="fas fa-chalkboard-user text-red-600 text-2xl"></i>
                    <span class="font-bold text-gray-800 text-base sm:text-lg">Staff Portal</span>
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
                    <span class="text-sm font-medium text-gray-700 hidden sm:inline">Dr. John Doe</span>
                </div>
            </div>
        </div>
    </div>

    <div class="flex">
        <div class="hidden lg:block w-72 bg-white min-h-screen shadow-lg">
            <div class="p-5 border-b">
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 bg-red-600 rounded-full flex items-center justify-center">
                        <i class="fas fa-chalkboard-user text-white text-xl"></i>
                    </div>
                    <div>
                        <p class="font-semibold text-gray-800 text-lg">Dr. John Doe</p>
                        <p class="text-xs text-gray-500">Faculty ID: STAFF-001 | Senior Lecturer</p>
                    </div>
                </div>
            </div>
            <nav class="p-4">
                <ul class="space-y-1">
                    <li><a href="{{ route('staff.dashboard') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg bg-red-600 text-white font-medium"><span class="text-xl">📊</span> Dashboard</a></li>
                    <li><a href="#" class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-red-50 hover:text-red-600 transition font-medium"><span class="text-xl">👥</span> Students</a></li>
                    <li><a href="#" class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-red-50 hover:text-red-600 transition font-medium"><span class="text-xl">📚</span> Courses</a></li>
                    <li><a href="#" class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-red-50 hover:text-red-600 transition font-medium"><span class="text-xl">📊</span> Grades</a></li>
                    <li><a href="#" class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-red-50 hover:text-red-600 transition font-medium"><span class="text-xl">📅</span> Schedule</a></li>
                    <li><a href="#" class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-red-50 hover:text-red-600 transition font-medium"><span class="text-xl">👤</span> Profile</a></li>
                </ul>
            </nav>
            <div class="absolute bottom-0 w-72 p-4 border-t">
                <a href="{{ route('staff.login') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-red-50 transition font-medium"><span class="text-xl">🚪</span> Logout</a>
            </div>
        </div>

        <div class="flex-1 p-4 sm:p-6">
            <div class="bg-gradient-to-r from-red-600 to-red-700 rounded-xl p-5 sm:p-6 mb-6">
                <h2 class="text-white text-2xl sm:text-3xl font-bold">Welcome to the Staff Portal! 👋</h2>
                <p class="text-red-100 text-sm sm:text-base mt-1">Manage academic records, oversee student progress, and facilitate institutional excellence.</p>
            </div>

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-4 mb-6">
                <div class="bg-white rounded-lg p-3 sm:p-4 shadow hover:shadow-md transition">
                    <p class="text-gray-500 text-xs sm:text-sm">Total Students</p>
                    <p class="text-2xl sm:text-3xl font-bold text-red-600">5,234</p>
                    <p class="text-xs text-green-600 mt-1">↑ 12% from last year</p>
                </div>
                <div class="bg-white rounded-lg p-3 sm:p-4 shadow hover:shadow-md transition">
                    <p class="text-gray-500 text-xs sm:text-sm">Active Courses</p>
                    <p class="text-2xl sm:text-3xl font-bold text-gray-800">48</p>
                    <p class="text-xs text-gray-500 mt-1">Across 6 departments</p>
                </div>
                <div class="bg-white rounded-lg p-3 sm:p-4 shadow hover:shadow-md transition">
                    <p class="text-gray-500 text-xs sm:text-sm">Faculty Members</p>
                    <p class="text-2xl sm:text-3xl font-bold text-gray-800">156</p>
                    <p class="text-xs text-gray-500 mt-1">Full-time & adjunct</p>
                </div>
                <div class="bg-white rounded-lg p-3 sm:p-4 shadow hover:shadow-md transition">
                    <p class="text-gray-500 text-xs sm:text-sm">Pending Approvals</p>
                    <p class="text-2xl sm:text-3xl font-bold text-yellow-600">23</p>
                    <p class="text-xs text-gray-500 mt-1">Grades & registrations</p>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <div class="bg-white rounded-lg shadow">
                    <div class="border-b px-5 py-4">
                        <h3 class="font-semibold text-gray-800 text-lg">Recent Activities</h3>
                    </div>
                    <div class="p-5 space-y-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-user-plus text-green-600"></i>
                            </div>
                            <div class="flex-1">
                                <p class="font-medium text-gray-800">New Student Registration</p>
                                <p class="text-xs text-gray-500">24 new students enrolled in Clinical Medicine</p>
                                <p class="text-xs text-gray-400 mt-1">2 hours ago</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-file-alt text-blue-600"></i>
                            </div>
                            <div class="flex-1">
                                <p class="font-medium text-gray-800">Grades Pending Approval</p>
                                <p class="text-xs text-gray-500">45 grade submissions awaiting your review</p>
                                <p class="text-xs text-gray-400 mt-1">Yesterday</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-yellow-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-calendar-check text-yellow-600"></i>
                            </div>
                            <div class="flex-1">
                                <p class="font-medium text-gray-800">Department Meeting Scheduled</p>
                                <p class="text-xs text-gray-500">Faculty meeting tomorrow at 10:00 AM</p>
                                <p class="text-xs text-gray-400 mt-1">3 hours ago</p>
                            </div>
                        </div>
                    </div>
                    <div class="border-t px-5 py-3">
                        <a href="#" class="text-red-600 text-sm font-medium hover:underline">View all activities →</a>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow">
                    <div class="border-b px-5 py-4">
                        <h3 class="font-semibold text-gray-800 text-lg">Quick Actions</h3>
                    </div>
                    <div class="p-5 space-y-2">
                        <a href="#" class="flex items-center gap-3 p-3 bg-gray-50 rounded-lg hover:bg-red-50 hover:text-red-600 transition group">
                            <i class="fas fa-upload text-red-600"></i>
                            <span class="text-sm font-medium">Upload Grades</span>
                        </a>
                        <a href="#" class="flex items-center gap-3 p-3 bg-gray-50 rounded-lg hover:bg-red-50 hover:text-red-600 transition group">
                            <i class="fas fa-calendar-plus text-red-600"></i>
                            <span class="text-sm font-medium">Create Course Schedule</span>
                        </a>
                        <a href="#" class="flex items-center gap-3 p-3 bg-gray-50 rounded-lg hover:bg-red-50 hover:text-red-600 transition group">
                            <i class="fas fa-envelope text-red-600"></i>
                            <span class="text-sm font-medium">Send Announcement</span>
                        </a>
                        <a href="#" class="flex items-center gap-3 p-3 bg-gray-50 rounded-lg hover:bg-red-50 hover:text-red-600 transition group">
                            <i class="fas fa-chart-line text-red-600"></i>
                            <span class="text-sm font-medium">Generate Reports</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="mt-6 bg-white rounded-lg shadow">
                <div class="border-b px-5 py-4">
                    <h3 class="font-semibold text-gray-800 text-lg">Academic Calendar</h3>
                </div>
                <div class="p-5 space-y-3">
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="font-medium text-gray-800">Mid-Semester Examinations</p>
                            <p class="text-xs text-gray-500">All departments</p>
                        </div>
                        <span class="text-sm text-red-600 font-medium">April 15-20, 2024</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="font-medium text-gray-800">Grade Submission Deadline</p>
                            <p class="text-xs text-gray-500">For all courses</p>
                        </div>
                        <span class="text-sm text-red-600 font-medium">May 5, 2024</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="font-medium text-gray-800">Academic Board Meeting</p>
                            <p class="text-xs text-gray-500">Senate Chamber</p>
                        </div>
                        <span class="text-sm text-red-600 font-medium">May 10, 2024</span>
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