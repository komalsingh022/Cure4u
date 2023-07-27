<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete responsive hospital website create </title>
     <!--font awesome cdn link-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!--custom css file link-->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!--header section starte-->

    <header class="header">

        <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> <strong>cure4u</strong> </a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#services">services</a>
            <a href="#doctors">doctors</a>
            <a href="#appointment">appointment</a>
            <a href="#review">review</a>
            <a href="#blogs">blogs</a>
        </nav>

        <div class="menu-btn" class="fas-fa-bars"></div>

    </header>

    <!-- header section ends-->

    <!-- home section starts-->

    <section class="home" id="home">

        <div class="image">
            <img src="/Image/healthy life image.jpg" alt="">
        </div>

        <div class="content">
            <h3> We take care of your healthy life</h3>
            <p> A person who has good physical health is likely to have bodily function and processes working at their peak.</p>
            <a href="#appointment" class="btn"> appointment us <span class="fas fa-chevron-right"></span> </a>
        </div>

    </section>

    <!--home section ends-->

    <!--icon section starts-->

    <section class="icon-container">

        <div class="icons">
            <i class="fas-user-md"></i>
            <h3>150+</h3>
            <p>doctors at work</p>
        </div>

        <div class="icons">
            <i class="fas fa-users"></i> 
            <h3>1030+</h3>
            <p>satisfied patients</p>
        </div>

        <div class="icons">
             <i class="fas fa-procedures"></i> 
            <h3>490+</h3>
            <p>bed facility</p>
        </div>

        <div class="icons">
             <i class="fas fa-hospital"></i> 
            <h3>70+</h3>
            <p>available hospitals</p>
        </div>

    </section>

    <!--icon section ends-->

    <!--about section starts-->

    <section class="about" id="about">

        <h1 class="heading"> <span>about</span> us </h1>

        <div class="row">
            <img src="/Image/doctors image.jpg" alt="">
        </div>

        <div class="content">
            <h3>Take the world's best quality treatment</h3>
            <p>Lorem ipsum dolor sit amet consectetur,adipisicing elit. Iure ducimus, quod ex cupiditate ullam in assumeda maiores et culpa odit tempora ipsam qui, quisquam quis faceers iste fuga, minus nesciunt</p>
            <p>lorem ipsum dolor, sit amet consectetur,adipisicingelit.natus vero ipsam laborum porro voluptates voluptatibus a nihil temporibus deserunt vel?</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

    </section>

    <!--about section ends-->

    <!--services section starts-->

    <section class="services" id="services">

        <h1 class="heading"> our <span>services</span> </h1>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-notes-medical"></i>
                <h3>free checkups</h3>
                <p>Lorem ipsum dolor sit amet consectetur,adipisicing elit.Ad, omnis.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>

            <div class="box">
                <i class="fas fa-notes-ambulances"></i>
                <h3>24/7 ambulance available</h3>
                <p>Lorem ipsum dolor sit amet consectetur,adipisicing elit.Ad, omnis.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>

            <div class="box">
                <i class="fas fa-users-md"></i>
                <h3>expert doctors</h3>
                <p>Lorem ipsum dolor sit amet consectetur,adipisicing elit.Ad, omnis.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>

            <div class="box">
                <i class="fas fa-pills"></i>
                <h3>medicines</h3>
                <p>lorem ipsum dolor sit amet consectetur,adipisicing elit.Ad, omnis.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>

            <div class="box">
                <i class="fas fa-procedures"></i>
                <h3>bed facility</h3>
                <p>Lorem ipsum dolor sit amet consectetur,adipisicing elit.Ad, omnis.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>

            <div class="box">
                <i class="fas fa-heartbeat"></i>
                <h3>total care</h3>
                <p>lorem ipsum dolor sit amet consectetur,adipisicing elit.Ad, omnis.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>

            <div class="box">
                <i class="fas fa-heartbeat"></i>
                <h3>recoment doctors</h3>
                <p>Lorem ipsum dolor sit amet consectetur,adipisicing elit.Ad, omnis.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>

        </div>

    </section>

    <!--services section ends-->

    <!--doctors section starts-->

    <section class="doctors" id="doctors">

        <h1 class="heading"> our <span>doctors</span> </h1>

        <div class="box-container">

        <div class="box">
            <img src="/Image/doctor image 1.jpg" alt="">
            <h3>Cardiologists</h3>
            <span>expert doctors</span>
            <div class="share">
                <a href="#" class="fab fa-facebook"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>

            </div>
        </div>

        <div class="box">
            <img src="/Image/doctor image 2.jpg" alt="">
            <h3>Dermatologists</h3>
            <span>expert doctor</span>
            <div class="share">
                <a href="#" class="fab fa-facebook"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
                
            </div>
        </div>

        <div class="box">
                <img src="/Image/doctor image 3.jpg" alt="">
                <h3>Gastroenterologist</h3>
                <span>expert doctor</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <img src="/Image/doctor image 4.jpg" alt="">
                <h3>Nephrologists</h3>
                <span>expert doctor</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <img src="/Image/doctor image 5.jpg" alt="">
                <h3>Emergency Medicine Specialists</h3>
                <span>expert doctor</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
            <div class="box">
                <img src="/Image/doctor image 6.jpg" alt="">
                <h3>Neurologists</h3>
                <span>expert doctor</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
            <div class="box">
                <img src="/Image/doctor image 7.jpg" alt="">
                <h3>Obstetricians and Gynecologists</h3>
                <span>expert doctor</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
            <div class="box">
                <img src="/Image/doctor image 8.jpg" alt="">
                <h3>Internists</h3>
                <span>expert doctor</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <img src="/Image/doctor image 9.jpg" alt="">
                <h3>Endocrinologists</h3>
                <span>expert doctor</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>

            </div>
        </div>
    </section>

    <!--doctor section ends-->

    <!--appointment section starts-->

    <section class="appointment" id="appointment">

        <h1 class="heading"><span>appointment</span> now </h1>

        <div class="row">

            <div class="image">
                <img src="Image/appointment image.jpg" alt="">
    </div>

<form action="" method="post">

           <h3>make appointment</h3>
           <input type="text" name="name" placeholder="Your Name" class="box">
           <input type="number" name="number" placeholder="Your Number" class="box">
           <input type="email" name="email" placeholder="Your Email" class="box">
           <input type="Date" name="Date" class="box">
           <input type="submit" name="submit" value="Appointment Now" class="box">
       </form>

    </div>

</section>

<!--appointment section ends-->

<!--review section starts-->

<section class="review" id="review">

    <h1 class="heading"> client's <span>review</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="/Image/doctor image 5.jpg" alt="">
            <h3>Dr. Akash Singhaniya</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium praesentium ea ullam! Perspiciatis fugiat vel, sapiente aut tenetur quasi cupiditate, cumque nihil rem eius id pariatur! Sunt molestias iure alias!</p>
        </div>

        <div class="box">
            <img src="/Image/doctor image 1.jpg" alt="">
            <h3>Dr. Valentina </h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium praesentium ea ullam! Perspiciatis fugiat vel, sapiente aut tenetur quasi cupiditate, cumque nihil rem eius id pariatur! Sunt molestias iure alias!</p>
        </div>

        <div class="box">
            <img src="/Image/doctor image 4.jpg" alt="">
            <h3>Dr Aadarsh </h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium praesentium ea ullam! Perspiciatis fugiat vel, sapiente aut tenetur quasi cupiditate, cumque nihil rem eius id pariatur! Sunt molestias iure alias!</p>
            </div>
        </div>

</section>
<!--review section ends-->

<!--blogs section starts-->

<section class="blogs" id="blogs">

    <h1 class="heading">our <span> blogs</span></h1>

    <div class="box-container">

        <div class="box">
           <div class="image">
            <img src="/Image/blog image 1.jpg" alt="">
        </div>
        <div class="content">
            <div class="icon">
                <a href="#"> <i class="fas fa-calendar"></i> 7 march 2020</a>
                <a href="#"> <i class="fas fa-user"></i> by naina </a>
            </div>
            <h3>blog title goes here</h3>
            <p>Commitment. Begin with resolve to create interesting content on a regular basis.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="/Image/blog image 2.jpg" alt="">
        </div>
        <div class="content">
            <div class="icon">
                <a href="#"> <i class="fas fa-calendar"></i> 11 may 2020</a>
                <a href="#"> <i class="fas fa-user"></i> by anu </a>
            </div>
            <h3>blog title goes here</h3>
            <p>Commitment. Begin with resolve to create interesting content on a regular basis.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="/Image/blog image 3.jpg" alt="">
        </div>
        <div class="content">
            <div class="icon">
                <a href="#"> <i class="fas fa-calendar"></i> 7 july 2020</a>
                <a href="#"> <i class="fas fa-user"></i> by nitaym </a>
            </div>
            <h3>blog title goes here</h3>
            <p>Commitment. Begin with resolve to create interesting content on a regular basis.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="/Image/blog image 4.jpg" alt="">
        </div>
        <div class="content">
            <div class="icon">
                <a href="#"> <i class="fas fa-calendar"></i> 18 july 2021</a>
                <a href="#"> <i class="fas fa-user"></i> by sakshi </a>
            </div>
            <h3>blog title goes here</h3>
            <p>Commitment. Begin with resolve to create interesting content on a regular basis.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="/Image/blog image 5.jpg" alt="">
        </div>
        <div class="content">
            <div class="icon">
                <a href="#"> <i class="fas fa-calendar"></i> 27 august 2021</a>
                <a href="#"> <i class="fas fa-user"></i> by shivam </a>
            </div>
             <h3>blog title goes here</h3>
             <p>Commitment. Begin with resolve to create interesting content on a regular basis.</p>
             <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="/Image/blog image 6.jpg" alt="">
        </div>
        <div class="content">
            <div class="icon">
                <a href="#"> <i class="fas fa-calendar"></i> 4 january 2022</a>
                <a href="#"> <i class="fas fa-user"></i> by atul</a>
            </div>
             <h3>blog title goes here</h3>
             <p>Commitment. Begin with resolve to create interesting content on a regular basis.</p>
             <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
            </div>
        </div>

    </div>

    </section> 

    <!--blogs section ends-->

    <!--footer section starts-->

    <section class="footer">

        <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#"><i class="fas fa-chevron-right"></i>home</a>
            <a href="#"><i class="fas fa-chevron-right"></i>about</a>
            <a href="#"><i class="fas fa-chevron-right"></i>services</a>
            <a href="#"><i class="fas fa-chevron-right"></i>doctors</a>
            <a href="#"><i class="fas fa-chevron-right"></i>appointment</a>
            <a href="#"><i class="fas fa-chevron-right"></i>review</a>
            <a href="#"><i class="fas fa-chevron-right"></i>blogs</a>
        </div>

        <div class="box">
            <h3>our services</h3>
            <a href="#"><i class="fas fa-chevron-right"></i>dental care</a>
            <a href="#"><i class="fas fa-chevron-right"></i>message therapy</a>
            <a href="#"><i class="fas fa-chevron-right"></i>cardioloty</a>
            <a href="#"><i class="fas fa-chevron-right"></i>diagnosis</a>
            <a href="#"><i class="fas fa-chevron-right"></i>ambulance service</a>
        </div>

        <div class="box">
            <h3>appointment info</h3>
            <a href="#"><i class="fas fa-chevron-right"></i>+888766530</a>
            <a href="#"><i class="fas fa-chevron-right"></i>+888455432</a>
            <a href="#"><i class="fas fa-chevron-right"></i>angalpriya@gmail.com</a>
            <a href="#"><i class="fas fa-chevron-right"></i>surajsinghaniya@gmail.com</a>
            <a href="#"><i class="fas fa-chevron-right"></i>Utter pradesh</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"><i class="fas fa-chevron-right"></i> faceappointment </a>
            <a href="#"><i class="fas fa-chevron-right"></i> twitter </a>
            <a href="#"><i class="fas fa-chevron-right"></i> twitter </a>
            <a href="#"><i class="fas fa-chevron-right"></i> instagram </a>
            <a href="#"><i class="fas fa-chevron-right"></i> pinterest </a>
        </div>

    </div>

        <div class="credit"> created by <span>komal</span> | all rights reserved</div>

    </section>

    <!--footer section ends-->

    <!--js file link-->

    <script src="JS script.js"></script>

</body>
</html>