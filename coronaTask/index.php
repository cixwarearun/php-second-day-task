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
    <style>
      section .a{
            margin-right: 21px ;
            color: gray;
             }
    </style>
</head>
<body class="mx-auto">
    <header class="bg-blue-700 mx-auto">
        <div class="flex flex-col items-center  lg:flex-row lg:justify-between  text-white mx-10 md:mx-20 xl:mx-48 pt-2 pb-2">
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
            <div class="flex mt-4 lg:-mt-1">
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
        <div class="flex flex-col items-center text-center mx-10 md:mx-20 xl:mx-48 text-gray-800 md:flex-row md:justify-between mt-4 ">
            <div>
                 <img class="hidden xl:flex h-20" src="png/a.png" alt="fly">
            </div>
            <div class=" flex flex-col text-center  md:flex-row md:justify-center">
                <a class="md:mr-2 xl:mr-6 hover:text-blue-700" href="solution.html">Solution <span class="text-xs">▼</span></a>
                <a class="md:mr-2 xl:mr-6 hover:text-blue-700" href="developers.html">Developers <span class="text-xs">▼</span></a>
                <a class="md:mr-2 xl:mr-6 hover:text-blue-700" href="pricing.html">Pricing</a>
                <a class="md:mr-2 xl:mr-6 hover:text-blue-700" href="resources.html">Resources <span class="text-xs">▼</span></a>
                <a class="md:mr-2 xl:mr-6 hover:text-blue-700" href="company.html">Company</a>
                <a class="md:mr-2 xl:mr-6 hover:text-blue-700" href="contact.html">Contact Us</a>
                <a class="md:mr-2 xl:mr-6 rounded-md bg-blue-700 text-white px-4 py-2 hover:bg-red-700" href="#">Sign Up Today</a>       
            </div>
        </div>      
    </section>
    <section class="bg-gray-300 mx-auto">
        <div class="flex pb-4 mx-10 justify-center text-center  md:mx-20 xl:mx-48 xl:justify-between mt-4">
            <div class="my-auto" >
                <h1 class="text-4xl">Get Your Message Across</h1>
                <h3 class="xl:w-2/4 text-gray-700 mt-4">A leading service provider offering two-ways SMS communication from anywhere at any time.</h3>
                <button class="rounded-md bg-blue-700 text-white px-4 py-2 mt-4 hover:bg-red-700">Register your account today</button>
            </div>
            <div>
                <img class="hidden xl:flex h-64" src="png/relation.png" alt="image">
            </div>
        </div>     
    </section>
    <section class="mx-auto">
        <div class="mx-10 md:mx-20 xl:mx-48 mt-20 text-center ">
            <div class="text-blue-600 text-3xl ">
                One Account, Many Ways to Send
            </div>
            <div class="text-gray-700 mt-4">
                <?php echo $a; ?>
            </div>
            <div  class="flex flex-col items-center xl:flex-row xl:justify-between xl:mx-20 mt-20">
                <div class="max-w-md mb-8 rounded overflow-hidden shadow-lg ">
                    <div>
                        <img src="images/a.jpg" alt="image">
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
                <div class="max-w-md rounded mb-8 overflow-hidden shadow-lg ">
                    <div class="border-b-2 border-blue-700">
                        <img src="images/b.jpg" alt="image">
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
            <div  class="flex flex-col items-center xl:flex-row xl:justify-between xl:mx-20 mt-10">
                <div class="max-w-md mb-8 rounded overflow-hidden shadow-lg ">
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
                <div class="max-w-md rounded mb-8 overflow-hidden shadow-lg ">
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
            <div class="flex flex-col items-center xl:flex-row xl:justify-between xl:mx-20 mt-10 ">
                <div class="max-w-md mb-8 rounded overflow-hidden shadow-lg flex px-10 bg-gray-300 py-4">
                    <div class="pt-10 mr-4">
                        <img src="png/code.png" alt="our integration">
                    </div>
                    <div>
                        <h1 class="text-xl text-blue-700 font-bold">Our Integrations</h1>
                        <div class="text-justify">
                            We offer advance two way SMS funcationality that directly integrates with several platforms.
                            <a href="">Find out more here..</a>
                        </div>
                    </div>
                </div>
                <div class="max-w-md rounded mb-8 overflow-hidden shadow-lg flex px-10 bg-gray-300 py-4">
                    <div class="pt-16 mr-4">
                        <img src="png/sms.png" alt="sms">
                    </div>
                    <div>
                        <h1 class="text-xl text-blue-700 font-bold">Receive SMS</h1>
                        <div class="text-justify">
                            Receive mobile originating SMS messages for marketing and other communication purposes.Try 
                            <a href="#">Incoming Long Numbers </a> or
                                <a href="#">SMS Shortcodes. </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-20">
                <h1 class="text-gray-600">Each of our solution address your needs. Compare Solutions</h1>
                <button class="rounded-md bg-blue-700 text-white px-4 py-2 mt-4 hover:bg-red-700">Try BulkSMS For Free</button>
            </div>
        </div>
    </section>
    <section class="bg-blue-700">
        <div class=" mx-10 md:mx-20 xl:mx-48 mt-20 text-center text-white pb-12 ">
            <div class="pt-10 mb-10  text-4xl font-bold">
                Why BulkSMS
            </div>
            <div class="flex flex-col items-center xl:flex-row xl:justify-between">
                <div class="text-center pt-8 max-w-md">
                    <div class="flex justify-center" >
                        <img class="rounded-full h-32 " src="png/support.png" alt="support">
                    </div>
                    <div class="mt-4 text-xl">
                        Support
                    </div>
                    <div class="w-48 mt-4 ">
                        Our support team is dedicated to helping you get your SMS message across.
                    </div>
                </div>
                <div class="text-center pt-8 max-w-md ">
                    <div class="flex justify-center">
                        <img class="rounded-full h-32" src="png/reliabledelivery.jpg" alt="delivery">
                    </div>
                    <div class="mt-4 text-xl">
                        Reliable Delivery
                    </div>
                    <div class="w-48 mt-4">
                        We send your message through the most reliable routes on offer.
                    </div>
                </div>
                <div class="text-center pt-8 max-w-md">
                    <div class="flex justify-center">
                        <img class="rounded-full h-32" src="png/medal.jpg" alt="regulations">
                    </div>
                    <div  class="mt-4 text-xl">
                        Regulations
                    </div>
                    <div class="w-48 mt-4">
                         Easy access to infromation on industry best practices and regional regulations.
                    </div>
                </div>
                <div class="text-center pt-8 max-w-md">
                    <div class="flex justify-center">
                        <img class="rounded-full h-32" src="png/easy.jpg" alt="easy">
                    </div>
                    <div class="mt-4 text-xl">
                        Easy Access
                    </div>
                    <div class="w-48 mt-4">
                        Access all our SMS Solutions with one account.
                    </div>
                </div>
               
            </div>
        </div>
    </section>
    <section class="mt-10">
        <div class="mx-10 md:mx-20 xl:mx-64 mt-20  max-w rounded overflow-hidden shadow-inner shadow-lg  text-center pt-10">
            <div class="text-4xl">
                We Connect to Over 800 Networks, Globally.
            </div>
            <div class=" md:flex md:flex-row md:justify-between px-20 mt-10">  

                <div class="flex flex-col ">
                    <div class="flex mr-10 mb-8">
                        <div>
                             <img src="png/south-africa.png" alt="South Africa">
                        </div>
                        <div class="ml-2">
                            South Africa
                        </div>
                    </div>
                    <div class="flex mb-8">
                         <div>
                            <img src="png/singapur.png" alt="singapore">
                        </div>
                        
                        <div class="ml-2">
                            Singapore
                        </div>
                    </div>
                    <div class="flex">
                        <div>
                              <img src="png/denmark.png" alt="Denmark">
                        </div>
                        <div class="ml-2">
                             Denmark
                        </div>
                    </div>
                    
                    
                </div>
                <div class="flex flex-col  ">
                    <div class="flex mb-8">
                         <div>
                           <img src="png/germany.png" alt="Germany">
                        </div>
                        <div class="ml-2">
                            Germany
                        </div>
                    </div>
                    <div class="flex mb-8">
                        <div>
                            <img src="png/finland.png" alt="finland">
                        </div>
                        <div class="ml-2">
                            Finland
                        </div>
                    </div>
                    <div class="flex">
                        <div>
                            <img src="png/Rusia.png" alt="Russia">
                        </div>
                        <div class="ml-2">
                              Russia
                        </div>
                    </div>
                   
                    
                </div>
                <div class="flex flex-col  ">
                    <div class="flex mb-8">
                        <div>
                             <img src="png/UK.png" alt="uk">
                        </div>
                        <div class="ml-2">
                            United Kingdom
                        </div>
                    </div>
                    <div class="flex mb-8">
                        <div>
                            <img src="png/canada.png" alt="canada">
                        </div>
                        <div class="ml-2">
                            Canada
                        </div>
                    </div>
                    
                    
                    <div class="flex">
                        <div>
                            <img src="png/norway.png" alt="Norway">
                        </div>
                        <div class="ml-2">
                            Norway
                        </div>
                    </div>
                    
                </div>
                <div class="flex flex-col ">
                    <div class="flex mb-8">
                        <div> 
                            <img src="png/usa.png" alt="usa">
                        </div>
                        <div class="ml-2">
                            USA
                        </div>
                    </div>
                    <div class="flex mb-8"> 
                        <div>
                             <img src="png/Rep-ireland.png" alt="ireland">
                        </div>
                        <div class="ml-2">
                            Rep. Ireland
                        </div>
                    </div>
                    <div>
                         +170 Other Countires                     
                    </div>

                </div>
                
             </div>        
            
            <div class="bg-gray-300 mt-10">
                <div class="pt-8 pb-8">
                    <button class="rounded-md bg-blue-700 text-white px-4 py-2 mt-4 hover:bg-red-700 mr-4">
                        View all our Networks
                    </button>
                    <button class="rounded-md bg-blue-700 text-white px-4 py-2 mt-4 hover:bg-red-700 ml-4">
                        Test Your Networks
                    </button>
                </div>
                

            </div>
        </div>
    </section>
    <section class="mt-10">
        <div class="text-center mx-10 md:mx-20 xl:mx-64">
            <div class="text-4xl mb-10">
                What our client love
            </div>
            <div class="flex flex-col items-center md:flex-row md:justify-between">
                <div >
                    <h3 class="text-xl font-semibold">Great</h3>
                    <p class=" text-white text-xl my-2">
                        <i class=" icon-color fas fa-star  p-1" style="background-color:#73CF11;"> </i>
                        <i class=" icon-color fas fa-star  p-1" style="background-color:#73CF11;"> </i>
                        <i class=" icon-color fas fa-star  p-1" style="background-color:#73CF11;"> </i>
                        <i class=" icon-color fas fa-star  p-1" style="background-color:#73CF11;"> </i>
                        <i class="far fa-star bg-gray-500 p-1"> </i>
                    </p>
                    <span>Based on <u> 1,339 reviews</u></span>
                    <div class="text-lg font-semibold mb-2 mt-2">
                        <i class="fas fa-star text-green-500"> </i>
                        <span>Trustpilot</span>
                    </div>
                </div>
                <div class="hidden mt-10 md:flex">
                     <a href=""><i class="fas fa-arrow-circle-left text-gray-300 text-xl"></i></a> 
                </div>
                <div class="text-justify text-xs">
                    <div class="text-white">
                        <i class=" icon-color fas fa-star  p-1" style="background-color:#73CF11;"> </i>
                        <i class=" icon-color fas fa-star  p-1" style="background-color:#73CF11;"> </i>
                        <i class=" icon-color fas fa-star  p-1" style="background-color:#73CF11;"> </i>
                        <i class=" icon-color fas fa-star  p-1" style="background-color:#73CF11;"> </i>
                        <i class="far fa-star bg-gray-500 p-1"> </i> 
                        <span class="ml-12 text-gray-700">29 hours ago</span>
                    </div>
                    <div class="font-bold text-xs mt-2">
                        Complete and quick responses
                    </div>   
                    <div class=" text-xs mt-2">
                        Complete and quick responses
                    </div>
                    <div class="mt-10 text-gray-700 text-xs">
                        Computer Design
                    </div>             
                </div>
                <div class="text-justify">
                    <div class="text-white text-xs">
                        <i class=" icon-color fas fa-star   p-1" style="background-color:#73CF11;"> </i>
                        <i class=" icon-color fas fa-star  p-1" style="background-color:#73CF11;"> </i>
                        <i class=" icon-color fas fa-star  p-1" style="background-color:#73CF11;"> </i>
                        <i class=" icon-color fas fa-star  p-1" style="background-color:#73CF11;"> </i>
                        <i class="far fa-star bg-gray-500 p-1"> </i>
                        <span class="text-gray-700 text-xs ml-12">4 days ago</span>
                    </div>
                    <div class="font-bold text-xs mt-2">
                        Response was good but couldnot be faster
                    </div>   
                    <div class="text-xs mt-2">
                        Response was good but couldnot be faster.
                    </div>
                    <div class="mt-10 text-gray-700 text-xs">
                        infomaniacs
                    </div>             
                </div>
                <div class="text-justify text-xs">
                    <div class="text-white">
                        <i class=" icon-color fas fa-star bg-green-600 p-1"></i>
                        <i class=" icon-color fas fa-star bg-green-600 p-1"></i>
                        <i class=" icon-color fas fa-star bg-green-600 p-1" ></i>
                        <i class=" icon-color fas fa-star bg-green-600 p-1" ></i>
                        <i class=" icon-color fas fa-star bg-green-600 p-1" ></i>
                        <span class="ml-12 text-gray-700">6 Feburary</span>
                    </div>
                    <div class="font-bold text-xs mt-2">
                        Its Good but Please work on android
                    </div>   
                    <div class="text-xs mt-2">
                        Complete and quick responses
                    </div>
                    <div class="mt-10 text-gray-700 text-xs">
                        Computer Design
                    </div>             
                </div>
                <div>
                     <a href=""><i class="fas fa-arrow-circle-right text-gray-300 text-xl mt-10"></i></a> 
                </div>
            </div>
        </div>
        
    </section>
    <section>
        <div class="hidden flex flex-col items-center md:flex-row md:justify-between mx-10 md:mx-20 xl:mx-64 mt-16">
           <div>
              <img src="png/flysafari.png" alt="flysafari">
           </div>
           <div>
              <img src="png/castle.png" alt="castle">
           </div>
           <div>
              <img src="png/santa.png" alt="santa">
           </div>
           <div>
              <img src="png/e.png" alt="bee">
           </div>
           <div>
              <img src="png/smeprofessional.png" alt="smeprofessional">
           </div>
           <div>
              <img src="png/Q8.png" alt="Q8">
           </div>
        </div>
        <div class="mx-10 md:mx-20 xl:mx-64  text-center">
            <button class="rounded-md bg-blue-700 text-white px-4 py-2 mt-8 hover:bg-red-700">
                See Our Case Studies
            </button>
        </div>
    </section>
    <section class="bg-teal-900">
        <div class="mt-16 mx-10 md:mx-20 xl:mx-64 text-center text-white  pt-10">
            <div class="text-4xl">
                Join BulkSMS Today
            </div>
            <div class="mt-8 text-xl">
                Keep on Connecting
            </div>
            <div class="flex flex-col items-center md:flex-row md:justify-center mt-8 pb-16 ">
                <button class="rounded-md bg-blue-700 text-white mr-4 px-4 py-2  hover:bg-red-700">
                    Register your account today!
                </button>
                <button class="rounded-md bg-blue-700 text-white m-4 px-4 py-2  hover:bg-red-700">
                    view our Pricing
                </button>
            </div>
        </div>
    </section>
    <section>
            <div class="mt-16 mx-20 md:mx-32 xl:mx-48 lg:flex lg:justify-between">
            <div class="flex  flex-row justify-center">    
                <div class="flex flex-col text-blue-700 text-xs">
                    <a class="text-red-600 font-semibold" href="bulsms.html"> BULKSMS.COM</a>
                    <a class="mt-2" href="#">SMS from Web</a>
                    <a class="mt-2" href="#">Desktop SMS Software</a>
                    <a class="mt-2" href="#">SMS API</a>
                    <a class="mt-2" href="$">SMS from iPhone</a>
                    <a class="mt-2" href="$">SMS integrations</a>
                    <a class="mt-2" href="$">Compare SMS Solutions</a>
                    <a class="mt-2" href="$">Community SMS Messaging</a>
                </div>
                <div class="ml-4 flex flex-col text-blue-700 text-xs  md:ml-8  xl:ml-24">
                    <a class="text-red-600 font-semibold" href="#">COMPANY INFO</a>
                    <a class="mt-2" href="#">SMS Pricing</a>
                    <a class="mt-2" href="#">SMS Resources</a>
                    <a class="mt-2" href="#">Company</a>
                    <a class="mt-2" href="#">Terms of Service</a>
                    <a class="mt-2" href="#">PAIA Manual</a>
                    <a class="mt-2" href="#">Support</a>
                    <a class="mt-2" href="#">Contact</a>
                </div>
                <div class="flex ml-4 mb-10 flex-col md:ml-8 xl:ml-24">
                    <a class="text-xs text-red-600 font-semibold">GET IN TOUCH</a>
                    <a><i class="fas fa-phone-alt text-gray-500 mt-3"></i> <span class="text-blue-700 text-xs">+27 (0)21 528 3420</span></a>
                    <a><i class="fas fa-paper-plane text-gray-500  text-"></i> <span class="text-blue-700 text-xs">Email Support</span> </a>
                    <a class="text-xs text-red-600 mt-8 font-semibold" href="#">FOLLOW US</a>
                    <div class="mt-3">
                        <i class="fab fa-linkedin-in text-gray-500 "></i>
                        <i class="fab fa-facebook-square text-gray-500 mx-3"></i>
                        <i class="fab fa-twitter text-gray-500"></i>
                    </div>                       
                </div>            
            </div>
            <div class=" mt-8 flex flex-col items-center lg:-mt-2">
                <div class="text-red-600 text-xs lg:text-center font-semibold">
                    OUR INDUSTRY ASSOCIATIONS AND SOCIETY
                </div>
                <div class="flex xl:justify-between mt-4">
                    <div>
                        <img src="png/wasp.png" alt="wasp">
                        <img class="mt-8" src="png/mef.png" alt="mef">
                        <img class="mt-8" src="png/stie.png" alt="sitelock">
                    </div>
                    <div class="ml-16">
                        <img src="png/mma.png" alt="mma">
                        <img class="mt-8" src="png/trust.png" alt="trust">
                    </div>
                </div>
            
            </div>
         </div>
    </section>
    <section>
        <div class= "hidden mx-48 mt-6 text-xs bg-gray-300 xl:flex px-8 p-4">
            <div class="text-red-600 font-semibold ">
                SMS COVERAGE DIRECTORY
            </div>
            <div class="ml-20">
                <span class="text-red-600 mr-6">A</span>
                <?php
                    foreach (range('B', 'Z') as $column)
                    {
                       echo " <span  class=a> $column </span>";
                    }   
          
              ?>       
            </div>
        </div>
    </section>
    <section class="bg-gray-300">
        <div class="  mt-10 text-center p-6 md:mx-32 xl:mx-56 xl:flex xl:justify-between">
            <div class="flex justify-center ">
                <div class="text-xl font-semibold text-gray-700">Great</div>
                <div class=" text-white text-xs my-2 ml-4">
                    <i class=" icon-color fas fa-star  p-1" style="background-color:#73CF11;"> </i>
                    <i class=" icon-color fas fa-star  p-1" style="background-color:#73CF11;"> </i>
                    <i class=" icon-color fas fa-star  p-1" style="background-color:#73CF11;"> </i>
                    <i class=" icon-color fas fa-star  p-1" style="background-color:#73CF11;"> </i>
                    <i class="far fa-star bg-gray-500 p-1"> </i>
                </div>
                <div class="ml-4 mt-1"> 1,339 reviews</div>
                <i class="fas fa-star text-green-500 mt-2 ml-4"> </i>
                <div class="mt-1">Trustpilot</div>
             </div>
             <div class="text-xs text-gray-700 mt-2">
                  &copy; 2000 - 2020 Celerity Systems (Pty) Ltd. All Rights Reserved
             </div>
        </div>
      
    
    </section>
</body>
</html> 