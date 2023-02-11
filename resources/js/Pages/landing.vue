
<script lang="ts">
import { Head, Link } from "@inertiajs/vue3";
import { Popover, PopoverButton, PopoverPanel } from '@headlessui/vue';
import { InformationCircleIcon, ViewColumnsIcon, NewspaperIcon, PlayIcon } from '@heroicons/vue/24/solid';
</script>
<script setup lang="ts">
import { string } from "vue-types";
const props = defineProps({
    title: string(),
})
</script>

<template>

    <Head :title="title" />
    <div class="relative">
        <div class="bg-primary fixed top-0 p-8 left-0 right-0 z-50">
            <nav class="flex items-center justify-between flex-wrap">
                <div class="flex items-center flex-no-shrink text-white mr-16">
                    <img src="logo/dasi_logo_type.svg" alt="" srcset="">
                </div>
                <div class="block lg:hidden">

                    <Popover v-slot="{ open }" class="relative">
                        <PopoverButton :class="open ? '' : 'text-opacity-90'"
                            class="flex items-center px-3 py-2 border rounded text-white  hover:text-primary hover:border-white">

                            <svg class="h-3 w-3 fill-white" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Tentang</title>
                                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                            </svg>
                        </PopoverButton>

                        <transition enter-active-class="transition duration-200 ease-out"
                            enter-from-class="translate-y-1 opacity-0" enter-to-class="translate-y-0 opacity-100"
                            leave-active-class="transition duration-150 ease-in"
                            leave-from-class="translate-y-0 opacity-100" leave-to-class="translate-y-1 opacity-0">
                            <PopoverPanel
                                class="absolute left-[120%] z-10 mt-3 w-screen max-w-sm -translate-x-full transform px-0">
                                <div class="overflow-hidden rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
                                    <div class="relative grid gap-8 bg-white p-7 lg:grid-cols-2">
                                        <a href="#about"
                                            class="-m-3 flex items-center rounded-lg p-2 transition duration-150 ease-in-out hover:bg-gray-50 focus:outline-none focus-visible:ring focus-visible:ring-orange-500 focus-visible:ring-opacity-50">
                                            <div
                                                class="flex h-10 w-10 shrink-0 items-center justify-center text-white sm:h-12 sm:w-12">
                                                <div class="bg-violet-100 p-4 rounded-lg">
                                                    <InformationCircleIcon class="h-6 w-6 text-primary" />
                                                </div>
                                            </div>
                                            <div class="ml-4">
                                                <p class="text-sm font-medium text-gray-900">
                                                    Tentang
                                                </p>
                                                <p class="text-sm text-gray-500">
                                                    Ketahui apa itu DASI
                                                </p>
                                            </div>
                                        </a>
                                        <a href="#feature"
                                            class="-m-3 flex items-center rounded-lg p-2 transition duration-150 ease-in-out hover:bg-gray-50 focus:outline-none focus-visible:ring focus-visible:ring-orange-500 focus-visible:ring-opacity-50">
                                            <div
                                                class="flex h-10 w-10 shrink-0 items-center justify-center text-white sm:h-12 sm:w-12">
                                                <div class="bg-violet-100 p-4 rounded-lg">
                                                    <ViewColumnsIcon class="h-6 w-6 text-primary" />
                                                </div>
                                            </div>
                                            <div class="ml-4">
                                                <p class="text-sm font-medium text-gray-900">
                                                    Fitur
                                                </p>
                                                <p class="text-sm text-gray-500">
                                                    Fitur apa saja yang ditawarkan DASI
                                                </p>
                                            </div>
                                        </a>
                                        <a href="#video"
                                            class="-m-3 flex items-center rounded-lg p-2 transition duration-150 ease-in-out hover:bg-gray-50 focus:outline-none focus-visible:ring focus-visible:ring-orange-500 focus-visible:ring-opacity-50">
                                            <div
                                                class="flex h-10 w-10 shrink-0 items-center justify-center text-white sm:h-12 sm:w-12">
                                                <div class="bg-violet-100 p-4 rounded-lg">
                                                    <PlayIcon class="h-6 w-6 text-primary" />
                                                </div>
                                            </div>
                                            <div class="ml-4">
                                                <p class="text-sm font-medium text-gray-900">
                                                    Video
                                                </p>
                                                <p class="text-sm text-gray-500">
                                                    Video singkat tentang DASI
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="bg-gray-50 p-4">
                                        <a href="##"
                                            class="flow-root rounded-md px-2 py-2 transition duration-150 ease-in-out hover:bg-gray-100 focus:outline-none focus-visible:ring focus-visible:ring-orange-500 focus-visible:ring-opacity-50">
                                            <span class="flex items-center">
                                                <span class="text-sm font-medium text-gray-900">
                                                    Dokumentasi
                                                </span>
                                            </span>
                                            <span class="block text-sm text-gray-500">
                                                Mulai mengintegrasikan data dengan membaca dokumentasi.
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </PopoverPanel>
                        </transition>
                    </Popover>
                </div>
                <div class="w-full hidden flex-grow lg:flex lg:items-center lg:w-auto">
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
                        <Link :href="route('login')"
                            class="inline-block text-3xl font-bold px-4 py-2 leading-none border rounded-3xl text-primary border-white bg-white hover:border-transparent hover:text-primary hover:bg-purple-300 mt-4 lg:mt-0">
                        LOGIN</Link>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <section class="relative w-full bg-primary lg:pb-40 lg:h-screen overflow-clip align-content-center">
        <div class="container m-auto p-8 lg:p-0">
            <div class="flex flex-col lg:flex-wrap md:px-0 justify-between">
                <div class="justify-center flex-col lg:w-2/3 flex h-screen w-full">
                    <div class="font-bold text-3xl text-white md:text-6xl w-full">
                        <p class="mb-4"><span class="text-yellow-300">Integrasikan</span> Angka Daerah </p>
                        <p> Kita Lewat <span class="text-yellow-300">DASI</span></p>
                    </div>

                    <p class="mt-8 lg:text-2xl text-gray-300 lg:w-10/12">DASI (Dalam Angka System Informasi) merupakan
                        sistem
                        informasi
                        berbasis web yang bertujuan untuk diseminasi publikasi
                        Daerah Dalam Angka
                    </p>

                    <Link :href="route('login')"
                        class="mt-16 bg-yellow-300 hover:bg-yellow-100 rounded-3xl px-4 py-2 text-3xl font-bold w-fit">
                    MULAI
                    </Link>

                </div>
                <div
                    class="lg:w-5/12 w-full -mb-8 ml-12 sm:ml-48 lg:-mb-[calc(6rem)] lg:right-0 lg:bottom-0  animate-pulse duration-300 lg:absolute">
                    <img src="images/landing_illustration.png" class="relative">
                </div>
            </div>
        </div>
    </section>
    <section id="about" class="bg-white p-8 flex justify-between flex-col w-full">
        <div class="flex flex-col lg:flex-row min-h-screen lg:justify-evenly">
            <div class="lg:w-2/3 w-full inline-block align-middle m-auto p-8">
                <img v-lazy="{ src: 'images/buku.png', loading: 'images/loading-blog.gif', error: 'images/200x200.png' }"
                    alt="" srcset="">
            </div>
            <div class="lg:w-1/3 w-full m-auto text-left lg:text-xl font-semibold">
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
            <div class="lg:w-1/2 mx-auto text-center">
                <p class="lg:text-xl font-semibold">
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
