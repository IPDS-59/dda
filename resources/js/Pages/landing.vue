

<template>
    <div class="relative">
        <div class="bg-primary fixed top-0 p-8 left-0 right-0 z-50">
            <nav class="flex items-center justify-between flex-wrap">
                <div class="flex items-center flex-no-shrink text-white mr-16">
                    <img src="logo/dasi_logo_type.svg" alt="" srcset="">
                </div>
                <div class="block lg:hidden">
                    <button
                        class="flex items-center px-3 py-2 border rounded text-white  hover:text-primary hover:border-white">
                        <svg class="h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Tentang</title>
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                        </svg>
                    </button>
                </div>
                <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
                    <div class="text-xl font-bold lg:flex-grow">
                        <a href="#about"
                            class="block mt-4 active:underline lg:inline-block lg:mt-0 text-white hover:text-purple-200 mr-16">
                            Tentang
                        </a>
                        <a href="#feature"
                            class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-purple-200 mr-16">
                            Fitur
                        </a>
                        <a href="#responsive-header"
                            class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-purple-200">
                            Video
                        </a>
                    </div>
                    <div>
                        <a href="#"
                            class="inline-block text-3xl font-bold px-4 py-2 leading-none border rounded-3xl text-primary border-white bg-white hover:border-transparent hover:text-primary hover:bg-purple-300 mt-4 lg:mt-0">LOGIN</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <section class="relative w-full bg-primary pb-40 h-screen overflow-clip align-content-center">
        <div class="container m-auto">
            <div class="flex flex-wrap md:px-0 justify-between">
                <div class="justify-center flex-col lg:w-2/3 flex h-screen">
                    <div class="font-bold text-xl text-white md:text-6xl w-full">
                        <p class="mb-4"><span class="text-yellow-300">Integrasikan</span> Angka Daerah </p>
                        <p> Kita Lewat <span class="text-yellow-300">DASI</span></p>
                    </div>

                    <p class="mt-8 text-2xl text-gray-300 lg:w-10/12">DASI (Dalam Angka System Informasi) merupakan
                        sistem
                        informasi
                        berbasis web yang bertujuan untuk diseminasi publikasi
                        Daerah Dalam Angka
                    </p>

                    <button
                        class="mt-16 bg-yellow-300 hover:bg-yellow-100 rounded-3xl px-4 py-2 text-3xl font-bold w-fit">
                        MULAI
                    </button>

                </div>
                <div class="lg:w-5/12 -mb-[calc(6rem)] right-0 bottom-0 vh-100 animate-pulse duration-300 absolute">
                    <img src="images/landing_illustration.png" class="relative" alt="food illustration">
                </div>
            </div>
        </div>
    </section>
    <section id="about" class="bg-white p-8 flex justify-between flex-col w-full">
        <div class="flex flex-wrap min-h-screen">
            <div class="w-2/3 inline-block align-middle m-auto p-8">
                <img v-lazy="{ src: 'images/buku.png', loading: 'images/loading-blog.gif', error: 'images/200x200.png' }"
                    alt="" srcset="">
            </div>
            <div class="w-1/3 m-auto text-left text-xl font-semibold">
                <p>
                    Beragam jenis data tersedia dalam publikasi
                    Daerah Dalam Angka (DDA) yang dimuat mulai dari
                    level Nasional hingga level Kabupaten/Kota.
                    <br>
                    <br>
                    Publikasi Daerah Dalam Angka ini memuat
                    lengkap statistik yang ada pada daerah tersebut
                    mulai dari kondisi Sosial dan Kependudukan,
                    Ekonomi dan Perdagangan, serta Pertanian dan
                    Pertambangan di Indonesia.
                    <br>
                    <br>
                    Sajian lengkap ini tentunya amat berguna baik untuk
                    perencanaan maupun evaluasi pembangunan
                    suatu daerah kedepannya.
                    <br>
                    <br>
                    Namun, hadirnya publikasi ini tidak lepas dari semua
                    pihak. Walaupun penyusun dari publikasi ini
                    merupakan Badan Pusat Statistik. Namun,
                    keterlibatan Kementerian, Lembaga, Dinas, dan
                    Instansi amat diperlukan guna proses terbitnya DDA.
                </p>
            </div>
        </div>
        <div class="flex flex-col w-full my-auto min-h-screen mx-auto justify-center">
            <div class="w-1/2 mx-auto text-center">
                <p class="text-xl font-semibold">
                    Oleh karenanya, Dalam Angka System Information hadir
                    untuk dapat menghadirkan Integrasi secara digital
                    semua data yang dibutuhkan dalam penyusunan
                    Publikasi Derah Dalam Angka.
                    <br>
                    <br>
                    Mari Integrasikan Angka Daerah kita lewat DASI
                </p>
            </div>
            <div class="mx-auto mt-16">
                <img v-lazy="{ src: 'logo/dasi_logo_primary.svg', loading: 'images/loading-blog.gif', error: 'images/200x200.png' }"
                    alt="">
            </div>
        </div>
    </section>
</template>
