<nav class="bg-primary-900 w-screen">
    <div class="flex justify-between items-center container w-3/4 mx-auto p-5 text-lg">
        <div class="flex justify-evenly items-center gap-2 text-secondary-100">
            <div>
                <img class="w-24 cursor-pointer" src="{{ Vite::asset('public/imgs/brand.svg') }}" alt="brand">
            </div>
            <hr>
            <div>
                <h1 class="hover:decoration-solid hover:underline cursor-pointer">Help Center</h1>
            </div>
        </div>
        <div class="flex justify-evenly items-center text-secondary-100">
            <ul class="flex gap-4 font-medium">
                <li><a class="bg-primary-400 px-5 py-2 rounded border" href="#">Submit a request</a></li>
                <li><a class="bg-tertiary-600 px-5 py-2 rounded hover:bg-secondary-100 hover:text-primary-900" href="#">Sign in</a></li>
            </ul>
        </div>
    </div>
</nav>
