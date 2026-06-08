<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'St John of God University')</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    @stack('styles')

    <style>
        html {
            scroll-behavior: smooth;
        }

        /* Overlay */
        .overlay {
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,0.5);
            z-index: 40;
            display: none;
        }
        .overlay.active {
            display: block;
        }

        /* Mobile Menu */
        .mobile-menu {
            position: fixed;
            top: 0;
            right: -100%;
            width: 85%;
            max-width: 350px;
            height: 100vh;
            background: white;
            z-index: 50;
            transition: right 0.3s ease;
        }
        .mobile-menu.active {
            right: 0;
        }

        /* Important for sticky offset */
        section {
            scroll-margin-top: 90px;
        }
    </style>
</head>

<body class="bg-gray-100">

    <!-- Loading -->
    @include('partials.loading')

    <!-- Overlay -->
    <div class="overlay" id="overlay"></div>

    <!-- ✅ NAVBAR (works with sticky now) -->
    @include('partials.navbar')

    <!-- ✅ MAIN CONTENT -->
    <main>
        @yield('content')
        @include('partials.chatbot')
    </main>

    <!-- Footer -->
    @include('partials.footer')

    <!-- Scripts -->
    <script>
        const hamburgerBtn = document.getElementById('hamburgerBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        const overlay = document.getElementById('overlay');
        const closeMenu = document.getElementById('closeMenu');

        function openMenu() {
            if (mobileMenu) mobileMenu.classList.add('active');
            if (overlay) overlay.classList.add('active');

            // ✅ FIX: do NOT use position fixed on body
            document.body.classList.add('overflow-hidden');
        }

        function closeMenuFunc() {
            if (mobileMenu) mobileMenu.classList.remove('active');
            if (overlay) overlay.classList.remove('active');

            document.body.classList.remove('overflow-hidden');
        }

        if (hamburgerBtn) hamburgerBtn.addEventListener('click', openMenu);
        if (closeMenu) closeMenu.addEventListener('click', closeMenuFunc);
        if (overlay) overlay.addEventListener('click', closeMenuFunc);
    </script>
    <script>
    // Counter Animation Function
    function animateCounter(element, target, duration = 2000) {
        let start = 0;
        const increment = target / (duration / 16); // 60fps
        let current = start;
        
        const updateCounter = () => {
            current += increment;
            if (current < target) {
                element.textContent = Math.floor(current);
                requestAnimationFrame(updateCounter);
            } else {
                element.textContent = target;
            }
        };
        
        updateCounter();
    }
    
    // Intersection Observer to trigger counter when section is visible
    const counterSection = document.querySelector('.bg-fixed');
    const counters = document.querySelectorAll('.counter');
    let animated = false;
    
    if (counterSection && counters.length > 0) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !animated) {
                    animated = true;
                    counters.forEach(counter => {
                        const target = parseInt(counter.getAttribute('data-target'));
                        animateCounter(counter, target);
                    });
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.3 }); // Trigger when 30% of section is visible
        
        observer.observe(counterSection);
    }
</script>

    @stack('scripts')

</body>
</html>