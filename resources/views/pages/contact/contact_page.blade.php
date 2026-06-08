@extends('layouts.app')

@section('title', 'Contact Us - St John of God University')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-r from-red-700 to-red-800 text-white py-16">
    <div class="container mx-auto px-4 md:px-16 text-center">
        <div class="inline-flex items-center justify-center w-16 h-16 bg-white/20 rounded-2xl mb-4">
            <i class="fas fa-envelope text-white text-2xl"></i>
        </div>
        <h1 class="text-3xl md:text-5xl font-bold mb-4">Contact <span class="text-yellow-300">Us</span></h1>
        <div class="w-24 h-1 bg-yellow-300 mx-auto rounded-full mb-6"></div>
        <p class="text-lg md:text-xl max-w-3xl mx-auto text-red-100">
            Get in touch with us. We're here to help!
        </p>
    </div>
</section>

<!-- Get in Touch Content (Moved from Home Page) -->
<section class="py-16 px-4 md:px-16 bg-white">
    <div class="container mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Get In <span class="text-red-600">Touch</span></h2>
            <div class="w-20 h-1 bg-red-600 mx-auto rounded-full mb-6"></div>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Have questions about admissions, programs, or anything else? We're here to help. Reach out to us through any of the channels below.
            </p>
        </div>

        <!-- Contact Information Cards -->
        <div class="grid md:grid-cols-3 gap-8 mb-12">
            <!-- Phone -->
            <div class="text-center p-6 bg-gray-50 rounded-xl hover:shadow-lg transition group">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-red-600 transition">
                    <i class="fas fa-phone-alt text-red-600 text-2xl group-hover:text-white transition"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Phone</h3>
                <p class="text-gray-600">+265 991 887 119</p>
                <p class="text-gray-600">+265 1 311 690</p>
                <p class="text-sm text-gray-500 mt-2">Mon-Fri, 8:00 AM - 5:00 PM</p>
            </div>

            <!-- Email -->
            <div class="text-center p-6 bg-gray-50 rounded-xl hover:shadow-lg transition group">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-red-600 transition">
                    <i class="fas fa-envelope text-red-600 text-2xl group-hover:text-white transition"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Email</h3>
                <p class="text-gray-600">collegehs@sjog.mw</p>
                <p class="text-gray-600">admissions@sjog.mw</p>
                <p class="text-sm text-gray-500 mt-2">We respond within 24-48 hours</p>
            </div>

            <!-- Location -->
            <div class="text-center p-6 bg-gray-50 rounded-xl hover:shadow-lg transition group">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-red-600 transition">
                    <i class="fas fa-map-marker-alt text-red-600 text-2xl group-hover:text-white transition"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Location</h3>
                <p class="text-gray-600">St John of God University</p>
                <p class="text-gray-600">Mzuzu, Malawi</p>
                <p class="text-sm text-gray-500 mt-2">Main Campus</p>
            </div>
        </div>

        <!-- Google Map (Without Contact Form) -->
        <div class="bg-gray-50 rounded-xl overflow-hidden shadow-md">
            <div class="bg-red-600 px-6 py-3">
                <h3 class="text-white font-semibold flex items-center gap-2">
                    <i class="fas fa-map-marked-alt"></i>
                    Our Campus Location
                </h3>
            </div>
            <div class="h-[400px] w-full">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63080.123456789!2d33.983333!3d-11.45!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x192f8b7c9a3e2f1d%3A0x4e7f8b7c9a3e2f1!2sMzuzu%2C%20Malawi!5e0!3m2!1sen!2s!4v1700000000000!5m2!1sen!2s" 
                    width="100%" 
                    height="400" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade"
                    title="St John of God University Campus Location Map">
                </iframe>
            </div>
            <div class="p-4 bg-white border-t">
                <div class="flex flex-col gap-2 text-center">
                    <p class="text-sm text-gray-600 flex items-center justify-center gap-2">
                        <i class="fas fa-map-pin text-red-600"></i>
                        <span>Saint John of God College of Health Sciences, Mzuzu, Malawi</span>
                    </p>
                    <div class="flex flex-wrap items-center justify-center gap-4 text-sm">
                        <p class="text-gray-500">
                            <i class="fas fa-phone-alt mr-1 text-red-500"></i> +265 991 887 119
                        </p>
                        <p class="text-gray-500">
                            <i class="fas fa-envelope mr-1 text-red-500"></i> collegehs@sjog.mw
                        </p>
                    </div>
                    <a href="https://maps.app.goo.gl/yBt5yjpRfB4h658s6" 
                       target="_blank" 
                       rel="noopener noreferrer" 
                       class="text-sm text-red-600 hover:text-red-700 mt-2 inline-flex items-center justify-center gap-1">
                        <i class="fas fa-external-link-alt"></i>
                        Open in Google Maps for accurate directions
                    </a>
                </div>
            </div>
        </div>

       
    </div>
</section>

<script>
    function toggleFAQ(button) {
        const answer = button.nextElementSibling;
        const icon = button.querySelector('i');
        answer.classList.toggle('hidden');
        icon.classList.toggle('fa-chevron-down');
        icon.classList.toggle('fa-chevron-up');
    }
</script>
@endsection