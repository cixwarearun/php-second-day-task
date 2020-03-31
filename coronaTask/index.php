<?php
   $a= 'When you sign up with BulkSMS, you will get access to our entire solution suite:';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corona Task</title>
    <link rel="stylesheet" href="tailwind.css">
    <link rel="stylesheet" href="  https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>
<body class="mx-auto">
    <header class="bg-blue-700 mx-auto">
        <div class="flex justify-between  text-white mx-48 pt-2 pb-2">
            <div class="flex text-center">
                <div class="ml-2">
                <img src="png/nepal.png" alt="nepal flag"> 
                </div>
                <div class="ml-2 text-xs">
                    ▼     
                </div>
                <div class="ml-4">
                <i class="fas fa-phone-alt"></i>
                </div>
                <div class="ml-2">+44 345 4030 767 / +27 21 528 3420</div>
            </div>
            <div class="flex">
                <div>Login</div>   
                <div class="ml-2">
                <i class="fas fa-user-circle"></i>
                </div>    
                <div class="ml-2  outline-none"> 
                    <input  class="pl-2 rounded  h-6 text-blue-700  overflow-hidden  "  placeholder="Search..."  type="text" required>
                </div>
                <div class="ml-2">
                    <i class="fas fa-search  "></i>
                </div>           
            </div>
        </div>
    </header>
    <section class="mx-auto">
        <div class="mx-48 text-gray-800 flex justify-between mt-4 ">
            <div>
                 <img class="h-20" src="png/a.png" alt="fly">
            </div>
            <div class="pt-4">
                <a class="mr-8 hover:text-blue-700" href="solution.html">Solution <span class="text-xs">▼</span></a>
                <a class="mr-8 hover:text-blue-700" href="developers.html">Developers <span class="text-xs">▼</span></a>
                <a class="mr-8 hover:text-blue-700" href="pricing.html">Pricing</a>
                <a class="mr-8 hover:text-blue-700" href="resources.html">Resources <span class="text-xs">▼</span></a>
                <a class="mr-8 hover:text-blue-700" href="company.html">Company</a>
                <a class=" mr-8 hover:text-blue-700" href="contact.html">Contact Us</a>
                <a class="mr-8 rounded-md bg-blue-700 text-white px-4 py-2  hover:bg-red-700" href="#">Sign Up Today</a>       
            </div>
        </div>      
    </section>
    <section class="bg-gray-300 mx-auto">
        <div class="flex mx-48 justify-between mt-4">
            <div class="my-auto" >
                <h1 class="text-4xl">Get Your Message Across</h1>
                <h3 class="w-2/4 text-gray-700 mt-4">A leading service provider offering two-ways SMS communication from anywhere at any time.</h3>
                <button class="rounded-md bg-blue-700 text-white px-4 py-2 mt-4 hover:bg-red-700">Register your account today</button>
            </div>
            <div>
                <img class="h-64" src="png/relation.png" alt="image">
            </div>
        </div>     
    </section>
    <section class="mx-auto">
        <div class="mx-48 mt-20 text-center ">
            <div class="text-blue-600 text-3xl ">
                One Account, Many Ways to Send
            </div>
            <div class="text-gray-700 mt-4">
                <?php echo $a; ?>
            </div>
            <div  class="flex justify-between mx-20 mt-20">
                <div class="max-w-md rounded overflow-hidden shadow-lg ">
                    <div>
                        <img src="images/a.jpg" alt="">
                    </div>
                    <div class=" text-center mt-2">
                        <h3 class="text-xl text-blue-700 ">Send SMS from Web </h3>
                        <p class="text-gray-700 ">Use our responsive web app to access your online account from any
                            browser.</p>
                        <button class="rounded-md bg-blue-700 text-white px-4 py-2 mt-4 hover:bg-red-700 mb-8">
                            Explore Solution
                        </button>
                    </div>
                </div>
                <div class="max-w-md rounded overflow-hidden shadow-lg ">
                    <div class="border-b-2 border-blue-700">
                        <img src="images/b.jpg" alt="">
                    </div>
                    <div class=" text-center mt-2 ">
                        <h3 class="text-xl text-blue-700 ">Use Our SMS API </h3>
                        <p class="text-gray-700 ">Send SMS automatically from your application of choice.</p>
                        <button class="rounded-md bg-blue-700 text-white px-4 py-2 mt-4 hover:bg-red-700 mb-8">
                            Explore Solution
                        </button>
                    </div>
                </div>
            </div>
            <div  class="flex justify-between mx-20 mt-10">
                <div class="max-w-md rounded overflow-hidden shadow-lg ">
                    <div>
                        <img src="images/c.jpg" alt="">
                    </div>
                    <div class=" text-center mt-2">
                        <h3 class="text-xl text-blue-700 ">Send SMS from Desktop </h3>
                        <p class="text-gray-700 ">Manage your SMS communication from your computer using our desktop application.</p>
                        <button class="rounded-md bg-blue-700 text-white px-4 py-2 mt-4 hover:bg-red-700 mb-8">
                            Explore Solution
                        </button>
                    </div>
                </div>
                <div class="max-w-md rounded overflow-hidden shadow-lg ">
                    <div class="border-b-2 border-blue-700">
                        <img src="images/d.jpg" alt="">
                    </div>
                    <div class=" text-center mt-2 ">
                        <h3 class="text-xl text-blue-700 ">Send SMS From Mobile </h3>
                        <p class="text-gray-700 ">Manage, receive and send your text messages from anywhere at any time on your andriod and IOS devices.</p>
                        <button class="rounded-md bg-blue-700 text-white px-4 py-2 mt-4 hover:bg-red-700 mb-8">
                            Explore Solution
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</body>
</html>