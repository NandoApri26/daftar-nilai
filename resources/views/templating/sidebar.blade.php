{{-- Start Sidebar --}}
<aside class="h-full w-20% px-10 fixed top-0 z-30 bg-white border border-gray-300">
    <div class="items-center mt-36">
        <a href="{{ url('/') }}"
            class="flex items-center pl-3 pr-7 py-2 my-2 space-x-5 group  rounded-bl-lg rounded-tr-lg hover:bg-yellow-200  hover:rounded-bl-lg hover:rounded-tr-lg">
            <svg width="20" height="19" viewBox="0 0 20 19" fill="none">
                <path d="M8.70741 0.792786C8.51988 0.605315 8.26557 0.5 8.00041 0.5C7.73524 0.5 7.48094 0.605315 7.29341 0.792786L0.293407 7.79279C0.111249 7.98139 0.0104547 8.23399 0.0127331 8.49619C0.0150115 8.75838 0.12018 9.0092 0.305589 9.1946C0.490997 9.38001 0.741809 9.48518 1.00401 9.48746C1.2662 9.48974 1.5188 9.38894 1.70741 9.20679L2.00041 8.91379V15.4998C2.00041 15.765 2.10576 16.0194 2.2933 16.2069C2.48084 16.3944 2.73519 16.4998 3.00041 16.4998H5.00041C5.26562 16.4998 5.51998 16.3944 5.70751 16.2069C5.89505 16.0194 6.00041 15.765 6.00041 15.4998V13.4998C6.00041 13.2346 6.10576 12.9802 6.2933 12.7927C6.48084 12.6051 6.73519 12.4998 7.00041 12.4998H9.00041C9.26562 12.4998 9.51998 12.6051 9.70751 12.7927C9.89505 12.9802 10.0004 13.2346 10.0004 13.4998V15.4998C10.0004 15.765 10.1058 16.0194 10.2933 16.2069C10.4808 16.3944 10.7352 16.4998 11.0004 16.4998H13.0004C13.2656 16.4998 13.52 16.3944 13.7075 16.2069C13.8951 16.0194 14.0004 15.765 14.0004 15.4998V8.91379L14.2934 9.20679C14.482 9.38894 14.7346 9.48974 14.9968 9.48746C15.259 9.48518 15.5098 9.38001 15.6952 9.1946C15.8806 9.0092 15.9858 8.75838 15.9881 8.49619C15.9904 8.23399 15.8896 7.98139 15.7074 7.79279L8.70741 0.792786V0.792786Z"
                    fill="#475569" class="group-hover:fill-amber-600 group-hover:text-amber-600" />
            </svg>
            <span class="text-gray-900 text-base font-bold group-hover:text-amber-600">Dashboard</span>
        </a>
        <a href="{{ url('/Dosen')}}"
            class="flex items-center pl-3 pr-7 py-2 my-2 space-x-5 group hover:bg-yellow-200  hover:rounded-bl-lg hover:rounded-tr-lg">
            <svg width="20" height="19" viewBox="0 0 20 19" fill="none">
                <path
                    d="M9.99999 9.5C12.8764 9.5 15.2083 7.5193 15.2083 5.07598C15.2083 2.63267 12.8764 0.651962 9.99999 0.651962C7.12351 0.651962 4.79166 2.63267 4.79166 5.07598C4.79166 7.5193 7.12351 9.5 9.99999 9.5Z"
                    fill="#475569" class="group-hover:fill-amber-600 group-hover:text-amber-600" />
                <path
                    d="M10.0002 11.712C4.7814 11.712 0.531403 14.6849 0.531403 18.348C0.531403 18.5958 0.760569 18.7904 1.05224 18.7904H18.9481C19.2398 18.7904 19.4689 18.5958 19.4689 18.348C19.4689 14.6849 15.2189 11.712 10.0002 11.712Z"
                    fill="#475569" class="group-hover:fill-amber-600 group-hover:text-amber-600" />
            </svg>
            <span class="text-gray-900 text-base font-bold group-hover:text-amber-600">Dosen</span>
        </a>
        <a href="{{ url('/Mahasiswa')}}"
            class="flex items-center pl-3 pr-7 py-2 my-2 space-x-5 group hover:bg-yellow-200  hover:rounded-bl-lg hover:rounded-tr-lg">
            <svg width="20" height="19" viewBox="0 0 20 19" fill="none">
                <path
                    d="M13.125 9.5C12.3219 9.5 11.5453 9.15934 10.9375 8.54109C10.3465 7.93807 9.98554 7.13391 9.92187 6.27742C9.8539 5.36379 10.1473 4.52363 10.7476 3.91133C11.348 3.29902 12.1875 2.96875 13.125 2.96875C14.0559 2.96875 14.8976 3.30496 15.4961 3.91578C16.1004 4.53254 16.3945 5.37121 16.3266 6.27705C16.2613 7.13465 15.9008 7.93844 15.3109 8.54072C14.7047 9.15934 13.9285 9.5 13.125 9.5Z"
                    fill="#475569" class="group-hover:fill-amber-600 group-hover:text-amber-600" />
                <path
                    d="M18.2746 16.0312H7.97578C7.8102 16.0321 7.64662 15.9968 7.49764 15.9282C7.34865 15.8595 7.21823 15.7593 7.11641 15.6353C7.0084 15.5008 6.93381 15.3449 6.89823 15.1791C6.86265 15.0134 6.86699 14.8422 6.91094 14.6782C7.23985 13.4236 8.05469 12.383 9.26719 11.6694C10.3434 11.0363 11.7133 10.6875 13.125 10.6875C14.5645 10.6875 15.8984 11.0215 16.9809 11.6542C18.1961 12.3641 19.0121 13.4106 19.3395 14.6805C19.3829 14.8445 19.3867 15.0157 19.3507 15.1814C19.3148 15.347 19.2399 15.5028 19.1316 15.6371C19.0299 15.7606 18.8998 15.8603 18.7512 15.9286C18.6027 15.997 18.4397 16.0321 18.2746 16.0312Z"
                    fill="#475569" class="group-hover:fill-amber-600 group-hover:text-amber-600" />
                <path
                    d="M5.74219 9.64844C4.36758 9.64844 3.15899 8.43422 3.04688 6.94205C2.99141 6.1776 3.24219 5.47066 3.75 4.95225C4.25235 4.43902 4.96094 4.15625 5.74219 4.15625C6.52344 4.15625 7.22657 4.44051 7.73164 4.9567C8.24336 5.4792 8.49336 6.18465 8.43477 6.94279C8.32266 8.43459 7.11446 9.64844 5.74219 9.64844Z"
                    fill="#475569" class="group-hover:fill-amber-600 group-hover:text-amber-600" />
                <path
                    d="M8.30702 10.8155C7.61991 10.4964 6.72811 10.3368 5.74256 10.3368C4.59178 10.3368 3.47421 10.6218 2.5953 11.1391C1.59881 11.7266 0.928502 12.5819 0.657799 13.6147C0.618183 13.7632 0.614437 13.9184 0.646838 14.0685C0.67924 14.2186 0.746951 14.3598 0.844908 14.4816C0.937856 14.5949 1.05693 14.6865 1.19298 14.7493C1.32903 14.8121 1.47842 14.8444 1.62967 14.8438H5.96561C6.03879 14.8437 6.10965 14.8193 6.16583 14.7748C6.22201 14.7302 6.25995 14.6684 6.27303 14.5999C6.27733 14.5766 6.2828 14.5532 6.28905 14.5302C6.6203 13.2662 7.39647 12.1982 8.54335 11.4197C8.58553 11.3908 8.61946 11.3524 8.64205 11.3079C8.66465 11.2634 8.67521 11.2142 8.67277 11.1649C8.67032 11.1155 8.65496 11.0676 8.62806 11.0253C8.60116 10.983 8.56359 10.9478 8.51874 10.9228C8.45741 10.8886 8.3871 10.8526 8.30702 10.8155Z"
                    fill="#475569" class="group-hover:fill-amber-600 group-hover:text-amber-600" />
            </svg>
            <span class="text-gray-900 text-base font-bold group-hover:text-amber-600">Mahasiswa</span>
        </a>
        <div
            class="flex items-center pl-3 pr-7 py-2 my-2 group hover:bg-yellow-200  hover:rounded-bl-lg hover:rounded-tr-lg">
            <a href="{{ url('/MataKuliah')}}" id="matKul" data-dropdown-toggle="mataKuliah" data-dropdown-trigger="hover" type="button"
                class="w-full flex justify-between items-center space-x-10">
                <div class="flex items-center space-x-3 ">
                    <svg width="20" height="19" viewBox="0 0 20 19" fill="none">
                        <path
                            d="M19.69 4.7309C19.5222 4.51791 19.2858 4.3545 18.981 4.24037C18.9973 4.50672 18.9774 4.72351 18.9213 4.89099L15.3184 16.1519C15.2542 16.3496 15.114 16.5074 14.8981 16.6253C14.6818 16.7433 14.4577 16.8023 14.2255 16.8023H3.14058C2.17981 16.8023 1.60343 16.5365 1.41119 16.0036C1.33114 15.7982 1.33518 15.6348 1.42331 15.5131C1.51131 15.3989 1.66342 15.3417 1.87971 15.3417H12.3162C13.0608 15.3417 13.5752 15.2105 13.8595 14.948C14.144 14.6856 14.4301 14.1018 14.7182 13.1967L18.0088 2.8598C18.1849 2.29698 18.1129 1.80253 17.7926 1.37669C17.4722 0.950854 17.016 0.737816 16.4234 0.737816H7.28413C7.18006 0.737816 6.97583 0.771943 6.67158 0.840438L6.68352 0.806111C6.45931 0.760554 6.26914 0.739694 6.11303 0.743331C5.95697 0.747287 5.81281 0.790965 5.68073 0.874766C5.54865 0.958446 5.44247 1.04772 5.36246 1.14275C5.28241 1.23786 5.20426 1.35959 5.12824 1.50784C5.05232 1.6563 4.98817 1.79325 4.93613 1.91873C4.8841 2.04422 4.82399 2.17741 4.75605 2.31828C4.68791 2.45898 4.62203 2.57495 4.55792 2.66619C4.50984 2.72705 4.44191 2.80689 4.35374 2.9058C4.26578 3.00466 4.19368 3.09218 4.13765 3.16823C4.08166 3.24428 4.04553 3.31273 4.02963 3.37363C4.01373 3.44201 4.02163 3.54279 4.05365 3.67599C4.08562 3.80898 4.09769 3.90589 4.08957 3.96679C4.0576 4.2558 3.94747 4.62273 3.7594 5.06782C3.57133 5.51284 3.401 5.8343 3.24894 6.03195C3.21693 6.06991 3.12893 6.15551 2.98477 6.28867C2.84061 6.42174 2.75257 6.53763 2.72064 6.6365C2.68859 6.6745 2.68657 6.78104 2.71458 6.95595C2.7426 7.13099 2.75274 7.25259 2.74466 7.32105C2.71248 7.57972 2.61258 7.92196 2.44436 8.34795C2.27614 8.77383 2.10809 9.12377 1.93987 9.39755C1.91593 9.44315 1.84796 9.53055 1.73573 9.65998C1.62375 9.78934 1.55556 9.89584 1.53158 9.97928C1.5156 10.0401 1.5177 10.1466 1.53764 10.2987C1.55754 10.4508 1.55556 10.5649 1.53158 10.6409C1.4676 10.9297 1.34746 11.2779 1.17129 11.6849C0.995167 12.0916 0.815002 12.44 0.630714 12.7288C0.582844 12.8049 0.516633 12.8944 0.432671 12.9969C0.348582 13.0995 0.282582 13.189 0.234501 13.265C0.186505 13.341 0.154451 13.4209 0.138424 13.5046C0.130432 13.5503 0.142547 13.6244 0.174558 13.7272C0.206528 13.8297 0.218601 13.9115 0.210482 13.9726C0.202406 14.0789 0.186505 14.2198 0.162486 14.3948C0.138424 14.5696 0.126352 14.6721 0.126352 14.7025C-0.0497755 15.159 -0.0418672 15.6421 0.150413 16.1519C0.374621 16.7449 0.772852 17.2453 1.34532 17.6521C1.91783 18.0591 2.51221 18.2623 3.1288 18.2623H14.2139C14.7341 18.2623 15.2245 18.0969 15.6849 17.7662C16.1453 17.4352 16.4517 17.0266 16.6035 16.5395L19.9061 6.20283C20.0824 5.65503 20.0105 5.16445 19.69 4.7309ZM6.91173 4.75372L7.16399 4.02346C7.19596 3.92459 7.26196 3.83903 7.36208 3.76678C7.46219 3.69465 7.56433 3.6584 7.6684 3.6584H14.9705C15.0825 3.6584 15.1625 3.69449 15.2106 3.76678C15.2585 3.83907 15.2667 3.92459 15.2348 4.02346L14.9823 4.75372C14.9501 4.85263 14.8844 4.93799 14.784 5.01044C14.6838 5.08257 14.5819 5.11866 14.4779 5.11866H7.17602C7.06388 5.11866 6.98387 5.08269 6.93579 5.01044C6.88775 4.93799 6.87976 4.85263 6.91173 4.75372ZM5.91499 7.67451L6.16721 6.94436C6.19918 6.8455 6.26527 6.75994 6.3653 6.68769C6.46541 6.6154 6.56742 6.57931 6.67162 6.57931H13.9734C14.0856 6.57931 14.1658 6.61528 14.2137 6.68769C14.2617 6.75998 14.2697 6.8455 14.2376 6.94436L13.9854 7.67451C13.9534 7.77338 13.8874 7.85901 13.7873 7.93119C13.6871 8.00348 13.5852 8.03956 13.481 8.03956H6.17916C6.0671 8.03956 5.98705 8.0036 5.93905 7.93119C5.89093 7.85901 5.88298 7.77338 5.91499 7.67451Z"
                            fill="#4B5563" class="group-hover:fill-amber-600 group-hover:text-amber-600" />
                    </svg>
                    <span class="text-gray-900 text-base font-bold group-hover:text-amber-600">Mata Kuliah</span>
                </div>
                {{-- <div class="">
                    <svg width="11" height="6" viewBox="0 0 11 6" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0.792599 0.292787C0.980099 0.105316 1.23443 0 1.49959 0C1.76476 0 2.01906 0.105316 2.20659 0.292787L5.49959 3.58579L8.79259 0.292787C8.9812 0.110629 9.2338 0.00983372 9.49599 0.0121121C9.75819 0.0143906 10.009 0.11956 10.1944 0.304968C10.3798 0.490376 10.485 0.741189 10.4873 1.00339C10.4895 1.26558 10.3888 1.51818 10.2066 1.70679L6.20659 5.70679C6.01906 5.89426 5.76476 5.99957 5.49959 5.99957C5.23443 5.99957 4.98012 5.89426 4.79259 5.70679L0.792599 1.70679C0.605098 1.51926 0.499799 1.26495 0.499799 0.999786C0.499799 0.734622 0.605098 0.480314 0.792599 0.292787Z"
                            fill="#4B5563" class="group-hover:fill-amber-600 group-hover:text-amber-600" />
                    </svg>
                </div> --}}
            </a>
            <!-- Dropdown menu -->
            {{-- <div id="mataKuliah" class="z-10 hidden w-48 bg-gray-100 border border-100 rounded-lg">
                <ul class="p-2 text-gray-900" aria-labelledby="matKul">
                    <li>
                        <a href="#"
                            class="block px-4 py-2 text-xs text-gray-900 font-bold hover:text-amber-600 hover:bg-yellow-200  hover:rounded-bl-md hover:rounded-tr-md">Sedang
                            Dikemas</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 text-xs text-gray-900 font-bold hover:text-amber-600 hover:bg-yellow-200  hover:rounded-bl-md hover:rounded-tr-md">Sistem
                            Informasi</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 text-xs text-gray-900 font-bold hover:text-amber-600 hover:bg-yellow-200  hover:rounded-bl-md hover:rounded-tr-md">Earnings</a>
                    </li>
                </ul>
            </div> --}}
        </div>
        <a href="{{ url('/logout') }}"
            class="flex items-center pl-3 pr-7 py-2 my-2 space-x-5 group hover:bg-yellow-200  hover:rounded-bl-lg hover:rounded-tr-lg">
            <svg width="20" height="19" viewBox="0 0 20 19" fill="none">
                <path
                    d="M8.33333 13.4583V11.0833H2.5V7.91667H8.33333V5.54167L12.5 9.5L8.33333 13.4583ZM8.33333 1.58333H15.8333C16.2754 1.58333 16.6993 1.75015 17.0118 2.04708C17.3244 2.34401 17.5 2.74674 17.5 3.16667V15.8333C17.5 16.2533 17.3244 16.656 17.0118 16.9529C16.6993 17.2498 16.2754 17.4167 15.8333 17.4167H8.33333C7.89131 17.4167 7.46738 17.2498 7.15482 16.9529C6.84226 16.656 6.66667 16.2533 6.66667 15.8333V14.25H8.33333V15.8333H15.8333V3.16667H8.33333V4.75H6.66667V3.16667C6.66667 2.74674 6.84226 2.34401 7.15482 2.04708C7.46738 1.75015 7.89131 1.58333 8.33333 1.58333Z"
                    fill="#4B5563" class="group-hover:fill-amber-600 group-hover:text-amber-600" />
            </svg>
            <span class="text-gray-900 text-base font-bold group-hover:text-amber-600">Log Out</span>
        </a>
    </div>
</aside>
{{-- End Sidebar --}}