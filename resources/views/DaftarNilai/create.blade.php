<div id="tambahJadwalKuliah" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow w-full">
            <button type="button"
                class="absolute top-9 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                data-modal-hide="tambahJadwalKuliah">
                <svg aria-hidden="true" class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-10">
                <h3 class="mb-10 pb-3 text-xl font-medium text-gray-900 border-b border-gray-600">Tambah Jadwal Kuliah
                </h3>
                <form class="space-y-6" action="#">
                    <div class="flex space-x-5">
                        <div class="w-full">
                            <label for="MataKuliah" class="block mb-2 text-sm font-medium text-gray-900">Mata Kuliah</label>
                            <input type="text" name="MataKuliah" id="MataKuliah"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-0 focus:border-gray-300 block w-full p-4"
                                placeholder="Masukkan mata kuliah" required>
                        </div>
                        <div class="w-full">
                            <label for="kodeMK" class="block mb-2 text-sm font-medium text-gray-900">Kode MK</label>
                            <input type="number" name="kodeMK" id="kodeMK"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-0 focus:border-gray-300 block w-full p-4"
                                placeholder="Masukkan kode mata kuliah" required>
                        </div>
                    </div>
                    <div class="flex space-x-5">
                        <div class="w-full">
                            <label for="kredit" class="block mb-2 text-sm font-medium text-gray-900">Kredit</label>
                            <input type="number" name="kredit" id="kredit"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-0 focus:border-gray-300 block w-full p-4"
                                placeholder="Masukkan kredit" required>
                        </div>
                        <div class="w-full">
                            <label for="kelas" class="block mb-2 text-sm font-medium text-gray-900">Kelas</label>
                            <input type="text" name="kelas" id="kelas"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-0 focus:border-gray-300 block w-full p-4"
                                placeholder="Masukkan kelas" required>
                        </div>
                    </div>
                    <div class="flex space-x-5">
                        <div class="w-full">
                            <label for="hari" class="block mb-2 text-sm font-medium text-gray-900">Hari</label>
                            <input type="text" name="hari" id="hari"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-0 focus:border-gray-300 block w-full p-4"
                                placeholder="Masukkan hari" required>
                        </div>
                        <div class="w-full">
                            <label for="jam" class="block mb-2 text-sm font-medium text-gray-900">Jam</label>
                            <input type="date" name="jam" id="jam"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-0 focus:border-gray-300 block w-full p-4"
                                placeholder="Masukkan jam" required>
                        </div>
                    </div>
                    <div class="flex space-x-5">
                        <div class="w-full">
                            <label for="ruangan" class="block mb-2 text-sm font-medium text-gray-900">Ruangan</label>
                            <input type="text" name="ruangan" id="ruangan"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-0 focus:border-gray-300 block w-full p-4"
                                placeholder="Masukkan ruangan" required>
                        </div>
                        <div class="w-full">
                            <label for="nilai" class="block mb-2 text-sm font-medium text-gray-900">Nilai</label>
                            <input type="number" name="nilai" id="nilai"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-0 focus:border-gray-300 block w-full p-4"
                                placeholder="Masukkan nilai" required>
                        </div>
                    </div>
                    <div class="flex space-x-3 justify-center">
                        {{-- <button type="button" data-modal-hide="tambahMahasiswa" class="">
                            <h1
                                class="px-10 py-2 text-gray-600 font-semibold bg-gray-200 border border-gray-300 rounded-md hover:bg-gray-100">
                                Kembali</h1>
                        </button> --}}
                        <button type="submit" data-modal-hide="tambahJadwalKuliah" class="">
                            <h1
                                class="px-20 py-2 text-base text-amber-600 font-semibold bg-yellow-200 border border-amber-400 rounded-md hover:bg-yellow-100 ">
                                Tambah Jadwal Kuliah</h1>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
