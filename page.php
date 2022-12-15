
<?php
session_start();
if (!isset($_SESSION['id'])) {
      header("Location: login.php");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://cdn.tailwindcss.com"></script>
      <script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
      <script nomodule src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ionic/core/css/ionic.bundle.css" />
      <title>Document</title>
</head>

<body style="position: static;overflow-y: scroll;">

      <div class="container mx-auto">
            <nav class="shadow-md px-2 sm:px-4 py-2.5  w-full   rounded-br-full mb-6">
                  <div class="container flex flex-wrap items-center justify-between mx-auto">
                        <a href="" class="flex items-center">
                              <img src="assets/img/Screenshot 2022-12-01 145842.png" class="h-6 mr-3 sm:h-9" alt="" />
                        </a>
                        <div class="flex md:order-2">
                              <button id="dropdownInformationButton" data-dropdown-toggle="dropdownInformation" class="md:order-2 text-white bg-gray-400 hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-200 font-medium rounded-lg text-sm px-2 py-1.5 text-center inline-flex items-center mr-6" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth="{1.5}" stroke="currentColor" className="w-6 h-6" class="h-9 w-9">
                                          <path strokeLinecap="round" strokeLinejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                              </button>
                              <div id="dropdownInformation" class="hidden md:order-1 z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                    <div class="py-3 px-4 text-sm text-gray-900 dark:text-white">
                                          <div><?php echo $_SESSION['name'] ?></div>
                                          <div class="font-medium truncate"><?php echo $_SESSION['email'] ?></div>
                                    </div>
                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownInformationButton">
                                          <li>
                                                <a href="./historiques.php" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">History</a>
                                          </li>
                                          <?php
                                          if ($_SESSION['role'] === 0) :
                                                echo '<li>
                                                <a href="./Account/regularAccount.php" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                                </li>';
                                          endif ?>
                                    </ul>
                                    <div class="py-1">
                                          <a href="logout.php" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                                    </div>
                              </div>
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
                                          <a href="" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-400 md:hover:bg-transparent md:hover:text-gray-300 md:p-0">Browse</a>
                                    </li>
                              </ul>
                              <?php
                              if ($_SESSION['role'] === 1) :

                                    echo '
                                          <a href="./Dashboard/dashboard.php" class="block py-2 pl-3 pr-4 border-solid border-2 border-black text-white rounded bg-black ">Dashbord</a>
                                    ';
                              endif ?>
                        </div>

                        <!-- Dropdown menu -->



                  </div>
            </nav>
      </div>
      <?php

      var_dump($_SESSION['id']);
      ?>
      <?php

      include './ticketsconfiguration.php';

      $ticket = new configtickets();
      $ticketcustomer = array();

      $ticketcustomer = $ticket->fetchtickets($_SESSION['date']);

      $city = new  configtickets();
      $city  = array();
      if (isset($_SESSION['price']) && isset($_SESSION['qte.'])) {
            $total = (int)$_SESSION['price'] * (int)$_SESSION['qte.'];
      }

      echo "Welcome " . " " . $_SESSION['username'];
      ?>

      <div class="container mx-auto">
            <!--first section  -->
            <div class="flex flex-wrap justify-between px-6">
                  <div class="flex px-6 ">
                        <button class="h-11  space-x-6  bg-blue-700 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                              <ion-icon name="train"></ion-icon>
                              <span class="text-white font-normal">Train</span>
                        </button>
                        <button class=" h-11  space-x-6  bg-transparent  space-x-2 hover:bg-blue-500 text-blue-700 font-semibold hover:text-white  px-6 border border-blue-500 hover:border-transparent rounded inline-flex items-center">
                              <ion-icon name="bus"></ion-icon>
                              <span class="text-blue-300 line-height: 1rem;">Coach</span>
                              <span class="font-bold">.18,5$</span>
                        </button>
                  </div>


                  <div class="mx-auto md:m-0 ">
                        <button type="button" class=" h-11 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 border-hidden  bg-white rounded-lg border  hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 flex items-center justify-center">
                              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                              </svg>
                              <span class="px-1 ">others days from </span>
                              <span class="px-1 font-bold ">$ 11.06</span>
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                              </svg>
                        </button>
                  </div>
            </div>

            <!--seconde section  -->
            <div class="px-11 flex  flex-wrap">
                  <button class=" flex-grow max-w-sm rounded  shadow-lg" type="button">
                        <div class="block px-6 pt-4 pb-2">
                              <form class="w-full max-w-sm">
                                    <div class="block items-center border-b border-teal-500 px-6">
                                          <span>Fri 2 Dec</span>
                                          <span>from</span>
                                          <span class="block">15 $</span>
                                    </div>
                              </form>
                        </div>
                  </button>

                  <button class=" flex-grow max-w-sm rounded  shadow-lg" type="button">
                        <div class="block px-6 pt-4 pb-2">
                              <form class="w-full max-w-sm">
                                    <div class="block items-center border-b border-teal-500 px-6">
                                          <span>Fri 2 Dec</span>
                                          <span>from</span>
                                          <span class="block">15 $</span>
                                    </div>
                              </form>
                        </div>
                  </button>
                  <button class="max-w-sm rounded  shadow-lg" type="button">
                        <div class="block px-6 pt-4 pb-2">
                              <form class="w-full max-w-sm">
                                    <div class="block items-center border-b border-teal-500 px-6">
                                          <span>Fri 2 Dec</span>
                                          <span>from</span>
                                          <span class="block">15 $</span>
                                    </div>
                              </form>
                        </div>
                  </button>
                  <button class="max-w-sm rounded  shadow-lg" type="button">
                        <div class="block px-6 pt-4 pb-2">
                              <form class="w-full max-w-sm">
                                    <div class="block items-center border-b border-teal-500 px-6">
                                          <span>Fri 2 Dec</span>
                                          <span>from</span>
                                          <span class="block">15 $</span>
                                    </div>
                              </form>
                        </div>
                  </button>
                  <button class="max-w-sm rounded  shadow-lg" type="button">
                        <div class="block px-6 pt-4 pb-2">
                              <form class="w-full max-w-sm">
                                    <div class="block items-center border-b border-teal-500 px-6">
                                          <span>Fri 2 Dec</span>
                                          <span>from</span>
                                          <span class="block">15 $</span>
                                    </div>
                              </form>
                        </div>
                  </button>
                  <button class="max-w-sm rounded  shadow-lg" type="button">
                        <div class="block px-6 pt-4 pb-2">
                              <form class="w-full max-w-sm">
                                    <div class="block items-center border-b border-teal-500 px-6">
                                          <span>Fri 2 Dec</span>
                                          <span>from</span>
                                          <span class="block">15 $</span>
                                    </div>
                              </form>
                        </div>
                  </button>
                  <button class="max-w-sm rounded  shadow-lg" type="button">
                        <div class="block px-6 pt-4 pb-2">
                              <form class="w-full max-w-sm">
                                    <div class="block items-center border-b border-teal-500 px-6">
                                          <span>Fri 2 Dec</span>
                                          <span>from</span>
                                          <span class="block">15 $</span>
                                    </div>
                              </form>
                        </div>
                  </button>

            </div>
            <!--third section -->
            <div class="lg:flex   ">
                  <!--first part-->
                  <div class="lg:w-1/2 py-4 px-11">
                        <button class="w-full h-11 flex  justify-center items-center bg-slate-200 hover:bg-gray-100 font-semibold  border border-gray-400  shadow">
                              <ion-icon name="chevron-down-outline"></ion-icon>
                              <span class="px-1 ">Earlier</span>
                        </button>

                        <!--details card part-->
                        <div class="pt-4 sm:py-10 ">
                              <!-- head part-->

                              <div class=" rounded-md sm:h-5 flex justify-between items-center divide-slate-200 bg-slate-100 sm:py-14">
                                    <div class="text-lg pl-8">
                                          <ion-icon name="calendar-outline"></ion-icon>
                                          <span class="font-medium">Mon <?php echo date("Y/m/d") ?></span>
                                    </div>
                                    <div>
                                          <span class="text-lg pl-0">Standar</span>
                                    </div>
                                    <div>
                                          <span class="text-lg pr-8 ">1stClass</span>
                                    </div>
                              </div>
                              <!-- other part-->
                              <?php
                              foreach ($ticketcustomer as $fetche) {
                              ?>


                                    <form action="" method="post">


                                          <button type="submit" name="showticket" class="  border-black	border-4 flex justify-between w-full block  px-4  border  sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                                                <div>
                                                      <div class="flex space-x-2 inline-block text-xl font-extrabold items-center">

                                                            <input class="w-16" value="<?php echo $fetche['starting_time'] ?>">

                                                            <ion-icon name="arrow-forward-outline"></ion-icon>
                                                            <span><?php echo $fetche['arriving_time'] ?></span>
                                                      </div>
                                                      <div class="pt-2 font-thin text-sm">

                                                            <input name="station-arrive w-8" class="font-mono" value="<?php echo  $fetche['station_arrive_id']; ?>">
                                                      </div>
                                                      <div class="flex w-8">

                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" w-6 h-8">
                                                                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 6.75V15m6-6v8.25m.503 3.498l4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 00-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0z" />
                                                            </svg>

                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mx-8 w-6 h-8">
                                                                  <path stroke-linecap="round" stroke-linejoin="round" d="M5.636 5.636a9 9 0 1012.728 0M12 3v9" />
                                                            </svg>

                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" w-6 h-8">
                                                                  <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 19.5v-.75a7.5 7.5 0 00-7.5-7.5H4.5m0-6.75h.75c7.87 0 14.25 6.38 14.25 14.25v.75M6 18.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                                            </svg>

                                                      </div>
                                                </div>


                                                <span class="px-2 w-12">

                                                      <img src="./assets/img/oncf.png" alt="">
                                                </span>


                                                <div class=" pr-7 block">

                                                      <input name="price" class="w-8 text-xl font-mono " value="<?php echo $fetche['price'] . "Dh" ?>">

                                                </div>
                                                <div class=" px-1 block">
                                                      <h6 class="text-xl font-mono "><?php echo ((40 / 100) * $fetche['price']) + $fetche['price'] ?> DH </h6>
                                                </div>
                                          </button>
                                          </>
                                    </form>

                              <?php } ?>

                        </div>

                  </div>


                  <div class="  py-5 px-12  lg:w-1/2 ">
                        <section class="shadow-xl">
                              <div class="grow bg-slate-800  rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                                    <a href="#">

                                          <form action="" method="post">

                                                <div class="pl-5 pb-5">
                                                      <a href="#">
                                                            <h5 class="text-3xl py-3 font-poppins font-extrabold text-white">Reserve your seconde class ticket </h5>
                                                      </a>
                                                      <div class=" items-center mt-2.5 mb-5">
                                                            <div class="flex">
                                                                  <p class="text-white  font-extrabold">Selected item price :</p>
                                                                  <input disabled name="price" class="bg-blue-100 bg-slate-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:text-blue-800 ml-3" value="<?php if (isset($_SESSION['price'])) echo $_SESSION['price'] ?>">
                                                                  <p class="text-white ">Qte. Selected :</p>
                                                                  <input type="number" id="quantity" name="quantity" min="1" max="15" class="bg-blue-100 bg-slate-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3" value="<?php if (isset($_SESSION['qte.'])) echo $_SESSION['qte.'] ?>">
                                                            </div>
                                                      </div>
                                                      <div class="flex items-center justify-between">
                                                            <label class="text-white text-3xl  font-extrabold"> TOTAL PRICE TICKET :</label>
                                                            <input name="totalPRICE1" value="<?php echo  $total ?>" class="w-24 text-xl  font-extrabold  text-white" disabled>
                                                            <input name="station_start_id" type="hidden" value="<?php echo  $fetche['station_start_id']; ?>">
                                                            <input name="station_arrive_id" type="hidden" value="<?php echo  $fetche['station_arrive_id']; ?>">
                                                            <input name="starting_time" type="hidden" value="<?php echo  $fetche['starting_time']; ?>">
                                                            <input name="id_trip" type="hidden" value="<?php echo  $fetche['id_trip']; ?>">
                                                            <button name="calcualte" type="submit" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Get your ticket know</button>
                                                      </div>
                                                </div>
                                          </form>
                              </div>
                        </section>

                        <section class="shadow-l py-5">
                              <div class="grow bg-yellow-300 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 ">
                                    <a href="#">

                                          <form action="" method="post">

                                                <div class="pl-5 pb-5">
                                                      <a href="#">
                                                            <h5 class="text-4xl text-tahiti  font-poppins font-extrabold text-black">Reserve First class ticket now Comming Sooon !</h5>
                                                      </a>
                                                      <div class="  items-center mt-2.5 mb-5">
                                                            <div class="flex">
                                                                  <p class="text-black  font-extrabold">Selected item price :</p>
                                                                  <input name="p1" type="text" disabled class="bg-blue-100 bg-slate-800  text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3" value="<?php if (isset($_SESSION['price'])) echo ((40 / 100) * (int)$_SESSION['price']  + (int)$_SESSION['price']) ?>">

                                                            </div>
                                                            <div class="flex py-2">
                                                                  <lablel class="text-black font-extrabold ">Qte. Selected :</label>
                                                                        <input type="number" id="quantity" name="quantity1" min="1" max="15" class="bg-blue-100 bg-slate-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3" value="<?php if (isset($_SESSION['qte1'])) echo $_SESSION['qte1'] ?>">
                                                            </div>
                                                      </div>
                                                      <div class="flex items-center justify-between">
                                                            <label class="text-white text-3xl  font-extrabold"> TOTAL PRICE TICKET :</label>
                                                            <input type="text" name="total1stclass" value="<?php if (isset($_SESSION['price']) && isset($_SESSION['qte1'])) echo ((40 / 100) * (int)$_SESSION['price']  + (int)$_SESSION['price']) * (int)$_SESSION['qte1'] ?>.DH" class="w-24 text-xl  font-extrabold  text-white" disabled>

                                                            <button name="firstclassbtn" type="submit" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Get your ticket know</button>

                                                      </div>
                                                </div>
                                          </form>
                              </div>
                        </section>


                  </div>

            </div>

            <!--seconde part-->
            <div>

            </div>
      </div>
      </div>
      <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
</body>

</html>