<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Swiper JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.4/swiper-bundle.css" />


    <!-- Link Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

    <!-- Link Style CSS -->
    <link rel="stylesheet" href="style.css">

    <title>Car Website | Easy Coding</title>
</head>

<body>

    <!-- Header/Navbar Start -->
    <header>

        <div id="MenuBtn" class="fas fa-bars"></div>

        <a href="#" class="logo"><span>L</span>uxury</a>

        <nav class="navbar">
            <a href="#Home">Home</a>
            <a href="#Vehicle">Vehicle</a>
            <a href="#Featured">Featured</a>
            <a href="#Services">Services</a>
            <a href="#Review">Review</a>
            <a href="#Contact">Contact</a>
        </nav>

        <div id="LoginBtn">
            <button class="btn">Login</button>
            <i class="fas fa-user"></i>
        </div>



    </header>
    <!-- Header/Navbar End -->

    <!-- Login Form Container/Popup -->
    <div class="loginFormContainer">
        <span id="CloseLoginForm" class="fas fa-times"></span>

        <form action="">
            <h3>User Login</h3>
            <input type="email" placeholder="Email" required class="box">
            <input type="password" placeholder="Password" required class="box">
            <p>Forget Your Password : <a href="#">Click Here</a></p>
            <button class="btn">Submit</button>
            <p>or Login With</p>
            <div class="buttons">
                <a href="#" class="btn">Google</a>
                <a href="#" class="btn">Facebook</a>
            </div>
        </form>

    </div>
    <!-- Login Form Container/Popup -->

    <!-- Home Section Start -->
    <section id="Home" class="home">
        <h3 data-speed="-2" class="homeParallexEffect">Find Luxury</h3>
        <img data-speed="5" class="homeParallexEffect" src="images/home.png" alt="">
        <a href="#" class="btn">View Cars</a>
    </section>
    <!-- Home Section End -->

    <!-- Icons Container Start -->
    <section class="iconsContainer">

        <div class="icons">
            <i class="fas fa-home"></i>

            <div class="content">
                <h3>100+</h3>
                <p>Branches</p>
            </div>

        </div>

        <div class="icons">
            <i class="fas fa-car"></i>
            <div class="content">
                <h3>5870+</h3>
                <p>car sold</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-users"></i>
            <div class="content">
                <h3>2560+</h3>
                <p>happy Customers</p>
            </div>
        </div>


        <div class="icons">
            <i class="fas fa-car"></i>
            <div class="content">
                <h3>1000+</h3>
                <p>New Launch</p>
            </div>

        </div>




    </section>
    <!-- Icons Container End -->

    <!-- Vehicle Section Start -->
    <section id="Vehicle" class="vehicle">
        <h1 class="heading">Popular Vehicles</h1>

        <div class="swiper VehiclesSlider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="images/vehicle1.png" alt="">
                    <div class="content">
                        <h3>New Model</h3>
                        <div class="price"><span>Price : </span>$102,000</div>
                        <p>
                            <span class="fas fa-circle"></span>2022
                            <span class="fas fa-circle"></span>Automatic
                            <span class="fas fa-circle"></span>Electric
                            <span class="fas fa-circle"></span>200mph
                        </p>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="images/vehicle2.png" alt="">
                    <div class="content">
                        <h3>New Model</h3>
                        <div class="price"><span>Price : </span>$102,000</div>
                        <p>
                            <span class="fas fa-circle"></span>2022
                            <span class="fas fa-circle"></span>Automatic
                            <span class="fas fa-circle"></span>Electric
                            <span class="fas fa-circle"></span>200mph
                        </p>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="images/vehicle3.png" alt="">
                    <div class="content">
                        <h3>New Model</h3>
                        <div class="price"><span>Price : </span>$102,000</div>
                        <p>
                            <span class="fas fa-circle"></span>2022
                            <span class="fas fa-circle"></span>Automatic
                            <span class="fas fa-circle"></span>Electric
                            <span class="fas fa-circle"></span>200mph
                        </p>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="images/vehicle4.png" alt="">
                    <div class="content">
                        <h3>New Model</h3>
                        <div class="price"><span>Price : </span>$102,000</div>
                        <p>
                            <span class="fas fa-circle"></span>2022
                            <span class="fas fa-circle"></span>Automatic
                            <span class="fas fa-circle"></span>Electric
                            <span class="fas fa-circle"></span>200mph
                        </p>
                    </div>
                </div>


                <div class="swiper-slide box">
                    <img src="images/vehicle5.png" alt="">
                    <div class="content">
                        <h3>New Model</h3>
                        <div class="price"><span>Price : </span>$102,000</div>
                        <p>
                            <span class="fas fa-circle"></span>2022
                            <span class="fas fa-circle"></span>Automatic
                            <span class="fas fa-circle"></span>Electric
                            <span class="fas fa-circle"></span>200mph
                        </p>
                    </div>
                </div>


                <div class="swiper-slide box">
                    <img src="images/vehicle6.png" alt="">
                    <div class="content">
                        <h3>New Model</h3>
                        <div class="price"><span>Price : </span>$102,000</div>
                        <p>
                            <span class="fas fa-circle"></span>2022
                            <span class="fas fa-circle"></span>Automatic
                            <span class="fas fa-circle"></span>Electric
                            <span class="fas fa-circle"></span>200mph
                        </p>
                    </div>
                </div>



            </div>

            <div class="swiper-pagination"></div>


        </div>


    </section>
    <!-- Vehicle Section End -->

    <!-- Featured Section Start -->
    <section id="Featured" class="feature">

        <h1 class="heading">Featured Cars</h1>

        <div class="swiper FeatureSlider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="images/car1.png" alt="">

                    <div class="content">
                        <h3>New Model</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price">$85,000/-</div>
                        <a href="#" class="btn">Buy Now</a>

                    </div>

                </div>

                <div class="swiper-slide box">
                    <img src="images/car2.jpg" alt="">

                    <div class="content">
                        <h3>New Model</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price">$85,000/-</div>
                        <a href="#" class="btn">Buy Now</a>

                    </div>

                </div>



                <div class="swiper-slide box">
                    <img src="images/car3.jpg" alt="">

                    <div class="content">
                        <h3>New Model</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price">$85,000/-</div>
                        <a href="#" class="btn">Buy Now</a>

                    </div>

                </div>


                <div class="swiper-slide box">
                    <img src="images/car4.jpg" alt="">

                    <div class="content">
                        <h3>New Model</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price">$85,000/-</div>
                        <a href="#" class="btn">Buy Now</a>

                    </div>

                </div>




            </div>

        </div>

        <!-- For Second -->
        <div class="swiper FeatureSlider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="images/car5.jpg" alt="">

                    <div class="content">
                        <h3>New Model</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price">$85,000/-</div>
                        <a href="#" class="btn">Buy Now</a>

                    </div>

                </div>

                <div class="swiper-slide box">
                    <img src="images/car4.jpg" alt="">

                    <div class="content">
                        <h3>New Model</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price">$85,000/-</div>
                        <a href="#" class="btn">Buy Now</a>

                    </div>

                </div>



                <div class="swiper-slide box">
                    <img src="images/car2.jpg" alt="">

                    <div class="content">
                        <h3>New Model</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price">$85,000/-</div>
                        <a href="#" class="btn">Buy Now</a>

                    </div>

                </div>


                <div class="swiper-slide box">
                    <img src="images/car3.jpg" alt="">

                    <div class="content">
                        <h3>New Model</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price">$85,000/-</div>
                        <a href="#" class="btn">Buy Now</a>

                    </div>

                </div>




            </div>

        </div>

    </section>
    <!-- Featured Section End -->

    <!-- Service Section Start -->
    <section id="Services" class="services">
        <h1 class="heading">Our Services</h1>

        <div class="boxContainer">

            <div class="box">
                <i class="fas fa-car"></i>
                <h3>Car Selling</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus facilis sapiente suscipit
                    explicabo natus ducimus?</p>
                <button class="btn">Read More</button>
            </div>

            <div class="box">
                <i class="fas fa-tools"></i>
                <h3>Parts Repair</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus facilis sapiente suscipit
                    explicabo natus ducimus?</p>
                <button class="btn">Read More</button>
            </div>


            <div class="box">
                <i class="fas fa-car-crash"></i>
                <h3>Car Insurance</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus facilis sapiente suscipit
                    explicabo natus ducimus?</p>
                <button class="btn">Read More</button>
            </div>

            <div class="box">
                <i class="fas fa-car-battery"></i>
                <h3>Battery Replacement</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus facilis sapiente suscipit
                    explicabo natus ducimus?</p>
                <button class="btn">Read More</button>
            </div>


            <div class="box">
                <i class="fas fa-gas-pump"></i>
                <h3>Oil Change</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus facilis sapiente suscipit
                    explicabo natus ducimus?</p>
                <button class="btn">Read More</button>
            </div>

            <div class="box">
                <i class="fas fa-headset"></i>
                <h3>24*7 Support</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus facilis sapiente suscipit
                    explicabo natus ducimus?</p>
                <button class="btn">Read More</button>
            </div>






        </div>

    </section>
    <!-- Service Section End -->

    <!-- News Letter Section Start -->
    <section class="newsletter">

        <h3>Subscribe to Our newsletter</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, tempore.</p>
        <form action="">
            <input type="email" required placeholder="Enter Your Email">
            <input type="submit" value="Subscribe">
        </form>

    </section>
    <!-- News Letter Section End -->


    <!-- Review Section Start -->
    <section id="Review" class="review">
        <h1 class="heading">Client's Review</h1>

        <div class="swiper ReviewSlider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="images/user1.png" alt="">
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia exercitationem ratione
                            voluptates aspernatur, eum sed.</p>
                        <h3>Easy Coding</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="images/user2.png" alt="">
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia exercitationem ratione
                            voluptates aspernatur, eum sed.</p>
                        <h3>Easy Coding</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="images/user3.png" alt="">
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia exercitationem ratione
                            voluptates aspernatur, eum sed.</p>
                        <h3>Easy Coding</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="images/user4.png" alt="">
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia exercitationem ratione
                            voluptates aspernatur, eum sed.</p>
                        <h3>Easy Coding</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>



            </div>

        </div>

    </section>
    <!-- Review Section End -->


    <!-- Contact Form Start -->
    <section id="Contact" class="contact">
        <h1 class="heading">Contact Us</h1>

        <div class="row">


            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26358931.518217817!2d-113.710524333842!3d36.24816513088202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sin!4v1666002434162!5m2!1sen!2sin"
                frameborder="0"></iframe>
            <form action="">
                <h3>Book Appointment</h3>
                <input type="text" placeholder="Your Name" required class="box">
                <input type="email" placeholder="Your Email" required class="box">
                <textarea class="box" required placeholder="Your Message" name="" id="" cols="30" rows="10"></textarea>
                <button class="btn">Send</button>
            </form>

        </div>

    </section>
    <!-- Contact Form End -->

    <!-- Footer Start -->
    <footer>
        <a href="#">&copy; Easy Coding Tutorial</a>
    </footer>
    <!-- Footer end -->

    <!-- Theme Toggle  -->
    <div class="themeToggle">

        <div class="ToggleBtn">
            <i class="fas fa-cog"></i>
        </div>


        <h3>Choose Color</h3>
        <div class="buttons">

            <div class="themeBtn" style="background: #0011ff;"></div>
            <div class="themeBtn" style="background: #ffb404;"></div>
            <div class="themeBtn" style="background: #2bff00;"></div>
            <div class="themeBtn" style="background: #fc00dbe6;"></div>
            <div class="themeBtn" style="background: #cb5805;"></div>
            <div class="themeBtn" style="background: #ff041d;"></div>

        </div>



    </div>
    <!-- Theme Toggle  -->





    <!-- Swiper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.4/swiper-bundle.min.js"></script>
    <!-- Script For JS -->
    <script src="index.js"></script>

</body>

</html>