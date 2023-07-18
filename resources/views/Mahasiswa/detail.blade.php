@extends('templating.template')
@section('title', 'Detail Mahasiswa')

@section('content')

    <div class="py-6">
        <h1 class="text-4xl text-gray-900 font-bold">
            Data Mahasiswa
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
        <a href="{{ route('Mahasiswa') }}">
            <h1 class="text-sm text-gray-600 font-medium">Mahasiswa</h1>
        </a>
        <span class="text-sm text-gray-600 font-medium cursor-default">/</span>
        <a href="{{ route('Mahasiswa') }}">
            <h1 class="text-sm text-amber-600 font-bold cursor-default">Data Mahasiswa</h1>
        </a>
    </div>
    {{-- End Breadcrumb --}}

    {{-- Start Data Mahasiswa --}}
    <div class="w-full flex mt-16 space-x-10">
        <div class="w-[582px] h-[578px] border border-amber-600 rounded-t-lg shadow-xl">
            <div class="w-full">
                <div class="flex justify-between space-x-20 p-5 bg-yellow-200 rounded-t-lg border-b border-amber-600">
                    <h1 class="text-sm text-amber-600 font-bold">Data Mahasiswa</h1>
                    <h1 class="text-sm text-sky-600 font-bold">Edit Data Mahasiswa</h1>
                </div>
                <div class="py-10">
                    <div class="w-full flex justify-center">
                        <img src="{{ asset('image/1.jpeg') }}" alt="" class="w-36 h-53 object-cover">
                    </div>
                    <h1 class="mt-5 text-gray-600 text-center font-bold">Daffa Bima Perdana</h1>
                </div>
                <div class="flex px-5 space-x-8 text-gray-600 font-medium">
                    <div class="">
                        <h1>NIM</h1>
                        <h1>Angkatan</h1>
                        <h1>Fakultas</h1>
                        <h1>Program Studi</h1>
                        <h1>Kelas</h1>
                    </div>
                    <div class="">
                        <h1>:1998278938</h1>
                        <h1>:2019</h1>
                        <h1>:Ilmu Komputer</h1>
                        <h1>:Teknik Informatika</h1>
                        <h1>:A</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full">
            <div class="w-full flex space-x-5">
                <div class="w-64 bg-white border border-gray-300 shadow-md rounded-lg">
                    <div class="flex px-5 py-4 items-center justify-between">
                        <div class="text-gray-900">
                            <h1 class="text-2xl text-gray-600 font-bold">3.60</h1>
                            <h1 class="pt-3 text-base text-gray-900 font-semibold">Index Prestasi Kumulatif</h1>
                        </div>
                    </div>
                </div>
                <div class="w-64 bg-white border border-gray-300 shadow-md rounded-lg">
                    <div class="flex px-5 py-4 items-center justify-between">
                        <div class="text-gray-900">
                            <h1 class="text-2xl text-gray-600 font-bold">3.60</h1>
                            <h1 class="pt-3 text-base text-gray-900 font-semibold">Index Prestasi Sementara</h1>
                        </div>
                    </div>
                </div>
                <div class="w-64 bg-white border border-gray-300 shadow-md rounded-lg">
                    <div class="flex px-5 py-4 items-center justify-between">
                        <div class="text-gray-900">
                            <h1 class="text-2xl text-gray-600 font-bold">Semester 8</h1>
                            <h1 class="pt-3 text-base text-gray-900 font-semibold">Status Mahasiswa</h1>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Start Table --}}
            <div class="py-10">
                <table class="w-full text-left rounded-lg overflow-hidden">
                    <thead class="uppercase text-lg text-amber-600 font-bold bg-yellow-200 border border-yellow-400">
                        <tr class="border border-yellow-400">
                            <th scope="col" class="p-4">No</th>
                            <th scope="col" class="px-6 py-4">Semester</th>
                            <th scope="col" class="px-6 py-4">SKS</th>
                            <th scope="col" class="px-6 py-4">IPS</th>
                            <th scope="col" class="px-6 py-4">IP</th>
                        </tr>
                    </thead>
                    <tbody class="border border-yellow-400">
                        @for ($i = 1; $i < 8; $i++)
                            <tr class="bg-white text-base text-gray-600">
                                <th class="p-4">
                                    1
                                </th>
                                <td class="px-6 py-4 w-full">
                                    <a href="{{ route('DaftarNilai') }}" class="text-blue-500">
                                        Semester 1
                                    </a>
                                </td>
                                <td class="px-6 py-4">
                                    22
                                </td>
                                <td class="px-6 py-4 text-blue-500">
                                    <a href="">
                                        3.60
                                    </a>
                                </td>
                                <td class="px-6 py-4 text-blue-500">
                                    <a href="">
                                        3.60
                                    </a>
                                </td>
                            </tr>
                        @endfor
                        <tr>
                            <th colspan="2" class="px-4">Total</th>
                            <th class="px-6 py-4">22</th>
                            <th class="px-6 py-4">3.60</th>
                            <th class="px-6 py-4">3.60</th>
                        </tr>
                    </tbody>
                </table>
            </div>
            {{-- End Table --}}
        </div>

    </div>
    {{-- End Data Mahasiswa --}}

@endsection
