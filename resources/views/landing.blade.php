<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GSS Solution Landing Page</title>
    <meta name="description"
        content="Global Software Solutions (GSS) is a leading provider of innovative technology solutions.">
    <meta name="keywords" content="GSS, Global Software Solutions, IT Solutions, Technology, Software Development">
    <meta name="author" content="GSS Solution">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
    @vite('resources/css/app.css')
</head>

<body class="text-gray-800 bg-white dark:bg-gray-900 dark:text-gray-300">

    <div id="app">
        <header id="main-header" class="sticky top-0 z-50 text-white transition-colors duration-300">
            <div class="container flex justify-between items-center p-4 mx-auto">
                <div id="logo">
                    <a href="/">
                        <img src="{{ asset('assets/logo.png') }}" alt="GSS Logo" class="h-10">
                    </a>
                </div>
                <nav class="hidden items-center space-x-4 md:flex">
                    <a href="#home" class="px-4 text-gray-600 dark:text-white nav-link hover:text-blue-500">Home</a>
                    <a href="#about" class="px-4 text-gray-600 dark:text-white nav-link hover:text-blue-500">About</a>
                    <a href="#services"
                        class="px-4 text-gray-600 dark:text-white nav-link hover:text-blue-500">Services</a>
                    <a href="#contact" class="px-4 text-gray-600 dark:text-white nav-link hover:text-blue-500">Contact
                        Us</a>
                    <button id="dark-mode-toggle"
                        class="p-2 text-gray-600 rounded-full dark:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                        <x-lucide-sun id="sun-icon" class="w-6 h-6" />
                        <x-lucide-moon id="moon-icon" class="hidden w-6 h-6" />
                    </button>
                </nav>
                <div class="flex items-center md:hidden">
                    <button id="dark-mode-toggle-mobile"
                        class="p-2 mr-2 text-gray-600 rounded-full dark:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                        <x-lucide-sun id="sun-icon-mobile" class="w-6 h-6" />
                        <x-lucide-moon id="moon-icon-mobile" class="hidden w-6 h-6" />
                    </button>
                    <button id="mobile-menu-button" class="text-gray-600 dark:text-white focus:outline-none">
                        <x-lucide-menu class="w-6 h-6" />
                    </button>
                </div>
            </div>
            <nav id="mobile-menu" class="hidden bg-gray-800 bg-opacity-75 md:hidden dark:bg-gray-900">
                <a href="#home" class="block px-4 py-2 text-sm text-white hover:bg-gray-700">Home</a>
                <a href="#about" class="block px-4 py-2 text-sm text-white hover:bg-gray-700">About</a>
                <a href="#services" class="block px-4 py-2 text-sm text-white hover:bg-gray-700">Services</a>
                <a href="#contact" class="block px-4 py-2 text-sm text-white hover:bg-gray-700">Contact Us</a>
            </nav>
        </header>

        <main>
            <section id="home" class="h-screen text-white bg-center bg-cover hero"
                style="background-image: linear-gradient(to right, rgba(37, 99, 235, 0.8), rgba(23, 37, 84, 0.8)), url('{{ asset('assets/hero-background.png') }}');">
                <div class="container flex flex-col justify-center items-center px-4 mx-auto h-full text-center">
                    <h1 class="mb-4 text-4xl font-extrabold md:text-5xl animate-fade-in-down">Empowering Your Business
                        with Innovative Solutions</h1>
                    <p class="mb-8 text-lg md:text-xl animate-fade-in-up">We provide the best services for your
                        company's growth.</p>
                    <div class="animate-fade-in">
                        <a href="#"
                            class="px-6 py-3 mr-4 font-bold text-white bg-blue-600 rounded-lg hover:bg-blue-700">Get
                            Started</a>
                        <a href="#"
                            class="px-6 py-3 font-bold text-white bg-gray-700 rounded-lg hover:bg-gray-800">Learn
                            More</a>
                    </div>
                </div>
            </section>

            <section id="about" class="py-16 bg-gray-50 md:py-20 about-us dark:bg-gray-800">
                <div class="container grid grid-cols-1 gap-12 items-center px-4 mx-auto md:grid-cols-2">
                    <div class="about-content animate-on-scroll" data-animation="animate__fadeInLeft">
                        <h2 class="mb-4 text-3xl font-bold md:text-4xl dark:text-white">About GSS</h2>
                        <p class="mb-6 text-gray-600 dark:text-gray-400">
                            Global Software Solutions (GSS) is a leading provider of innovative technology solutions.
                            Our mission is to empower businesses with the tools they need to succeed in a rapidly
                            evolving digital landscape.
                        </p>
                        <p class="text-gray-600 dark:text-gray-400">
                            Founded in 2010, we have consistently delivered high-quality software products and services
                            to a diverse clientele, ranging from startups to Fortune 500 companies. Our team of experts
                            is dedicated to excellence and customer satisfaction.
                        </p>
                    </div>
                    <div class="grid grid-cols-2 gap-8 text-center about-stats animate-on-scroll" data-animation="animate__fadeInRight">
                        <div>
                            <span class="block text-4xl font-bold text-blue-600 dark:text-blue-400">10+</span>
                            <span class="text-gray-500 dark:text-gray-400">Years of Experience</span>
                        </div>
                        <div>
                            <span class="block text-4xl font-bold text-blue-600 dark:text-blue-400">500+</span>
                            <span class="text-gray-500 dark:text-gray-400">Satisfied Clients</span>
                        </div>
                        <div>
                            <span class="block text-4xl font-bold text-blue-600 dark:text-blue-400">1000+</span>
                            <span class="text-gray-500 dark:text-gray-400">Projects Completed</span>
                        </div>
                        <div>
                            <span class="block text-4xl font-bold text-blue-600 dark:text-blue-400">99%</span>
                            <span class="text-gray-500 dark:text-gray-400">Customer Retention</span>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-16 md:py-20 vision-mission dark:bg-gray-900">
                <div class="container px-4 mx-auto text-center">
                    <h2 class="mb-4 text-3xl font-bold md:text-4xl animate-on-scroll dark:text-white" data-animation="animate__fadeInDown">Our Vision</h2>
                    <p class="mx-auto mb-12 max-w-3xl text-gray-600 animate-on-scroll dark:text-gray-400" data-animation="animate__fadeInUp">
                        To be the leading partner in digital transformation, empowering businesses to achieve their full
                        potential through innovative technology, strategic insights, and unwavering commitment to
                        excellence. We envision a future where technology seamlessly integrates with business to create
                        sustainable growth and a smarter world.
                    </p>

                    <h3 class="mb-8 text-2xl font-bold md:text-3xl animate-on-scroll dark:text-white" data-animation="animate__fadeInUp">Mission & Goals
                    </h3>
                    <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                        <!-- Card 1: Client Success -->
                        <div class="p-8 bg-white rounded-lg shadow-md card animate-on-scroll dark:bg-gray-800" data-animation="animate__zoomIn">
                            <div
                                class="flex justify-center items-center mx-auto mb-4 w-16 h-16 bg-blue-100 rounded-full dark:bg-blue-900">
                                <x-lucide-users class="w-8 h-8 text-blue-500 dark:text-blue-400" />
                            </div>
                            <h4 class="mb-2 text-2xl font-semibold dark:text-white">Client Success</h4>
                            <p class="text-gray-600 dark:text-gray-400">Our primary goal is to ensure the success of
                                our clients through
                                tailored IT solutions and unwavering support.</p>
                        </div>
                        <!-- Card 2: Innovation -->
                        <div class="p-8 bg-white rounded-lg shadow-md card animate-on-scroll dark:bg-gray-800" data-animation="animate__zoomIn" data-animation-delay="200">
                            <div
                                class="flex justify-center items-center mx-auto mb-4 w-16 h-16 bg-blue-100 rounded-full dark:bg-blue-900">
                                <x-lucide-lightbulb class="w-8 h-8 text-blue-500 dark:text-blue-400" />
                            </div>
                            <h4 class="mb-2 text-2xl font-semibold dark:text-white">Innovation</h4>
                            <p class="text-gray-600 dark:text-gray-400">We are committed to continuous innovation,
                                leveraging cutting-edge
                                technology to solve complex business challenges.</p>
                        </div>
                        <!-- Card 3: Integrity -->
                        <div class="p-8 bg-white rounded-lg shadow-md card animate-on-scroll dark:bg-gray-800" data-animation="animate__zoomIn" data-animation-delay="400">
                            <div
                                class="flex justify-center items-center mx-auto mb-4 w-16 h-16 bg-blue-100 rounded-full dark:bg-blue-900">
                                <x-lucide-shield-check class="w-8 h-8 text-blue-500 dark:text-blue-400" />
                            </div>
                            <h4 class="mb-2 text-2xl font-semibold dark:text-white">Integrity</h4>
                            <p class="text-gray-600 dark:text-gray-400">We operate with the highest level of integrity,
                                building trust
                                through transparent and ethical practices.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section id="services" class="py-16 bg-gray-50 md:py-20 services dark:bg-gray-800">
                <div class="container px-4 mx-auto text-center">
                    <h2 class="mb-4 text-3xl font-bold md:text-4xl animate-on-scroll dark:text-white" data-animation="animate__fadeInDown">What We Offer
                    </h2>
                    <p class="mx-auto mb-12 max-w-3xl text-gray-600 animate-on-scroll dark:text-gray-400" data-animation="animate__fadeInUp">
                        We provide a comprehensive suite of IT services designed to elevate your business operations and
                        drive growth.
                    </p>
                    <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                        <!-- Service Card 1: Cloud Solutions -->
                        <div class="p-8 bg-white rounded-lg shadow-md card animate-on-scroll dark:bg-gray-900" data-animation="animate__fadeInUp">
                            <div
                                class="flex justify-center items-center mx-auto mb-4 w-16 h-16 bg-blue-100 rounded-full dark:bg-blue-900">
                                <x-lucide-cloud class="w-8 h-8 text-blue-500 dark:text-blue-400" />
                            </div>
                            <h4 class="mb-2 text-2xl font-semibold dark:text-white">Cloud Solutions</h4>
                            <p class="text-gray-600 dark:text-gray-400">Scalable and secure cloud infrastructure to
                                power your
                                applications and data.</p>
                        </div>
                        <!-- Service Card 2: Cybersecurity -->
                        <div class="p-8 bg-white rounded-lg shadow-md card animate-on-scroll dark:bg-gray-900" data-animation="animate__fadeInUp" data-animation-delay="200">
                            <div
                                class="flex justify-center items-center mx-auto mb-4 w-16 h-16 bg-blue-100 rounded-full dark:bg-blue-900">
                                <x-lucide-shield class="w-8 h-8 text-blue-500 dark:text-blue-400" />
                            </div>
                            <h4 class="mb-2 text-2xl font-semibold dark:text-white">Cybersecurity</h4>
                            <p class="text-gray-600 dark:text-gray-400">Protecting your digital assets with advanced
                                threat detection and
                                prevention services.</p>
                        </div>
                        <!-- Service Card 3: Data Analytics -->
                        <div class="p-8 bg-white rounded-lg shadow-md card animate-on-scroll dark:bg-gray-900" data-animation="animate__fadeInUp" data-animation-delay="400">
                            <div
                                class="flex justify-center items-center mx-auto mb-4 w-16 h-16 bg-blue-100 rounded-full dark:bg-blue-900">
                                <x-lucide-bar-chart-2 class="w-8 h-8 text-blue-500 dark:text-blue-400" />
                            </div>
                            <h4 class="mb-2 text-2xl font-semibold dark:text-white">Data Analytics</h4>
                            <p class="text-gray-600 dark:text-gray-400">Transforming raw data into actionable insights
                                for strategic
                                decision-making.</p>
                        </div>
                        <!-- Service Card 4: Managed IT Services -->
                        <div class="p-8 bg-white rounded-lg shadow-md card animate-on-scroll dark:bg-gray-900" data-animation="animate__fadeInUp">
                            <div
                                class="flex justify-center items-center mx-auto mb-4 w-16 h-16 bg-blue-100 rounded-full dark:bg-blue-900">
                                <x-lucide-server class="w-8 h-8 text-blue-500 dark:text-blue-400" />
                            </div>
                            <h4 class="mb-2 text-2xl font-semibold dark:text-white">Managed IT Services</h4>
                            <p class="text-gray-600 dark:text-gray-400">Proactive IT management and support to keep
                                your systems running
                                smoothly.</p>
                        </div>
                        <!-- Service Card 5: Software Development -->
                        <div class="p-8 bg-white rounded-lg shadow-md card animate-on-scroll dark:bg-gray-900" data-animation="animate__fadeInUp" data-animation-delay="200">
                            <div
                                class="flex justify-center items-center mx-auto mb-4 w-16 h-16 bg-blue-100 rounded-full dark:bg-blue-900">
                                <x-lucide-code class="w-8 h-8 text-blue-500 dark:text-blue-400" />
                            </div>
                            <h4 class="mb-2 text-2xl font-semibold dark:text-white">Software Development</h4>
                            <p class="text-gray-600 dark:text-gray-400">Custom software solutions built to address your
                                unique business
                                needs and challenges.</p>
                        </div>
                        <!-- Service Card 6: IT Consulting -->
                        <div class="p-8 bg-white rounded-lg shadow-md card animate-on-scroll dark:bg-gray-900" data-animation="animate__fadeInUp" data-animation-delay="400">
                            <div
                                class="flex justify-center items-center mx-auto mb-4 w-16 h-16 bg-blue-100 rounded-full dark:bg-blue-900">
                                <x-lucide-briefcase class="w-8 h-8 text-blue-500 dark:text-blue-400" />
                            </div>
                            <h4 class="mb-2 text-2xl font-semibold dark:text-white">IT Consulting</h4>
                            <p class="text-gray-600 dark:text-gray-400">Expert guidance to help you navigate the
                                complexities of the IT
                                landscape.</p>
                        </div>
                    </div>
                    <div class="mt-12 animate-on-scroll" data-animation="animate__tada">
                        <a href="#"
                            class="px-6 py-3 text-lg font-bold text-white bg-blue-600 rounded-lg hover:bg-blue-700">
                            Explore Our Solutions
                            <x-lucide-arrow-right class="inline-block ml-2 w-6 h-6" />
                        </a>
                    </div>
                </div>
            </section>
        </main>
        <section id="contact" class="py-16 bg-white md:py-20 get-in-touch dark:bg-gray-800">
            <div class="container grid grid-cols-1 gap-12 items-start px-4 mx-auto md:grid-cols-2">
                <div class="contact-info animate-on-scroll" data-animation="animate__fadeInLeft">
                    <h2 class="mb-4 text-3xl font-bold md:text-4xl dark:text-white">Get in Touch</h2>
                    <p class="mb-8 text-gray-600 dark:text-gray-400">
                        Fill out the form below or use our contact details to reach us directly. We're here to help
                        build your next solution.
                    </p>
                    <div class="flex items-start mb-6">
                        <div class="flex justify-center items-center mr-4 w-12 h-12 bg-blue-100 rounded-full">
                            <x-lucide-map-pin class="w-6 h-6 text-blue-500" />
                        </div>
                        <div>
                            <h4 class="text-xl font-semibold dark:text-white">Our Office</h4>
                            <p class="text-gray-600 dark:text-gray-400">Jln. H. Dahlan. Mampang Prapatan. Jakarta
                                Selatan. Indonesia</p>
                        </div>
                    </div>
                    <div class="flex items-start mb-6">
                        <div class="flex justify-center items-center mr-4 w-12 h-12 bg-blue-100 rounded-full">
                            <x-lucide-phone class="w-6 h-6 text-blue-500" />
                        </div>
                        <div>
                            <h4 class="text-xl font-semibold dark:text-white">Phone</h4>
                            <p class="text-gray-600 dark:text-gray-400">+62 813-8500-0701</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="flex justify-center items-center mr-4 w-12 h-12 bg-blue-100 rounded-full">
                            <x-lucide-mail class="w-6 h-6 text-blue-500" />
                        </div>
                        <div>
                            <h4 class="text-xl font-semibold dark:text-white">Email</h4>
                            <p class="text-gray-600 dark:text-gray-400">cs@gss-solution.com</p>
                        </div>
                    </div>
                </div>
                <div class="p-8 bg-gray-50 rounded-lg shadow-md contact-form animate-on-scroll dark:bg-gray-900" data-animation="animate__fadeInRight">
                    @if (session('success'))
                        <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
                            role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('contact.submit') }}">
                        @csrf
                        <div class="grid grid-cols-1 gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="full_name"
                                    class="block mb-2 font-semibold text-gray-700 dark:text-gray-300">Full
                                    Name</label>
                                <input type="text" id="full_name" name="full_name"
                                    class="px-4 py-2 w-full rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-300"
                                    placeholder="John Doe">
                            </div>
                            <div>
                                <label for="company_name"
                                    class="block mb-2 font-semibold text-gray-700 dark:text-gray-300">Company
                                    Name</label>
                                <input type="text" id="company_name" name="company_name"
                                    class="px-4 py-2 w-full rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-300"
                                    placeholder="Your Company Inc.">
                            </div>
                        </div>
                        <div class="mb-6">
                            <label for="email"
                                class="block mb-2 font-semibold text-gray-700 dark:text-gray-300">Email Address</label>
                            <input type="email" id="email" name="email"
                                class="px-4 py-2 w-full rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-300"
                                placeholder="you@example.com">
                        </div>
                        <div class="mb-6">
                            <label for="message"
                                class="block mb-2 font-semibold text-gray-700 dark:text-gray-300">Your Message</label>
                            <textarea id="message" name="message" rows="5"
                                class="px-4 py-2 w-full rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-300"
                                placeholder="Describe your project or inquiry here..."></textarea>
                        </div>
                        <button type="submit"
                            class="px-6 py-3 w-full font-bold text-white bg-blue-600 rounded-lg hover:bg-blue-700">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </section>

        <footer class="py-12 text-white bg-gray-800 dark:bg-black">
            <div class="container grid grid-cols-1 gap-8 px-4 mx-auto md:grid-cols-4">
                <div class="footer-about">
                    <h3 class="mb-4 text-2xl font-bold">GSS Solution</h3>
                    <p class="text-gray-400">
                        Your trusted partner in IT consulting and technology solutions, driving innovation and growth.
                    </p>
                    <div class="flex mt-4 space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white">
                            <x-lucide-linkedin class="w-6 h-6" />
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <x-lucide-twitter class="w-6 h-6" />
                        </a>
                    </div>
                </div>
                <div>
                    <h4 class="mb-4 text-lg font-semibold">NAVIGATION</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">About</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Services</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Case Studies</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="mb-4 text-lg font-semibold">LEGAL</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Privacy Policy</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Terms of Service</a></li>
                    </ul>
                </div>
            </div>
            <div class="container pt-6 mx-auto mt-8 text-center border-t border-gray-700">
                <p class="text-gray-500">&copy; 2024 GSS Solution. All Rights Reserved.</p>
            </div>
        </footer>
    </div>
    @vite('resources/js/app.js')
</body>

</html>
