<!-- Footer -->
<footer class="mt-0 border-t border-[#3E3E3A] bg-[#000000]">
    <div class="container mx-auto px-6 lg:px-8 max-w-7xl">
        <div class="pt-12 pb-12 grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Company Info -->
            <div data-aos="fade-up" data-aos-delay="100">
                <div class="mb-4 h-8 flex items-center">
                    <img
                        src="/logo-long-white.png"
                        alt="Nava Logo"
                        class="h-8"
                    >
                </div>
                <p class="text-sm text-gray-400 max-w-md">
                    We are a company committed to providing the best solutions with cutting-edge technology and high-quality services.
                </p>
            </div>

            <!-- Quick Links -->
            <div data-aos="fade-up" data-aos-delay="200">
                <h4 class="text-sm font-semibold mb-4 h-8 flex items-center text-white uppercase tracking-wide">Quick Links</h4>
                <ul class="space-y-3">
                    <li>
                        <a href="<?php echo e(route('home')); ?>" class="text-sm text-gray-400 hover:text-white transition-colors">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('contact.index')); ?>" class="text-sm text-gray-400 hover:text-white transition-colors">Contact</a>
                    </li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div data-aos="fade-up" data-aos-delay="300">
                <h4 class="text-sm font-semibold mb-4 h-8 flex items-center text-white uppercase tracking-wide">Contact</h4>
                <ul class="space-y-3 text-sm text-gray-400">
                    <li class="flex items-start gap-2">
                        <i class="fi fi-rr-envelope mt-0.5"></i>
                        <a href="mailto:navadigital931@gmail.com" class="hover:text-white transition-colors">navadigital931@gmail.com</a>
                    </li>
                    <li class="flex items-start gap-2">
                        <i class="fi fi-rr-phone-call mt-0.5"></i>
                        <a href="tel:+6287883611530" class="hover:text-white transition-colors">+62 878-8361-1530</a>
                    </li>
                    <li class="flex items-start gap-2">
                        <i class="fi fi-rr-marker mt-0.5"></i>
                        <a href="https://www.google.com/maps/search/Ponorogo,+Jawa+Timur" target="_blank" rel="noopener noreferrer" class="hover:text-white transition-colors">Ponorogo, Jawa Timur</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="py-6 border-t border-gray-800">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-sm text-gray-400">
                    &copy; <?php echo e(date('Y')); ?> Nava. All rights reserved.
                </p>
                <div class="flex gap-6 text-sm">
                    <a href="<?php echo e(route('terms')); ?>" class="text-gray-400 hover:text-white transition-colors">Terms of Service</a>
                    <a href="<?php echo e(route('privacy')); ?>" class="text-gray-400 hover:text-white transition-colors">Privacy Policy</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php /**PATH C:\Users\anarp\Herd\nava\resources\views/partials/footer.blade.php ENDPATH**/ ?>