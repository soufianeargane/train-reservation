<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <title>Document</title>
    <style>
        html {
            scroll-behavior: smooth;
        }

        .tex {
            z-index: 1000;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 40PX;
            width: 100%;
            text-align: center;
            font-weight: 700;
            color: white;
        }

        .select2,
        .select2-container,
        .select2-container--default {
            width: 100% !important;
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity)) !important;
            font-size: 0.875rem;
            line-height: 1.25rem;
            padding: 0.625rem;
            --tw-bg-opacity: 1;
            background-color: rgb(249 250 251 / var(--tw-bg-opacity)) !important;
            --tw-border-opacity: 1;
            border-color: rgb(209 213 219 / var(--tw-border-opacity));
            border-width: 1px;
            border-radius: 0.5rem;
        }

        .select2-container--default .select2-selection--single {
            background-color: inherit !important;
            border: 0 !important;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            top: 50% !important;
            transform: translateY(-50%) !important;
        }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./assets/css/style.css" />
</head>

<?php
// to fetch cities in form
include './fetch.php';
$city = new fetchCities();
$allCities = $city->fetchAllCities();
$city2 = new fetchCities();
$allCities2 = $city2->fetchAllCities();
?>

<body>
    <header style="
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-image: url(https://www.thetrainline.com/cmsmedia/cms/9673/switz_lucerne-hero_1x.jpg);
        z-index: 1;position: relative;">
        <nav class="bg-white px-2 sm:px-4 py-2.5 dark:bg-gray-900 fixed w-full z-20 top-0 left-0 rounded-br-full">
            <div class="container flex flex-wrap items-center justify-between mx-auto">
                <a href="" class="flex items-center">
                    <img src="assets/img/Screenshot 2022-12-01 145842.png" class="h-6 mr-3 sm:h-9" alt="" />
                </a>
                <div class="flex md:order-2">
                    <a href="login.php" class="text-white hover:text-black flex items-center bg-gray-400 hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-1.5 text-center mr-3 md:mr-0">
                        <p class="">Sign in</p>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth="{1.5}" stroke="currentColor" className="w-6 h-6" class="h-9 w-9">
                                <path strokeLinecap="round" strokeLinejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </span>
                    </a>
                    <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center mr-4 p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                    <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="index.php" class="block z-[111111111] py-2 pl-3 pr-4 text-gray-700 hover:text-gray-500 hover:bg-gray-400 rounded md:hover:bg-transparent md:bg-transparent md:text-gray-300 md:p-0">
                                Home</a>
                        </li>
                        <li>
                            <a href="#browse" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-400 md:hover:bg-transparent md:hover:text-gray-300 md:p-0">Browse</a>
                        </li>
                        <li>
                            <a href="Register.php" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-400 md:hover:bg-transparent md:hover:text-gray-300 md:p-0">Register</a>
                        </li>


                    </ul>
                </div>
            </div>
        </nav>

        <p class="tex">SBB Train Tickets and Timetables</p>
    </header>
    <div style="background-color: #eee" class="w-full margin-top">
        <div class="flex justify-center">
            <form id="form-father" action="page.php" method="post">
                <div id="select-father" class="p-2 flex gap-2 flex-wrap justify-center">
                    <div id="select1" class="flex gap-2">
                        <!-- FROM WHERE -->
                        <div class="w-44 md:w-60">
                          
                            <select name="city_start" id="from">
                                <option class="text-blue-400" selected disabled>FROM</option>
                                <?php
                                foreach ($allCities as $allCities) {
                                    echo '<option value="' . $allCities["id"] . '">' . $allCities["ville"] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <!-- TO -->
                        <div class="w-44 md:w-60">
    
                            <select name="station_arrive_id" id="to">
                                <option class="text-blue-400" selected disabled>To</option>
                                <?php
                                foreach ($allCities2 as $allCities2) {
                                    echo '<option value="' . $allCities2["id"] . '">' . $allCities2["ville"] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="w-44 md:w-60">
                            <input class="select2-container--default py-3" type="date" id="start" name="trip-day" />
                        </div>
                        <button class="bg-green-400 hover:bg-green-600 rounded" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-8 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="bg-white hidden md:block">
        <div class="container p-5 mx-auto justify-between flex">
            <div class="flex flex-col items-center">
                <!-- icon -->
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                    </svg>
                </div>
                <!-- paragraph -->
                <p class="font-semibold text-center">
                    Join millions of people who use us every day
                </p>
            </div>
            <div class="flex flex-col items-center">
                <!-- icon -->
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                    </svg>
                </div>
                <!-- paragraph -->
                <p class="font-semibold text-center">
                    Travel to thousands of destinations in 45 countries
                </p>
            </div>
            <div class="flex flex-col items-center">
                <!-- icon -->
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                    </svg>
                </div>
                <!-- paragraph -->
                <p class="font-semibold text-center">
                    Join millions of people who use us every day
                </p>
            </div>
        </div>
    </div>
    <!-- display in phone -->

    <div id="controls-carousel" class="relative mt-4 md:hidden" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-16 overflow-hidden rounded-lg ">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <!-- <img src="/docs/images/carousel/carousel-1.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..."> -->
                <div class="flex flex-col items-center">
                    <!-- icon -->
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                        </svg>
                    </div>
                    <!-- paragraph -->
                    <p class="font-semibold text-center">
                        Join millions of people who use us every day
                    </p>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                <!-- <img src="/docs/images/carousel/carousel-2.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..."> -->
                <div class="flex flex-col items-center">
                    <!-- icon -->
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>
                    </div>
                    <!-- paragraph -->
                    <p class="font-semibold text-center">
                        Travel to thousands of destinations in 45 countries
                    </p>
                </div>
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <!-- <img src="/docs/images/carousel/carousel-3.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..."> -->
                <div class="flex flex-col items-center">
                    <!-- icon -->
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <!-- paragraph -->
                    <p class="font-semibold text-center">
                        Prices from hundreds of train and coach companies
                    </p>
                </div>
            </div>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute  top-0 left-0 z-30 flex items-center justify-center  cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30  dark:group-hover:bg-gray-800/60   group-focus:outline-none">
                <svg aria-hidden="true" class="w-6 h-6 text-black dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center  cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30  group-focus:outline-none">
                <svg aria-hidden="true" class="w-6 h-6 text-black dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>


    <main id="browse" style="background-color: #eee;">
        <div class="container p-12 mx-auto">
            <h2 class=" text-xl md:text-2xl ">Browse the latest train rides we offer</h2>
            <div class=" py-6 flex justify-between">
                <div style="background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                background-image: url(./assets/img/original.jfif);
                height: 517px; width: 500px;" class="hidden md:block">

                </div>
                <?php
                $data = new fetchCities();
                $rows = $data->fetchFewTrips();
                ?>
                <div>
                    <div class="bg-blue-900 text-white p-4 text-center flex items-center gap-2">
                        <i class="bi bi-train-front text-4xl"></i>
                        <p>SAMPLE AND SMOOTH FARES THROUGH YOUCODE-trains</p>
                    </div>
                    <?php
                    foreach ($rows as $row) {
                    ?>
                        <div class=" p-4 border-b-4 flex items-center bg-white justify-between">
                            <p class="text-xl"><?php echo $row['start'] ?> to New <?php echo $row['end'] ?></p>
                            <div class="flex flex-col items-center">
                                <p class="text-blue-500">AS LOW AS</p>
                                <p class="text-4xl "><?php echo $row['price'] ?></p>
                            </div>
                        </div>
                    <?php  } ?>
                </div>
            </div>
        </div>
    </main>
    <!-- js -->
    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(function() {
            $("#from").select2();
            $("#to").select2();
        });
    </script>

</body>

</html>