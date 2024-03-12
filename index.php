<?php
require('view/partials/head.php');
require('view/partials/nav.php');
?>

<html>

<body></body>
<div>
    <div class="bg-gradient-to-b from-indigo-950 to-indigo-900 py-5">
        <div class="flex items-center pb-20">
            <div class="flex-1 pl-60 ">
                <h1 class="text-4xl font-bold text-white">Aircon Cleaning <br> Services Redefined</h1>
                <p class="text-white mt-2">Cebu's premiere air conditioning <br> cleaning services</p>
                <button class="bg-yellow-200 text-stone-900 duration-500 px-10 py-4 my-6 hover:bg-sky-300 rounded font-bold text-lg">Book Now</button>
            </div>
            <div class="flex-1 pr-52">
                <img src="src/Coolhouse-hero.png" alt="coolhouse logo" style="max-width: 500px;">
            </div>
        </div>
    </div>
    <!-- This is the section for the features -->
    <div class="flex gap-10 px-60 mt-[-10]">
        <div class="flex-1 bg-sky-300 p-4 rounded-lg flex items-center flex-col">
            <ion-icon name="snow-outline" class="text-6xl mb-2"></ion-icon>
            <span class="text-center">Guaranteed
                Cool <br> in every way</span>
        </div>

        <div class="flex-1 bg-sky-300 p-4 rounded-lg flex items-center flex-col">
            <ion-icon name="snow-outline" class="text-6xl mb-2"></ion-icon>
            <span class="text-center">We make sure
                we <br> clean as we leave</span>
        </div>

        <div class="flex-1 bg-sky-300 p-4 rounded-lg flex items-center flex-col">
            <ion-icon name="snow-outline" class="text-6xl mb-2"></ion-icon>
            <span class="text-center">Fastest
                Service</span>
        </div>

        <div class="flex-1 bg-sky-300 p-4 rounded-lg flex items-center flex-col">
            <ion-icon name="snow-outline" class="text-6xl mb-2"></ion-icon>
            <span class="text-center">Responsive
                Customer <br> Service</span>
        </div>
    </div>

    </body>


</html>

<?php
// More PHP code if needed
?>