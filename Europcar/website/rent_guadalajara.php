<?php
include('form_handlers/db_connect.php');
session_start();
if (!isset($_SESSION['user_email'])) {
    header("location:mainpage.php");
}
$today = date("Y-m-d");
$_SESSION['speical_offer_forms'] = "filled";
$_SESSION['speical_car_type'] = "All Cars";
?>
<!-- HTML code start here -->
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
        <div class="del_ret_form guadalajara">
            <div class="page_main_title">
                <h2>Car Rental Guadalajara</h2>
            </div>
            <form action="form_handlers/book_car.php" method="POST" class="doro_form">
                <label for="delevery_office" id="delevery_office_label">
                    <span>Pick up</span>
                    <select name="pickup_office" id="delevery_office">
                        <option value="GUADALAJARA">GUADALAJARA</option>
                        <option value="CANCUN">CANCUN</option>
                        <option value="MEXICO">MEXICO</option>
                        <option value="US">US</option>
                        <option value="ANDORRA">ANDORRA</option>
                        <option value="ABU DHABI EAU">ABU DHABI EAU</option>
                        <option value="ALBANIA">ALBANIA</option>
                        <option value="ARMENIA">ARMENIA</option>
                        <option value="ANGOLA">ANGOLA</option>
                        <option value="ARGENTINA">ARGENTINA</option>
                        <option value="AUSTRIA">AUSTRIA</option>
                        <option value="AUSTRALIA">AUSTRALIA</option>
                        <option value="AZERBAIYAN">AZERBAIYAN</option>
                        <option value="BOSNIA HERZEGOVINA">BOSNIA HERZEGOVINA</option>
                        <option value="BARBADOS">BARBADOS</option>
                        <option value="BELGICA">BELGICA</option>
                        <option value="BULGARIA">BULGARIA</option>
                        <option value="BAHREIN">BAHREIN</option>
                        <option value="BOLIVIA">BOLIVIA</option>
                        <option value="BRASIL">BRASIL</option>
                        <option value="BOTSWANA">BOTSWANA</option>
                        <option value="CANADA">CANADA</option>
                        <option value="CONGO REPUBLICA DEMOCRATICA">CONGO REPUBLICA DEMOCRATICA</option>
                        <option value="CONGO">CONGO</option>
                        <option value="SUIZA">SUIZA</option>
                        <option value="COSTA DE MARFIL">COSTA DE MARFIL</option>
                        <option value="CHILE<">CHILE</option>
                        <option value="CHINA">CHINA</option>
                        <option value="COLOMBIA">COLOMBIA</option>
                        <option value="COSTA RICA">COSTA RICA</option>
                        <option value="CURACAO">CURACAO</option>
                        <option value="CHIPRE">CHIPRE</option>
                        <option value="REPUBLICA CHECA">REPUBLICA CHECA</option>
                        <option value="EUA - DUBAI">EUA - DUBAI</option>
                        <option value="ALEMANIA">ALEMANIA</option>
                        <option value="YIBUTI">YIBUTI</option>
                        <option value="DINAMARCA">DINAMARCA</option>
                        <option value="REPBULICA DOMINICANA">REPBULICA DOMINICANA</option>
                        <option value="ECUADOR">ECUADOR</option>
                        <option value="ESTONIA">ESTONIA</option>
                        <option value="EGIPTO">EGIPTO</option>
                        <option value="ASPAA">ASPAA</option>
                        <option value="FINLANDIA">FINLANDIA</option>
                        <option value="FIYI">FIYI</option>
                        <option value="FRANCIA">FRANCIA</option>
                        <option value="GABON">GABON</option>
                        <option value="REINO UNIDO">REINO UNIDO</option>
                        <option value="GEORGIA">GEORGIA</option>
                        <option value="GUYANA FRANCESA">GUYANA FRANCESA</option>
                        <option value="GUADALUPE">GUADALUPE</option>
                        <option value="GRECIA">GRECIA</option>
                        <option value="GUATEMALA">GUATEMALA</option>
                        <option value="GUYANA">GUYANA</option>
                        <option value="CROCIA">CROCIA</option>
                        <option value="HUNGRIA">HUNGRIA</option>
                        <option value="IRLANDA">IRLANDA</option>
                        <option value="ISRAEL">ISRAEL</option>
                        <option value="INDIA">INDIA</option>
                        <option value="IRAK">IRAK</option>
                        <option value="ISLANDIA">ISLANDIA</option>
                        <option value="ITLIA">ITLIA</option>
                        <option value="JAMICA">JAMICA</option>
                        <option value="JORDANIA">JORDANIA</option>
                        <option value="JAPON">JAPON</option>
                        <option value="KENIA">KENIA</option>
                        <option value="CAMBOYA">CAMBOYA</option>
                        <option value="KUWAIT">KUWAIT</option>
                        <option value="LIBANO">LIBANO</option>
                        <option value="SANTA LUCIA">SANTA LUCIA</option>
                        <option value="SRI LANKA">SRI LANKA</option>
                    </select>
                </label>
                <label for="return_office" id="return_office_label">
                    <span>Return</span>
                    <select name="return_office" id="return_office">
                        <option value="GUADALAJARA">GUADALAJARA</option>
                        <option value="CANCUN">CANCUN</option>
                        <option value="MEXICO">MEXICO</option>
                        <option value="US">US</option>
                        <option value="ANDORRA">ANDORRA</option>
                        <option value="ABU DHABI EAU">ABU DHABI EAU</option>
                        <option value="ALBANIA">ALBANIA</option>
                        <option value="ARMENIA">ARMENIA</option>
                        <option value="ANGOLA">ANGOLA</option>
                        <option value="ARGENTINA">ARGENTINA</option>
                        <option value="AUSTRIA">AUSTRIA</option>
                        <option value="AUSTRALIA">AUSTRALIA</option>
                        <option value="AZERBAIYAN">AZERBAIYAN</option>
                        <option value="BOSNIA HERZEGOVINA">BOSNIA HERZEGOVINA</option>
                        <option value="BARBADOS">BARBADOS</option>
                        <option value="BELGICA">BELGICA</option>
                        <option value="BULGARIA">BULGARIA</option>
                        <option value="BAHREIN">BAHREIN</option>
                        <option value="BOLIVIA">BOLIVIA</option>
                        <option value="BRASIL">BRASIL</option>
                        <option value="BOTSWANA">BOTSWANA</option>
                        <option value="CANADA">CANADA</option>
                        <option value="CONGO REPUBLICA DEMOCRATICA">CONGO REPUBLICA DEMOCRATICA</option>
                        <option value="CONGO">CONGO</option>
                        <option value="SUIZA">SUIZA</option>
                        <option value="COSTA DE MARFIL">COSTA DE MARFIL</option>
                        <option value="CHILE<">CHILE</option>
                        <option value="CHINA">CHINA</option>
                        <option value="COLOMBIA">COLOMBIA</option>
                        <option value="COSTA RICA">COSTA RICA</option>
                        <option value="CURACAO">CURACAO</option>
                        <option value="CHIPRE">CHIPRE</option>
                        <option value="REPUBLICA CHECA">REPUBLICA CHECA</option>
                        <option value="EUA - DUBAI">EUA - DUBAI</option>
                        <option value="ALEMANIA">ALEMANIA</option>
                        <option value="YIBUTI">YIBUTI</option>
                        <option value="DINAMARCA">DINAMARCA</option>
                        <option value="REPBULICA DOMINICANA">REPBULICA DOMINICANA</option>
                        <option value="ECUADOR">ECUADOR</option>
                        <option value="ESTONIA">ESTONIA</option>
                        <option value="EGIPTO">EGIPTO</option>
                        <option value="ASPAA">ASPAA</option>
                        <option value="FINLANDIA">FINLANDIA</option>
                        <option value="FIYI">FIYI</option>
                        <option value="FRANCIA">FRANCIA</option>
                        <option value="GABON">GABON</option>
                        <option value="REINO UNIDO">REINO UNIDO</option>
                        <option value="GEORGIA">GEORGIA</option>
                        <option value="GUYANA FRANCESA">GUYANA FRANCESA</option>
                        <option value="GUADALUPE">GUADALUPE</option>
                        <option value="GRECIA">GRECIA</option>
                        <option value="GUATEMALA">GUATEMALA</option>
                        <option value="GUYANA">GUYANA</option>
                        <option value="CROCIA">CROCIA</option>
                        <option value="HUNGRIA">HUNGRIA</option>
                        <option value="IRLANDA">IRLANDA</option>
                        <option value="ISRAEL">ISRAEL</option>
                        <option value="INDIA">INDIA</option>
                        <option value="IRAK">IRAK</option>
                        <option value="ISLANDIA">ISLANDIA</option>
                        <option value="ITLIA">ITLIA</option>
                        <option value="JAMICA">JAMICA</option>
                        <option value="JORDANIA">JORDANIA</option>
                        <option value="JAPON">JAPON</option>
                        <option value="KENIA">KENIA</option>
                        <option value="CAMBOYA">CAMBOYA</option>
                        <option value="KUWAIT">KUWAIT</option>
                        <option value="LIBANO">LIBANO</option>
                        <option value="SANTA LUCIA">SANTA LUCIA</option>
                        <option value="SRI LANKA">SRI LANKA</option>
                    </select>
                </label>
                <label id="date_time_label">
                    <span>Date & Time</span>
                    <div class="date_time">
                        <input type="date" name="pick_up_date" id="pick_up_date_input" value="<?php echo $today; ?>">
                        <select name="pick_up_time">
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
                            <option value="08:30 AM">08:30 AM</option>
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
                    </div>
                    <div class="date_time">
                        <input type="date" name="return_date" id="return_up_date_input" value="<?php echo $today; ?>">
                        <select name="return_time">
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
                            <option value="08:30 AM">08:30 AM</option>
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
                    </div>
                </label>
                <input type="submit" class="submit_" name="get info" value="Search">
            </form>
        </div>
        <div class="botm_para">
            <div class="botm_para2">
                <p>
                    The city of Guadalajara is the 10th largest city in all Latin America in population, urban area and gross
                    domestic product. The city is named after the Spanish city of Guadalajara, is the second largest city in
                    México and is a busy metropolis, and a major Mexican business center. The city is in the central region
                    of Jalisco in the Western-Pacific area of Mexico.
                </p>
                <p>
                    <strong>Rent a car in Guadalajara </strong>with Europcar Mexico and enjoy the many attractions in this
                    magnificent city! We have several categories to choose from: Economic vehicles, SUV´s or Ecofriendly cars.
                </p>
                <p>
                    Although this city beats to a busy pace, there are many places in Guadalajara where you will feel like you
                    have stepped back in time to a different era, this is a city of monuments, parks and flowers, fountains and
                    tree lined avenues. Its history dates to the magical 16th century and the rich heritage of México's <strong>
                        colonial gem</strong> is evident everywhere you look.
                </p>
                <h3>
                    We are the best option renting a car in Guadalajara
                </h3>
                <p>
                    In your next trip to Guadalajara rent a car with Europcar Mexico and visit Puerto Vallarta; this wonderful
                    city is just 4 hours away and appreciate the wonderful beaches of the Mexican Pacific. This centric city
                    it's surrounded by beautiful cities worth visiting like Manzanillo, Morelia, Guanajuato and Tepic.
                </p>
                <p>
                    Guadalajara is a cultural center of Mexico, considered by most to be the home of Mariachi music and host
                    to a big number of large-scale cultural events such as the Guadalajara International Film Festival, the
                    Guadalajara International Book Fair, and globally renowned cultural events which draw international crowds.
                    It is home to the C.D. Guadalajara, one of the most popular football clubs in all Mexico. All this and more
                    you can experience renting from our car rental in Guadalajara.
                </p>
                <h3>
                    Europcar Offcices In Guadalajara Airport
                </h3>
                <a href="">See on Map</a>
            </div>
            <div class="city_airport">
                <div class="city_airport_main">
                    <h3>Guadalajara - Airtport</h3>
                    <p><strong>Address:</strong> Carretera Guadalajara - Chapala Km 17.5,
                        Guadalajara International Airport (Leasing Section), CP 45659,
                        Tlajomulco de Zúñiga, Jalisco.</p>
                    <p><strong>Telephone:</strong> <a href=""> +52 (331) 652 1056</a></p>
                    <a href="javascript:void(0)" class="office_select_btn">SELECT THIS OFFICE <i class="fa fa-chevron-right"></i></a>
                </div>
                <div class="city_airport_main">
                    <h3>Guadalajara - RIU Hotel</h3>
                    <p><strong>Address:</strong> Av. López Mateos #830, Fraccionamiento Chapalita, Guadalajara, Jalisco.</p>
                    <p><strong>Telephone:</strong> <a href=""> 013 (338) 807 500 Ext 848</a></p>
                    <a href="javascript:void(0)" class="office_select_btn">SELECT THIS OFFICE <i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="ooihz">
                <div class="right_ooihz">
                    <div class="right_ooihz_title">
                        <h2>Guadalajara Airport</h2>
                    </div>
                    <div class="right_ooihz_content">
                        <ul class="acoh">
                            <li>
                                <h3>Address:</h3>
                            </li>
                            <li>
                                <p>Carretera Guadalajara - Chapala Km 17.5, Aeropuerto Internacional
                                    de Guadalajara (Sección Arrendadoras), CP 45659, Tlajomulco de Zúñiga, Jalisco.</p>
                            </li>
                            <li>
                                <h3>Contact:</h3>
                            </li>
                            <li>
                                <p><a href="">+52 (331) 652 1056</a></p>
                            </li>
                            <li>
                                <h3>Opening Hours:</h3>
                            </li>
                        </ul>
                        <div class="mtwt">
                            <div class="mtwt_main">
                                <h3>Monday</h3>
                                <p>12:00 am - 11:58 pm</p>
                            </div>
                            <div class="mtwt_main">
                                <h3>Tuesday</h3>
                                <p>12:00 am - 11:58 pm</p>
                            </div>
                            <div class="mtwt_main">
                                <h3>Wednesday</h3>
                                <p>12:00 am - 11:58 pm</p>
                            </div>
                            <div class="mtwt_main">
                                <h3>Thrusday</h3>
                                <p>12:00 am - 11:58 pm</p>
                            </div>
                            <div class="mtwt_main">
                                <h3>Friday</h3>
                                <p>12:00 am - 11:58 pm</p>
                            </div>
                            <div class="mtwt_main">
                                <h3>Saturday</h3>
                                <p>12:00 am - 11:58 pm</p>
                            </div>
                            <div class="mtwt_main">
                                <h3>Sunday</h3>
                                <p>12:00 am - 11:58 pm</p>
                            </div>
                            <div class="mtwt_main">
                                <a href="javascript:void(0)" class="office_select_btn">SELECT THIS OFFICE
                                    <i class="fa fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
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
        var ope_sea_btn = document.getElementById("ope_sea_btn");
        var op_se_che = document.getElementById("op_se_che");
        var open_search = document.getElementById("open_search");
        var crwdcbg_h1 = document.getElementById("crwdcbg_h1");
        open_search_open = false;
        ope_sea_btn.addEventListener('click', () => {
            op_se_che.classList.toggle("rotate_open_search_fa");
            open_search.classList.toggle("open_search_open");
            crwdcbg_h1.classList.toggle("crwdcbg_h1_cl");
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