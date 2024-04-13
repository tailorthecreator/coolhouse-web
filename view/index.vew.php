<?php
require('view/partials/head.php');
require('view/partials/nav.php');
require('view/partials/pop-up.php');
?>

<html>

<body>
    <div>

        <!-- This is the section the hero section for desktop -->
        <div class="bg-gradient-to-b from-indigo-700 to-indigo-900 py-5 z-0 hidden lg:block">
            <div class="flex items-center pb-20">
                <div class="flex-1 pl-60 ">
                    <?php require('controller/text-animation.php') ?>
                    <h1 id="descriptionOne" class="text-4xl font-bold text-white"></h1>
                    <p class="text-white mt-2">Cebu's premiere air conditioning <br> cleaning services</p>
                    <button id="popup-link" class="bg-yellow-200 text-stone-900 duration-500 px-10 py-4 my-6 hover:bg-sky-300 rounded font-bold text-lg">Book Now</button>
                </div>
                <div class="flex-1 pr-52">
                    <img src="src/Coolhouse-hero.png" alt="coolhouse logo" style="max-width: 500px;">
                </div>
            </div>
        </div>


        <!-- This is the section the hero section for mobile -->

        <div class="bg-gradient-to-b from-indigo-700 to-indigo-900 py-5 z-0 lg:hidden">
            <div class="flex flex-col items-center mt-10">
                <div class="pl-6 pr-6 mb-6 text-center">
                    <?php require('controller/text-animation.php') ?>
                    <h1 id="descriptionOne" class="text-4xl font-bold text-white"></h1>
                    <p class="text-white mt-2">Cebu's premiere air conditioning <br> cleaning services</p>
                    <button id="popup-link" class="bg-yellow-200 text-stone-900 duration-500 px-10 py-4 my-6 hover:bg-sky-300 rounded font-bold text-lg">Book Now</button>
                </div>
                <div class="pr-6 pl-6 -pb-10 -mt-10">
                    <img src="src/Coolhouse-hero.png" alt="coolhouse logo" style="max-width: 400px;">
                </div>
            </div>
        </div>


        <!-- This is the section for the features for desktop -->
        <div class="hidden lg:flex gap-10 px-80 -mt-16 z-10">
            <div class="flex-1 bg-zinc-300 p-4 rounded-lg flex items-center flex-col">
                <ion-icon name="snow-outline" class="text-3xl text-stone-900 mb-2"></ion-icon>
                <span class="text-center text-stone-900 text-sm">Guaranteed
                    Cool in every way</span>
            </div>

            <div class="flex-1 bg-zinc-300 p-4 rounded-lg flex items-center flex-col">
                <ion-icon name="sparkles-outline" class="text-3xl text-stone-900 mb-2"></ion-icon>
                <span class="text-center text-stone-900 text-sm">We make sure
                    we clean as we leave</span>
            </div>

            <div class="flex-1 bg-zinc-300 p-4 rounded-lg flex items-center flex-col">
                <ion-icon name="flash-outline" class="text-3xl mb-2 text-stone-900"></ion-icon>
                <span class="text-center text-stgh vone-900 text-sm">Fastest
                    Service</span>
            </div>

            <div class="flex-1 bg-zinc-300 p-4 rounded-lg flex items-center flex-col">
                <ion-icon name="people-outline" class="text-3xl mb-2 text-stone-900"></ion-icon>
                <span class="text-center text-stone-900 text-sm">Responsive
                    Customer <br> Service</span>
            </div>

        </div>

        <!-- This is the section for the features for mobile -->

        <div class="flex flex-col gap-10 px-10 md:px-10 lg:px-20 lg:hidden justify-center items-center my-14">
            <!-- First Row -->
            <div class="flex gap-6">
                <div class="bg-zinc-300 p-4 rounded-lg flex items-center flex-col w-[150px] h-[150px]">
                    <ion-icon name="snow-outline" class="text-3xl text-stone-900 mb-2"></ion-icon>
                    <span class="text-center text-stone-900 text-sm">Guaranteed Cool in every way</span>
                </div>

                <div class="bg-zinc-300 p-4 rounded-lg flex items-center flex-col w-[150px] h-[150px]">
                    <ion-icon name="sparkles-outline" class="text-3xl text-stone-900 mb-2"></ion-icon>
                    <span class="text-center text-stone-900 text-sm">We make sure we clean as we leave</span>
                </div>
            </div>

            <!-- Second Row -->
            <div class="flex gap-6 mt-6">
                <div class="bg-zinc-300 p-4 rounded-lg flex items-center flex-col w-[150px] h-[150px]">
                    <ion-icon name="flash-outline" class="text-3xl mb-2 text-stone-900"></ion-icon>
                    <span class="text-center text-stone-900 text-sm">Fastest Service</span>
                </div>

                <div class="bg-zinc-300 p-4 rounded-lg flex items-center flex-col w-[150px] h-[150px]">
                    <ion-icon name="people-outline" class="text-3xl mb-2 text-stone-900"></ion-icon>
                    <span class="text-center text-stone-900 text-sm">Responsive Customer Service</span>
                </div>
            </div>
        </div>


        <!-- This is the section for the features -->
        <div class="px-10 lg:px-80 lg:py-20 text-center my-10">
            <h1 class="text-3xl font-bold text-indigo-900">Clean to the core</h1>
            <p class="text-stone-900 pt-6">At our company, we embrace a Japanese-inspired approach to work, prioritizing cleanliness both during and after tasks. In addition to our meticulous air conditioning cleaning services, we continuously strive to surpass our own efficiency records, ensuring swift and prompt delivery of our services to you.</p>
            <button id="popup-link" class="bg-yellow-200 text-stone-900 duration-500 px-10 py-4 my-6 hover:bg-sky-300 rounded font-bold text-lg mx-auto">Book Now</button>
        </div>

        <!-- This is the two-block section both with text on the other side of the image -->
        <!-- shape divider -->

        <?php require('view/partials/curve-edge.php'); ?>

        <!-- Image block 1-->
        <section class="bg-indigo-900">
            <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6 xl:px-20">
                <img class="mt-20 w-full rounded-xl" src="src/clean_room.jpeg" alt="dashboard image">
                <img class="w-full rounded-xl hidden" src="src/clean_room.jpeg" alt="dashboard image">
                <div class="mt-4 md:mt-0">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-white">Breath Clean Air, live a clean life.</h2>
                    <p class="mb-6 font-light text-white md:text-lg">Sometimes, the things we can't see are the things that affect us the most. The air we breathe matters as much as the clean water we consume. Being that you spend about 8 - 12 hours inside an airconditioned room, having the cleanest helps with our health.</p>
                    <script>
                        gsap.registerPlugin(ScrollTrigger)

                        gsap.to(".firstDescriptionz", {
                            scrollTrigger: ".firstDescription",
                            x: -190,
                        });
                    </script>
                </div>
            </div>
        </section>

        <!-- Image block 2-->
        <section class="bg-indigo-900">
            <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6 xl:px-20">
                <img class="mt-20 w-full rounded-xl" src="src/aircon_cleaning_image_two.jpeg" alt="dashboard image">
                <img class="w-full rounded-xl hidden" src="src/aircon_cleaning_image_two.jpeg" alt="dashboard image">
                <div class="mt-4 md:mt-0">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-white">Years of Experience.</h2>
                    <p class="mb-6 font-light text-white md:text-lg">Because our screening process for staffing is rigorous and well thought out, each member of the staff is equipped with years behind their belt. You can expect the highest level of performance through every step of the process. </p>
                    <script>
                        gsap.registerPlugin(ScrollTrigger)

                        gsap.to(".firstDescriptionz", {
                            scrollTrigger: ".firstDescription",
                            x: -190,
                        });
                    </script>
                </div>
            </div>
        </section>
        <!-- Image block 3-->
        <section class="bg-indigo-900">
            <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6 xl:px-20">
                <img class="mt-20 w-full rounded-xl" src="src/commercial_unit.jpeg" alt="dashboard image">
                <img class="w-full rounded-xl hidden" src="src/commercial_unit.jpeg" alt="dashboard image">
                <div class="mt-4 md:mt-0">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-white">No project too big, or too small3.</h2>
                    <p class="mb-6 font-light text-white md:text-lg">Not only are we able to service the AC in your home, we also specialize in air-conditioning systems for commercial spaces. However, we treat small jobs just as important as big projects. We know how important it is for you to breath the cleanest air you can so we pour our hearts in every task.</p>
                    <script>
                        gsap.registerPlugin(ScrollTrigger)

                        gsap.to(".firstDescriptionz", {
                            scrollTrigger: ".firstDescription",
                            x: -190,
                        });
                    </script>
                </div>
            </div>
        </section>

        <!-- Pricing  -->
        <?php require('view/partials/pricing.php') ?>

        <!-- Banner for the discount  -->



        <div class="mx-80 my-20">
            <img class="mt-20 w-full rounded-xl" src="src/banner_for_coolhouse.png" alt="dashboard image">
        </div>

        <!-- Testimonial -->

        <!--
  Heads up! 👋

  This component comes with some `rtl` classes. Please remove them if they are not needed in your project.
-->

        <link href="https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/keen-slider.min.css" rel="stylesheet" />

        <script type="module">
            import KeenSlider from 'https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/+esm'

            const keenSlider = new KeenSlider(
                '#keen-slider', {
                    loop: true,
                    slides: {
                        origin: 'center',
                        perView: 1.25,
                        spacing: 16,
                    },
                    breakpoints: {
                        '(min-width: 1024px)': {
                            slides: {
                                origin: 'auto',
                                perView: 1.5,
                                spacing: 32,
                            },
                        },
                    },
                },
                []
            )

            const keenSliderPrevious = document.getElementById('keen-slider-previous')
            const keenSliderNext = document.getElementById('keen-slider-next')

            const keenSliderPreviousDesktop = document.getElementById('keen-slider-previous-desktop')
            const keenSliderNextDesktop = document.getElementById('keen-slider-next-desktop')

            keenSliderPrevious.addEventListener('click', () => keenSlider.prev())
            keenSliderNext.addEventListener('click', () => keenSlider.next())

            keenSliderPreviousDesktop.addEventListener('click', () => keenSlider.prev())
            keenSliderNextDesktop.addEventListener('click', () => keenSlider.next())
        </script>

        <section class="bg-indigo-900">
            <div class="mx-auto max-w-[1340px] px-4 py-12 sm:px-6 lg:me-0 lg:py-16 lg:pe-0 lg:ps-8 xl:py-24">
                <div class="grid grid-cols-1 gap-8 lg:grid-cols-3 lg:items-center lg:gap-16">
                    <div class="max-w-xl text-center ltr:sm:text-left rtl:sm:text-right">
                        <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">
                            Don't just take our word for it...
                        </h2>

                        <p class="mt-4 text-white">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas veritatis illo placeat
                            harum porro optio fugit a culpa sunt id!
                        </p>

                        <div class="hidden lg:mt-8 lg:flex lg:gap-4">
                            <button aria-label="Previous slide" id="keen-slider-previous-desktop" class="rounded-full border border-white p-3 text-white transition hover:bg-rose-600 hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 rtl:rotate-180">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                                </svg>
                            </button>

                            <button aria-label="Next slide" id="keen-slider-next-desktop" class="rounded-full border border-white p-3 text-white transition hover:bg-rose-600 hover:text-white">
                                <svg class="size-5 rtl:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="-mx-6 lg:col-span-2 lg:mx-0">
                        <div id="keen-slider" class="keen-slider">
                            <div class="keen-slider__slide">
                                <blockquote class="flex h-full flex-col justify-between bg-white p-6 shadow-sm sm:p-8 lg:p-12">
                                    <div>
                                        <div class="flex gap-0.5 text-yellow-500">
                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>

                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>

                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>

                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>

                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                        </div>

                                        <div class="mt-4">
                                            <p class="text-2xl font-bold text-indigo-700 sm:text-3xl">Stayin' Alive</p>

                                            <p class="mt-4 leading-relaxed text-gray-700">
                                                No, Rose, they are not breathing. And they have no arms or legs … Where are
                                                they? You know what? If we come across somebody with no arms or legs, do we
                                                bother resuscitating them? I mean, what quality of life do we have there?
                                            </p>
                                        </div>
                                    </div>

                                    <footer class="mt-4 text-sm font-medium text-gray-700 sm:mt-6">
                                        &mdash; Michael Scott
                                    </footer>
                                </blockquote>
                            </div>

                            <div class="keen-slider__slide">
                                <blockquote class="flex h-full flex-col justify-between bg-white p-6 shadow-sm sm:p-8 lg:p-12">
                                    <div>
                                        <div class="flex gap-0.5 text-yellow-500">
                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>

                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>

                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>

                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>

                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                        </div>

                                        <div class="mt-4">
                                            <p class="text-2xl font-bold text-indigo-700 sm:text-3xl">Stayin' Alive</p>

                                            <p class="mt-4 leading-relaxed text-gray-700">
                                                No, Rose, they are not breathing. And they have no arms or legs … Where are
                                                they? You know what? If we come across somebody with no arms or legs, do we
                                                bother resuscitating them? I mean, what quality of life do we have there?
                                            </p>
                                        </div>
                                    </div>

                                    <footer class="mt-4 text-sm font-medium text-gray-700 sm:mt-6">
                                        &mdash; Michael Scott
                                    </footer>
                                </blockquote>
                            </div>

                            <div class="keen-slider__slide">
                                <blockquote class="flex h-full flex-col justify-between bg-white p-6 shadow-sm sm:p-8 lg:p-12">
                                    <div>
                                        <div class="flex gap-0.5 text-yellow-500">
                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>

                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>

                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>

                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>

                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                        </div>

                                        <div class="mt-4">
                                            <p class="text-2xl font-bold text-indigo-700 sm:text-3xl">Stayin' Alive</p>

                                            <p class="mt-4 leading-relaxed text-gray-700">
                                                No, Rose, they are not breathing. And they have no arms or legs … Where are
                                                they? You know what? If we come across somebody with no arms or legs, do we
                                                bother resuscitating them? I mean, what quality of life do we have there?
                                            </p>
                                        </div>
                                    </div>

                                    <footer class="mt-4 text-sm font-medium text-gray-700 sm:mt-6">
                                        &mdash; Michael Scott
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-8 flex justify-center gap-4 lg:hidden">
                    <button aria-label="Previous slide" id="keen-slider-previous" class="rounded-full border border-rose-600 p-4 text-indigo-700 transition hover:bg-rose-600 hover:text-white">
                        <svg class="size-5 -rotate-180 transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                        </svg>
                    </button>

                    <button aria-label="Next slide" id="keen-slider-next" class="rounded-full border border-rose-600 p-4 text-indigo-700 transition hover:bg-rose-600 hover:text-white">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                        </svg>
                    </button>
                </div>
            </div>
        </section>

        <!-- Curved Email Section  -->
        <div>
            <div>
                <div class="custom-shape-divider-bottom-1710315615">
                    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                        <path d="M1200 0L0 0 598.97 114.72 1200 0z" class="shape-fill"></path>
                    </svg>
                </div>
            </div>

            <!-- Form Section  -->
            <div class="bg-indigo-900 pb-10">
                <h3 class="font-bold text-center text-white text-sm lg:text-xl pb-10 ">Subscribe to our <br> newsletter for exclusive deals</h3>
                <form class="flex flex-col items-center">
                    <div class="flex gap-6">
                        <input type="text" placeholder="Name" class="w-full max-w-md px-4 py-2 mb-4 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500">
                        <input type="text" placeholder="Last Name" class="w-full max-w-md px-4 py-2 mb-4 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500">
                    </div>

                    <input type="email" placeholder="Email" class="w-full max-w-md px-4 py-2 mb-4 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500">
                    <button type="submit" class="w-full max-w-md px-4 py-2 bg-yellow-200 text-white rounded-md hover:bg-sky-300 focus:outline-none focus:bg-green-600">Sign Up</button>
                </form>

            </div>
        </div>



        <?php
        require('view/partials/pop-up.php');
        require('view/partials/footer.php');
        require('controller/text-animation.php');
        ?>

</body>

</html>

<?php
// More PHP code if needed
?>