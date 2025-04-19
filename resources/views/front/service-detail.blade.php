<div class="bg-pink-50 py-10">
    <div class="container mx-auto px-4">
        <!-- Breadcrumb -->
        <nav class="flex mb-8" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="/" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-pink-600">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                        Beranda
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        <a href="#" class="ml-1 text-sm font-medium text-gray-700 hover:text-pink-600 md:ml-2">Layanan</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">{{ $service->name ?? 'Detail Layanan' }}</span>
                    </div>
                </li>
            </ol>
        </nav>

        <!-- Service Header -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
            <img src="{{ asset($service->image ?? 'images/service-default.jpg') }}" alt="{{ $service->name ?? 'Layanan' }}" class="w-full h-80 object-cover">
            <div class="p-8">
                <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">{{ $service->name ?? 'Nama Layanan' }}</h1>
                <div class="flex flex-wrap items-center gap-4 mb-6">
                    <span class="bg-pink-100 text-pink-800 text-xs font-semibold px-3 py-1 rounded-full">{{ $service->category ?? 'Kategori' }}</span>
                    <span class="flex items-center text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        {{ $service->duration ?? '30-60 menit' }}
                    </span>
                    <span class="flex items-center text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2z" />
                        </svg>
                        {{ $service->age_range ?? 'Usia 0-12 bulan' }}
                    </span>
                    <span class="flex items-center text-pink-600 font-bold">
                        {{ $service->price ?? 'Rp 250.000' }}
                    </span>
                </div>
                <p class="text-gray-600 text-lg">
                    {{ $service->short_description ?? 'Deskripsi singkat tentang layanan ini dan manfaatnya untuk bayi Anda.' }}
                </p>
                <div class="mt-6">
                    <a href="/appointment" class="inline-flex items-center px-5 py-3 text-base font-medium text-center text-white rounded-lg bg-pink-500 hover:bg-pink-600 focus:ring-4 focus:ring-pink-300">
                        Reservasi Sekarang
                    </a>
                </div>
            </div>
        </div>

        <!-- Service Content -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2">
                <!-- Description -->
                <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">Deskripsi</h2>
                    <div class="prose max-w-none">
                        <p>
                            {{ $service->description ?? 'Deskripsi lengkap tentang layanan ini akan ditampilkan di sini. Ini adalah tempat untuk menjelaskan secara detail tentang layanan, proses, dan apa yang dapat diharapkan orang tua dan bayi selama sesi.' }}
                        </p>
                        
                        <h3 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Bagaimana Prosesnya?</h3>
                        <p>
                            {{ $service->process ?? 'Penjelasan tentang proses layanan ini, langkah demi langkah, akan ditampilkan di sini.' }}
                        </p>
                        
                        <div class="my-8 rounded-lg overflow-hidden">
                            <img src="{{ asset($service->process_image ?? 'images/service-process.jpg') }}" alt="Proses {{ $service->name ?? 'Layanan' }}" class="w-full h-auto">
                        </div>
                        
                        <h3 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Manfaat</h3>
                        <ul class="list-disc pl-6 mb-6">
                            @if(isset($service->benefits) && is_array($service->benefits))
                                @foreach($service->benefits as $benefit)
                                    <li class="mb-2">{{ $benefit }}</li>
                                @endforeach
                            @else
                                <li class="mb-2">Meningkatkan kualitas tidur bayi</li>
                                <li class="mb-2">Memperkuat sistem kekebalan tubuh</li>
                                <li class="mb-2">Merangsang perkembangan motorik</li>
                                <li class="mb-2">Meningkatkan ikatan orang tua dan bayi</li>
                                <li class="mb-2">Membantu mengurangi kolik dan ketidaknyamanan</li>
                            @endif
                        </ul>
                        
                        <h3 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Untuk Siapa Layanan Ini?</h3>
                        <p>
                            {{ $service->suitable_for ?? 'Informasi tentang siapa yang cocok untuk layanan ini, batasan usia, dan kondisi khusus akan ditampilkan di sini.' }}
                        </p>
                        
                        <div class="bg-pink-50 border-l-4 border-pink-500 p-5 my-8">
                            <h4 class="text-lg font-semibold text-gray-800 mb-2">Catatan Penting</h4>
                            <p class="text-gray-700">
                                {{ $service->important_note ?? 'Catatan penting atau peringatan terkait layanan ini akan ditampilkan di sini.' }}
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- FAQ -->
                <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">Pertanyaan Umum</h2>
                    
                    <div class="space-y-4">
                        @if(isset($service->faqs) && is_array($service->faqs))
                            @foreach($service->faqs as $faq)
                                <div class="border-b border-gray-200 pb-4">
                                    <h3 class="text-lg font-semibold text-gray-800 mb-2">{{ $faq['question'] }}</h3>
                                    <p class="text-gray-600">{{ $faq['answer'] }}</p>
                                </div>
                            @endforeach
                        @else
                            <div class="border-b border-gray-200 pb-4">
                                <h3 class="text-lg font-semibold text-gray-800 mb-2">Apakah layanan ini aman untuk semua bayi?</h3>
                                <p class="text-gray-600">Ya, layanan ini dirancang dengan mempertimbangkan keamanan bayi. Namun, jika bayi Anda memiliki kondisi medis tertentu, sebaiknya konsultasikan dengan dokter terlebih dahulu.</p>
                            </div>
                            <div class="border-b border-gray-200 pb-4">
                                <h3 class="text-lg font-semibold text-gray-800 mb-2">Berapa lama sesi berlangsung?</h3>
                                <p class="text-gray-600">Sesi biasanya berlangsung sekitar 30-60 menit, tergantung pada jenis layanan dan kebutuhan bayi Anda.</p>
                            </div>
                            <div class="border-b border-gray-200 pb-4">
                                <h3 class="text-lg font-semibold text-gray-800 mb-2">Apakah orang tua dapat hadir selama sesi?</h3>
                                <p class="text-gray-600">Tentu saja! Kami sangat mendorong orang tua untuk hadir dan berpartisipasi dalam sesi. Ini membantu memperkuat ikatan antara Anda dan bayi Anda.</p>
                            </div>
                            <div class="border-b border-gray-200 pb-4">
                                <h3 class="text-lg font-semibold text-gray-800 mb-2">Apa yang perlu dibawa saat datang?</h3>
                                <p class="text-gray-600">Kami menyarankan Anda membawa handuk, baju ganti untuk bayi, dan popok. Semua peralatan lain akan disediakan oleh kami.</p>
                            </div>
                        @endif
                    </div>
                </div>
                
                <!-- Testimonials -->
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">Apa Kata Orang Tua</h2>
                    
                    <div class="space-y-6">
                        @if(isset($service->testimonials) && is_array($service->testimonials))
                            @foreach($service->testimonials as $testimonial)
                                <div class="border-b border-gray-200 pb-6 last:border-0 last:pb-0">
                                    <div class="flex mb-4">
                                        @for($i = 0; $i < 5; $i++)
                                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                        @endfor
                                    </div>
                                    <p class="mb-4 italic text-gray-700">{{ $testimonial['content'] }}</p>
                                    <p class="text-sm font-medium">{{ $testimonial['name'] }}</p>
                                </div>
                            @endforeach
                        @else
                            <div class="border-b border-gray-200 pb-6">
                                <div class="flex mb-4">
                                    @for($i = 0; $i < 5; $i++)
                                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                    @endfor
                                </div>
                                <p class="mb-4 italic text-gray-700">"Layanan ini sangat membantu bayi saya yang sering rewel. Setelah sesi, dia tidur lebih nyenyak dan terlihat lebih tenang. Terapis sangat profesional dan lembut."</p>
                                <p class="text-sm font-medium">Ibu Sari, Ibu dari Alia (4 bulan)</p>
                            </div>
                            <div class="border-b border-gray-200 pb-6">
                                <div class="flex mb-4">
                                    @for($i = 0; $i < 5; $i++)
                                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                    @endfor
                                </div>
                                <p class="mb-4 italic text-gray-700">"Kami telah rutin mengikuti sesi ini selama 2 bulan dan melihat perkembangan yang luar biasa pada anak kami. Sangat direkomendasikan untuk semua orang tua baru!"</p>
                                <p class="text-sm font-medium">Bapak Andi, Ayah dari Bima (6 bulan)</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            
            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <!-- Booking Card -->
                <div class="bg-white rounded-lg shadow-lg p-6 mb-8 sticky top-24">
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Reservasi Layanan</h3>
                    <div class="space-y-4 mb-6">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Harga</span>
                            <span class="font-bold text-pink-600">{{ $service->price ?? 'Rp 250.000' }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Durasi</span>
                            <span>{{ $service->duration ?? '30-60 menit' }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Usia yang Sesuai</span>
                            <span>{{ $service->age_range ?? '0-12 bulan' }}</span>
                        </div>
                    </div>
                    <a href="/appointment" class="block w-full py-3 px-4 text-center font-medium text-white bg-pink-500 rounded-lg hover:bg-pink-600 transition">
                        Reservasi Sekarang
                    </a>
                    <p class="text-sm text-gray-500 mt-4 text-center">Atau hubungi kami di <span class="font-medium">+62 812-3456-7890</span></p>
                </div>
                
                <!-- Other Services -->
                <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Layanan Lainnya</h3>
                    <div class="space-y-4">
                        @if(isset($otherServices) && is_array($otherServices))
                            @foreach($otherServices as $otherService)
                                <a href="{{ route('services.show', $otherService->slug) }}" class="flex items-center p-3 bg-gray-50 rounded-lg hover:bg-pink-50 transition">
                                    <img src="{{ asset($otherService->thumbnail) }}" alt="{{ $otherService->name }}" class="w-12 h-12 rounded-full object-cover mr-4">
                                    <div>
                                        <h4 class="font-medium text-gray-800">{{ $otherService->name }}</h4>
                                        <p class="text-sm text-gray-500">{{ $otherService->short_description }}</p>
                                    </div>
                                </a>
                            @endforeach
                        @else
                            <a href="/services/pijat-bayi" class="flex items-center p-3 bg-gray-50 rounded-lg hover:bg-pink-50 transition">
                                <img src="{{ asset('images/baby-massage.jpg') }}" alt="Pijat Bayi" class="w-12 h-12 rounded-full object-cover mr-4">
                                <div>
                                    <h4 class="font-medium text-gray-800">Pijat Bayi</h4>
                                    <p class="text-sm text-gray-500">Teknik pijat lembut untuk bayi</p>
                                </div>
                            </a>
                            <a href="/services/hidroterapi" class="flex items-center p-3 bg-gray-50 rounded-lg hover:bg-pink-50 transition">
                                <img src="{{ asset('images/hydrotherapy.jpg') }}" alt="Hidroterapi" class="w-12 h-12 rounded-full object-cover mr-4">
                                <div>
                                    <h4 class="font-medium text-gray-800">Hidroterapi</h4>
                                    <p class="text-sm text-gray-500">Terapi air untuk relaksasi</p>
                                </div>
                            </a>
                            <a href="/services/sesi-mengambang" class="flex items-center p-3 bg-gray-50 rounded-lg hover:bg-pink-50 transition">
                                <img src="{{ asset('images/floating.jpg') }}" alt="Sesi Mengambang" class="w-12 h-12 rounded-full object-cover mr-4">
                                <div>
                                    <h4 class="font-medium text-gray-800">Sesi Mengambang</h4>
                                    <p class="text-sm text-gray-500">Pengalaman mengambang yang aman</p>
                                </div>
                            </a>
                        @endif
                    </div>
                </div>
                
                <!-- Contact Info -->
                <div class="bg-pink-50 rounded-lg shadow-lg p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Butuh Bantuan?</h3>
                    <p class="text-gray-600 mb-4">Jika Anda memiliki pertanyaan tentang layanan kami, jangan ragu untuk menghubungi kami.</p>
                    <div class="space-y-3">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-pink-500 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <span class="text-gray-700">+62 812-3456-7890</span>
                        </div>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-pink-500 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span class="text-gray-700">info@babyspa.com</span>
                        </div>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-pink-500 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span class="text-gray-700">Jalan Serenity 123, Kota Bayi</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
