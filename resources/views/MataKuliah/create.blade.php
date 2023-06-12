<div id="tambahMataKuliah" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow w-full">
            <button type="button"
                class="absolute top-9 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                data-modal-hide="tambahMataKuliah">
                <svg aria-hidden="true" class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-10">
                <h3 class="mb-10 pb-3 text-xl font-medium text-gray-900 border-b border-gray-600">Tambah Mata Kuliah
                </h3>
                <form class="space-y-6" action="#">
                    <div class="w-full">
                        <label for="kode" class="block mb-2 text-sm font-medium text-gray-900">Kode</label>
                        <input type="text" name="kode" id="kode"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-0 focus:border-gray-300 block w-full p-4"
                            placeholder="Masukkan kode" required>
                    </div>
                    <div class="w-full">
                        <label for="nidn" class="block mb-2 text-sm font-medium text-gray-900">Mata Kuliah (MK)</label>
                        <input type="text" name="nidn" id="nidn"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-0 focus:border-gray-300 block w-full p-4"
                            placeholder="Masukkan no induk" required>
                    </div>
                    <div class="w-full">
                        <label for="Fakultas" class="block mb-2 text-sm font-medium text-gray-900">Fakultas</label>
                        <select type="text" name="fakultas" id="fakultas"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-0 focus:border-gray-300 block w-full p-4"
                            required>
                            <option value="" class="text-gra3-600">Pilih Fakultas</option>
                            @for ($i = 1; $i <= 5; $i++)
                                <option value="">Ilmu Komputer</option>
                            @endfor
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="programStudi" class="block mb-2 text-sm font-medium text-gray-900">Program
                            Studi</label>
                        <select name="programStudi" id="programStudi"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-0 focus:border-gray-300 block w-full p-4"
                            required>
                            <option value="">Pilih Program Studi</option>
                            @for ($i = 1; $i <= 5; $i++)
                                <option value="">Sistem Komputer</option>
                            @endfor
                        </select>
                    </div>
                    <div class="flex space-x-3 justify-center">
                        {{-- <button type="button" data-modal-hide="tambahMahasiswa" class="">
                            <h1
                                class="px-10 py-2 text-gray-600 font-semibold bg-gray-200 border border-gray-300 rounded-md hover:bg-gray-100">
                                Kembali</h1>
                        </button> --}}
                        <button type="submit" data-modal-hide="tambahMataKuliah" class="">
                            <h1
                                class="px-20 py-2 text-base text-amber-600 font-semibold bg-yellow-200 border border-amber-400 rounded-md hover:bg-yellow-100 ">
                                Tambah Mata Kuliah</h1>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
