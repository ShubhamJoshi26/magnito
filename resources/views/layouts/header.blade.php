
<!-- Navigation Header -->
<header
    class="fixed top-0 left-0 right-0 z-100 bg-surface-elevated/95 backdrop-blur-custom border-b border-border shadow-sm">
    <nav class="container-custom">
        <div class="flex items-center justify-between h-20">
            <!-- Logo -->
            <a href="/">
                <img src="{{ asset('assets/img/Rectangle_logo.png') }}" alt="Logo" class="h-10 w-auto">
            </a>


            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center space-x-8">
                <a href="/" class="text-primary font-semibold border-b-2 border-primary pb-1">Home</a>
                <a href="{{ route('services') }}"
                    class="text-text-secondary hover:text-primary transition-colors duration-fast">Services</a>
                <a href="{{ route('erp') }}"
                    class="text-text-secondary hover:text-primary transition-colors duration-fast">School ERP</a>
                <a href="javascript:void(0)"
                    class="text-text-secondary hover:text-primary transition-colors duration-fast">Portfolio</a>
                <a href="javascript:void(0)"
                    class="text-text-secondary hover:text-primary transition-colors duration-fast">About</a>
                <a href="javascript:void(0)"
                    class="text-text-secondary hover:text-primary transition-colors duration-fast">Contact</a>
            </div>

            <!-- CTA Buttons -->
            <div class="hidden lg:flex items-center space-x-4">
                <a href="https://crm.magnitotechnologies.com" class="btn-ghost text-sm">Sign In</a>
                <a href="javascript:void(0)" class="btn-primary text-sm">Get a Quote</a>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn"
                class="lg:hidden p-2 text-text-primary hover:bg-surface rounded-lg transition-colors duration-fast"
                aria-label="Toggle mobile menu">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden lg:hidden pb-6 pt-4 border-t border-border mt-4">
            <div class="flex flex-col space-y-4">
                <a href="/" class="text-primary font-semibold px-4 py-2 bg-primary-50 rounded-lg">Home</a>
                <a href="{{ route('services') }}"
                    class="text-text-secondary hover:text-primary px-4 py-2 hover:bg-surface rounded-lg transition-colors duration-fast">Services</a>
                <a href="{{ route('erp') }}"
                    class="text-text-secondary hover:text-primary px-4 py-2 hover:bg-surface rounded-lg transition-colors duration-fast">School
                    ERP</a>
                <a href="javascript:void(0)"
                    class="text-text-secondary hover:text-primary px-4 py-2 hover:bg-surface rounded-lg transition-colors duration-fast">Portfolio</a>
                <a href="javascript:void(0)"
                    class="text-text-secondary hover:text-primary px-4 py-2 hover:bg-surface rounded-lg transition-colors duration-fast">About</a>
                <a href="javascript:void(0)"
                    class="text-text-secondary hover:text-primary px-4 py-2 hover:bg-surface rounded-lg transition-colors duration-fast">Contact</a>
                <div class="flex flex-col space-y-2 pt-4 border-t border-border">
                    <a href="javascript:void(0)" class="btn-ghost w-full justify-center">Sign In</a>
                    <a href="javascript:void(0)" class="btn-primary w-full justify-center">Get a Quote</a>
                </div>
            </div>
        </div>
    </nav>
</header>