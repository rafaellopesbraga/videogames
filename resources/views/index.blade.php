@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Popular Games</h2>
    <div class="popular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12 pb-16 border-b border-gray-800">
        <div class="game mt-8">
            <div class="relative inline-block">
                <a href="#">
                    <img src="/IMG_20201230_205313860.jpg" alt="game cover"
                        class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                    style="bottom:-20px; right: -20px">
                    <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                </div>
            </div>
            <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Adam 01</a>
            <div class="text-gray-400 mt-1">Playstation 4</div>
        </div>
        <div class="game mt-8">
            <div class="relative inline-block">
                <a href="#">
                    <img src="/IMG_20201230_184613883_BURST000_COVER_TOP.jpg" alt="game cover"
                        class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                    style="bottom:-20px; right: -20px">
                    <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                </div>
            </div>
            <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Adam 02</a>
            <div class="text-gray-400 mt-1">Playstation 4</div>
        </div>
        <div class="game mt-8">
            <div class="relative inline-block">
                <a href="#">
                    <img src="/IMG_20201225_180418147_HDR.jpg" alt="game cover"
                        class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                    style="bottom:-20px; right: -20px">
                    <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                </div>
            </div>
            <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Adam 03</a>
            <div class="text-gray-400 mt-1">Playstation 4</div>
        </div>
        <div class="game mt-8">
            <div class="relative inline-block">
                <a href="#">
                    <img src="/IMG_20201225_175749254_HDR.jpg" alt="game cover"
                        class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                    style="bottom:-20px; right: -20px">
                    <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                </div>
            </div>
            <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Adam 04</a>
            <div class="text-gray-400 mt-1">Playstation 4</div>
        </div>
        <div class="game mt-8">
            <div class="relative inline-block">
                <a href="#">
                    <img src="/IMG_20201224_200103672.jpg" alt="game cover"
                        class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                    style="bottom:-20px; right: -20px">
                    <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                </div>
            </div>
            <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Adam 05</a>
            <div class="text-gray-400 mt-1">Playstation 4</div>
        </div>
        <div class="game mt-8">
            <div class="relative inline-block">
                <a href="#">
                    <img src="/IMG_20201221_185005122.jpg" alt="game cover"
                        class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                    style="bottom:-20px; right: -20px">
                    <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                </div>
            </div>
            <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Adam 06</a>
            <div class="text-gray-400 mt-1">Playstation 4</div>
        </div>
        <div class="game mt-8">
            <div class="relative inline-block">
                <a href="#">
                    <img src="/IMG_20201101_180957777_BURST000_COVER_TOP.jpg" alt="game cover"
                        class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                    style="bottom:-20px; right: -20px">
                    <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                </div>
            </div>
            <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Adam 07</a>
            <div class="text-gray-400 mt-1">Playstation 4</div>
        </div>
        <div class="game mt-8">
            <div class="relative inline-block">
                <a href="#">
                    <img src="/IMG_20201110_145156813.jpg" alt="game cover"
                        class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                    style="bottom:-20px; right: -20px">
                    <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                </div>
            </div>
            <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Adam 08</a>
            <div class="text-gray-400 mt-1">Playstation 4</div>
        </div>
        <div class="game mt-8">
            <div class="relative inline-block">
                <a href="#">
                    <img src="/IMG_20201120_164435812.jpg" alt="game cover"
                        class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                    style="bottom:-20px; right: -20px">
                    <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                </div>
            </div>
            <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Adam 09</a>
            <div class="text-gray-400 mt-1">Playstation 4</div>
        </div>
        <div class="game mt-8">
            <div class="relative inline-block">
                <a href="#">
                    <img src="/IMG_20201212_141647385.jpg" alt="game cover"
                        class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                    style="bottom:-20px; right: -20px">
                    <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                </div>
            </div>
            <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Adam 10</a>
            <div class="text-gray-400 mt-1">Playstation 4</div>
        </div>
        <div class="game mt-8">
            <div class="relative inline-block">
                <a href="#">
                    <img src="/IMG_20201212_141438805.jpg" alt="game cover"
                        class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                    style="bottom:-20px; right: -20px">
                    <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                </div>
            </div>
            <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Adam 11</a>
            <div class="text-gray-400 mt-1">Playstation 4</div>
        </div>
        <div class="game mt-8">
            <div class="relative inline-block">
                <a href="#">
                    <img src="/IMG_20210102_164412404.jpg" alt="game cover"
                        class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                    style="bottom:-20px; right: -20px">
                    <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                </div>
            </div>
            <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Adam 12</a>
            <div class="text-gray-400 mt-1">Playstation 4</div>
        </div>
    </div> <!-- end popular-games --->
    <div class="flex flex-col lg:flex-row my-10">
        <div class="recently-reviewed w-full lg:w-3/4 mr-0 lg:mr-32">
            <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Recently Reviewed</h2>
            <div class="recently-reviewed-container space-y-12 mt-8">
                <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                    <div class="relative flex-none">
                        <a href="#">
                            <img src="/ff7.jpg" alt="game cover"
                                class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full"
                            style="bottom:-20px; right: -20px">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">
                                80%
                            </div>
                        </div>
                    </div>
                    <div class="ml-12">
                        <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">
                            Final Fantasy VII Remake
                        </a>
                        <div class="text-gray-400 mt-1">Playstation 4</div>
                        <div class="mt-6 text-gray-400 hidden lg:block">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam, doloribus quia, illum
                            sint dolorum, cumque repudiandae architecto sed nemo sequi assumenda explicabo. Sint impedit
                            quod dicta ea libero quaerat unde quae, tempora quis vel, sapiente, ad voluptatum
                            exercitationem! Repellendus ex nam soluta blanditiis vitae porro laudantium ipsam nobis
                            labore ducimus.
                        </div>
                    </div>
                </div>
                <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                    <div class="relative flex-none">
                        <a href="#">
                            <img src="/ff7.jpg" alt="game cover"
                                class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full"
                            style="bottom:-20px; right: -20px">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">
                                80%
                            </div>
                        </div>
                    </div>
                    <div class="ml-12">
                        <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">
                            Final Fantasy VII Remake
                        </a>
                        <div class="text-gray-400 mt-1">Playstation 4</div>
                        <div class="mt-6 text-gray-400 hidden lg:block">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam, doloribus quia, illum
                            sint dolorum, cumque repudiandae architecto sed nemo sequi assumenda explicabo. Sint impedit
                            quod dicta ea libero quaerat unde quae, tempora quis vel, sapiente, ad voluptatum
                            exercitationem! Repellendus ex nam soluta blanditiis vitae porro laudantium ipsam nobis
                            labore ducimus.
                        </div>
                    </div>
                </div>
                <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                    <div class="relative flex-none">
                        <a href="#">
                            <img src="/ff7.jpg" alt="game cover"
                                class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full"
                            style="bottom:-20px; right: -20px">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">
                                80%
                            </div>
                        </div>
                    </div>
                    <div class="ml-12">
                        <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">
                            Final Fantasy VII Remake
                        </a>
                        <div class="text-gray-400 mt-1">Playstation 4</div>
                        <div class="mt-6 text-gray-400 hidden lg:block">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam, doloribus quia, illum
                            sint dolorum, cumque repudiandae architecto sed nemo sequi assumenda explicabo. Sint impedit
                            quod dicta ea libero quaerat unde quae, tempora quis vel, sapiente, ad voluptatum
                            exercitationem! Repellendus ex nam soluta blanditiis vitae porro laudantium ipsam nobis
                            labore ducimus.
                        </div>
                    </div>
                </div> <!-- end game -->
            </div>
        </div>
        <div class="most-anticipated w-full lg:w-1/4 mt-12 lg:mt-0">
            <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Most Anticipated</h2>
            <div class="most-anticipated-container space-y-10 mt-8">
                <div class="game flex">
                    <a href="#">
                        <img src="/cyberpunk.jpg" alt="game cover"
                            class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="ml-4">
                        <div class="hover:text-gray-300">Cyberpunk 2077</div>
                        <div class="text-gray-400 text-sm mt-1">Sept 16, 2020</div>
                    </div>
                </div> <!-- end game -->
                <div class="game flex">
                    <a href="#">
                        <img src="/cyberpunk.jpg" alt="game cover"
                            class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="ml-4">
                        <div class="hover:text-gray-300">Cyberpunk 2077</div>
                        <div class="text-gray-400 text-sm mt-1">Sept 16, 2020</div>
                    </div>
                </div> <!-- end game -->
                <div class="game flex">
                    <a href="#">
                        <img src="/cyberpunk.jpg" alt="game cover"
                            class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="ml-4">
                        <div class="hover:text-gray-300">Cyberpunk 2077</div>
                        <div class="text-gray-400 text-sm mt-1">Sept 16, 2020</div>
                    </div>
                </div> <!-- end game -->
                <div class="game flex">
                    <a href="#">
                        <img src="/cyberpunk.jpg" alt="game cover"
                            class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="ml-4">
                        <div class="hover:text-gray-300">Cyberpunk 2077</div>
                        <div class="text-gray-400 text-sm mt-1">Sept 16, 2020</div>
                    </div>
                </div> <!-- end game -->
            </div>
            <h2 class="text-blue-500 uppercase tracking-wide font-semibold mt-12">Coming Soon</h2>
            <div class="coming-soon-container space-y-10 mt-8">
                <div class="game flex">
                    <a href="#">
                        <img src="/cyberpunk.jpg" alt="game cover"
                            class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="ml-4">
                        <div class="hover:text-gray-300">Cyberpunk 2077</div>
                        <div class="text-gray-400 text-sm mt-1">Sept 16, 2020</div>
                    </div>
                </div> <!-- end game -->
                <div class="game flex">
                    <a href="#">
                        <img src="/cyberpunk.jpg" alt="game cover"
                            class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="ml-4">
                        <div class="hover:text-gray-300">Cyberpunk 2077</div>
                        <div class="text-gray-400 text-sm mt-1">Sept 16, 2020</div>
                    </div>
                </div> <!-- end game -->
                <div class="game flex">
                    <a href="#">
                        <img src="/cyberpunk.jpg" alt="game cover"
                            class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="ml-4">
                        <div class="hover:text-gray-300">Cyberpunk 2077</div>
                        <div class="text-gray-400 text-sm mt-1">Sept 16, 2020</div>
                    </div>
                </div> <!-- end game -->
                <div class="game flex">
                    <a href="#">
                        <img src="/cyberpunk.jpg" alt="game cover"
                            class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="ml-4">
                        <div class="hover:text-gray-300">Cyberpunk 2077</div>
                        <div class="text-gray-400 text-sm mt-1">Sept 16, 2020</div>
                    </div>
                </div> <!-- end game -->
            </div>
        </div>
    </div>
</div> <!-- end container -->

@endsection
