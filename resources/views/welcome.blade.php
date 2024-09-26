<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="canonical" href="https://https://demo.themesberg.com/Careers/" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Careers - Landing Page </title>

    <!-- Meta SEO -->
    <meta name="title" content="Careers - Landing Page">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="author" content="Themesberg">


    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header class="fixed w-full">
        <nav class="bg-white border-gray-200 py-2.5 dark:bg-gray-900">
            <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto ">
                <a href="#" class="flex items-center">
                    <img src="{{ asset('images/logo.svg') }}" class="h-6 mr-3 sm:h-9" alt="Careers Logo" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Careers</span>
                </a>
                <div class="flex items-center lg:order-2">

                    <!-- <a href="#" class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Log in</a> -->
                    <a href="https://themesberg.com/product/tailwind-css/landing-page"
                        class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 shadow-lg shadow-purple-500/50 dark:shadow-lg dark:shadow-purple-800/80 font-medium rounded-lg text-sm px-8 py-2.5 text-center me-2 mb-2">Login</a>
                    <button data-collapse-toggle="mobile-menu-2" type="button"
                        class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="mobile-menu-2" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-white bg-purple-700 rounded lg:bg-transparent lg:text-purple-700 lg:p-0 dark:text-white"
                                aria-current="page">Home</a>
                        </li>

                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Reviews</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Features</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Start block -->
    <section
        class="bg-white dark:bg-gray-900 bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] dark:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern-dark.svg')]">
        <div
            class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28 z-10">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1
                    class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl dark:text-white">
                    Temukan Karir Impianmu Bersama Kami.</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">This
                    Temukan Berbagai Kesempatan Kerja Menarik, Sesuaikan Dengan Passionmu, dan Mulai Mewujudkan Masa
                    Depan yang Lebih Cerah. Pilihan Ada di Tanganmu, Kami di Sini untuk Membantumu Meraihnya!</p>
                <div class="space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
                    <button type="button"
                        class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 shadow-lg shadow-purple-500/50 dark:shadow-lg dark:shadow-purple-800/80 font-medium rounded-lg text-sm px-8 py-2.5 text-center me-3 mb-2">Join
                        Us</button>
                </div>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="{{ asset('images/hero.png') }}" alt="hero image">
            </div>
        </div>

    </section>
    <!-- End block -->
    <!-- Start block -->
    <section class="bg-white dark:bg-gray-900">
        <div class="max-w-screen-xl px-4 pb-8 mx-auto lg:space-y-5 lg:py-24 lg:px-6">
            <div
                class="flex flex-col xl:gap-5 p-16 mx-auto justify-center text-center text-gray-900 bg-white border border-gray-200 rounded-lg shadow dark:border-gray-600 xl:p-16 dark:bg-gray-800 dark:text-white">
                <h1 class="text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white mt-5">Temukan Karir
                    Impianmu Bersama Kami.</h1>
                <p class="mb-4 font-light lg:text-lg">Temukan Berbagai Kesempatan Kerja Menarik</p>
                <div class="flex flex-row">
                    <div
                        class="flex flex-col max-w-lg p-6 mx-auto text-center justify-center items-center text-gray-900 bg-white border border-gray-100 rounded-lg shadow dark:border-gray-600 xl:p-20 dark:bg-gray-800 dark:text-white mt-10 mb-10">
                        <img class="h-auto max-w-20 mb-5" src="{{ asset('images/career.png') }}" alt="Icon Image">
                        <h2 class="text-lg font-bold tracking-tight text-purple-900 dark:text-white mb-2">Temukan Karir
                            Beragam Peluang Karir</h2>
                        <p class=" font-light lg:text-xs mb-8">Dengan ribuan lowongan dari berbagai industri dan
                            bidang,
                            temukan pekerjaan yang sesuai dengan minat, keahlian, dan tujuan karirmu.</p>
                        <button type="button"
                            class="text-purple-700 hover:text-white border border-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-10 py-2.5 text-center me-2 mb-2 dark:border-purple-400 dark:text-purple-400 dark:hover:text-white dark:hover:bg-purple-500 dark:focus:ring-purple-900">Join
                            Us</button>
                    </div>
                    <div
                        class="flex flex-col max-w-lg p-6 mx-auto text-center justify-center items-center text-gray-900 bg-white border border-gray-100 rounded-lg shadow dark:border-gray-600 xl:p-20 dark:bg-gray-800 dark:text-white mt-10 mb-10">
                        <img class="h-auto max-w-20 mb-5" src="{{ asset('images/customer-service.png') }}"
                            alt="Icon Image">
                        <h2 class="text-lg font-bold tracking-tight text-purple-900 dark:text-white mb-2">Dukungan dan
                            Pengembangan</h2>
                        <p class="font-light lg:text-xs mb-8">Kami tidak hanya membantu kamu menemukan pekerjaan, tetapi
                            juga menyediakan berbagai sumber daya untuk pengembangan karir.</p>
                        <button type="button"
                            class="text-purple-700 hover:text-white border border-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-10 py-2.5 text-center me-2 mb-2 dark:border-purple-400 dark:text-purple-400 dark:hover:text-white dark:hover:bg-purple-500 dark:focus:ring-purple-900">Join
                            Us</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End block -->
    <!-- Start block -->
    <section class="bg-gray-50 dark:bg-gray-800">
        <div class="max-w-screen-xl px-4 py-8 mx-auto space-y-12 lg:space-y-20 lg:py-24 lg:px-6">
            <!-- Row -->
            <div class="items-center gap-8 lg:grid lg:grid-cols-2 xl:gap-28">
                <div class="text-gray-500 sm:text-lg dark:text-gray-400">
                    <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">Tentang Kami
                    </h2>
                    <p class="mb-8 font-light lg:text-xl">Kami berdedikasi untuk menghubungkan talenta terbaik dengan
                        peluang kerja impian mereka. Sejak didirikan, misi kami adalah memberikan akses yang mudah dan
                        efisien bagi para pencari kerja untuk menemukan perusahaan yang sesuai dengan passion dan tujuan
                        karir mereka.</p>
                </div>
                <img class="hidden w-auto mb-4 rounded-lg lg:mb-0 lg:flex" src="{{ asset('images/support.jpg') }}"
                    alt="dashboard feature image">
            </div>
        </div>
    </section>
    <!-- End block -->
    <!-- Start block -->
    <section class="bg-white dark:bg-gray-900">
        <div class="items-center max-w-screen-xl px-4 py-8 mx-auto flex lg:gap-16 xl:gap-24 lg:py-24 lg:px-6">
            <div class="space-y-8 flex flex-row md:gap-12 md:space-y-0 p-10">
                <div class="items-center justify-center">
                    <svg class="w-10 h-10 mb-2 text-purple-600 md:w-12 md:h-12 dark:text-purple-500" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M2 5a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 01-2 2H4a2 2 0 01-2-2V5zm14 1a1 1 0 11-2 0 1 1 0 012 0zM2 13a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 01-2 2H4a2 2 0 01-2-2v-2zm14 1a1 1 0 11-2 0 1 1 0 012 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <h3 class="mb-2 text-2xl font-bold dark:text-white">99.99% uptime</h3>
                    <p class="font-light text-gray-500 dark:text-gray-400">For Careers, with zero maintenance
                        downtime
                    </p>
                </div>
                <div>
                    <svg class="w-10 h-10 mb-2 text-purple-600 md:w-12 md:h-12 dark:text-purple-500" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z">
                        </path>
                    </svg>
                    <h3 class="mb-2 text-2xl font-bold dark:text-white">600M+ Users</h3>
                    <p class="font-light text-gray-500 dark:text-gray-400">Trusted by over 600 milion users
                        around
                        the
                        world</p>
                </div>
                <div>
                    <svg class="w-10 h-10 mb-2 text-purple-600 md:w-12 md:h-12 dark:text-purple-500" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <h3 class="mb-2 text-2xl font-bold dark:text-white">100+ countries</h3>
                    <p class="font-light text-gray-500 dark:text-gray-400">Have used Careers to create
                        functional
                        websites</p>
                </div>
                <div>
                    <svg class="w-10 h-10 mb-2 text-purple-600 md:w-12 md:h-12 dark:text-purple-500" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z">
                        </path>
                    </svg>
                    <h3 class="mb-2 text-2xl font-bold dark:text-white">5+ Million</h3>
                    <p class="font-light text-gray-500 dark:text-gray-400">Transactions per day</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End block -->

    <footer class="bg-white dark:bg-gray-800">
        <div class="max-w-screen-xl p-4 py-6 mx-auto lg:py-16 md:p-8 lg:p-10">

            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8">
            <div class="text-center">
                <a href="#"
                    class="flex items-center justify-center mb-5 text-2xl font-semibold text-gray-900 dark:text-white">
                    <img src="{{ asset('images/logo.svg') }}" class="h-6 mr-3 sm:h-9" alt="Careers Logo" />
                    Careers
                </a>
                <span class="block text-sm text-center text-gray-500 dark:text-gray-400">© 2021-2024 Careers™.
                    All
                    Rights Reserved.
                </span>

            </div>
        </div>
    </footer>
    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
</body>

</html>