<?php
require('view/partials/head.php');
require('view/partials/nav.php');


?>

<html>

<body></body>
<div>
    <div class="bg-gradient-to-b from-indigo-700 to-indigo-900 py-5 z-0">
        <div class="flex items-center pb-20">
            <div class="flex-1 pl-60 ">
                <?php require('controller/text-animation.php') ?>
                <h1 id="descriptionOne" class="text-4xl font-bold text-white"></h1>
                <p class="text-white mt-2">Cebu's premiere air conditioning <br> cleaning services</p>
                <button class="bg-yellow-200 text-stone-900 duration-500 px-10 py-4 my-6 hover:bg-sky-300 rounded font-bold text-lg">Book Now</button>
            </div>
            <div class="flex-1 pr-52">
                <img src="src/Coolhouse-hero.png" alt="coolhouse logo" style="max-width: 500px;">
            </div>
        </div>

    </div>

    <!-- This is the section for the features -->
    <div class="flex gap-10 px-80 -mt-16 z-10 ">
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

    <!-- This is the section for the features -->
    <div class="px-80 py-20 text-center">
        <h1 class="text-3xl font-bold text-indigo-900">Clean to the core</h1>
        <p class="text-stone-900 pt-6">At our company, we embrace a Japanese-inspired approach to work, prioritizing cleanliness both during and after tasks. In addition to our meticulous air conditioning cleaning services, we continuously strive to surpass our own efficiency records, ensuring swift and prompt delivery of our services to you.</p>
        <button class="bg-yellow-200 text-stone-900 duration-500 px-10 py-4 my-6 hover:bg-sky-300 rounded font-bold text-lg mx-auto">Book Now</button>
    </div>

    <!-- This is the two-block section both with text on the other side of the image -->
    <div>
        <div class="flex justify-center items-center bg-indigo-900">
            <!-- Image block 1 -->
            <div class="w-1/2 p-8 text-center">
                <p class="text-white text-3xl font-bold px-24 firstDescription">This is description One</p>
                <script>
                    gsap.registerPlugin(ScrollTrigger)

                    gsap.to(".firstDescription", {
                        scrollTrigger: ".firstDescription",
                        x: -100,
                    });
                </script>

            </div>
            <div class="w-1/2">
                <img src="src/block-1.jpg" alt="Your Image" class="w-full h-full object-cover" />
            </div>
        </div>

        <div class="flex justify-center items-center bg-zinc-300">
            <!-- Image block 2 -->
            <div class="w-1/2 ">
                <img src="src/block-2.jpg" alt="Your Image" class="w-full h-full object-cover" />
            </div>
            <div class="w-1/2 p-8 text-center">
                <p class="text-indigo-900 text-3xl font-bold px-24 secondDescription">This is description Two</p>
                <script>
                    gsap.registerPlugin(ScrollTrigger)

                    gsap.to(".secondDescription", {
                        scrollTrigger: ".secondDescription",
                        x: 100,
                    });
                </script>
            </div>
        </div>

        <div class="flex justify-center items-center bg-indigo-900">
            <!-- Image block 3 -->
            <div class="w-1/2 p-8 text-center">
                <p class="text-white text-3xl font-bold px-24 thirdDescription">This is description One</p>
                <script>
                    gsap.registerPlugin(ScrollTrigger)

                    gsap.to(".thirdDescription", {
                        scrollTrigger: ".thirdDescription",
                        x: -100,
                    });
                </script>
            </div>

            <div class="w-1/2">
                <img src="src/block-3.jpg" alt="Your Image" class="w-full h-full object-cover" />
            </div>
        </div>

    </div>

    <!-- Pricing  -->
    <?php require('view/partials/pricing.php') ?>


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
            <h3 class="font-bold text-center text-white text-xl pb-10">Subscribe to our newsletter for exclusive deals</h3>
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




    <?php require('view/partials/footer.php') ?>
    <?php require('controller/text-animation.php') ?>

    </body>



</html>

<?php
// More PHP code if needed
?>