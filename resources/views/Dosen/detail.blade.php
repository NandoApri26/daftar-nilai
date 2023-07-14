<div id="{{ 'lihatDetailDosen' . $item->id }}" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow w-full">
            <button type="button"
                class="absolute top-0 right-0 text-red-500 bg-transparent hover:text-red-400 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                data-modal-hide="{{ 'lihatDetailDosen' . $item->id }}">
                <svg aria-hidden="true" class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-24">
                <div class="flex w-full justify-center">
                    <img src="{{ asset('foto_dosen/' . $item->foto) }}" alt=""
                        class="w-36 h-36 rounded-full object-cover">
                </div>
                <div class="py-5">
                    <h1 class="text-3xl text-center text-gray-900 font-bold">{{ ucwords($item->nama) }}</h1>
                    <h1 class="text-2xl text-center text-gray-500 font-bold">Dosen</h1>
                </div>
                <div class="text-lg text-center text-gray-500 font-semibold">
                    <h1 class="">{{ $item->nidn }}</h1>
                    <h1 class="">Fakultas</h1>
                    <h1 class="">Program Studi</h1>
                    <h1 class="">{{ $item->alamat }}</h1>
                </div>
            </div>
        </div>
    </div>
</div>
