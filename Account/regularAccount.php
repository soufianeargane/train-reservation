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



<body class="mainBody" style="background-position: center;background-repeat: no-repeat; background-size:cover; background-image: url('../img/bgaccount.png'); ">

    <!-- =====================Information of Account===================== -->
    <div class="w-full px-10 my-auto ">

        <form class="" action="./account-db.php" method="post" data-parsley-validate>
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
                    <a onclick="modifications()" class="AfterMod text-center cursor-pointer hidden bg-gray-700 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white w-1/3"><b>Cancel</b></a>
                    <a onclick="modifications()" class="AfterMod text-center cursor-pointer bg-gray-700  text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"><b>Modifications</b></a>
                    <button type="submit" name="updateBtnAccount" class="AfterMod hidden  bg-gray-700 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white w-2/3"><b>Update</b></button>
                </div>
            </div>
        </form>

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