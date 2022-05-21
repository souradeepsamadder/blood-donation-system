<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

</head>

<body>

    <!-- ------------------------navigation bar--------------------- -->

    <header>
            <!-- <div class="header-1">
                <div class="logo"><img src="image/logo.jpg" alt="logo"></div>
                <form action="">
                    <input type="search" placeholder="search here" id="search">
                    <label for="search" class="fa fa-search"></label>
                </form>

            </div> -->
        <div class="header-2">
            <nav class="navbar">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#camp">Camp</a></li>
                    <li><a href="#hospital">Hospital</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                </ul>
            </nav>
            <div class="navbar_button">
                <a href="login_page.php"> <button class="btn btn-primary raise text_color_black" style="margin-top: 0px;">LogIn /
                        Register</button></a>
            </div>
            <script src="js/navigation.js"></script>
        </div>
    </header>



    <!-- ---------------------------- slider section ----------------------------- -->


    <div class="swiper" id="home">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="image/banner1.jpg" alt=""></div>
            <div class="swiper-slide"><img src="image/banner2.jpg" alt=""></div>
            <div class="swiper-slide"><img src="image/banner3.jpg" alt=""></div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
        <script src="js/slider.js"></script>
    </div>


    <!-- ------------------------------ Marquee ----------------------------- -->

    <div class="marquee">
        <div><b>Urgent blood required for O negative in Durgpaur</b>
        </div>
    </div>



    <!-- ----------------------about Us----------------------- -->

    <div class="section1" id="about">
        <div class="container">
            <div class="content-section">
                <div class="title">
                    <h1>About Us</h1>
                </div>
                <div class="content">
                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>

                    <p class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis veritatis
                        animi aliquam laboriosam velit, esse, blanditiis aspernatur sint est magnam debitis delectus in
                        fuga fugiat repellat dignissimos ipsum necessitatibus corrupti
                        veniam reprehenderit,
                        <span class="moreText"> assumenda sapiente expedita labore atque! Sint velit cumque minus
                            pariatur quisquam,
                            beatae ab quo impedit eaque soluta vel laboriosam itaque similique iste ex aut in nihil
                            dolorem consequuntur
                            possimus eligendi eos optio ipsam! Sint ullam voluptate obcaecati asperiores eos vero sed
                            iusto magnam ad, vel repellat quidem? Omnis fugit accusantium, illo quos eos odio
                            consectetur et nemo excepturi deleniti dolorum adipisci dolores delectus possimus libero,
                            sed iusto dolorem?
                        </span>
                    </p>
                    <button class="read-more-btn ">Read More</button>
                </div>
                <script src="js/main.js"></script>
            </div>
            <div class="image-section">
                <img src="image/about.jpg" alt="">
            </div>
        </div>
    </div>


    <!-- -----------------------camp--------------------------- -->

    <section id="camp">
        <div class="comment">
            <div class="heading">
                <h1>Camp</h1>
            </div>
            <div class="grid_container">
                <div class="grid_item">
                    <div class="about_cou">
                        <h3>
                            Dhanush Welfare <br>
                            C01
                        </h3>
                        <para class="p">
                            Email id- snehamajumder12318@gmail.com <br>
                            Address - Pranavananda Vidya Mandir <br>
                            Phone no - 8101008843

                            </p>
                            <br>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- -------------------------------Hospital-------------------------- -->

    <section id="hospital">
        <div class="comment">
            <div class="heading">
                <h1>Hospital</h1>
            </div>
            <div class="grid_container">
                <div class="grid_item">
                    <div class="about_cou">
                        <h3>
                            Dhanush Welfare <br>
                            C01
                        </h3>
                        <para class="p">
                            Email id- snehamajumder12318@gmail.com <br>
                            Address - Pranavananda Vidya Mandir <br>
                            Phone no - 8101008843

                            </p>
                            <br>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- --------------------------------contact---------------------------------- -->



    <section class="background contact" id="contact">
        <div class="container">
            <div class="container1"><br><br><br>
                <div class="contact_box">
                    <div class="box">
                        <h2>Contact Us</h2><br><br>
                        <input type="text" class="field" placeholder="Your Name">
                        <input type="text" class="field" placeholder="Your Email">
                        <input type="text" class="field" placeholder="Phone">
                        <textarea placeholder="Message" class="field"></textarea>
                        <div class="button">
                            <a href="">Submit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- ---------------------------------------footer------------------------------------- -->


    <footer class="footer">
        <div class="inner-footer">
            <div class="social-links">
                <ul><br>
                    <li class="social-items"><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                    <li class="social-items"><a href="#"><i class="fa-brands fa-twitter-square"></i></a></li>
                    <li class="social-items"><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                </ul><br><br>
            </div>
            <div class="quick-links">
                <ul>
                    <li class="quick-items"><a href="#home">Home</a></li>
                    <li class="quick-items"><a href="#about">About</a></li>
                    <li class="quick-items"><a href="#camp">Camp</a></li>
                    <li class="quick-items"><a href="#hospital">Hospital</a></li>
                    <li class="quick-items"><a href="#contact">Contact Us</a></li>
                </ul>
            </div>
        </div>

    </footer>

</body>

</html>