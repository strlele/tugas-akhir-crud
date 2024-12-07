@extends('layout.main')

@section('section')
<section id="contact" class="bg-gray-50 flex items-center justify-center min-h-screen">
    <div class="container mx-auto px-6 flex flex-wrap sm:flex-nowrap">
        <!-- Map Section -->
        <div class="lg:w-2/3 md:w-1/2 bg-gray-100 rounded-xl shadow-lg overflow-hidden sm:mr-10 p-6 flex items-end justify-start relative">
            <iframe 
                class="absolute inset-0 rounded-xl border-0" 
                title="map" 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.2084843255857!2d112.74578597382107!3d-7.767702892251581!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7d3c5631acbf5%3A0xa71d9f205034b481!2sSMK%20Negeri%201%20Purwosari!5e0!3m2!1sid!2sid!4v1732971583399!5m2!1sid!2sid" 
                width="100%" 
                height="100%" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
            <div class="bg-white relative flex flex-wrap py-6 rounded-xl shadow-md z-10">
                <div class="lg:w-1/2 px-6">
                    <h2 class="font-semibold text-gray-700 text-sm">Email</h2>
                    <a href="mailto:ChocoJooy@gmail.com" class="text-orange-600 hover:text-orange-800 text-sm">ChocoJooy@gmail.com</a>
                </div>
                <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                    <h2 class="font-semibold text-gray-700 text-sm">Phone</h2>
                    <a href="tel:000-000-000" class="text-orange-600 hover:text-orange-800 text-sm">000-000-000</a>
                </div>
            </div>
        </div>
        <!-- Contact Form -->
        <div class="lg:w-1/3 md:w-1/2 bg-white rounded-xl shadow-lg flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0 p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Contact Us</h2>
            <p class="mb-6 text-gray-600">Have questions, suggestions, or just want to say hello? Drop us a message, and we’ll get back to you as soon as possible.</p>
            
            <!-- Form Start -->
            <form id="contact-form" method="POST">
                @csrf <!-- Token CSRF -->
                <!-- Name Field -->
                <div class="relative mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input 
                        type="text" 
                        id="name" 
                        name="name" 
                        class="mt-1 block w-full px-4 py-2 bg-gray-100 border border-gray-300 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent" 
                        required>
                </div>
                <!-- Email Field -->
                <div class="relative mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        class="mt-1 block w-full px-4 py-2 bg-gray-100 border border-gray-300 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent" 
                        required>
                </div>
                <!-- Message Field -->
                <div class="relative mb-4">
                    <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                    <textarea 
                        id="message" 
                        name="message" 
                        rows="4" 
                        class="mt-1 block w-full px-4 py-2 bg-gray-100 border border-gray-300 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent" 
                        required></textarea>
                </div>
                <!-- Submit Button -->
                <button 
                    type="submit" 
                    class="w-full py-2 text-white bg-orange-600 hover:bg-orange-700 rounded-lg text-lg font-medium transition-colors duration-200">
                    Submit
                </button>
            </form>
        </div>
    </div>
</section>

@endsection