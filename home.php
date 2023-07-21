<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>


<body style="background-image: url(images/back/back12.jpg);">

    <div class="container">

        <?php @include 'header.php'; ?>

        <section class="home">

            <div class="swiper home-slider">

                <div class="swiper-wrapper">

                    <div class="swiper-slide slide" style="background:url(images/home-banner-img4.jpg) no-repeat">
                        <div class="content">
                            <h3>plan your birthday!</h3>
                            <p> I hope you create a memory that becomes your happy place in all the many years yet to
                                come on your birthday. Happy Birthday!</p>
                            <a href="portfolio.php" class="btn">event more</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide" style="background:url(images/home-banner-img2.jpeg) no-repeat">
                        <div class="content">
                            <h3>plan your wedding!</h3>
                            <p>A wedding ceremony is a joyous occasion through which a couple of men and women start
                                their married life. It is not merely an obligation, but also socially and culturally an
                                important event.</p>
                            <a href="portfolio.php" class="btn">event more</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide" style="background:url(images/home-banner-img3.jpeg) no-repeat">
                        <div class="content">
                            <h3>plan your parties!</h3>
                            <p> party ceremony is a joyous occasion through which a couple of men and women and boys and
                                girls all person entry.</p>
                            <a href="portfolio.php" class="btn">event more</a>
                        </div>
                    </div>

                </div>

                <div class="swiper-pagination"></div>

            </div>

        </section>

        <section class="services">

            <h1 class="heading">our services</h1>

            <div class="swiper service-slider">

                <div class="swiper-wrapper">

                    <div class="swiper-slide slide">
                        <img src="images/service-1.jpeg" alt="">
                        <div class="content">
                            <h3>photography and videos</h3>
                            <p> Photography is the art of taking pictures with a device called a camera.</p>
                            <a href="pricing.php" class="btn">Price</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <img src="images/service-2.png" alt="">
                        <div class="content">
                            <h3>event registration</h3>
                            <p>An event registration form is a form that is used to register for events.</p>
                            <a href="pricing.php" class="btn">Price</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <img src="images/service-9.jpg" alt="">
                        <div class="content">
                            <h3>guest list</h3>
                            <p>a list of the people who are invited to an event or social occasion such as a party:</p>
                            <a href="about.php" class="btn">about us</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <img src="images/service-10.jpg" alt="">
                        <div class="content">
                            <h3> cake</h3>
                            <p>Cake is a very popular food item. It can be prepared easily at home following some simple
                                steps</p>
                            <a href="pricing.php" class="btn">Price</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <img src="images/service-11.png" alt="">
                        <div class="content">
                            <h3>event ceremony</h3>
                            <p> Event is a type of composition where the author is describing an event in detail</p>
                            <a href="pricing.php" class="btn">Price</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <img src="images/service-12.jpg" alt="">
                        <div class="content">
                            <h3>fine dining</h3>
                            <p>Fine dining is a restaurant experience that is typically more sophisticated, unique, and
                                expensive than one would find in the average restaurant.</p>
                            <a href="pricing.php" class="btn">Price</a>
                        </div>
                    </div>

                </div>

                <div class="swiper-pagination"></div>

            </div>

        </section>

        <?php @include 'footer.php'; ?>

    </div>















    <!-- swiper js link  -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>