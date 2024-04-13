<div class="bg-cyan-400">
    <nav class="p-5 bg-white shadow md:flex md:items-center md:justify-between">
        <div class="flex justify-between items-center ">
            <span class="text-2xl cursor-pointer">
                <img class="h-10 inline" src="src/coolhouse-web.png" alt="coolhouse logo">
            </span>

            <span class="text-3xl cursor-pointer mx-2 md:hidden block">
                <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
            </span>
        </div>

        <ul class="md:flex md:items-center z-[-1] md:z-auto md:static absolute bg-white w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
            <li class="mx-4 my-6 md:my-0">
                <a href="/" class="text-md hover:text-sky-300 duration-500">Home</a>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a href="/service" class=" text-md hover:text-sky-300 duration-500">Service</a>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a href="/about" class="  text-md hover:text-sky-300 duration-500">About</a>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a href="/contact" class=" text-md hover:text-sky-300 duration-500">Contact</a>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a href="/blog" class="text-md hover:text-sky-300 duration-500">Blog</a>
            </li>

            <button class="bg-yellow-200 text-stone-900 font-bold duration-500 px-6 py-2 mx-4 hover:bg-sky-300 rounded ">
                Book Here
            </button>
            <h2 class=""></h2>
        </ul>
    </nav>


    <script>
        function Menu(e) {
            let list = document.querySelector('ul');
            e.name === 'menu' ? (e.name = "close", list.classList.add('top-[80px]'), list.classList.add('opacity-100')) : (e.name = "menu", list.classList.remove('top-[80px]'), list.classList.remove('opacity-100'))
        }
    </script>
</div>