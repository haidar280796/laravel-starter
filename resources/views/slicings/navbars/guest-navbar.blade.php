<div class="container sticky top-0 z-sticky">
    <div class="flex flex-wrap -mx-3">
        <div class="w-full max-w-full px-3 flex-0">
            <!-- Navbar -->
            <nav
                class="absolute top-0 left-0 right-0 z-30 flex flex-wrap items-center px-4 py-2 m-6 mb-0 shadow-sm rounded-xl bg-white/80 backdrop-blur-2xl backdrop-saturate-200 lg:flex-nowrap lg:justify-start">
                <div class="flex items-center justify-between w-full p-0 px-6 mx-auto flex-wrap-inherit">
                    <a class="py-1.75 text-size-sm mr-4 ml-4 whitespace-nowrap font-bold text-slate-700 lg:ml-0"
                        href="https://demos.creative-tim.com/argon-dashboard-tailwind/pages/dashboard.html"
                        target="_blank"> GenziJek </a>
                    <button navbar-trigger
                        class="px-3 py-1 ml-2 leading-none transition-all ease-in-out bg-transparent border border-transparent border-solid rounded-lg shadow-none cursor-pointer text-size-lg lg:hidden"
                        type="button" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                        <span
                            class="inline-block mt-2 align-middle bg-center bg-no-repeat bg-cover w-6-em h-6-em bg-none">
                            <span bar1
                                class="w-5.5 rounded-xs relative my-0 mx-auto block h-px bg-gray-600 transition-all duration-300"></span>
                            <span bar2
                                class="w-5.5 rounded-xs mt-1.75 relative my-0 mx-auto block h-px bg-gray-600 transition-all duration-300"></span>
                            <span bar3
                                class="w-5.5 rounded-xs mt-1.75 relative my-0 mx-auto block h-px bg-gray-600 transition-all duration-300"></span>
                        </span>
                    </button>
                    <div navbar-menu
                        class="items-center flex-grow transition-all duration-500 lg-max:overflow-hidden ease lg-max:max-h-0 basis-full lg:flex lg:basis-auto">
                        <ul class="flex flex-col pl-0 mx-auto mb-0 list-none lg:flex-row xl:ml-auto">
                            <li>
                                <a class="flex items-center px-4 py-2 mr-2 font-normal transition-all ease-in-out lg-max:opacity-0 duration-250 text-size-sm text-slate-700 lg:px-2"
                                    aria-current="page" href="{{ route('dashboard') }}">
                                    <i class="mr-1 fa fa-chart-pie opacity-60"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li>
                                <a class="block px-4 py-2 mr-2 font-normal transition-all ease-in-out lg-max:opacity-0 duration-250 text-size-sm text-slate-700 lg:px-2"
                                    href="{{ url('/register') }}">
                                    <i class="mr-1 fas fa-user-circle opacity-60"></i>
                                    Sign Up
                                </a>
                            </li>
                            <li>
                                <a class="block px-4 py-2 mr-2 font-normal transition-all ease-in-out lg-max:opacity-0 duration-250 text-size-sm text-slate-700 lg:px-2"
                                    href="{{ url('/login') }}">
                                    <i class="mr-1 fas fa-key opacity-60"></i>
                                    Sign In
                                </a>
                            </li>
                        </ul>
                        <ul class="hidden pl-0 mb-0 list-none lg:block lg:flex-row">
                            <li>
                                <a href="https://www.creative-tim.com/product/argon-dashboard-tailwind" target="_blank"
                                    class="inline-block px-8 py-2 mb-0 mr-1 font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer hover:-translate-y-px hover:shadow-xs active:opacity-85 text-size-xs tracking-tight-rem">Free
                                    Download</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>