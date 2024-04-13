<?php
require('view/partials/head.php');
require('view/partials/nav.php');

?>

<a href="#" id="popup-link">Click here to open pop-up</a>
<? require('view/partials/pop-up.php'); ?>

<section class="bg-white">
    <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-indigo-900">Contact Us</h2>
        <p class="mb-8 lg:mb-16 font-light text-center text-stone-900 sm:text-xl">Got a technical issue? Want to send feedback about a beta feature? Need details about our Business plan? Let us know.</p>
        <form action="#" class="space-y-8">
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-stone-900">Your email</label>
                <input type="email" id="email" class="shadow-sm border border-stone-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" placeholder="name@gmail.com" required>
            </div>
            <div>
                <label for="subject" class="block mb-2 text-sm font-medium text-stone-900">Name</label>
                <input type="text" id="subject" class="block p-3 w-full text-sm text-stone-900 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500" placeholder="Let us know how we can help you" required>
            </div>
            <div>
                <label for="subject" class="block mb-2 text-sm font-medium text-stone-900">Subject</label>
                <input type="text" id="subject" class="block p-3 w-full text-sm text-stone-900 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500" placeholder="Let us know how we can help you" required>
            </div>
            <div class="sm:col-span-2">
                <label for="message" class="block mb-2 text-sm font-medium text-stone-900">Your message</label>
                <textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-stone-900 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500" placeholder="Leave a comment..."></textarea>
            </div>
            <button type="submit" class="bg-yellow-200 text-stone-900 duration-500 px-10 py-4 my-6 hover:bg-sky-300 rounded font-bold text-md">Submit</button>
        </form>
    </div>
</section>

<?php require('view/partials/footer.php') ?>