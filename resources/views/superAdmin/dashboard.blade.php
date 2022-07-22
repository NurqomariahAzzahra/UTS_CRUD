<x-template-layout>
    <h5 class="font-bold text-x1 text-gray-800 leading-tight">
        <h1 class=" text-2xl leading-6 font-extrabold tracking-tight text-gray-900 sm:text-2xl">
            <!-- {{$title}} -->
            DASHBOARD SUPER ADMIN
        </h1>
    </h5>
    <div class="shadow px-10 py-10 bg-white rounded sm:px-5 sm:py-1">
        <!-- <div class="col-lg d-flex justify-content-center text-center">
            <a href="{{route('data.create')}}"><button class="inline-flex justify-center py-3 px-6 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Create Data</button></a>
        </div> -->

        <body class="bg-grey-100 font-sans leading-normal tracking-normal">
            <!--Container-->
            <div class="container w-full mx-auto pt-20">

                <div class="w-full px-8 md:px-0 md:mt-8 mb-16 text-black-800 leading-normal">

                    <!--Console Content-->

                    <div class="flex flex-wrap">
                        <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                            <!--Metric Card-->
                            <div class="bg-white border rounded shadow p-8">
                                <div class="flex flex-row items-center">
                                    <div class="flex-shrink pr-4">
                                        <div class="rounded p-3 bg-green-600"><i class="fa fa-wallet fa-2x fa-fw fa-inverse"></i></div>
                                    </div>
                                    <div class="flex-1 text-right md:text-center">
                                        <h5 class="font-bold uppercase text-gray-500">Jumlah Produk</h5>
                                        <h3 class="font-bold text-3xl">6 <span class="text-green-500"><i class="fas fa-caret-up"></i></span></h3>
                                    </div>
                                </div>
                            </div>
                            <!--/Metric Card-->
                        </div>
                        <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                            <!--Metric Card-->
                            <div class="bg-white border rounded shadow p-8">
                                <div class="flex flex-row items-center">
                                    <div class="flex-shrink pr-4">
                                        <div class="rounded p-3 bg-pink-600"><i class="fas fa-users fa-2x fa-fw fa-inverse"></i></div>
                                    </div>
                                    <div class="flex-1 text-right md:text-center">
                                        <h5 class="font-bold uppercase text-gray-500">Viewers</h5>
                                        <h3 class="font-bold text-3xl">3 <span class="text-pink-500"><i class="fas fa-exchange-alt"></i></span></h3>
                                    </div>
                                </div>
                            </div>
                            <!--/Metric Card-->
                        </div>
                        <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                            <!--Metric Card-->
                            <div class="bg-white border rounded shadow p-8">
                                <div class="flex flex-row items-center">
                                    <div class="flex-shrink pr-4">
                                        <div class="rounded p-3 bg-yellow-600"><i class="fas fa-user-plus fa-2x fa-fw fa-inverse"></i></div>
                                    </div>
                                    <div class="flex-1 text-right md:text-center">
                                        <h5 class="font-bold uppercase text-gray-500">Rating</h5>
                                        <h3 class="font-bold text-3xl">5.0 <span class="text-yellow-600"><i class="fas fa-caret-up"></i></span></h3>
                                    </div>
                                </div>
                            </div>
                            <!--/Metric Card-->
                        </div>
                    </div>
                </div>


            </div>

            </footer>

            <script>
                /*Toggle dropdown list*/
                /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

                var userMenuDiv = document.getElementById("userMenu");
                var userMenu = document.getElementById("userButton");

                var navMenuDiv = document.getElementById("nav-content");
                var navMenu = document.getElementById("nav-toggle");

                document.onclick = check;

                function check(e) {
                    var target = (e && e.target) || (event && event.srcElement);

                    //User Menu
                    if (!checkParent(target, userMenuDiv)) {
                        // click NOT on the menu
                        if (checkParent(target, userMenu)) {
                            // click on the link
                            if (userMenuDiv.classList.contains("invisible")) {
                                userMenuDiv.classList.remove("invisible");
                            } else {
                                userMenuDiv.classList.add("invisible");
                            }
                        } else {
                            // click both outside link and outside menu, hide menu
                            userMenuDiv.classList.add("invisible");
                        }
                    }

                    //Nav Menu
                    if (!checkParent(target, navMenuDiv)) {
                        // click NOT on the menu
                        if (checkParent(target, navMenu)) {
                            // click on the link
                            if (navMenuDiv.classList.contains("hidden")) {
                                navMenuDiv.classList.remove("hidden");
                            } else {
                                navMenuDiv.classList.add("hidden");
                            }
                        } else {
                            // click both outside link and outside menu, hide menu
                            navMenuDiv.classList.add("hidden");
                        }
                    }

                }

                function checkParent(t, elm) {
                    while (t.parentNode) {
                        if (t == elm) {
                            return true;
                        }
                        t = t.parentNode;
                    }
                    return false;
                }
            </script>

        </body>
    </div>


    </div>
</x-template-layout>