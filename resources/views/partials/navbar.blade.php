<!-- Mobile Menu -->
<div class="mobile-menu" id="mobileMenu">
    <div class="flex flex-col h-full">
        <!-- Fixed Header -->
        <div class="p-6 pb-4 border-b">
            <div class="flex justify-between items-center">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full overflow-hidden">
                        <img src="{{ asset('images/logo_stjohn.png') }}" alt="Logo" class="w-full h-full object-cover">
                    </div>
                    <h2 class="text-xl font-bold text-red-700">Menu</h2>
                </div>
                <button id="closeMenu" class="text-gray-600 hover:text-red-600 transition">
                    <i class="fas fa-times text-2xl"></i>
                </button>
            </div>
        </div>
        
        <!-- Scrollable Content Area -->
        <div class="flex-1 overflow-y-auto">
            <div class="p-6">
                <!-- Mobile Search Bar in Menu -->
                <div class="mb-6 pb-6 border-b">
                    <form action="{{ route('search') }}" method="GET" class="relative">
                        <div class="relative">
                            <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 text-sm"></i>
                            <input type="text" 
                                   name="q" 
                                   placeholder="Search courses, news, events..." 
                                   value="{{ request()->get('q') }}"
                                   class="w-full px-10 py-2.5 rounded-lg border border-gray-200 text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent bg-gray-50">
                        </div>
                    </form>
                </div>
                
                <!-- Navigation Links -->
                <ul class="space-y-3 mb-6">
                    <li><a href="{{ route('home') }}" class="mobile-nav-link flex items-center gap-3 py-2 px-3 rounded-lg transition {{ request()->routeIs('home') ? 'bg-red-50 text-red-700' : 'text-gray-800 hover:bg-red-50 hover:text-red-700' }}"><i class="fas fa-home w-5 text-red-600"></i><span>Home</span>@if(request()->routeIs('home'))<i class="fas fa-check ml-auto text-red-600 text-xs"></i>@endif</a></li>
                    <li><a href="{{ route('about') }}" class="mobile-nav-link flex items-center gap-3 py-2 px-3 rounded-lg transition {{ request()->routeIs('about') ? 'bg-red-50 text-red-700' : 'text-gray-800 hover:bg-red-50 hover:text-red-700' }}"><i class="fas fa-info-circle w-5 text-red-600"></i><span>About</span>@if(request()->routeIs('about'))<i class="fas fa-check ml-auto text-red-600 text-xs"></i>@endif</a></li>
                      <!-- Administration Dropdown (Mobile) -->
                    <li>
                        <div class="mobile-dropdown-header flex items-center justify-between py-2 px-3 rounded-lg cursor-pointer transition text-gray-800 hover:bg-red-50 hover:text-red-700" onclick="toggleMobileDropdown(this)">
                            <div class="flex items-center gap-3">
                                <i class="fas fa-building w-5 text-red-600"></i>
                                <span>Administration</span>
                            </div>
                            <i class="fas fa-chevron-down text-xs transition-transform"></i>
                        </div>
                        <ul class="mobile-dropdown-content ml-8 mt-1 space-y-2 hidden">
                            <li><a href="{{ route('executive-team') }}" class="mobile-nav-link block py-2 px-3 rounded-lg transition text-gray-600 hover:bg-red-50 hover:text-red-700">University Executive Team</a></li>
                            <li><a href="{{ route('staff') }}" class="mobile-nav-link block py-2 px-3 rounded-lg transition text-gray-600 hover:bg-red-50 hover:text-red-700">Staff Directory</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('news') }}" class="mobile-nav-link flex items-center gap-3 py-2 px-3 rounded-lg transition {{ request()->routeIs('news') ? 'bg-red-50 text-red-700' : 'text-gray-800 hover:bg-red-50 hover:text-red-700' }}"><i class="fas fa-newspaper w-5 text-red-600"></i><span>News</span>@if(request()->routeIs('news') || request()->routeIs('news.show'))<i class="fas fa-check ml-auto text-red-600 text-xs"></i>@endif</a></li>
                    
                    <!-- Programs Dropdown (Mobile) - Showing Departments -->
                    <li>
                        <div class="mobile-dropdown-header flex items-center justify-between py-2 px-3 rounded-lg cursor-pointer transition text-gray-800 hover:bg-red-50 hover:text-red-700" onclick="toggleMobileDropdown(this)">
                            <div class="flex items-center gap-3">
                                <i class="fas fa-graduation-cap w-5 text-red-600"></i>
                                <span>Programs</span>
                            </div>
                            <i class="fas fa-chevron-down text-xs transition-transform"></i>
                        </div>
                        <ul class="mobile-dropdown-content ml-4 mt-2 space-y-2 hidden">
                            <li><a href="{{ route('programs.clinical-medicine') }}" class="mobile-nav-link block py-2 px-3 rounded-lg transition text-gray-600 hover:bg-red-50 hover:text-red-700">Clinical Medicine</a></li>
                            <li><a href="{{ route('programs.nursing-midwifery') }}" class="mobile-nav-link block py-2 px-3 rounded-lg transition text-gray-600 hover:bg-red-50 hover:text-red-700">Nursing & Midwifery</a></li>
                            <li><a href="{{ route('programs.psycho-social-counselling') }}" class="mobile-nav-link block py-2 px-3 rounded-lg transition text-gray-600 hover:bg-red-50 hover:text-red-700">Psycho-Social Counselling</a></li>
                        </ul>
                    </li>
                    
                    <li><a href="{{ route('students') }}" class="mobile-nav-link flex items-center gap-3 py-2 px-3 rounded-lg transition {{ request()->routeIs('students') ? 'bg-red-50 text-red-700' : 'text-gray-800 hover:bg-red-50 hover:text-red-700' }}"><i class="fas fa-users w-5 text-red-600"></i><span>Students</span>@if(request()->routeIs('students'))<i class="fas fa-check ml-auto text-red-600 text-xs"></i>@endif</a></li>
                    <li><a href="{{ route('library') }}" class="mobile-nav-link flex items-center gap-3 py-2 px-3 rounded-lg transition {{ request()->routeIs('library') ? 'bg-red-50 text-red-700' : 'text-gray-800 hover:bg-red-50 hover:text-red-700' }}"><i class="fas fa-book w-5 text-red-600"></i><span>Library</span>@if(request()->routeIs('library'))<i class="fas fa-check ml-auto text-red-600 text-xs"></i>@endif</a></li>
                    <li><a href="{{ route('research') }}" class="mobile-nav-link flex items-center gap-3 py-2 px-3 rounded-lg transition {{ request()->routeIs('research') ? 'bg-red-50 text-red-700' : 'text-gray-800 hover:bg-red-50 hover:text-red-700' }}"><i class="fas fa-flask w-5 text-red-600"></i><span>Research</span>@if(request()->routeIs('research'))<i class="fas fa-check ml-auto text-red-600 text-xs"></i>@endif</a></li>
                    
                  
                    
                    <li><a href="{{ route('downloads') }}" class="mobile-nav-link flex items-center gap-3 py-2 px-3 rounded-lg transition {{ request()->routeIs('downloads') ? 'bg-red-50 text-red-700' : 'text-gray-800 hover:bg-red-50 hover:text-red-700' }}"><i class="fas fa-download w-5 text-red-600"></i><span>Resources</span>@if(request()->routeIs('downloads'))<i class="fas fa-check ml-auto text-red-600 text-xs"></i>@endif</a></li>
                    <li><a href="{{ route('contact') }}" class="mobile-nav-link flex items-center gap-3 py-2 px-3 rounded-lg transition {{ request()->routeIs('contact') ? 'bg-red-50 text-red-700' : 'text-gray-800 hover:bg-red-50 hover:text-red-700' }}"><i class="fas fa-envelope w-5 text-red-600"></i><span>Contact</span>@if(request()->routeIs('contact'))<i class="fas fa-check ml-auto text-red-600 text-xs"></i>@endif</a></li>
                </ul>
                
                <a href="{{ route('enroll') }}" class="mobile-nav-link block bg-yellow-500 text-white w-full py-3 rounded-lg text-center font-semibold hover:bg-yellow-400 transition mt-4 {{ request()->routeIs('enroll') ? 'bg-yellow-600 ring-2 ring-yellow-300' : '' }}" data-bypass="true">
                    <i class="fas fa-user-plus mr-2"></i>Apply Now
                </a>
            </div>
        </div>
    </div>
</div>

<!-- TOP BAR - Sticky on desktop only -->
<div class="bg-gradient-to-r from-red-700 to-red-800 text-white text-sm py-2.5 px-4 md:px-6 hidden lg:flex items-center justify-between top-0 z-40 shadow-md" style="position: sticky; top: 0;">
    <div class="flex items-center gap-5">
        <a href="tel:+265991887119" class="flex items-center gap-2 hover:text-red-200 transition"><i class="fas fa-phone-alt text-xs"></i><span>+265 991 887 119</span></a>
        <a href="mailto:collegehs@sjog.mw" class="flex items-center gap-2 hover:text-red-200 transition"><i class="fas fa-envelope text-xs"></i><span>collegehs@sjog.mw</span></a>
        <div class="flex items-center gap-2"><i class="fas fa-clock text-xs"></i><span>08:00 - 17:00</span></div>
    </div>
    
    <div class="flex items-center gap-4">
        <form action="{{ route('search') }}" method="GET" class="relative">
            <div class="relative">
                <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 text-sm"></i>
                <input type="text" name="q" placeholder="Search..." value="{{ request()->get('q') }}" class="w-64 px-10 py-2 rounded-lg text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-400 bg-white/90 backdrop-blur-sm border-0">
            </div>
        </form>
        <a href="{{ route('enroll') }}" class="bg-yellow-500 text-white hover:bg-yellow-400 px-5 py-2 rounded-lg font-semibold transition flex items-center gap-2 shadow-md"><i class="fas fa-user-plus"></i><span>Apply Now</span><i class="fas fa-arrow-right text-xs"></i></a>
    </div>
</div>

<!-- MAIN HEADER - Logo, Title, and Navigation in one row -->
<div class="bg-white py-3 px-4 md:px-6 shadow z-30" style="position: sticky; top: 0; width: 100%; background-color: white;">
    <div class="flex items-center justify-between gap-3">
        <!-- Logo and Title -->
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 md:w-12 md:h-12 rounded-full overflow-hidden shadow-md flex-shrink-0">
                <img src="{{ asset('images/logo_stjohn.png') }}" alt="St John of God University Logo" class="w-full h-full object-cover">
            </div>
            <a href="{{ route('home') }}" class="text-base sm:text-lg md:text-xl font-bold text-gray-800 hover:text-red-700 transition">
                St John of God University
            </a>
        </div>
        
        <!-- Desktop Navigation -->
        <div class="hidden lg:flex items-center gap-4 xl:gap-6">
            <ul class="flex gap-4 xl:gap-6 font-medium items-center">
                <li><a href="{{ route('home') }}" class="nav-link transition text-sm xl:text-base whitespace-nowrap {{ request()->routeIs('home') ? 'text-red-600 border-b-2 border-red-600 pb-1' : 'text-gray-700 hover:text-red-600' }}">Home</a></li>
                <li><a href="{{ route('about') }}" class="nav-link transition text-sm xl:text-base whitespace-nowrap {{ request()->routeIs('about') ? 'text-red-600 border-b-2 border-red-600 pb-1' : 'text-gray-700 hover:text-red-600' }}">About</a></li>
                <!-- Administration Dropdown (Desktop) -->
                <li class="dropdown relative">
                    <button onclick="toggleDesktopDropdown(this)" class="nav-link transition text-sm xl:text-base whitespace-nowrap text-gray-700 hover:text-red-600 flex items-center gap-1 bg-transparent cursor-pointer">
                        Administration <i class="fas fa-chevron-down text-xs transition-transform"></i>
                    </button>
                    <div class="dropdown-content-desktop absolute top-full left-0 mt-1 bg-white rounded-lg shadow-lg min-w-[200px] z-50 hidden">
                        <a href="{{ route('executive-team') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600">University Executive Team</a>
                        <a href="{{ route('staff') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600">Staff Directory</a>
                    </div>
                </li>
                <li><a href="{{ route('news') }}" class="nav-link transition text-sm xl:text-base whitespace-nowrap {{ request()->routeIs('news') || request()->routeIs('news.show') ? 'text-red-600 border-b-2 border-red-600 pb-1' : 'text-gray-700 hover:text-red-600' }}">News</a></li>
                
                <!-- Programs Dropdown (Desktop) - Showing Departments -->
                <li class="dropdown relative">
                    <button onclick="toggleDesktopDropdown(this)" class="nav-link transition text-sm xl:text-base whitespace-nowrap text-gray-700 hover:text-red-600 flex items-center gap-1 bg-transparent cursor-pointer">
                        Programs <i class="fas fa-chevron-down text-xs transition-transform"></i>
                    </button>
                    <div class="dropdown-content-desktop absolute top-full left-0 mt-1 bg-white rounded-lg shadow-lg min-w-[220px] z-50 hidden">
                        <a href="{{ route('programs.clinical-medicine') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600">Clinical Medicine</a>
                        <a href="{{ route('programs.nursing-midwifery') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600">Nursing & Midwifery</a>
                        <a href="{{ route('programs.psycho-social-counselling') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600">Psycho-Social Counselling</a>
                    </div>
                </li>
                
                <li><a href="{{ route('students') }}" class="nav-link transition text-sm xl:text-base whitespace-nowrap {{ request()->routeIs('students') ? 'text-red-600 border-b-2 border-red-600 pb-1' : 'text-gray-700 hover:text-red-600' }}">Student Life</a></li>
                <li><a href="{{ route('library') }}" class="nav-link transition text-sm xl:text-base whitespace-nowrap {{ request()->routeIs('library') ? 'text-red-600 border-b-2 border-red-600 pb-1' : 'text-gray-700 hover:text-red-600' }}">Library</a></li>
                <li><a href="{{ route('research') }}" class="nav-link transition text-sm xl:text-base whitespace-nowrap {{ request()->routeIs('research') ? 'text-red-600 border-b-2 border-red-600 pb-1' : 'text-gray-700 hover:text-red-600' }}">Research</a></li>
                
                
                
                <li><a href="{{ route('downloads') }}" class="nav-link transition text-sm xl:text-base whitespace-nowrap {{ request()->routeIs('downloads') ? 'text-red-600 border-b-2 border-red-600 pb-1' : 'text-gray-700 hover:text-red-600' }}">Resources</a></li>
                <li><a href="{{ route('contact') }}" class="nav-link transition text-sm xl:text-base whitespace-nowrap {{ request()->routeIs('contact') ? 'text-red-600 border-b-2 border-red-600 pb-1' : 'text-gray-700 hover:text-red-600' }}">Contact</a></li>
            </ul>
        </div>
        
        <!-- Mobile Menu Button -->
        <div class="flex lg:hidden items-center gap-3">
            <button id="mobileSearchBtn" class="text-gray-700 hover:text-red-600 transition"><i class="fas fa-search text-xl"></i></button>
            <button id="hamburgerBtn" class="text-gray-700"><i class="fas fa-bars text-2xl"></i></button>
        </div>
    </div>
</div>

<style>
    /* Desktop Dropdown Styles - Click to open */
    .dropdown {
        position: relative;
    }
    
    .dropdown-content-desktop {
        display: none;
    }
    
    .dropdown-content-desktop.show {
        display: block;
        animation: fadeIn 0.2s ease;
    }
    
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    /* Ensure sticky positioning works on all browsers */
    .bg-white.py-3 {
        position: sticky !important;
        top: 0 !important;
        background-color: white !important;
        z-index: 30 !important;
    }
    
    /* For desktop when top bar is visible */
    @media (min-width: 1024px) {
        .bg-white.py-3 {
            top: 42px !important;
        }
    }
    
    /* For tablet and mobile, header stays at top */
    @media (max-width: 1023px) {
        .bg-white.py-3 {
            top: 0 !important;
        }
    }
    
    /* Scroll margin for anchor links */
    section[id] {
        scroll-margin-top: 100px;
    }
    
    @media (min-width: 1024px) {
        section[id] {
            scroll-margin-top: 130px;
        }
    }
    
    @media (max-width: 1023px) {
        section[id] {
            scroll-margin-top: 80px;
        }
    }
    
    /* Mobile Menu Base Styles */
    .mobile-menu {
        position: fixed;
        top: 0;
        right: -100%;
        width: 85%;
        max-width: 350px;
        height: 100vh;
        background: white;
        z-index: 1000;
        transition: right 0.3s ease;
        box-shadow: -5px 0 20px rgba(0,0,0,0.1);
        display: flex;
        flex-direction: column;
    }
    
    .mobile-menu.active {
        right: 0;
    }
    
    .overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.5);
        z-index: 999;
        display: none;
    }
    
    .overlay.active {
        display: block;
    }
    
    /* Desktop styles */
    @media (min-width: 1024px) {
        .mobile-menu, .overlay.active {
            display: none;
        }
    }
    
    /* Tablet & Mobile styles */
    @media (max-width: 1023px) {
        .lg\:flex {
            display: none !important;
        }
        .lg\:hidden {
            display: flex !important;
        }
    }
    
    /* Mobile adjustments */
    @media (max-width: 640px) {
        .mobile-menu {
            width: 85%;
            max-width: 280px;
        }
        .mobile-menu .p-6 {
            padding: 1.25rem;
        }
    }
    
    /* Nav link styles */
    .nav-link {
        transition: all 0.3s ease;
    }
    
    .border-b-2 {
        transition: all 0.3s ease;
    }
    
    /* Mobile Menu Scroll Fix */
    .mobile-menu .flex-1 {
        overflow-y: auto;
        -webkit-overflow-scrolling: touch;
        flex: 1;
        min-height: 0;
    }
    
    .mobile-menu .flex-1 .p-6 {
        padding-bottom: 80px;
    }
    
    .mobile-menu .p-6 {
        padding-top: 0.75rem;
    }
    
    .mobile-menu .space-y-3 > :not([hidden]) ~ :not([hidden]) {
        margin-top: 0.5rem;
    }
    
    .mobile-menu .mb-6 {
        margin-bottom: 0.75rem;
    }
    
    .mobile-menu .pb-6 {
        padding-bottom: 0.75rem;
    }
    
    @media (max-height: 700px) {
        .mobile-menu .flex-1 .p-6 {
            padding-bottom: 60px;
        }
        .mobile-menu .p-6 {
            padding-top: 0.5rem;
        }
    }
    
    @media (max-height: 600px) {
        .mobile-menu .flex-1 .p-6 {
            padding-bottom: 50px;
        }
        .mobile-menu .p-6 {
            padding: 0.5rem;
        }
        .mobile-nav-link {
            padding: 0.4rem 0.75rem !important;
        }
    }
    
    @media (min-height: 800px) {
        .mobile-menu .flex-1 .p-6 {
            padding-bottom: 100px;
        }
    }
    
    @supports (padding-bottom: env(safe-area-inset-bottom)) {
        .mobile-menu .flex-1 .p-6 {
            padding-bottom: calc(80px + env(safe-area-inset-bottom));
        }
    }
</style>

<script>
    // Desktop dropdown toggle function (click to open)
    function toggleDesktopDropdown(button) {
        const dropdownContent = button.nextElementSibling;
        const isVisible = dropdownContent.classList.contains('show');
        
        // Close all other open dropdowns
        document.querySelectorAll('.dropdown-content-desktop.show').forEach(content => {
            if (content !== dropdownContent) {
                content.classList.remove('show');
                const parentBtn = content.previousElementSibling;
                if (parentBtn) {
                    const icon = parentBtn.querySelector('.fa-chevron-down');
                    if (icon) icon.style.transform = 'rotate(0deg)';
                }
            }
        });
        
        // Toggle current dropdown
        dropdownContent.classList.toggle('show');
        
        // Rotate chevron icon
        const icon = button.querySelector('.fa-chevron-down');
        if (icon) {
            icon.style.transform = dropdownContent.classList.contains('show') ? 'rotate(180deg)' : 'rotate(0deg)';
        }
    }
    
    // Close dropdown when clicking outside
    document.addEventListener('click', function(event) {
        const isDropdownButton = event.target.closest('.dropdown button');
        const isDropdownContent = event.target.closest('.dropdown-content-desktop');
        
        if (!isDropdownButton && !isDropdownContent) {
            document.querySelectorAll('.dropdown-content-desktop.show').forEach(content => {
                content.classList.remove('show');
                const parentBtn = content.previousElementSibling;
                if (parentBtn) {
                    const icon = parentBtn.querySelector('.fa-chevron-down');
                    if (icon) icon.style.transform = 'rotate(0deg)';
                }
            });
        }
    });
    
    // Mobile dropdown toggle function
    function toggleMobileDropdown(element) {
        const content = element.nextElementSibling;
        const icon = element.querySelector('.fa-chevron-down');
        
        content.classList.toggle('hidden');
        if (content.classList.contains('hidden')) {
            icon.style.transform = 'rotate(0deg)';
        } else {
            icon.style.transform = 'rotate(180deg)';
        }
    }
    
    const mobileMenu = document.getElementById('mobileMenu');
    const overlay = document.getElementById('overlay');
    const hamburgerBtn = document.getElementById('hamburgerBtn');
    const closeMenuBtn = document.getElementById('closeMenu');
    const mobileSearchBtn = document.getElementById('mobileSearchBtn');
    
    let scrollPosition = 0;
    
    function openMobileMenu() {
        if (mobileMenu) {
            scrollPosition = window.pageYOffset;
            mobileMenu.classList.add('active');
            if (overlay) overlay.classList.add('active');
            document.body.style.overflow = 'hidden';
            document.body.style.position = 'fixed';
            document.body.style.top = `-${scrollPosition}px`;
            document.body.style.width = '100%';
        }
    }
    
    function closeMobileMenu() {
        return new Promise((resolve) => {
            if (mobileMenu && mobileMenu.classList.contains('active')) {
                mobileMenu.classList.remove('active');
                if (overlay) overlay.classList.remove('active');
                document.body.style.overflow = '';
                document.body.style.position = '';
                document.body.style.top = '';
                document.body.style.width = '';
                window.scrollTo(0, scrollPosition);
                setTimeout(resolve, 300);
            } else {
                resolve();
            }
        });
    }
    
    if (hamburgerBtn) hamburgerBtn.addEventListener('click', openMobileMenu);
    if (closeMenuBtn) closeMenuBtn.addEventListener('click', () => closeMobileMenu());
    if (overlay) overlay.addEventListener('click', () => closeMobileMenu());
    
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && mobileMenu && mobileMenu.classList.contains('active')) closeMobileMenu();
    });
    
    window.addEventListener('resize', () => {
        if (window.innerWidth >= 1024 && mobileMenu && mobileMenu.classList.contains('active')) closeMobileMenu();
    });
    
    if (mobileSearchBtn) {
        mobileSearchBtn.addEventListener('click', () => {
            openMobileMenu();
            setTimeout(() => {
                const searchInput = mobileMenu.querySelector('input[type="text"]');
                if (searchInput) searchInput.focus();
            }, 300);
        });
    }
    
    document.querySelectorAll('.mobile-nav-link').forEach(link => {
        link.addEventListener('click', async (e) => {
            const href = link.getAttribute('href');
            if (!href || href === '#') {
                e.preventDefault();
                return;
            }
            e.preventDefault();
            await closeMobileMenu();
            if (href.startsWith('#')) {
                const targetElement = document.querySelector(href);
                if (targetElement) {
                    const offset = 100;
                    const position = targetElement.getBoundingClientRect().top + window.pageYOffset - offset;
                    window.scrollTo({ top: position, behavior: 'smooth' });
                }
            } else {
                window.location.href = href;
            }
        });
    });
</script>