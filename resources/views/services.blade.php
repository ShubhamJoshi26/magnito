@extends('layouts.main')

@section('content')
<!-- Hero Section -->
<section class="relative pt-32 pb-20 md:pt-40 md:pb-24 overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-br from-primary-50 via-background to-accent-50"></div>
        <div class="absolute inset-0 opacity-30"
            style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%231E3A8A\' fill-opacity=\'0.1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');">
        </div>
    </div>

    <div class="container-custom relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <div
                class="inline-flex items-center space-x-2 bg-primary-100 text-primary-800 px-4 py-2 rounded-full mb-6 animate-fade-in">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd" />
                </svg>
                <span class="text-sm font-semibold">Enterprise-Grade Technology Solutions</span>
            </div>

            <h1 class="mb-6 animate-slide-up">
                Comprehensive IT Services for <span class="text-primary">Digital Transformation</span>
            </h1>

            <p class="text-xl text-text-secondary mb-8 leading-relaxed animate-slide-up"
                style="animation-delay: 100ms;">
                From custom development to enterprise SaaS platforms, we deliver scalable technology solutions that
                drive business growth and prepare your organization for the future.
            </p>

            <!-- Search & Filter Bar -->
            <div class="max-w-2xl mx-auto mb-12 animate-slide-up" style="animation-delay: 200ms;">
                <div class="flex flex-col sm:flex-row gap-4">
                    <div class="flex-1 relative">
                        <input type="text" id="service-search" placeholder="Search services..." class="input pl-12"
                            aria-label="Search services">
                        <svg class="w-5 h-5 text-text-tertiary absolute left-4 top-1/2 -translate-y-1/2" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                    <button class="btn-outline px-6" aria-label="Filter services">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                        </svg>
                        <span>Filter</span>
                    </button>
                </div>
            </div>

            <!-- Quick Stats -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 animate-fade-in" style="animation-delay: 300ms;">
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-primary mb-1">500+</div>
                    <p class="text-sm text-text-secondary">Projects Delivered</p>
                </div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-primary mb-1">7</div>
                    <p class="text-sm text-text-secondary">Core Services</p>
                </div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-primary mb-1">98%</div>
                    <p class="text-sm text-text-secondary">Client Satisfaction</p>
                </div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-primary mb-1">24/7</div>
                    <p class="text-sm text-text-secondary">Support Available</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Categories Navigation -->
<section class="py-8 bg-surface-elevated border-y border-border sticky top-20 z-90">
    <div class="container-custom">
        <div class="flex items-center justify-between overflow-x-auto pb-2 scrollbar-hide">
            <div class="flex space-x-6 min-w-max">
                <a href="#saas-development"
                    class="flex items-center space-x-2 text-text-secondary hover:text-primary transition-colors duration-fast whitespace-nowrap">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                    </svg>
                    <span class="font-medium">SaaS Development</span>
                </a>
                <a href="#web-development"
                    class="flex items-center space-x-2 text-text-secondary hover:text-primary transition-colors duration-fast whitespace-nowrap">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <span class="font-medium">Web Development</span>
                </a>
                <a href="#mobile-development"
                    class="flex items-center space-x-2 text-text-secondary hover:text-primary transition-colors duration-fast whitespace-nowrap">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                    </svg>
                    <span class="font-medium">Mobile Apps</span>
                </a>
                <a href="#cloud-devops"
                    class="flex items-center space-x-2 text-text-secondary hover:text-primary transition-colors duration-fast whitespace-nowrap">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" />
                    </svg>
                    <span class="font-medium">Cloud & DevOps</span>
                </a>
                <a href="#erp-development"
                    class="flex items-center space-x-2 text-text-secondary hover:text-primary transition-colors duration-fast whitespace-nowrap">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                    <span class="font-medium">ERP Systems</span>
                </a>
                <a href="#crm-development"
                    class="flex items-center space-x-2 text-text-secondary hover:text-primary transition-colors duration-fast whitespace-nowrap">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <span class="font-medium">CRM Solutions</span>
                </a>
                <a href="#support-maintenance"
                    class="flex items-center space-x-2 text-text-secondary hover:text-primary transition-colors duration-fast whitespace-nowrap">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <span class="font-medium">Support</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- SaaS Development Service -->
<section id="saas-development" class="section">
    <div class="container-custom">
        <div class="grid lg:grid-cols-2 gap-12 items-center mb-20">
            <!-- Service Content -->
            <div>
                <div
                    class="inline-flex items-center space-x-2 bg-primary-100 text-primary-800 px-4 py-2 rounded-full mb-6">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                    </svg>
                    <span class="text-sm font-semibold">SaaS Development</span>
                </div>

                <h2 class="mb-6">Enterprise SaaS Platform Development</h2>
                <p class="text-xl text-text-secondary mb-8 leading-relaxed">
                    Build scalable, multi-tenant SaaS applications with modern architecture, robust security, and
                    seamless user experiences that drive recurring revenue.
                </p>

                <!-- Key Features -->
                <div class="space-y-4 mb-8">
                    <div class="flex items-start space-x-3">
                        <div
                            class="w-6 h-6 bg-success-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <svg class="w-4 h-4 text-success" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-text-primary mb-1">Multi-Tenant Architecture</h4>
                            <p class="text-text-secondary">Isolated data, shared infrastructure for optimal performance
                                and cost efficiency</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-3">
                        <div
                            class="w-6 h-6 bg-success-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <svg class="w-4 h-4 text-success" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-text-primary mb-1">Subscription Management</h4>
                            <p class="text-text-secondary">Integrated billing, payment processing, and subscription
                                lifecycle management</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-3">
                        <div
                            class="w-6 h-6 bg-success-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <svg class="w-4 h-4 text-success" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-text-primary mb-1">API-First Design</h4>
                            <p class="text-text-secondary">RESTful APIs and webhooks for seamless third-party
                                integrations</p>
                        </div>
                    </div>
                </div>

                <!-- Tech Stack -->
                <div class="mb-8">
                    <h4 class="text-lg font-semibold text-text-primary mb-4">Technology Stack</h4>
                    <div class="flex flex-wrap gap-2">
                        <span class="badge-primary">React</span>
                        <span class="badge-primary">Node.js</span>
                        <span class="badge-primary">PostgreSQL</span>
                        <span class="badge-primary">Redis</span>
                        <span class="badge-primary">AWS</span>
                        <span class="badge-primary">Docker</span>
                        <span class="badge-primary">Kubernetes</span>
                    </div>
                </div>

                <!-- Pricing & Timeline -->
                <div class="grid md:grid-cols-2 gap-6 mb-8">
                    <div class="card p-6">
                        <div class="flex items-center space-x-3 mb-2">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <h5 class="font-semibold text-text-primary">Timeline</h5>
                        </div>
                        <p class="text-2xl font-bold text-primary">4-8 months</p>
                        <p class="text-sm text-text-secondary">Average project duration</p>
                    </div>

                    <div class="card p-6">
                        <div class="flex items-center space-x-3 mb-2">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <h5 class="font-semibold text-text-primary">Starting From</h5>
                        </div>
                        <p class="text-2xl font-bold text-primary">$75,000</p>
                        <p class="text-sm text-text-secondary">Custom quote available</p>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="javascript:void(0)" class="btn-primary">
                        <span>Request Consultation</span>
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                    <a href="javascript:void(0)" class="btn-outline">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        <span>Download Service Sheet</span>
                    </a>
                </div>
            </div>

            <!-- Service Image -->
            <div class="relative">
                <div class="relative rounded-2xl overflow-hidden shadow-xl">
                    <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1ce6b528a-1767607539353.png"
                        alt="SaaS platform development dashboard showing multi-tenant architecture, subscription management interface, and API integration tools"
                        class="w-full h-auto object-cover" loading="lazy"
                        onerror="this.src='https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2940&auto=format&fit=crop'; this.onerror=null;">
                    <div class="absolute inset-0 gradient-overlay"></div>
                </div>

                <!-- Success Metric Badge -->
                <div class="absolute -bottom-6 -right-6 bg-surface-elevated rounded-xl shadow-lg p-6">
                    <div class="text-center">
                        <p class="text-3xl font-bold text-success mb-1">150+</p>
                        <p class="text-sm text-text-secondary">SaaS Projects</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Case Study Highlight -->
        <div class="card p-8 bg-gradient-to-br from-primary-50 to-accent-50 border-primary-200">
            <div class="flex items-start space-x-4">
                <div class="w-12 h-12 bg-primary rounded-lg flex items-center justify-center flex-shrink-0">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div class="flex-1">
                    <h4 class="text-xl font-semibold text-text-primary mb-2">Success Story: EdTech Platform</h4>
                    <p class="text-text-secondary mb-4">Built a comprehensive learning management SaaS serving 50,000+
                        students across 200+ institutions with 99.9% uptime and seamless scalability.</p>
                    <div class="grid md:grid-cols-3 gap-4">
                        <div>
                            <p class="text-2xl font-bold text-primary">50K+</p>
                            <p class="text-sm text-text-secondary">Active Users</p>
                        </div>
                        <div>
                            <p class="text-2xl font-bold text-primary">99.9%</p>
                            <p class="text-sm text-text-secondary">Uptime SLA</p>
                        </div>
                        <div>
                            <p class="text-2xl font-bold text-primary">40%</p>
                            <p class="text-sm text-text-secondary">Cost Reduction</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Custom Web Development Service -->
<section id="web-development" class="section-alt">
    <div class="container-custom">
        <div class="grid lg:grid-cols-2 gap-12 items-center mb-20">
            <!-- Service Image -->
            <div class="relative order-2 lg:order-1">
                <div class="relative rounded-2xl overflow-hidden shadow-xl">
                    <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1579194a8-1765693310436.png"
                        alt="Custom web development workspace showing responsive website design, modern UI components, and full-stack development environment"
                        class="w-full h-auto object-cover" loading="lazy"
                        onerror="this.src='https://images.pexels.com/photos/546819/pexels-photo-546819.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;">
                    <div class="absolute inset-0 gradient-overlay"></div>
                </div>

                <!-- Success Metric Badge -->
                <div class="absolute -top-6 -left-6 bg-surface-elevated rounded-xl shadow-lg p-6">
                    <div class="text-center">
                        <p class="text-3xl font-bold text-accent mb-1">300+</p>
                        <p class="text-sm text-text-secondary">Web Projects</p>
                    </div>
                </div>
            </div>

            <!-- Service Content -->
            <div class="order-1 lg:order-2">
                <div
                    class="inline-flex items-center space-x-2 bg-accent-100 text-accent-800 px-4 py-2 rounded-full mb-6">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <span class="text-sm font-semibold">Custom Web Development</span>
                </div>

                <h2 class="mb-6">Powerful Web Applications Built for Scale</h2>
                <p class="text-xl text-text-secondary mb-8 leading-relaxed">
                    Create high-performance web applications with modern frameworks, responsive design, and robust
                    backend architecture tailored to your business needs.
                </p>

                <!-- Key Features -->
                <div class="space-y-4 mb-8">
                    <div class="flex items-start space-x-3">
                        <div
                            class="w-6 h-6 bg-success-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <svg class="w-4 h-4 text-success" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-text-primary mb-1">Full-Stack Development</h4>
                            <p class="text-text-secondary">End-to-end development from frontend UI to backend APIs and
                                databases</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-3">
                        <div
                            class="w-6 h-6 bg-success-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <svg class="w-4 h-4 text-success" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-text-primary mb-1">Responsive Design</h4>
                            <p class="text-text-secondary">Mobile-first approach ensuring perfect experience across all
                                devices</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-3">
                        <div
                            class="w-6 h-6 bg-success-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <svg class="w-4 h-4 text-success" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-text-primary mb-1">Performance Optimization</h4>
                            <p class="text-text-secondary">Lightning-fast load times with advanced caching and
                                optimization techniques</p>
                        </div>
                    </div>
                </div>

                <!-- Tech Stack -->
                <div class="mb-8">
                    <h4 class="text-lg font-semibold text-text-primary mb-4">Technology Stack</h4>
                    <div class="flex flex-wrap gap-2">
                        <span class="badge-primary">React</span>
                        <span class="badge-primary">Vue.js</span>
                        <span class="badge-primary">Next.js</span>
                        <span class="badge-primary">Python</span>
                        <span class="badge-primary">Django</span>
                        <span class="badge-primary">MongoDB</span>
                        <span class="badge-primary">GraphQL</span>
                    </div>
                </div>

                <!-- Pricing & Timeline -->
                <div class="grid md:grid-cols-2 gap-6 mb-8">
                    <div class="card p-6">
                        <div class="flex items-center space-x-3 mb-2">
                            <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <h5 class="font-semibold text-text-primary">Timeline</h5>
                        </div>
                        <p class="text-2xl font-bold text-accent">2-6 months</p>
                        <p class="text-sm text-text-secondary">Average project duration</p>
                    </div>

                    <div class="card p-6">
                        <div class="flex items-center space-x-3 mb-2">
                            <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <h5 class="font-semibold text-text-primary">Starting From</h5>
                        </div>
                        <p class="text-2xl font-bold text-accent">$25,000</p>
                        <p class="text-sm text-text-secondary">Custom quote available</p>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="javascript:void(0)" class="btn-accent">
                        <span>Request Consultation</span>
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                    <a href="javascript:void(0)" class="btn-outline">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        <span>Download Service Sheet</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mobile App Development Service -->
<section id="mobile-development" class="section">
    <div class="container-custom">
        <div class="grid lg:grid-cols-2 gap-12 items-center mb-20">
            <!-- Service Content -->
            <div>
                <div
                    class="inline-flex items-center space-x-2 bg-success-100 text-success-800 px-4 py-2 rounded-full mb-6">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                    </svg>
                    <span class="text-sm font-semibold">Mobile App Development</span>
                </div>

                <h2 class="mb-6">Native & Cross-Platform Mobile Solutions</h2>
                <p class="text-xl text-text-secondary mb-8 leading-relaxed">
                    Develop engaging iOS and Android applications with native performance, intuitive interfaces, and
                    seamless user experiences that drive engagement.
                </p>

                <!-- Key Features -->
                <div class="space-y-4 mb-8">
                    <div class="flex items-start space-x-3">
                        <div
                            class="w-6 h-6 bg-success-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <svg class="w-4 h-4 text-success" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-text-primary mb-1">Cross-Platform Development</h4>
                            <p class="text-text-secondary">Single codebase for iOS and Android with React Native or
                                Flutter</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-3">
                        <div
                            class="w-6 h-6 bg-success-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <svg class="w-4 h-4 text-success" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-text-primary mb-1">Native Performance</h4>
                            <p class="text-text-secondary">Optimized for speed with smooth animations and responsive
                                interactions</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-3">
                        <div
                            class="w-6 h-6 bg-success-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <svg class="w-4 h-4 text-success" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-text-primary mb-1">App Store Optimization</h4>
                            <p class="text-text-secondary">Complete support for App Store and Google Play submission and
                                optimization</p>
                        </div>
                    </div>
                </div>

                <!-- Tech Stack -->
                <div class="mb-8">
                    <h4 class="text-lg font-semibold text-text-primary mb-4">Technology Stack</h4>
                    <div class="flex flex-wrap gap-2">
                        <span class="badge-primary">React Native</span>
                        <span class="badge-primary">Flutter</span>
                        <span class="badge-primary">Swift</span>
                        <span class="badge-primary">Kotlin</span>
                        <span class="badge-primary">Firebase</span>
                        <span class="badge-primary">Redux</span>
                    </div>
                </div>

                <!-- Pricing & Timeline -->
                <div class="grid md:grid-cols-2 gap-6 mb-8">
                    <div class="card p-6">
                        <div class="flex items-center space-x-3 mb-2">
                            <svg class="w-6 h-6 text-success" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <h5 class="font-semibold text-text-primary">Timeline</h5>
                        </div>
                        <p class="text-2xl font-bold text-success">3-7 months</p>
                        <p class="text-sm text-text-secondary">Average project duration</p>
                    </div>

                    <div class="card p-6">
                        <div class="flex items-center space-x-3 mb-2">
                            <svg class="w-6 h-6 text-success" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <h5 class="font-semibold text-text-primary">Starting From</h5>
                        </div>
                        <p class="text-2xl font-bold text-success">$40,000</p>
                        <p class="text-sm text-text-secondary">Custom quote available</p>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="javascript:void(0)"
                        class="btn bg-success text-white hover:bg-success-700 focus:ring-success-500 shadow-base hover:shadow-md">
                        <span>Request Consultation</span>
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                    <a href="javascript:void(0)" class="btn-outline">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        <span>Download Service Sheet</span>
                    </a>
                </div>
            </div>

            <!-- Service Image -->
            <div class="relative">
                <div class="relative rounded-2xl overflow-hidden shadow-xl">
                    <img src="https://img.rocket.new/generatedImages/rocket_gen_img_149b4709d-1768326968593.png"
                        alt="Mobile app development showing iOS and Android applications with native UI components, cross-platform framework, and app store optimization"
                        class="w-full h-auto object-cover" loading="lazy"
                        onerror="this.src='https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?q=80&w=2940&auto=format&fit=crop'; this.onerror=null;">
                    <div class="absolute inset-0 gradient-overlay"></div>
                </div>

                <!-- Success Metric Badge -->
                <div class="absolute -bottom-6 -right-6 bg-surface-elevated rounded-xl shadow-lg p-6">
                    <div class="text-center">
                        <p class="text-3xl font-bold text-success mb-1">200+</p>
                        <p class="text-sm text-text-secondary">Mobile Apps</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Comparison Matrix -->
<section class="section-alt">
    <div class="container-custom">
        <div class="text-center mb-16">
            <span
                class="inline-block px-4 py-2 bg-primary-100 text-primary-800 rounded-full text-sm font-semibold mb-4">Service
                Comparison</span>
            <h2 class="mb-6">Choose the Right Service for Your Needs</h2>
            <p class="text-xl text-text-secondary max-w-3xl mx-auto">Compare our services side-by-side to find the
                perfect solution for your business requirements and budget.</p>
        </div>

        <!-- Comparison Table -->
        <div class="overflow-x-auto">
            <table class="w-full bg-surface-elevated rounded-xl shadow-base border border-border">
                <thead>
                    <tr class="border-b border-border">
                        <th class="text-left p-6 font-semibold text-text-primary">Feature</th>
                        <th class="text-center p-6 font-semibold text-text-primary">SaaS Development</th>
                        <th class="text-center p-6 font-semibold text-text-primary">Web Development</th>
                        <th class="text-center p-6 font-semibold text-text-primary">Mobile Apps</th>
                        <th class="text-center p-6 font-semibold text-text-primary">Cloud & DevOps</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-border hover:bg-surface transition-colors duration-fast">
                        <td class="p-6 text-text-primary font-medium">Timeline</td>
                        <td class="p-6 text-center text-text-secondary">4-8 months</td>
                        <td class="p-6 text-center text-text-secondary">2-6 months</td>
                        <td class="p-6 text-center text-text-secondary">3-7 months</td>
                        <td class="p-6 text-center text-text-secondary">1-3 months</td>
                    </tr>
                    <tr class="border-b border-border hover:bg-surface transition-colors duration-fast">
                        <td class="p-6 text-text-primary font-medium">Starting Price</td>
                        <td class="p-6 text-center text-text-secondary">$75,000</td>
                        <td class="p-6 text-center text-text-secondary">$25,000</td>
                        <td class="p-6 text-center text-text-secondary">$40,000</td>
                        <td class="p-6 text-center text-text-secondary">$15,000</td>
                    </tr>
                    <tr class="border-b border-border hover:bg-surface transition-colors duration-fast">
                        <td class="p-6 text-text-primary font-medium">Scalability</td>
                        <td class="p-6 text-center">
                            <svg class="w-6 h-6 text-success mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                        </td>
                        <td class="p-6 text-center">
                            <svg class="w-6 h-6 text-success mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                        </td>
                        <td class="p-6 text-center">
                            <svg class="w-6 h-6 text-success mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                        </td>
                        <td class="p-6 text-center">
                            <svg class="w-6 h-6 text-success mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                        </td>
                    </tr>
                    <tr class="border-b border-border hover:bg-surface transition-colors duration-fast">
                        <td class="p-6 text-text-primary font-medium">Multi-Platform</td>
                        <td class="p-6 text-center">
                            <svg class="w-6 h-6 text-success mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                        </td>
                        <td class="p-6 text-center">
                            <svg class="w-6 h-6 text-success mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                        </td>
                        <td class="p-6 text-center">
                            <svg class="w-6 h-6 text-success mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                        </td>
                        <td class="p-6 text-center">
                            <svg class="w-6 h-6 text-text-tertiary mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                    clip-rule="evenodd" />
                            </svg>
                        </td>
                    </tr>
                    <tr class="hover:bg-surface transition-colors duration-fast">
                        <td class="p-6 text-text-primary font-medium">Maintenance Included</td>
                        <td class="p-6 text-center">
                            <svg class="w-6 h-6 text-success mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                        </td>
                        <td class="p-6 text-center">
                            <span class="text-text-secondary text-sm">Optional</span>
                        </td>
                        <td class="p-6 text-center">
                            <span class="text-text-secondary text-sm">Optional</span>
                        </td>
                        <td class="p-6 text-center">
                            <svg class="w-6 h-6 text-success mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Cloud & DevOps, ERP, CRM Services (Condensed) -->
<section id="cloud-devops" class="section">
    <div class="container-custom">
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Cloud & DevOps -->
            <div class="card-interactive p-8">
                <div class="w-16 h-16 bg-primary-100 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" />
                    </svg>
                </div>
                <h3 class="text-2xl mb-4">Cloud & DevOps</h3>
                <p class="text-text-secondary mb-6 leading-relaxed">Optimize infrastructure with cloud migration,
                    containerization, and automated CI/CD pipelines for maximum efficiency.</p>

                <div class="mb-6">
                    <div class="flex flex-wrap gap-2">
                        <span class="badge-primary text-xs">AWS</span>
                        <span class="badge-primary text-xs">Azure</span>
                        <span class="badge-primary text-xs">Docker</span>
                        <span class="badge-primary text-xs">Kubernetes</span>
                    </div>
                </div>

                <div class="flex items-center justify-between mb-6 pb-6 border-b border-border">
                    <div>
                        <p class="text-sm text-text-secondary">Timeline</p>
                        <p class="text-lg font-bold text-primary">1-3 months</p>
                    </div>
                    <div>
                        <p class="text-sm text-text-secondary">From</p>
                        <p class="text-lg font-bold text-primary">$15,000</p>
                    </div>
                </div>

                <a href="javascript:void(0)"
                    class="inline-flex items-center text-primary font-semibold hover:gap-2 transition-all duration-fast">
                    <span>Learn More</span>
                    <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>

            <!-- ERP Development -->
            <div id="erp-development" class="card-interactive p-8">
                <div class="w-16 h-16 bg-accent-100 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                </div>
                <h3 class="text-2xl mb-4">ERP Development</h3>
                <p class="text-text-secondary mb-6 leading-relaxed">Streamline business operations with custom ERP
                    solutions integrating all departments into one unified system.</p>

                <div class="mb-6">
                    <div class="flex flex-wrap gap-2">
                        <span class="badge-primary text-xs">SAP</span>
                        <span class="badge-primary text-xs">Oracle</span>
                        <span class="badge-primary text-xs">Odoo</span>
                        <span class="badge-primary text-xs">Custom</span>
                    </div>
                </div>

                <div class="flex items-center justify-between mb-6 pb-6 border-b border-border">
                    <div>
                        <p class="text-sm text-text-secondary">Timeline</p>
                        <p class="text-lg font-bold text-accent">6-12 months</p>
                    </div>
                    <div>
                        <p class="text-sm text-text-secondary">From</p>
                        <p class="text-lg font-bold text-accent">$100,000</p>
                    </div>
                </div>

                <a href="javascript:void(0)"
                    class="inline-flex items-center text-accent font-semibold hover:gap-2 transition-all duration-fast">
                    <span>Learn More</span>
                    <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>

            <!-- CRM Development -->
            <div id="crm-development" class="card-interactive p-8">
                <div class="w-16 h-16 bg-success-100 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-success" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <h3 class="text-2xl mb-4">CRM Development</h3>
                <p class="text-text-secondary mb-6 leading-relaxed">Enhance customer relationships with intelligent CRM
                    systems tracking interactions and automating sales processes.</p>

                <div class="mb-6">
                    <div class="flex flex-wrap gap-2">
                        <span class="badge-primary text-xs">Salesforce</span>
                        <span class="badge-primary text-xs">HubSpot</span>
                        <span class="badge-primary text-xs">Zoho</span>
                        <span class="badge-primary text-xs">Custom</span>
                    </div>
                </div>

                <div class="flex items-center justify-between mb-6 pb-6 border-b border-border">
                    <div>
                        <p class="text-sm text-text-secondary">Timeline</p>
                        <p class="text-lg font-bold text-success">3-6 months</p>
                    </div>
                    <div>
                        <p class="text-sm text-text-secondary">From</p>
                        <p class="text-lg font-bold text-success">$35,000</p>
                    </div>
                </div>

                <a href="javascript:void(0)"
                    class="inline-flex items-center text-success font-semibold hover:gap-2 transition-all duration-fast">
                    <span>Learn More</span>
                    <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Support & Maintenance Service -->
<section id="support-maintenance" class="section-alt">
    <div class="container-custom">
        <div class="max-w-5xl mx-auto">
            <div class="text-center mb-12">
                <div
                    class="inline-flex items-center space-x-2 bg-primary-100 text-primary-800 px-4 py-2 rounded-full mb-6">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <span class="text-sm font-semibold">Maintenance & Support</span>
                </div>
                <h2 class="mb-6">24/7 Technical Support & Maintenance</h2>
                <p class="text-xl text-text-secondary leading-relaxed">Keep your systems running smoothly with proactive
                    monitoring, regular updates, and dedicated technical support teams available around the clock.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 mb-12">
                <div class="card p-6 text-center">
                    <div class="w-16 h-16 bg-primary-100 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h4 class="text-lg font-semibold text-text-primary mb-2">Proactive Monitoring</h4>
                    <p class="text-text-secondary text-sm">24/7 system monitoring with automated alerts and issue
                        detection</p>
                </div>

                <div class="card p-6 text-center">
                    <div class="w-16 h-16 bg-accent-100 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                        </svg>
                    </div>
                    <h4 class="text-lg font-semibold text-text-primary mb-2">Regular Updates</h4>
                    <p class="text-text-secondary text-sm">Security patches, feature updates, and performance
                        optimizations</p>
                </div>

                <div class="card p-6 text-center">
                    <div class="w-16 h-16 bg-success-100 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-success" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                    <h4 class="text-lg font-semibold text-text-primary mb-2">Dedicated Support</h4>
                    <p class="text-text-secondary text-sm">Priority ticket system with guaranteed response times</p>
                </div>
            </div>

            <!-- Support Packages -->
            <div class="grid md:grid-cols-3 gap-6">
                <div class="card p-8 hover:shadow-lg transition-all duration-base">
                    <div class="text-center mb-6">
                        <h4 class="text-xl font-semibold text-text-primary mb-2">Basic</h4>
                        <div class="text-4xl font-bold text-primary mb-2">$500<span
                                class="text-lg text-text-secondary font-normal">/mo</span></div>
                        <p class="text-sm text-text-secondary">Essential support coverage</p>
                    </div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start space-x-2">
                            <svg class="w-5 h-5 text-success flex-shrink-0 mt-0.5" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm text-text-secondary">Business hours support</span>
                        </li>
                        <li class="flex items-start space-x-2">
                            <svg class="w-5 h-5 text-success flex-shrink-0 mt-0.5" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm text-text-secondary">Monthly updates</span>
                        </li>
                        <li class="flex items-start space-x-2">
                            <svg class="w-5 h-5 text-success flex-shrink-0 mt-0.5" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm text-text-secondary">Email support</span>
                        </li>
                    </ul>
                    <a href="javascript:void(0)" class="btn-outline w-full justify-center">Select Plan</a>
                </div>

                <div class="card p-8 border-2 border-primary hover:shadow-xl transition-all duration-base relative">
                    <div class="absolute -top-4 left-1/2 -translate-x-1/2">
                        <span class="bg-primary text-white px-4 py-1 rounded-full text-xs font-semibold">POPULAR</span>
                    </div>
                    <div class="text-center mb-6">
                        <h4 class="text-xl font-semibold text-text-primary mb-2">Professional</h4>
                        <div class="text-4xl font-bold text-primary mb-2">$1,500<span
                                class="text-lg text-text-secondary font-normal">/mo</span></div>
                        <p class="text-sm text-text-secondary">Comprehensive support</p>
                    </div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start space-x-2">
                            <svg class="w-5 h-5 text-success flex-shrink-0 mt-0.5" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm text-text-secondary">24/7 support coverage</span>
                        </li>
                        <li class="flex items-start space-x-2">
                            <svg class="w-5 h-5 text-success flex-shrink-0 mt-0.5" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm text-text-secondary">Weekly updates</span>
                        </li>
                        <li class="flex items-start space-x-2">
                            <svg class="w-5 h-5 text-success flex-shrink-0 mt-0.5" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm text-text-secondary">Phone & email support</span>
                        </li>
                        <li class="flex items-start space-x-2">
                            <svg class="w-5 h-5 text-success flex-shrink-0 mt-0.5" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm text-text-secondary">Priority ticket handling</span>
                        </li>
                    </ul>
                    <a href="javascript:void(0)" class="btn-primary w-full justify-center">Select Plan</a>
                </div>

                <div class="card p-8 hover:shadow-lg transition-all duration-base">
                    <div class="text-center mb-6">
                        <h4 class="text-xl font-semibold text-text-primary mb-2">Enterprise</h4>
                        <div class="text-4xl font-bold text-primary mb-2">Custom</div>
                        <p class="text-sm text-text-secondary">Tailored enterprise support</p>
                    </div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start space-x-2">
                            <svg class="w-5 h-5 text-success flex-shrink-0 mt-0.5" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm text-text-secondary">Dedicated support team</span>
                        </li>
                        <li class="flex items-start space-x-2">
                            <svg class="w-5 h-5 text-success flex-shrink-0 mt-0.5" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm text-text-secondary">Real-time monitoring</span>
                        </li>
                        <li class="flex items-start space-x-2">
                            <svg class="w-5 h-5 text-success flex-shrink-0 mt-0.5" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm text-text-secondary">Custom SLA agreements</span>
                        </li>
                        <li class="flex items-start space-x-2">
                            <svg class="w-5 h-5 text-success flex-shrink-0 mt-0.5" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm text-text-secondary">On-site support available</span>
                        </li>
                    </ul>
                    <a href="javascript:void(0)" class="btn-outline w-full justify-center">Contact Sales</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section
    class="section bg-gradient-to-br from-primary-900 via-primary-800 to-accent-700 text-white relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10"
        style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23FFFFFF\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');">
    </div>

    <div class="container-custom relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="mb-6 text-white">Ready to Start Your Project?</h2>
            <p class="text-xl text-primary-100 mb-8 leading-relaxed">
                Let's discuss how our technology solutions can help you achieve your digital transformation goals. Get a
                free consultation with our experts today.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-12">
                <a href="javascript:void(0)"
                    class="btn bg-white text-primary hover:bg-primary-50 focus:ring-white text-lg px-8 py-4">
                    <span>Get a Free Quote</span>
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>
                <a href="javascript:void(0)"
                    class="btn border-2 border-white text-white hover:bg-white hover:text-primary focus:ring-white text-lg px-8 py-4">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <span>Schedule Consultation</span>
                </a>
            </div>

            <!-- Contact Info -->
            <div class="flex flex-wrap justify-center gap-8 text-primary-100">
                <div class="flex items-center space-x-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <span>contact@techsolutionspro.com</span>
                </div>
                <div class="flex items-center space-x-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    <span>+1 (555) 123-4567</span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection