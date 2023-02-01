@extends('layouts.indexLayout')

@section('content')
    {{-- nav --}}
    <div class="sticky top-0 z-40 bg-white">
        <div class=" px-4 py-4 max-w-6xl mx-auto flex sm:flex-row flex-col justify-between items-center">
            <div class="flex  space-x-6 items-center font-semibold">
                <img src="{{ asset('img/logo.png') }}" alt="Mnukwar Papua" class="w-14 mr-4">
                <a href="#" class="sm:text-base text-xs">Home</a>
                <a href="#" class="text-gray-500 sm:text-base text-xs">About us</a>
                <a href="#" class="text-gray-500 sm:text-base text-xs">Programs</a>
                <a href="#" class="text-gray-500 sm:text-base text-xs">Galeri</a>
            </div>

            <a class="px-4 py-3 rounded bg-mnukwar text-white sm:text-base text-xs">Contact Us</a>
        </div>
    </div>

    {{-- hero --}}
    <div class="h-106 relative ">
        <div class="absolute bg-black z-20 w-full h-full opacity-40">   </div>
        <div class=" z-30 text-white text-center">
            <div class="flex flex-col h-full w-full px-4 items-center justify-center z-30 absolute">
                <h1 class="text-7xl font-bold">Mnukwar Papua</h1>
                <p class="max-w-3xl mx-auto mt-6">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto quaerat eaque debitis eos magnam minima earum eveniet enim repudiandae doloribus dolor ullam, magni ex a doloremque facilis deserunt dicta saepe?</p>
            </div>
        </div>
        <img src="{{ asset('img/hero.jpeg') }}" alt="" class="h-full w-full object-cover object-center relative">
    </div>

    {{-- terkini --}}
    <div class="max-w-6xl mx-auto px-4 grid sm:grid-cols-2 grid-cols-1 gap-4 mt-12">
        <div class="flex flex-col space-y-6 col-span-1 sm:order1 order-2">
            <h1 class="text-3xl x">A Section Title</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus laboriosam magni voluptas maiores architecto quas nobis enim veritatis est eaque exercitationem corrupti alias id modi, sint atque inventore vel illo?</p>
            <a class="px-4 text-center rounded py-2 text-white bg-mnukwar sm:w-32 w-full">
                Read More
            </a>
        </div>
        <div class="col-span-1 sm:order2 order-1">
            <img src="{{ asset('img/hero.jpeg') }}" alt="title" class="h-72 w-full object-center object-cover">
        </div>

    </div>

    {{-- headline --}}
    <div class="max-w-6xl mx-auto px-4 bg-gray-100 py-4 mt-12">
        <div class="w-full text-center">
            <h2 class="text-mnukwar text-4xl font-semibold">A punchy Headline</h2>
            <p class="mt-6 max-w-3xl mx-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae dolor a numquam provident quae dolores dolorum harum! Reiciendis, similique suscipit? Dignissimos aliquid vero aperiam suscipit ullam sint quae deleniti magnam.</p>
            <p class="mt-6 max-w-4xl  mx-auto bg-white px-2 py-2">
                <img src="{{ asset('img/hero.jpeg') }}" alt="headline" class="w-full  h-106 object-cover object-center ">
                <p class="font-light text-xs italic mt-4 max-w-3xl mx-auto">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur esse perferendis natus dignissimos amet ipsam, cupiditate accusantium hic tenetur minus cum aliquam architecto nesciunt minima consequuntur aliquid omnis similique voluptatibus.</p>
            </p>


            <div class=" grid md:grid-cols-3 grid-cols-1 gap-4 mt-32 ">
                <!-- card -->
                <div class="bg-white pb-6">
                    <div class="card">
                        <div class="card-header ">
                            <img
                                class="w-96 h-60 object-cover"
                                src="{{ asset('img/hero.jpeg') }}"
                                alt="tailwind-card-image"
                            />
                        </div>
                        <div class="card-body ">
                            <h1 class="mt-6 md:text-2xl text-xl font-bold  text-auriga-biru">Judul artikel maksimal 70
                                karakter termasuk spasi
                                di sini jadi 3 baris
                            </h1>
                            <div class="mt-6  text-auriga-biru">
                                <a class="font-bold">NOVEMBER 2022</a><span> | </span><a>Xerundistius ipsum nulpa
                                    destibus de omnihit volupist, si dipitempore,
                                    quiaerum quibus. Harciatur aborit fugiatusdae
                                    num reptatur</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- card -->
                <div class="bg-white pb-6">
                    <div class="card">
                        <div class="card-header ">
                            <img
                                class="w-96 h-60 object-cover"
                                src="{{ asset('img/hero.jpeg') }}"
                                alt="tailwind-card-image"
                            />
                        </div>
                        <div class="card-body ">
                            <h1 class="mt-6 md:text-2xl text-xl font-bold  text-auriga-biru">Judul artikel maksimal 70
                                karakter termasuk spasi
                                di sini jadi 3 baris
                            </h1>
                            <div class="mt-6  text-auriga-biru">
                                <a class="font-bold">NOVEMBER 2022</a><span> | </span><a>Xerundistius ipsum nulpa
                                    destibus de omnihit volupist, si dipitempore,
                                    quiaerum quibus. Harciatur aborit fugiatusdae
                                    num reptatur</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- card -->
                <div class="bg-white pb-6">
                    <div class="card">
                        <div class="card-header ">
                            <img
                                class="w-96 h-60 object-cover"
                                src="{{ asset('img/hero.jpeg') }}"
                                alt="tailwind-card-image"
                            />
                        </div>
                        <div class="card-body ">
                            <h1 class="mt-6 md:text-2xl text-xl font-bold  text-auriga-biru">Judul artikel maksimal 70
                                karakter termasuk spasi
                                di sini jadi 3 baris
                            </h1>
                            <div class="mt-6  text-auriga-biru">
                                <a class="font-bold">NOVEMBER 2022</a><span> | </span><a>Xerundistius ipsum nulpa
                                    destibus de omnihit volupist, si dipitempore,
                                    quiaerum quibus. Harciatur aborit fugiatusdae
                                    num reptatur</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
