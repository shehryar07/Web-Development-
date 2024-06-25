<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="#" class="logo"><img src="image/logo.png" height="80px" width="210px" alt="logo"></a>


    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#vehicles">vehicles</a>
        <a href="#services">services</a>
        <a href="#featured">featured</a>
        <a href="#reviews">reviews</a>
        <a href="#contact">contact</a>
    </nav>

    <div id="login-btn">
        <button class="btni"></button>
        <i class="far fa-user"></i>
    </div>

</header> 
    
<div class="login-form-container">

    <span id="close-login-form" class="fas fa-times"></span>

    <form action="">
        <h3>user login</h3>
        <input type="email" placeholder="email" class="box">
        <input type="password" placeholder="password" class="box">
        <p> forget your password <a href="#">click here</a> </p>
        <input type="submit" value="login" class="btn">
        <p>or login with</p>
        <div class="buttons">
            <a href="#" class="btn"> google </a>
            <a href="#" class="btn"> facebook </a>
        </div>
        <p> don't have an account <a href="#">create one</a> </p>
    </form>

</div>

<section class="home" id="home">

    <h3 data-speed="-2" class="home-parallax">find your car</h3>

    <img data-speed="5" class="home-parallax" src="image/home-img.png" alt="">

    <a data-speed="7" href="#" class="btn home-parallax">explore cars</a>

</section>

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-home"></i>
        <div class="content">
            <h3>150+</h3>
            <p>branches</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-car"></i>
        <div class="content">
            <h3>4770+</h3>
            <p>cars sold</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <div class="content">
            <h3>320+</h3>
            <p>happy clients</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-car"></i>
        <div class="content">
            <h3>1500+</h3>
            <p>news cars</p>
        </div>
    </div>

</section>
<?php

include 'connection.php';

$sql = "SELECT * FROM `popular_vehicles`";


$result = $con->query($sql);
{

// output data of each row
while($row = $result->fetch_assoc()) {
  $Ferrari = $row['Ferrari'];
  $BMW = $row['BMW'];
  $Prado = $row['Prado'];
  $Tesla  = $row['Tesla'];


  echo '


  

  <section class="vehicles" id="vehicles">

    <h1 class="heading"> popular <span>vehicles</span> </h1>

    <div class="swiper vehicles-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/vehicle-1.png" alt="">
                <div class="content">
                    <h3>'.$Ferrari.'</h3>
                    <div class="price"> <span>price : </span> $105,000/- </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> petrol
                        <span class="fas fa-circle"></span> 183mph
                    </p>
                    <a href="cart.html" class="btn" id="cart-btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/vehicle-2.png" alt="">
                <div class="content">
                <h3>'.$BMW.'</h3>
                    <div class="price"> <span>price : </span> $702,000/- </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> petrol
                        <span class="fas fa-circle"></span> 183mph
                    </p>
                    <a href="cart.html" class="btn" id="cart-btn">check out</a>

                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/vehicle-3.png" alt="">
                <div class="content">
                <h3>'.$Tesla.'</h3>
                    <div class="price"> <span>price : </span> $269,000/- </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> petrol
                        <span class="fas fa-circle"></span> 183mph
                    </p>
                    <a href="cart.html" class="btn" id="cart-btn">check out</a>

                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/vehicle-4.png" alt="">
                <div class="content">
                <h3>'.$Ferrari.'</h3>
                    <div class="price"> <span>price : </span> $401,000/- </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> petrol
                        <span class="fas fa-circle"></span> 183mph
                    </p>
                    <a href="cart.html" class="btn" id="cart-btn">check out</a>

                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/vehicle-5.png" alt="">
                <div class="content">
                <h3>'.$Tesla.'</h3>
                    <div class="price"> <span>price : </span> $62,0000/- </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> petrol
                        <span class="fas fa-circle"></span> 183mph
                    </p>
                    <a href="cart.html" class="btn" id="cart-btn">check out</a>

                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/vehicle-6.png" alt="">
                <div class="content">
                <h3>'.$Prado.'</h3>
                    <div class="price"> <span>price : </span> $45,0000/- </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> petrol
                        <span class="fas fa-circle"></span> 183mph
                    </p>
                    <a href="cart.html" class="btn" id="cart-btn">check out</a>

                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>
';


}
} 


?>

<?php

include 'connection.php';

$sql = "SELECT * FROM `services`";



$result = $con->query($sql);
{

// output data of each row
while($row = $result->fetch_assoc()) {
  $Car_Selling = $row['Car_Selling'];
  $Parts_Repair = $row['Parts_Repair'];
  $Car_Insurance = $row['Car_Insurance'];
  $Battery_Replacement  = $row['Battery_Replacement'];
  $Oil_Change  = $row['Oil_Change'];
  $Support  = $row['Support'];


  echo '

  <section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-car"></i>
            <h3>'.$Car_Selling.'</h3>

           
        </div>

        <div class="box">
            <i class="fas fa-tools"></i>
            <h3>'.$Parts_Repair.'</h3>
        
        </div>

        <div class="box">
            <i class="fas fa-car-crash"></i>
            <h3>'.$Car_Insurance.'</h3>
         
        </div>

        <div class="box">
            <i class="fas fa-car-battery"></i>
            <h3>'.$Battery_Replacement.'</h3>
         
        </div>

        <div class="box">
            <i class="fas fa-gas-pump"></i>
            <h3>'.$Oil_Change.'</h3>
            
        </div>

        <div class="box">
            <i class="fas fa-headset"></i>
            <h3>'.$Support.'</h3>
         
        </div>

    </div>

</section>
  
  ';




}
} 



?>

<?php

include 'connection.php';

$record = "SELECT * FROM `car_cattegories`";

$result = $con->query($record);
{


while($row = $result->fetch_assoc()) {
  $Honda = $row['Honda'];
  $BMD = $row['BMD'];
  $RWD  = $row['RWD'];
  $mercedes  = $row['mercedes'];
  $kia  = $row['kia'];
  $MG  = $row['MG'];

  echo '
  <section class="featured" id="featured">
    <h1 class="heading"> <span>featured</span> cars </h1>
    <div class="swiper featured-slider">
       <div class="swiper-wrapper">
            <div class="swiper-slide box">
                <img src="image/car-1.png" alt="">
                <div class="content">
                    <h3>'.$mercedes.'</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">$55,000/-</div>
                    <a href="cart.html" class="btn" id="cart-btn">check out</a>

                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/car-2.png" alt="">
                <div class="content">
                    <h3>'.$MG.'</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">$55,000/-</div>
                    <a href="cart.html" class="btn" id="cart-btn">check out</a>

                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/car-3.png" alt="">
                <div class="content">
                    <h3>'.$BMD.'</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">$55,000/-</div>
                    <a href="cart.html" class="btn" id="cart-btn">check out</a>

                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/car-4.png" alt="">
                <div class="content">
                    <h3>'.$RWD.'</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">$55,000/-</div>
                    <a href="cart.html" class="btn" id="cart-btn">check out</a>

                </div>
            </div>

       </div>

       <div class="swiper-pagination"></div>

    </div>

    <div class="swiper featured-slider">

        <div class="swiper-wrapper">
 
             <div class="swiper-slide box">
                 <img src="image/car-5.png" alt="">
                 <div class="content">
                     <h3>'.$kia.'</h3>
                     <div class="stars">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star-half-alt"></i>
                     </div>
                     <div class="price">$55,000/-</div>
                     <a href="cart.html" class="btn" id="cart-btn">check out</a>

                 </div>
             </div>
 
             <div class="swiper-slide box">
                 <img src="image/car-6.png" alt="">
                 <div class="content">
                     <h3>'.$Honda.'</h3>
                     <div class="stars">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star-half-alt"></i>
                     </div>
                     <div class="price">$55,000/-</div>
                     <a href="cart.html" class="btn" id="cart-btn">check out</a>

                 </div>
             </div>
 
             <div class="swiper-slide box">
                 <img src="image/car-7.png" alt="">
                 <div class="content">
                     <h3>'.$kia.'</h3>
                     <div class="stars">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star-half-alt"></i>
                     </div>
                     <div class="price">$55,000/-</div>
                     <a href="cart.html" class="btn" id="cart-btn">check out</a>

                 </div>
             </div>
 
             <div class="swiper-slide box">
                 <img src="image/car-8.png" alt="">
                 <div class="content">
                     <h3>'.$BMD.'</h3>
                     <div class="stars">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star-half-alt"></i>
                     </div>
                     <div class="price">$55,000/-</div>
                     <a href="cart.html" class="btn" id="cart-btn">check out</a>

                 </div>
             </div>
 
        </div>
 
        <div class="swiper-pagination"></div>
 
     </div>

</section>



  ';
}
} 

?>

<section class="newsletter">
    
    <h3>subscribe for latest updates</h3>
    <p>if you get the Information of our latest models of Cars Please Subscribe! </p>

   <form action="subscribe.php" method="post">
        <input type="email" name="Email_Adress" placeholder="Enter your Email Adress">
        <input type="submit" name="subscribe" value="subscribe">
   </form>

</section>

<section class="contact" id="contact">

    <h1 class="heading"><span>contact</span> us</h1>

    <div class="row">

        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30153.788252261566!2d72.82321484621745!3d19.141690214227783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1632137920043!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>

        <form action="contact_form.php" method="post">
            <h3>get in touch</h3>
            <input type="text" placeholder="Enter your Name" name="Name" class="box">
            <input type="email" placeholder="Enter your Email" name="Email" class="box">
            <input type="tel" placeholder="Enter Subject" name="Subject" class="box">
            <textarea placeholder="Message" class="box" name="Massage" cols="30" rows="10"></textarea>
            <input type="submit" name="Send" value="send message" class="btn">
        </form>

    </div>

</section>

<section class="footer" id="footer">

    <div class="box-container">

        <div class="box">
            <h3>our branches</h3>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Pakistan </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> japan </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> france </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Russia </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> USA </a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> vehicles </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> services </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> featured </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> contact </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +92 302 5761512 </a>
            <a href="#"> <i class="fas fa-phone"></i> 051-5987454 </a>
            <a href="#"> <i class="fas fa-envelope"></i> SDScars@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Islamabad, Pakistan - 14598 </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>

    </div>

    <div class="credit"> Copyright © 2024 Shehryar Autos | all rights reserved | Designed by Shehryar Autos </div>

</section>







<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

</body>
</html>