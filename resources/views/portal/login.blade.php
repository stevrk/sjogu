<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Login - St John of God University</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');
        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100">

    <div class="min-h-screen flex items-center justify-center px-4">
        <div class="max-w-md w-full bg-white rounded-lg shadow-lg p-8">
            <!-- Logo and School Name -->
            <div class="text-center mb-8">
                <div class="flex justify-center mb-4">
                    <div class="w-20 h-20 flex items-center justify-center">
                        <img src="{{ asset('images/logo_stjohn.png') }}" alt="St John of God University Logo" class="w-14 h-14 object-cover">
                    </div>
                </div>
                <h1 class="text-xl font-bold text-gray-800">St John of God University</h1>
                <p class="text-sm text-red-600 font-semibold mt-1">Portal Login</p>
            </div>

            <!-- Portal Type Slider -->
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 mb-3 text-center">
                    Select Portal Type
                </label>
                <div class="relative flex items-center justify-center">
                    <!-- Slider Background -->
                    <div class="bg-gray-100 rounded-lg p-1 w-full max-w-xs mx-auto relative">
                        <div class="flex relative z-10">
                            <button type="button" 
                                    id="studentBtn"
                                    class="portal-toggle flex-1 text-center py-2 px-4 rounded-lg transition-all duration-300 font-semibold text-sm">
                                🎓 Student Portal
                            </button>
                            <button type="button" 
                                    id="staffBtn"
                                    class="portal-toggle flex-1 text-center py-2 px-4 rounded-lg transition-all duration-300 font-semibold text-sm">
                                👨‍🏫 Staff Portal
                            </button>
                        </div>
                        <!-- Sliding Indicator -->
                        <div id="sliderIndicator" 
                             class="absolute top-1 bottom-1 w-1/2 bg-red-600 rounded-lg transition-all duration-300 ease-in-out"
                             style="left: 0;">
                        </div>
                    </div>
                </div>
                <p class="text-xs text-gray-500 text-center mt-2" id="portalHint">
                    <i class="fas fa-info-circle text-red-500 mr-1"></i>
                    You will be redirected to the Student Dashboard
                </p>
            </div>

            <!-- Demo Login Form (non-functional) -->
            <div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        <i class="fas fa-id-card text-gray-400 text-xs mr-1"></i> <span id="idLabel">Student ID</span>
                    </label>
                    <input type="text" id="userId" placeholder="Enter your student ID (demo)" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-50 cursor-not-allowed"
                        readonly disabled>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        <i class="fas fa-lock text-gray-400 text-xs mr-1"></i> Password
                    </label>
                    <input type="password" id="password" placeholder="Enter your password (demo)" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-50 cursor-not-allowed"
                        readonly disabled>
                </div>

                <div class="flex items-center justify-between mb-6">
                    <label class="flex items-center cursor-not-allowed">
                        <input type="checkbox" class="w-4 h-4 text-red-600 border-gray-300 rounded cursor-not-allowed" disabled>
                        <span class="ml-2 text-sm text-gray-400">Remember me</span>
                    </label>
                    <a href="javascript:void(0)" class="text-sm text-gray-400 cursor-not-allowed">Forgot Password?</a>
                </div>
            </div>

            <!-- Login Button -->
            <button type="button" id="loginBtn" class="w-full bg-red-600 text-white py-2.5 rounded-lg font-semibold hover:bg-red-700 transition flex items-center justify-center gap-2">
                <i class="fas fa-sign-in-alt"></i> <span id="loginButtonText">Login to Student Portal</span>
            </button>

            <!-- Demo Note -->
            <div class="mt-4 p-3 bg-yellow-50 rounded-lg border border-yellow-200">
                <p class="text-xs text-yellow-700 text-center">
                    <i class="fas fa-info-circle mr-1"></i> 
                    <strong>Demo Mode:</strong> Input fields are for demonstration only. Click login to proceed.
                </p>
            </div>

            <!-- Info Note -->
            <div class="mt-4 p-3 bg-gray-50 rounded-lg">
                <p class="text-xs text-gray-500 text-center">
                    <i class="fas fa-info-circle text-red-500 mr-1"></i> 
                    Click login to access your portal
                </p>
            </div>

            <!-- Back to Home -->
            <div class="text-center mt-6">
                <a href="{{ route('home') }}" class="text-sm text-gray-500 hover:text-red-600 transition inline-flex items-center gap-1">
                    <i class="fas fa-arrow-left text-xs"></i> Back to School Website
                </a>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const studentBtn = document.getElementById('studentBtn');
            const staffBtn = document.getElementById('staffBtn');
            const sliderIndicator = document.getElementById('sliderIndicator');
            const portalHint = document.getElementById('portalHint');
            const loginButtonText = document.getElementById('loginButtonText');
            const idLabel = document.getElementById('idLabel');
            const userIdInput = document.getElementById('userId');
            const loginBtn = document.getElementById('loginBtn');
            
            let currentPortal = 'student'; // 'student' or 'staff'
            
            // Function to update UI based on selected portal
            function updatePortalUI(portal) {
                if (portal === 'student') {
                    // Move slider to left (Student)
                    sliderIndicator.style.left = '0';
                    
                    // Update button styles
                    studentBtn.classList.add('text-white');
                    studentBtn.classList.remove('text-gray-700');
                    staffBtn.classList.remove('text-white');
                    staffBtn.classList.add('text-gray-700');
                    
                    // Update hint text
                    portalHint.innerHTML = '<i class="fas fa-info-circle text-red-500 mr-1"></i> You will be redirected to the Student Dashboard';
                    
                    // Update login button text
                    loginButtonText.textContent = 'Login to Student Portal';
                    
                    // Update ID label (for demo)
                    idLabel.textContent = 'Student ID';
                    
                    // Update placeholder (for demo)
                    userIdInput.placeholder = 'Enter your student ID (demo)';
                } else {
                    // Move slider to right (Staff)
                    sliderIndicator.style.left = '50%';
                    
                    // Update button styles
                    staffBtn.classList.add('text-white');
                    staffBtn.classList.remove('text-gray-700');
                    studentBtn.classList.remove('text-white');
                    studentBtn.classList.add('text-gray-700');
                    
                    // Update hint text
                    portalHint.innerHTML = '<i class="fas fa-info-circle text-red-500 mr-1"></i> You will be redirected to the Staff Dashboard';
                    
                    // Update login button text
                    loginButtonText.textContent = 'Login to Staff Portal';
                    
                    // Update ID label (for demo)
                    idLabel.textContent = 'Staff ID';
                    
                    // Update placeholder (for demo)
                    userIdInput.placeholder = 'Enter your staff ID (demo)';
                }
            }
            
            // Student button click
            studentBtn.addEventListener('click', function() {
                if (currentPortal !== 'student') {
                    currentPortal = 'student';
                    updatePortalUI('student');
                }
            });
            
            // Staff button click
            staffBtn.addEventListener('click', function() {
                if (currentPortal !== 'staff') {
                    currentPortal = 'staff';
                    updatePortalUI('staff');
                }
            });
            
            // Login button click - redirect without validation
            loginBtn.addEventListener('click', function() {
                if (currentPortal === 'student') {
                    window.location.href = "{{ route('portal.dashboard') }}";
                } else {
                    window.location.href = "{{ route('staff.dashboard') }}";
                }
            });
        });
    </script>

    <style>
        /* Smooth transitions for portal toggle buttons */
        .portal-toggle {
            transition: all 0.3s ease;
            position: relative;
            z-index: 2;
            cursor: pointer;
        }
        
        .portal-toggle.text-white {
            color: white;
        }
        
        .portal-toggle.text-gray-700 {
            color: #374151;
        }
        
        /* Optional: Add hover effect on buttons */
        .portal-toggle:hover:not(.text-white) {
            background-color: rgba(220, 38, 38, 0.1);
        }
        
        /* Disabled input styling */
        input:disabled {
            background-color: #f9fafb;
            cursor: not-allowed;
            opacity: 0.7;
        }
    </style>

</body>
</html>