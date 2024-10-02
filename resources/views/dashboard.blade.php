<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard SMK Pesat') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Jumlah Siswa Card -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300 mb-2">Jumlah Siswa</h3>
                        <p class="text-3xl font-bold text-blue-600 dark:text-blue-400">1,234</p>
                    </div>
                </div>

                <!-- Jumlah Guru Card -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300 mb-2">Jumlah Guru</h3>
                        <p class="text-3xl font-bold text-green-600 dark:text-green-400">87</p>
                    </div>
                </div>

                <!-- Jumlah Kelas Card -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300 mb-2">Jumlah Kelas</h3>
                        <p class="text-3xl font-bold text-purple-600 dark:text-purple-400">36</p>
                    </div>
                </div>

                <!-- Pengumuman Terbaru -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg md:col-span-2">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300 mb-4">Pengumuman Terbaru</h3>
                        <ul class="space-y-2">
                            <li class="text-gray-600 dark:text-gray-400">• Jadwal Ujian Akhir Semester telah dirilis</li>
                            <li class="text-gray-600 dark:text-gray-400">• Pendaftaran lomba keterampilan siswa dibuka</li>
                            <li class="text-gray-600 dark:text-gray-400">• Rapat orang tua murid akan diadakan minggu depan</li>
                        </ul>
                    </div>
                </div>

                <!-- Kalender Akademik -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300 mb-4">Kalender Akademik</h3>
                        <div class="space-y-2">
                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                <span class="font-semibold">15 Mei:</span> Hari Guru Nasional
                            </p>
                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                <span class="font-semibold">1 Juni:</span> Awal Semester Baru
                            </p>
                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                <span class="font-semibold">17 Agustus:</span> Upacara Kemerdekaan
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>