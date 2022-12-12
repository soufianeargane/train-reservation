<?php
session_start();
$_SESSION["URLNNOW"] = $_SERVER['REQUEST_URI'];


include "../CRUDTRAIN/CrudTrain.php";
include "../Crud-station/crud-station-controle-classes.php";



$data = new crudStationConfigue();
$all = $data->fetchAllTables();

$fetch2 = new cities();
//call the method that will fetch all the citie from ville table , so we can use it select
$allCities2 = $fetch2->fetchCities();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link rel="stylesheet" href="../Account/style.css">

    <!-- Tailwind -->
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />

    <!-- BEGIN parsley css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/src/parsley.css">
    <!-- END parsley css-->
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</head>

<body class="mainBody ">

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
    <!-- end -->

    <div class="flex w-full">
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
        <!-- end -->

        <!-- =====================Information of Account===================== -->


        <div class="w-full space-y-5 px-10 my-20 md:my-auto">

            <form action="./account-db.php" method="post" data-parsley-validate>
                <input type="hidden" name="idAccount" id="" value="<?php echo $_SESSION["id"] ?>">
                <?php
                if (isset($_SESSION["messageAccount"])) {
                    echo $_SESSION["messageAccount"];
                    unset($_SESSION["messageAccount"]);
                }
                ?>

                <div>
                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Name</label>
                    <input type="text" name="nameAccounts" id="nameAccountjs" value="<?php echo $_SESSION['name'] ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-black focus:border-black block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Name ..." required disabled>
                </div>
                <div>
                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Email</label>
                    <input type="text" name="emailAccounts" id="emailAccountjs" value="<?php echo $_SESSION['email'] ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-black focus:border-black block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Email ..." required disabled>
                </div>
                <!-- this divs shoulb be shown when the BTN modification is clicked -->
                <div class="AfterMod hidden">
                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Current Password</label>
                    <input type="text" name="CurrentPass" id="currentpass" value="" class="clear bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-black focus:border-black block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Current Password ..." data-parsley-minlength="8" data-parsley-minlength-message="Please set a password more then 8" required>
                </div>
                <div class="AfterMod hidden">
                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">New Password</label>
                    <input type="text" name="NewPass" id="newpass" value="" class="clear bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-black focus:border-black block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="New Password ..." data-parsley-minlength="8" data-parsley-minlength-message="Please set a password more then 8" data-parsley-equalto="#repeatpass" data-parsley-equalto-message="This is not the same password">
                </div>
                <div class="AfterMod hidden">
                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black"> Repeat Password</label>
                    <input type="text" name="RepeatPass" id="repeatpass" value="" class="clear bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-black focus:border-black block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Repeat Password ..." data-parsley-equalto="#newpass" data-parsley-equalto-message="This is not the same password" data-parsley-minlength="8" data-parsley-minlength-message="Please set a password more then 8">
                </div>
                <!-- end -->
                <div class="AfterMod">
                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Password</label>
                    <input type="text" id="" value="********" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Password ..." disabled>
                    <input type="hidden" id="nowpass" name="NowPass" value="<?php echo $_SESSION['password'] ?> ">
                </div>
                <div>
                    <label for="text" class="block mb-2 text-sm font-medium text-white ">You can't see me</label>
                    <div class="flex gap-2">
                        <a onclick="modifications()" class="AfterMod text-center cursor-pointer hidden bg-gray-50 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white w-1/3"><b>Cancel</b></a>
                        <a onclick="modifications()" class="AfterMod text-center cursor-pointer bg-gray-50  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"><b>Modifications</b></a>
                        <button type="submit" name="updateBtnAccount" class="AfterMod hidden  bg-gray-50 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white w-2/3"><b>Update</b></button>
                    </div>
                </div>
            </form>

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

<script src="../Station/script.js"></script>

<!-- For the pop up [ctrl+m]-->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<!-- ctrl + m -->
<script src="../Users/script.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
</script>

<!-- when modification and cancel btns are pressed -->
<script src="script.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(function() {
        $("#from").select2();
        $("#to").select2();
    });
</script>


</html>