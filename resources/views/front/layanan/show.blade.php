<x-main-layout>
    <div class="bg-pink-50 py-10">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
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
                                <a href="/" class="ml-1 text-sm font-medium text-gray-700 hover:text-pink-600 md:ml-2">Layanan</a>
                            </div>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                                <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">{{ $layanan->nama_layanan }}</span>
                            </div>
                        </li>
                    </ol>
                </nav>

                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="p-8">
                        <div class="flex flex-col md:flex-row gap-8">
                            <div class="md:w-1/2">
                                <img src="{{ asset('storage/' . $layanan->gambar_layanan) }}" alt="{{ $layanan->nama_layanan }}" class="w-full h-64 object-cover rounded-lg">
                            </div>
                            <div class="md:w-1/2">
                                <h1 class="text-2xl font-bold text-gray-800 mb-2">{{ $layanan->nama_layanan }}</h1>
                                <p class="text-sm text-gray-500 mb-4">{{ $layanan->kategori->nama_kategori }}</p>
                                <p class="text-2xl font-bold text-pink-600 mb-6">Rp {{ number_format($layanan->harga_layanan, 0, ',', '.') }}</p>
                                <p class="text-gray-600 mb-6">{{ $layanan->deskripsi_layanan }}</p>
                                <a href="{{ route('booking.create', $layanan) }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-pink-600 hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500">
                                    Reservasi Sekarang
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                @if($otherLayanans->isNotEmpty())
                <div class="mt-12">
                    <h2 class="text-xl font-bold text-gray-800 mb-6">Layanan Lainnya</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        @foreach($otherLayanans as $otherLayanan)
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                            <img src="{{ asset('storage/' . $otherLayanan->gambar_layanan) }}" alt="{{ $otherLayanan->nama_layanan }}" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h3 class="text-lg font-semibold text-gray-800 mb-2">{{ $otherLayanan->nama_layanan }}</h3>
                                <p class="text-sm text-gray-500 mb-4">{{ $otherLayanan->kategori->nama_kategori }}</p>
                                <p class="text-xl font-bold text-pink-600 mb-4">Rp {{ number_format($otherLayanan->harga_layanan, 0, ',', '.') }}</p>
                                <a href="{{ route('layanan.show', $otherLayanan) }}" class="text-pink-600 hover:text-pink-700 font-medium">Lihat Detail</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</x-main-layout> 