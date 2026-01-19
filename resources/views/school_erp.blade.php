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
                    <div class="inline-flex items-center space-x-2 bg-success-100 text-success-800 px-4 py-2 rounded-full mb-6">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <span class="text-sm font-semibold">Trusted by 200+ Educational Institutions</span>
                    </div>

                    <h1 class="mb-6 animate-slide-up">
                        Transform Your School with <span class="text-primary">Complete ERP Solution</span>
                    </h1>

                    <p class="text-xl text-text-secondary mb-8 leading-relaxed animate-slide-up" style="animation-delay: 100ms;">
                        Streamline every aspect of school administration—from admissions to academics, fee management to parent communication—all in one powerful, intuitive platform designed specifically for educational institutions.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 mb-8 animate-slide-up" style="animation-delay: 200ms;">
                        <a href="javascript:void(0)" class="btn-primary text-lg px-8 py-4">
                            <span>Schedule Live Demo</span>
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </a>
                        <a href="javascript:void(0)" class="btn-outline text-lg px-8 py-4">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                            </svg>
                            <span>Explore Features</span>
                        </a>
                    </div>

                    <!-- Trust Indicators -->
                    <div class="flex flex-wrap items-center gap-6 animate-slide-up" style="animation-delay: 300ms;">
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-success" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-sm text-text-secondary">Cloud-Based & Secure</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-success" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-sm text-text-secondary">Mobile App Included</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-success" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-sm text-text-secondary">Free Training & Support</span>
                        </div>
                    </div>
                </div>

                <!-- Hero Image -->
                <div class="relative animate-scale-in" style="animation-delay: 400ms;">
                    <div class="relative rounded-2xl overflow-hidden shadow-xl">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_143cd0768-1766912523289.png" 
                             alt="School ERP dashboard interface showing student management system with attendance tracking, grade management, and real-time analytics for educational administrators" 
                             class="w-full h-auto object-cover"
                             loading="lazy"
                             onerror="this.src='https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=2940&auto=format&fit=crop'; this.onerror=null;">
                        <div class="absolute inset-0 gradient-overlay"></div>
                    </div>

                    <!-- Floating Stats Cards -->
                    <div class="absolute -bottom-6 -left-6 bg-surface-elevated rounded-xl shadow-lg p-4 animate-fade-in" style="animation-delay: 600ms;">
                        <div class="flex items-center space-x-3">
                            <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-2xl font-bold text-primary">50K+</p>
                                <p class="text-xs text-text-secondary">Students Managed</p>
                            </div>
                        </div>
                    </div>

                    <div class="absolute -top-6 -right-6 bg-surface-elevated rounded-xl shadow-lg p-4 animate-fade-in" style="animation-delay: 700ms;">
                        <div class="flex items-center space-x-3">
                            <div class="w-12 h-12 bg-success-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-success" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-2xl font-bold text-success">99.9%</p>
                                <p class="text-xs text-text-secondary">Uptime Guarantee</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Benefits Section -->
    <section class="section bg-surface">
        <div class="container-custom">
            <div class="text-center mb-16">
                <span class="inline-block px-4 py-2 bg-accent-100 text-accent-800 rounded-full text-sm font-semibold mb-4">Why Choose Our School ERP</span>
                <h2 class="mb-6">Comprehensive Solution for Modern Education</h2>
                <p class="text-xl text-text-secondary max-w-3xl mx-auto">Everything you need to manage your educational institution efficiently, all in one integrated platform.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Benefit 1 -->
                <div class="card p-8 text-center group hover:shadow-lg transition-all duration-base">
                    <div class="w-16 h-16 bg-primary-100 rounded-xl flex items-center justify-center mx-auto mb-6 group-hover:bg-primary group-hover:scale-110 transition-all duration-base">
                        <svg class="w-8 h-8 text-primary group-hover:text-white transition-colors duration-base" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl mb-4">Save 15+ Hours Weekly</h3>
                    <p class="text-text-secondary leading-relaxed">Automate repetitive administrative tasks and focus on what matters most—quality education and student development.</p>
                </div>

                <!-- Benefit 2 -->
                <div class="card p-8 text-center group hover:shadow-lg transition-all duration-base">
                    <div class="w-16 h-16 bg-accent-100 rounded-xl flex items-center justify-center mx-auto mb-6 group-hover:bg-accent group-hover:scale-110 transition-all duration-base">
                        <svg class="w-8 h-8 text-accent group-hover:text-white transition-colors duration-base" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl mb-4">Bank-Level Security</h3>
                    <p class="text-text-secondary leading-relaxed">Enterprise-grade encryption and security protocols protect sensitive student and institutional data 24/7.</p>
                </div>

                <!-- Benefit 3 -->
                <div class="card p-8 text-center group hover:shadow-lg transition-all duration-base">
                    <div class="w-16 h-16 bg-success-100 rounded-xl flex items-center justify-center mx-auto mb-6 group-hover:bg-success group-hover:scale-110 transition-all duration-base">
                        <svg class="w-8 h-8 text-success group-hover:text-white transition-colors duration-base" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl mb-4">Mobile-First Design</h3>
                    <p class="text-text-secondary leading-relaxed">Access from anywhere with dedicated mobile apps for administrators, teachers, students, and parents.</p>
                </div>

                <!-- Benefit 4 -->
                <div class="card p-8 text-center group hover:shadow-lg transition-all duration-base">
                    <div class="w-16 h-16 bg-primary-100 rounded-xl flex items-center justify-center mx-auto mb-6 group-hover:bg-primary group-hover:scale-110 transition-all duration-base">
                        <svg class="w-8 h-8 text-primary group-hover:text-white transition-colors duration-base" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl mb-4">Enhanced Communication</h3>
                    <p class="text-text-secondary leading-relaxed">Real-time notifications, messaging, and updates keep parents, teachers, and students connected.</p>
                </div>

                <!-- Benefit 5 -->
                <div class="card p-8 text-center group hover:shadow-lg transition-all duration-base">
                    <div class="w-16 h-16 bg-accent-100 rounded-xl flex items-center justify-center mx-auto mb-6 group-hover:bg-accent group-hover:scale-110 transition-all duration-base">
                        <svg class="w-8 h-8 text-accent group-hover:text-white transition-colors duration-base" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl mb-4">Data-Driven Insights</h3>
                    <p class="text-text-secondary leading-relaxed">Powerful analytics and reporting tools help make informed decisions for institutional growth.</p>
                </div>

                <!-- Benefit 6 -->
                <div class="card p-8 text-center group hover:shadow-lg transition-all duration-base">
                    <div class="w-16 h-16 bg-success-100 rounded-xl flex items-center justify-center mx-auto mb-6 group-hover:bg-success group-hover:scale-110 transition-all duration-base">
                        <svg class="w-8 h-8 text-success group-hover:text-white transition-colors duration-base" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl mb-4">Quick Implementation</h3>
                    <p class="text-text-secondary leading-relaxed">Get up and running in just 2-4 weeks with our proven implementation process and dedicated support team.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Modules Section -->
    <section class="section">
        <div class="container-custom">
            <div class="text-center mb-16">
                <span class="inline-block px-4 py-2 bg-primary-100 text-primary-800 rounded-full text-sm font-semibold mb-4">Complete Feature Set</span>
                <h2 class="mb-6">Powerful Modules for Every Need</h2>
                <p class="text-xl text-text-secondary max-w-3xl mx-auto">Comprehensive modules designed to handle every aspect of school administration with precision and ease.</p>
            </div>

            <!-- Module Explorer -->
            <div class="grid lg:grid-cols-2 gap-8 mb-12">
                <!-- Module Card 1 -->
                <div class="card-interactive p-8">
                    <div class="flex items-start space-x-4 mb-6">
                        <div class="w-14 h-14 bg-primary-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-7 h-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-2xl mb-3">Student Information System</h3>
                            <p class="text-text-secondary mb-4 leading-relaxed">Complete student lifecycle management from admission to alumni tracking with detailed profiles and academic history.</p>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 gap-3">
                        <div class="flex items-center space-x-2 text-sm text-text-secondary">
                            <svg class="w-4 h-4 text-success flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span>Online Admissions</span>
                        </div>
                        <div class="flex items-center space-x-2 text-sm text-text-secondary">
                            <svg class="w-4 h-4 text-success flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span>Student Profiles</span>
                        </div>
                        <div class="flex items-center space-x-2 text-sm text-text-secondary">
                            <svg class="w-4 h-4 text-success flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span>Document Management</span>
                        </div>
                        <div class="flex items-center space-x-2 text-sm text-text-secondary">
                            <svg class="w-4 h-4 text-success flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span>ID Card Generation</span>
                        </div>
                    </div>
                </div>

                <!-- Module Card 2 -->
                <div class="card-interactive p-8">
                    <div class="flex items-start space-x-4 mb-6">
                        <div class="w-14 h-14 bg-accent-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-7 h-7 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-2xl mb-3">Attendance Management</h3>
                            <p class="text-text-secondary mb-4 leading-relaxed">Real-time attendance tracking with biometric integration, automated notifications, and comprehensive reporting.</p>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 gap-3">
                        <div class="flex items-center space-x-2 text-sm text-text-secondary">
                            <svg class="w-4 h-4 text-success flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span>Biometric Integration</span>
                        </div>
                        <div class="flex items-center space-x-2 text-sm text-text-secondary">
                            <svg class="w-4 h-4 text-success flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span>SMS Notifications</span>
                        </div>
                        <div class="flex items-center space-x-2 text-sm text-text-secondary">
                            <svg class="w-4 h-4 text-success flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span>Leave Management</span>
                        </div>
                        <div class="flex items-center space-x-2 text-sm text-text-secondary">
                            <svg class="w-4 h-4 text-success flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span>Attendance Reports</span>
                        </div>
                    </div>
                </div>

                <!-- Module Card 3 -->
                <div class="card-interactive p-8">
                    <div class="flex items-start space-x-4 mb-6">
                        <div class="w-14 h-14 bg-success-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-7 h-7 text-success" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-2xl mb-3">Academic Management</h3>
                            <p class="text-text-secondary mb-4 leading-relaxed">Complete academic operations including timetables, examinations, grading, and report card generation.</p>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 gap-3">
                        <div class="flex items-center space-x-2 text-sm text-text-secondary">
                            <svg class="w-4 h-4 text-success flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span>Timetable Management</span>
                        </div>
                        <div class="flex items-center space-x-2 text-sm text-text-secondary">
                            <svg class="w-4 h-4 text-success flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span>Exam Scheduling</span>
                        </div>
                        <div class="flex items-center space-x-2 text-sm text-text-secondary">
                            <svg class="w-4 h-4 text-success flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span>Grade Management</span>
                        </div>
                        <div class="flex items-center space-x-2 text-sm text-text-secondary">
                            <svg class="w-4 h-4 text-success flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span>Report Cards</span>
                        </div>
                    </div>
                </div>

                <!-- Module Card 4 -->
                <div class="card-interactive p-8">
                    <div class="flex items-start space-x-4 mb-6">
                        <div class="w-14 h-14 bg-primary-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-7 h-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-2xl mb-3">Fee Management</h3>
                            <p class="text-text-secondary mb-4 leading-relaxed">Automated fee collection, online payment integration, receipt generation, and financial reporting.</p>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 gap-3">
                        <div class="flex items-center space-x-2 text-sm text-text-secondary">
                            <svg class="w-4 h-4 text-success flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span>Online Payments</span>
                        </div>
                        <div class="flex items-center space-x-2 text-sm text-text-secondary">
                            <svg class="w-4 h-4 text-success flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span>Fee Reminders</span>
                        </div>
                        <div class="flex items-center space-x-2 text-sm text-text-secondary">
                            <svg class="w-4 h-4 text-success flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span>Receipt Generation</span>
                        </div>
                        <div class="flex items-center space-x-2 text-sm text-text-secondary">
                            <svg class="w-4 h-4 text-success flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span>Financial Reports</span>
                        </div>
                    </div>
                </div>

                <!-- Module Card 5 -->
                <div class="card-interactive p-8">
                    <div class="flex items-start space-x-4 mb-6">
                        <div class="w-14 h-14 bg-accent-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-7 h-7 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-2xl mb-3">Parent Communication</h3>
                            <p class="text-text-secondary mb-4 leading-relaxed">Dedicated parent portal with real-time updates, messaging, and comprehensive visibility into student progress.</p>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 gap-3">
                        <div class="flex items-center space-x-2 text-sm text-text-secondary">
                            <svg class="w-4 h-4 text-success flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span>Parent Portal</span>
                        </div>
                        <div class="flex items-center space-x-2 text-sm text-text-secondary">
                            <svg class="w-4 h-4 text-success flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span>SMS & Email Alerts</span>
                        </div>
                        <div class="flex items-center space-x-2 text-sm text-text-secondary">
                            <svg class="w-4 h-4 text-success flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span>Progress Updates</span>
                        </div>
                        <div class="flex items-center space-x-2 text-sm text-text-secondary">
                            <svg class="w-4 h-4 text-success flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span>Event Notifications</span>
                        </div>
                    </div>
                </div>

                <!-- Module Card 6 -->
                <div class="card-interactive p-8">
                    <div class="flex items-start space-x-4 mb-6">
                        <div class="w-14 h-14 bg-success-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-7 h-7 text-success" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-2xl mb-3">Library & Inventory</h3>
                            <p class="text-text-secondary mb-4 leading-relaxed">Digital library management, book tracking, inventory control, and asset management in one unified system.</p>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 gap-3">
                        <div class="flex items-center space-x-2 text-sm text-text-secondary">
                            <svg class="w-4 h-4 text-success flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span>Book Management</span>
                        </div>
                        <div class="flex items-center space-x-2 text-sm text-text-secondary">
                            <svg class="w-4 h-4 text-success flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span>Issue/Return Tracking</span>
                        </div>
                        <div class="flex items-center space-x-2 text-sm text-text-secondary">
                            <svg class="w-4 h-4 text-success flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span>Asset Management</span>
                        </div>
                        <div class="flex items-center space-x-2 text-sm text-text-secondary">
                            <svg class="w-4 h-4 text-success flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span>Fine Management</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <a href="javascript:void(0)" class="btn-primary text-lg px-8 py-4">
                    <span>Explore All Modules</span>
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Success Stories Section -->
    <section class="section-alt">
        <div class="container-custom">
            <div class="text-center mb-16">
                <span class="inline-block px-4 py-2 bg-success-100 text-success-800 rounded-full text-sm font-semibold mb-4">Success Stories</span>
                <h2 class="mb-6">Trusted by Leading Educational Institutions</h2>
                <p class="text-xl text-text-secondary max-w-3xl mx-auto">Real results from schools that transformed their operations with our ERP system.</p>
            </div>

            <!-- Case Studies Carousel -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                <!-- Case Study 1 -->
                <div class="card p-8">
                    <div class="mb-6">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1e8a54e49-1768817767760.png" 
                             alt="Greenwood International School building exterior showcasing modern educational facility that implemented School ERP system" 
                             class="w-full h-48 object-cover rounded-lg mb-4"
                             loading="lazy"
                             onerror="this.src='https://images.unsplash.com/photo-1580582932707-520aed937b7b?q=80&w=2832&auto=format&fit=crop'; this.onerror=null;">
                        <h3 class="text-xl mb-2">Greenwood International School</h3>
                        <p class="text-sm text-text-secondary mb-4">K-12 School • 2,500 Students</p>
                    </div>
                    <div class="space-y-4 mb-6">
                        <div class="flex items-center justify-between">
                            <span class="text-text-secondary text-sm">Administrative Time Saved</span>
                            <span class="text-primary font-bold">65%</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-text-secondary text-sm">Parent Satisfaction</span>
                            <span class="text-success font-bold">95%</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-text-secondary text-sm">Fee Collection Rate</span>
                            <span class="text-accent font-bold">98%</span>
                        </div>
                    </div>
                    <blockquote class="border-l-4 border-primary pl-4 italic text-text-secondary mb-6">
                        "The ERP system has revolutionized how we manage our school. What used to take hours now takes minutes."
                    </blockquote>
                    <div class="flex items-center">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_13fadfdfa-1763295460112.png" 
                             alt="Dr. Sarah Mitchell, Principal of Greenwood International School - School ERP success story testimonial" 
                             class="w-12 h-12 rounded-full object-cover mr-3"
                             loading="lazy"
                             onerror="this.src='https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=200&auto=format&fit=crop'; this.onerror=null;">
                        <div>
                            <p class="font-semibold text-text-primary">Dr. Sarah Mitchell</p>
                            <p class="text-sm text-text-secondary">Principal</p>
                        </div>
                    </div>
                </div>

                <!-- Case Study 2 -->
                <div class="card p-8">
                    <div class="mb-6">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_15d81a329-1768817768642.png" 
                             alt="Riverside Academy campus showing educational institution that achieved digital transformation with School ERP" 
                             class="w-full h-48 object-cover rounded-lg mb-4"
                             loading="lazy"
                             onerror="this.src='https://images.pixabay.com/photo/2017/07/31/11/21/people-2557396_1280.jpg?auto=compress&cs=tinysrgb&w=1260'; this.onerror=null;">
                        <h3 class="text-xl mb-2">Riverside Academy</h3>
                        <p class="text-sm text-text-secondary mb-4">High School • 1,800 Students</p>
                    </div>
                    <div class="space-y-4 mb-6">
                        <div class="flex items-center justify-between">
                            <span class="text-text-secondary text-sm">Paper Usage Reduction</span>
                            <span class="text-success font-bold">80%</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-text-secondary text-sm">Parent Engagement</span>
                            <span class="text-primary font-bold">92%</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-text-secondary text-sm">Operational Cost Savings</span>
                            <span class="text-accent font-bold">45%</span>
                        </div>
                    </div>
                    <blockquote class="border-l-4 border-primary pl-4 italic text-text-secondary mb-6">
                        "Going digital with this ERP was the best decision we made. Parents love the real-time updates."
                    </blockquote>
                    <div class="flex items-center">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_128420d91-1763296114793.png" 
                             alt="Mr. James Anderson, Director of Riverside Academy - educational technology implementation success" 
                             class="w-12 h-12 rounded-full object-cover mr-3"
                             loading="lazy"
                             onerror="this.src='https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=200&auto=format&fit=crop'; this.onerror=null;">
                        <div>
                            <p class="font-semibold text-text-primary">Mr. James Anderson</p>
                            <p class="text-sm text-text-secondary">Director</p>
                        </div>
                    </div>
                </div>

                <!-- Case Study 3 -->
                <div class="card p-8">
                    <div class="mb-6">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1ed9ca48e-1768817766863.png" 
                             alt="Oakwood Elementary School implementing comprehensive school management system for improved administration" 
                             class="w-full h-48 object-cover rounded-lg mb-4"
                             loading="lazy"
                             onerror="this.src='https://images.unsplash.com/photo-1580582932707-520aed937b7b?q=80&w=2832&auto=format&fit=crop'; this.onerror=null;">
                        <h3 class="text-xl mb-2">Oakwood Elementary</h3>
                        <p class="text-sm text-text-secondary mb-4">Elementary School • 800 Students</p>
                    </div>
                    <div class="space-y-4 mb-6">
                        <div class="flex items-center justify-between">
                            <span class="text-text-secondary text-sm">Attendance Accuracy</span>
                            <span class="text-success font-bold">99.5%</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-text-secondary text-sm">Report Card Generation</span>
                            <span class="text-primary font-bold">90% Faster</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-text-secondary text-sm">Teacher Satisfaction</span>
                            <span class="text-accent font-bold">94%</span>
                        </div>
                    </div>
                    <blockquote class="border-l-4 border-primary pl-4 italic text-text-secondary mb-6">
                        "Our teachers can now focus on teaching instead of paperwork. The system is incredibly user-friendly."
                    </blockquote>
                    <div class="flex items-center">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1006c57ea-1768817766918.png" 
                             alt="Ms. Emily Rodriguez, Head Administrator at Oakwood Elementary - School ERP user testimonial" 
                             class="w-12 h-12 rounded-full object-cover mr-3"
                             loading="lazy"
                             onerror="this.src='https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=200&auto=format&fit=crop'; this.onerror=null;">
                        <div>
                            <p class="font-semibold text-text-primary">Ms. Emily Rodriguez</p>
                            <p class="text-sm text-text-secondary">Head Administrator</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ROI Metrics -->
            <div class="bg-gradient-primary text-white rounded-2xl p-8 md:p-12">
                <div class="text-center mb-12">
                    <h3 class="text-3xl md:text-4xl mb-4">Average ROI Across All Institutions</h3>
                    <p class="text-xl text-primary-100">Measurable results within the first year of implementation</p>
                </div>
                <div class="grid md:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="text-4xl md:text-5xl font-bold mb-2">60%</div>
                        <p class="text-primary-100">Time Savings</p>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl md:text-5xl font-bold mb-2">40%</div>
                        <p class="text-primary-100">Cost Reduction</p>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl md:text-5xl font-bold mb-2">95%</div>
                        <p class="text-primary-100">User Satisfaction</p>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl md:text-5xl font-bold mb-2">3-6</div>
                        <p class="text-primary-100">Months to ROI</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Implementation Timeline Section -->
    <section class="section">
        <div class="container-custom">
            <div class="text-center mb-16">
                <span class="inline-block px-4 py-2 bg-primary-100 text-primary-800 rounded-full text-sm font-semibold mb-4">Implementation Process</span>
                <h2 class="mb-6">Get Started in Just 4 Weeks</h2>
                <p class="text-xl text-text-secondary max-w-3xl mx-auto">Our proven implementation methodology ensures smooth transition with minimal disruption to your operations.</p>
            </div>

            <div class="max-w-4xl mx-auto">
                <!-- Timeline Item 1 -->
                <div class="flex gap-6 mb-12">
                    <div class="flex flex-col items-center">
                        <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center text-white font-bold flex-shrink-0">1</div>
                        <div class="w-1 h-full bg-border mt-4"></div>
                    </div>
                    <div class="flex-1 pb-12">
                        <div class="card p-6">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-2xl">Discovery & Planning</h3>
                                <span class="badge-primary">Week 1</span>
                            </div>
                            <p class="text-text-secondary mb-4 leading-relaxed">We analyze your current processes, understand your specific requirements, and create a customized implementation plan tailored to your institution.</p>
                            <ul class="space-y-2">
                                <li class="flex items-center space-x-2 text-sm text-text-secondary">
                                    <svg class="w-4 h-4 text-success flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Requirements gathering sessions</span>
                                </li>
                                <li class="flex items-center space-x-2 text-sm text-text-secondary">
                                    <svg class="w-4 h-4 text-success flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>System configuration planning</span>
                                </li>
                                <li class="flex items-center space-x-2 text-sm text-text-secondary">
                                    <svg class="w-4 h-4 text-success flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Timeline and milestone definition</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Timeline Item 2 -->
                <div class="flex gap-6 mb-12">
                    <div class="flex flex-col items-center">
                        <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center text-white font-bold flex-shrink-0">2</div>
                        <div class="w-1 h-full bg-border mt-4"></div>
                    </div>
                    <div class="flex-1 pb-12">
                        <div class="card p-6">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-2xl">System Setup & Configuration</h3>
                                <span class="badge-primary">Week 2</span>
                            </div>
                            <p class="text-text-secondary mb-4 leading-relaxed">Our technical team configures the system according to your requirements, imports existing data, and sets up all necessary modules and integrations.</p>
                            <ul class="space-y-2">
                                <li class="flex items-center space-x-2 text-sm text-text-secondary">
                                    <svg class="w-4 h-4 text-success flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Data migration and validation</span>
                                </li>
                                <li class="flex items-center space-x-2 text-sm text-text-secondary">
                                    <svg class="w-4 h-4 text-success flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Module customization and setup</span>
                                </li>
                                <li class="flex items-center space-x-2 text-sm text-text-secondary">
                                    <svg class="w-4 h-4 text-success flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Third-party integrations configuration</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Timeline Item 3 -->
                <div class="flex gap-6 mb-12">
                    <div class="flex flex-col items-center">
                        <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center text-white font-bold flex-shrink-0">3</div>
                        <div class="w-1 h-full bg-border mt-4"></div>
                    </div>
                    <div class="flex-1 pb-12">
                        <div class="card p-6">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-2xl">Training & Testing</h3>
                                <span class="badge-primary">Week 3</span>
                            </div>
                            <p class="text-text-secondary mb-4 leading-relaxed">Comprehensive training sessions for all user groups, followed by thorough testing to ensure everything works perfectly before going live.</p>
                            <ul class="space-y-2">
                                <li class="flex items-center space-x-2 text-sm text-text-secondary">
                                    <svg class="w-4 h-4 text-success flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Role-based training sessions</span>
                                </li>
                                <li class="flex items-center space-x-2 text-sm text-text-secondary">
                                    <svg class="w-4 h-4 text-success flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>User acceptance testing (UAT)</span>
                                </li>
                                <li class="flex items-center space-x-2 text-sm text-text-secondary">
                                    <svg class="w-4 h-4 text-success flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Documentation and support materials</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Timeline Item 4 -->
                <div class="flex gap-6">
                    <div class="flex flex-col items-center">
                        <div class="w-12 h-12 bg-success rounded-full flex items-center justify-center text-white font-bold flex-shrink-0">4</div>
                    </div>
                    <div class="flex-1">
                        <div class="card p-6">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-2xl">Go Live & Support</h3>
                                <span class="badge-success">Week 4</span>
                            </div>
                            <p class="text-text-secondary mb-4 leading-relaxed">System goes live with dedicated support team available 24/7 to ensure smooth operations and address any questions or concerns.</p>
                            <ul class="space-y-2">
                                <li class="flex items-center space-x-2 text-sm text-text-secondary">
                                    <svg class="w-4 h-4 text-success flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Phased rollout or full deployment</span>
                                </li>
                                <li class="flex items-center space-x-2 text-sm text-text-secondary">
                                    <svg class="w-4 h-4 text-success flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>24/7 dedicated support team</span>
                                </li>
                                <li class="flex items-center space-x-2 text-sm text-text-secondary">
                                    <svg class="w-4 h-4 text-success flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Ongoing optimization and updates</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="section bg-surface">
        <div class="container-custom">
            <div class="text-center mb-16">
                <span class="inline-block px-4 py-2 bg-accent-100 text-accent-800 rounded-full text-sm font-semibold mb-4">Transparent Pricing</span>
                <h2 class="mb-6">Choose the Right Plan for Your Institution</h2>
                <p class="text-xl text-text-secondary max-w-3xl mx-auto">Flexible pricing options designed to fit schools of all sizes. All plans include free training and 24/7 support.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto mb-12">
                <!-- Basic Plan -->
                <div class="card p-8 hover:shadow-lg transition-all duration-base">
                    <div class="text-center mb-6">
                        <h3 class="text-2xl mb-2">Basic</h3>
                        <p class="text-text-secondary mb-6">Perfect for small schools</p>
                        <div class="mb-6">
                            <span class="text-5xl font-bold text-primary">$299</span>
                            <span class="text-text-secondary">/month</span>
                        </div>
                        <p class="text-sm text-text-secondary">Up to 500 students</p>
                    </div>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-success flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-text-secondary">Student Information System</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-success flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-text-secondary">Attendance Management</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-success flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-text-secondary">Fee Management</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-success flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-text-secondary">Parent Portal</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-success flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-text-secondary">Mobile App Access</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-success flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-text-secondary">Email Support</span>
                        </li>
                    </ul>
                    <a href="javascript:void(0)" class="btn-outline w-full justify-center">Get Started</a>
                </div>

                <!-- Standard Plan (Featured) -->
                <div class="card p-8 border-2 border-primary relative hover:shadow-xl transition-all duration-base">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                        <span class="bg-primary text-white px-4 py-1 rounded-full text-sm font-semibold">Most Popular</span>
                    </div>
                    <div class="text-center mb-6">
                        <h3 class="text-2xl mb-2">Standard</h3>
                        <p class="text-text-secondary mb-6">For growing institutions</p>
                        <div class="mb-6">
                            <span class="text-5xl font-bold text-primary">$599</span>
                            <span class="text-text-secondary">/month</span>
                        </div>
                        <p class="text-sm text-text-secondary">Up to 1,500 students</p>
                    </div>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-success flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-text-secondary font-semibold">Everything in Basic, plus:</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-success flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-text-secondary">Academic Management</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-success flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-text-secondary">Library Management</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-success flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-text-secondary">SMS Notifications</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-success flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-text-secondary">Advanced Reports</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-success flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-text-secondary">Priority Support</span>
                        </li>
                    </ul>
                    <a href="javascript:void(0)" class="btn-primary w-full justify-center">Get Started</a>
                </div>

                <!-- Enterprise Plan -->
                <div class="card p-8 hover:shadow-lg transition-all duration-base">
                    <div class="text-center mb-6">
                        <h3 class="text-2xl mb-2">Enterprise</h3>
                        <p class="text-text-secondary mb-6">For large institutions</p>
                        <div class="mb-6">
                            <span class="text-5xl font-bold text-primary">Custom</span>
                        </div>
                        <p class="text-sm text-text-secondary">Unlimited students</p>
                    </div>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-success flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-text-secondary font-semibold">Everything in Standard, plus:</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-success flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-text-secondary">Custom Integrations</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-success flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-text-secondary">Dedicated Account Manager</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-success flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-text-secondary">White-Label Options</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-success flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-text-secondary">On-Premise Deployment</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-success flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-text-secondary">24/7 Dedicated Support</span>
                        </li>
                    </ul>
                    <a href="javascript:void(0)" class="btn-outline w-full justify-center">Contact Sales</a>
                </div>
            </div>

            <!-- Additional Info -->
            <div class="text-center">
                <p class="text-text-secondary mb-4">All plans include free training, regular updates, and data migration assistance.</p>
                <a href="javascript:void(0)" class="text-primary font-semibold hover:underline">View detailed feature comparison →</a>
            </div>
        </div>
    </section>

    <!-- Demo Scheduling Section -->
    <section class="section bg-gradient-to-br from-primary-900 via-primary-800 to-accent-700 text-white relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23FFFFFF\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>

        <div class="container-custom relative z-10">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="mb-6 text-white">See School ERP in Action</h2>
                    <p class="text-xl text-primary-100 leading-relaxed">
                        Schedule a personalized demo with our education technology experts. We'll show you how our ERP system can transform your school's operations.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 gap-8 mb-12">
                    <!-- Demo Form -->
                    <div class="bg-white/10 backdrop-blur-custom rounded-xl p-8">
                        <h3 class="text-2xl mb-6 text-white">Request Your Demo</h3>
                        <form class="space-y-4">
                            <div>
                                <label for="demo-name" class="label text-white">Full Name *</label>
                                <input type="text" id="demo-name" class="input bg-white/20 border-white/30 text-white placeholder:text-white/60" placeholder="John Smith" required>
                            </div>
                            <div>
                                <label for="demo-email" class="label text-white">Email Address *</label>
                                <input type="email" id="demo-email" class="input bg-white/20 border-white/30 text-white placeholder:text-white/60" placeholder="john@school.edu" required>
                            </div>
                            <div>
                                <label for="demo-phone" class="label text-white">Phone Number *</label>
                                <input type="tel" id="demo-phone" class="input bg-white/20 border-white/30 text-white placeholder:text-white/60" placeholder="+1 (555) 123-4567" required>
                            </div>
                            <div>
                                <label for="demo-school" class="label text-white">School Name *</label>
                                <input type="text" id="demo-school" class="input bg-white/20 border-white/30 text-white placeholder:text-white/60" placeholder="Your School Name" required>
                            </div>
                            <div>
                                <label for="demo-students" class="label text-white">Number of Students</label>
                                <select id="demo-students" class="input bg-white/20 border-white/30 text-white">
                                    <option value="" class="text-text-primary">Select range</option>
                                    <option value="0-500" class="text-text-primary">0-500 students</option>
                                    <option value="501-1000" class="text-text-primary">501-1,000 students</option>
                                    <option value="1001-2000" class="text-text-primary">1,001-2,000 students</option>
                                    <option value="2000+" class="text-text-primary">2,000+ students</option>
                                </select>
                            </div>
                            <div>
                                <label for="demo-date" class="label text-white">Preferred Demo Date</label>
                                <input type="date" id="demo-date" class="input bg-white/20 border-white/30 text-white">
                            </div>
                            <button type="submit" class="btn bg-white text-primary hover:bg-primary-50 focus:ring-white w-full justify-center text-lg py-4">
                                <span>Schedule My Demo</span>
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                            </button>
                        </form>
                    </div>

                    <!-- Demo Benefits -->
                    <div class="space-y-6">
                        <div class="bg-white/10 backdrop-blur-custom rounded-xl p-6">
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold mb-2 text-white">Live Product Walkthrough</h4>
                                    <p class="text-primary-100 text-sm">See all features in action with real-world scenarios tailored to your school's needs.</p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white/10 backdrop-blur-custom rounded-xl p-6">
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold mb-2 text-white">Expert Consultation</h4>
                                    <p class="text-primary-100 text-sm">Get answers to all your questions from our education technology specialists.</p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white/10 backdrop-blur-custom rounded-xl p-6">
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold mb-2 text-white">Custom Implementation Plan</h4>
                                    <p class="text-primary-100 text-sm">Receive a personalized roadmap for implementing the ERP system at your institution.</p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white/10 backdrop-blur-custom rounded-xl p-6">
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold mb-2 text-white">ROI Analysis</h4>
                                    <p class="text-primary-100 text-sm">Understand the cost savings and efficiency gains you can expect from our system.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="text-center">
                    <p class="text-primary-100 mb-4">Prefer to talk now? Our team is ready to help.</p>
                    <div class="flex flex-wrap justify-center gap-8">
                        <a href="javascript:void(0)" class="flex items-center space-x-2 text-white hover:text-primary-100 transition-colors duration-fast">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <span>+1 (555) 123-4567</span>
                        </a>
                        <a href="javascript:void(0)" class="flex items-center space-x-2 text-white hover:text-primary-100 transition-colors duration-fast">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <span>schools@techsolutionspro.com</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Integration Section -->
    <section class="section">
        <div class="container-custom">
            <div class="text-center mb-16">
                <span class="inline-block px-4 py-2 bg-primary-100 text-primary-800 rounded-full text-sm font-semibold mb-4">Seamless Integration</span>
                <h2 class="mb-6">Works With Your Existing Tools</h2>
                <p class="text-xl text-text-secondary max-w-3xl mx-auto">Our School ERP integrates seamlessly with popular education tools and platforms you already use.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                <!-- Integration Card 1 -->
                <div class="card p-6 text-center hover:shadow-lg transition-all duration-base">
                    <div class="w-16 h-16 bg-primary-100 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h4 class="text-lg font-semibold mb-2">Email Services</h4>
                    <p class="text-sm text-text-secondary">Gmail, Outlook, Office 365</p>
                </div>

                <!-- Integration Card 2 -->
                <div class="card p-6 text-center hover:shadow-lg transition-all duration-base">
                    <div class="w-16 h-16 bg-accent-100 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/>
                        </svg>
                    </div>
                    <h4 class="text-lg font-semibold mb-2">Payment Gateways</h4>
                    <p class="text-sm text-text-secondary">Stripe, PayPal, Razorpay</p>
                </div>

                <!-- Integration Card 3 -->
                <div class="card p-6 text-center hover:shadow-lg transition-all duration-base">
                    <div class="w-16 h-16 bg-success-100 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-success" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                        </svg>
                    </div>
                    <h4 class="text-lg font-semibold mb-2">SMS Providers</h4>
                    <p class="text-sm text-text-secondary">Twilio, MSG91, TextLocal</p>
                </div>

                <!-- Integration Card 4 -->
                <div class="card p-6 text-center hover:shadow-lg transition-all duration-base">
                    <div class="w-16 h-16 bg-primary-100 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h4 class="text-lg font-semibold mb-2">Video Conferencing</h4>
                    <p class="text-sm text-text-secondary">Zoom, Google Meet, Teams</p>
                </div>

                <!-- Integration Card 5 -->
                <div class="card p-6 text-center hover:shadow-lg transition-all duration-base">
                    <div class="w-16 h-16 bg-accent-100 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                    </div>
                    <h4 class="text-lg font-semibold mb-2">Analytics Tools</h4>
                    <p class="text-sm text-text-secondary">Google Analytics, Mixpanel</p>
                </div>

                <!-- Integration Card 6 -->
                <div class="card p-6 text-center hover:shadow-lg transition-all duration-base">
                    <div class="w-16 h-16 bg-success-100 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-success" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/>
                        </svg>
                    </div>
                    <h4 class="text-lg font-semibold mb-2">Cloud Storage</h4>
                    <p class="text-sm text-text-secondary">Google Drive, Dropbox, OneDrive</p>
                </div>

                <!-- Integration Card 7 -->
                <div class="card p-6 text-center hover:shadow-lg transition-all duration-base">
                    <div class="w-16 h-16 bg-primary-100 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <h4 class="text-lg font-semibold mb-2">Learning Management</h4>
                    <p class="text-sm text-text-secondary">Moodle, Canvas, Blackboard</p>
                </div>

                <!-- Integration Card 8 -->
                <div class="card p-6 text-center hover:shadow-lg transition-all duration-base">
                    <div class="w-16 h-16 bg-accent-100 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4"/>
                        </svg>
                    </div>
                    <h4 class="text-lg font-semibold mb-2">Biometric Devices</h4>
                    <p class="text-sm text-text-secondary">Fingerprint, RFID, Face Recognition</p>
                </div>
            </div>

            <div class="text-center">
                <p class="text-text-secondary mb-6">Need a custom integration? Our API makes it easy to connect with any system.</p>
                <a href="javascript:void(0)" class="btn-primary text-lg px-8 py-4">
                    <span>View API Documentation</span>
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="section-alt">
        <div class="container-custom">
            <div class="text-center mb-16">
                <span class="inline-block px-4 py-2 bg-success-100 text-success-800 rounded-full text-sm font-semibold mb-4">Frequently Asked Questions</span>
                <h2 class="mb-6">Got Questions? We Have Answers</h2>
                <p class="text-xl text-text-secondary max-w-3xl mx-auto">Everything you need to know about our School ERP system.</p>
            </div>

            <div class="max-w-4xl mx-auto space-y-4">
                <!-- FAQ Item 1 -->
                <div class="card p-6">
                    <button class="w-full flex items-center justify-between text-left" onclick="this.parentElement.classList.toggle('active')">
                        <h4 class="text-lg font-semibold text-text-primary pr-4">How long does implementation take?</h4>
                        <svg class="w-6 h-6 text-primary flex-shrink-0 transition-transform duration-fast" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="hidden mt-4 text-text-secondary leading-relaxed">
                        <p>Our standard implementation process takes 2-4 weeks from contract signing to go-live. This includes system configuration, data migration, training, and testing. For larger institutions with complex requirements, implementation may take 6-8 weeks. We provide a detailed timeline during the discovery phase.</p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="card p-6">
                    <button class="w-full flex items-center justify-between text-left" onclick="this.parentElement.classList.toggle('active')">
                        <h4 class="text-lg font-semibold text-text-primary pr-4">Is training included in the package?</h4>
                        <svg class="w-6 h-6 text-primary flex-shrink-0 transition-transform duration-fast" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="hidden mt-4 text-text-secondary leading-relaxed">
                        <p>Yes! All our packages include comprehensive training for administrators, teachers, and staff. We provide role-based training sessions, video tutorials, user manuals, and ongoing support. Additional training sessions can be scheduled anytime at no extra cost for the first year.</p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="card p-6">
                    <button class="w-full flex items-center justify-between text-left" onclick="this.parentElement.classList.toggle('active')">
                        <h4 class="text-lg font-semibold text-text-primary pr-4">Can we migrate data from our existing system?</h4>
                        <svg class="w-6 h-6 text-primary flex-shrink-0 transition-transform duration-fast" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="hidden mt-4 text-text-secondary leading-relaxed">
                        <p>Absolutely! We offer free data migration assistance with all plans. Our team will help you migrate student records, academic data, fee information, and other critical data from your existing system. We support migration from Excel files, CSV files, and most popular school management systems.</p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="card p-6">
                    <button class="w-full flex items-center justify-between text-left" onclick="this.parentElement.classList.toggle('active')">
                        <h4 class="text-lg font-semibold text-text-primary pr-4">Is my school's data secure?</h4>
                        <svg class="w-6 h-6 text-primary flex-shrink-0 transition-transform duration-fast" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="hidden mt-4 text-text-secondary leading-relaxed">
                        <p>Security is our top priority. We use bank-level 256-bit SSL encryption, regular security audits, automated backups, and comply with international data protection standards including GDPR. Your data is stored in secure cloud servers with 99.9% uptime guarantee and disaster recovery protocols in place.</p>
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="card p-6">
                    <button class="w-full flex items-center justify-between text-left" onclick="this.parentElement.classList.toggle('active')">
                        <h4 class="text-lg font-semibold text-text-primary pr-4">Can parents access the system?</h4>
                        <svg class="w-6 h-6 text-primary flex-shrink-0 transition-transform duration-fast" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="hidden mt-4 text-text-secondary leading-relaxed">
                        <p>Yes! Parents get their own dedicated portal and mobile app where they can view their child's attendance, grades, assignments, fee status, and communicate with teachers. They receive real-time notifications about important updates, events, and their child's progress.</p>
                    </div>
                </div>

                <!-- FAQ Item 6 -->
                <div class="card p-6">
                    <button class="w-full flex items-center justify-between text-left" onclick="this.parentElement.classList.toggle('active')">
                        <h4 class="text-lg font-semibold text-text-primary pr-4">What kind of support do you provide?</h4>
                        <svg class="w-6 h-6 text-primary flex-shrink-0 transition-transform duration-fast" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="hidden mt-4 text-text-secondary leading-relaxed">
                        <p>We provide 24/7 technical support via phone, email, and live chat. Basic and Standard plans include email support with 24-hour response time. Enterprise plans get dedicated account managers and priority support with 2-hour response time. All plans include access to our knowledge base and video tutorials.</p>
                    </div>
                </div>

                <!-- FAQ Item 7 -->
                <div class="card p-6">
                    <button class="w-full flex items-center justify-between text-left" onclick="this.parentElement.classList.toggle('active')">
                        <h4 class="text-lg font-semibold text-text-primary pr-4">Can we customize the system for our needs?</h4>
                        <svg class="w-6 h-6 text-primary flex-shrink-0 transition-transform duration-fast" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="hidden mt-4 text-text-secondary leading-relaxed">
                        <p>Yes! The system is highly customizable. You can configure workflows, create custom fields, design report cards, set up your grading system, and more. Enterprise plans include custom feature development and white-label options. Our team will work with you to tailor the system to your specific requirements.</p>
                    </div>
                </div>

                <!-- FAQ Item 8 -->
                <div class="card p-6">
                    <button class="w-full flex items-center justify-between text-left" onclick="this.parentElement.classList.toggle('active')">
                        <h4 class="text-lg font-semibold text-text-primary pr-4">What happens if we want to cancel?</h4>
                        <svg class="w-6 h-6 text-primary flex-shrink-0 transition-transform duration-fast" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="hidden mt-4 text-text-secondary leading-relaxed">
                        <p>We offer flexible contracts with no long-term lock-in. You can cancel anytime with 30 days' notice. Upon cancellation, we'll provide you with a complete export of all your data in standard formats. We're confident you'll love our system, but we believe in giving you the freedom to choose.</p>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <p class="text-text-secondary mb-4">Still have questions?</p>
                <a href="javascript:void(0)" class="btn-primary text-lg px-8 py-4">
                    <span>Contact Our Team</span>
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>
@endsection