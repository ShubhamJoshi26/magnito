@extends('layouts.main')


@section('content')

 <!-- Hero Section -->
    <section class="relative pt-32 pb-20 md:pt-40 md:pb-32 overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-br from-primary-50 via-background to-accent-50"></div>
            <div class="absolute inset-0 opacity-30" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%231E3A8A\' fill-opacity=\'0.1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>

        <div class="container-custom relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Hero Content -->
                <div class="animate-fade-in">
                    <div class="inline-flex items-center space-x-2 bg-primary-100 text-primary-800 px-4 py-2 rounded-full mb-6">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-sm font-semibold">Trusted by 15+ Organizations</span>
                    </div>

                    <h1 class="mb-6 animate-slide-up">
                        Technology Partners Who Deliver <span class="text-primary">Tomorrow, Today</span>
                    </h1>

                    <p class="text-xl text-text-secondary mb-8 leading-relaxed animate-slide-up" style="animation-delay: 100ms;">
                        Transform your business with enterprise-grade IT solutions and custom SaaS development. We're not just vendors—we're strategic partners committed to your digital success.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 mb-8 animate-slide-up" style="animation-delay: 200ms;">
                        <a href="javascript:void(0)" class="submitEnquiryForm btn-primary text-lg px-8 py-4">
                            <span>Get Started</span>
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </a>
                        <a href="javascript:void(0)" class="btn-outline text-lg px-8 py-4">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span>Watch Demo</span>
                        </a>
                    </div>

                    <!-- Trust Indicators -->
                    {{-- <div class="flex flex-wrap items-center gap-6 animate-slide-up" style="animation-delay: 300ms;">
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-success" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-sm text-text-secondary">ISO 27001 Certified</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-success" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-sm text-text-secondary">99.9% Uptime SLA</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-success" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-sm text-text-secondary">24/7 Support</span>
                        </div>
                    </div> --}}
                </div>

                <!-- Hero Image -->
                <div class="relative animate-scale-in" style="animation-delay: 400ms;">
                    <div class="relative rounded-2xl overflow-hidden shadow-xl">
                        <img src="{{ asset('assets/img/30758.jpg') }}" 
                             alt="Modern office workspace with team collaborating on technology solutions and digital transformation projects" 
                             class="w-full h-auto object-cover"
                             loading="lazy"
                             onerror="this.src='{{ asset('assets/img/30758.jpg') }}'; this.onerror=null;">
                        <div class="absolute inset-0 gradient-overlay"></div>
                    </div>

                    <!-- Floating Stats Cards -->
                    <div class="absolute -bottom-6 -left-6 bg-surface-elevated rounded-xl shadow-lg p-4 animate-fade-in" style="animation-delay: 600ms;">
                        <div class="flex items-center space-x-3">
                            <div class="w-12 h-12 bg-success-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-success" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-2xl font-bold text-primary">98%</p>
                                <p class="text-xs text-text-secondary">Client Satisfaction</p>
                            </div>
                        </div>
                    </div>

                    <div class="absolute -top-6 -right-6 bg-surface-elevated rounded-xl shadow-lg p-4 animate-fade-in" style="animation-delay: 700ms;">
                        <div class="flex items-center space-x-3">
                            <div class="w-12 h-12 bg-accent-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-2xl font-bold text-primary">5+</p>
                                <p class="text-xs text-text-secondary">Years Experience</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Client Logos Section -->
    <section class="py-12 bg-surface">
        <div class="container-custom">
            <p class="text-center text-text-secondary text-sm font-semibold mb-8 uppercase tracking-wider">Trusted by Industry Leaders</p>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8 items-center">
                <div class="flex items-center justify-center opacity-60 hover:opacity-100 transition-opacity duration-fast">
                    <img src="https://img.rocket.new/generatedImages/rocket_gen_img_12f6fec54-1767002617927.png" 
                         alt="TechCorp Global company logo - enterprise technology partner" 
                         class="h-12 w-auto object-contain grayscale hover:grayscale-0 transition-all duration-fast"
                         loading="lazy"
                         onerror="this.src='https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg?auto=compress&cs=tinysrgb&w=200'; this.onerror=null;">
                </div>
                <div class="flex items-center justify-center opacity-60 hover:opacity-100 transition-opacity duration-fast">
                    <img src="https://img.rocket.new/generatedImages/rocket_gen_img_160b29c88-1768817765273.png" 
                         alt="EduSmart Systems company logo - education technology client" 
                         class="h-12 w-auto object-contain grayscale hover:grayscale-0 transition-all duration-fast"
                         loading="lazy"
                         onerror="this.src='https://images.pixabay.com/photo/2016/11/19/14/00/code-1839406_1280.jpg?auto=compress&cs=tinysrgb&w=200'; this.onerror=null;">
                </div>
                <div class="flex items-center justify-center opacity-60 hover:opacity-100 transition-opacity duration-fast">
                    <img src="https://img.rocket.new/generatedImages/rocket_gen_img_192509685-1768817765577.png" 
                         alt="RetailPro Solutions company logo - e-commerce platform client" 
                         class="h-12 w-auto object-contain grayscale hover:grayscale-0 transition-all duration-fast"
                         loading="lazy"
                         onerror="this.src='https://images.unsplash.com/photo-1551434678-e076c223a692?q=80&w=200'; this.onerror=null;">
                </div>
                <div class="flex items-center justify-center opacity-60 hover:opacity-100 transition-opacity duration-fast">
                    <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1d45e9eee-1768817765892.png" 
                         alt="HealthCare Plus company logo - healthcare management system client" 
                         class="h-12 w-auto object-contain grayscale hover:grayscale-0 transition-all duration-fast"
                         loading="lazy"
                         onerror="this.src='https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg?auto=compress&cs=tinysrgb&w=200'; this.onerror=null;">
                </div>
                <div class="flex items-center justify-center opacity-60 hover:opacity-100 transition-opacity duration-fast">
                    <img src="https://img.rocket.new/generatedImages/rocket_gen_img_15d50c13d-1768817765583.png" 
                         alt="FinanceHub company logo - financial services technology partner" 
                         class="h-12 w-auto object-contain grayscale hover:grayscale-0 transition-all duration-fast"
                         loading="lazy"
                         onerror="this.src='https://images.pixabay.com/photo/2016/11/19/14/00/code-1839406_1280.jpg?auto=compress&cs=tinysrgb&w=200'; this.onerror=null;">
                </div>
                <div class="flex items-center justify-center opacity-60 hover:opacity-100 transition-opacity duration-fast">
                    <img src="https://img.rocket.new/generatedImages/rocket_gen_img_13063632b-1768817765580.png" 
                         alt="LogiTech Enterprises company logo - logistics and supply chain client" 
                         class="h-12 w-auto object-contain grayscale hover:grayscale-0 transition-all duration-fast"
                         loading="lazy"
                         onerror="this.src='https://images.unsplash.com/photo-1551434678-e076c223a692?q=80&w=200'; this.onerror=null;">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Preview Section -->
    <section class="section">
        <div class="container-custom">
            <div class="text-center mb-16">
                <span class="inline-block px-4 py-2 bg-primary-100 text-primary-800 rounded-full text-sm font-semibold mb-4">Our Services</span>
                <h2 class="mb-6">Comprehensive Technology Solutions</h2>
                <p class="text-xl text-text-secondary max-w-3xl mx-auto">From custom development to enterprise SaaS platforms, we deliver scalable solutions that drive business growth and digital transformation.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service Card 1 -->
                <div class="card-interactive p-8 group">
                    <div class="w-16 h-16 bg-primary-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary group-hover:scale-110 transition-all duration-base">
                        <svg class="w-8 h-8 text-primary group-hover:text-white transition-colors duration-base" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl mb-4 group-hover:text-primary transition-colors duration-base">Custom Web Development</h3>
                    <p class="text-text-secondary mb-6 leading-relaxed">Build powerful, scalable web applications tailored to your unique business requirements with modern frameworks and best practices.</p>
                    <a href="{{route('services')}}" class="inline-flex items-center text-primary font-semibold group-hover:gap-2 transition-all duration-fast">
                        <span>Learn More</span>
                        <svg class="w-5 h-5 ml-1 group-hover:translate-x-1 transition-transform duration-fast" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>

                <!-- Service Card 2 -->
                <div class="card-interactive p-8 group">
                    <div class="w-16 h-16 bg-accent-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-accent group-hover:scale-110 transition-all duration-base">
                        <svg class="w-8 h-8 text-accent group-hover:text-white transition-colors duration-base" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl mb-4 group-hover:text-accent transition-colors duration-base">Mobile App Development</h3>
                    <p class="text-text-secondary mb-6 leading-relaxed">Create engaging iOS and Android applications that deliver seamless user experiences across all devices and platforms.</p>
                    <a href="{{route('services')}}" class="inline-flex items-center text-accent font-semibold group-hover:gap-2 transition-all duration-fast">
                        <span>Learn More</span>
                        <svg class="w-5 h-5 ml-1 group-hover:translate-x-1 transition-transform duration-fast" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>

                <!-- Service Card 3 -->
                <div class="card-interactive p-8 group">
                    <div class="w-16 h-16 bg-success-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-success group-hover:scale-110 transition-all duration-base">
                        <svg class="w-8 h-8 text-success group-hover:text-white transition-colors duration-base" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl mb-4 group-hover:text-success transition-colors duration-base">Cloud & DevOps</h3>
                    <p class="text-text-secondary mb-6 leading-relaxed">Optimize your infrastructure with cloud migration, containerization, and automated deployment pipelines for maximum efficiency.</p>
                    <a href="{{route('services')}}" class="inline-flex items-center text-success font-semibold group-hover:gap-2 transition-all duration-fast">
                        <span>Learn More</span>
                        <svg class="w-5 h-5 ml-1 group-hover:translate-x-1 transition-transform duration-fast" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>

                <!-- Service Card 4 -->
                <div class="card-interactive p-8 group">
                    <div class="w-16 h-16 bg-primary-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary group-hover:scale-110 transition-all duration-base">
                        <svg class="w-8 h-8 text-primary group-hover:text-white transition-colors duration-base" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl mb-4 group-hover:text-primary transition-colors duration-base">ERP Development</h3>
                    <p class="text-text-secondary mb-6 leading-relaxed">Streamline your business operations with custom ERP solutions that integrate all departments into one unified system.</p>
                    <a href="{{route('services')}}" class="inline-flex items-center text-primary font-semibold group-hover:gap-2 transition-all duration-fast">
                        <span>Learn More</span>
                        <svg class="w-5 h-5 ml-1 group-hover:translate-x-1 transition-transform duration-fast" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>

                <!-- Service Card 5 -->
                <div class="card-interactive p-8 group">
                    <div class="w-16 h-16 bg-accent-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-accent group-hover:scale-110 transition-all duration-base">
                        <svg class="w-8 h-8 text-accent group-hover:text-white transition-colors duration-base" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl mb-4 group-hover:text-accent transition-colors duration-base">CRM Development</h3>
                    <p class="text-text-secondary mb-6 leading-relaxed">Enhance customer relationships with intelligent CRM systems that track interactions and automate sales processes.</p>
                    <a href="{{route('services')}}" class="inline-flex items-center text-accent font-semibold group-hover:gap-2 transition-all duration-fast">
                        <span>Learn More</span>
                        <svg class="w-5 h-5 ml-1 group-hover:translate-x-1 transition-transform duration-fast" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>

                <!-- Service Card 6 -->
                <div class="card-interactive p-8 group">
                    <div class="w-16 h-16 bg-success-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-success group-hover:scale-110 transition-all duration-base">
                        <svg class="w-8 h-8 text-success group-hover:text-white transition-colors duration-base" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl mb-4 group-hover:text-success transition-colors duration-base">Maintenance & Support</h3>
                    <p class="text-text-secondary mb-6 leading-relaxed">Keep your systems running smoothly with 24/7 monitoring, regular updates, and dedicated technical support teams.</p>
                    <a href="{{route('services')}}" class="inline-flex items-center text-success font-semibold group-hover:gap-2 transition-all duration-fast">
                        <span>Learn More</span>
                        <svg class="w-5 h-5 ml-1 group-hover:translate-x-1 transition-transform duration-fast" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="{{route('services')}}" class="btn-primary text-lg px-8 py-4">
                    <span>View All Services</span>
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Featured Product Section -->
    <section class="section-alt">
        <div class="container-custom">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Product Image -->
                <div class="relative order-2 lg:order-1">
                    <div class="relative rounded-2xl overflow-hidden shadow-xl">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_146254e45-1764672099813.png" 
                             alt="School ERP dashboard interface showing student management, attendance tracking, and academic performance analytics" 
                             class="w-full h-auto object-cover"
                             loading="lazy"
                             onerror="this.src='https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=2940&auto=format&fit=crop'; this.onerror=null;">
                    </div>

                    <!-- Feature Badges -->
                    {{-- <div class="absolute -bottom-4 -left-4 bg-surface-elevated rounded-xl shadow-lg p-4">
                        <div class="flex items-center space-x-3">
                            <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-2xl font-bold text-primary">10K+</p>
                                <p class="text-xs text-text-secondary">Active Users</p>
                            </div>
                        </div>
                    </div> --}}

                    <div class="absolute -top-4 -right-4 bg-surface-elevated rounded-xl shadow-lg p-4">
                        <div class="flex items-center space-x-3">
                            <div class="w-12 h-12 bg-success-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-success" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-2xl font-bold text-success">100%</p>
                                <p class="text-xs text-text-secondary">Data Security</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Content -->
                <div class="order-1 lg:order-2">
                    <span class="inline-block px-4 py-2 bg-accent-100 text-accent-800 rounded-full text-sm font-semibold mb-4">Flagship Product</span>
                    <h2 class="mb-6">School ERP System</h2>
                    <p class="text-xl text-text-secondary mb-8 leading-relaxed">
                        Transform educational administration with our comprehensive School ERP solution. Manage students, staff, academics, and operations from a single, intuitive platform.
                    </p>

                    <!-- Key Features -->
                    <div class="space-y-4 mb-8">
                        <div class="flex items-start space-x-3">
                            <div class="w-6 h-6 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <svg class="w-4 h-4 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-text-primary mb-1">Complete Student Management</h4>
                                <p class="text-text-secondary">Track admissions, attendance, grades, and student progress in real-time.</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-3">
                            <div class="w-6 h-6 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <svg class="w-4 h-4 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-text-primary mb-1">Financial Management</h4>
                                <p class="text-text-secondary">Automated fee collection, expense tracking, and comprehensive financial reporting.</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-3">
                            <div class="w-6 h-6 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <svg class="w-4 h-4 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-text-primary mb-1">Parent Communication Portal</h4>
                                <p class="text-text-secondary">Keep parents informed with instant notifications and progress updates.</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{route('erp')}}" class="btn-primary">
                            <span>Explore School ERP</span>
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </a>
                        <a href="javascript:void(0)" class="btn-outline">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                            </svg>
                            <span>Request Demo</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="section bg-primary text-white relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23FFFFFF\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>

        <div class="container-custom relative z-10">
            <div class="text-center mb-16">
                <h2 class="mb-6 text-white">Proven Track Record of Excellence</h2>
                <p class="text-xl text-primary-100 max-w-3xl mx-auto">Numbers that speak to our commitment to delivering exceptional technology solutions and building lasting partnerships.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-5xl md:text-6xl font-bold mb-2">20+</div>
                    <p class="text-lg text-primary-100">Projects Delivered</p>
                </div>
                <div class="text-center">
                    <div class="text-5xl md:text-6xl font-bold mb-2">98%</div>
                    <p class="text-lg text-primary-100">Client Satisfaction</p>
                </div>
                <div class="text-center">
                    <div class="text-5xl md:text-6xl font-bold mb-2">5+</div>
                    <p class="text-lg text-primary-100">Years Experience</p>
                </div>
                <div class="text-center">
                    <div class="text-5xl md:text-6xl font-bold mb-2">24/7</div>
                    <p class="text-lg text-primary-100">Support Available</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="section">
        <div class="container-custom">
            <div class="text-center mb-16">
                <span class="inline-block px-4 py-2 bg-success-100 text-success-800 rounded-full text-sm font-semibold mb-4">Client Success Stories</span>
                <h2 class="mb-6">What Our Partners Say</h2>
                <p class="text-xl text-text-secondary max-w-3xl mx-auto">Real feedback from organizations we've helped transform through technology.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="card p-8">
                    <div class="flex items-center mb-4">
                        <svg class="w-5 h-5 text-warning" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-warning" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-warning" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-warning" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-warning" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    <p class="text-text-secondary mb-6 leading-relaxed">"TechSolutions Pro transformed our school administration completely. The ERP system is intuitive, powerful, and has saved us countless hours. Their support team is exceptional."</p>
                    <div class="flex items-center">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1fe637bbd-1763297817448.png" 
                             alt="Sarah Johnson, Principal at Greenwood Academy - satisfied client testimonial" 
                             class="w-12 h-12 rounded-full object-cover mr-4"
                             loading="lazy"
                             onerror="this.src='https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=200&auto=format&fit=crop'; this.onerror=null;">
                        <div>
                            <p class="font-semibold text-text-primary">Sarah Johnson</p>
                            <p class="text-sm text-text-secondary">Principal, Greenwood Academy</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="card p-8">
                    <div class="flex items-center mb-4">
                        <svg class="w-5 h-5 text-warning" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-warning" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-warning" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-warning" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-warning" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    <p class="text-text-secondary mb-6 leading-relaxed">"Working with TechSolutions Pro was a game-changer for our e-commerce platform. They delivered a scalable solution that handles our growing customer base effortlessly."</p>
                    <div class="flex items-center">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_13c7bbd1e-1763295865601.png" 
                             alt="Michael Chen, CTO at RetailHub - technology partner testimonial" 
                             class="w-12 h-12 rounded-full object-cover mr-4"
                             loading="lazy"
                             onerror="this.src='https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=200&auto=format&fit=crop'; this.onerror=null;">
                        <div>
                            <p class="font-semibold text-text-primary">Michael Chen</p>
                            <p class="text-sm text-text-secondary">CTO, RetailHub</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="card p-8">
                    <div class="flex items-center mb-4">
                        <svg class="w-5 h-5 text-warning" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-warning" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-warning" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-warning" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-warning" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    <p class="text-text-secondary mb-6 leading-relaxed">"The custom CRM solution has revolutionized how we manage customer relationships. TechSolutions Pro understood our needs perfectly and delivered beyond expectations."</p>
                    <div class="flex items-center">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_11476eff6-1763300910458.png" 
                             alt="Emily Rodriguez, Sales Director at GlobalTech - enterprise client testimonial" 
                             class="w-12 h-12 rounded-full object-cover mr-4"
                             loading="lazy"
                             onerror="this.src='https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=200&auto=format&fit=crop'; this.onerror=null;">
                        <div>
                            <p class="font-semibold text-text-primary">Emily Rodriguez</p>
                            <p class="text-sm text-text-secondary">Sales Director, GlobalTech</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section bg-gradient-to-br from-primary-900 via-primary-800 to-accent-700 text-white relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23FFFFFF\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>

        <div class="container-custom relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="mb-6 text-white">Ready to Transform Your Business?</h2>
                <p class="text-xl text-primary-100 mb-8 leading-relaxed">
                    Let's discuss how our technology solutions can help you achieve your digital transformation goals. Get a free consultation with our experts today.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center mb-12">
                    <a href="javascript:void(0)" class="btn bg-white text-primary hover:bg-primary-50 focus:ring-white text-lg px-8 py-4">
                        <span>Get a Free Quote</span>
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>
                    <a href="javascript:void(0)" class="btn border-2 border-white text-white hover:bg-white hover:text-primary focus:ring-white text-lg px-8 py-4">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <span>Schedule a Call</span>
                    </a>
                </div>

                <!-- Contact Info -->
                <div class="flex flex-wrap justify-center gap-8 text-primary-100">
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <span>info@magnitotechnologies.com</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <span>+917982209735</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')
    <script>
        $('.submitEnquiryForm').on('click',function(e){
            $.ajax({
                url:"web/enquiry-form",
                type:"get",
                success:function(res){
                    $('#modal-main-body').html(res);
                    $('#modal-main')[0].showModal();
                }
            })
        });
    </script>
@endsection