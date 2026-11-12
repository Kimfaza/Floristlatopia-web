@extends('app')

@section('title')
    <title>Account & Transaction History - Latopia</title>
@endsection

@section('konten')
<div class="container mx-auto px-4 md:px-8 pt-8 pb-16 min-h-screen text-left">
    <div class="max-w-5xl mx-auto bg-white shadow-xl rounded-2xl overflow-hidden border border-pink-100 flex flex-col md:flex-row">

        <!-- Sidebar Akun -->
        <aside class="w-full md:w-64 bg-pink-50 p-6 border-b md:border-b-0 md:border-r border-pink-100 shrink-0 flex flex-col justify-between">
            <div>
                <!-- Info Singkat User -->
                <div class="flex items-center gap-3 pb-6 mb-6 border-b border-pink-200/70">
                    <img src="{{ asset('assets/profile.jpg') }}" alt="User Avatar" class="w-12 h-12 rounded-full object-cover bg-white p-1 border border-pink-200 shadow-sm">
                    <div class="overflow-hidden">
                        <h3 class="font-bold text-gray-800 text-sm truncate">{{ Auth::user()->name ?? 'Customer' }}</h3>
                        <p class="text-xs text-gray-500 truncate">{{ Auth::user()->email ?? '' }}</p>
                    </div>
                </div>

                <!-- Menu Navigasi Sidebar -->
                <ul class="space-y-2 text-sm">
                    <li>
                        <button type="button" onclick="switchTab('transactions')" id="btn-tab-transactions" class="w-full flex items-center gap-3 px-4 py-2.5 rounded-xl font-semibold bg-pink-500 text-white shadow-sm transition">
                            <i class="fas fa-receipt w-4 text-center"></i>
                            <span>Transactions</span>
                        </button>
                    </li>
                    <li>
                        <button type="button" onclick="switchTab('profile')" id="btn-tab-profile" class="w-full flex items-center gap-3 px-4 py-2.5 rounded-xl font-medium text-gray-700 hover:bg-pink-100 hover:text-pink-600 transition">
                            <i class="fas fa-user w-4 text-center"></i>
                            <span>Profile</span>
                        </button>
                    </li>
                </ul>
            </div>

            <!-- Tombol Logout -->
            <div class="pt-6 mt-6 border-t border-pink-200/70">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="w-full flex items-center gap-3 px-4 py-2.5 rounded-xl text-sm font-medium text-red-600 hover:bg-red-50 transition">
                        <i class="fas fa-sign-out-alt w-4 text-center"></i>
                        <span>Logout</span>
                    </button>
                </form>
            </div>
        </aside>


        <div class="flex-1 p-6 md:p-8 bg-white">
            <!-- TAB 1: RIWAYAT TRANSAKSI -->
            <div id="tab-transactions">
                <div class="flex items-center justify-between mb-6 pb-3 border-b border-gray-100">
                    <h2 class="text-2xl font-bold text-pink-600">Transaction History</h2>
                    <a href="{{ route('produk') }}" class="text-xs font-semibold text-pink-500 hover:text-pink-600">
                        + Belanja Lagi
                    </a>
                </div>

                @if(isset($transactions) && $transactions->count() > 0)
                    <div class="space-y-4">
                        @foreach($transactions->sortByDesc('created_at') as $trx)
                            @php
                                $trxDetails = is_string($trx->transaction_details) ? json_decode($trx->transaction_details, true) : ($trx->transaction_details ?? []);
                                $itemDetails = is_string($trx->item_details) ? json_decode($trx->item_details, true) : ($trx->item_details ?? []);
                                $orderId = $trxDetails['order_id'] ?? ('ORDER-' . $trx->id);
                                $grossAmount = $trxDetails['gross_amount'] ?? 0;
                                $status = strtolower($trx->transaction_status ?? 'pending');
                            @endphp

                            <div class="border border-pink-100 rounded-2xl p-5 hover:shadow-md transition bg-gray-50/40">
                                <!-- Header Transaksi -->
                                <div class="flex flex-wrap items-center justify-between gap-2 pb-3 mb-3 border-b border-gray-100">
                                    <div>
                                        <span class="text-xs font-bold text-gray-800">{{ $orderId }}</span>
                                        <span class="text-xs text-gray-400 mx-2">&bull;</span>
                                        <span class="text-xs text-gray-500">{{ $trx->created_at ? $trx->created_at->format('d M Y, H:i') : '-' }}</span>
                                    </div>

                                    @if($status === 'settlement' || $status === 'capture' || $status === 'success')
                                        <span class="px-3 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-700">Paid</span>
                                    @elseif($status === 'cancel' || $status === 'expire' || $status === 'deny')
                                        <span class="px-3 py-1 rounded-full text-xs font-semibold bg-red-100 text-red-700">Cancelled</span>
                                    @else
                                        <span class="px-3 py-1 rounded-full text-xs font-semibold bg-yellow-100 text-yellow-700 capitalize">{{ $status }}</span>
                                    @endif
                                </div>

                                <!-- Rincian Item yang Dibeli -->
                                <ul class="space-y-1.5 text-sm text-gray-700 mb-4">
                                    @forelse($itemDetails as $item)
                                        <li class="flex justify-between">
                                            <span>{{ $item['name'] ?? 'Produk' }} <span class="text-gray-400">({{ $item['quantity'] ?? 1 }}x)</span></span>
                                            <span class="font-medium">Rp {{ number_format(($item['price'] ?? 0) * ($item['quantity'] ?? 1), 0, ',', '.') }}</span>
                                        </li>
                                    @empty
                                        <li class="text-gray-400 text-xs">Detail item tidak tersedia.</li>
                                    @endforelse
                                </ul>

                                <!-- Total Pembayaran -->
                                <div class="flex items-center justify-between pt-3 border-t border-gray-100">
                                    <span class="text-xs text-gray-500">Total Pembayaran</span>
                                    <span class="text-lg font-bold text-pink-600">Rp {{ number_format($grossAmount, 0, ',', '.') }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <!-- Tampilan Jika Belum Ada Transaksi -->
                    <div class="text-center py-12 bg-gray-50 rounded-2xl border border-dashed border-gray-200">
                        <div class="w-16 h-16 bg-pink-100 text-pink-500 rounded-full flex items-center justify-center mx-auto mb-3">
                            <i class="fas fa-shopping-bag text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800 mb-1">Belum Ada Transaksi</h3>
                        <p class="text-xs text-gray-500 mb-5">Riwayat pesanan buket dan hampers kamu akan muncul di sini.</p>
                        <a href="{{ route('produk') }}" class="inline-block bg-pink-500 hover:bg-pink-600 text-white text-xs font-semibold py-2.5 px-6 rounded-xl shadow-sm transition">
                            Mulai Belanja
                        </a>
                    </div>
                @endif
            </div>

            <!-- TAB 2: PROFIL AKUN -->
            <div id="tab-profile" class="hidden">
                <h2 class="text-2xl font-bold text-pink-600 mb-6 pb-3 border-b border-gray-100">Account Profile</h2>

                <div class="flex items-center gap-4 mb-6">
                    <img src="{{ asset('assets/profile.jpg') }}" alt="Profile Image" class="w-20 h-20 rounded-full object-cover border-2 border-pink-200 p-1">
                    <div>
                        <h3 class="font-bold text-lg text-gray-800">{{ Auth::user()->name ?? 'User' }}</h3>
                        <p class="text-sm text-gray-500">{{ Auth::user()->email ?? '' }}</p>
                    </div>
                </div>

                <form class="space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="full_name" class="block text-xs font-semibold text-gray-700 mb-1">Full Name</label>
                            <input id="full_name" name="full_name" type="text" value="{{ Auth::user()->name ?? '' }}" class="w-full px-3.5 py-2 border border-gray-300 rounded-xl text-sm focus:outline-none focus:border-pink-500">
                        </div>
                        <div>
                            <label for="email" class="block text-xs font-semibold text-gray-700 mb-1">Email</label>
                            <input id="email" name="email" type="email" value="{{ Auth::user()->email ?? '' }}" class="w-full px-3.5 py-2 border border-gray-300 rounded-xl text-sm bg-gray-50 text-gray-500" readonly>
                        </div>
                    </div>

                    <div>
                        <label for="handphone" class="block text-xs font-semibold text-gray-700 mb-1">Handphone</label>
                        <input id="handphone" name="handphone" type="text" value="{{ Auth::user()->phone ?? '' }}" placeholder="08xxxxxxxxxx" class="w-full px-3.5 py-2 border border-gray-300 rounded-xl text-sm focus:outline-none focus:border-pink-500">
                    </div>

                    <div>
                        <label for="address" class="block text-xs font-semibold text-gray-700 mb-1">Address</label>
                        <textarea id="address" name="address" rows="3" class="w-full px-3.5 py-2 border border-gray-300 rounded-xl text-sm focus:outline-none focus:border-pink-500" placeholder="Alamat pengiriman utama...">{{ Auth::user()->address ?? '' }}</textarea>
                    </div>

                    <div class="text-right pt-2">
                        <button type="button" onclick="alert('Profil berhasil disimpan!')" class="px-6 py-2.5 bg-pink-500 hover:bg-pink-600 text-white text-sm font-semibold rounded-xl shadow-sm transition">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<script>
    function switchTab(tabName) {
        const trxTab = document.getElementById('tab-transactions');
        const profileTab = document.getElementById('tab-profile');
        const btnTrx = document.getElementById('btn-tab-transactions');
        const btnProfile = document.getElementById('btn-tab-profile');

        const activeClass = ['bg-pink-500', 'text-white', 'font-semibold', 'shadow-sm'];
        const inactiveClass = ['text-gray-700', 'hover:bg-pink-100', 'hover:text-pink-600', 'font-medium'];

        if (tabName === 'transactions') {
            trxTab.classList.remove('hidden');
            profileTab.classList.add('hidden');
            btnTrx.classList.add(...activeClass);
            btnTrx.classList.remove(...inactiveClass);
            btnProfile.classList.remove(...activeClass);
            btnProfile.classList.add(...inactiveClass);
        } else {
            profileTab.classList.remove('hidden');
            trxTab.classList.add('hidden');
            btnProfile.classList.add(...activeClass);
            btnProfile.classList.remove(...inactiveClass);
            btnTrx.classList.remove(...activeClass);
            btnTrx.classList.add(...inactiveClass);
        }
    }
</script>
@endsection
