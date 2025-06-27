<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Modal Role -->
            @if (auth()->user()->role === null)
                <div x-data="{ open: true }" x-show="open"
                    class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
                    <div class="bg-white p-6 rounded shadow-lg w-96 text-center">
                        <h2 class="text-lg font-semibold mb-4">Pilih Tipe Membership</h2>
                        <form action="{{ route('update.role') }}" method="POST">
                            @csrf
                            <select name="role" required class="border rounded p-2 w-full mb-4">
                                <option value="A">Tipe A (3 artikel & 3 video)</option>
                                <option value="B">Tipe B (10 artikel & 10 video)</option>
                                <option value="C">Tipe C (semua konten)</option>
                            </select>
                            <button class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
                        </form>
                    </div>
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="text-xl">Halo, {{ auth()->user()->name }}! Selamat datang di member area.</p><br>
                    {{ __('List Video') }}

                    <div class="flex my-5 w-full flex-wrap justify-center">
                        <!-- Card -->
                        @if (auth()->user()->role === 'A' || auth()->user()->role === 'C')
                            <div class="w-full flex justify-center md:w-1/2 xl:w-1/4">
                                <div
                                    class="w-72 h-28 border-gray-300 flex items-center shadow-md rounded-3xl mx-2 my-5 border-2">
                                    <div class="w-1/4">
                                        <a href="https://www.youtube.com/embed/TjugEIHUBoI" target="_blank">
                                            <img src="https://img.youtube.com/vi/TjugEIHUBoI/hqdefault.jpg"
                                                alt="Thumbnail Video" class="rounded w-full max-w-md">
                                        </a>
                                    </div>
                                    <div class="w-3/4 my-5 mx-3">
                                        <div class="divide-y-2 divide-gray-300 mr-5">
                                            <p class="text-base font-bold text-bold">How to Create a Facebook API Key: A
                                                Detailed Guide</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full flex justify-center md:w-1/2 xl:w-1/4">
                                <div
                                    class="w-72 h-28 border-gray-300 flex items-center shadow-md rounded-3xl mx-2 my-5 border-2">
                                    <div class="w-1/4">
                                        <a href="https://www.youtube.com/embed/TaBWhb5SPfc" target="_blank">
                                            <img src="https://img.youtube.com/vi/TaBWhb5SPfc/hqdefault.jpg"
                                                alt="Thumbnail Video" class="rounded w-full max-w-md">
                                        </a>
                                    </div>
                                    <div class="w-3/4 my-5 mx-3">
                                        <div class="divide-y-2 divide-gray-300 mr-5">
                                            <p class="text-base font-bold text-bold">TUTORIAL PHP DASAR BAHASA INDONESIA
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full flex justify-center md:w-1/2 xl:w-1/4">
                                <div
                                    class="w-72 h-28 border-gray-300 flex items-center shadow-md rounded-3xl mx-2 my-5 border-2">
                                    <div class="w-1/4">
                                        <a href="https://www.youtube.com/embed/_P2t0lCzU-Q" target="_blank">
                                            <img src="https://img.youtube.com/vi/_P2t0lCzU-Q/hqdefault.jpg"
                                                alt="Thumbnail Video" class="rounded w-full max-w-md">
                                        </a>
                                    </div>
                                    <div class="w-3/4 my-5 mx-3">
                                        <div class="divide-y-2 divide-gray-300 mr-5">
                                            <p class="text-base font-bold text-bold">TUTORIAL PHP OOP BAHASA INDONESIA
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if (auth()->user()->role === 'B' || auth()->user()->role === 'C')
                            <div class="w-full flex justify-center md:w-1/2 xl:w-1/4">
                                <div
                                    class="w-72 h-28 border-gray-300 flex items-center shadow-md rounded-3xl mx-2 my-5 border-2">
                                    <div class="w-1/4">
                                        <a href="https://www.youtube.com/embed/SDROba_M42g" target="_blank">
                                            <img src="https://img.youtube.com/vi/SDROba_M42g/hqdefault.jpg"
                                                alt="Thumbnail Video" class="rounded w-full max-w-md">
                                        </a>
                                    </div>
                                    <div class="w-3/4 my-5 mx-3">
                                        <div class="divide-y-2 divide-gray-300 mr-5">
                                            <p class="text-base font-bold text-bold">TUTORIAL JAVASCRIPT DASAR BAHASA
                                                INDONESIA</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full flex justify-center md:w-1/2 xl:w-1/4">
                                <div
                                    class="w-72 h-28 border-gray-300 flex items-center shadow-md rounded-3xl mx-2 my-5 border-2">
                                    <div class="w-1/4">
                                        <a href="https://www.youtube.com/embed/aviAyIK5oSU" target="_blank">
                                            <img src="https://img.youtube.com/vi/aviAyIK5oSU/hqdefault.jpg"
                                                alt="Thumbnail Video" class="rounded w-full max-w-md">
                                        </a>
                                    </div>
                                    <div class="w-3/4 my-5 mx-3">
                                        <div class="divide-y-2 divide-gray-300 mr-5">
                                            <p class="text-base font-bold text-bold">TUTORIAL JAVASCRIPT OOP (BAHASA
                                                INDONESIA)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full flex justify-center md:w-1/2 xl:w-1/4">
                                <div
                                    class="w-72 h-28 border-gray-300 flex items-center shadow-md rounded-3xl mx-2 my-5 border-2">
                                    <div class="w-1/4">
                                        <a href="https://www.youtube.com/embed/jiUxHm9l1KY" target="_blank">
                                            <img src="https://img.youtube.com/vi/jiUxHm9l1KY/hqdefault.jpg"
                                                alt="Thumbnail Video" class="rounded w-full max-w-md">
                                        </a>
                                    </div>
                                    <div class="w-3/4 my-5 mx-3">
                                        <div class="divide-y-2 divide-gray-300 mr-5">
                                            <p class="text-base font-bold text-bold">TUTORIAL JAVA DASAR BAHASA
                                                INDONESIA
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full flex justify-center md:w-1/2 xl:w-1/4">
                                <div
                                    class="w-72 h-28 border-gray-300 flex items-center shadow-md rounded-3xl mx-2 my-5 border-2">
                                    <div class="w-1/4">
                                        <a href="https://www.youtube.com/embed/f3ZhNnvtV-w" target="_blank">
                                            <img src="https://img.youtube.com/vi/f3ZhNnvtV-w/hqdefault.jpg"
                                                alt="Thumbnail Video" class="rounded w-full max-w-md">
                                        </a>
                                    </div>
                                    <div class="w-3/4 my-5 mx-3">
                                        <div class="divide-y-2 divide-gray-300 mr-5">
                                            <p class="text-base font-bold text-bold">TUTORIAL JAVA OOP BAHASA INDONESIA
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full flex justify-center md:w-1/2 xl:w-1/4">
                                <div
                                    class="w-72 h-28 border-gray-300 flex items-center shadow-md rounded-3xl mx-2 my-5 border-2">
                                    <div class="w-1/4">
                                        <a href="https://www.youtube.com/embed/yOIO5h3ENIw" target="_blank">
                                            <img src="https://img.youtube.com/vi/yOIO5h3ENIw/hqdefault.jpg"
                                                alt="Thumbnail Video" class="rounded w-full max-w-md">
                                        </a>
                                    </div>
                                    <div class="w-3/4 my-5 mx-3">
                                        <div class="divide-y-2 divide-gray-300 mr-5">
                                            <p class="text-base font-bold text-bold">Tutorial React.JS Dasar (Bahasa
                                                Indonesia)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full flex justify-center md:w-1/2 xl:w-1/4">
                                <div
                                    class="w-72 h-28 border-gray-300 flex items-center shadow-md rounded-3xl mx-2 my-5 border-2">
                                    <div class="w-1/4">
                                        <a href="https://www.youtube.com/embed/IO_vkyJnMas" target="_blank">
                                            <img src="https://img.youtube.com/vi/IO_vkyJnMas/hqdefault.jpg"
                                                alt="Thumbnail Video" class="rounded w-full max-w-md">
                                        </a>
                                    </div>
                                    <div class="w-3/4 my-5 mx-3">
                                        <div class="divide-y-2 divide-gray-300 mr-5">
                                            <p class="text-base font-bold text-bold">Tutorial Golang Dasar (Bahasa
                                                Indonesia)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full flex justify-center md:w-1/2 xl:w-1/4">
                                <div
                                    class="w-72 h-28 border-gray-300 flex items-center shadow-md rounded-3xl mx-2 my-5 border-2">
                                    <div class="w-1/4">
                                        <a href="https://www.youtube.com/embed/9XIufyvBNSI" target="_blank">
                                            <img src="https://img.youtube.com/vi/9XIufyvBNSI/hqdefault.jpg"
                                                alt="Thumbnail Video" class="rounded w-full max-w-md">
                                        </a>
                                    </div>
                                    <div class="w-3/4 my-5 mx-3">
                                        <div class="divide-y-2 divide-gray-300 mr-5">
                                            <p class="text-base font-bold text-bold">Tutorial Golang Standard Library
                                                (Bahasa Indonesia)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full flex justify-center md:w-1/2 xl:w-1/4">
                                <div
                                    class="w-72 h-28 border-gray-300 flex items-center shadow-md rounded-3xl mx-2 my-5 border-2">
                                    <div class="w-1/4">
                                        <a href="https://www.youtube.com/embed/xYBclb-sYQ4" target="_blank">
                                            <img src="https://img.youtube.com/vi/xYBclb-sYQ4/hqdefault.jpg"
                                                alt="Thumbnail Video" class="rounded w-full max-w-md">
                                        </a>
                                    </div>
                                    <div class="w-3/4 my-5 mx-3">
                                        <div class="divide-y-2 divide-gray-300 mr-5">
                                            <p class="text-base font-bold text-bold">Tutorial MySQL Database (Bahasa
                                                Indonesia)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full flex justify-center md:w-1/2 xl:w-1/4">
                                <div
                                    class="w-72 h-28 border-gray-300 flex items-center shadow-md rounded-3xl mx-2 my-5 border-2">
                                    <div class="w-1/4">
                                        <a href="https://www.youtube.com/embed/S4igMZFCvh8" target="_blank">
                                            <img src="https://img.youtube.com/vi/S4igMZFCvh8/hqdefault.jpg"
                                                alt="Thumbnail Video" class="rounded w-full max-w-md">
                                        </a>
                                    </div>
                                    <div class="w-3/4 my-5 mx-3">
                                        <div class="divide-y-2 divide-gray-300 mr-5">
                                            <p class="text-base font-bold text-bold">Belajar Basis Data untuk Pemula
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full flex justify-center md:w-1/2 xl:w-1/4">
                                <div
                                    class="w-72 h-28 border-gray-300 flex items-center shadow-md rounded-3xl mx-2 my-5 border-2">
                                    <div class="w-1/4">
                                        <a href="https://www.youtube.com/embed/ClMX6TXvh_o" target="_blank">
                                            <img src="https://img.youtube.com/vi/ClMX6TXvh_o/hqdefault.jpg"
                                                alt="Thumbnail Video" class="rounded w-full max-w-md">
                                        </a>
                                    </div>
                                    <div class="w-3/4 my-5 mx-3">
                                        <div class="divide-y-2 divide-gray-300 mr-5">
                                            <p class="text-base font-bold text-bold">TUTORIAL LARAVEL DASAR (BAHASA
                                                INDONESIA)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                    </div>
                </div>
            </div>

            <div class="bg-white mt-3 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __('List Artikel') }}

                    <div class="flex my-5 w-full flex-wrap justify-center">
                        <!-- Card -->
                        @if (auth()->user()->role === 'A' || auth()->user()->role === 'C')
                            <div class="w-full flex justify-center md:w-1/2 xl:w-1/4">
                                <div
                                    class="w-72 h-48 border-gray-300 flex items-center shadow-md rounded-3xl mx-2 my-5 border-2">
                                    <div class="w-3/4 my-5 mx-3">
                                        <div class="divide-y-2 divide-gray-300 mr-5">
                                            <p class="text-base font-bold text-bold">Perancangan Sistem Informasi
                                                Pengelolaan Inventory Muslimwear PT Sabilamall</p>
                                            <p class="text-sm font-bold"><a
                                                    href="https://jim.unindra.ac.id/index.php/jrami/article/view/4688"
                                                    target="_blank" class="text-blue-500">Baca selengkapnya</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full flex justify-center md:w-1/2 xl:w-1/4">
                                <div
                                    class="w-72 h-48 border-gray-300 flex items-center shadow-md rounded-3xl mx-2 my-5 border-2">
                                    <div class="w-3/4 my-5 mx-3">
                                        <div class="divide-y-2 divide-gray-300 mr-5">
                                            <p class="text-base font-bold text-bold">Perancangan Sistem Informasi
                                                Monitoring Akademik Siswa dan Administrasi di Primagama Cabang Cipayung
                                            </p>
                                            <p class="text-sm font-bold"><a
                                                    href="https://jim.unindra.ac.id/index.php/jrami/article/view/4735"
                                                    target="_blank" class="text-blue-500">Baca selengkapnya</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full flex justify-center md:w-1/2 xl:w-1/4">
                                <div
                                    class="w-72 h-48 border-gray-300 flex items-center shadow-md rounded-3xl mx-2 my-5 border-2">
                                    <div class="w-3/4 my-5 mx-3">
                                        <div class="divide-y-2 divide-gray-300 mr-5">
                                            <p class="text-base font-bold text-bold">Sistem Pakar untuk Diagnosis
                                                Gangguan
                                                Mental pada Remaja dengan Metode Forward Chaining Berbasis Java</p>
                                            <p class="text-sm font-bold"><a
                                                    href="https://jim.unindra.ac.id/index.php/jrami/article/view/9632"
                                                    target="_blank" class="text-blue-500">Baca selengkapnya</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if (auth()->user()->role === 'B' || auth()->user()->role === 'C')
                            <div class="w-full flex justify-center md:w-1/2 xl:w-1/4">
                                <div
                                    class="w-72 h-48 border-gray-300 flex items-center shadow-md rounded-3xl mx-2 my-5 border-2">
                                    <div class="w-3/4 my-5 mx-3">
                                        <div class="divide-y-2 divide-gray-300 mr-5">
                                            <p class="text-base font-bold text-bold">Aplikasi Penjualan Sparepart dan
                                                Pelayanan Service dengan Metode FIFO pada Toko Nouvo Shop</p>
                                            <p class="text-sm font-bold"><a
                                                    href="https://jim.unindra.ac.id/index.php/jrami/article/view/9914"
                                                    target="_blank" class="text-blue-500">Baca selengkapnya</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full flex justify-center md:w-1/2 xl:w-1/4">
                                <div
                                    class="w-72 h-48 border-gray-300 flex items-center shadow-md rounded-3xl mx-2 my-5 border-2">
                                    <div class="w-3/4 my-5 mx-3">
                                        <div class="divide-y-2 divide-gray-300 mr-5">
                                            <p class="text-base font-bold text-bold">Perancangan UI/UX Peminjaman Buku
                                                dengan Metode Design Thinking pada MTS Assaidah</p>
                                            <p class="text-sm font-bold"><a
                                                    href="https://jim.unindra.ac.id/index.php/jrami/article/view/10787"
                                                    target="_blank" class="text-blue-500">Baca selengkapnya</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full flex justify-center md:w-1/2 xl:w-1/4">
                                <div
                                    class="w-72 h-48 border-gray-300 flex items-center shadow-md rounded-3xl mx-2 my-5 border-2">
                                    <div class="w-3/4 my-5 mx-3">
                                        <div class="divide-y-2 divide-gray-300 mr-5">
                                            <p class="text-base font-bold text-bold">Penerapan Sistem Aplikasi Point Of
                                                Sales (POS) dengan Metode Waterfall pada Kedai Kopi Kejayaan</p>
                                            <p class="text-sm font-bold"><a
                                                    href="https://jim.unindra.ac.id/index.php/jrami/article/view/10884"
                                                    target="_blank" class="text-blue-500">Baca selengkapnya</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full flex justify-center md:w-1/2 xl:w-1/4">
                                <div
                                    class="w-72 h-48 border-gray-300 flex items-center shadow-md rounded-3xl mx-2 my-5 border-2">
                                    <div class="w-3/4 my-5 mx-3">
                                        <div class="divide-y-2 divide-gray-300 mr-5">
                                            <p class="text-base font-bold text-bold">Sistem Pendukung Keputusan Santri
                                                Berprestasi dengan Metode SAW pada Pondok Pesantren Badril Buduur</p>
                                            <p class="text-sm font-bold"><a
                                                    href="https://jim.unindra.ac.id/index.php/jrami/article/view/10987"
                                                    target="_blank" class="text-blue-500">Baca selengkapnya</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full flex justify-center md:w-1/2 xl:w-1/4">
                                <div
                                    class="w-72 h-48 border-gray-300 flex items-center shadow-md rounded-3xl mx-2 my-5 border-2">
                                    <div class="w-3/4 my-5 mx-3">
                                        <div class="divide-y-2 divide-gray-300 mr-5">
                                            <p class="text-base font-bold text-bold">Aplikasi 3D Menggunakan Virtual
                                                Reality sebagai Media Pengenalan Museum Kota Makassar</p>
                                            <p class="text-sm font-bold"><a
                                                    href="https://jim.unindra.ac.id/index.php/jrami/article/view/11134"
                                                    target="_blank" class="text-blue-500">Baca selengkapnya</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full flex justify-center md:w-1/2 xl:w-1/4">
                                <div
                                    class="w-72 h-48 border-gray-300 flex items-center shadow-md rounded-3xl mx-2 my-5 border-2">
                                    <div class="w-3/4 my-5 mx-3">
                                        <div class="divide-y-2 divide-gray-300 mr-5">
                                            <p class="text-base font-bold text-bold">Transformasi Digital Penerimaan
                                                Siswa
                                                Baru di SDN Ragas I Berbasis Framework Laravel</p>
                                            <p class="text-sm font-bold"><a
                                                    href="https://jim.unindra.ac.id/index.php/jrami/article/view/11176"
                                                    target="_blank" class="text-blue-500">Baca selengkapnya</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full flex justify-center md:w-1/2 xl:w-1/4">
                                <div
                                    class="w-72 h-48 border-gray-300 flex items-center shadow-md rounded-3xl mx-2 my-5 border-2">
                                    <div class="w-3/4 my-5 mx-3">
                                        <div class="divide-y-2 divide-gray-300 mr-5">
                                            <p class="text-base font-bold text-bold">Perancangan Aplikasi Media
                                                Pengenalan
                                                Matematika Dasar dengan Metode Linear Congruent Method (LCM)</p>
                                            <p class="text-sm font-bold"><a
                                                    href="https://jim.unindra.ac.id/index.php/jrami/article/view/11565"
                                                    target="_blank" class="text-blue-500">Baca selengkapnya</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full flex justify-center md:w-1/2 xl:w-1/4">
                                <div
                                    class="w-72 h-48 border-gray-300 flex items-center shadow-md rounded-3xl mx-2 my-5 border-2">
                                    <div class="w-3/4 my-5 mx-3">
                                        <div class="divide-y-2 divide-gray-300 mr-5">
                                            <p class="text-base font-bold text-bold">Sistem Pakar Diagnosa Penyakit
                                                Infeksi
                                                Saluran Pernapasan Atas pada Klinik Dharma Medica Menggunakan Metode
                                                Forward
                                                Chaining</p>
                                            <p class="text-sm font-bold"><a
                                                    href="https://jim.unindra.ac.id/index.php/jrami/article/view/11777"
                                                    target="_blank" class="text-blue-500">Baca selengkapnya</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full flex justify-center md:w-1/2 xl:w-1/4">
                                <div
                                    class="w-72 h-48 border-gray-300 flex items-center shadow-md rounded-3xl mx-2 my-5 border-2">
                                    <div class="w-3/4 my-5 mx-3">
                                        <div class="divide-y-2 divide-gray-300 mr-5">
                                            <p class="text-base font-bold text-bold">Sistem Pendukung Keputusan
                                                Pemilihan
                                                Supplier Terbaik pada PT Graha Patriatama Jaya Menggunakan Metode SAW
                                            </p>
                                            <p class="text-sm font-bold"><a
                                                    href="https://jim.unindra.ac.id/index.php/jrami/article/view/12217"
                                                    target="_blank" class="text-blue-500">Baca selengkapnya</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full flex justify-center md:w-1/2 xl:w-1/4">
                                <div
                                    class="w-72 h-48 border-gray-300 flex items-center shadow-md rounded-3xl mx-2 my-5 border-2">
                                    <div class="w-3/4 my-5 mx-3">
                                        <div class="divide-y-2 divide-gray-300 mr-5">
                                            <p class="text-base font-bold text-bold">Implementasi Metode Certainty
                                                Factor
                                                pada Sistem Pakar Diagnosa Gangguan Kesehatan Mental</p>
                                            <p class="text-sm font-bold"><a
                                                    href="https://jim.unindra.ac.id/index.php/jrami/article/view/12852"
                                                    target="_blank" class="text-blue-500">Baca selengkapnya</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
