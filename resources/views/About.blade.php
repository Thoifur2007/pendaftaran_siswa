<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tentang SMK Pesat') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Hero Section -->
            <div class="bg-blue-600 text-white rounded-lg shadow-xl overflow-hidden mb-10">
                <div class="md:flex">
                    <div class="md:flex-shrink-0">
                        <img class=" object-cover " width="400" height="300" src="https://home.smkpesat.sch.id/wp-content/uploads/2023/03/opening-1-1-1024x576.png" alt="SMK Pesat building">
                    </div>
                    <div class="p-8">
                        <div class="uppercase tracking-wide text-sm font-semibold">Selamat Datang di</div>
                        <h1 class="block mt-1 text-3xl leading-tight font-bold">SMK Pesat</h1>
                        <p class="mt-2 text-white">Mencetak Generasi Unggul, Terampil, dan Siap Kerja</p>
                    </div>
                </div>
            </div>

            <!-- Visi Misi -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-10">
                <div class="p-6">
                    <h3 class="text-2xl font-bold mb-4">Visi & Misi</h3>
                    <div class="md:flex justify-between">
                        <div class="md:w-1/2 mb-4 md:mb-0">
                            <h4 class="text-xl font-semibold mb-2">Visi</h4>
                            <p>Menjadi lembaga pendidikan kejuruan terkemuka yang menghasilkan lulusan berkompeten, berkarakter, dan berdaya saing global.</p>
                        </div>
                        <div class="md:w-1/2">
                            <h4 class="text-xl font-semibold mb-2">Misi</h4>
                            <ul class="list-disc pl-5">
                                <li>Menyelenggarakan pendidikan kejuruan yang berkualitas</li>
                                <li>Mengembangkan kerjasama dengan dunia industri</li>
                                <li>Membentuk karakter siswa yang disiplin dan beretika</li>
                                <li>Meningkatkan kompetensi guru dan staff</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Program Keahlian -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-10">
                <div class="p-6">
                    <h3 class="text-2xl font-bold mb-4">Program Keahlian</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="bg-gray-100 p-4 rounded-lg">
                            <h4 class="text-lg font-semibold mb-2">Teknik Komputer dan Jaringan</h4>
                            <p>Mempelajari tentang perakitan komputer, instalasi jaringan, dan pemrograman dasar.</p>
                        </div>
                        <div class="bg-gray-100 p-4 rounded-lg">
                            <h4 class="text-lg font-semibold mb-2">Akuntansi</h4>
                            <p>Fokus pada pengelolaan keuangan, perpajakan, dan penggunaan software akuntansi.</p>
                        </div>
                        <div class="bg-gray-100 p-4 rounded-lg">
                            <h4 class="text-lg font-semibold mb-2">Teknik Kendaraan Ringan</h4>
                            <p>Mempelajari perawatan dan perbaikan kendaraan bermotor roda empat.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fasilitas -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-10">
                <div class="p-6">
                    <h3 class="text-2xl font-bold mb-4">Fasilitas Unggulan</h3>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <div class="text-center">
                            <svg class="w-12 h-12 mx-auto text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            <p class="mt-2">Lab Komputer Modern</p>
                        </div>
                        <div class="text-center">
                            <svg class="w-12 h-12 mx-auto text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                            <p class="mt-2">Bengkel Praktik</p>
                        </div>
                        <div class="text-center">
                            <svg class="w-12 h-12 mx-auto text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"></path></svg>
                            <p class="mt-2">Perpustakaan Digital</p>
                        </div>
                        <div class="text-center">
                            <svg class="w-12 h-12 mx-auto text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                            <p class="mt-2">Lapangan Olahraga</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonial -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h3 class="text-2xl font-bold mb-4">Apa Kata Mereka</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-gray-100 p-4 rounded-lg">
                            <p class="italic mb-2">"SMK Pesat memberikan pengalaman belajar yang luar biasa. Saya merasa siap untuk masuk dunia kerja setelah lulus."</p>
                            <p class="font-semibold">- Anisa, Alumni 2023</p>
                        </div>
                        <div class="bg-gray-100 p-4 rounded-lg">
                            <p class="italic mb-2">"Fasilitas praktik yang lengkap dan guru-guru yang kompeten membuat proses belajar menjadi menyenangkan."</p>
                            <p class="font-semibold">- Budi, Siswa Kelas XII</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>