<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>
    
    <title>Document</title>
    <link rel="stylesheet" href="styll.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <section class="bg-indigo-50 min-h-screen  flex items-center justify-center ">
        <div class="bg-blue-900 flex rounded-xl shadow-lg max-w-6xl p-4">
            
           
            <div class="md:w-1/2  px-16 py-6"> 
                <h2 class="font-bold text-3xl text-white ml-2 ">Sign up</h3>
                <form action="signupprocess.php" method = "POST" class="flex flex-col gap-4">
                
                        <input class="p-2 mt-4   rounded-xl" type="text" name="name" placeholder="Enter your name">

                        <input class="p-2  rounded-xl" type="text" name="email" placeholder="Enter your email">
                   
                        <input class="p-2  rounded-xl" type="password" name="password" placeholder="*****************">

                  
                        <input class="p-2  rounded-xl " type="password" name="comfirm-password" placeholder="*****************">

                    
                        <input class="p-3 border bg-[#B9E0FF] shadow-lg font-bold rounded-xl hover:scale-105 duration-300 " type="submit" value="Register">
                        <?php if (isset($_GET['message']) && isset($_GET['color'])):?>
			        	<div id="deletesuccess" class="<?php echo $_GET['color']?> my-2">
			    		<strong><?php echo $_GET['message']   ?>!</strong>
                    
				    	<?php
				    	?>
				    	<button type="button" class="btn-close" data-bs-dismiss="alert"></span>
			        	</div>
			            <?php endif ?>
                        <script type="text/javascript"> 
                         $(document).ready( function() {
                        $('#deletesuccess').delay(2000).fadeOut();
                          });
                          </script>
                        <p class="text-white lg:mt-4 md:mt-0">have already an accout ?<a href="login.php" class="text-[#B9E0FF] font-bold hover:text-white "> Login here</a></p>

                </form>
 
            </div>
            <div class="md:block md:flex items-center  hidden w-1/2"> 
                <img class=" rounded-xl"  src="traavel.jpg" alt="">

            </div>
    
    

        </div>

       
    </section>
    
</body>
</html>