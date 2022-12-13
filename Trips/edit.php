<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <title>Document</title>
    <style>
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
</head>
<?php
include '../Classes/cities.php';

include '../modals/trips_modal.php';
$trip = new trip();
$trip->setIdOfTrip($_GET['id']);
$data = $trip->fetchSingleTrip();

$city = new cities();
$allCities = $city->fetchCities();
$city2 = new cities();
$allCities2 = $city2->fetchCities();
?>

<body>

    <div class="relative w-full h-full mx-auto max-w-2xl md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <form action="../controllers/trip_controller.php" method="POST">
                <input type="hidden" name="id_trip" value="<?php echo $data['id_trip'] ?>">
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Edit this Trip
                    </h3>
                </div>
                <!-- Modal body -->
                <div class="p-2 space-y-3">
                    <div>
                        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name Of Train</label>
                        <select name="train_id" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 outline-none">
                            <option selected value="<?php echo $data['train_id'] ?>"><?php echo $data['name'] ?></option>
                            <option value="1">bora9</option>
                            <option value="2">oncf</option>
                        </select>
                    </div>
                    <div>
                        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">From</label>
                        <select name="station_start_id" id="from">
                            <option value="<?php echo $data['station_start_id'] ?>" selected> <?php echo $data['start'] ?></option>
                            <?php
                            foreach ($allCities as $allCities) {
                                echo '<option value="' . $allCities["id"] . '">' . $allCities["ville"] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div>
                        <!-- input type date and time -->
                        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 ">starting date and time</label>
                        <input value="<?php echo $data['starting_time'] ?>" type="datetime-local" name="starting_time" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    </div>
                    <div>
                        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 ">To</label>
                        <select name="station_arrive_id" id="to">
                            <option value="<?php echo $data['station_arrive_id'] ?>" selected><?php echo $data['end'] ?></option>
                            <?php
                            foreach ($allCities2 as $allCities2) {
                                echo '<option value="' . $allCities2["id"] . '">' . $allCities2["ville"] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div>
                        <!-- input type date and time -->
                        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 ">starting date and time</label>
                        <input value="<?php echo $data['arriving_time'] ?>" type="datetime-local" name="arriving_time" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    </div>
                    <div>
                        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 ">Price</label>
                        <input type="text" value="<?php echo $data['price'] ?>" name="price" id="" placeholder="City ..." class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
                    </div>
                    <div>
                        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 ">Number of seats</label>
                        <input type="text" value="<?php echo $data['seat'] ?>" name="seats_number" id="" placeholder="City ..." class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button data-modal-toggle="staticModal2" type="submit" name="update_trip" class="text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Update</button>
                        <button data-modal-toggle="staticModal2" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                    </div>
            </form>
        </div>
    </div>


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