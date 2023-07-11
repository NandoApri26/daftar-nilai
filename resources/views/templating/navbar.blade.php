{{-- Start Navbar --}}
<nav class="w-full flex fixed top-0 z-40 px-10 py-5 bg-white shadow-lg justify-between items-center ">
    <a href="{{ route('Dashboard') }}">
        {{-- <div class="text-4xl font-bold">
            <h1 class="text-sky-600">Template
                <span class="text-orange-600">Admin</span>
            </h1>
        </div> --}}
        <div class="flex space-x-5 items-center">
            <img src="{{ asset('image/LogoUnsri.png')}}" alt="Logo Unsri" class="w-12">
            <h1 class="text-gray-900 text-xl font-bold">Universitas Sriwijaya</h1>
        </div>
    </a>
    <div class="text-lg font-semibold">
        <h1 class="text-gray-900">Selamat Pagi,
            <span class="text-gray-600">Admin</span>
        </h1>
    </div>
</nav>
{{-- End Navbar --}}