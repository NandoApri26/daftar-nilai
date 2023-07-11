@extends('templating.template')
@section('title', 'Mahasiswa')

@section('content')

    <div class="py-6">
        <h1 class="text-4xl text-gray-900 font-bold">
            Mahasiswa
        </h1>
    </div>

    {{-- Start Breadcrumb --}}
    <div class="flex space-x-3 mt-5">
        <a href="{{ route('Dashboard') }}" class="group">
            <svg width="20" height="19" viewBox="0 0 20 19" fill="none">
                <path
                    d="M8.70741 0.792786C8.51988 0.605315 8.26557 0.5 8.00041 0.5C7.73524 0.5 7.48094 0.605315 7.29341 0.792786L0.293407 7.79279C0.111249 7.98139 0.0104547 8.23399 0.0127331 8.49619C0.0150115 8.75838 0.12018 9.0092 0.305589 9.1946C0.490997 9.38001 0.741809 9.48518 1.00401 9.48746C1.2662 9.48974 1.5188 9.38894 1.70741 9.20679L2.00041 8.91379V15.4998C2.00041 15.765 2.10576 16.0194 2.2933 16.2069C2.48084 16.3944 2.73519 16.4998 3.00041 16.4998H5.00041C5.26562 16.4998 5.51998 16.3944 5.70751 16.2069C5.89505 16.0194 6.00041 15.765 6.00041 15.4998V13.4998C6.00041 13.2346 6.10576 12.9802 6.2933 12.7927C6.48084 12.6051 6.73519 12.4998 7.00041 12.4998H9.00041C9.26562 12.4998 9.51998 12.6051 9.70751 12.7927C9.89505 12.9802 10.0004 13.2346 10.0004 13.4998V15.4998C10.0004 15.765 10.1058 16.0194 10.2933 16.2069C10.4808 16.3944 10.7352 16.4998 11.0004 16.4998H13.0004C13.2656 16.4998 13.52 16.3944 13.7075 16.2069C13.8951 16.0194 14.0004 15.765 14.0004 15.4998V8.91379L14.2934 9.20679C14.482 9.38894 14.7346 9.48974 14.9968 9.48746C15.259 9.48518 15.5098 9.38001 15.6952 9.1946C15.8806 9.0092 15.9858 8.75838 15.9881 8.49619C15.9904 8.23399 15.8896 7.98139 15.7074 7.79279L8.70741 0.792786V0.792786Z"
                    fill="#475569" class="group-hover:fill-amber-600 group-hover:text-amber-600" />
            </svg>
        </a>
        <a href="{{ route('Dashboard') }}">
            <h1 class="text-sm text-gray-600 font-medium hover:text-amber-600">Home</h1>
        </a>
        <span class="text-sm text-gray-600 font-medium cursor-default">/</span>
        <h1 class="text-sm text-amber-600 font-bold cursor-default">Mahasiswa</h1>
    </div>
    {{-- End Breadcrumb --}}

    {{-- Start Group --}}
    <div class="flex w-full space-x-10 mt-8 justify-between">
        {{-- Search --}}
        <form class="w-full">
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
            <div class="relative w-full">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <input type="search" id="default-search"
                    class="block w-full p-4 pl-10 text-sm text-gray-900 border border-yellow-300 rounded-lg bg-gray-50 focus:ring-0 focus:border-yellow-400 dark:text-white"
                    placeholder="Masukkan kata kunci...." required>
                <button type="submit"
                    class="text-amber-600 absolute right-2.5 bottom-2.5 bg-yellow-200 hover:bg-yellow-300 focus:ring-4 focus:outline-none focus:ring-yellow-200 font-medium rounded-lg text-sm px-4 py-2">Search</button>
            </div>
        </form>
        {{-- End Search --}}

        <div class="w-full flex justify-end space-x-3">
            {{-- Start Tambah data --}}
            <button type="button" data-modal-target="tambahMahasiswa" data-modal-toggle="tambahMahasiswa"
                class="flex px-5 py-2 items-center space-x-3 bg-yellow-200 rounded-lg border border-amber-300 group hover:bg-yellow-100">
                <svg width="13" height="13" viewBox="0 0 15 15" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M7.5 0C7.89783 0 8.27936 0.158035 8.56067 0.439339C8.84196 0.720645 9 1.10218 9 1.5V6H13.5C13.8978 6 14.2794 6.15804 14.5607 6.43933C14.842 6.72064 15 7.10217 15 7.5C15 7.89783 14.842 8.27936 14.5607 8.56067C14.2794 8.84196 13.8978 9 13.5 9H9V13.5C9 13.8978 8.84196 14.2794 8.56067 14.5607C8.27936 14.842 7.89783 15 7.5 15C7.10217 15 6.72064 14.842 6.43933 14.5607C6.15804 14.2794 6 13.8978 6 13.5V9H1.5C1.10218 9 0.720645 8.84196 0.439339 8.56067C0.158035 8.27936 0 7.89783 0 7.5C0 7.10217 0.158035 6.72064 0.439339 6.43933C0.720645 6.15804 1.10218 6 1.5 6H6V1.5C6 1.10218 6.15804 0.720645 6.43933 0.439339C6.72064 0.158035 7.10217 0 7.5 0Z"
                        fill="#D97706" class="group-hover:fill-amber-500" />
                </svg>
                <h1 class="text-sm text-amber-600 font-medium group-hover:text-amber-500">Tambah Mahasiswa</h1>
            </button>
            @include('Mahasiswa.create')
            {{-- End Tambah data --}}

            {{-- Filter --}}
            <button type="button" data-modal-target="filter" data-modal-toggle="filter"
                class="flex px-5 py-2 items-center space-x-3 bg-yellow-200 rounded-lg border border-amber-300 group hover:bg-yellow-100">
                <svg width="15" height="15" viewBox="0 0 19 20" fill="none">
                    <path
                        d="M18.4713 5.44174L12.1953 11.3256L12 11.5086V11.7675V16.2499C11.9999 16.4156 11.9297 16.5746 11.8047 16.6918L9.13801 19.1918C9.13802 19.1918 9.13798 19.1918 9.13801 19.1918C9.04478 19.2791 8.92597 19.3386 8.7967 19.3628C8.6674 19.3869 8.53337 19.3745 8.41157 19.3271C8.28977 19.2799 8.18566 19.1998 8.11241 19.097C8.03918 18.9943 8.00006 18.8735 8.00001 18.75V11.7675V11.5086L7.80474 11.3256L1.52874 5.44181C1.40374 5.32466 1.33342 5.1657 1.33334 5C1.33334 5.00005 1.33334 4.99995 1.33334 5V1.25C1.33334 1.08424 1.40358 0.925269 1.52861 0.808059C1.65362 0.690848 1.8232 0.625 2.00001 0.625H18C18.1768 0.625 18.3464 0.690849 18.4715 0.808057C18.5964 0.925267 18.6667 1.08424 18.6667 1.25V4.99986C18.6667 4.99981 18.6667 4.99991 18.6667 4.99986C18.6665 5.16556 18.5964 5.32459 18.4713 5.44174Z"
                        fill="#D97706" />
                    <path
                        d="M9.13801 19.1918L11.8047 16.6918C11.9297 16.5746 11.9999 16.4156 12 16.2499V11.7675V11.5086L12.1953 11.3256L18.4713 5.44174C18.5964 5.32459 18.6665 5.16556 18.6667 4.99986M9.13801 19.1918C9.13798 19.1918 9.13802 19.1918 9.13801 19.1918ZM9.13801 19.1918C9.04478 19.2791 8.92597 19.3386 8.7967 19.3628C8.6674 19.3869 8.53337 19.3745 8.41157 19.3271C8.28977 19.2799 8.18566 19.1998 8.11241 19.097C8.03918 18.9943 8.00006 18.8735 8.00001 18.75V11.7675V11.5086L7.80474 11.3256L1.52874 5.44181C1.40374 5.32466 1.33342 5.1657 1.33334 5M1.33334 5C1.33334 4.99995 1.33334 5.00005 1.33334 5ZM1.33334 5V1.25C1.33334 1.08424 1.40358 0.925269 1.52861 0.808059C1.65362 0.690848 1.8232 0.625 2.00001 0.625H18C18.1768 0.625 18.3464 0.690849 18.4715 0.808057C18.5964 0.925267 18.6667 1.08424 18.6667 1.25V4.99986M18.6667 4.99986C18.6667 4.99991 18.6667 4.99981 18.6667 4.99986Z"
                        stroke="#D97706" fill="#D97706" class="group-hover:fill-amber-500" />
                </svg>
                <h1 class="text-sm text-amber-600 font-medium group-hover:text-amber-500">Filter</h1>
            </button>
            {{-- Filter --}}

            {{-- Urutkan --}}
            <button type="button" data-modal-target="tambahMataKuliah" data-modal-toggle="tambahMataKuliah"
                class="flex px-5 py-2 items-center space-x-3 bg-yellow-200 rounded-lg border border-amber-300 group hover:bg-yellow-100">
                <svg width="15" height="15" viewBox="0 0 20 20" fill="none">
                    <path
                        d="M14.6297 18.3335L18.3333 14.1669M14.6297 18.3335V5.83353M14.6297 18.3335L10.9259 14.1669M1.66666 1.66687H13.7037M1.66666 5.83353H9.99999M1.66666 10.0002H9.99999"
                        stroke="#D97706" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <h1 class="text-sm text-amber-600 font-medium group-hover:text-amber-500">Urutkan</h1>
            </button>
        </div>

    </div>
    {{-- End Group --}}

    {{-- Start table --}}
    <div class="mt-5">
        <table class="w-full text-left rounded-lg overflow-hidden">
            <thead class="uppercase text-xs text-amber-600 font-bold align-top bg-yellow-200 border border-yellow-400">
                <tr class="">
                    <th scope="col" class="px-2 p-4 text-center">No</th>
                    <th scope="col" class="px-2 py-4">Nama</th>
                    <th scope="col" class="px-2 py-4">NIM</th>
                    <th scope="col" class="px-2 py-4">Angkatan</th>
                    <th scope="col" class="px-2 py-4">Fakultas</th>
                    <th scope="col" class="px-2 py-4">Program Studi</th>
                    <th scope="col" class="px-2 py-4">Status Masuk</th>
                    <th scope="col" class="px-2 py-4">Kelas</th>
                    <th scope="col" class="px-2 py-4">Foto</th>
                    <th scope="col" class="px-2 py-4">Aksi</th>
                </tr>
            </thead>
            <tbody class="border border-yellow-400 align-top">
                @for ($i = 1; $i <= 3; $i++)
                    <tr class="bg-white text-xs text-gray-600">
                        <th class="px-2 py-4 text-center">
                            1
                        </th>
                        <td class="px-2 py-4">
                            Daffa Bima Perdana
                        </td>
                        <td class="px-2 py-4">
                            191420167
                        </td>
                        <td class="px-2 py-4">
                            2019
                        </td>
                        <td class="px-2 py-4">
                            Ilmu Komputer
                        </td>
                        <td class="px-2 py-4">
                            Teknik Informatika
                        </td>
                        <td class="px-2 py-4">
                            Mandiri
                        </td>
                        <td class="px-2 py-4">
                            Pagi
                        </td>
                        <td class="px-2 py-4">
                            <img src="{{ asset('image/bg.jpeg') }}" alt="image" class="w-16 rounded-md">
                        </td>
                        <td class="flex flex-col px-2 py-4 space-y-2">
                            {{-- View --}}
                            <a href="{{ route('Mahasiswa.show', 1) }}" class="flex items-center space-x-2">
                                <svg width="16" height="17" viewBox="0 0 20 21" fill="none">
                                    <path
                                        d="M0.199951 10.5C1.12114 8.69302 2.524 7.17591 4.25347 6.11634C5.98295 5.05677 7.97171 4.496 9.99995 4.496C12.0282 4.496 14.017 5.05677 15.7464 6.11634C17.4759 7.17591 18.8788 8.69302 19.7999 10.5C18.8788 12.307 17.4759 13.8241 15.7464 14.8837C14.017 15.9432 12.0282 16.504 9.99995 16.504C7.97171 16.504 5.98295 15.9432 4.25347 14.8837C2.524 13.8241 1.12114 12.307 0.199951 10.5ZM9.99995 14.5C11.0608 14.5 12.0782 14.0786 12.8284 13.3284C13.5785 12.5783 14 11.5609 14 10.5C14 9.43913 13.5785 8.42172 12.8284 7.67157C12.0782 6.92143 11.0608 6.5 9.99995 6.5C8.93909 6.5 7.92167 6.92143 7.17152 7.67157C6.42138 8.42172 5.99995 9.43913 5.99995 10.5C5.99995 11.5609 6.42138 12.5783 7.17152 13.3284C7.92167 14.0786 8.93909 14.5 9.99995 14.5ZM9.99995 12.5C9.46952 12.5 8.96081 12.2893 8.58574 11.9142C8.21067 11.5391 7.99995 11.0304 7.99995 10.5C7.99995 9.96957 8.21067 9.46086 8.58574 9.08579C8.96081 8.71071 9.46952 8.5 9.99995 8.5C10.5304 8.5 11.0391 8.71071 11.4142 9.08579C11.7892 9.46086 12 9.96957 12 10.5C12 11.0304 11.7892 11.5391 11.4142 11.9142C11.0391 12.2893 10.5304 12.5 9.99995 12.5Z"
                                        fill="#2563EB" />
                                </svg>
                                <h1 class="text-sm text-blue-600 font-medium">Lihat Detail</h1>
                            </a>

                            {{-- Edit --}}

                            {{-- Delete --}}
                            <button type="button" data-modal-target="hapus" data-modal-toggle="hapus"
                                class="flex items-center space-x-2">
                                <svg width="16" height="17" viewBox="0 0 20 21" fill="none">
                                    <path
                                        d="M16.875 3.00001H13.125V1.75C13.125 1.05938 12.5656 0.5 11.875 0.5H8.12499C7.43436 0.5 6.87499 1.05938 6.87499 1.75V3.00001H3.125C2.43438 3.00001 1.875 3.55938 1.875 4.25001V5.50001C1.875 6.19 2.43438 6.74938 3.12376 6.75002H16.8757C17.5656 6.74938 18.125 6.19 18.125 5.50001V4.24998C18.125 3.55938 17.5656 3.00001 16.875 3.00001ZM11.875 3.00001H8.12499V2.37499C8.12499 2.03 8.40498 1.74998 8.74998 1.74998H11.25C11.595 1.74998 11.875 2.02997 11.875 2.37499V3.00001ZM3.12498 18C3.12498 19.3806 4.24434 20.5 5.62498 20.5H14.375C15.7556 20.5 16.875 19.3806 16.875 18V7.99999H3.12498V18ZM12.5 9.87501C12.5 9.53002 12.78 9.25 13.125 9.25C13.47 9.25 13.75 9.52999 13.75 9.87501V17.375C13.75 17.72 13.47 18 13.125 18C12.78 18 12.5 17.72 12.5 17.375V9.87501ZM9.37499 9.87501C9.37499 9.53002 9.65499 9.25 10 9.25C10.345 9.25 10.625 9.52999 10.625 9.87501V17.375C10.625 17.72 10.345 18 10 18C9.65501 18 9.37499 17.72 9.37499 17.375V9.87501ZM6.24997 9.87501C6.24997 9.53002 6.52997 9.25 6.87499 9.25C7.22001 9.25 7.5 9.52999 7.5 9.87501V17.375C7.5 17.72 7.22001 18 6.87499 18C6.52997 18 6.24997 17.72 6.24997 17.375V9.87501Z"
                                        fill="#DC2626" />
                                </svg>
                                <h1 class="text-sm text-red-600 font-medium">Hapus</h1>
                            </button>
                        </td>
                    </tr>
                    <tr class="bg-yellow-50 text-xs text-gray-600">
                        <th class="px-2 py-4 text-center">
                            1
                        </th>
                        <td class="px-2 py-4">
                            Daffa Bima Perdana
                        </td>
                        <td class="px-2 py-4">
                            191420167
                        </td>
                        <td class="px-2 py-4">
                            2019
                        </td>
                        <td class="px-2 py-4">
                            Ilmu Komputer
                        </td>
                        <td class="px-2 py-4">
                            Teknik Informatika
                        </td>
                        <td class="px-2 py-4">
                            Mandiri
                        </td>
                        <td class="px-2 py-4">
                            Pagi
                        </td>
                        <td class="px-2 py-4">
                            <img src="{{ asset('image/bg.jpeg') }}" alt="image" class="w-16 rounded-md">
                        </td>
                        <td class="flex flex-col px-2 py-4 space-y-2">
                            {{-- View --}}
                            <a href="{{ route('Mahasiswa.show', 1) }}" class="flex items-center space-x-2">
                                <svg width="16" height="17" viewBox="0 0 20 21" fill="none">
                                    <path
                                        d="M0.199951 10.5C1.12114 8.69302 2.524 7.17591 4.25347 6.11634C5.98295 5.05677 7.97171 4.496 9.99995 4.496C12.0282 4.496 14.017 5.05677 15.7464 6.11634C17.4759 7.17591 18.8788 8.69302 19.7999 10.5C18.8788 12.307 17.4759 13.8241 15.7464 14.8837C14.017 15.9432 12.0282 16.504 9.99995 16.504C7.97171 16.504 5.98295 15.9432 4.25347 14.8837C2.524 13.8241 1.12114 12.307 0.199951 10.5ZM9.99995 14.5C11.0608 14.5 12.0782 14.0786 12.8284 13.3284C13.5785 12.5783 14 11.5609 14 10.5C14 9.43913 13.5785 8.42172 12.8284 7.67157C12.0782 6.92143 11.0608 6.5 9.99995 6.5C8.93909 6.5 7.92167 6.92143 7.17152 7.67157C6.42138 8.42172 5.99995 9.43913 5.99995 10.5C5.99995 11.5609 6.42138 12.5783 7.17152 13.3284C7.92167 14.0786 8.93909 14.5 9.99995 14.5ZM9.99995 12.5C9.46952 12.5 8.96081 12.2893 8.58574 11.9142C8.21067 11.5391 7.99995 11.0304 7.99995 10.5C7.99995 9.96957 8.21067 9.46086 8.58574 9.08579C8.96081 8.71071 9.46952 8.5 9.99995 8.5C10.5304 8.5 11.0391 8.71071 11.4142 9.08579C11.7892 9.46086 12 9.96957 12 10.5C12 11.0304 11.7892 11.5391 11.4142 11.9142C11.0391 12.2893 10.5304 12.5 9.99995 12.5Z"
                                        fill="#2563EB" />
                                </svg>
                                <h1 class="text-sm text-blue-600 font-medium">Lihat Detail</h1>
                            </a>

                            {{-- Edit --}}
                            <button type="button" data-modal-target="editMahasiswa" data-modal-toggle="editMahasiswa"
                                class="flex items-center space-x-2 group">
                                <svg width="16" height="17" viewBox="0 0 20 21" fill="none">
                                    <path
                                        d="M20.0934 2.33966L18.3042 0.475835C18.1195 0.283128 17.8766 0.186562 17.6341 0.186562C17.3916 0.186562 17.1491 0.282701 16.9644 0.475407L15.5332 1.96407L18.6622 5.22256L20.0934 3.73432C20.4632 3.34891 20.4632 2.72379 20.0934 2.33966Z"
                                        fill="#D87706" />
                                    <path
                                        d="M6.24268 11.6374L9.37208 14.8963L17.9923 5.92074L14.8629 2.66183L6.24268 11.6374Z"
                                        fill="#D87706" />
                                    <path d="M5.56748 12.3347L4.89941 16.288L8.69688 15.5932L5.56748 12.3347Z"
                                        fill="#D87706" />
                                    <path
                                        d="M14.2182 18.0497H2.41905V5.74129H10.746L12.7981 3.60485H1.69528C0.966584 3.60485 0.370605 4.22656 0.370605 4.9867V18.8047C0.370605 19.5649 0.966584 20.1866 1.69528 20.1866H14.9416C15.6703 20.1866 16.2662 19.5649 16.2662 18.8047V8.92543L14.2182 11.058V18.0497Z"
                                        fill="#D87706" />
                                </svg>
                                <h1 class="text-sm text-amber-600 font-medium">Edit</h1>
                            </button>
                            @include('Mahasiswa.update')

                            {{-- Delete --}}
                            <button type="button" data-modal-target="hapus" data-modal-toggle="hapus"
                                class="flex items-center space-x-2">
                                <svg width="16" height="17" viewBox="0 0 20 21" fill="none">
                                    <path
                                        d="M16.875 3.00001H13.125V1.75C13.125 1.05938 12.5656 0.5 11.875 0.5H8.12499C7.43436 0.5 6.87499 1.05938 6.87499 1.75V3.00001H3.125C2.43438 3.00001 1.875 3.55938 1.875 4.25001V5.50001C1.875 6.19 2.43438 6.74938 3.12376 6.75002H16.8757C17.5656 6.74938 18.125 6.19 18.125 5.50001V4.24998C18.125 3.55938 17.5656 3.00001 16.875 3.00001ZM11.875 3.00001H8.12499V2.37499C8.12499 2.03 8.40498 1.74998 8.74998 1.74998H11.25C11.595 1.74998 11.875 2.02997 11.875 2.37499V3.00001ZM3.12498 18C3.12498 19.3806 4.24434 20.5 5.62498 20.5H14.375C15.7556 20.5 16.875 19.3806 16.875 18V7.99999H3.12498V18ZM12.5 9.87501C12.5 9.53002 12.78 9.25 13.125 9.25C13.47 9.25 13.75 9.52999 13.75 9.87501V17.375C13.75 17.72 13.47 18 13.125 18C12.78 18 12.5 17.72 12.5 17.375V9.87501ZM9.37499 9.87501C9.37499 9.53002 9.65499 9.25 10 9.25C10.345 9.25 10.625 9.52999 10.625 9.87501V17.375C10.625 17.72 10.345 18 10 18C9.65501 18 9.37499 17.72 9.37499 17.375V9.87501ZM6.24997 9.87501C6.24997 9.53002 6.52997 9.25 6.87499 9.25C7.22001 9.25 7.5 9.52999 7.5 9.87501V17.375C7.5 17.72 7.22001 18 6.87499 18C6.52997 18 6.24997 17.72 6.24997 17.375V9.87501Z"
                                        fill="#DC2626" />
                                </svg>
                                <h1 class="text-sm text-red-600 font-medium">Hapus</h1>
                            </button>
                        </td>
                    </tr>
                @endfor
            </tbody>
        </table>
    </div>
    {{-- End table --}}
@endsection
