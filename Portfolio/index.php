<?php include "db/config.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    
    <link rel="stylesheet" href="css/style.css">
    

</head>
<body>

    
    
    <div id="menu" class="fas fa-bars"></div>
    <header>
        <a href="image/menu_image.jpg" target="_blank"><img class="me" src="image/menu_image.jpg" alt="my image"></a>
        <a href="index.html#home" target="_self" class="logo">Kaizar Akib</a>
        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">About</a>
            <a href="#resume">Resume</a>
            <a href="#portfolio">Portfolio</a>
            <a href="#contact">Contact</a>
            <a href="view/login.php" target="_blank">Message</a>
        </nav>
        <div class="follow">
            <a href="https://www.facebook.com/akibarju.ayon" target="_blank" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/kaijar_akib/?fbclid=IwAR1wbV-N_lP7kkqg7CZxpgTRrb5S1jsojDtkPXV48yHY9MXBMQtzUim31J4" target="_blank" class="fab fa-instagram"></a>
        </div>
    </header>

<!-- header section ends -->

<!-- home section starts  -->

<section style="background-image: url(image/background.jpg);" class="home" id="home">

    <div class="content">
        <span class="hi"> Hello... </span>
        <h3> I am <span> Kaizar Akib Ayon </span> </h3>
        <p class="info"> I am a Webdesigner </p>
        
        <a href="#about" class="btn">about me</a>
    </div>

    <div class="image">
        <img src="image/background.jpg" alt="">
    </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

<h1 class="heading"> about <span> me </span> </h1>

<div class="row-1">

    <div class="image">
        <img src="image/home_image.jpg" alt="My profile photo">
    </div>

    <div class="content">
       
        <div class="box-container">
            <div class="box">
                <p><span>Name:</span> Kaizar Akib Ayon</p>
                <p> <span> age : </span> 23 </p>
                <p> <span> gender : </span> male </p>
                <p> <span> language : </span> English,Bangla </p>
                <p> <span> work : </span> Webdesigner</p>
            </div>
            <div class="box">
               
                <p> <span> phone : </span> 01909126975 </p>
                <p> <span> email : </span><a href="https://mail.google.com/mail/u/0/#inbox?compose=new" target="_blank"> kizar.cse@gmail.com </a></p>
                <p> <span> country : </span> Bangladesh </p>
            </div>
        </div>
        <a href="Assignment_III.pdf"  target="_blank" class="btn">download CV</a> 
    </div>
</div>
</section>

<!-- about section ends -->

<!-- resume section starts  -->

<section class="resume" id="resume">
    <h1 class="heading"> Resume </h1>
    <div class="rem">
        <div class="container">
            <div class="left-div">
    
                <img class="photo" src="image/ayon5.jpeg" alt="my photo">
                <h3 id="nameMe">Kaizar Akib</h3>
                <p id="prof">Web Designer</p>
    
                <br>
                <hr>
                <br>
                <div class="education">
                 <h3 class="h_three">Educational Info</h3>
                <br>
                <p class="mid">Bsc in Computer Science and Engenearing </p>
                <p class="mid">City University</p>
                <p class="mid">Septenber 2018-current</p>
                <br>
                <p class="mid">HSC</p>
                <p class="mid">Govt. Shere-e-Bangla College</p>
                <br>
                </div>
                <br>
                <div class="contact">
                 <h3 class="h_three">Contact Info</h3><br>
                <p class="mid">kizar.cse@gmail.com</p>
                <p>01909126975</p>
                <p class="mid">Badda,Dhaka,Bangladesh</p>
                </div>
                <hr>
            </div>
            <div class="right-div">
                <div class="profile">
                    <h3 class="pl">About me</h3>
                    <p class="para">I am a new web Designer.I just started my carrear as a fresher webDesignear.I am enriching my skill
                    and proven my experience. I am still learning creative and atractive design. </p>
                </div>
                <div class="skill">
                    <h3 class="pl">Skill</h3>
                    <h5><u>Language</u></h5>
                    <ul>
                        <li>C</li>
                        <li>C++</li>
                        <li>Pythone</li>
                        <li>PHP</li>
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>SQL</li>
                    </ul>
                    <h5><u>Software</u></h5>
                    <ul>
                        <li>MS Word</li>
                        <li>MS Excell</li>
                        <li>MS Powerpoint</li>
                        <li>MS Visio</li>
                    </ul>
                </div>
                <div>
                    <h5 class="pl">summary</h5>
                    <p class="para" >I am computer science student who learning at SWebdesign.
                        I still gatehring knowledge in webdesigning and enhanching my skill in webdesigning.
                        I also practising in backend development.
                    </p>
                </div>
                <hr id="hr">
            </div>
        </div>
    </div>

</section> 

<!-- resume section ends -->

<!--portfolio section start-->

<section class="portfolio" id="portfolio">

    <h1 class="heading"> my  portfolio </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/image_one.png" alt="project 0ne">
            <h3> project 01 </h3>
            
            <div class="icons">
                <a href=" https://github.com/Kaijar2020/Web-datbase-practice/blob/main/HW_2"class="fas fa-link"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-search"></a>
            </div>
            <p>This is a simple  Green website</p>
        </div>

        <div class="box">
            <img src="image/image_two.jpg" alt="">
            <h3> project 02 </h3>
            <p>This is my portfolio website</p>
            <div class="icons">
                <a href="#" class="fas fa-link"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-search"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/image_hree.jpg" alt="">
            <h3> project 03 </h3>
            <div class="icons">
                <a href="#" class="fas fa-link"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-search"></a>
            </div>
        </div>

    </div>

</section>

<!-- portfolio section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> contact <span> me </span> </h1>

    <div class="icons-container">

        <div class="icons">
            <i class="fas fa-envelope"></i>
            <h3>my email</h3>
            <p>kizar.cse@gmail.com</p>
            <p>kaijarayon@gmail.com</p>
        </div>

        <div class="icons">
            <i class="fas fa-phone"></i>
            <h3>my number</h3>
            <p>+8801909126975</p>
            
        </div>

        <div class="icons">
            <i class="fas fa-map-marker-alt"></i>
            <h3>my address</h3>
            <p>Middle Badda,Dhaka, Bangladesh</p>
        </div>

    </div>
        
    <div class="row">

        <form action="db/valuein_table.php" method="POST">

            <input type="text" name="name" placeholder="name" class="box" required>
            <input type="email" name="email"placeholder="email" class="box" required>
            <input type="number" name="phone" placeholder="number" class="box" required>

            <textarea name="message" placeholder="Write message..." id="" cols="20" rows="10"></textarea>

            <input type="submit"  name="submit"class="btn" value="send message">

        </form>

        

    </div>


</section>

<!-- contact section ends -->

<!-- footer section  -->
<footer class="footer"> <span> &#169 Kaizar Akib </span> | all rights reserved! </footer>

</body>
</html>