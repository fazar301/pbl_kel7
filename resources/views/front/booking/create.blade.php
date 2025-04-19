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
                                <a href="{{ route('layanan.show', $layanan->id) }}" class="ml-1 text-sm font-medium text-gray-700 hover:text-pink-600 md:ml-2">{{ $layanan->nama_layanan }}</a>
                            </div>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                                <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Reservasi</span>
                            </div>
                        </li>
                    </ol>
                </nav>

                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h1 class="text-2xl font-bold text-gray-800 mb-6">Reservasi {{ $layanan->nama_layanan }}</h1>
                    
                    <form action="{{ route('booking.store') }}" method="POST" id="bookingForm">
                        @csrf
                        <input type="hidden" name="layanan_id" value="{{ $layanan->id }}">

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <!-- Service Details -->
                            <div class="bg-pink-50 p-4 rounded-lg">
                                <h3 class="text-lg font-semibold text-gray-800 mb-2">Detail Layanan</h3>
                                <div class="space-y-2">
                                    <p class="text-gray-600">Harga: <span class="font-bold text-pink-600">Rp {{ number_format($layanan->harga_layanan, 0, ',', '.') }}</span></p>
                                    <p class="text-gray-600">Kategori: {{ $layanan->kategori->nama_kategori }}</p>
                                </div>
                            </div>

                            <!-- Date Selection -->
                            <div>
                                <label for="tanggal" class="block text-sm font-medium text-gray-700 mb-2">Tanggal Reservasi</label>
                                <input type="date" name="tanggal" id="tanggal" 
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-pink-500 focus:border-pink-500"
                                    min="{{ date('Y-m-d', strtotime('tomorrow')) }}"
                                    required>
                                <p id="dateError" class="mt-1 text-sm text-red-600 hidden">Tanggal tidak tersedia. Silakan pilih tanggal lain.</p>
                            </div>
                        </div>

                        <!-- Baby Information -->
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Informasi Bayi</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label for="nama_bayi" class="block text-sm font-medium text-gray-700 mb-2">Nama Bayi</label>
                                    <input type="text" name="nama_bayi" id="nama_bayi" 
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-pink-500 focus:border-pink-500"
                                        required>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Umur Bayi</label>
                                    <div class="flex items-center space-x-2">
                                        <div class="flex-1">
                                            <input type="number" name="umur_bayi" id="umur_bayi" min="0" max="24"
                                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-pink-500 focus:border-pink-500"
                                                required>
                                            <p id="umurError" class="mt-1 text-sm text-red-600 hidden">Umur harus antara 0-24 bulan atau 0-5 tahun</p>
                                        </div>
                                        <div class="flex items-center space-x-2">
                                            <label class="inline-flex items-center">
                                                <input type="radio" name="umur_satuan" value="bulan" checked
                                                    class="h-4 w-4 text-pink-600 focus:ring-pink-500 border-gray-300">
                                                <span class="ml-2 text-sm text-gray-700">Bulan</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="radio" name="umur_satuan" value="tahun"
                                                    class="h-4 w-4 text-pink-600 focus:ring-pink-500 border-gray-300">
                                                <span class="ml-2 text-sm text-gray-700">Tahun</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mt-1">
                                        <span id="umurIndicator" class="text-xs text-gray-500">Umur dalam bulan (0-24)</span>
                                    </div>
                                </div>
                                <div>
                                    <label for="berat_bayi" class="block text-sm font-medium text-gray-700 mb-2">Berat Badan (kg)</label>
                                    <input type="number" name="berat_bayi" id="berat_bayi" step="0.1" min="0"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-pink-500 focus:border-pink-500"
                                        required>
                                </div>
                                <div>
                                    <label for="tinggi_bayi" class="block text-sm font-medium text-gray-700 mb-2">Tinggi Badan (cm)</label>
                                    <input type="number" name="tinggi_bayi" id="tinggi_bayi" step="0.1" min="0"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-pink-500 focus:border-pink-500"
                                        required>
                                </div>
                                <div class="md:col-span-2">
                                    <label for="no_hp_ortu" class="block text-sm font-medium text-gray-700 mb-2">Nomor HP Orang Tua</label>
                                    <input type="tel" name="no_hp_ortu" id="no_hp_ortu" 
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-pink-500 focus:border-pink-500"
                                        required>
                                </div>
                            </div>
                        </div>

                        <!-- Session Selection -->
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Pilih Sesi</label>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4" id="sessionContainer">
                                @foreach($sesis as $sesi)
                                <label class="relative flex items-center p-3 border border-gray-300 rounded-lg cursor-pointer hover:bg-pink-50">
                                    <input type="radio" name="sesi_id" value="{{ $sesi->id }}" 
                                        class="h-4 w-4 text-pink-600 focus:ring-pink-500 border-gray-300" required>
                                    <span class="ml-3 text-sm text-gray-700">{{ $sesi->jam }}</span>
                                </label>
                                @endforeach
                            </div>
                            <p id="sessionError" class="mt-1 text-sm text-red-600 hidden">Sesi tidak tersedia. Silakan pilih sesi lain.</p>
                        </div>

                        <!-- Notes -->
                        <div class="mb-6">
                            <label for="catatan" class="block text-sm font-medium text-gray-700 mb-2">Catatan Tambahan</label>
                            <textarea name="catatan" id="catatan" rows="3" 
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-pink-500 focus:border-pink-500"
                                placeholder="Masukkan catatan tambahan jika ada..."></textarea>
                        </div>

                        <div class="flex justify-end">
                            <button type="submit" 
                                class="px-6 py-3 bg-pink-500 text-white rounded-lg hover:bg-pink-600 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2">
                                Buat Reservasi
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tanggalInput = document.getElementById('tanggal');
            const dateError = document.getElementById('dateError');
            const sessionContainer = document.getElementById('sessionContainer');
            const sessionError = document.getElementById('sessionError');
            const bookingForm = document.getElementById('bookingForm');
            const umurInput = document.getElementById('umur_bayi');
            const umurError = document.getElementById('umurError');
            const umurIndicator = document.getElementById('umurIndicator');
            const umurSatuanRadios = document.querySelectorAll('input[name="umur_satuan"]');

            // Age unit change handler
            umurSatuanRadios.forEach(radio => {
                radio.addEventListener('change', function() {
                    if (this.value === 'tahun') {
                        umurInput.max = 5;
                        umurInput.placeholder = 'Masukkan umur dalam tahun';
                        umurIndicator.textContent = 'Umur dalam tahun (0-5)';
                    } else {
                        umurInput.max = 24;
                        umurInput.placeholder = 'Masukkan umur dalam bulan';
                        umurIndicator.textContent = 'Umur dalam bulan (0-24)';
                    }
                    validateAge();
                });
            });

            // Age validation function
            function validateAge() {
                const selectedUnit = document.querySelector('input[name="umur_satuan"]:checked').value;
                const age = parseFloat(umurInput.value);
                const maxAge = selectedUnit === 'tahun' ? 5 : 24;
                
                if (isNaN(age) || age < 0 || age > maxAge) {
                    umurError.classList.remove('hidden');
                    umurInput.setCustomValidity(`Umur harus antara 0-${maxAge} ${selectedUnit}`);
                } else {
                    umurError.classList.add('hidden');
                    umurInput.setCustomValidity('');
                }
            }

            // Age input validation
            umurInput.addEventListener('input', validateAge);
            umurInput.addEventListener('blur', validateAge);

            // Form submission handler
            bookingForm.addEventListener('submit', async function(e) {
                e.preventDefault();
                
                // Validate all required fields
                const selectedDate = tanggalInput.value;
                const selectedSession = document.querySelector('input[name="sesi_id"]:checked');
                const namaBayi = document.getElementById('nama_bayi').value;
                const umurBayi = document.getElementById('umur_bayi').value;
                const beratBayi = document.getElementById('berat_bayi').value;
                const tinggiBayi = document.getElementById('tinggi_bayi').value;
                const noHpOrtu = document.getElementById('no_hp_ortu').value;

                // Check if all required fields are filled
                if (!selectedDate || !selectedSession || !namaBayi || !umurBayi || !beratBayi || !tinggiBayi || !noHpOrtu) {
                    alert('Mohon lengkapi semua informasi yang diperlukan');
                    return;
                }

                // Validate age
                validateAge();
                if (umurError.classList.contains('hidden') === false) {
                    return;
                }

                // Check date and session availability
                const isDateAvailable = await checkDateAvailability(selectedDate);
                const isSessionAvailable = await checkSessionAvailability(selectedDate, selectedSession.value);

                if (!isDateAvailable || !isSessionAvailable) {
                    if (!isDateAvailable) {
                        dateError.classList.remove('hidden');
                        tanggalInput.setCustomValidity('Tanggal tidak tersedia');
                    }
                    if (!isSessionAvailable) {
                        sessionError.classList.remove('hidden');
                        selectedSession.setCustomValidity('Sesi tidak tersedia');
                    }
                    return;
                }

                // If all validations pass, submit the form
                this.submit();
            });

            // Function to check date availability
            async function checkDateAvailability(date) {
                try {
                    const response = await fetch(`/api/check-date-availability?date=${date}`);
                    const data = await response.json();
                    return data.available;
                } catch (error) {
                    console.error('Error checking date availability:', error);
                    return false;
                }
            }

            // Function to check session availability
            async function checkSessionAvailability(date, sessionId) {
                try {
                    const response = await fetch(`/api/check-session-availability?date=${date}&session_id=${sessionId}`);
                    const data = await response.json();
                    return data.available;
                } catch (error) {
                    console.error('Error checking session availability:', error);
                    return false;
                }
            }

            // Date change handler
            tanggalInput.addEventListener('change', async function() {
                const selectedDate = this.value;
                const isAvailable = await checkDateAvailability(selectedDate);
                
                if (!isAvailable) {
                    dateError.classList.remove('hidden');
                    this.setCustomValidity('Tanggal tidak tersedia');
                } else {
                    dateError.classList.add('hidden');
                    this.setCustomValidity('');
                }
            });

            // Session selection handler
            sessionContainer.addEventListener('change', async function(e) {
                if (e.target.type === 'radio') {
                    const selectedDate = tanggalInput.value;
                    const sessionId = e.target.value;
                    
                    if (selectedDate) {
                        const isAvailable = await checkSessionAvailability(selectedDate, sessionId);
                        
                        if (!isAvailable) {
                            sessionError.classList.remove('hidden');
                            e.target.setCustomValidity('Sesi tidak tersedia');
                        } else {
                            sessionError.classList.add('hidden');
                            e.target.setCustomValidity('');
                        }
                    }
                }
            });
        });
    </script>
    @endpush
</x-main-layout> 