<div id="{{ 'hapusMataKuliah' . $item->id }}" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-xl max-h-full">
        <!-- Modal content -->
        <div class="bg-white rounded-lg shadow w-full px-5 py-10">
            <div class="w-1/6 mx-auto">
                <svg id="Capa_1" x="0px" y="0px" viewBox="0 0 16 16"
                    style="enable-background:new 0 0 16 16;">
                    <g>
                        <path style="fill:#E02424;"
                            d="M8,0C3.582,0,0,3.582,0,8s3.582,8,8,8s8-3.582,8-8S12.418,0,8,0z M9,13H7v-2h2V13z M9,10H7V3h2V10z" />
                    </g>
                </svg>
            </div>
            <div class="mt-5">
                <h1 class="text-2xl text-red-600 text-center">Apakah yakin ingin menghapus data?</h1>
            </div>
            <div class="flex justify-center space-x-6 mt-5">
                <form method="POST" action="{{ url('/MataKuliah/' . $item->id) }}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="">
                        <h1
                            class="px-20 py-2 text-base text-white font-semibold bg-red-500 border border-red-600 rounded-md hover:bg-red-400 ">
                            Hapus</h1>
                    </button>
                </form>
                <button class="" type="button" data-modal-hide="{{ 'hapusMataKuliah' . $item->id }}">
                    <h1 aria-hidden="true"
                        class="px-20 py-2 text-base text-red-600 font-semibold bg-white border border-red-600 rounded-md hover:bg-red-100 ">
                        Cancel</h1>
                </button>
            </div>
        </div>
    </div>
</div>
