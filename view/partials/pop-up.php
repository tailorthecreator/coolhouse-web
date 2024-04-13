<div id="popup-window">
    <div class="mt-5">
        <h1 class="font-bold text-center text-indigo-900">Contact Us</h1>
        <label for="email" class="block mb-2 text-sm font-medium text-stone-900 mt-5">Your email</label>
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
    <ion-icon class="text-3xl mt-4" id="close-button" name="close-circle-outline"></ion-icon>
</div>

<style>
    #popup-window {
        position: fixed;
        width: 500px;
        height: 540px;
        background: white;
        border: 5px solid #312e80;
        border-radius: 30px;
        padding: 10px;
        margin: auto;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 10;
        display: none;
    }
</style>

<script>
    // Get the elements by their ID
    var popupLink = document.getElementById("popup-link");
    var popupWindow = document.getElementById("popup-window");
    var closeButton = document.getElementById("close-button");
    // Show the pop-up window when the link is clicked
    popupLink.addEventListener("click", function(event) {
        event.preventDefault();
        popupWindow.style.display = "block";
    });
    // Hide the pop-up window when the close button is clicked
    closeButton.addEventListener("click", function() {
        popupWindow.style.display = "none";
    });
</script>