<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title ?? 'Company Profile - Nava' }}</title>

        <link rel="icon" href="/logo.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/logo.png">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

        <!-- FlatIcon -->
        <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/2.1.0/uicons-thin-rounded/css/uicons-thin-rounded.css">
        <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/2.1.0/uicons-thin-straight/css/uicons-thin-straight.css">
        <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/2.1.0/uicons-regular-rounded/css/uicons-regular-rounded.css">
        <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/2.1.0/uicons-solid-rounded/css/uicons-solid-rounded.css">
        <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/2.1.0/uicons-brands/css/uicons-brands.css">

        <!-- AOS (Animate On Scroll) -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] antialiased">
        @include('partials.navigation')

        {{ $slot }}

        @include('partials.footer')

        <!-- Back to Top Button -->
        <button
            id="backToTop"
            class="fixed bottom-8 right-8 z-50 w-12 h-12 bg-[#1b1b18] dark:bg-[#eeeeec] text-white dark:text-[#1C1C1A] rounded-full shadow-lg hover:shadow-xl hover:scale-110 active:scale-95 transition-all duration-300 opacity-0 invisible flex items-center justify-center border-2 border-transparent hover:border-[#1b1b18]/20 dark:hover:border-white/20 focus:outline-none focus:ring-4 focus:ring-[#1b1b18]/20 dark:focus:ring-white/20"
            aria-label="Back to top"
        >
            <i class="fi fi-rr-arrow-up text-xl"></i>
        </button>

        <!-- AOS Script -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init({
                duration: 800,
                easing: 'ease-in-out',
                once: true,
                offset: 100,
                delay: 0,
            });

            // Back to Top Button
            const backToTopButton = document.getElementById('backToTop');
            
            // Show/hide button based on scroll position
            window.addEventListener('scroll', function() {
                if (window.pageYOffset > 300) {
                    backToTopButton.classList.remove('opacity-0', 'invisible');
                    backToTopButton.classList.add('opacity-100', 'visible');
                } else {
                    backToTopButton.classList.add('opacity-0', 'invisible');
                    backToTopButton.classList.remove('opacity-100', 'visible');
                }
            });

            // Smooth scroll to top
            backToTopButton.addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });

            // Seamless Tech Stack Animation
            (function() {
                const scrollContainer = document.querySelector('.animate-scroll');
                if (!scrollContainer) return;

                let position = 0;
                let isPaused = false;
                const speed = 0.5; // pixels per frame
                
                // Wait for DOM to be fully loaded
                setTimeout(() => {
                    const firstSet = scrollContainer.querySelector('.min-w-max');
                    if (!firstSet) return;
                    
                    const itemWidth = firstSet.offsetWidth;
                    const resetPoint = itemWidth; // Reset after completing first set

                    function animate() {
                        if (!isPaused) {
                            position += speed;
                            
                            // Reset position seamlessly when first set is complete
                            // Since we have 3 identical sets, resetting at first set width is seamless
                            if (position >= resetPoint) {
                                position = 0;
                            }
                            
                            scrollContainer.style.transform = `translate3d(-${position}px, 0, 0)`;
                        }
                        
                        requestAnimationFrame(animate);
                    }

                    // Pause on hover
                    scrollContainer.addEventListener('mouseenter', () => {
                        isPaused = true;
                    });

                    scrollContainer.addEventListener('mouseleave', () => {
                        isPaused = false;
                    });

                    // Start animation
                    animate();
                }, 100);
            })();

            // Function to set equal height for all tab contents
            function setEqualTabHeights() {
                const container = document.getElementById('tab-content-container');
                if (!container) return;

                const tabContents = document.querySelectorAll('.tab-content');
                if (tabContents.length === 0) return;

                let maxHeight = 0;
                
                // Temporarily show all tabs to measure their heights
                tabContents.forEach(content => {
                    const wasHidden = content.classList.contains('hidden');
                    const originalPosition = content.style.position;
                    const originalVisibility = content.style.visibility;
                    const originalOpacity = content.style.opacity;
                    
                    // Make visible for measurement
                    content.classList.remove('hidden');
                    content.style.position = 'relative';
                    content.style.visibility = 'visible';
                    content.style.opacity = '1';
                    
                    // Force reflow
                    void content.offsetHeight;
                    
                    const height = content.scrollHeight;
                    if (height > maxHeight) {
                        maxHeight = height;
                    }
                    
                    // Restore original state
                    if (wasHidden) {
                        content.classList.add('hidden');
                    }
                    content.style.position = 'absolute';
                    content.style.visibility = '';
                    content.style.opacity = '';
                });

                // Apply max height to container
                if (maxHeight > 0) {
                    container.style.minHeight = maxHeight + 'px';
                }
            }

            // Tab Switching Function
            function switchTab(tabName) {
                // Hide all tab contents
                document.querySelectorAll('.tab-content').forEach(content => {
                    content.classList.add('hidden');
                });

                // Remove active state from all tabs
                document.querySelectorAll('.tab-button').forEach(button => {
                    button.classList.remove('text-[#1b1b18]', 'dark:text-[#EDEDEC]', 'border-[#1b1b18]', 'dark:border-white');
                    button.classList.add('text-[#706f6c]', 'dark:text-[#A1A09A]', 'border-transparent');
                });

                // Show selected tab content
                const content = document.getElementById(`content-${tabName}`);
                if (content) {
                    content.classList.remove('hidden');
                }

                // Add active state to selected tab
                const tabButton = document.getElementById(`tab-${tabName}`);
                if (tabButton) {
                    tabButton.classList.remove('text-[#706f6c]', 'dark:text-[#A1A09A]', 'border-transparent');
                    tabButton.classList.add('text-[#1b1b18]', 'dark:text-[#EDEDEC]', 'border-[#1b1b18]', 'dark:border-white');
                }
            }

            // Set equal heights on page load and window resize
            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', () => {
                    setTimeout(setEqualTabHeights, 200);
                });
            } else {
                setTimeout(setEqualTabHeights, 200);
            }
            
            window.addEventListener('resize', () => {
                setEqualTabHeights();
            });

            // Portfolio Carousel
            (function() {
                const carousel = document.getElementById('portfolio-carousel');
                const indicators = document.querySelectorAll('.portfolio-indicator');
                
                if (!carousel) return;

                let currentSlide = 0;
                const totalSlides = document.querySelectorAll('.portfolio-slide').length;

                function updateCarousel() {
                    carousel.style.transform = `translateX(-${currentSlide * 100}%)`;
                    
                    // Update indicators
                    indicators.forEach((indicator, index) => {
                        if (index === currentSlide) {
                            indicator.classList.remove('bg-[#706f6c]', 'dark:bg-[#A1A09A]');
                            indicator.classList.add('bg-[#1b1b18]', 'dark:bg-[#EDEDEC]');
                            indicator.style.width = '3rem';
                        } else {
                            indicator.classList.remove('bg-[#1b1b18]', 'dark:bg-[#EDEDEC]');
                            indicator.classList.add('bg-[#706f6c]', 'dark:bg-[#A1A09A]');
                            indicator.style.width = '1.5rem';
                        }
                    });
                }

                function nextSlide() {
                    currentSlide = (currentSlide + 1) % totalSlides;
                    updateCarousel();
                }

                function goToSlide(index) {
                    currentSlide = index;
                    updateCarousel();
                }

                // Event listeners
                indicators.forEach((indicator, index) => {
                    indicator.addEventListener('click', () => goToSlide(index));
                });

                // Auto-play
                let autoPlayInterval = setInterval(nextSlide, 5000);
                
                const carouselContainer = carousel.closest('.relative');
                if (carouselContainer) {
                    carouselContainer.addEventListener('mouseenter', () => {
                        clearInterval(autoPlayInterval);
                    });
                    
                    carouselContainer.addEventListener('mouseleave', () => {
                        autoPlayInterval = setInterval(nextSlide, 5000);
                    });
                }

                // Touch/swipe support
                let startX = 0;
                let isDragging = false;

                carousel.addEventListener('touchstart', (e) => {
                    startX = e.touches[0].clientX;
                    isDragging = true;
                    clearInterval(autoPlayInterval);
                });

                carousel.addEventListener('touchmove', (e) => {
                    if (!isDragging) return;
                    e.preventDefault();
                });

                carousel.addEventListener('touchend', (e) => {
                    if (!isDragging) return;
                    isDragging = false;
                    const endX = e.changedTouches[0].clientX;
                    const diff = startX - endX;

                    if (Math.abs(diff) > 50) {
                        if (diff > 0) {
                            nextSlide();
                        } else {
                            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
                            updateCarousel();
                        }
                    }
                    
                    // Resume auto-play after swipe
                    autoPlayInterval = setInterval(nextSlide, 5000);
                });

                // Initialize
                updateCarousel();
            })();
        </script>
    </body>
</html>

