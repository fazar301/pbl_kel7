<x-main-layout>
    <div class="bg-pink-50 py-10">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto">
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
                                <a href="{{ route('booking.index') }}" class="ml-1 text-sm font-medium text-gray-700 hover:text-pink-600 md:ml-2">Reservasi Saya</a>
                            </div>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                                <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Detail Reservasi</span>
                            </div>
                        </li>
                    </ol>
                </nav>

                <div class="bg-white rounded-lg shadow-lg p-8">
                    @if(session('success'))
                        <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="flex justify-between items-start mb-6">
                        <h1 class="text-2xl font-bold text-gray-800">Detail Reservasi</h1>
                        <span class="px-3 py-1 text-sm font-semibold rounded-full 
                            @if($reservasi->status === 'pending') bg-yellow-100 text-yellow-800
                            @elseif($reservasi->status === 'confirmed') bg-green-100 text-green-800
                            @elseif($reservasi->status === 'cancelled') bg-red-100 text-red-800
                            @endif">
                            {{ ucfirst($reservasi->status) }}
                        </span>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <!-- Service Details -->
                        <div class="bg-pink-50 p-4 rounded-lg">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Detail Layanan</h3>
                            <div class="space-y-2">
                                <p class="text-gray-600">Layanan: <span class="font-medium">{{ $reservasi->layanan->nama_layanan }}</span></p>
                                <p class="text-gray-600">Harga: <span class="font-bold text-pink-600">Rp {{ number_format($reservasi->layanan->harga_layanan, 0, ',', '.') }}</span></p>
                                <p class="text-gray-600">Kategori: {{ $reservasi->layanan->kategori->nama_kategori }}</p>
                            </div>
                        </div>

                        <!-- Booking Details -->
                        <div class="bg-pink-50 p-4 rounded-lg">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Detail Reservasi</h3>
                            <div class="space-y-2">
                                <p class="text-gray-600">Tanggal: <span class="font-medium">{{ \Carbon\Carbon::parse($reservasi->tanggal)->format('d M Y') }}</span></p>
                                <p class="text-gray-600">Sesi: <span class="font-medium">{{ $reservasi->sesi->jam }}</span></p>
                                <p class="text-gray-600">Status: <span class="font-medium">{{ ucfirst($reservasi->status) }}</span></p>
                            </div>
                        </div>
                    </div>

                    @if($reservasi->catatan)
                    <div class="mb-8">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Catatan</h3>
                        <p class="text-gray-600 bg-gray-50 p-4 rounded-lg">{{ $reservasi->catatan }}</p>
                    </div>
                    @endif

                    <div class="flex justify-end space-x-4">
                        <a href="{{ route('booking.index') }}" 
                            class="px-6 py-3 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">
                            Kembali
                        </a>
                        @if($reservasi->status === 'pending')
                        <form action="{{ route('booking.cancel', $reservasi) }}" method="POST" class="inline">
                            @csrf
                            @method('PATCH')
                            <button type="submit" 
                                class="px-6 py-3 bg-red-500 text-white rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                                Batalkan Reservasi
                            </button>
                        </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-main-layout> 