@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section id="home" class="gradient-bg pt-28 pb-20">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 text-white mb-10 md:mb-0">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Orders Since 2025</h1>
                <p class="text-xl mb-8">Membangun solusi digital inovatif untuk masa depan</p>
                <div class="flex flex-col sm:flex-row space-y-3 sm:space-y-0 sm:space-x-4">
                    <a href="#contact" class="bg-white text-orange-600 font-medium py-2 px-6 rounded-lg hover:bg-gray-100 transition text-center">Hubungi Kami</a>
                    <a href="#services" class="border border-white text-white font-medium py-2 px-6 rounded-lg hover:bg-white hover:text-orange-600 transition text-center">Layanan Kami</a>
                </div>
            </div>
            <div class="md:w-1/2 flex justify-center">
                <img src="{{ asset('images/25.png') }}" alt="Logo" class="w-full max-w-md" />
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Tentang Kami</h2>
            <div class="w-24 h-1 bg-orange-500 mx-auto"></div>
        </div>
        <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-10 md:mb-0">
                <div class="relative">
                    <div class="w-full h-64 md:h-96 bg-orange-100 rounded-lg relative z-10 overflow-hidden">
                        <img src="{{ asset('images/25.png') }}" alt="Logo" class="w-full max-w-md" />
                    </div>
                    <div class="absolute -bottom-4 -right-4 w-64 h-64 bg-orange-500 rounded-lg opacity-20"></div>
                </div>
            </div>

            <div class="md:w-1/2 md:pl-10">
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Kelompok Developer yang Berinovasi</h3>
                <p class="text-gray-600 mb-6">Orders adalah kelompok developer yang lahir dari organisasi
                    kemahasiswaan HIMSIFOR yang berpartisipasi dalam PPK Ormawa 2024. Kami memulai perjalanan kami
                    dengan semangat inovasi dan tekad untuk menciptakan solusi digital yang berdampak.</p>
                <p class="text-gray-600 mb-6">Dengan keahlian dalam pengembangan website, aplikasi mobile, dan
                    berbagai solusi teknologi lainnya, kami berkomitmen untuk memberikan layanan terbaik kepada
                    klien dan mitra kami.</p>
                <div class="grid grid-cols-2 gap-4">
                    <div class="flex items-center">
                        <div class="w-12 h-12 rounded-full bg-orange-100 flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-orange-500" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-medium text-gray-800">Tim Profesional</h4>
                            <p class="text-sm text-gray-600">Developer berpengalaman</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="w-12 h-12 rounded-full bg-orange-100 flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-orange-500" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-medium text-gray-800">Solusi Cepat</h4>
                            <p class="text-sm text-gray-600">Pengerjaan tepat waktu</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="w-12 h-12 rounded-full bg-orange-100 flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-orange-500" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M6.672 1.911a1 1 0 10-1.932.518l.259.966a1 1 0 001.932-.518l-.26-.966zM2.429 4.74a1 1 0 10-.517 1.932l.966.259a1 1 0 00.517-1.932l-.966-.26zm8.814-.569a1 1 0 00-1.415-1.414l-.707.707a1 1 0 101.415 1.415l.707-.708zm-7.071 7.072l.707-.707A1 1 0 003.465 9.12l-.708.707a1 1 0 001.415 1.415zm3.2-5.171a1 1 0 00-1.3 1.3l4 10a1 1 0 001.823.075l1.38-2.759 3.018 3.02a1 1 0 001.414-1.415l-3.019-3.02 2.76-1.379a1 1 0 00-.076-1.822l-10-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-medium text-gray-800">Desain Kreatif</h4>
                            <p class="text-sm text-gray-600">UI/UX yang menarik</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="w-12 h-12 rounded-full bg-orange-100 flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-orange-500" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z"
                                    clip-rule="evenodd"></path>
                                <path
                                    d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-medium text-gray-800">Dukungan Penuh</h4>
                            <p class="text-sm text-gray-600">Layanan purna jual</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Layanan Kami</h2>
            <div class="w-24 h-1 bg-orange-500 mx-auto mb-6"></div>
            <p class="text-gray-600 max-w-2xl mx-auto">Kami menyediakan berbagai layanan pengembangan teknologi
                untuk memenuhi kebutuhan bisnis dan organisasi Anda.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg shadow-lg p-8 transition duration-300 service-card card-hover">
                <div
                    class="w-16 h-16 rounded-full bg-orange-100 flex items-center justify-center mb-6 service-icon transition duration-300">
                    <svg class="w-8 h-8 text-orange-500" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a2 2 0 012-2h10a2 2 0 012 2v8a2 2 0 01-2 2h-2.22l.123.489.804.804A1 1 0 0113 18H7a1 1 0 01-.707-1.707l.804-.804L7.22 15H5a2 2 0 01-2-2V5zm5.771 7H5V5h10v7H8.771z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Pengembangan Website</h3>
                <p class="text-gray-600 mb-4">Kami membangun website responsif dengan desain modern dan
                    fungsionalitas yang sesuai dengan kebutuhan bisnis Anda.</p>
                <ul class="text-gray-600 space-y-2 mb-6">
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-orange-500 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Website Perusahaan
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-orange-500 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        E-commerce
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-orange-500 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Landing Page
                    </li>
                </ul>
                <a href="#contact"
                    class="text-orange-500 font-medium hover:text-orange-600 transition flex items-center">
                    Pelajari Lebih Lanjut
                    <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-8 transition duration-300 service-card card-hover">
                <div
                    class="w-16 h-16 rounded-full bg-orange-100 flex items-center justify-center mb-6 service-icon transition duration-300">
                    <svg class="w-8 h-8 text-orange-500" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z">
                        </path>
                        <path
                            d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707l-2-2A1 1 0 0015 7h-1z">
                        </path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Aplikasi Mobile</h3>
                <p class="text-gray-600 mb-4">Kami mengembangkan aplikasi mobile yang intuitif dan responsif untuk
                    platform Android dan iOS.</p>
                <ul class="text-gray-600 space-y-2 mb-6">
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-orange-500 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Aplikasi Android
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-orange-500 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Aplikasi iOS
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-orange-500 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Aplikasi Cross-Platform
                    </li>
                </ul>
                <a href="#contact"
                    class="text-orange-500 font-medium hover:text-orange-600 transition flex items-center">
                    Pelajari Lebih Lanjut
                    <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-8 transition duration-300 service-card card-hover">
                <div
                    class="w-16 h-16 rounded-full bg-orange-100 flex items-center justify-center mb-6 service-icon transition duration-300">
                    <svg class="w-8 h-8 text-orange-500" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Solusi Digital</h3>
                <p class="text-gray-600 mb-4">Kami menyediakan berbagai solusi digital untuk membantu bisnis Anda
                    berkembang di era digital.</p>
                <ul class="text-gray-600 space-y-2 mb-6">
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-orange-500 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Sistem Manajemen
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-orange-500 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Integrasi API
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-orange-500 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Konsultasi IT
                    </li>
                </ul>
                <a href="#contact"
                    class="text-orange-500 font-medium hover:text-orange-600 transition flex items-center">
                    Pelajari Lebih Lanjut
                    <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Partners Section -->
<section id="partners" class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Mitra Kami</h2>
            <div class="w-24 h-1 bg-orange-500 mx-auto mb-6"></div>
            <p class="text-gray-600 max-w-2xl mx-auto">Kami berkolaborasi dengan berbagai organisasi dan perusahaan
                untuk memberikan solusi terbaik.</p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            <div
                class="bg-gray-50 rounded-lg p-6 flex items-center justify-center h-32 transition duration-300 hover:shadow-lg">
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto bg-orange-100 rounded-full flex items-center justify-center mb-2">
                        <svg class="w-10 h-10 text-orange-500" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4zm3 1h6v4H7V5zm8 8v2h1v1H4v-1h1v-2a1 1 0 011-1h8a1 1 0 011 1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <p class="font-medium text-gray-800">HIMSIFOR</p>
                </div>
            </div>
            <div
                class="bg-gray-50 rounded-lg p-6 flex items-center justify-center h-32 transition duration-300 hover:shadow-lg">
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto bg-orange-100 rounded-full flex items-center justify-center mb-2">
                        <svg class="w-10 h-10 text-orange-500" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.496 2.132a1 1 0 00-.992 0l-7 4A1 1 0 003 8v7a1 1 0 100 2h14a1 1 0 100-2V8a1 1 0 00.496-1.868l-7-4zM6 9a1 1 0 00-1 1v3a1 1 0 102 0v-3a1 1 0 00-1-1zm3 1a1 1 0 012 0v3a1 1 0 11-2 0v-3zm5-1a1 1 0 00-1 1v3a1 1 0 102 0v-3a1 1 0 00-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <p class="font-medium text-gray-800">Universitas</p>
                </div>
            </div>
            <div
                class="bg-gray-50 rounded-lg p-6 flex items-center justify-center h-32 transition duration-300 hover:shadow-lg">
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto bg-orange-100 rounded-full flex items-center justify-center mb-2">
                        <svg class="w-10 h-10 text-orange-500" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                            <path
                                d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z">
                            </path>
                        </svg>
                    </div>
                    <p class="font-medium text-gray-800">Tech Corp</p>
                </div>
            </div>
            <div
                class="bg-gray-50 rounded-lg p-6 flex items-center justify-center h-32 transition duration-300 hover:shadow-lg">
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto bg-orange-100 rounded-full flex items-center justify-center mb-2">
                        <svg class="w-10 h-10 text-orange-500" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z">
                            </path>
                        </svg>
                    </div>
                    <p class="font-medium text-gray-800">PPK Ormawa</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Network Section -->
<section id="network" class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Jaringan Kami</h2>
            <div class="w-24 h-1 bg-orange-500 mx-auto mb-6"></div>
            <p class="text-gray-600 max-w-2xl mx-auto">Kami memiliki jaringan luas yang mencakup berbagai sektor dan
                industri.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white rounded-lg shadow-lg p-8">
                <h3 class="text-xl font-semibold text-gray-800 mb-6">Jaringan Akademis</h3>
                <div class="space-y-4">
                    <div class="flex items-start">
                        <div
                            class="w-10 h-10 rounded-full bg-orange-100 flex items-center justify-center mr-4 flex-shrink-0">
                            <svg class="w-5 h-5 text-orange-500" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-medium text-gray-800">Universitas dan Kampus</h4>
                            <p class="text-gray-600">Kami bekerja sama dengan berbagai universitas untuk
                                pengembangan teknologi dan riset.</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div
                            class="w-10 h-10 rounded-full bg-orange-100 flex items-center justify-center mr-4 flex-shrink-0">
                            <svg class="w-5 h-5 text-orange-500" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-medium text-gray-800">Komunitas Developer</h4>
                            <p class="text-gray-600">Kami aktif dalam berbagai komunitas developer untuk berbagi
                                pengetahuan dan pengalaman.</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div
                            class="w-10 h-10 rounded-full bg-orange-100 flex items-center justify-center mr-4 flex-shrink-0">
                            <svg class="w-5 h-5 text-orange-500" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-medium text-gray-800">Organisasi Mahasiswa</h4>
                            <p class="text-gray-600">Kami mendukung berbagai organisasi mahasiswa dalam
                                mengembangkan proyek teknologi.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-8">
                <h3 class="text-xl font-semibold text-gray-800 mb-6">Jaringan Industri</h3>
                <div class="space-y-4">
                    <div class="flex items-start">
                        <div
                            class="w-10 h-10 rounded-full bg-orange-100 flex items-center justify-center mr-4 flex-shrink-0">
                            <svg class="w-5 h-5 text-orange-500" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4zm3 1h6v4H7V5zm8 8v2h1v1H4v-1h1v-2a1 1 0 011-1h8a1 1 0 011 1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-medium text-gray-800">Perusahaan Teknologi</h4>
                            <p class="text-gray-600">Kami berkolaborasi dengan berbagai perusahaan teknologi untuk
                                mengembangkan solusi inovatif.</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div
                            class="w-10 h-10 rounded-full bg-orange-100 flex items-center justify-center mr-4 flex-shrink-0">
                            <svg class="w-5 h-5 text-orange-500" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z"
                                    clip-rule="evenodd"></path>
                                <path
                                    d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-medium text-gray-800">Startup</h4>
                            <p class="text-gray-600">Kami mendukung berbagai startup dalam mengembangkan produk
                                digital mereka.</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div
                            class="w-10 h-10 rounded-full bg-orange-100 flex items-center justify-center mr-4 flex-shrink-0">
                            <svg class="w-5 h-5 text-orange-500" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-medium text-gray-800">UMKM</h4>
                            <p class="text-gray-600">Kami membantu UMKM dalam transformasi digital untuk
                                meningkatkan daya saing mereka.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Hubungi Kami</h2>
                <div class="w-24 h-1 bg-orange-500 mx-auto mb-6"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">Tertarik untuk bekerja sama dengan kami? Jangan ragu untuk
                    menghubungi kami.</p>
            </div>
            <div class="flex flex-col md:flex-row">
                <div class="md:w-1/2 mb-10 md:mb-0 md:pr-8">
                    <div class="bg-gray-50 rounded-lg p-8 h-full">
                        <h3 class="text-xl font-semibold text-gray-800 mb-6">Informasi Kontak</h3>
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div
                                    class="w-10 h-10 rounded-full bg-orange-100 flex items-center justify-center mr-4 flex-shrink-0">
                                    <svg class="w-5 h-5 text-orange-500" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-medium text-gray-800">Alamat</h4>
                                    <p class="text-gray-600">Jl. Teknologi No. 123, Kota Digital, Indonesia</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div
                                    class="w-10 h-10 rounded-full bg-orange-100 flex items-center justify-center mr-4 flex-shrink-0">
                                    <svg class="w-5 h-5 text-orange-500" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-medium text-gray-800">Telepon</h4>
                                    <p class="text-gray-600">+62 123 4567 890</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div
                                    class="w-10 h-10 rounded-full bg-orange-100 flex items-center justify-center mr-4 flex-shrink-0">
                                    <svg class="w-5 h-5 text-orange-500" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z">
                                        </path>
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-medium text-gray-800">Email</h4>
                                    <p class="text-gray-600">info@orderssince2025.com</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div
                                    class="w-10 h-10 rounded-full bg-orange-100 flex items-center justify-center mr-4 flex-shrink-0">
                                    <svg class="w-5 h-5 text-orange-500" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-medium text-gray-800">Jam Kerja</h4>
                                    <p class="text-gray-600">Senin - Jumat: 09:00 - 17:00</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-8">
                            <h4 class="font-medium text-gray-800 mb-4">Ikuti Kami</h4>
                            <div class="flex space-x-4">
                                <a href="#"
                                    class="w-10 h-10 rounded-full bg-orange-500 flex items-center justify-center text-white hover:bg-orange-600 transition">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                    </svg>
                                </a>
                                <a href="#"
                                    class="w-10 h-10 rounded-full bg-orange-400 flex items-center justify-center text-white hover:bg-orange-500 transition">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723 10.054 10.054 0 01-3.127 1.184 4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                                    </svg>
                                </a>
                                <a href="#"
                                    class="w-10 h-10 rounded-full bg-red-600 flex items-center justify-center text-white hover:bg-red-700 transition">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0zm5.01 4.744c.688 0 1.25.561 1.25 1.249a1.25 1.25 0 0 1-2.498.056l-2.597-.547-.8 3.747c1.824.07 3.48.632 4.674 1.488.308-.309.73-.491 1.207-.491.968 0 1.754.786 1.754 1.754 0 .716-.435 1.333-1.01 1.614a3.111 3.111 0 0 1 .042.52c0 2.694-3.13 4.87-7.004 4.87-3.874 0-7.004-2.176-7.004-4.87 0-.183.015-.366.043-.534A1.748 1.748 0 0 1 4.028 12c0-.968.786-1.754 1.754-1.754.463 0 .898.196 1.207.49 1.207-.883 2.878-1.43 4.744-1.487l.885-4.182a.342.342 0 0 1 .14-.197.35.35 0 0 1 .238-.042l2.906.617a1.214 1.214 0 0 1 1.108-.701zM9.25 12C8.561 12 8 12.562 8 13.25c0 .687.561 1.248 1.25 1.248.687 0 1.248-.561 1.248-1.249 0-.688-.561-1.249-1.249-1.249zm5.5 0c-.687 0-1.248.561-1.248 1.25 0 .687.561 1.248 1.249 1.248.688 0 1.249-.561 1.249-1.249 0-.687-.562-1.249-1.25-1.249zm-5.466 3.99a.327.327 0 0 0-.231.094.33.33 0 0 0 0 .463c.842.842 2.484.913 2.961.913.477 0 2.105-.056 2.961-.913a.361.361 0 0 0 .029-.463.33.33 0 0 0-.464 0c-.547.533-1.684.73-2.512.73-.828 0-1.979-.196-2.512-.73a.326.326 0 0 0-.232-.095z" />
                                    </svg>
                                </a>
                                <a href="#"
                                    class="w-10 h-10 rounded-full bg-pink-600 flex items-center justify-center text-white hover:bg-pink-700 transition">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.162-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.401.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.354-.629-2.758-1.379l-.749 2.848c-.269 1.045-1.004 2.352-1.498 3.146 1.123.345 2.306.535 3.55.535 6.607 0 11.985-5.365 11.985-11.987C23.97 5.39 18.592.026 11.985.026L12.017 0z" />
                                    </svg>
                                </a>
                                <a href="#"
                                    class="w-10 h-10 rounded-full bg-navy-bg flex items-center justify-center text-white hover:bg-gray-900 transition">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <div class="bg-gray-50 rounded-lg p-8">
                        <h3 class="text-xl font-semibold text-gray-800 mb-6">Kirim Pesan</h3>
                        <form id="contactForm" class="space-y-4">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama</label>
                                <input type="text" id="name" name="name"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-orange-500 focus:border-orange-500"
                                    placeholder="Nama Anda">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                <input type="email" id="email" name="email"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-orange-500 focus:border-orange-500"
                                    placeholder="email@anda.com">
                            </div>
                            <div>
                                <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subjek</label>
                                <input type="text" id="subject" name="subject"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-orange-500 focus:border-orange-500"
                                    placeholder="Subjek pesan">
                            </div>
                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Pesan</label>
                                <textarea id="message" name="message" rows="4"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-orange-500 focus:border-orange-500"
                                    placeholder="Tulis pesan Anda di sini..."></textarea>
                            </div>
                            <div>
                                <button type="submit"
                                    class="w-full bg-orange-500 text-white font-medium py-2 px-4 rounded-lg hover:bg-orange-600 transition">Kirim
                                    Pesan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection