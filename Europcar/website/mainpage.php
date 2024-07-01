<?php
include('form_handlers/db_connect.php');
session_start();
$today = date("Y-m-d");
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
    <nav id="main_page_nav">
        <div id="left_main_page_nav">
            <ul>
                <li>
                    <a href="mainpage.php">
                        <img src="images/logo_short.png" id="main_page_menu_logo">
                    </a>
                </li>
                <li>
                    <?php
                    if (isset($_SESSION["user_name"])) {
                        echo '<a href="form_handlers/logout.php">Log out' . '<span style="color:#009900;">' . ' ' . $_SESSION["user_name"] . '</span>' . '</a>';
                    } else {
                        echo '<a href="loyal.php">Log into your account</a>';
                    }
                    ?>
                </li>
                <li>
                    <a href="contact.php">Check-In online</a>
                </li>
                <li>
                    <a href="JavaScript:void(0)" id="speical_offer_main_page_btn">Speical deals<img src="images/Icon-arrow-rightShot.svg"></a>
                </li>
                <li>
                    <a href="JavaScript:void(0)" id="see_our_office_main_page_btn">See our offices
                        <img src="images/Icon-arrow-rightShot.svg"></a>
                </li>
                <li>
                    <a href="JavaScript:void(0)" id="vehicles_main_page_btn">Vehicles<img src="images/Icon-arrow-rightShot.svg"></a>
                </li>
                <li>
                    <a href="JavaScript:void(0)" id="services_main_page_btn">Services<img src="images/Icon-arrow-rightShot.svg"></a>
                </li>
                <li id="new_letter_sub_main_page_nav">
                    <a href="">
                        <img src="images/Icon_feather-mail.svg">Sign up to Newsletter</a>
                </li>
            </ul>
        </div>
        <div id="right_main_page_nav">
            <div id="main_page_menu_close_btn">
                <img src="images/Icon_close.svg">
            </div>
            <div id="speical_offers_main_page">
                <div class="right_main_page_nav_links">
                    <h2>More popular</h2>
                    <a href="2_days_free.php">2 days free</a>
                    <a href="1_day_free.php">1 day free</a>
                    <a href="20_discount_.php">20% discount by booking in advance</a>
                </div>
                <div class="right_main_page_nav_links">
                    <h2>News</h2>
                    <a href="car_with_debit.php">Rent a car with debit card</a>
                </div>
                <div class="right_main_page_nav_links">
                    <h2>Bussiness cities</h2>
                    <a href="free_night.php">Free night</a>
                    <a href="">Up tp 50% discount on drop off</a>
                </div>
            </div>
            <div id="See_offices_main_page">
                <div class="right_main_page_nav_links">
                    <h2>Popular cities</h2>
                    <a href="rent_cancum.php">Cancun</a>
                    <a href="rent_guadalajara.php">Guadalajara</a>
                    <a href="rent_merida.php">Merida</a>
                    <a href="rent_mexico.php">Mexico City</a>
                    <a href="rent_monterrey.php">Monterrey</a>
                    <a href="rent_tijuana.php">Tijuana</a>
                    <a href="car_rental_mexico.php" class="main_page_all_cities_btn">All Cities</a>
                </div>
            </div>
            <div id="vehicles_main_page">
                <div class="vehicles_main_page_title">
                    <h2>A constantly renewed fleet</h2>
                </div>
                <div class="right_main_page_nav_links">
                    <div class="car_fleet_main_page">
                        <a href="small_and_med.php">
                            <h3>Economic</h3>
                            <img src="images/fleet_1.png" width="165px">
                        </a>
                    </div>
                    <div class="car_fleet_main_page">
                        <a href="luxury.php">
                            <h3>Luxury</h3>
                            <img src="images/fleet_2.png" width="200px">
                        </a>
                    </div>
                    <div class="car_fleet_main_page">
                        <a href="vans_and_trucks.php">
                            <h3>Vans</h3>
                            <img src="images/fleet_3.png" width="200px">
                        </a>
                    </div>
                    <div class="car_fleet_main_page">
                        <a href="all_cars.php">
                            <h3>All cars</h3>
                            <img src="images/fleet_4.png" width="165px">
                        </a>
                    </div>
                </div>
            </div>
            <div id="services_main_page">
                <div class="right_main_page_nav_links">
                    <h2>Europcar extras</h2>
                    <a href="pre_plus_pack.php">Premium plus package</a>
                    <a href="corpo_car_rental.php">Car rental for business</a>
                    <a href="auto_rent_mexico.php">Autorenting</a>
                    <a href="substi_car_mexico.php">Subsitute car</a>
                    <a href="mexico_rent_extras.php">Extra services</a>
                </div>
                <div class="right_main_page_nav_links">
                    <h2>Europcar services</h2>
                    <a href="loyal.php">Loyalty and rewards program</a>
                    <a href="checkinonline.php">Check-In Online</a>
                </div>
            </div>
        </div>
    </nav>
    <nav id="main_page_mobile_nav">
        <div id="menu_close_mobile_btn">
            <img src="images/Icon_close.svg">
        </div>
        <div class="mobile_nav_main_page_link_d">
            <ul>
                <li id="main_page_mobile_nav_logo">
                    <a href="mainpage.php">
                        <img src="images/logo_short.png" id="main_page_menu_logo">
                    </a>
                </li>
                <li>
                    <a href="loyal.php" class="main_page_mobile_nav_btn">Log into your account</a>
                </li>
                <li>
                    <a href="checkinonline" class="main_page_mobile_nav_btn">Check-In online</a>
                </li>
                <li>
                    <a href="corpo_car_rental.php" class="main_page_mobile_nav_btn">Services</a>
                </li>
                <li id="main_page_mobile_nav_speical_offer">
                    <a href="JavaScript:void(0)" class="main_page_mobile_nav_btn">Speical deals
                        <i id="fa_chevron_speical_offer_mobile_nav" class="fa fa-chevron-up"></i></a>
                    <ul class="mobile_nav_dropdown_open_unorder">
                        <li>
                            <h3>More polupar</h3>
                        </li>
                        <li>
                            <a href="2_days_free.php">2 days free</a>
                        </li>
                        <li>
                            <a href="1_day_free.php">1 days free</a>
                        </li>
                        <li>
                            <a href="20_discount_.php">20% discount by booking in advance</a>
                        </li>
                    </ul>
                    <ul class="mobile_nav_dropdown_open_unorder">
                        <li>
                            <h3>News</h3>
                        </li>
                        <li>
                            <a href="car_with_debit.php">Rent a car with debit car</a>
                        </li>
                    </ul>
                    <ul class="mobile_nav_dropdown_open_unorder">
                        <li>
                            <h3>Business cities</h3>
                        </li>
                        <li>
                            <a href="free_night.php">Free night</a>
                        </li>
                        <li>
                            <a href="">Up to 50% discount on drop off</a>
                        </li>
                    </ul>
                </li>
                <li id="main_page_mobile_nav_see_offices">
                    <a href="JavaScript:void(0)" class="main_page_mobile_nav_btn">See our offices
                        <i id="fa_chevron_see_offices_mobile_nav" class="fa fa-chevron-up"></i></a>
                    <ul class="mobile_nav_dropdown_open_unorder">
                        <li>
                            <h3>Popular cities</h3>
                        </li>
                        <li>
                            <a href="rent_cancum.php">Cancun</a>
                        </li>
                        <li>
                            <a href="rent_guadalajara.php">Guadalajara</a>
                        </li>
                        <li>
                            <a href="rent_merida.php">Merida</a>
                        </li>
                        <li>
                            <a href="rent_mexico.php">Mexico City</a>
                        </li>
                        <li>
                            <a href="rent_monterrey.php">Monterrey</a>
                        </li>
                        <li>
                            <a href="rent_tijuana.php">Tijuana</a>
                        </li>
                        <li>
                            <a href="rent_all_cities.php" class="main_page_all_cities_btn">All Cities</a>
                        </li>
                    </ul>
                </li>
                <li id="main_page_mobile_nav_vehicles">
                    <a href="JavaScript:void(0)" class="main_page_mobile_nav_btn">Vehicles
                        <i id="fa_chevron_vehicles_nav" class="fa fa-chevron-up"></i></a>
                    <ul class="mobile_nav_dropdown_open_unorder">
                        <li>
                            <h3>A constantly renewed fleet</h3>
                        </li>
                        <li>
                            <a href="small_and_med.php">Economic</a>
                        </li>
                        <li>
                            <a href="luxury.php">Luxury</a>
                        </li>
                        <li>
                            <a href="vans_and_trucks.php">Vans</a>
                        </li>
                        <li>
                            <a href="all_cars.php">All cars</a>
                        </li>
                    </ul>
                </li>
                <li id="main_page_mobile_nav_news_letter">
                    <a href="">
                        <img src="images/Icon_feather-mail.svg">Sign up to Newsletter</a>
                </li>
            </ul>
        </div>
    </nav>
    <div id="header">
        <div id="main_header">
            <div id="header_top">
                <div id="left_header">
                    <img src="images/logo_short.png">
                </div>
                <div id="right_header">
                    <a href="contact.php"><i class="fa fa-info-circle"></i>Help</a>
                    <a href="JavaScript:void(0)" id="main_page_menu_open_btn">
                        <img src="images/button_menu.png">
                        Menu
                    </a>
                </div>
            </div>
            <div id="header_body">
                <div class="main_page_title">
                    <h1>
                        Are you looking for a rental car?
                        <br>This is the right place
                    </h1>
                </div>
                <form action="form_handlers/book_car.php" method="POST" onsubmit="return formvalidate()" id="booking">
                    <div id="cytov">
                        <div class="cytov_ttl">
                            <h3>Choose your type of vehicle</h3>
                        </div>
                        <div class="cytov_bd">
                            <label for="cytov_check" class="cytov_label">
                                <input type="radio" name="car_type" value="All Cars" id="cytov_check">
                                <span class="checkname">
                                    <i class="fa fa-car"></i>
                                    All
                                </span>
                            </label>
                            <label for="cytov_check_2" class="cytov_label">
                                <input type="radio" name="car_type" value="Small & Medium" id="cytov_check_2">
                                <span class="checkname">
                                    <i class="fa fa-balance-scale"></i>
                                    Small & Medium
                                </span>
                            </label>
                            <label for="cytov_check_3" class="cytov_label">
                                <input type="radio" name="car_type" value="Vans & Trucks" id="cytov_check_3">
                                <span class="checkname">
                                    <i class="fa fa-truck"></i>
                                    Vans & Trucks
                                </span>
                            </label>
                            <label for="cytov_check_4" class="cytov_label">
                                <input type="radio" name="car_type" value="Luxury" id="cytov_check_4">
                                <span class="checkname">
                                    <i class="fa fa-diamond"></i>
                                    Luxury
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="pic_ret_uro">
                        <div class="pic_ret_uro_main_1">
                            <div class="pick_ret_uro_title">
                                <h3>Pick up & Return office</h3>
                                <label for="same_office_check" id="same_office_check_label">
                                    <input type="checkbox" id="same_office_check">
                                    Same return office
                                </label>
                            </div>
                            <div class="pic_ret_uro_main_1_d">
                                <label for="first_pickup_office" id="first_pickup_office_label">
                                    <img src="images/punto_ubicacion.svg">
                                    <select name="pickup_office" id="first_pickup_office">
                                        <option disabled selected>
                                            Pick-up Office
                                        </option>
                                        <option value="Indira Gandhi International Airport, Delhi">
                                            <p>Indira Gandhi International Airport, Delhi</p>
                                        </option>
                                        <option value="Netaji Subhash Chandra Bose International Airport, Kolkata">
                                            <p>Netaji Subhash Chandra Bose International Airport, Kolkata</p>
                                        </option>
                                        <option value="Chennai International Airport, Chennai">
                                            <p>Chennai International Airport, Chennai</p>
                                        </option>
                                        <option value="Chattrapati Shivaji International Airport, Mumbai">
                                            <p>Chattrapati Shivaji International Airport, Mumbai</p>
                                        </option>
                                        <option value="John F. Kennedy International Airport, New York">
                                            <p>John F. Kennedy International Airport, New York</p>
                                        </option>
                                        <option value="Los Angeles International Airport, Los Angeles">
                                            <p>Los Angeles International Airport, Los Angeles</p>
                                        </option>
                                        <option value="Toronto Pearson International Airport, Toronto">
                                            <p>Toronto Pearson International Airport, Toronto</p>
                                        </option>
                                        <option value="Billy Bishop Toronto City Airport, Toronto">
                                            <p>Billy Bishop Toronto City Airport, Toronto</p>
                                        </option>
                                        <option value="John C. Munro Hamilton International Airport">
                                            <p>John C. Munro Hamilton International Airport, Toronto</p>
                                        </option>
                                        <option value="Downsview Airport, Toronto">
                                            <p>Downsview Airport, Toronto</p>
                                        </option>
                                        <option value="Oshawa Executive Airport, Toronto">
                                            <p>Oshawa Executive Airport, Toronto</p>
                                        </option>
                                        <option value="Burlington Executive Airport, Toronto">
                                            <p>Burlington Executive Airport, Toronto</p>
                                        </option>
                                        <option value="Button ville Municipal Airport, Toronto">
                                            <p>Buttonville Municipal Airport, Toronto</p>
                                        </option>
                                        <option value="Markham Airport, Toronto">
                                            <p>Markham Airport, Toronto</p>
                                        </option>
                                        <option value="Mexico City International Airport, Mexico">
                                            <p>Mexico City International Airport, Mexico</p>
                                        </option>
                                    </select>
                                </label>
                                <label for="second_pickup_office" id="second_pickup_office_label">
                                    <img src="images/punto_ubicacion.svg">
                                    <select name="return_office" id="second_pickup_office">
                                        <option disabled selected>
                                            Return Office
                                        </option>
                                        <option value="Indira Gandhi International Airport, Delhi">
                                            <p>Indira Gandhi International Airport, Delhi</p>
                                        </option>
                                        <option value="Netaji Subhash Chandra Bose International Airport, Kolkata">
                                            <p>Netaji Subhash Chandra Bose International Airport, Kolkata</p>
                                        </option>
                                        <option value="Chennai International Airport, Chennai">
                                            <p>Chennai International Airport, Chennai</p>
                                        </option>
                                        <option value="Chattrapati Shivaji International Airport, Mumbai">
                                            <p>Chattrapati Shivaji International Airport, Mumbai</p>
                                        </option>
                                        <option value="John F. Kennedy International Airport, New York">
                                            <p>John F. Kennedy International Airport, New York</p>
                                        </option>
                                        <option value="Los Angeles International Airport, Los Angeles">
                                            <p>Los Angeles International Airport, Los Angeles</p>
                                        </option>
                                        <option value="Toronto Pearson International Airport, Toronto">
                                            <p>Toronto Pearson International Airport, Toronto</p>
                                        </option>
                                        <option value="Billy Bishop Toronto City Airport, Toronto">
                                            <p>Billy Bishop Toronto City Airport, Toronto</p>
                                        </option>
                                        <option value="John C. Munro Hamilton International Airport">
                                            <p>John C. Munro Hamilton International Airport, Toronto</p>
                                        </option>
                                        <option value="Downsview Airport, Toronto">
                                            <p>Downsview Airport, Toronto</p>
                                        </option>
                                        <option value="Oshawa Executive Airport, Toronto">
                                            <p>Oshawa Executive Airport, Toronto</p>
                                        </option>
                                        <option value="Burlington Executive Airport, Toronto">
                                            <p>Burlington Executive Airport, Toronto</p>
                                        </option>
                                        <option value="Button ville Municipal Airport, Toronto">
                                            <p>Buttonville Municipal Airport, Toronto</p>
                                        </option>
                                        <option value="Markham Airport, Toronto">
                                            <p>Markham Airport, Toronto</p>
                                        </option>
                                        <option value="Mexico City International Airport, Mexico">
                                            <p>Mexico City International Airport, Mexico</p>
                                        </option>
                                    </select>
                                </label>
                            </div>
                            <b><span class="formerror" style="color:red; font-size:12px; position:absolute;"></span></b>
                        </div>
                        <div class="pick_up_date">
                            <div class="pick_ret_uro_title">
                                <h3>Pick up date & Time</h3>
                            </div>
                            <div class="pick_ret_uro_time_label">
                                <label for="pick_up_date_input" id="pick_up_date_label">
                                    <img src="images/Icon_calendario.svg">
                                    <input type="date" name="pick_up_date" id="pick_up_date_input" value="<?php echo $today; ?>">
                                </label>
                                <label for="pick_up_time_input" id="pick_up_time_label">
                                    <select name="pick_up_time" id="pick_up_time_input">
                                        <option value="12:15 AM">12:15 AM</option>
                                        <option value="12:30 AM">12:30 AM</option>
                                        <option value="12:45 AM">12:45 AM</option>
                                        <option value="01:00 AM">01:00 AM</option>
                                        <option value="01:15 AM">01:15 AM</option>
                                        <option value="01:30 AM">01:30 AM</option>
                                        <option value="01:45 AM">01:45 AM</option>
                                        <option value="02:00 AM">02:00 AM</option>
                                        <option value="02:15 AM">02:15 AM</option>
                                        <option value="02:30 AM">02:30 AM</option>
                                        <option value="02:45 AM">02:45 AM</option>
                                        <option value="03:00 AM">03:00 AM</option>
                                        <option value="03:15 AM">03:15 AM</option>
                                        <option value="03:30 AM">03:30 AM</option>
                                        <option value="03:45 AM">03:45 AM</option>
                                        <option value="04:00 AM">04:00 AM</option>
                                        <option value="04:15 AM">04:15 AM</option>
                                        <option value="04:30 AM">04:30 AM</option>
                                        <option value="04:45 AM">04:45 AM</option>
                                        <option value="05:00 AM">05:00 AM</option>
                                        <option value="05:15 AM">05:15 AM</option>
                                        <option value="05:30 AM">05:30 AM</option>
                                        <option value="05:45 AM">05:45 AM</option>
                                        <option value="06:00 AM">06:00 AM</option>
                                        <option value="06:15 AM">06:15 AM</option>
                                        <option value="06:30 AM">06:30 AM</option>
                                        <option value="06:45 AM">06:45 AM</option>
                                        <option value="07:00 AM">07:00 AM</option>
                                        <option value="07:15 AM">07:15 AM</option>
                                        <option value="07:30 AM">07:30 AM</option>
                                        <option value="07:45 AM">07:45 AM</option>
                                        <option value="08:00 AM">08:00 AM</option>
                                        <option value="08:15 AM">08:15 AM</option>
                                        <option value="08:45 AM">08:45 AM</option>
                                        <option value="09:00 AM">09:00 AM</option>
                                        <option value="09:15 AM">09:15 AM</option>
                                        <option value="09:30 AM">09:30 AM</option>
                                        <option value="09:45 AM">09:45 AM</option>
                                        <option value="10:00 AM">10:00 AM</option>
                                        <option value="10:15 AM">10:15 AM</option>
                                        <option value="10:30 AM">10:30 AM</option>
                                        <option value="10:45 AM">10:45 AM</option>
                                        <option value="11:00 AM">11:00 AM</option>
                                        <option value="11:15 AM">11:15 AM</option>
                                        <option value="11:30 AM">11:30 AM</option>
                                        <option value="11:45 AM">11:45 AM</option>
                                        <option value="12:00 PM">12:00 PM</option>
                                        <option value="12:15 PM">12:15 PM</option>
                                        <option value="12:30 PM">12:30 PM</option>
                                        <option value="12:45 PM">12:45 PM</option>
                                        <option value="01:00 PM">01:00 PM</option>
                                        <option value="01:15 PM">01:15 PM</option>
                                        <option value="01:30 PM">01:30 PM</option>
                                        <option value="01:45 PM">01:45 PM</option>
                                        <option value="02:00 PM">02:00 PM</option>
                                        <option value="02:15 PM">02:15 PM</option>
                                        <option value="02:30 PM">02:30 PM</option>
                                        <option value="02:45 PM">02:45 PM</option>
                                        <option value="03:00 PM">03:00 PM</option>
                                        <option value="03:15 PM">03:15 PM</option>
                                        <option value="03:30 PM">03:30 PM</option>
                                        <option value="03:45 PM">03:45 PM</option>
                                        <option value="04:00 PM">04:00 PM</option>
                                        <option value="04:15 PM">04:15 PM</option>
                                        <option value="04:30 PM">04:30 PM</option>
                                        <option value="04:45 PM">04:45 PM</option>
                                        <option value="05:00 PM">05:00 PM</option>
                                        <option value="05:15 PM">05:15 PM</option>
                                        <option value="05:30 PM">05:30 PM</option>
                                        <option value="05:45 PM">05:45 PM</option>
                                        <option value="06:00 PM">06:00 PM</option>
                                        <option value="06:15 PM">06:15 PM</option>
                                        <option value="06:30 PM">06:30 PM</option>
                                        <option value="06:45 PM">06:45 PM</option>
                                        <option value="07:00 PM">07:00 PM</option>
                                        <option value="07:15 PM">07:15 PM</option>
                                        <option value="07:30 PM">07:30 PM</option>
                                        <option value="07:45 PM">07:45 PM</option>
                                        <option value="08:00 PM">08:00 PM</option>
                                        <option value="08:15 PM">08:15 PM</option>
                                        <option value="08:30 PM">08:30 PM</option>
                                        <option value="08:45 PM">08:45 PM</option>
                                        <option value="09:00 PM">09:00 PM</option>
                                        <option value="09:15 PM">09:15 PM</option>
                                        <option value="09:30 PM">09:30 PM</option>
                                        <option value="09:45 PM">09:45 PM</option>
                                        <option value="10:00 PM">10:00 PM</option>
                                        <option value="10:15 PM">10:15 PM</option>
                                        <option value="10:30 PM">10:30 PM</option>
                                        <option value="10:45 PM">10:45 PM</option>
                                        <option value="11:00 PM">11:00 PM</option>
                                        <option value="11:15 PM">11:15 PM</option>
                                        <option value="11:30 PM">11:30 PM</option>
                                        <option value="11:45 PM">11:45 PM</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                        <div class="pick_up_date">
                            <div class="pick_ret_uro_title">
                                <h3>return up date & Time</h3>
                            </div>
                            <div class="pick_ret_uro_time_label">
                                <label for="return_up_date_input" id="return_up_date_label">
                                    <img src="images/Icon_calendario.svg">
                                    <input type="date" name="return_date" id="return_up_date_input" value="<?php echo $today; ?>">
                                </label>
                                <label for=" return_up_time_input" id="return_up_time_label">
                                    <select name="return_time" id="return_up_time_input">
                                        <option value="12:00 AM">12:00 AM</option>
                                        <option value="12:15 AM">12:15 AM</option>
                                        <option value="12:30 AM">12:30 AM</option>
                                        <option value="12:45 AM">12:45 AM</option>
                                        <option value="01:00 AM">01:00 AM</option>
                                        <option value="01:15 AM">01:15 AM</option>
                                        <option value="01:30 AM">01:30 AM</option>
                                        <option value="01:45 AM">01:45 AM</option>
                                        <option value="02:00 AM">02:00 AM</option>
                                        <option value="02:15 AM">02:15 AM</option>
                                        <option value="02:30 AM">02:30 AM</option>
                                        <option value="02:45 AM">02:45 AM</option>
                                        <option value="03:00 AM">03:00 AM</option>
                                        <option value="03:15 AM">03:15 AM</option>
                                        <option value="03:30 AM">03:30 AM</option>
                                        <option value="03:45 AM">03:45 AM</option>
                                        <option value="04:00 AM">04:00 AM</option>
                                        <option value="04:15 AM">04:15 AM</option>
                                        <option value="04:30 AM">04:30 AM</option>
                                        <option value="04:45 AM">04:45 AM</option>
                                        <option value="05:00 AM">05:00 AM</option>
                                        <option value="05:15 AM">05:15 AM</option>
                                        <option value="05:30 AM">05:30 AM</option>
                                        <option value="05:45 AM">05:45 AM</option>
                                        <option value="06:00 AM">06:00 AM</option>
                                        <option value="06:15 AM">06:15 AM</option>
                                        <option value="06:30 AM">06:30 AM</option>
                                        <option value="06:45 AM">06:45 AM</option>
                                        <option value="07:00 AM">07:00 AM</option>
                                        <option value="07:15 AM">07:15 AM</option>
                                        <option value="07:30 AM">07:30 AM</option>
                                        <option value="07:45 AM">07:45 AM</option>
                                        <option value="08:00 AM">08:00 AM</option>
                                        <option value="08:15 AM">08:15 AM</option>
                                        <option value="08:45 AM">08:45 AM</option>
                                        <option value="09:00 AM">09:00 AM</option>
                                        <option value="09:15 AM">09:15 AM</option>
                                        <option value="09:30 AM">09:30 AM</option>
                                        <option value="09:45 AM">09:45 AM</option>
                                        <option value="10:00 AM">10:00 AM</option>
                                        <option value="10:15 AM">10:15 AM</option>
                                        <option value="10:30 AM">10:30 AM</option>
                                        <option value="10:45 AM">10:45 AM</option>
                                        <option value="11:00 AM">11:00 AM</option>
                                        <option value="11:15 AM">11:15 AM</option>
                                        <option value="11:30 AM">11:30 AM</option>
                                        <option value="11:45 AM">11:45 AM</option>
                                        <option value="12:00 PM">12:00 PM</option>
                                        <option value="12:15 PM">12:15 PM</option>
                                        <option value="12:30 PM">12:30 PM</option>
                                        <option value="12:45 PM">12:45 PM</option>
                                        <option value="01:00 PM">01:00 PM</option>
                                        <option value="01:15 PM">01:15 PM</option>
                                        <option value="01:30 PM">01:30 PM</option>
                                        <option value="01:45 PM">01:45 PM</option>
                                        <option value="02:00 PM">02:00 PM</option>
                                        <option value="02:15 PM">02:15 PM</option>
                                        <option value="02:30 PM">02:30 PM</option>
                                        <option value="02:45 PM">02:45 PM</option>
                                        <option value="03:00 PM">03:00 PM</option>
                                        <option value="03:15 PM">03:15 PM</option>
                                        <option value="03:30 PM">03:30 PM</option>
                                        <option value="03:45 PM">03:45 PM</option>
                                        <option value="04:00 PM">04:00 PM</option>
                                        <option value="04:15 PM">04:15 PM</option>
                                        <option value="04:30 PM">04:30 PM</option>
                                        <option value="04:45 PM">04:45 PM</option>
                                        <option value="05:00 PM">05:00 PM</option>
                                        <option value="05:15 PM">05:15 PM</option>
                                        <option value="05:30 PM">05:30 PM</option>
                                        <option value="05:45 PM">05:45 PM</option>
                                        <option value="06:00 PM">06:00 PM</option>
                                        <option value="06:15 PM">06:15 PM</option>
                                        <option value="06:30 PM">06:30 PM</option>
                                        <option value="06:45 PM">06:45 PM</option>
                                        <option value="07:00 PM">07:00 PM</option>
                                        <option value="07:15 PM">07:15 PM</option>
                                        <option value="07:30 PM">07:30 PM</option>
                                        <option value="07:45 PM">07:45 PM</option>
                                        <option value="08:00 PM">08:00 PM</option>
                                        <option value="08:15 PM">08:15 PM</option>
                                        <option value="08:30 PM">08:30 PM</option>
                                        <option value="08:45 PM">08:45 PM</option>
                                        <option value="09:00 PM">09:00 PM</option>
                                        <option value="09:15 PM">09:15 PM</option>
                                        <option value="09:30 PM">09:30 PM</option>
                                        <option value="09:45 PM">09:45 PM</option>
                                        <option value="10:00 PM">10:00 PM</option>
                                        <option value="10:15 PM">10:15 PM</option>
                                        <option value="10:30 PM">10:30 PM</option>
                                        <option value="10:45 PM">10:45 PM</option>
                                        <option value="11:00 PM">11:00 PM</option>
                                        <option value="11:15 PM">11:15 PM</option>
                                        <option value="11:30 PM">11:30 PM</option>
                                        <option value="11:45 PM">11:45 PM</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="main_page_submit_btn">
                        <input type="submit" name="get_info" value="Get Info">
                    </div>
                </form>
                <div class="cyss">
                    <ul>
                        <li>
                            <a href="creat_acc.php">Sign-Up
                                <img src="images/Icon_arrow-right.svg">
                            </a>
                        </li>
                        <li>
                            <a href="rent_mexico.php">See all our Mexico offices
                                <img src="images/Icon_arrow-right.svg">
                            </a>
                        </li>
                        <li>
                            <a href="all_cars.php">See all our vehicles
                                <img src="images/Icon_arrow-right.svg">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="body_main">
        <div class="catro">
            <h3 class="catro_tl">Car and truck rental offers</h3>
            <div class="catro_flx">
                <div class="pic">
                    <div class="nstpp">
                        <p>No surprise! Total published<br><b>price</b></p>
                    </div>
                    <img src="images/index_1.png">
                    <p class="pic_tl">Price includes coverage</p>
                    <div class="pic_hvr">
                        <p>View deal</p>
                        <i class="fa fa-arrow-right"></i>
                    </div>
                </div>
                <div class="pic pic2">
                    <div class="nstpp">
                        <p>Now<br><b>Your contract</b><br>is digital</p>
                    </div>
                    <img src="images/index_2.png">
                    <p class="pic_tl">Our green policy</p>
                    <div class="pic_hvr">
                        <p>View deal</p>
                        <i class="fa fa-arrow-right"></i>
                    </div>
                </div>
                <div class="pic">
                    <div class="nstpp">
                        <p>Pay with<br><b>3 and 6 MSI *</b>your rents</p>
                    </div>
                    <img src="images/index_3.png">
                    <p class="pic_tl">Book with MSI*</p>
                    <div class="pic_hvr">
                        <p>View deal</p>
                        <i class="fa fa-arrow-right"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="woyt">
            <div class="woyt2">
                <div class="woyt_left">
                    <p class="st_line"><b>Skip the Line and Check In Online</b></p>
                    <h4>We optimize your time</h4>
                    <p class="woyt_para">
                        The health of our clients has become our priority, that is why we have innovated by avoiding
                        contact
                        as much as possible. With <b>Check In Onlines</b> you can upload your documentation before
                        picking
                        up your car.
                    </p>
                    <a href="contact.php">Know more</a>
                </div>
                <div class="woyt_right">
                    <img src="images/check_central.jpg" class="woyt_img">
                </div>
            </div>
        </div>
        <div class="acrf">
            <h3 class="acrf_tl">A constantly renewed fleet</h3>
            <p class="acrf_para">Take the opportunity to try our new models</p>
            <div class="acrf2">
                <div class="elv">
                    <div class="elv_tl">
                        <h5>Ecomonic</h5>
                        <p>From compact with low gas fuel to eco models.</p>
                        <a href="small_and_med.php">See more</a>
                    </div>
                    <img src="images/carTam_kwid.png" class="acrf_car_img1">
                    <div class="disben">
                        <img src="images/discount.svg" width="80px">
                        <h3>Discount & Benifits</h3>
                        <p>Join our loyalty and rewards program</p>
                        <div class="acrf_main_btn">
                            <a href="loyal.php">Discover the loyalty and rewards program</a>
                        </div>
                    </div>
                </div>
                <div class="elv">
                    <div class="elv_tl">
                        <h5>Luxury</h5>
                        <p>You can choose from a wide range of luxury cars made by the best brands.</p>
                        <a href="luxury.php">See more</a>
                    </div>
                    <img src="images/carTam_3.png" class="acrf_car_img2">
                    <div class="disben">
                        <img src="images/periodic.svg" width="80px">
                        <h3>Daily, weekly or monthly</h3>
                        <p>Rent a car for as long as you need</p>
                        <div class="acrf_main_btn">
                            <a href="#header">Book now</a>
                        </div>
                    </div>
                </div>
                <div class="elv">
                    <div class="elv_tl">
                        <h5>Vans</h5>
                        <p>Are you looking for a van for your business or personal use?</p>
                        <a href="vans_and_trucks.php">See more</a>
                    </div>
                    <img src="images/carTam_4.png" class="acrf_car_img3">
                    <div class="disben">
                        <img src="images/icone-online-checkin.svg" width="80px">
                        <h3>Sign-Up Now</h3>
                        <p>Get on your way as quickly as possible with online check-in</p>
                        <div class="acrf_main_btn">
                            <a href="creat_acc.php">Sign-Up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="the_news">
            <div class="the_news_tl">
                <h3>thenews</h3>
                <p>Find here the latest news about Europcar Mexico</p>
            </div>
            <div class="the_news_2">
                <div class="the_news_main">
                    <img src="images/bn_1.jpg">
                    <span>Tourist places</span>
                    <h3>10 Tourist places in Cancun that you must visit when renting a car.</h3>
                    <p>Hello traveler, if you are looking for information on tourist places in Cancun or ideas of what
                        to
                        do in Cancun, in this publication you will get those answers you are looking for, because we
                        will
                        tell you about all those important and spectacular places that you can visit if you encourage
                        you to
                        add car rental in Cancun to your trip.</p>
                    <!-- <a href="">Read <i class="fa fa-plus"></i></a> -->
                </div>
                <div class="the_news_main">
                    <img src="images/bn_2.jpg">
                    <span>Routes through Mexico</span>
                    <h3>The devil's backbone: a road with impressive landscapes.</h3>
                    <p>Have you ever heard about the road "The Devil's Backbone"? A route that connects Durango with
                        Mazatlan through amazing landscapes that leave you speechless. Get on board and join us to
                        travel
                        one of the most impressive roads in Mexico.</p>
                    <!-- <a href="">Read <i class="fa fa-plus"></i></a> -->
                </div>
                <div class="the_news_main">
                    <img src="images/bn_3.jpg">
                    <span>Routes through Mexico</span>
                    <h3>Explore the cocoa route in Tabasco.</h3>
                    <p>The cocoa route is one of the most delightful things to do in Tabasco for those who want to visit
                        this destination in southeastern Mexico: an Eden forgotten by tourism that moves away from the
                        crowds that exist in large cities.</p>
                    <!-- <a href="">Read <i class="fa fa-plus"></i></a> -->
                </div>
                <div class="the_news_main">
                    <img src="images/bn_4.jpg">
                    <span>Magic towns</span>
                    <h3>These are the 9 magical towns of Mexico State.</h3>
                    <p>Traveler, do you already know the 9 magical towns of Mexico State? Due to its proximity to Mexico
                        City, one of these magical towns may well be your next escape destination, on a fascinating road
                        trip or to enjoy the weekend with your partner or friends. Get to know them!</p>
                    <!-- <a href="">Read <i class="fa fa-plus"></i></a> -->
                </div>
            </div>
        </div>
        <div class="eucim">
            <div class="eucim2">
                <div class="eoimt">
                    <img src="images/ic-planete.svg" width="60">
                    <h1>Europcar in Mexico</h1>
                    <p>120 europcar offices in more than 40 cities in Mexico. In addition, presence in more than 140
                        countries.</p>
                </div>
                <div class="eucim_main">
                    <h4>Important cities</h4>
                    <p><a href="rent_mexico.php">Mexico City</a></p>
                    <p><a href="rent_monterrey.php">Monterrey</a></p>
                    <p><a href="rent_tijuana.php">Tijuana</a></p>
                </div>
                <div class="eucim_main">
                    <h4>Quintana Roo</h4>
                    <p><a href="rent_cancum.php">Cancun</a></p>
                    <p><a href="rent_guadalajara.php">Guadalajara</a></p>
                    <p><a href="rent_merida.php">Merida</a></p>
                </div>
            </div>
            <div class="all_cities_btn">
                <a href="#header" id="all_cities">All Cities</a>
            </div>
            <div class="racov">
                <div class="racov_tl">
                    <h2>Rent a car or van with Europcar Mexico</h2>
                    <i class="fa fa-plus" id="wtem_plus"></i>
                </div>
                <p id="wtem_para">Welcome to Europcar Mexico, the number one leader in car rental in Mexico.<br>
                    Have the confidence that we offer you and make your next adventure a comfortable, safe and
                    unforgettable
                    trip. We have a fleet with more than 2,500 vehicles with car rental offices in the main airports,
                    cities
                    and tourist destinations in Mexico, such as Cancun, Monterrey, Mexico City, Guadalajara and more.
                    Meet
                    our incredible varied fleet of cars that we have for you; from economic cars to luxury cars that
                    adapt
                    perfectly to the needs of your trip. Each of our vehicles has the highest maintenance standards and
                    in
                    the same way, with a maximum use of two years. With us your satisfaction is guaranteed! Are you
                    ready?
                    Make your car reservation now from our website or by dialing 800 201 2084 and/or 800 436 0310<br>
                    Think no more! For business or pleasure trips, Europcar Mexico is your best option.</p>
            </div>
            <div class="our_part">
                <h2>Our partners</h2>
                <img src="images/homepage_fox.jpg">
            </div>
        </div>
        <footer>
            <div class="yrsph">
                <div class="yo_res">
                    <h2>Your reservation</h2>
                    <p><a href="contact.php">Check your reservation</a></p>
                </div>
                <div class="spe_pro yo_res">
                    <h2>Special promotions</h2>
                    <p>Sign up for our newsletter to receive our latest offers</p>
                    <a href="creat_acc.php"><img src="images/Icon_arrow-right-black.svg" width="16"></a>
                </div>
                <div class="yo_res">
                    <h2>Help</h2>
                    <p><a href="contact.php">Customer service</a></p>
                    <p><a href="contact.php">Contact Us</a></p>
                </div>
            </div>
            <div class="yrsph">
                <div class="yo_res">
                    <h2>More information</h2>
                    <p><a href="rent_mexico.php">Find an office</a></p>
                    <p><a href="pre_plus_pack.php">Premium plus package</a></p>
                    <p><a href="loyal.php">Loyalty and rewards program</a></p>
                    <p><a href="mexico_rent_extras.php">Extra services</a></p>
                    <p><a href="corpo_car_rental.php">Car rental for business</a></p>
                </div>
                <div class="yo_res">
                    <h2>Europcar Speical deals</h2>
                    <p><a href="car_with_debit.php">Rent a car with debit card</a></p>
                    <p><a href="2_days_free.php">2 Day free</a></p>
                </div>
                <div class="yo_res">
                    <h2>Vehicles</h2>
                    <p><a href="small_and_med.php">Small and medium</a></p>
                    <p><a href="luxury.php">Luxury</a></p>
                    <p><a href="vans_and_trucks.php">Vans and Trucks</a></p>
                </div>
            </div>
            <div class="yrsph">
                <div class="tatf">
                    <div class="tawlry">
                        <img src="images/trip_advisor.png" width="70">
                        <p>TripAdvisor Travelers' Favourites 2019 (for Germany, France and Spain)</p>
                    </div>
                    <div class="tawlry">
                        <img src="images/travel_award.png" width="70">
                        <p>World's Leading Car Rental Company Website</p>
                    </div>
                    <div class="tawlry">
                        <img src="images/positive_ssl.png" width="55">
                        <p>Realize your transacctions on a secure platform</p>
                    </div>
                </div>
            </div>
            <div class="main_footer">
                <div class="left_main_footer">
                    <p>© Europcar 2016</p>
                    <span>|</span>
                    <p><a href="">Privacy and cookies policy</a></p>
                    <span>|</span>
                    <p><a href="">Web design and development</a></p>
                </div>
                <div class="right_main_footer">
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                    <a href=""><i class="fa fa-instagram"></i></a>
                    <a href=""><i class="fa fa-youtube-play"></i></a>
                </div>
            </div>
        </footer>
    </div>
    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        var first_pickup_office_label = document.getElementById("first_pickup_office_label");
        var second_pickup_office_label = document.getElementById("second_pickup_office_label");
        var same_office_check = document.getElementById("same_office_check");
        var height = window.innerHeight;
        var width = window.innerwidth;
        if (width >= 1100) {
            if (same_office_check.checked) {
                second_pickup_office_label.style.display = "none";
                first_pickup_office_label.style.width = "100" + "%";
            } else {
                second_pickup_office_label.style.display = "flex";
                first_pickup_office_label.style.width = "49" + "." + "5" + "%";
            }
        } else {
            if (same_office_check.checked) {
                second_pickup_office_label.style.display = "none";
                first_pickup_office_label.style.width = "100" + "%";
            } else {
                second_pickup_office_label.style.display = "flex";
                first_pickup_office_label.style.width = "100" + "%";
            }
        }
        same_office_check.addEventListener('click', function() {
            if (width >= 1100) {
                if (same_office_check.checked) {
                    second_pickup_office_label.style.display = "none";
                    first_pickup_office_label.style.width = "100" + "%";
                } else {
                    second_pickup_office_label.style.display = "flex";
                    first_pickup_office_label.style.width = "49" + "." + "5" + "%";
                }
            } else {
                if (same_office_check.checked) {
                    second_pickup_office_label.style.display = "none";
                    first_pickup_office_label.style.width = "100" + "%";
                } else {
                    second_pickup_office_label.style.display = "flex";
                    first_pickup_office_label.style.width = "100" + "%";
                }
            }
        })


        var main_page_menu_open_btn = document.getElementById("main_page_menu_open_btn");
        var main_page_menu_close_btn = document.getElementById("main_page_menu_close_btn");
        var main_page_nav = document.getElementById("main_page_nav");

        main_page_menu_open_btn.addEventListener('click', function() {
            main_page_nav.style.width = "100%";
        })
        main_page_menu_close_btn.addEventListener('click', function() {
            main_page_nav.style.width = "0%";
        })

        var speical_offer_main_page_btn = document.getElementById("speical_offer_main_page_btn");
        var speical_offers_main_page = document.getElementById("speical_offers_main_page");
        var see_our_office_main_page_btn = document.getElementById("see_our_office_main_page_btn");
        var See_offices_main_page = document.getElementById("See_offices_main_page");
        var vehicles_main_page_btn = document.getElementById("vehicles_main_page_btn");
        var vehicles_main_page = document.getElementById("vehicles_main_page");
        var services_main_page_btn = document.getElementById("services_main_page_btn");
        var services_main_page = document.getElementById("services_main_page");


        speical_offer_main_page_btn.addEventListener('click', function() {
            speical_offers_main_page.style.display = "flex";
            See_offices_main_page.style.display = "none";
            vehicles_main_page.style.display = "none";
            services_main_page.style.display = "none";
            speical_offer_main_page_btn.style.color = "#009900";
            see_our_office_main_page_btn.style.color = "#000";
            vehicles_main_page_btn.style.color = "#000";
            services_main_page_btn.style.color = "#000";
        })
        see_our_office_main_page_btn.addEventListener('click', function() {
            speical_offers_main_page.style.display = "none";
            See_offices_main_page.style.display = "flex";
            vehicles_main_page.style.display = "none";
            services_main_page.style.display = "none";
            speical_offer_main_page_btn.style.color = "#000";
            see_our_office_main_page_btn.style.color = "#009900";
            vehicles_main_page_btn.style.color = "#000";
            services_main_page_btn.style.color = "#000";
        })
        vehicles_main_page_btn.addEventListener('click', function() {
            speical_offers_main_page.style.display = "none";
            See_offices_main_page.style.display = "none";
            vehicles_main_page.style.display = "flex";
            services_main_page.style.display = "none";
            speical_offer_main_page_btn.style.color = "#000";
            see_our_office_main_page_btn.style.color = "#000";
            vehicles_main_page_btn.style.color = "#009900";
            services_main_page_btn.style.color = "#000";
        })
        services_main_page_btn.addEventListener('click', function() {
            speical_offers_main_page.style.display = "none";
            See_offices_main_page.style.display = "none";
            vehicles_main_page.style.display = "none";
            services_main_page.style.display = "flex";
            speical_offer_main_page_btn.style.color = "#000";
            see_our_office_main_page_btn.style.color = "#000";
            vehicles_main_page_btn.style.color = "#000";
            services_main_page_btn.style.color = "#009900";
        })



        var main_page_mobile_nav_speical_offer = document.getElementById("main_page_mobile_nav_speical_offer");
        var fa_chevron_speical_offer_mobile_nav = document.getElementById("fa_chevron_speical_offer_mobile_nav");
        main_page_mobile_nav_speical_offer_open = false;
        var main_page_mobile_nav_see_offices = document.getElementById("main_page_mobile_nav_see_offices");
        var fa_chevron_see_offices_mobile_nav = document.getElementById("fa_chevron_see_offices_mobile_nav");
        main_page_mobile_nav_see_offices_open = false;
        var main_page_mobile_nav_vehicles = document.getElementById("main_page_mobile_nav_vehicles");
        var fa_chevron_vehicles_nav = document.getElementById("fa_chevron_vehicles_nav");
        main_page_mobile_nav_see_vehicles_open = false;


        main_page_mobile_nav_speical_offer.addEventListener('click', function() {
            if (main_page_mobile_nav_speical_offer_open == false) {
                main_page_mobile_nav_speical_offer.style.height = "280px";
                fa_chevron_speical_offer_mobile_nav.style.transform = "rotate(180deg)";
                fa_chevron_speical_offer_mobile_nav.style.verticalAlign = "-3px";
                main_page_mobile_nav_speical_offer_open = true;
            } else if (main_page_mobile_nav_speical_offer_open == true) {
                main_page_mobile_nav_speical_offer.style.height = "20px";
                fa_chevron_speical_offer_mobile_nav.style.transform = "rotate(0)";
                fa_chevron_speical_offer_mobile_nav.style.verticalAlign = "0";
                main_page_mobile_nav_speical_offer_open = false;
            }
        })

        main_page_mobile_nav_see_offices.addEventListener('click', function() {
            if (main_page_mobile_nav_see_offices_open == false) {
                main_page_mobile_nav_see_offices.style.height = "200px";
                fa_chevron_see_offices_mobile_nav.style.transform = "rotate(180deg)";
                fa_chevron_see_offices_mobile_nav.style.verticalAlign = "-3px";
                main_page_mobile_nav_see_offices_open = true;
            } else if (main_page_mobile_nav_see_offices_open == true) {
                main_page_mobile_nav_see_offices.style.height = "20px";
                fa_chevron_see_offices_mobile_nav.style.transform = "rotate(0)";
                fa_chevron_see_offices_mobile_nav.style.verticalAlign = "0";
                main_page_mobile_nav_see_offices_open = false;
            }
        })

        main_page_mobile_nav_vehicles.addEventListener('click', function() {
            if (main_page_mobile_nav_see_vehicles_open == false) {
                main_page_mobile_nav_vehicles.style.height = "140px";
                fa_chevron_vehicles_nav.style.transform = "rotate(180deg)";
                fa_chevron_vehicles_nav.style.verticalAlign = "-3px";
                main_page_mobile_nav_see_vehicles_open = true;
            } else if (main_page_mobile_nav_see_vehicles_open == true) {
                main_page_mobile_nav_vehicles.style.height = "20px";
                fa_chevron_vehicles_nav.style.transform = "rotate(0)";
                fa_chevron_vehicles_nav.style.verticalAlign = "0";
                main_page_mobile_nav_see_vehicles_open = false;
            }
        })


        var menu_close_mobile_btn = document.getElementById("menu_close_mobile_btn");
        var main_page_menu_open_btn = document.getElementById("main_page_menu_open_btn");
        var main_page_mobile_nav = document.getElementById("main_page_mobile_nav");
        main_page_mobile_nav_open = false;
        if ($(window).width() <= 620) {
            main_page_menu_open_btn.addEventListener('click', function() {
                main_page_mobile_nav.style.width = "100%";
                main_page_mobile_nav_open = true;
            })
            menu_close_mobile_btn.addEventListener('click', function() {
                main_page_mobile_nav.style.width = "0%";
                main_page_mobile_nav_open = false;
            })
        }
    </script>
    <!-- Form Validation Script -->
    <script>
        var first_pickup_office = document.getElementById("first_pickup_office");
        var second_pickup_office = document.getElementById("second_pickup_office");
        var formerror0 = document.getElementsByClassName("formerror")[0];
        var formerror1 = document.getElementsByClassName("formerror")[1];
        var same_office_check = document.getElementById("same_office_check");
        var return_up_date_input = document.getElementById("return_up_date_input");
        var return_up_time_input = document.getElementById("return_up_time_input");
        var pick_up_date_input = document.getElementById("pick_up_date_input");
        var pick_up_time_input = document.getElementById("pick_up_time_input");

        function clearerror() {
            var formerror = document.getElementsByClassName("formerror");
            for (let item of formerror) {
                item.innerHTML = "";
            }
        }

        function formvalidate() {
            clearerror();
            returnval = true;
            if (first_pickup_office.value == "Pick-up Office") {
                formerror0.innerHTML = "*Please select a Pick-up and Return place from the given list";
                returnval = false;
            }
            if (!same_office_check.checked) {}
            return returnval;
        }
        same_office_check.addEventListener('click', function() {
            if (same_office_check.checked) {
                return_up_date_input.setAttribute("Disabled", "");
                return_up_time_input.setAttribute("Disabled", "");
            } else {
                return_up_date_input.removeAttribute("Disabled");
                return_up_time_input.removeAttribute("Disabled");
            }
        })
    </script>
    <script>
        var today = new Date().toISOString().split('T')[0];
        document.getElementsByName("pick_up_date")[0].setAttribute('min', today);
        var today = new Date().toISOString().split('T')[0];
        document.getElementsByName("return_date")[0].setAttribute('min', today);
    </script>
</body>

</html>