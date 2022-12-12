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

<?php
      
      include './ticketsconfiguration.php';

      $ticket = new configtickets();
 
      $ticketcustomer=array();
      $ticketcustomer = $ticket->fetchtickets($_SESSION['date']);
      var_dump($ticketcustomer);
   
      session_start();
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
                              foreach($ticketcustomer as $fetche) {
                              ?>
                               <div class="flex justify-between w-full block  px-4  border  sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                               <div>
                                     <div class="flex space-x-2 inline-block text-xl font-extrabold items-center">
                                           <span><?php echo $fetche['starting_time'] ?></span>
                                           <ion-icon name="arrow-forward-outline"></ion-icon>
                                           <span><?php echo $fetche['arriving_time'] ?></span>
                                     </div>
                                     <div class="pt-2 font-thin text-sm">
                                           <span class="font-mono">1h 56m, 0 changes</span>
                                     </div>
                                     <div class="flex ">
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

                               <span class="px-2 ">
                                     <img src="./images/oncf.png" alt="">
                               </span>


                               <div class=" pr-7 block">
                                     <h6 class="text-xl font-mono ">$66.22</h6>
                                     <h6 class="font-thin text-orange-500">only 6 left </h6>
                               </div>


                               <div class=" px-1 block">
                                     <h6 class="text-xl font-mono ">$106.22</h6>
                               </div>
                         </div>
                    
                         <?php }?>    

                        </div>

                  </div>


                  <div class="  py-5 px-12  lg:w-1/2 ">
                        <section class="shadow-xl">
                              <div class="grow bg-slate-800  rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                                    l <a href="#">

                                          <div class="pl-5 pb-5">
                                                <a href="#">
                                                      <h5 class="text-4xl font-poppins text-tahiti text-white">reserve your seconde class ticket </h5>
                                                </a>
                                                <div class=" items-center mt-2.5 mb-5">
                                                      <div class="flex">
                                                            <p class="text-white  font-extrabold">Selected item price :</p>
                                                            <span class="bg-blue-100 bg-slate-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">500000</span>
                                                      </div>
                                                      <div class="flex py-2">
                                                            <p class="text-white ">Qte. Selected :</p>
                                                            <span class="bg-blue-100 bg-slate-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">5.0</span>
                                                      </div>
                                                </div>
                                                <div class="flex items-center justify-between">
                                                      <span class="text-3xl  font-extrabold  text-white">TOTAL PRICE : <span>$599</span></span>
                                                      <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Get your ticket know</button>
                                                </div>
                                          </div>
                              </div>
                        </section>

                        <section class="shadow-l py-5">
                              <div class="grow bg-yellow-300 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                                    <a href="#">

                                          <div class="pl-5 pb-5">
                                                <a href="#">
                                                      <h5 class="text-4xl text-tahiti  font-poppins font-extrabold text-black">reserve First class ticket now !</h5>
                                                </a>
                                                <div class=" items-center mt-2.5 mb-5">
                                                      <div class="flex">
                                                            <p class="text-black  font-extrabold">Selected item price :</p>
                                                            <span class="bg-blue-100 bg-slate-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">500000</span>
                                                      </div>
                                                      <div class="flex py-2">
                                                            <p class="text-black font-extrabold ">Qte. Selected :</p>
                                                            <span class="bg-blue-100 bg-slate-800  text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">5.0</span>
                                                      </div>
                                                </div>
                                                <div class="flex items-center justify-between">
                                                      <span class="text-3xl  font-extrabold text-black">TOTAL PRICE : <span>$599</span></span>
                                                      <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Get your ticket know</button>
                                                </div>
                                          </div>
                              </div>
                        </section>
                        <section class="flex flex-col lg:flex-row items-start items-center lg:justify-center w-full w-full lg:px-10 py-12 ">
                              <article class="w-4/5 lg:w-custom mb-10 lg:px-4 py-10 text-center text-primary-dark bg-primary-white">
                                    <h5 class="font-bold text-base">1st class</h5>
                                    <h2 class="pb-4 flex justify-center font-bold border-b border-gray-300">
                                          <span class="text-6xl">TOTAL</span>
                                    </h2>
                                    <ul class="py-2 text-sm font-bold">
                                          <li class="pt-4 pb-4 border-b border-black-300">unite ticket price</li>
                                          <li class="pt-3 pb-4 border-b border-gray-300">Qte .</li>
                                          <li class="pt-4 pb-4 border-b border-gray-300">Total price</li>
                                    </ul>
                                    <button type="button" class="text-white  bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">confirm your ticket</button>

                  </div>

            </div>

            <!--seconde part-->
            <div>

            </div>
      </div>
      </div>
</body>

</html>