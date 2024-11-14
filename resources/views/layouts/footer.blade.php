<div>
    <footer class="relative overflow-hidden py-24 sm:py-32">
        <div class="relative mx-auto flex w-full max-w-2xl flex-col items-start justify-between gap-x-16 gap-y-12 px-6 lg:max-w-7xl lg:flex-row">
            <div class="lg:w-1/2">
                <h2 class="text-2xl font-bold lg:text-[28px]">Subscribe to our newsletter</h2>
                <div class="relative mt-10">
                    <div class="relative overflow-hidden rounded-lg border border-gray-100 bg-white p-8 shadow-card">
                        <span class="absolute inset-y-0 left-0 w-1 bg-green-600"></span>
                        <div>
                            <form>
                                <div class="flex w-full flex-wrap items-stretch gap-4">
                                    <label class="relative flex min-w-[240px] flex-1 items-center bg-white">
                                        <span class="sr-only">Email</span>
                                        <img src="https://picperf.io/https://laravel-news.com/images/icons/newsletter.svg" alt="Newsletter icon" class="pointer-events-none absolute left-3 top-3">
                                        <input type="text" class="w-full rounded-lg border-gray-100 bg-transparent px-12 py-3 text-gray-600 placeholder-gray-600/50 transition focus:border-gray-100 focus:bg-gray-100/40 focus:outline-none focus:ring-2 focus:ring-green-600/80 focus:ring-offset-2" placeholder="Email">
                                    </label>
                                    <button type="submit" class="inline-flex items-center justify-center leading-none bg-green-600 border border-transparent rounded-lg font-bold text-base text-white hover:bg-green-700 focus:outline-none focus-visible:ring-2 focus-visible:ring-green-600/80 focus-visible:ring-offset-2 disabled:bg-green-600/50 disabled:cursor-not-allowed transition ease-in-out duration-300 px-6 py-4">
                                        Join free
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="mt-10 flex flex-wrap items-center gap-8">
                    <p class="font-bold">and follow us on</p>
                    <div class="flex flex-wrap items-center gap-2 sm:flex-nowrap">
                        <x-common.svg-icon icon="solid/linkedin" title="Dark Mode" class="w-7 h-7" />
                        <x-common.svg-icon icon="solid/youtube" title="Dark Mode" class="w-7 h-7" />
                    </div>
                </div>
            </div>
            <div class="grid w-full max-w-sm gap-x-12 gap-y-4 sm:grid-cols-2">
                <a class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-green-600/80 p-1 font-bold hover:text-gray-600" href="/links">
                    Laravel Links
                </a>
                <a class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-green-600/80 p-1 font-bold hover:text-gray-600" href="/links">
                    Laravel Links
                </a>
                <a class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-green-600/80 p-1 font-bold hover:text-gray-600" href="/links">
                    Laravel Links
                </a>
                <a class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-green-600/80 p-1 font-bold hover:text-gray-600" href="/links">
                    Laravel Links
                </a>
            </div>
        </div>
        <div class="relative mx-auto mt-20 flex w-full max-w-2xl flex-wrap justify-between gap-x-16 gap-y-12 px-6 lg:max-w-7xl">
            <p class="text-sm text-gray-600">
                &copy; {{config('app.name')}}
                <br>
            </p>
        </div>
    </footer>
</div>