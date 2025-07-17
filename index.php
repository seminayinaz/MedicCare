<?php
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type= "text/css" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <title>Medic Care</title>
</head>

<body >
    <nav class="navbar navbar-expand-lg bg-light shadow-lg fixed-top">
        <div class="container">
        <?php $menu = $db->query("select * from menu where id='1'")->fetch(); ?>
            <a class="text-primary navbar-brand mx-auto d-lg-none" href='index.html'><?php echo $menu["medicCare"]; ?>
                <strong class="d-block"><?php echo $menu["health"]; ?></strong>
            </a>
            <button class="navbar-toggler" id ="bar" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
                <div class="bar" ></div>
                <div class="bar" ></div>
                <div class="bar"></div>
            </button>

            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#home"><?php echo $menu["home"]; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about"><?php echo $menu["about"]; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#timeline"><?php echo $menu["timeline"]; ?></a>
                    </li>
                    <a class="text-primary navbar-brand d-none d-lg-block" href="index.html"><?php echo $menu["medicCare"]; ?>
                        <strong class="d-block"><?php echo $menu["health"]; ?></strong>
                    </a>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials"><?php echo $menu["patients"]; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#booking"><?php echo $menu["booking"]; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact"><?php echo $menu["contact"]; ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="home" id="home">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="carousel slide carousel-fade" data-bs-ride="carousel" id="image">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <?php $images = $db->query("select * from images where id='3'")->fetch(); ?>
                            <?php echo '<img class="img-fluid" src="data:image/jpeg;base64,'.base64_encode($images['image']).'"/>' ?>
                        </div>
                            <div class="carousel-item ">
                            <?php $images = $db->query("select * from images where id='1'")->fetch(); ?>
                                <?php echo '<img class="img-fluid" src="data:image/jpeg;base64,'.base64_encode($images['image']).'"/>' ?>
                            </div>
                            <?php $images = $db->query("select * from images where id='4'")->fetch(); ?>
                            <div class="carousel-item ">
                            <?php echo '<img class="img-fluid" src="data:image/jpeg;base64,'.base64_encode($images['image']).'"/>' ?>
                            </div>
                        </div>
                    </div>
                    <div class="homeText d-flex flex-column justify-content-center">

                        <?php $home = $db->query("select * from home where home_id='1'")->fetch(); ?>

                        <h1 class="mt-auto mb-2"><?php echo $home["title"]; ?></h1>
                        <p class="mb-4"><?php echo $home["body"]; ?></p>

                        <div class="d-flex flex-wrap align-items-center">
                            <a class="text-primary learnMore" href="#about"><?php echo $home["body2"]; ?></a>
                            <p class="phone"><ion-icon name="phone-portrait-outline"></ion-icon><?php echo $home["phone"]; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md col-lg">

                <?php $about = $db->query("select * from about where about_id='1'")->fetch(); ?>

                    <h1 class="ms-3 mb-3"><?php echo $about["title"]; ?></h1>
                    <p class="ms-3"><?php echo $about["body"]; ?></p>
                    <p class="ms-3"><?php echo $about["body2"]; ?></p>
                </div>
                <div class="col-md col-lg mx-auto">
                    <div class="circle shadow-lg d-flex align-items-center justify-content-center">
                        <p class="text">
                            <span class="number"><?php echo $about["number"]; ?></span>
                            <?php echo $about["footer"]; ?><br><?php echo $about["footer2"]; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="gallery">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <img class="img-fluid" src="images/medium-shot-man-getting-vaccine.jpg">
                </div>
                <div class="col-6">
                    <img class="img-fluid" src="images/female-doctor-with-presenting-hand-gesture.jpg">
                </div>
            </div>
        </div>
    </div>
    <div class="about" id="timeline">
        <div class="container">
            <div class="row">

            <?php $timeline = $db->query("select * from timeline where timeline_id='1'")->fetch() ?>
                <h1 class="mb-4 mb-lg-5 text-center"><?php echo $timeline["title"]; ?></h1>
                <div class="timeline">
                    <div class="timelineDiv row g-0 justify-content-md-around justify-content-end">
                        <div class="col-9 col-md-5 ps-md-3 ps-lg-0 order-1 order-md-3 py-4 date">
                            <time><?php echo $timeline["date"]; ?></time>
                        </div>
                        <div class="col-3 col-sm-1 order-2 text-md-center timelineIcons">
                            <ion-icon class="timelineIcon" name="checkmark-circle"></ion-icon>
                        </div>
                        <div class="order-3 order-md-1 col-9 col-md-5 me-md-4 me-lg-0 bg-white shadow-lg" >
                            <h3 class="text-light"><?php echo $timeline["head"]; ?></h3>
                            <p><?php echo $timeline["body"]; ?></p>
                        </div>
                    </div>

                    <?php $timeline = $db->query("select * from timeline where timeline_id='2'")->fetch(); ?>
                    <div class="timelineDiv row g-0 justify-content-md-around justify-content-end my-lg-5 my-4">
                        <div class="col-9 col-md-5 pe-md-3 pe-lg-0 order-1 order-md-3 py-4 date">
                            <time><?php echo $timeline["date"]; ?></time>
                        </div>
                        <div class="col-3 col-sm-1 order-2 text-md-center timelineIcons">
                            <ion-icon class="timelineIcon" name="book-outline"></ion-icon>
                        </div>
                        <div class="order-3 order-md-1 col-9 col-md-5 ms-md-4 ms-lg-0 bg-white shadow-lg" >
                            <h3 class="text-light"><?php echo $timeline["head"]; ?></h3>
                            <p><?php echo $timeline["body"]; ?></p>
                        </div>
                    </div>

                    <?php $timeline = $db->query("select * from timeline where timeline_id='3'")->fetch(); ?>
                    <div class="timelineDiv row g-0 justify-content-md-around justify-content-end ">
                        <div class="col-9 col-md-5 ps-md-3 ps-lg-0 order-1 order-md-3 py-4 date">
                            <time><?php echo $timeline["date"]; ?></time>
                        </div>
                        <div class="col-3 col-sm-1 order-2 text-md-center timelineIcons">
                            <ion-icon class="timelineIcon" name="medkit-outline"></ion-icon>
                        </div>
                        <div class="col-9 col-md-5 me-md-4 me-lg-0 order-3 order-md-1 bg-white shadow-lg" >
                            <h3 class="text-light"><?php echo $timeline["head"]; ?></h3>
                            <p><?php echo $timeline["body"]; ?></p>
                        </div>
                    </div>

                    <?php $timeline = $db->query("select * from timeline where timeline_id='4'")->fetch(); ?>
                    <div class="timelineDiv row g-0 justify-content-md-around justify-content-end my-lg-5 my-4">
                        <div class="col-9 col-md-5 pe-md-3 pe-lg-0 order-1 order-md-3 py-4 date">
                            <time><?php echo $timeline["date"]; ?></time>
                        </div>
                        <div class="col-3 col-sm-1 order-2 text-md-center timelineIcons">
                            <ion-icon class="timelineIcon" name="globe-outline"></ion-icon>
                        </div>
                        <div class="order-3 order-md-1 col-9 col-md-5 ms-md-4 ms-lg-0 bg-white shadow-lg" >
                            <h3 class="text-light"><?php echo $timeline["head"]; ?></h3>
                            <p><?php echo $timeline["body"]; ?></p>
                        </div>
                    </div>

                    <?php $timeline = $db->query("select * from timeline where timeline_id='5'")->fetch(); ?>
                    <div class="timelineDiv row g-0 justify-content-md-around justify-content-end">
                        <div class="col-9 col-md-5 ps-md-3 ps-lg-0 order-1 order-md-3 py-4 date">
                            <time><?php echo $timeline["date"]; ?></time>
                        </div>
                        <div class="col-3 col-sm-1 order-2 text-md-center timelineIcons">
                            <ion-icon class="timelineIcon" name="person-outline"></ion-icon>
                        </div>
                        <div class="col-9 col-md-5 me-md-4 me-lg-0 order-3 order-md-1 bg-white shadow-lg" >
                            <h3 class="text-light"><?php echo $timeline["head"]; ?></h3>
                            <p><?php echo $timeline["body"]; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about" id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-12">

                <?php $patients = $db->query("select * from patients where id='1'")->fetch(); ?>
                    <h1 class="text-center"><?php echo $patients["title"]; ?></h1>
                    <div class="owl-carousel patient mt-5">
                        <div class="comment d-flex flex-wrap align-items-center rounded">
                            <div class="stars">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star-outline"></ion-icon>
                            </div>
                            <p class="text-primary d-block my-2 w-100"><strong><?php echo $patients["head"]; ?></strong></p>
                            <p class="reviews-text w-100"><?php echo $patients["body"]; ?></p>
                            <img class="reviews-image mb-4" src="images/beautiful-woman-face-portrait-brown-background.jpeg">
                            <figcaption class="ms-4">
                                <strong><?php echo $patients["person"]; ?></strong>
                                <span><?php echo $patients["state"]; ?></span>
                            </figcaption>
                        </div>

                        <div class="comment d-flex flex-wrap align-items-center rounded">
                            <div class="stars">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star-outline"></ion-icon>
                            </div>
                            <?php $patients = $db->query("select * from patients where id='2'")->fetch(); ?>
                            <p class="text-primary d-block my-2 w-100"><strong><?php echo $patients["head"]; ?></strong></p>
                            <p class="reviews-text w-100"><?php echo $patients["body"]; ?></p>
                            <img class="reviews-image mb-4" src="images/senior-man-wearing-white-face-mask-covid-19-campaign-with-design-space.jpeg">
                            <figcaption class="ms-4">
                                <strong><?php echo $patients["person"]; ?></strong>
                                <span><?php echo $patients["state"]; ?></span>
                            </figcaption>
                        </div>

                        <div class="comment d-flex flex-wrap align-items-center rounded">
                            <div class="stars">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                            </div>
                            <?php $patients = $db->query("select * from patients where id='3'")->fetch(); ?>
                            <p class="text-primary d-block my-2 w-100"><strong><?php echo $patients["head"]; ?></strong></p>
                            <p class="reviews-text w-100"><?php echo $patients["body"]; ?></p>
                            <img class="reviews-image mb-4" src="images/portrait-british-woman.jpeg">
                            <figcaption class="ms-4">
                                <strong><?php echo $patients["person"]; ?></strong>
                                <span><?php echo $patients["state"]; ?></span>
                            </figcaption>
                        </div>

                        <div class="comment d-flex flex-wrap align-items-center rounded">
                            <div class="stars">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star-outline"></ion-icon>
                                <ion-icon name="star-outline"></ion-icon>
                            </div>
                            <?php $patients = $db->query("select * from patients where id='4'")->fetch(); ?>
                            <p class="text-primary d-block my-2 w-100"><strong><?php echo $patients["head"]; ?></strong></p>
                            <p class="reviews-text w-100"><?php echo $patients["body"]; ?></p>
                            <img class="reviews-image mb-4" src="images/woman-wearing-mask-face-closeup-covid-19-green-background.jpeg">
                            <figcaption class="ms-4">
                                <strong><?php echo $patients["person"]; ?></strong>
                                <span><?php echo $patients["state"]; ?></span>
                            </figcaption>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-3" id="booking">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto">
                    <div class="booking"> 
                    <?php $booking = $db->query("select * from booking where id='1'")->fetch(); ?>
                        <h1 class="text-center mb-lg-4 mb-2"><?php echo $booking["title"]; ?></h1>
                        <form role="form" action="/MedicCare/actions/contact.php" method="post">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Full name" required>
                                </div>
                                <div class="col-lg-6">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email address" required>
                                </div>
                                <div class="col-lg-6">
                                    <input type="telephone" name="telephone" id="phone" class="form-control" placeholder="Phone: 123-456-7890">
                                </div>
                                <div class="col-lg-6">
                                    <input type="date" name="date" id="date" class="form-control">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control" name="message" id="message" rows="5" placeholder="Additional Message"></textarea>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 mb-4 mx-auto">
                                    <input type="hidden" name="send" value="1"/>
                                    <input class="form-control" type="submit" id="button" value="Book Now">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer about" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 me-auto">
                <?php $hours = $db->query("select * from hours where id='1'")->fetch(); ?>
                    <h4 class="mb-3"><?php echo $hours["title"]; ?></h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex"><?php echo $hours["day"]; ?></li>
                        <?php $hours = $db->query("select * from hours where id='2'")->fetch(); ?>
                        <li class="list-group-item d-flex"><?php echo $hours["day"]; ?>
                            <span><?php echo $hours["hour"]; ?></span>
                        </li>
                        <?php $hours = $db->query("select * from hours where id='3'")->fetch(); ?>
                        <li class="list-group-item d-flex"><?php echo $hours["day"]; ?>
                            <span><?php echo $hours["hour"]; ?></span>
                        </li>
                    </ul>
                </div>
                <?php $clinic = $db->query("select * from clinic where id='1'")->fetch(); ?>
                <div class="col-md-6 col-lg-2 my-4 my-lg-0">
                    <h4 class="mb-3"><?php echo $clinic["title"]; ?></h4>
                    <p><a href="mailto:hello@company.com"><?php echo $clinic["url"]; ?></a></p>
                    <p><?php echo $clinic["address"]; ?></p>
                </div>
                <div class="col-md-6 col-lg-3  ms-auto">
                <?php $socials = $db->query("select * from socials where id='1'")->fetch(); ?>
                    <h4 class="mb-3"><?php echo $socials["title"]; ?></h4>
                    <a class="socialIcon me-3" href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                    <a class="socialIcon me-3" href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                    <a class="socialIcon me-3" href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                    <a class="socialIcon" href="#"><ion-icon name="logo-youtube"></ion-icon></a> 
                    <div>
                        <p class="copyText">
                            <?php echo $socials["head"]; ?><br><br><?php echo $socials["body"]; ?><a href="https://templatemo.com" target="_parent"><?php echo $socials["url"]; ?></a>
                        </p>
                        <?php $socials = $db->query("select * from socials where id='2'")->fetch(); ?>
                        <P class="copyText">
                            <?php echo $socials["body"]; ?><a href="https://themewagon.com" target="_parent"><?php echo $socials["url"]; ?></a>
                        </P>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/base.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/scrollspy.min.js"></script> 
    <script src="js/bootstrap.bundle.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
