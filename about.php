<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <?php include 'components/user_header.php'; ?>
    <div class="heading">
        <h3>about us</h3>
        <p><a href="home.php">Home</a> <span> / About</span></p>
    </div>

    <section class="about">

        <div class="row">

            <div class="image">
                <img src="images/aboutus.png" height="500px">
            </div>

            <div class="content">
                <h3>Why Choose Us?</h3>
                <p>This platform will enable farmers to sell their agricultural waste products to interested buyers,
                    providing them with an additional source of income. It will also help clients to find the
                    agricultural waste products they need easily. </p>
                <a href="contact.php" class="btn">Contact Us</a>
            </div>

        </div>

    </section>

    <section class="reviews">

        <h1 class="title">AgriWasteProfit Members</h1>

        <div class="swiper reviews-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <img src="images/onel.jpg" alt="">
                    <p>Hello i'm Geonelle I currently studying in NEUST with a course of Bachelor of Science in
                        Information Technology Major in Web System Technologies.</p>
                    <h3>Geonelle Bautista</h3>
                </div>


                <div class="swiper-slide slide">
                    <img src="images/osh.jpg" alt="">
                    <p>Hello i'm Joshua I currently studying in NEUST with a course of Bachelor of Science in
                        Information Technology Major in Web System Technologies.</p>
                    <h3>Joshua Sarmiento</h3>
                </div>

                <div class="swiper-slide slide">
                    <img src="images/marc.jpg" alt="">
                    <p>Hello i'm Marc I currently studying in NEUST with a course of Bachelor of Science in
                        Information Technology Major in Web System Technologies.</p>
                    <h3>Marc Fransid Barawid</h3>
                </div>

                <div class="swiper-slide slide">
                    <img src="images/pats.jpg" alt="">
                    <p>Hello i'm Patrick I currently studying in NEUST with a course of Bachelor of Science in
                        Information Technology Major in Web System Technologies.</p>
                    <h3>Patrick Joshua Ilustre</h3>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section>

    <?php include 'components/footer.php'; ?>

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <script src="js/script.js"></script>

    <script>
    var swiper = new Swiper(".reviews-slider", {
        loop: true,
        spaceBetween: 20,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            991: {
                slidesPerView: 3,
            },
        },
    });
    </script>

</body>

</html>