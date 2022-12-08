<?php
include "../config/db.php";
include "../Crud-station/crud-station-controle-classes.php";
include "../Classes/cities.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staion</title>
    <link rel="stylesheet" href="../Admins/style.css">

    <!-- Tailwind -->
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
</head>

<body class="mainBody">

    <!-- =====================SideBare In mobil===================== -->
    <div class="navbar w-full">
        <nav id="navbar" class="navbar flex items-center p-2 text-base font-normal text-gray-900  dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 flex justify-center bg-black h-16 border-b-2">


            <button id="dropdownDefault" data-dropdown-toggle="dropdown" class=" " type="button">
                <ul class="flex items-center">
                    <iconify-icon icon="ic:round-menu" style="color: #9ca3af;" width="50" height="50"></iconify-icon>
                </ul>
            </button>
            <!-- Dropdown menu -->
            <div id="dropdown" class="hidden sidebar2 z-10 w-fit">
                <aside class="sidebar2  w-screen h-screen sticky top-0" aria-label="Sidebar" aria-labelledby="dropdownDefault">
                    <div class="overflow-y-auto py-4 px-3 bg-gray-50 rounded dark:bg-gray-800 h-screen">
                        <ul class="space-y-5">
                            <li>
                                <button type="button" class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example2">
                                    <iconify-icon icon="material-symbols:account-circle" style="color: #9ca3af;" width="25" height="25"></iconify-icon>
                                    <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Saad Meddiche</span>
                                    <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <ul id="dropdown-example2" class="py-2 space-y-2">
                                    <li>
                                        <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                            <iconify-icon icon="material-symbols:switch-account" style="color: #9ca3af;" width="25" height="25"></iconify-icon>
                                            <span class="flex-1 ml-3 whitespace-nowrap">Account</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                            <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="flex-1 ml-3 whitespace-nowrap">LogOut</span>
                                        </a>
                                    </li>


                                </ul>
                            </li>
                            <li>
                                <a href="../Dashboard/dashboard.php" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                                    </svg>
                                    <span class="ml-3">Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="../Station/station.php" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                                    </svg>
                                    <span class="flex-1 ml-3 whitespace-nowrap">Stations</span>
                                </a>
                            </li>
                            <li>
                                <a href="../Train/train.php" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <iconify-icon icon="bx:train" style="color: #9ca3af;" width="25" height="25"></iconify-icon>

                                    <span class="flex-1 ml-3 whitespace-nowrap">Trains</span>
                                </a>
                            </li>
                            <li>
                                <a href="../Trips/trips.php" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <!-- <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path>
                        </svg> -->
                                    <iconify-icon icon="icon-park-outline:round-trip" style="color: #9ca3af;" width="25" height="25"></iconify-icon>
                                    <span class="flex-1 ml-3 whitespace-nowrap">Trips</span>
                                </a>
                            </li>
                            <li>
                                <a href="../Tickets/tickets.php" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <iconify-icon icon="dashicons:tickets-alt" style="color: #9ca3af;" width="25" height="25"></iconify-icon>
                                    <span class="flex-1 ml-3 whitespace-nowrap">Tickets</span>
                                </a>
                            </li>


                        </ul>
                        <ul class="pt-4 mt-4 space-y-6 border-t border-gray-200 dark:border-gray-700">

                            <li>
                                <a href="../Admins/admins.php" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
                                    <iconify-icon icon="ic:baseline-admin-panel-settings" style="color: #9ca3af;" width="25" height="25"></iconify-icon>
                                    <span class="ml-3">Admins</span>
                                </a>
                            </li>

                            <li>
                                <a href="../Users/users.php" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">

                                    <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="flex-1 ml-3 whitespace-nowrap">Users</span>
                                </a>
                            </li>

                            <li>
                                <a href="../help/help.php" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
                                    <iconify-icon icon="material-symbols:help-clinic-rounded" style="color: #9ca3af;" width="25" height="25"></iconify-icon>
                                    <span class="ml-3">Help</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>


        </nav>

    </div>

    <div class="flex  ">
        <!-- =====================Side Bare===================== -->
        <div id="sidebar" class="sidebar ">
            <aside class="sidebar w-64 h-screen sticky top-0 " aria-label="Sidebar">
                <div class="overflow-y-auto py-4 px-3 bg-gray-50 rounded dark:bg-gray-800 h-screen">
                    <ul class="space-y-6">
                        <li>
                            <button type="button" class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                                <iconify-icon icon="material-symbols:account-circle" style="color: #9ca3af;" width="25" height="25"></iconify-icon>
                                <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Saad Meddiche</span>
                                <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <ul id="dropdown-example" class="py-2 space-y-2">
                                <li>
                                    <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                        <iconify-icon icon="material-symbols:switch-account" style="color: #9ca3af;" width="25" height="25"></iconify-icon>
                                        <span class="flex-1 ml-3 whitespace-nowrap">Account</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                        <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="flex-1 ml-3 whitespace-nowrap">LogOut</span>
                                    </a>
                                </li>


                            </ul>
                        </li>
                        <li>
                            <a href="../Dashboard/dashboard.php" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                    <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                                </svg>
                                <span class="ml-3">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="../Station/station.php" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                                </svg>
                                <span class="flex-1 ml-3 whitespace-nowrap">Stations</span>
                            </a>
                        </li>
                        <li>
                            <a href="../Train/train.php" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                <iconify-icon icon="bx:train" style="color: #9ca3af;" width="25" height="25"></iconify-icon>

                                <span class="flex-1 ml-3 whitespace-nowrap">Trains</span>
                            </a>
                        </li>
                        <li>
                            <a href="../Trips/trips.php" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                <!-- <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path>
                        </svg> -->
                                <iconify-icon icon="icon-park-outline:round-trip" style="color: #9ca3af;" width="25" height="25"></iconify-icon>
                                <span class="flex-1 ml-3 whitespace-nowrap">Trips</span>
                            </a>
                        </li>
                        <li>
                            <a href="../Tickets/tickets.php" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                <iconify-icon icon="dashicons:tickets-alt" style="color: #9ca3af;" width="25" height="25"></iconify-icon>
                                <span class="flex-1 ml-3 whitespace-nowrap">Tickets</span>
                            </a>
                        </li>


                    </ul>
                    <ul class="pt-4 mt-4 space-y-6 border-t border-gray-200 dark:border-gray-700">

                        <li>
                            <a href="../Admins/admins.php" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
                                <iconify-icon icon="ic:baseline-admin-panel-settings" style="color: #9ca3af;" width="25" height="25"></iconify-icon>
                                <span class="ml-3">Admins</span>
                            </a>
                        </li>

                        <li>
                            <a href="../Users/users.php" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">

                                <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="flex-1 ml-3 whitespace-nowrap">Users</span>
                            </a>
                        </li>
                        <li>
                            <a href="../help/help.php" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
                                <iconify-icon icon="material-symbols:help-clinic-rounded" style="color: #9ca3af;" width="25" height="25"></iconify-icon>
                                <span class="ml-3">Help</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </aside>
        </div>

        <!-- =====================Table of stations===================== -->
        <div class="w-full ">
            <table class=" text-center border-separate border-spacing-2 border border-slate-500 w-full">
                <thead>
                    <tr>
                        <th class="border border-slate-600 ...">#</th>
                        <th class="border border-slate-600 ...">Name</th>
                        <th class="border border-slate-700 ...">Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border border-slate-700 ...">1</td>
                        <td class="border border-slate-700 ...">Saad Meddiche</td>
                        <td class="border border-slate-700 ...">saadmeddiche2004201@gmail.com</td>
                    </tr>
                    <tr>
                        <td class="border border-slate-700 ...">2</td>
                        <td class="border border-slate-700 ...">Anass Meddiche</td>
                        <td class="border border-slate-700 ...">saadmeddiche2004201@gmail.com</td>
                    </tr>
                    <tr>
                        <td class="border border-slate-700 ...">3</td>
                        <td class="border border-slate-700 ...">Soufian Meddiche</td>
                        <td class="border border-slate-700 ...">saadmeddiche2004201@gmail.com</td>
                    </tr>
                    <tr>
                        <td class="border border-slate-700 ...">4</td>
                        <td class="border border-slate-700 ...">Meriam Meddiche</td>
                        <td class="border border-slate-700 ...">saadmeddiche2004201@gmail.com</td>
                    </tr>
                    <tr>
                        <td class="border border-slate-700 ...">1</td>
                        <td class="border border-slate-700 ...">Saad Meddiche</td>
                        <td class="border border-slate-700 ...">saadmeddiche2004201@gmail.com</td>
                    </tr>
                    <tr>
                        <td class="border border-slate-700 ...">2</td>
                        <td class="border border-slate-700 ...">Anass Meddiche</td>
                        <td class="border border-slate-700 ...">saadmeddiche2004201@gmail.com</td>
                    </tr>
                    <tr>
                        <td class="border border-slate-700 ...">3</td>
                        <td class="border border-slate-700 ...">Soufian Meddiche</td>
                        <td class="border border-slate-700 ...">saadmeddiche2004201@gmail.com</td>
                    </tr>
                    <tr>
                        <td class="border border-slate-700 ...">4</td>
                        <td class="border border-slate-700 ...">Meriam Meddiche</td>
                        <td class="border border-slate-700 ...">saadmeddiche2004201@gmail.com</td>
                    </tr>
                    <tr>
                        <td class="border border-slate-700 ...">1</td>
                        <td class="border border-slate-700 ...">Saad Meddiche</td>
                        <td class="border border-slate-700 ...">saadmeddiche2004201@gmail.com</td>
                    </tr>
                    <tr>
                        <td class="border border-slate-700 ...">2</td>
                        <td class="border border-slate-700 ...">Anass Meddiche</td>
                        <td class="border border-slate-700 ...">saadmeddiche2004201@gmail.com</td>
                    </tr>
                    <tr>
                        <td class="border border-slate-700 ...">3</td>
                        <td class="border border-slate-700 ...">Soufian Meddiche</td>
                        <td class="border border-slate-700 ...">saadmeddiche2004201@gmail.com</td>
                    </tr>
                    <tr>
                        <td class="border border-slate-700 ...">1</td>
                        <td class="border border-slate-700 ...">Saad Meddiche</td>
                        <td class="border border-slate-700 ...">saadmeddiche2004201@gmail.com</td>
                    </tr>
                    <tr>
                        <td class="border border-slate-700 ...">2</td>
                        <td class="border border-slate-700 ...">Anass Meddiche</td>
                        <td class="border border-slate-700 ...">saadmeddiche2004201@gmail.com</td>
                    </tr>
                    <tr>
                        <td class="border border-slate-700 ...">3</td>
                        <td class="border border-slate-700 ...">Soufian Meddiche</td>
                        <td class="border border-slate-700 ...">saadmeddiche2004201@gmail.com</td>
                    </tr>

                </tbody>

                <!-- The link from where i got this code -->
                <!-- https://tailwindcomponents.com/component/cookie-banner-tailwind-css-alpine-js -->
                <div x-data="{ open: true }" class="" id="popUp">

                </div>

                <!-- Don't show again the pop up -->
                <script>
                    if (window.localStorage.getItem('show') === "No") {
                        document.getElementById("popUp").innerHTML = "";
                    }

                    if (window.localStorage.getItem('show') != "No") {
                        document.getElementById("popUp").innerHTML = `
                    <div x-show="open" class="max-w-screen-lg mx-auto fixed bg-white inset-x-5 p-5 bottom-40 rounded-lg drop-shadow-2xl flex flex-wrap md:flex-nowrap text-center md:text-left items-center justify-center md:justify-between">
                        <div class="w-full"> <b class="text-indigo-600">Hint:</b> Go to <a class="text-indigo-600" href="../help/help.php"><b>Help</b></a> so you know the Shortcut Of Each Menu
                        </div>
                        <div class=" items-center flex-shrink-0">

                            <button onclick="doNotShowAgain()" @click="open = false" class=" px-5 py-2 text-indigo-500 hover:text-indigo-900 ">Don't show again</button>

                            <button @click="open = false" class="bg-indigo-500 px-5 py-2 text-white rounded-md hover:bg-indigo-700 focus:outline-none">Ok</button>
                        </div>
                    </div>
                    `;
                    }
                </script>
            </table>

        </div>

    </div>



    <!-- Include the short cut of all modals -->
    <?php
    include "../modals.php";
    ?>





</body>

<!-- Tailwind -->
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn-tailwindcss.vercel.app/"></script>
<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
<script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>

<!-- iconify -->
<script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<!-- For the pop up [ctrl+m]-->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<script src="../Users/script.js"></script>



</html>