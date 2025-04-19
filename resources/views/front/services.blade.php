<div class="bg-pink-50 py-10">
    <div class="container mx-auto px-4">
        <!-- Hero Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Layanan Baby Spa</h1>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Kami menyediakan berbagai layanan perawatan terbaik untuk si kecil dengan terapis profesional dan fasilitas modern yang nyaman.
            </p>
        </div>

        <!-- Services Section -->
        <div class="bg-white rounded-lg shadow-lg p-8 mb-12">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Layanan Unggulan Kami</h2>
            
            <!-- Service 1 -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12" id="baby-spa">
                <div class="md:col-span-1">
                    <img src="{{ asset('images/baby-spa.jpg') }}" alt="Baby Spa" class="rounded-lg w-full h-64 object-cover">
                </div>
                <div class="md:col-span-2">
                    <h3 class="text-xl font-semibold text-pink-600 mb-2">Baby Spa</h3>
                    <p class="text-gray-600 mb-4">
                        Baby Spa adalah perawatan lengkap yang terdiri dari berenang dengan pelampung khusus bayi dan pijat bayi. 
                        Perawatan ini membantu meningkatkan kualitas tidur, nafsu makan, dan perkembangan motorik bayi.
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-pink-500 mr-2"></i>
                            <span class="text-gray-700">Meningkatkan kualitas tidur</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-pink-500 mr-2"></i>
                            <span class="text-gray-700">Merangsang perkembangan motorik</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-pink-500 mr-2"></i>
                            <span class="text-gray-700">Meningkatkan nafsu makan</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-pink-500 mr-2"></i>
                            <span class="text-gray-700">Memperkuat otot dan tulang</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between bg-pink-50 p-4 rounded-lg">
                        <div>
                            <span class="block text-gray-700">Durasi: 60 menit</span>
                            <span class="block text-gray-700">Untuk usia: 1-24 bulan</span>
                        </div>
                        <div class="text-right">
                            <span class="block text-xl font-bold text-pink-600">Rp 250.000</span>
                            <a href="/appointment" class="inline-block mt-2 px-4 py-2 bg-pink-500 text-white rounded-lg hover:bg-pink-600 transition">Reservasi</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Service 2 -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12" id="baby-massage">
                <div class="md:col-span-1">
                    <img src="{{ asset('images/baby-massage.jpg') }}" alt="Baby Massage" class="rounded-lg w-full h-64 object-cover">
                </div>
                <div class="md:col-span-2">
                    <h3 class="text-xl font-semibold text-pink-600 mb-2">Baby Massage</h3>
                    <p class="text-gray-600 mb-4">
                        Pijat bayi adalah terapi sentuh yang lembut untuk merangsang sistem saraf, pernapasan, pencernaan, dan peredaran darah bayi. 
                        Pijat bayi juga membantu memperkuat ikatan antara orang tua dan bayi.
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-pink-500 mr-2"></i>
                            <span class="text-gray-700">Melancarkan pencernaan</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-pink-500 mr-2"></i>
                            <span class="text-gray-700">Meredakan kolik dan gas</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-pink-500 mr-2"></i>
                            <span class="text-gray-700">Meningkatkan berat badan</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-pink-500 mr-2"></i>
                            <span class="text-gray-700">Memperkuat sistem imun</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between bg-pink-50 p-4 rounded-lg">
                        <div>
                            <span class="block text-gray-700">Durasi: 30 menit</span>
                            <span class="block text-gray-700">Untuk usia: 0-24 bulan</span>
                        </div>
                        <div class="text-right">
                            <span class="block text-xl font-bold text-pink-600">Rp 150.000</span>
                            <a href="/appointment" class="inline-block mt-2 px-4 py-2 bg-pink-500 text-white rounded-lg hover:bg-pink-600 transition">Reservasi</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Service 3 -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12" id="baby-swim">
                <div class="md:col-span-1">
                    <img src="{{ asset('images/baby-swim.jpg') }}" alt="Baby Swim" class="rounded-lg w-full h-64 object-cover">
                </div>
                <div class="md:col-span-2">
                    <h3 class="text-xl font-semibold text-pink-600 mb-2">Baby Swim</h3>
                    <p class="text-gray-600 mb-4">
                        Baby Swim adalah aktivitas berenang dengan pelampung khusus bayi di dalam kolam dengan suhu yang terkontrol. 
                        Aktivitas ini membantu bayi mengembangkan keterampilan motorik dan keseimbangan tubuh.
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-pink-500 mr-2"></i>
                            <span class="text-gray-700">Meningkatkan koordinasi tubuh</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-pink-500 mr-2"></i>
                            <span class="text-gray-700">Memperkuat otot dan jantung</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-pink-500 mr-2"></i>
                            <span class="text-gray-700">Merangsang perkembangan otak</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-pink-500 mr-2"></i>
                            <span class="text-gray-700">Meningkatkan rasa percaya diri</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between bg-pink-50 p-4 rounded-lg">
                        <div>
                            <span class="block text-gray-700">Durasi: 30 menit</span>
                            <span class="block text-gray-700">Untuk usia: 2-24 bulan</span>
                        </div>
                        <div class="text-right">
                            <span class="block text-xl font-bold text-pink-600">Rp 180.000</span>
                            <a href="/appointment" class="inline-block mt-2 px-4 py-2 bg-pink-500 text-white rounded-lg hover:bg-pink-600 transition">Reservasi</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Service 4 -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8" id="baby-gym">
                <div class="md:col-span-1">
                    <img src="{{ asset('images/baby-gym.jpg') }}" alt="Baby Gym" class="rounded-lg w-full h-64 object-cover">
                </div>
                <div class="md:col-span-2">
                    <h3 class="text-xl font-semibold text-pink-600 mb-2">Baby Gym</h3>
                    <p class="text-gray-600 mb-4">
                        Baby Gym adalah aktivitas senam dan gerakan yang dirancang khusus untuk merangsang perkembangan motorik kasar dan halus bayi. 
                        Aktivitas ini dilakukan dengan bantuan terapis profesional dan peralatan yang aman.
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-pink-500 mr-2"></i>
                            <span class="text-gray-700">Meningkatkan keseimbangan</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-pink-500 mr-2"></i>
                            <span class="text-gray-700">Melatih motorik kasar & halus</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-pink-500 mr-2"></i>
                            <span class="text-gray-700">Merangsang koordinasi mata-tangan</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-pink-500 mr-2"></i>
                            <span class="text-gray-700">Meningkatkan kekuatan otot</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between bg-pink-50 p-4 rounded-lg">
                        <div>
                            <span class="block text-gray-700">Durasi: 30 menit</span>
                            <span class="block text-gray-700">Untuk usia: 3-24 bulan</span>
                        </div>
                        <div class="text-right">
                            <span class="block text-xl font-bold text-pink-600">Rp 150.000</span>
                            <a href="/appointment" class="inline-block mt-2 px-4 py-2 bg-pink-500 text-white rounded-lg hover:bg-pink-600 transition">Reservasi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Package Deals -->
        <div class="bg-white rounded-lg shadow-lg p-8 mb-12" id="packages">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Paket Hemat</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Package 1 -->
                <div class="border border-gray-200 rounded-lg overflow-hidden hover:shadow-lg transition">
                    <div class="bg-pink-100 p-4 text-center">
                        <h3 class="text-xl font-semibold text-pink-600">Paket Basic</h3>
                    </div>
                    <div class="p-6">
                        <div class="text-center mb-6">
                            <span class="text-3xl font-bold text-gray-800">Rp 350.000</span>
                            <span class="text-gray-500 line-through ml-2">Rp 400.000</span>
                        </div>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span class="text-gray-700">Baby Spa (1x)</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span class="text-gray-700">Baby Massage (1x)</span>
                            </li>
                            <li class="flex items-center text-gray-400">
                                <i class="fas fa-times text-red-400 mr-2"></i>
                                <span>Baby Swim</span>
                            </li>
                            <li class="flex items-center text-gray-400">
                                <i class="fas fa-times text-red-400 mr-2"></i>
                                <span>Baby Gym</span>
                            </li>
                        </ul>
                        <a href="/appointment" class="block text-center py-2 px-4 bg-pink-500 text-white rounded-lg hover:bg-pink-600 transition">Pilih Paket</a>
                    </div>
                </div>
                
                <!-- Package 2 -->
                <div class="border border-pink-300 rounded-lg overflow-hidden shadow-lg relative">
                    <div class="absolute top-0 right-0 bg-pink-500 text-white text-xs font-bold px-3 py-1 rounded-bl-lg">TERPOPULER</div>
                    <div class="bg-pink-500 p-4 text-center">
                        <h3 class="text-xl font-semibold text-white">Paket Premium</h3>
                    </div>
                    <div class="p-6">
                        <div class="text-center mb-6">
                            <span class="text-3xl font-bold text-gray-800">Rp 550.000</span>
                            <span class="text-gray-500 line-through ml-2">Rp 650.000</span>
                        </div>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span class="text-gray-700">Baby Spa (1x)</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span class="text-gray-700">Baby Massage (1x)</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span class="text-gray-700">Baby Swim (1x)</span>
                            </li>
                            <li class="flex items-center text-gray-400">
                                <i class="fas fa-times text-red-400 mr-2"></i>
                                <span>Baby Gym</span>
                            </li>
                        </ul>
                        <a href="/appointment" class="block text-center py-2 px-4 bg-pink-500 text-white rounded-lg hover:bg-pink-600 transition">Pilih Paket</a>
                    </div>
                </div>
                
                <!-- Package 3 -->
                <div class="border border-gray-200 rounded-lg overflow-hidden hover:shadow-lg transition">
                    <div class="bg-pink-100 p-4 text-center">
                        <h3 class="text-xl font-semibold text-pink-600">Paket Complete</h3>
                    </div>
                    <div class="p-6">
                        <div class="text-center mb-6">
                            <span class="text-3xl font-bold text-gray-800">Rp 680.000</span>
                            <span class="text-gray-500 line-through ml-2">Rp 830.000</span>
                        </div>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span class="text-gray-700">Baby Spa (1x)</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span class="text-gray-700">Baby Massage (1x)</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span class="text-gray-700">Baby Swim (1x)</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span class="text-gray-700">Baby Gym (1x)</span>
                            </li>
                        </ul>
                        <a href="/appointment" class="block text-center py-2 px-4 bg-pink-500 text-white rounded-lg hover:bg-pink-600 transition">Pilih Paket</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Testimonials -->
        <div class="bg-white rounded-lg shadow-lg p-8">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Testimoni Orang Tua</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Testimonial 1 -->
                <div class="bg-pink-50 p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <img src="{{ asset('images/testimonial-1.jpg') }}" alt="Testimonial" class="w-12 h-12 rounded-full object-cover mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-800">Ibu Sari</h4>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">
                        "Baby Spa sangat membantu anak saya yang berusia 6 bulan. Setelah rutin melakukan Baby Spa, tidurnya lebih nyenyak dan nafsu makannya meningkat. Terapis di sini sangat profesional dan ramah."
                    </p>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="bg-pink-50 p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <img src="{{ asset('images/testimonial-2.jpg') }}" alt="Testimonial" class="w-12 h-12 rounded-full object-cover mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-800">Ibu Dina</h4>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">
                        "Anak saya sangat menikmati sesi Baby Swim. Awalnya takut, tapi dengan bantuan terapis yang sabar, sekarang dia sangat senang berenang. Fasilitas di sini juga sangat bersih dan nyaman."
                    </p>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="bg-pink-50 p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <img src="{{ asset('images/testimonial-3.jpg') }}" alt="Testimonial" class="w-12 h-12 rounded-full object-cover mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-800">Bapak Andi</h4>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">
                        "Paket Complete sangat worth it! Anak saya mendapatkan semua manfaat dari layanan yang disediakan. Perkembangan motoriknya meningkat pesat dan dia jadi lebih aktif. Terima kasih Baby Spa Blade!"
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
