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
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                                <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Reservasi Saya</span>
                            </div>
                        </li>
                    </ol>
                </nav>

                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h1 class="text-2xl font-bold text-gray-800 mb-6">Riwayat Reservasi</h1>

                    @if($reservasis->isEmpty())
                        <div class="text-center py-12">
                            <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                            </svg>
                            <h3 class="mt-2 text-sm font-medium text-gray-900">Tidak ada reservasi</h3>
                            <p class="mt-1 text-sm text-gray-500">Mulai buat reservasi pertama Anda.</p>
                            <div class="mt-6">
                                <a href="/" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-pink-600 hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500">
                                    Lihat Layanan
                                </a>
                            </div>
                        </div>
                    @else
                        <div class="space-y-6">
                            @foreach($reservasis as $reservasi)
                            <div class="border border-gray-200 rounded-lg p-6 hover:shadow-md transition">
                                <div class="flex justify-between items-start mb-4">
                                    <div>
                                        <h3 class="text-lg font-semibold text-gray-800">{{ $reservasi->layanan->nama_layanan }}</h3>
                                        <p class="text-sm text-gray-500">{{ $reservasi->layanan->kategori->nama_kategori }}</p>
                                    </div>
                                    <span class="px-3 py-1 text-sm font-semibold rounded-full 
                                        @if($reservasi->status === 'pending') bg-yellow-100 text-yellow-800
                                        @elseif($reservasi->status === 'confirmed') bg-green-100 text-green-800
                                        @elseif($reservasi->status === 'cancelled') bg-red-100 text-red-800
                                        @endif">
                                        {{ ucfirst($reservasi->status) }}
                                    </span>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                    <div>
                                        <p class="text-sm text-gray-500">Tanggal</p>
                                        <p class="text-gray-800">{{ \Carbon\Carbon::parse($reservasi->tanggal)->format('d M Y') }}</p>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500">Sesi</p>
                                        <p class="text-gray-800">{{ $reservasi->sesi->jam }}</p>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500">Harga</p>
                                        <p class="text-gray-800">Rp {{ number_format($reservasi->layanan->harga_layanan, 0, ',', '.') }}</p>
                                    </div>
                                </div>

                                <div class="flex justify-end space-x-4">
                                    <a href="{{ route('booking.show', $reservasi) }}" 
                                        class="text-sm text-pink-600 hover:text-pink-700 font-medium">
                                        Lihat Detail
                                    </a>
                                </div>
                            </div>
                            @endforeach

                            <div class="mt-6">
                                {{ $reservasis->links() }}
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-main-layout> 