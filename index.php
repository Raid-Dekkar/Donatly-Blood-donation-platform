<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
</head>
<body>
    <!-- start header  -->
        <div class="header">
            <div class="container">
                <div class="logo">
                    <a href="index.php"><img src="imgs/donately-logo.png" alt=""></a>
                </div>
                <div class="links-inscrption">
                    <i class="fa-solid fa-xmark"></i>
                    <div class="links ">
                        <ul class="link">
                            <li data-section=".header">Home</li>
                            <li data-section=".services">Service</li>
                            <li data-section=".about-us">About us</li>
                            <li data-section=".review">Reviews</li>
                            <li data-section=".staff">Staff</li>
                        </ul>
                    </div>
                    <div class="inscription ">
                        <a href="login.php" class="login">Sign in </a>
                        <a href="register.php" class="Signup">Sign up</a>
                    </div>
                </div>
                
                <button class="toggle-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    <!-- end header  -->
    <!-- start landing  -->
        <div class="landing">
            <div class="container">
                <div class="text">
                    <h1>Say Everything With Your <span>Blood</span></h1>
                    <p>Welcome to our blood donation center, where your generosity can save lives. Your kindness and commitment to saving lives is truly appreciated.</p>
                    <div class="button">
                        <a href="login.php" class="oppointement" target="_blank">Make Oppointement Now!</a>
                        <!-- <a href="login.php" class="receive">Receive now</a> -->
                    </div>
                    <div class="info">
                        <div class="phone">
                            <div class="icon">
                                <i class="fa fa-phone "></i>
                            </div>
                            <div class="textInfo">
                                <p>Phone Number</p>
                                <p>+213 (29) 123-45-900</p>
                            </div>
                        </div>
                        <div class="local">
                            <div class="icon">
                                <i class="fa fa-location-dot "></i>    
                            </div>
                            <div class="textInfo">
                                <p>Algeria.Setif</p>
                                <p>Ain-oulemen(767)</p>
                            </div>                   
                        </div>
                    </div>
                </div>
                <div class="image">
                    <img src="imgs/person-donating-2.png" alt="">
                    <div class="info">
                        <div class="icon">
                            <i class="fa fa-clock"></i>
                        </div>    
                        <div class="textInfo">
                            <p>Opening hours:</p>
                            <p>Mon - Fri: 9:00-17:00</p>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    <!-- end landing  -->
    <!-- Start About Us -->
    <div class="about-us" id="about-us">
        <div class="container">
            <div class="about-content">
                <img src="imgs/person-donating-1.png" alt="">
                <div class="info">
                    <h3 class="main-title">About Us</h3>
                    <h2 class="question">Who Are We?</h2>
                    <p class="description">We are a dedicated team committed to ensuring a safe and steady supply of blood for patients in need. Our mission is to provide high-quality blood donation services in a comfortable and welcoming environment.</p>
                    <a href="">View more</a>
                </div>
            </div>
            <section class="stats">
                <div class="box stat">
                    <div>
                        <i class="fa-solid fa-face-smile-beam"></i>
                    </div>
                    <span class="number" data-end-value="150">0</span>
                    <span class="plus">+</span>
                    <span class="text">Happy Patients</span>
                </div>
                <div class="box stat">
                    <div>
                        <i class="fa-solid fa-hospital-user"></i>
                    </div>
                    <span class="number" data-end-value="500">0</span>
                    <span class="plus">+</span>
                    <span class="text">Online Appointments</span>
                </div>
                <div class="box stat">
                    <div>
                        <i class="fa-solid fa-suitcase-medical"></i>
                    </div>
                    <span class="number" data-end-value="15">0</span>
                    <span class="plus">+</span>
                    <span class="text">Years Of Experience</span>
                </div>
                <div class="box stat">
                    <div>
                        <i class="fa-solid fa-user-doctor"></i>
                    </div>
                    <span class="number" data-end-value="30">0</span>
                    <span class="plus">+</span>
                    <span class="text">Doctors And Staff</span>
                </div>
            </section>
        </div>
    </div>
    <!-- End About Us -->
    <!-- Start Services -->
    <div class="services" id="services">
        <div class="container">
        <h3 class="main-title">Our Services</h3>
        <h2 class="list-features">Our List Of Features</h2>
        <div class="service-content">
            <div class="box">
                <i class="fa-solid fa-syringe"></i>
                <a class="in-title" href=""><h3>Blood Donation</h3></a>
                <p>It is the act of giving blood to help those in need of blood transfusions.</p>
            </div>
            <div class="box">
                <i class="fa-solid fa-bed-pulse"></i>
                <a class="in-title" href=""><h3>Blood Reception</h3></a>
                <p>It involves the transfer of blood from to a recipient to replace lost or damaged blood components.</p>
            </div>
            <div class="box">
                <i class="fa-solid fa-stethoscope"></i>
                <a class="in-title" href=""><h3>Health Check</h3></a>
                <p>It involves a series of tests to ensure the donor/recipient's safety and blood compatibility.</p>
            </div>
        </div>
        <a class="view-more"href="">View more</a>
        </div>
    </div>
    <!-- End Services -->
    <!-- Start Staff -->
    <div class="staff" id="staff">
        <div class="container">
        <h3 class="main-title">Our Staff</h3>
        <h2 class="meet-staff">Meet Our Staff</h2>
        <div class="staff-content">
            <div class="box">
                <img src="imgs/doctor-1.jpg" alt="">
                <h3>Dr. Raid <br> Dekkar</h3>
                <p>Blood Specialist</p>
            </div>
            <div class="box">
                <img src="imgs/doctor-2.jpg" alt="">
                <h3>Dr. Ouahiba Mohamed</h3>
                <p>General Doctor</p>
            </div>
            <div class="box">
                <img src="imgs/doctor-3.jpg" alt="">
                <h3>Dr. Ayoub Megdoud</h3>
                <p>Heart Specialist</p>
            </div>
            <div class="box">
                <img src="imgs/doctor-4.jpg" alt="">
                <h3>Dr. Youcef Boulkhiout</h3>
                <p>Psychologist</p>
            </div>
        </div>
        <a class="view-more"href="">View more</a>
        </div>
    </div>
    <!-- End Staff -->
    ]<!-- start review -->
    <div class="review">
        <div class="container">
            <div class="text">
                <h4>Our reviews</h4>
            <h2>What they say</h2>
            </div>
        <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
        
                            <div class="card-image">
                                <img src="imgs/avatar-01.png" alt="" class="card-img">
                            </div>
                        </div>
        
                        <div class="card-content">
                            <h2 class="name">Zinou Bouyoucef</h2>
                            <p class="description">I totaly recommend Donately, it is recognized for its exceptional safety and quality standards.</p>
        
                            <div class="rate">
                                <div class="icon">
                                    <i class="filled fas fa-star"></i>
                                    <i class="filled fas fa-star"></i>
                                    <i class="filled fas fa-star"></i>
                                    <i class="filled fas fa-star"></i>
                                    <i class="filled fas fa-star"></i>
                                    <!-- <i class="fa-regular fa-star-half-stroke"></i> -->
                                </div>
                                <span>5</span>
                            </div>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
        
                            <div class="card-image">
                                <img src="imgs/avatar-02.png" alt="" class="card-img">
                            </div>
                        </div>
        
                        <div class="card-content">
                            <h2 class="name">Fakhro Hayahoum</h2>
                            <p class="description">Donately center is one of the best, praising its welcoming environment and efficient processes.</p>
        
                            <div class="rate">
                                <div class="icon">
                                    <i class="filled fas fa-star"></i>
                                    <i class="filled fas fa-star"></i>
                                    <i class="filled fas fa-star"></i>
                                    <i class="filled fas fa-star"></i>
                                    <i class="fa-regular fa-star-half-stroke"></i>
                                </div>
                                <span>4.5</span>
                            </div>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
        
                            <div class="card-image">
                                <img src="imgs/avatar-03.png" alt="" class="card-img">
                            </div>
                        </div>
        
                        <div class="card-content">
                            <h2 class="name">Monaim Cheraga</h2>
                            <p class="description">A trusted provider of life-saving blood transfusions.</p>
        
                            <div class="rate">
                                <div class="icon">
                                    <i class="filled fas fa-star"></i>
                                    <i class="filled fas fa-star"></i>
                                    <i class="filled fas fa-star"></i>
                                    <i class="filled fas fa-star"></i>
                                    <i class="fa-regular fa-star-half-stroke"></i>
                                </div>
                                <span>4.5</span>
                            </div>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
        
                            <div class="card-image">
                                <img src="imgs/avatar-04.png" alt="" class="card-img">
                            </div>
                        </div>
        
                        <div class="card-content">
                            <h2 class="name">Oussama Belaiche</h2>
                            <p class="description">This center's excellent record of safety and reliability has earned it a five-star rating for sure.</p>
        
                            <div class="rate">
                                <div class="icon">
                                    <i class="filled fas fa-star"></i>
                                    <i class="filled fas fa-star"></i>
                                    <i class="filled fas fa-star"></i>
                                    <i class="filled fas fa-star"></i>
                                    <i class="fa-regular fa-star-half-stroke"></i>
                                </div>
                                <span>4.5</span>
                            </div>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
        
                            <div class="card-image">
                                <img src="imgs/avatar-05.png" alt="" class="card-img">
                            </div>
                        </div>
        
                        <div class="card-content">
                            <h2 class="name">Okba Merrouche</h2>
                            <p class="description">Donors appreciate friendly staff, comfortable facilities, and convenient hours, making Donately a top choice for blood donations.</p>
        
                            <div class="rate">
                                <div class="icon">
                                    <i class="filled fas fa-star"></i>
                                    <i class="filled fas fa-star"></i>
                                    <i class="filled fas fa-star"></i>
                                    <i class="filled fas fa-star"></i>
                                    <i class="fa-regular fa-star-half-stroke"></i>
                                </div>
                                <span>4.5</span>
                            </div>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
        
                            <div class="card-image">
                                <img src="imgs/avatar-06.png" alt="" class="card-img">
                            </div>
                        </div>
        
                        <div class="card-content">
                            <h2 class="name">Brahim Bendada</h2>
                            <p class="description">I had an exceptional donor experience, and i am defenetly comming back.</p>
        
                            <div class="rate">
                                <div class="icon">
                                    <i class="filled fas fa-star"></i>
                                    <i class="filled fas fa-star"></i>
                                    <i class="filled fas fa-star"></i>
                                    <i class="filled fas fa-star"></i>
                                    <i class="fa-regular fa-star-half-stroke"></i>
                                </div>
                                <span>4.5</span>
                            </div>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
        
                            <div class="card-image">
                                <img src="imgs/avatar-02.png" alt="" class="card-img">
                            </div>
                        </div>
        
                        <div class="card-content">
                            <h2 class="name">Imad Guechtal</h2>
                            <p class="description">I really appreciate the dedication to making the donation process easy, fast, and comfortable</p>
        
                            <div class="rate">
                                <div class="icon">
                                    <i class="filled fas fa-star"></i>
                                    <i class="filled fas fa-star"></i>
                                    <i class="filled fas fa-star"></i>
                                    <i class="filled fas fa-star"></i>
                                    <i class="fa-regular fa-star-half-stroke"></i>
                                </div>
                                <span>4.5</span>
                            </div>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
        
                            <div class="card-image">
                                <img src="imgs/avatar-03.png" alt="" class="card-img">
                            </div>
                        </div>
        
                        <div class="card-content">
                            <h2 class="name">Saif Ouchfoune</h2>
                            <p class="description">Donately is consistently recognized for their high-quality blood products, cutting-edge research, and commitment to innovation.</p>
        
                            <div class="rate">
                                <div class="icon">
                                    <i class="filled fas fa-star"></i>
                                    <i class="filled fas fa-star"></i>
                                    <i class="filled fas fa-star"></i>
                                    <i class="filled fas fa-star"></i>
                                    <i class="fa-regular fa-star-half-stroke"></i>
                                </div>
                                <span>4.5</span>
                            </div>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
        
                            <div class="card-image">
                                <img src="imgs/avatar-05.png" alt="" class="card-img">
                            </div>
                        </div>
        
                        <div class="card-content">
                            <h2 class="name">Adem Lebbad</h2>
                            <p class="description">I choose Donately for their attention to detail, rigorous safety protocols, and personalized care, making them a leader in blood donation.</p>
        
                        <div class="rate">
                                <div class="icon">
                                    <i class="filled fas fa-star"></i>
                                    <i class="filled fas fa-star"></i>
                                    <i class="filled fas fa-star"></i>
                                    <i class="filled fas fa-star"></i>
                                    <i class="fa-regular fa-star-half-stroke"></i>
                                </div>
                                <span>4.5</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>
        </div>
    </div>
    <!-- end review -->
    <!-- start questions  -->
    <div class="question">
        <div class="container">
            <div class="head" id="faq">
                <h4>FAQ</h4>
                <h2>Have A Question?</h2>
            </div>
            <div class="box">
                <div class="text">
                    <h4>Who is eligible to donate blood?</h4>
                    <p class="toggle hidden">Generally, anyone over 18 years old who is in good health, meets the weight requirement, and passes a health screening can donate blood.</p>
                </div>
                <div class="icon">
                    <p >+</p>
                </div>
            </div>
            <div class="box">
                <div class="text">
                    <h4>Is donating blood safe?</h4>
                    <p class="toggle  hidden">Yes, donating blood is safe. Blood donation centers follow strict safety protocols and use sterile equipment to minimize any risks.</p>
                </div>
                <div class="icon">
                    <p >+</p>
                </div>
            </div>
            <div class="box">
                <div class="text">
                    <h4>How often can I donate blood?</h4>
                    <p class="toggle  hidden">In most cases, you can donate blood every 56 days. However, the frequency may vary based on your health and other factors.</p>
                </div>
                <div class="icon">
                    <p >+</p>
                </div>
            </div>
            <div class="box">
                <div class="text">
                    <h4>What happens during a blood transfusion?</h4>
                    <p class="toggle  hidden">During a blood transfusion, a patient receives blood or blood products through an IV. The transfusion can take several hours, and the patient is monitored for any adverse reactions.</p>
                </div>
                <div class="icon">
                    <p >+</p>
                </div>
            </div>
            <div class="box">
                <div class="text">
                    <h4>Are there any side effects of donating blood?</h4>
                    <p class="toggle  hidden">Some donors may experience mild side effects such as dizziness or fainting, but these are typically temporary and resolve quickly. Donors are advised to drink plenty of fluids and rest after donating blood.</p>
                </div>
                <div class="icon">
                    <p>+</p>
                </div>
            </div>
            <a class="view-more"href="">View more</a>
        </div>
    </div>
    <!-- end questions  -->
    <!-- start footer -->
    <div class="footer">
        <div class="newsletter">
        <h3>Subscribe To Our Newsletter</h3>
        <form action="">
            <input type="email" placeholder="Enter Your Email" />
            <input type="submit" value="Subscribe" />
        </form>
        </div>
        <div class="container">
        <div class="box">
            <img src="imgs/donately-logo.png" alt="" class="logo">
            <p class="text">
            We offer you top quality blood services by our qualified doctors with years of experience
            </p>
            <ul class="social">
            <li>
                <a href="#" class="facebook">
                <i class="fab fa-facebook-f"></i>
                </a>
            </li>
            <li>
                <a href="#" class="twitter">
                <i class="fab fa-twitter"></i>
                </a>
            </li>
            <li>
                <a href="#" class="instagram">
                <i class="fab fa-instagram"></i>
                </a>
            </li>
            <li>
                <a href="#" class="google-plus">
                <i class="fab fa-google-plus-g"></i>
                </a>
            </li>
            </ul>
        </div>
        <div class="box">
            <h3 class="box-title">Company</h3>
            <ul class="links">
            <li><a href="#">Why Donately?</a></li>
            <li><a href="#">Partner with us</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#faq">FAQ</a></li>
            </ul>
        </div>
        <div class="box">
            <h3 class="box-title">Support</h3>
            <ul class="links">
            <li><a href="#">Consultation call</a></li>
            <li><a href="#">Support center</a></li>
            <li><a href="#">Feedback</a></li>
            <li><a href="#">Appointment</a></li>
            </ul>
        </div>
        <div class="box">
        <h3 class="box-title">Contact us</h3>
            <div class="contact">
            <i class="fa-solid fa-envelope"></i>
            <div class="info">info@donately.com</div>
            </div>
            <div class="contact">
            <i class="fa-solid fa-phone"></i>
            <div class="info">+0123456789</div>
            </div>
            <div class="contact">
            <i class="fa-solid fa-clock"></i>
            <div class="info">Sun - Thur: 8:00 - 16:00</div>
            </div>
            <div class="contact">
            <i class="fa-solid fa-location-dot"></i>
            <div class="info">Algeria, Setif, National Road 28</div>
            </div>          
        </div>
        </div>
        <!-- <div class="copyright"><p>Made By: <span>Megdoud Ayoub</span> and <span>Dekkar Raid</span> for PFE-Licence 2023</p></div> -->
    </div>
    <!-- end footer -->

    <!-- Swiper JS -->
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/master.js"></script>
    <!-- JavaScript --> 
    <script>
        // Select the elements to be animated
        const numbers = document.querySelectorAll('.stats .number');

        // Store the stats section element
        const statsSection = document.querySelector('.stats');

        // Initialize a boolean variable to track whether the animation has started
        let animationStarted = false;

        // Define a function to animate the numbers
        function animateNumbers() {
        // Check if the animation has started and if the stats section is in view
        if (!animationStarted && isElementInViewport(statsSection)) {
            // Loop through each number element
            numbers.forEach(number => {
            // Set the start and end values
            const startValue = parseInt(number.innerText);
            const endValue = parseInt(number.dataset.endValue);
            const range = endValue - startValue;

            // Set the animation duration based on the range of values
            const duration = Math.min(3000, Math.max(1000, range * 15));

            // Define the animation function
            const animate = (timestamp) => {
                // Calculate the progress of the animation
                const progress = Math.min(1, (timestamp - startTime) / duration);

                // Update the number with the interpolated value
                const value = startValue + (range * progress);
                number.innerText = Math.round(value);

                // If the animation is not finished, request another frame
                if (progress < 1) {
                requestAnimationFrame(animate);
                }
            }

            // Get the start time and start the animation
            const startTime = performance.now();
            requestAnimationFrame(animate);
            });

            // Set the animationStarted variable to true
            animationStarted = true;
        }
        }

        // Define a function to check if an element is in the viewport
        function isElementInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
        }

        // Add a scroll event listener to trigger the animation
        window.addEventListener('scroll', animateNumbers);

    </script>
</body>
</html>