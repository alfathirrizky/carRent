<!DOCTYPE html>
<html lang="en" class=" scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>car rent</title>
    @vite('resources/css/app.css')
</head>

<body>
    <x-navbar></x-navbar>
    {{-- jumbo tron --}}
    <section class="bg-center bg-no-repeat bg-[url('/public/img/hero.png')] p-20">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
            <h1 class="mb-4 text-5xl font-extrabold tracking-tight leading-none text-white xs:text-3xl lg:text-5xl">
                Looking to save more on
                your rental car?</h1>
            <p class="mb-8 text-xl font-normal text-gray-300 xs:text-sm lg:text-xl">Lorem ipsum dolor
                sit amet consectetur adipisicing elit. Aperiam, quidem repellendus voluptas necessitatibus perspiciatis,
                error quae minima commodi sit labore iste sed. Natus voluptatem quas
            </p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                <a href="#"
                    class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Get started
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
                <a href="#"
                    class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                    Learn more
                </a>
            </div>
        </div>
    </section>
    {{-- why choose us --}}
    <section class="flex flex-col items-center justify-center m-8 gap-6">
        <h1 class="text-4xl font-bold">Why choose us</h1>
        <div class="flex flex-row xs:flex-col lg:flex-row">
            <div class="text1 w-xl flex flex-col justify-start py-10 gap-15">
                <div>
                    <h2 class=" text-xl font-bold">Armada Terawat & Beragam</h2>
                    <p>Kami menyediakan berbagai jenis kendaraan, mulai dari city car hingga kendaraan premium, yang
                        selalu
                        dalam kondisi prima dan rutin diservis.</p>
                </div>
                <div>
                    <h2 class=" text-xl font-bold">Armada Terawat & Beragam</h2>
                    <p>Kami menyediakan berbagai jenis kendaraan, mulai dari city car hingga kendaraan premium, yang
                        selalu
                        dalam kondisi prima dan rutin diservis.</p>
                </div>
            </div>
            <div class="content w-40 bg-blue-900 rounded-3xl flex flex-col justify-between py-10 gap-10">
                <img class="" src="{{ url('img/inova.png') }}" alt="" srcset="">
                <img src="{{ url('img/jazz.png') }}" alt="" srcset="">
            </div>
            <div class="text2 w-xl flex flex-col justify-start py-10 gap-15 text-right">
                <div>
                    <h2 class=" text-xl font-bold">Armada Terawat & Beragam</h2>
                    <p>Kami menyediakan berbagai jenis kendaraan, mulai dari city car hingga kendaraan premium, yang
                        selalu
                        dalam kondisi prima dan rutin diservis.</p>
                </div>
                <div>
                    <h2 class=" text-xl font-bold">Armada Terawat & Beragam</h2>
                    <p>Kami menyediakan berbagai jenis kendaraan, mulai dari city car hingga kendaraan premium, yang
                        selalu
                        dalam kondisi prima dan rutin diservis.</p>
                </div>
            </div>
        </div>
    </section>
    {{-- frequently asked --}}
    <section class=" m-5 my-10 flex flex-row justify-center items-center gap-20 flex-wrap md:flex-wrap">
        <div class="img">
            <div class=" bg-blue-900 w-2xl h-96 rounded-3xl flex items-center">
                <img src="{{ url('img/fortuner.png') }}" alt="" srcset="" class=" ml-20">
            </div>
        </div>
        <div class="textContent w-2xl flex flex-col justify-center">
            <h1 class=" text-blue-700 font-bold">Frequently asked questions</h1>
            <h1 class=" text-4xl font-bold w-xl">Everything you need to know about our services</h1>
            <div id="accordion-open" data-accordion="open" class=" mt-7">
                <h2 id="accordion-open-heading-1">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                        data-accordion-target="#accordion-open-body-1" aria-expanded="true"
                        aria-controls="accordion-open-body-1">
                        <span class="flex items-center"><svg class="w-5 h-5 me-2 shrink-0" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd"></path>
                            </svg>What do i need to rent a car?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-open-body-1" class="hidden" aria-labelledby="accordion-open-heading-1">
                    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Minus, impedit. Sed laborum sint enim pariatur consectetur quibusdam omnis
                            ex nulla eveniet possimus mollitia rem fuga delectus veniam eius at soluta, error</p>
                    </div>
                </div>
                <h2 id="accordion-open-heading-2">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                        data-accordion-target="#accordion-open-body-2" aria-expanded="false"
                        aria-controls="accordion-open-body-2">
                        <span class="flex items-center"><svg class="w-5 h-5 me-2 shrink-0" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd"></path>
                            </svg>What do i need to rent a car?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-open-body-2" class="hidden" aria-labelledby="accordion-open-heading-2">
                    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and designed
                            using the Figma software so everything you see in the library has a design equivalent in our
                            Figma file.</p>
                        <p class="text-gray-500 dark:text-gray-400">Check out the <a
                                href="https://flowbite.com/figma/"
                                class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a> based
                            on the utility classes from Tailwind CSS and components from Flowbite.</p>
                    </div>
                </div>
                <h2 id="accordion-open-heading-3">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                        data-accordion-target="#accordion-open-body-3" aria-expanded="false"
                        aria-controls="accordion-open-body-3">
                        <span class="flex items-center"><svg class="w-5 h-5 me-2 shrink-0" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd"></path>
                            </svg> What do i need to rent a car?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-open-body-3" class="hidden" aria-labelledby="accordion-open-heading-3">
                    <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that the core
                            components from Flowbite are open source under the MIT license, whereas Tailwind UI is a
                            paid product. Another difference is that Flowbite relies on smaller and standalone
                            components, whereas Tailwind UI offers sections of pages.</p>
                        <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both
                            Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you
                            from using the best of two worlds.</p>
                        <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>
                        <ul class="ps-5 text-gray-500 list-disc dark:text-gray-400">
                            <li><a href="https://flowbite.com/pro/"
                                    class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite Pro</a></li>
                            <li><a href="https://tailwindui.com/" rel="nofollow"
                                    class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- car list --}}
    <section class="m-5 flex flex-col gap-5 flex-wrap snap-x">
        <div class="text flex justify-between items-center">
            <h1 class=" text-4xl font-bold">Most Frequently Rented</h1>
            <a href="cars" class="text-lg font-medium text-blue-700">See all cars</a>
        </div>
        <div class="list flex gap-2">
            <x-card></x-card>
            <x-card></x-card>
            <x-card></x-card>
            <x-card></x-card>
        </div>
    </section>
    {{-- testimoni --}}
    <section class="p-8 m-5 my-9 bg-blue-900 rounded-lg flex flex-col gap-5">
        <div class="text">
            <h1 class=" text-white font-semibold">Testimonials</h1>
            <h1 class="text-4xl text-white font-semibold">Customers review</h1>
        </div>
        <div class="flex flex-row flex-wrap gap-3 md:flex-wrap">
            <div class="testimoniCard p-5 bg-white rounded-lg flex flex-col gap-5 items-center">
                <h1 class=" font-semibold text-xl">Very easy this was to integrate</h1>
                <p class=" text-md text-center">“If you care for your time, I hands down would go with this."</p>
                <div class="profile flex items-center gap-2">
                    <div class=" h-8 w-8 bg-blue-900 rounded-4xl"></div>
                    {{-- <img src="{{ url('img/inova.png') }}" alt="profile" srcset="" class="h-4 w-4 rounded-4xl"> --}}
                    <h1 class=" font-semibold">John Doe</h1>
                </div>
            </div>
            <div class="testimoniCard p-5 bg-white rounded-lg flex flex-col gap-5 items-center">
                <h1 class=" font-semibold text-xl">Very easy this was to integrate</h1>
                <p class=" text-md text-center">“If you care for your time, I hands down would go with this."</p>
                <div class="profile flex items-center gap-2">
                    <div class=" h-8 w-8 bg-blue-900 rounded-4xl"></div>
                    {{-- <img src="{{ url('img/inova.png') }}" alt="profile" srcset="" class="h-4 w-4 rounded-4xl"> --}}
                    <h1 class=" font-semibold">John Doe</h1>
                </div>
            </div>
            <div class="testimoniCard p-5 bg-white rounded-lg flex flex-col gap-5 items-center">
                <h1 class=" font-semibold text-xl">Very easy this was to integrate</h1>
                <p class=" text-md text-center">“If you care for your time, I hands down would go with this."</p>
                <div class="profile flex items-center gap-2">
                    <div class=" h-8 w-8 bg-blue-900 rounded-4xl"></div>
                    {{-- <img src="{{ url('img/inova.png') }}" alt="profile" srcset="" class="h-4 w-4 rounded-4xl"> --}}
                    <h1 class=" font-semibold">John Doe</h1>
                </div>
            </div>
        </div>
    </section>
    <x-footer></x-footer>
    <script>
        var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

        // Change the icons inside the button based on previous settings
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            themeToggleLightIcon.classList.remove('hidden');
        } else {
            themeToggleDarkIcon.classList.remove('hidden');
        }

        var themeToggleBtn = document.getElementById('theme-toggle');

        themeToggleBtn.addEventListener('click', function() {

            // toggle icons inside button
            themeToggleDarkIcon.classList.toggle('hidden');
            themeToggleLightIcon.classList.toggle('hidden');

            // if set via local storage previously
            if (localStorage.getItem('color-theme')) {
                if (localStorage.getItem('color-theme') === 'light') {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                } else {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                }

                // if NOT set via local storage previously
            } else {
                if (document.documentElement.classList.contains('dark')) {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                }
            }

        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>
