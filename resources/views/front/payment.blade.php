
<div class="bg-pink-50 py-10">
    <div class="container mx-auto px-4">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">Pembayaran</h1>
            <p class="text-gray-600">Selesaikan pembayaran untuk layanan Baby Spa Anda</p>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Payment Form -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Detail Pesanan</h2>
                    <div class="border-b border-gray-200 pb-4 mb-4">
                        <div class="flex justify-between mb-2">
                            <span class="text-gray-700">Baby Spa</span>
                            <span class="font-medium">Rp 250.000</span>
                        </div>
                        <div class="flex justify-between mb-2">
                            <span class="text-gray-700">Baby Massage</span>
                            <span class="font-medium">Rp 150.000</span>
                        </div>
                        <div class="flex justify-between mb-2">
                            <span class="text-gray-700">Subtotal</span>
                            <span class="font-medium">Rp 400.000</span>
                        </div>
                    </div>
                    
                    <!-- Voucher Code Input -->
                    <div class="mb-6">
                        <h3 class="text-lg font-medium text-gray-800 mb-3">Kode Voucher</h3>
                        <div class="flex">
                            <input type="text" id="voucher-code" placeholder="Masukkan kode voucher" class="flex-1 px-4 py-2 border border-gray-300 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-pink-500">
                            <button id="apply-voucher" class="px-4 py-2 bg-pink-500 text-white rounded-r-lg hover:bg-pink-600 transition">Terapkan</button>
                        </div>
                        <div id="voucher-message" class="mt-2 text-sm hidden"></div>
                    </div>
                    
                    <div class="border-t border-gray-200 pt-4 mb-6">
                        <div class="flex justify-between mb-2">
                            <span class="text-gray-700">Total</span>
                            <span class="text-xl font-bold text-pink-600" id="total-amount">Rp 400.000</span>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Informasi Pelanggan</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                        <div>
                            <label for="parent-name" class="block text-gray-700 mb-1">Nama Orang Tua</label>
                            <input type="text" id="parent-name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500">
                        </div>
                        <div>
                            <label for="baby-name" class="block text-gray-700 mb-1">Nama Bayi</label>
                            <input type="text" id="baby-name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500">
                        </div>
                        <div>
                            <label for="phone" class="block text-gray-700 mb-1">Nomor Telepon</label>
                            <input type="tel" id="phone" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500">
                        </div>
                        <div>
                            <label for="email" class="block text-gray-700 mb-1">Email</label>
                            <input type="email" id="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500">
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Metode Pembayaran</h2>
                    <div class="space-y-4 mb-6">
                        <!-- Payment Method: Midtrans -->
                        <div class="border border-gray-200 rounded-lg p-4">
                            <label class="flex items-center cursor-pointer">
                                <input type="radio" name="payment-method" value="midtrans" class="form-radio h-5 w-5 text-pink-500" checked>
                                <span class="ml-2 text-gray-700">Midtrans (Kartu Kredit, QRIS, Bank Transfer, E-Wallet)</span>
                            </label>
                            <div class="mt-3 pl-7">
                                <p class="text-sm text-gray-600">Pembayaran online melalui berbagai metode pembayaran yang tersedia di Midtrans</p>
                                <div class="flex flex-wrap gap-2 mt-2">
                                    <img src="{{ asset('images/payment/visa.png') }}" alt="Visa" class="h-8">
                                    <img src="{{ asset('images/payment/mastercard.png') }}" alt="Mastercard" class="h-8">
                                    <img src="{{ asset('images/payment/bca.png') }}" alt="BCA" class="h-8">
                                    <img src="{{ asset('images/payment/mandiri.png') }}" alt="Mandiri" class="h-8">
                                    <img src="{{ asset('images/payment/gopay.png') }}" alt="GoPay" class="h-8">
                                    <img src="{{ asset('images/payment/ovo.png') }}" alt="OVO" class="h-8">
                                </div>
                            </div>
                        </div>
                        
                        <!-- Payment Method: Cash -->
                        <div class="border border-gray-200 rounded-lg p-4">
                            <label class="flex items-center cursor-pointer">
                                <input type="radio" name="payment-method" value="cash" class="form-radio h-5 w-5 text-pink-500">
                                <span class="ml-2 text-gray-700">Tunai (Bayar di Tempat)</span>
                            </label>
                            <div class="mt-3 pl-7">
                                <p class="text-sm text-gray-600">Pembayaran tunai dilakukan saat Anda datang ke Baby Spa Blade</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-6">
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" id="terms" class="form-checkbox h-5 w-5 text-pink-500">
                            <span class="ml-2 text-gray-700">Saya setuju dengan <a href="/terms" class="text-pink-500 hover:underline">Syarat & Ketentuan</a> dan <a href="/privacy-policy" class="text-pink-500 hover:underline">Kebijakan Privasi</a></span>
                        </label>
                    </div>
                    
                    <button id="pay-button" class="w-full py-3 bg-pink-500 text-white rounded-lg hover:bg-pink-600 transition disabled:opacity-50 disabled:cursor-not-allowed" disabled>
                        Bayar Sekarang
                    </button>
                </div>
            </div>
            
            <!-- Order Summary -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-lg shadow-lg p-6 sticky top-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Ringkasan Pesanan</h2>
                    <div class="space-y-4 mb-6">
                        <div class="flex items-center">
                            <div class="bg-pink-100 rounded-full p-2 mr-3">
                                <i class="fas fa-spa text-pink-500"></i>
                            </div>
                            <div>
                                <h3 class="font-medium text-gray-800">Baby Spa & Baby Massage</h3>
                                <p class="text-sm text-gray-600">Paket Perawatan Lengkap</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-pink-100 rounded-full p-2 mr-3">
                                <i class="fas fa-calendar-alt text-pink-500"></i>
                            </div>
                            <div>
                                <h3 class="font-medium text-gray-800">Jadwal Appointment</h3>
                                <p class="text-sm text-gray-600">Senin, 15 April 2024</p>
                                <p class="text-sm text-gray-600">10:00 - 11:30 WIB</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-pink-100 rounded-full p-2 mr-3">
                                <i class="fas fa-map-marker-alt text-pink-500"></i>
                            </div>
                            <div>
                                <h3 class="font-medium text-gray-800">Lokasi</h3>
                                <p class="text-sm text-gray-600">Baby Spa Blade - Cabang Jakarta Selatan</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="border-t border-gray-200 pt-4">
                        <div class="flex justify-between mb-2">
                            <span class="text-gray-700">Subtotal</span>
                            <span class="font-medium">Rp 400.000</span>
                        </div>
                        <div class="flex justify-between mb-2 text-green-600 hidden" id="discount-row">
                            <span>Diskon Voucher</span>
                            <span id="discount-amount">-Rp 0</span>
                        </div>
                        <div class="flex justify-between pt-2 border-t border-gray-200 mt-2">
                            <span class="font-medium text-gray-700">Total</span>
                            <span class="font-bold text-pink-600" id="sidebar-total">Rp 400.000</span>
                        </div>
                    </div>
                    
                    <div class="mt-6 text-center">
                        <p class="text-sm text-gray-600">Butuh bantuan?</p>
                        <a href="/contact" class="text-pink-500 hover:underline text-sm font-medium">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const applyVoucherBtn = document.getElementById('apply-voucher');
        const voucherInput = document.getElementById('voucher-code');
        const voucherMessage = document.getElementById('voucher-message');
        const totalAmount = document.getElementById('total-amount');
        const sidebarTotal = document.getElementById('sidebar-total');
        const discountRow = document.getElementById('discount-row');
        const discountAmount = document.getElementById('discount-amount');
        const termsCheckbox = document.getElementById('terms');
        const payButton = document.getElementById('pay-button');
        
        // Valid voucher codes and their discount amounts
        const validVouchers = {
            'WELCOME10': 40000,  // Rp 40.000 discount
            'BABYSPA20': 80000,  // Rp 80.000 discount
            'NEWMOM15': 60000    // Rp 60.000 discount
        };
        
        let currentTotal = 400000; // Initial total in IDR (without formatting)
        
        // Apply voucher
        applyVoucherBtn.addEventListener('click', function() {
            const code = voucherInput.value.trim().toUpperCase();
            
            if (code === '') {
                showVoucherMessage('Silakan masukkan kode voucher', 'text-yellow-600');
                return;
            }
            
            if (validVouchers.hasOwnProperty(code)) {
                const discount = validVouchers[code];
                currentTotal = 400000 - discount;
                
                // Update UI
                totalAmount.textContent = formatCurrency(currentTotal);
                sidebarTotal.textContent = formatCurrency(currentTotal);
                discountAmount.textContent = '-' + formatCurrency(discount);
                discountRow.classList.remove('hidden');
                
                showVoucherMessage('Voucher berhasil diterapkan!', 'text-green-600');
            } else {
                showVoucherMessage('Kode voucher tidak valid', 'text-red-600');
            }
        });
        
        // Show voucher message
        function showVoucherMessage(message, className) {
            voucherMessage.textContent = message;
            voucherMessage.className = 'mt-2 text-sm ' + className;
            voucherMessage.classList.remove('hidden');
        }
        
        // Format currency
        function formatCurrency(amount) {
            return 'Rp ' + amount.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
        }
        
        // Enable/disable pay button based on terms checkbox
        termsCheckbox.addEventListener('change', function() {
            payButton.disabled = !this.checked;
        });
        
        // Payment button click
        payButton.addEventListener('click', function() {
            if (document.querySelector('input[name="payment-method"]:checked').value === 'midtrans') {
                // Redirect to Midtrans payment page (in a real app)
                alert('Redirecting to Midtrans payment gateway...');
            } else {
                // Cash payment confirmation
                alert('Pesanan Anda telah dikonfirmasi! Silakan lakukan pembayaran tunai saat Anda datang ke Baby Spa Blade.');
            }
        });
    });
</script>
