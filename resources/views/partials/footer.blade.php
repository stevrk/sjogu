<footer id="contact" class="bg-gray-900 text-white">
    <div class="container mx-auto px-4 py-12">
        <!-- Main Footer Content - 3 Columns -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
            <!-- Column 1: Contact Info -->
            <div class="text-center md:text-left">
                <div class="flex justify-center md:justify-start mb-4">
                    <img src="{{ asset('images/logo_stjohn.png') }}" alt="Logo" class="h-12 w-auto">
                </div>
                <h3 class="text-lg font-semibold mb-2">St John of God University</h3>
                <p class="text-gray-400 text-sm mb-4">P.O. Box 744, Mzuzu, Malawi</p>
                <div class="space-y-2">
                    <p class="text-gray-400 text-sm"><i class="fas fa-phone-alt text-red-500 w-5"></i> +265 991 887 119</p>
                    <p class="text-gray-400 text-sm"><i class="fas fa-envelope text-red-500 w-5"></i> collegehs@sjog.mw</p>
                </div>
            </div>

            <!-- Column 2: Quick Links -->
            <div class="text-center md:text-left">
                <h4 class="text-lg font-semibold mb-4 text-red-400">Quick Links</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('about') }}" class="text-gray-400 hover:text-white transition">About Us</a></li>
                    <li><a href="{{ route('programs') }}" class="text-gray-400 hover:text-white transition">Programs</a></li>
                    <li><a href="{{ route('enroll') }}" class="text-gray-400 hover:text-white transition">Admissions</a></li>
                    <li><a href="{{ route('research') }}" class="text-gray-400 hover:text-white transition">Research</a></li>
                    <li><a href="{{ route('news') }}" class="text-gray-400 hover:text-white transition">News</a></li>
                    <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-white transition">Contact</a></li>
                </ul>
            </div>

            <!-- Column 3: Follow Us & Newsletter -->
            <div class="text-center md:text-left">
                <h4 class="text-lg font-semibold mb-4 text-red-400">Follow Us</h4>
                <div class="flex gap-4 justify-center md:justify-start mb-6">
                    <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-red-600 transition">
                        <i class="fab fa-facebook-f text-gray-400 hover:text-white"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-red-600 transition">
                        <i class="fab fa-twitter text-gray-400 hover:text-white"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-red-600 transition">
                        <i class="fab fa-instagram text-gray-400 hover:text-white"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-red-600 transition">
                        <i class="fab fa-linkedin-in text-gray-400 hover:text-white"></i>
                    </a>
                </div>
                
                <div>
                    <p class="text-sm text-gray-400 mb-3">Subscribe to Newsletter</p>
                    <form action="{{ route('newsletter.subscribe') }}" method="POST" class="flex">
                        @csrf
                        <input type="email" name="email" placeholder="Your email" required 
                               class="flex-1 px-3 py-2 rounded-l-md text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-500">
                        <button type="submit" class="bg-red-600 px-4 py-2 rounded-r-md hover:bg-red-700 transition">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Partners Section -->
        <div class="border-t border-gray-800 pt-8 mb-8">
            <div class="text-center mb-6">
                <h3 class="text-xl font-bold text-white mb-2">Partners</h3>
                <div class="w-16 h-0.5 bg-red-600 mx-auto rounded-full"></div>
            </div>
            <div class="flex flex-wrap justify-center items-center gap-6 md:gap-8">
                <a href="https://www.cham.org.mw" target="_blank" rel="noopener noreferrer" class="group">
                    <div class="w-20 h-20 md:w-24 md:h-24 bg-white rounded-xl shadow-md hover:shadow-lg transition p-2 flex items-center justify-center hover:-translate-y-1">
                        <img src="{{ asset('images/parteners/christian health association.jpeg') }}" alt="CHAM" class="max-w-full max-h-full object-contain">
                    </div>
                </a>
                <a href="https://www.seedglobalhealth.org" target="_blank" rel="noopener noreferrer" class="group">
                    <div class="w-20 h-20 md:w-24 md:h-24 bg-white rounded-xl shadow-md hover:shadow-lg transition p-2 flex items-center justify-center hover:-translate-y-1">
                        <img src="{{ asset('images/parteners/seed health.jpeg') }}" alt="Seed Global Health" class="max-w-full max-h-full object-contain">
                    </div>
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer" class="group">
                    <div class="w-20 h-20 md:w-24 md:h-24 bg-white rounded-xl shadow-md hover:shadow-lg transition p-2 flex items-center justify-center hover:-translate-y-1">
                        <img src="{{ asset('images/parteners/Global health.jpeg') }}" alt="GAIA" class="max-w-full max-h-full object-contain">
                    </div>
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer" class="group">
                    <div class="w-20 h-20 md:w-24 md:h-24 bg-white rounded-xl shadow-md hover:shadow-lg transition p-2 flex items-center justify-center hover:-translate-y-1">
                        <img src="{{ asset('images/parteners/service_learning.png') }}" alt="Uniservitate" class="max-w-full max-h-full object-contain">
                    </div>
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer" class="group">
                    <div class="w-20 h-20 md:w-24 md:h-24 bg-white rounded-xl shadow-md hover:shadow-lg transition p-2 flex items-center justify-center hover:-translate-y-1">
                        <img src="{{ asset('images/parteners/medic to medic.jpeg') }}" alt="Medic to Medic" class="max-w-full max-h-full object-contain">
                    </div>
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer" class="group">
                    <div class="w-20 h-20 md:w-24 md:h-24 bg-white rounded-xl shadow-md hover:shadow-lg transition p-2 flex items-center justify-center hover:-translate-y-1">
                        <img src="{{ asset('images/parteners/book_aid.jpeg') }}" alt="Book Aid International" class="max-w-full max-h-full object-contain">
                    </div>
                </a>
                <a href="https://www.nmcm.org.mw" target="_blank" rel="noopener noreferrer" class="group">
                    <div class="w-20 h-20 md:w-24 md:h-24 bg-white rounded-xl shadow-md hover:shadow-lg transition p-2 flex items-center justify-center">
                        <img src="{{ asset('images/parteners/nurses_council.png') }}" alt="Nurses Council" class="max-w-full max-h-full object-contain" onerror="this.onerror=null; this.parentElement.innerHTML='<i class=\'fas fa-user-nurse text-3xl text-red-600\'></i>'">
                    </div>
                </a>
                <a href="https://www.nche.ac.mw" target="_blank" rel="noopener noreferrer" class="group">
                    <div class="w-20 h-20 md:w-24 md:h-24 bg-white rounded-xl shadow-md hover:shadow-lg transition p-2 flex items-center justify-center">
                        <img src="{{ asset('images/parteners/nche.png') }}" alt="NCHE" class="max-w-full max-h-full object-contain" onerror="this.onerror=null; this.parentElement.innerHTML='<i class=\'fas fa-university text-3xl text-red-600\'></i>'">
                    </div>
                </a>
            </div>
        </div>

        <!-- Copyright -->
        <div class="text-center text-xs text-gray-500 pt-4 border-t border-gray-800">
            <p>&copy; {{ date('Y') }} St John of God University. All rights reserved.</p>
        </div>
    </div>
</footer>