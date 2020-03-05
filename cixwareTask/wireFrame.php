<?php
   $main='A develo so as to cause them to be vectors
    for the transfer of pollen. After fertilization, the ovary of the flower develops into fruit containing seeds.';
    $block = 'Lorem ipsum dolor sit amet consectetur adidkjdf  dklfjd dfj dfuoik jklsfuoilj';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cixware home page</title>
    <link rel="stylesheet" href="tailwind.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="  https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>
<body class="overflow-x-hidden mx-4 " > 
    <header class="      pt-8 text-blue-700  xl:flex-row md:justify-between  ">
        
        <h1 class="text-3xl font-bold flex justify-between">
            <div class="flex">
                <img class="h-10 w-10" src="image/cixware.png" alt="">
                <div>

              
                    <div> Arun<span class="text-blue-900">Bastola</span></div>
                    <div class="text-xs px-4">Lorem ipsum dolor sit amet consectetur adipifjdklf akjd f mu name ais  akf</div>
                </div>
            </div>
            <div class="text-xs  text-white  ">
               <button class="w-8 bg-blue-700 rounded-md ">EN</button>
               <button class="w-8 bg-blue-700 rounded-md ">ED</button>
               <button class="w-8 bg-blue-700 rounded-md ">EC</button>
               <button class="w-8 bg-blue-700 rounded-md ">EG</button>
            </div>
          

        </h1>
        <div class="flex flex-col-reverse bg-blue-700 text-white lg:flex-row md:justify-between mt-10 mb-10 ">

        
            <div class="flex flex-col pr-48 text-justify  md:flex-row  text-gray">
                <a class="ml-6   py-1 mt-1 px-2 font-bold hover:text-blue-900 " href="home.html">Home</a>
                <a class="ml-6   py-1 mt-1 px-2 font-bold hover:text-blue-900 " href="about.html">Products</a>
                <a class="ml-6   py-1 mt-1 px-2 font-bold hover:text-blue-900  " href="services.html">Download</a>
                <a class="ml-6  py-1 mt-1 px-2 font-bold hover:text-blue-900 " href="products.html">Buy Now</a>
                <a class="ml-6   py-1 mt-1 px-2 font-bold font-bold  hover:text-blue-900" href="Clients.html"> Support</a>
                <a class="ml-6   py-1 mt-1 px-2 font-bold font-bold  hover:text-blue-900" href="Clients.html"> About</a>
            </div>
            <div>
                <div class="relative  border-2 rounded-md border-blue-700 hover:border-green-500 "> 
                    <i class="fas fa-search absolute mt-3 ml-3 text-blue-700  "></i>
                    <input  class="pl-10   h-8  overflow-hidden w-6 md:w-auto "  placeholder="Search"  type="text" required>
            </div>
     </div>
        </div>
    </header>
    <section >
        <div >
           
            <img class="w-full " src="image/remo.jpg" alt="">
        </div>
       
    </section>
    <section class="flex mt-10 ">
        <div class=" mr-8 pt-2 border-2 px-4 pb-2">
        <h1 class="bg-blue-700 text-white pl-2">Top Story Heading</h1>
             <div class=" flex justify-between mt-4"> 

                 <img class="w-64" src="image/binod-1.jpg" alt="">
                 <div class="mx-8 text-justify">
                     <?php
                        echo $main;
                        echo '<br>';
                        echo strtoupper($main);
                        echo '<br>';
                        print_r( str_split($main,15));
                        echo '<br>';
                        echo str_repeat($block,3);
                        
                     ?>
                 </div> 
             </div>
             <div>
               <div class="flex justify-between  px-64 mx-20 mt-4">
                     <button class="w-32 bg-blue-700  rounded-md overflow-hidden  p-2 text-white" type="submit">Download</button>
              
                
                 <button  class=" w-32 bg-blue-700 rounded-md p-2 text-white" type="submit">Purchase</button>
             </div>
             <div class="mt-8">
                 <h2 class="bg-blue-700 text-white pl-2">
                     A monthly newspaper brought to you by Mr.Arun
                 </h2>
                 <div class="flex justify-between mt-8 ">
                     <div class="px-2">
                         <img class="w-64 h-64"  src="image/diken.jpg" alt="">
                         <div class="w-64 mt-4">
                             <?php
                               echo $block;
                             ?>
                         </div>
                     </div>
                     <div class="px-2">
                         <img class="w-64 h-64" src="image/diken.jpg" alt="">
                         <div class="w-64 mt-4">
                         <?php
                               echo $block;
                             ?>
                         </div>
                     </div>
                     <div class="px-2">
                            <table class="border-2  ">
                                        <?php
                                        function maka($n)
                                        {
                                            for($i=0; $i<$n; $i++)
                                            {
                                                echo '<tr>';
                                                for($j=0; $j<$n; $j++)
                                                {
                                                    if(($i+$j)%2==0)
                                                        {
                                                            echo "<td height=32px width=32px bgcolor=#FFFFFF></td>";
                                                        }
                                                        else{
                                                            echo "<td height=32px width=32px bgcolor=red></td>";
                                                        }                
                                                        
                                                }
                                                echo '</tr>';
                                            }
                                        }
                                        maka(8)
                                        ?>
                                    </table>
                    
                         <div class="w-64 mt-4">
                             <?php
                               echo $block;
                             ?>
                         </div>
                     </div>
                     <div class="px-2">
                     <table class="border-2 ">
                                <?php
                                function arun($n)
                                {
                                    for($i=0; $i<$n; $i++)
                                    {
                                        echo '<tr>';
                                        for($j=0; $j<$n; $j++)
                                        {
                                            if(($i+$j)%2==0)
                                                {
                                                    echo "<td height=32px width=32px bgcolor=#FFFFFF></td>";
                                                }
                                                else{
                                                    echo "<td height=32px width=32px bgcolor=#000000></td>";
                                                }                
                                                
                                        }
                                        echo '</tr>';
                                    }
                                }
                                arun(8)
                                ?>
                            </table>
                         <div class="w-64 mt-4">
                             <?php
                               echo $block;
                             ?>
                         </div>
                     </div>

                 </div>
                 <div class="mt-8">
                    <?php
                       echo $main;
                       echo str_repeat($main,4);
                    ?>
                 </div>
             </div>
            </div>
        </div>
        <div class="w-full" >
            <div class="mb-10 border-2 pb-4 ">
                 <h1 class="bg-blue-700 text-white text-center mb-4 mt-2 mx-2">Social</h1>
                 <img class="px-8"   src="image/sibu.jpg" alt="">
                 <div class="flex justify-center">
                 <button class="mx-8 w-full mt-4 align-center  text-center bg-blue-700  rounded-md p-2 text-white" type="submit">Share and Links</button>
                 </div>
            </div>
            <div class="border-2 pb-4  px-2">
                 <div class="bg-blue-700 text-center text-white mt-2">Navigate</div>
                 <div class="mt-2">

                    
                        <?php
                        $a=0;
                            while($a<8){
                                echo '<li class=ml-10>'.'items'.'</li>';
                                
                                $a++;
                                
                            }
                        ?>
                </div>
            </div>
        </div>
    </section>
    <section class="h-4 bg-blue-700 mt-4">

    </section>
    <section class="mx-64 px-64 underline mt-2">
        <div class="flex justify-between">
            <a href="#">Home</a>
            <a href="">Products</a>
            <a href="">Privacy</a>
            <a href="">Terms</a>
            <a href="">See Maps</a>
            <a href="">links</a>
        </div>
    </section>
   
    
    <footer class="mx-auto">
        <div class="text-center  text-xs text-bold mt-4 mb-8  ">
            Copyright company &copy;2020. All Right Preserved.
        </div>
    </footer>
</body>
</html>