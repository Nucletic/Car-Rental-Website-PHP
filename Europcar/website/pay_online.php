<?php
include('form_handlers/db_connect.php');
session_start();
if (!isset($_SESSION['form_filled'])) {
    header("location:mainpage.php");
}
if (!isset($_SESSION['choosed_car'])) {
    header("location:mainpage.php");
}
if (!isset($_SESSION['user_email'])) {
    header("location:mainpage.php");
}
if (!isset($_SESSION['user_id'])) {
    header("location:mainpage.php");
}
?>
<!-- HTML code starts here -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <nav>
        <div class="ocih">
            <div class="ocih2">
                <a href="checkinonline.php">ONLINE CHECK-IN</a>
                <a href="help.php">HELP</a>
            </div>
        </div>
        <div class="main_nav">
            <div class="main_nav2">
                <div class="logo">
                    <a href="mainpage.php"><img src="images/logo.png"></a>
                </div>
                <div class="navlinks">
                    <div class="navlink_dropdown">
                        <button class="navlink_dropdown_btn">Special offers</button>
                        <div class="navlink_dropdown_content">
                            <div class="row">
                                <div class="column">
                                    <img src="images/top_ofertas.jpg" class="speical_offer_img">
                                </div>
                                <div class="column">
                                    <h3>More popular</h3>
                                    <a href="2_days_free.php">2 days free</a>
                                    <a href="1_day_free.php">1 day free</a>
                                    <a href="20_discount_.php">20% discount booking in advance</a>
                                </div>
                                <div class="column">
                                    <h3>europcar services</h3>
                                    <a href="free_night.php">free night</a>
                                </div>
                                <div class="column">
                                    <h3>New</h3>
                                    <a href="car_with_debit.php">Rent a car with a debit card</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navlink_dropdown">
                        <button class="navlink_dropdown_btn">Fleet</button>
                        <div class="navlink_dropdown_content">
                            <div class="row">
                                <div class="column">
                                    <img src="images/top_flota_1.jpg" class="fleet_img" width="225">
                                    <a href="all_cars.php" class="fleet">ALL<br>CARS &#x27A4;</a>
                                </div>
                                <div class="column">
                                    <img src="images/top_flota_2.jpg" class="fleet_img" width="225">
                                    <a href="vans_and_trucks.php" class="fleet">VANS<br>TRUCKS &#x27A4;</a>
                                </div>
                                <div class="column">
                                    <img src="images/top_flota_3.jpg" class="fleet_img" width="225">
                                    <a href="luxury.php" class="fleet">LUXURY &#x27A4;</a>
                                </div>
                                <div class="column">
                                    <img src="images/top_flota_4.jpg" class="fleet_img" width="225">
                                    <a href="small_and_med.php" class="fleet">SMALL<br>& MEDIUM &#x27A4;</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="normal_nav_link">
                        <a href="car_rental_mexico.php">Products</a>
                    </div>
                    <div class="navlink_dropdown">
                        <button class="navlink_dropdown_btn">Offices</button>
                        <div class="navlink_dropdown_content">
                            <div class="row">
                                <div class="column">
                                    <img src="images/top_oficinas_1.jpg" class="office_img">
                                </div>
                                <div class="column">
                                    <h3>Car rental in Mexico</h3>
                                    <a href="rent_merida.php">Merida</a>
                                    <a href="rent_mexico.php">Mexico</a>
                                    <a href="rent_monterrey.php">Monterrey</a>
                                </div>
                                <div class="column office">
                                    <a href="rent_cancum.php">cancun</a>
                                    <a href="rent_guadalajara.php">Guadalajara</a>
                                </div>
                                <div class="column office">
                                    <a href="rent_tijuana.php">Tijuana</a>
                                </div>
                                <div class="column office office_see_more_btn">
                                    <a href="rent_all_cities.php">See more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="normal_nav_link2">
                        <a href="loyal.php">Get into ></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile_nav">
            <i class="fa fa-bars" id="open_nav_btn"></i>
            <div class="mobile_nav_main" id="mobile_nav_main">
                <img src="images/logo.png" id="mobile_logo">
                <i class="fa fa-times" id="close_nav_btn"></i>
                <ul>
                    <li>
                        <button class="drop_mobile_nav_btn" id="drop_mobile_nav_btn1">SPEICAL OFFERS
                            <i class="fa fa-chevron-down fa_chevron_down" id="fa_chevron_down1"></i></button>
                        <div class="drop_mobile_nav" id="drop_mobile_nav1">
                            <ul>
                                <h4>More Polular</h4>
                                <a href="2_days_free.php">2 days free</a>
                                <a href="1_day_free.php">1 days free</a>
                                <a href="20_discount_.php">20% discount booking in advance</a>
                                <h4>Europcar services</h4>
                                <a href="free_night.php">Free night</a>
                                <h4>New</h4>
                                <a href="car_with_debit">Rent a car with a debit card</a>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button class="drop_mobile_nav_btn" id="drop_mobile_nav_btn2">FLEET
                            <i class="fa fa-chevron-down fa_chevron_down" id="fa_chevron_down2"></i></button>
                        <div class="drop_mobile_nav" id="drop_mobile_nav2">
                            <ul>
                                <a href="all_cars.php">All Cars</a>
                                <a href="vans_and_trucks.php">Vans & trucks</a>
                                <a href="luxury.php">Luxury</a>
                                <a href="small_and_med.php">Small & medium</a>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="car_rental_mexico.php" class="nor_mob_nav_links">PRODUCTS</a>
                    </li>
                    <li>
                        <button class="drop_mobile_nav_btn" id="drop_mobile_nav_btn3">OFFICES
                            <i class="fa fa-chevron-down fa_chevron_down" id="fa_chevron_down3"></i></button>
                        <div class="drop_mobile_nav" id="drop_mobile_nav3">
                            <ul>
                                <h4>Car Rental in Mexico</h4>
                                <a href="rent_cancum.php">cancun</a>
                                <a href="rent_guadalajara.php">Guadalajara</a>
                                <a href="rent_monterrey.php">Monterey</a>
                                <a href="rent_mexico.php">Mexico</a>
                                <a href="rent_tijuana.php">Tijuana</a>
                                <a href="rent_merida.php">Merida</a>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="loyal.php" class="get_into_mob_link">Get into ></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="doro">
        <div class="cho_doro">
            <div class="book_off_info">
                <p><?php echo $_SESSION['pickup_office'] . " " . $_SESSION['pickup_date'] . " " . $_SESSION['pickup_time']; ?></p>
                <p><?php echo $_SESSION['return_office'] . " " . $_SESSION['return_date'] . " " . $_SESSION['return_time']; ?></p>
            </div>
        </div>
    </div>
    <footer>
        <div class="mbln">
            <div class="numb_er">
                <h2>800 201 2084 / 800 436 0310</h2>
            </div>
            <div class="mon_wit_int">
                <h4>months without interest</h4>
            </div>
        </div>
        <div class="mbalm">
            <div class="mbalm_main">
                <h4>More information</h4>
                <ul>
                    <p><a href="rent_mexico.php">Find an office</a></p>
                    <p><a href="pre_plus_pack.php">Premium plus package</a></p>
                    <p><a href="loyal.php">Loyalty and rewards program</a></p>
                    <p><a href="mexico_rent_extras.php">Extra services</a></p>
                    <p><a href="corpo_car_rental.php">Car rental for business</a></p>
                </ul>
            </div>
            <div class="mbalm_main">
                <h4>Vehicles</h4>
                <ul>
                    <p><a href="small_and_med.php">Small and medium</a></p>
                    <p><a href="luxury.php">Luxury</a></p>
                    <p><a href="vans_and_trucks.php">Vans and Trucks</a></p>
                </ul>
            </div>
            <div class="mbalm_main">
                <h4>Europcar Speical deals</h4>
                <ul>
                    <p><a href="car_with_debit.php">Rent a car with debit card</a></p>
                    <p><a href="2_days_free.php">2 Day free</a></p>
                </ul>
            </div>
            <div class="mbalm_main">
                <h4>Help</h4>
                <ul>
                    <p><a href="contact.php">Customer service</a></p>
                    <p><a href="contact.php">Contact Us</a></p>
                </ul>
            </div>
        </div>
        <div class="news_letter">
            <h4>Subscribe to our Newsletter</h4>
            <form action="">
                <input type="text" placeholder="Full name">
                <input type="text" placeholder="Email">
                <label for="suon_pr_po"><input type="checkbox" id="suon_pr_po">
                    <p>I have read and accept the <a href="">Privacy Policy</a>.</p>
                </label>
                <input type="submit" id="news_submit" value="to subscribe">
            </form>
        </div>
        <div class="pri_cook">
            <div class="pri_cook_main_1">
                <p class="pri_cook_main_link_1"><a href="">Privacy and cookie policy</a></p>
                <p class="pri_cook_main_link_2">Web design and development by
                    <a href="http://yatiglobalsolutions.com/">www.yatiglobalsolutions.com</a>
                </p>
            </div>
            <div class="pri_cook_main_2">
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
                <a href=""><i class="fa fa-instagram"></i></a>
                <a href=""><i class="fa fa-youtube-play"></i></a>
            </div>
        </div>
    </footer>
    <!-- Scripts -->
    <script>
        var close_nav_btn = document.getElementById("close_nav_btn");
        var open_nav_btn = document.getElementById("open_nav_btn");
        var mobile_nav_main = document.getElementById("mobile_nav_main");
        open_nav_btn.addEventListener('click', () => {
            mobile_nav_main.style.right = "0%";
        })
        close_nav_btn.addEventListener('click', () => {
            mobile_nav_main.style.right = "-100%";
        })
        var drop_mobile_nav_btn1 = document.getElementById("drop_mobile_nav_btn1");
        var drop_mobile_nav_btn2 = document.getElementById("drop_mobile_nav_btn2");
        var drop_mobile_nav_btn3 = document.getElementById("drop_mobile_nav_btn3");
        var drop_mobile_nav1 = document.getElementById("drop_mobile_nav1");
        var drop_mobile_nav2 = document.getElementById("drop_mobile_nav2");
        var drop_mobile_nav3 = document.getElementById("drop_mobile_nav3");
        var fa_chevron_down1 = document.getElementById("fa_chevron_down1");
        var fa_chevron_down2 = document.getElementById("fa_chevron_down2");
        var fa_chevron_down3 = document.getElementById("fa_chevron_down3");
        drop_mobile_nav_btn1.addEventListener('click', () => {
            drop_mobile_nav1.classList.toggle("openspemenu1");
            fa_chevron_down1.classList.toggle("rotatechevronmenu1");
        })
        drop_mobile_nav_btn2.addEventListener('click', () => {
            drop_mobile_nav2.classList.toggle("openspemenu2");
            fa_chevron_down2.classList.toggle("rotatechevronmenu1");
        })
        drop_mobile_nav_btn3.addEventListener('click', () => {
            drop_mobile_nav3.classList.toggle("openspemenu3");
            fa_chevron_down3.classList.toggle("rotatechevronmenu1");
        })
    </script>
</body>

</html>