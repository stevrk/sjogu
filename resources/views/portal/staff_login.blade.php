<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Login - St John of God University</title>
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
                        <img src="{{ asset('images/logo_stjohn.png') }}" alt="Logo" class="w-12 h-12 object-cover">
                    </div>
                </div>
                <h1 class="text-xl font-bold text-gray-800">St John Of God University</h1>
                <p class="text-sm text-gray-500 mt-1">Staff Portal</p>
            </div>

            <!-- Login Form -->
            <form>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Staff ID / Email</label>
                    <input type="text" placeholder="Enter your staff ID or email" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-gray-600 focus:ring-1 focus:ring-gray-600">
                </div>

                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                    <input type="password" placeholder="Enter your password" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-gray-600 focus:ring-1 focus:ring-gray-600">
                </div>

                <a href="{{ route('staff.dashboard') }}" class="block w-full bg-red-600 text-white text-center py-2 rounded-lg font-semibold hover:bg-gray-900 transition">
                    Login
                </a>
            </form>

            <!-- Back to Home -->
            <div class="text-center mt-6">
                <a href="{{ route('home') }}" class="text-sm text-gray-500 hover:text-gray-700 transition">
                    ← Back to School Website
                </a>
            </div>
        </div>
    </div>

</body>
</html>