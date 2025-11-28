<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GSS Solution Landing Page</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white text-gray-800">

    <div id="app">
        <header id="main-header" class="sticky top-0 z-50 text-white transition-colors duration-300">
            <div class="container mx-auto flex justify-between items-center p-4">
                <div id="logo" class="text-2xl font-bold text-white">GSS</div>
                <nav>
                    <a href="#" class="nav-link text-white hover:text-gray-200 px-4">Home</a>
                    <a href="#" class="nav-link text-white hover:text-gray-200 px-4">About</a>
                    <a href="#" class="nav-link text-white hover:text-gray-200 px-4">Services</a>
                    <a href="#" class="nav-link text-white hover:text-gray-200 px-4">Contact Us</a>
                </nav>
            </div>
        </header>

        <main>
            <section class="hero bg-cover bg-center h-screen text-white" style="background-image: url('/assets/hero-background.png');">
                <div class="container mx-auto flex flex-col items-center justify-center h-full text-center">
                    <h1 class="text-5xl font-extrabold mb-4">Empowering Your Business with Innovative Solutions</h1>
                    <p class="text-xl mb-8">We provide the best services for your company's growth.</p>
                    <div>
                        <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg mr-4">Get Started</a>
                        <a href="#" class="bg-gray-700 hover:bg-gray-800 text-white font-bold py-3 px-6 rounded-lg">Learn More</a>
                    </div>
                </div>
            </section>

            <section class="about-us py-20 bg-gray-50">
                <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                    <div class="about-content">
                        <h2 class="text-4xl font-bold mb-4">About GSS</h2>
                        <p class="text-gray-600 mb-6">
                            Global Software Solutions (GSS) is a leading provider of innovative technology solutions. Our mission is to empower businesses with the tools they need to succeed in a rapidly evolving digital landscape.
                        </p>
                        <p class="text-gray-600">
                            Founded in 2010, we have consistently delivered high-quality software products and services to a diverse clientele, ranging from startups to Fortune 500 companies. Our team of experts is dedicated to excellence and customer satisfaction.
                        </p>
                    </div>
                    <div class="about-stats grid grid-cols-2 gap-8 text-center">
                        <div>
                            <span class="block text-4xl font-bold text-blue-600">10+</span>
                            <span class="text-gray-500">Years of Experience</span>
                        </div>
                        <div>
                            <span class="block text-4xl font-bold text-blue-600">500+</span>
                            <span class="text-gray-500">Satisfied Clients</span>
                        </div>
                        <div>
                            <span class="block text-4xl font-bold text-blue-600">1000+</span>
                            <span class="text-gray-500">Projects Completed</span>
                        </div>
                        <div>
                            <span class="block text-4xl font-bold text-blue-600">99%</span>
                            <span class="text-gray-500">Customer Retention</span>
                        </div>
                    </div>
                </div>
            </section>
            <section class="vision-mission py-20">
                <div class="container mx-auto text-center">
                    <h2 class="text-4xl font-bold mb-4">Our Vision</h2>
                    <p class="text-gray-600 max-w-3xl mx-auto mb-12">
                        To be the leading partner in digital transformation, empowering businesses to achieve their full potential through innovative technology, strategic insights, and unwavering commitment to excellence. We envision a future where technology seamlessly integrates with business to create sustainable growth and a smarter world.
                    </p>

                    <h3 class="text-3xl font-bold mb-8">Mission & Goals</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <!-- Card 1: Client Success -->
                        <div class="card bg-white p-8 rounded-lg shadow-md">
                            <div class="w-16 h-16 bg-blue-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                                <!-- Placeholder for icon -->
                                <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 2v.01"></path></svg>
                            </div>
                            <h4 class="text-2xl font-semibold mb-2">Client Success</h4>
                            <p class="text-gray-600">Our primary goal is to ensure the success of our clients through tailored IT solutions and unwavering support.</p>
                        </div>
                        <!-- Card 2: Innovation -->
                        <div class="card bg-white p-8 rounded-lg shadow-md">
                            <div class="w-16 h-16 bg-blue-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                                <!-- Placeholder for icon -->
                                <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.636 6.364l.707-.707M19.071 4.929l-.707.707"></path></svg>
                            </div>
                            <h4 class="text-2xl font-semibold mb-2">Innovation</h4>
                            <p class="text-gray-600">We are committed to continuous innovation, leveraging cutting-edge technology to solve complex business challenges.</p>
                        </div>
                        <!-- Card 3: Integrity -->
                        <div class="card bg-white p-8 rounded-lg shadow-md">
                            <div class="w-16 h-16 bg-blue-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                                <!-- Placeholder for icon -->
                                <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                            </div>
                            <h4 class="text-2xl font-semibold mb-2">Integrity</h4>
                            <p class="text-gray-600">We operate with the highest level of integrity, building trust through transparent and ethical practices.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="services py-20 bg-gray-50">
                <div class="container mx-auto text-center">
                    <h2 class="text-4xl font-bold mb-4">What We Offer</h2>
                    <p class="text-gray-600 max-w-3xl mx-auto mb-12">
                        We provide a comprehensive suite of IT services designed to elevate your business operations and drive growth.
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Service Card 1: Cloud Solutions -->
                        <div class="card bg-white p-8 rounded-lg shadow-md">
                            <div class="w-16 h-16 bg-blue-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                                <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path></svg>
                            </div>
                            <h4 class="text-2xl font-semibold mb-2">Cloud Solutions</h4>
                            <p class="text-gray-600">Scalable and secure cloud infrastructure to power your applications and data.</p>
                        </div>
                        <!-- Service Card 2: Cybersecurity -->
                        <div class="card bg-white p-8 rounded-lg shadow-md">
                            <div class="w-16 h-16 bg-blue-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                                <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                            </div>
                            <h4 class="text-2xl font-semibold mb-2">Cybersecurity</h4>
                            <p class="text-gray-600">Protecting your digital assets with advanced threat detection and prevention services.</p>
                        </div>
                        <!-- Service Card 3: Data Analytics -->
                        <div class="card bg-white p-8 rounded-lg shadow-md">
                            <div class="w-16 h-16 bg-blue-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                                <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V7a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                            </div>
                            <h4 class="text-2xl font-semibold mb-2">Data Analytics</h4>
                            <p class="text-gray-600">Transforming raw data into actionable insights for strategic decision-making.</p>
                        </div>
                        <!-- Service Card 4: Managed IT Services -->
                        <div class="card bg-white p-8 rounded-lg shadow-md">
                            <div class="w-16 h-16 bg-blue-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                                <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 15l-4 4m0 0l-4-4m4 4V3m0 12h8m-8 0H4m8 4l4-4m0 0l4 4m-4-4V3"></path></svg>
                            </div>
                            <h4 class="text-2xl font-semibold mb-2">Managed IT Services</h4>
                            <p class="text-gray-600">Proactive IT management and support to keep your systems running smoothly.</p>
                        </div>
                        <!-- Service Card 5: Software Development -->
                        <div class="card bg-white p-8 rounded-lg shadow-md">
                            <div class="w-16 h-16 bg-blue-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                                <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <h4 class="text-2xl font-semibold mb-2">Software Development</h4>
                            <p class="text-gray-600">Custom software solutions built to address your unique business needs and challenges.</p>
                        </div>
                        <!-- Service Card 6: IT Consulting -->
                        <div class="card bg-white p-8 rounded-lg shadow-md">
                            <div class="w-16 h-16 bg-blue-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                                <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            </div>
                            <h4 class="text-2xl font-semibold mb-2">IT Consulting</h4>
                            <p class="text-gray-600">Expert guidance to help you navigate the complexities of the IT landscape.</p>
                        </div>
                    </div>
                    <div class="mt-12">
                        <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg text-lg">
                            Explore Our Solutions
                            <svg class="inline-block w-6 h-6 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </div>
                </div>
            </section>
        </main>
        <section class="get-in-touch py-20 bg-white">
            <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-start">
                <div class="contact-info">
                    <h2 class="text-4xl font-bold mb-4">Get in Touch</h2>
                    <p class="text-gray-600 mb-8">
                        Fill out the form below or use our contact details to reach us directly. We're here to help build your next solution.
                    </p>
                    <div class="flex items-start mb-6">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>
                        <div>
                            <h4 class="text-xl font-semibold">Our Office</h4>
                            <p class="text-gray-600">123 Tech Avenue, Suite 100<br>Innovation City, IN 46202</p>
                        </div>
                    </div>
                    <div class="flex items-start mb-6">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        </div>
                        <div>
                            <h4 class="text-xl font-semibold">Phone</h4>
                            <p class="text-gray-600">+1 (555) 123-4567</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                        <div>
                            <h4 class="text-xl font-semibold">Email</h4>
                            <p class="text-gray-600">support@gsssolution.com</p>
                        </div>
                    </div>
                </div>
                <div class="contact-form bg-gray-50 p-8 rounded-lg shadow-md">
                    <form>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="full_name" class="block text-gray-700 font-semibold mb-2">Full Name</label>
                                <input type="text" id="full_name" name="full_name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="John Doe">
                            </div>
                            <div>
                                <label for="company_name" class="block text-gray-700 font-semibold mb-2">Company Name</label>
                                <input type="text" id="company_name" name="company_name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Your Company Inc.">
                            </div>
                        </div>
                        <div class="mb-6">
                            <label for="email" class="block text-gray-700 font-semibold mb-2">Email Address</label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="you@example.com">
                        </div>
                        <div class="mb-6">
                            <label for="message" class="block text-gray-700 font-semibold mb-2">Your Message</label>
                            <textarea id="message" name="message" rows="5" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Describe your project or inquiry here..."></textarea>
                        </div>
                        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </section>

        <footer class="bg-gray-800 text-white py-12">
            <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="footer-about">
                    <h3 class="text-2xl font-bold mb-4">GSS Solution</h3>
                    <p class="text-gray-400">
                        Your trusted partner in IT consulting and technology solutions, driving innovation and growth.
                    </p>
                    <div class="flex space-x-4 mt-4">
                        <a href="#" class="text-gray-400 hover:text-white"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"></path></svg></a>
                        <a href="#" class="text-gray-400 hover:text-white"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616v.064c0 2.298 1.634 4.212 3.793 4.649-.65.177-1.354.23-2.06.088.621 1.952 2.422 3.372 4.556 3.408-1.622 1.272-3.662 2.03-5.88 2.03-.38 0-.755-.022-1.124-.067 2.094 1.344 4.585 2.12 7.24 2.12 8.683 0 13.44-7.22 13.44-13.44 0-.204-.005-.407-.014-.61a9.619 9.619 0 002.353-2.44z"></path></svg></a>
                    </div>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">NAVIGATION</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">About</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Services</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Case Studies</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">LEGAL</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Privacy Policy</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Terms of Service</a></li>
                    </ul>
                </div>
            </div>
            <div class="container mx-auto text-center mt-8 border-t border-gray-700 pt-6">
                <p class="text-gray-500">&copy; 2024 GSS Solution. All Rights Reserved.</p>
            </div>
        </footer>
    </div>

    @vite('resources/js/app.js')
</body>
</html>
