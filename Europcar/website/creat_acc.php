<?php
include('form_handlers/db_connect.php');
session_start();
if (isset($_SESSION['user_email'])) {
    header("location:mainpage.php");
}

?>
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

    <section id="main_body">
        <div id="after_nav"></div>
        <nav id="navbar_check_in">
            <div id="logo">
                <img src="images/logo_short.png" width="110px">
            </div>
            <div class="menu_open_btn" id="menu_open_btn">
                <img src="images/button_menu.png" width="20px">
            </div>
            <ul id="nav_menu">
                <div class="menu_close_btn" id="menu_close_btn">
                    <img src="images/button_close_menu.png" width="20px">
                </div>
                <div class="nav_services">
                    <li>
                        <h3>Services</h3>
                    </li>
                    <li>
                        <a href="">Branch Locator</a>
                    </li>
                    <li>
                        <a href="">acerca de nosotros</a>
                    </li>
                    <li>
                        <a href="">Contact us</a>
                    </li>
                </div>
            </ul>
        </nav>
        <div class="tab_btn" style="display:none;white-space: none;">
            <button id="guests_tab_btn">GUESTS</button>
            <button id="customers_tab_btn">CUSTOMERS</button>
        </div>
        <form action="form_handlers/creat_acc_form_handler.php" name="form" method="POST" onsubmit="return validateForm()" id="cre_acc_main">
            <div class="page_rem">
                <div class="page_rem_title">
                    <h3>Create Account</h3>
                </div>
                <div class="page_rem_main">
                    <div class="page_rem_one" style="margin-left: 90%;">
                        1
                    </div>
                    <!-- <div class="page_rem_two">
                        2
                    </div>
                    <div class="page_rem_three">
                        3
                    </div> -->
                </div>
            </div>
            <div class="page_rem_title">
                <h3>User profile</h3>
            </div>
            <div class="inputs_labels">
                <label>
                    <span>
                        Names)
                    </span>
                    <input type="text" name="user_name" id="user_name" placeholder="Names)" maxlength="60" required>
                    <b><span class="formerror" style="color:red;"></span></b>
                </label>
                <label>
                    <span>
                        Surname
                    </span>
                    <input type="text" name="user_surname" id="user_surname" placeholder="Surname" maxlength="60" required>
                    <b><span class="formerror" style="color:red;"></span></b>
                </label>
                <div class="dob_cre_acc">
                    <label>
                        <span>Date of birth</span>
                        <div class="dob_select">
                            <select name="user_day_dob" id="user_day_dob" maxlength="10" required>
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                            <select name="user_month_dob" id="user_month_dob" maxlength="10" required>
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                            <select name="user_year_dob" id="user_year_dob" maxlength="10" required>
                                <option value="2001">2004</option>
                                <option value="2002">2003</option>
                                <option value="2003">2002</option>
                                <option value="2004">2001</option>
                                <option value="2000">2000</option>
                                <option value="1999">1999</option>
                                <option value="1998">1998</option>
                                <option value="1997">1997</option>
                                <option value="1996">1996</option>
                                <option value="1995">1995</option>
                                <option value="1994">1994</option>
                                <option value="1993">1993</option>
                                <option value="1992">1992</option>
                                <option value="1991">1991</option>
                                <option value="1990">1990</option>
                                <option value="1989">1989</option>
                                <option value="1988">1988</option>
                                <option value="1987">1987</option>
                                <option value="1986">1986</option>
                                <option value="1985">1985</option>
                                <option value="1984">1984</option>
                                <option value="1983">1983</option>
                                <option value="1982">1982</option>
                                <option value="1981">1981</option>
                                <option value="1980">1980</option>
                                <option value="1979">1979</option>
                                <option value="1978">1978</option>
                                <option value="1977">1977</option>
                                <option value="1976">1976</option>
                                <option value="1975">1975</option>
                                <option value="1974">1974</option>
                                <option value="1973">1973</option>
                                <option value="1972">1972</option>
                                <option value="1971">1971</option>
                                <option value="1970">1970</option>
                                <option value="1969">1969</option>
                                <option value="1968">1968</option>
                                <option value="1967">1967</option>
                                <option value="1966">1966</option>
                                <option value="1965">1965</option>
                                <option value="1964">1964</option>
                                <option value="1963">1963</option>
                                <option value="1962">1962</option>
                                <option value="1961">1961</option>
                                <option value="1960">1960</option>
                                <option value="1959">1959</option>
                                <option value="1958">1958</option>
                                <option value="1957">1957</option>
                                <option value="1956">1956</option>
                                <option value="1955">1955</option>
                                <option value="1954">1954</option>
                                <option value="1953">1953</option>
                                <option value="1952">1952</option>
                                <option value="1951">1951</option>
                                <option value="1950">1950</option>
                                <option value="1949">1949</option>
                                <option value="1948">1948</option>
                                <option value="1947">1947</option>
                                <option value="1946">1946</option>
                                <option value="1945">1945</option>
                                <option value="1944">1944</option>
                                <option value="1943">1943</option>
                                <option value="1942">1942</option>
                                <option value="1941">1941</option>
                                <option value="1940">1940</option>
                                <option value="1939">1939</option>
                                <option value="1938">1938</option>
                                <option value="1937">1937</option>
                                <option value="1936">1936</option>
                                <option value="1935">1935</option>
                                <option value="1934">1934</option>
                                <option value="1933">1933</option>
                                <option value="1932">1932</option>
                                <option value="1931">1931</option>
                                <option value="1930">1930</option>
                            </select>
                            <b><span class="formerror" style="color:red;"></span></b>
                        </div>
                    </label>
                </div>
                <label>
                    <span>
                        Email
                    </span>
                    <input type="email" name="user_email" id="user_email" placeholder="Email" maxlength="100" required>
                    <b><span class="formerror" style="color:red;"></span></b>
                </label>
                <label>
                    <span>
                        Confirm Email
                    </span>
                    <input type="email" name="confirm_email" id="confirm_email" placeholder="Confirm Email" maxlength="100" required>
                    <b><span class="formerror" style="color:red;"></span></b>
                </label>
                <label>
                    <span>
                        Direction
                    </span>
                    <input type="text" name="user_direction" id="user_direction" placeholder="Direction" maxlength="120" required>
                    <b><span class="formerror" style="color:red;"></span></b>
                </label>
                <label>
                    <span>
                        Town
                    </span>
                    <input type="text" name="user_town" id="user_town" placeholder="Town" maxlength="40" required>
                    <b><span class="formerror" style="color:red;"></span></b>
                </label>
                <div class="creacc_country_data">
                    <label>
                        <span>
                            Country
                        </span>
                        <select id="return_office" name="user_country" id="user_country" maxlength="30" required>
                            <option value="MEXICO">MEXICO</option>
                            <option value="US">US</option>
                            <option value="ANDORRA">ANDORRA</option>
                            <option value="ABU_DHABI_EAU">ABU DHABI EAU</option>
                            <option value="ALBANIA">ALBANIA</option>
                            <option value="ARMENIA">ARMENIA</option>
                            <option value="ANGOLA">ANGOLA</option>
                            <option value="ARGENTINA">ARGENTINA</option>
                            <option value="AUSTRIA">AUSTRIA</option>
                            <option value="AUSTRALIA">AUSTRALIA</option>
                            <option value="AZERBAIYAN">AZERBAIYAN</option>
                            <option value="BOSNIA_HERZEGOVINA">BOSNIA HERZEGOVINA</option>
                            <option value="BARBADOS">BARBADOS</option>
                            <option value="BELGICA">BELGICA</option>
                            <option value="BULGARIA">BULGARIA</option>
                            <option value="BAHREIN">BAHREIN</option>
                            <option value="BOLIVIA">BOLIVIA</option>
                            <option value="BRASIL">BRASIL</option>
                            <option value="BOTSWANA">BOTSWANA</option>
                            <option value="CANADA">CANADA</option>
                            <option value="CONGO_REPUBLICA_DEMOCRATICA">CONGO REPUBLICA DEMOCRATICA</option>
                            <option value="CONGO">CONGO</option>
                            <option value="SUIZA">SUIZA</option>
                            <option value="COSTA_DE_MARFIL">COSTA DE MARFIL</option>
                            <option value="CHILE">CHILE</option>
                            <option value="CHINA">CHINA</option>
                            <option value="COLOMBIA">COLOMBIA</option>
                            <option value="COSTA_RICA">COSTA RICA</option>
                            <option value="CURACAO">CURACAO</option>
                            <option value="CHIPRE">CHIPRE</option>
                            <option value="REPUBLICA_CHECA">REPUBLICA CHECA</option>
                            <option value="EUA_-_DUBAI">EUA - DUBAI</option>
                            <option value="ALEMANIA">ALEMANIA</option>
                            <option value="YIBUTI">YIBUTI</option>
                            <option value="DINAMARCA">DINAMARCA</option>
                            <option value="REPBULICA_DOMINICANA">REPBULICA DOMINICANA</option>
                            <option value="ECUADOR">ECUADOR</option>
                            <option value="ECUADOR">ESTONIA</option>
                            <option value="EGIPTO">EGIPTO</option>
                            <option value="ASPAA">ASPAA</option>
                            <option value="FINLANDIA">FINLANDIA</option>
                            <option value="FIYI">FIYI</option>
                            <option value="FRANCIA">FRANCIA</option>
                            <option value="GABON">GABON</option>
                            <option value="REINO_UNIDO">REINO UNIDO</option>
                            <option value="GEORGIA">GEORGIA</option>
                            <option value="GUYANA_FRANCESA">GUYANA FRANCESA</option>
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
                            <option value="SANTA_LUCIA">SANTA LUCIA</option>
                            <option value="SRI_LANKA">SRI LANKA</option>
                        </select>
                        <b><span class="formerror" style="color:red;"></span></b>
                    </label>
                </div>
                <label>
                    <span>
                        Telephone
                    </span>
                    <input type="text" name="user_telephone" id="user_telephone" placeholder="Telephone" maxlength="11" required>
                    <b><span class="formerror" style="color:red;"></span></b>
                </label>
                <label>
                    <span>
                        Postal Code
                    </span>
                    <input type="text" name="user_postal_code" id="user_postal_code" placeholder="Postal Code" maxlength="30" required>
                    <b><span class="formerror" style="color:red;"></span></b>
                </label>
                <label>
                    <span>
                        Password
                    </span>
                    <input type="password" name="user_password" id="user_password" placeholder="Password" maxlength="120" required>
                    <b><span class="formerror" style="color:red;"></span></b>
                </label>
                <label>
                    <span>
                        Confirm Password
                    </span>
                    <input type="password" name="confirm_password" id="confirm_password" placeholder="Password" maxlength="120" required>
                    <b><span class="formerror" style="color:red;"></span></b>
                </label>
                <div class="forgot_pass_btn">
                    <a href="">Forgot your password?</a>
                </div>
                <input type="submit" class="submit_cre_acc_btn" style="padding: 10px 35.7%; cursor: pointer;" name="following_submit" value="Create Account" id="following_submit">
            </div>
        </form>
    </section>
</body>
<!-- Scripts -->
<script src="script.js"></script>
<!-- Bootstrap Scripts  -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
<script>
    var res_no_lab = document.getElementById("res_no_lab")
    var res_no = document.getElementById("res_no")
    var sur_name_lab = document.getElementById("sur_name_lab")
    var sur_name = document.getElementById("sur_name")
    var id_email_lab = document.getElementById("id_email_lab")
    var id_email = document.getElementById("id_email")
    var passowrd_lab = document.getElementById("passowrd_lab")
    var password = document.getElementById("password")
    document.addEventListener('click', (e) => {
        let res_no_clicked = e.target
        let res_no_input = e.target
        let sur_name_input = e.target
        let sur_name_label = e.target
        let id_email_label = e.target
        let id_email_input = e.target
        let password_label = e.target
        let password_input = e.target
        do {
            if (res_no_clicked == res_no_lab || res_no_input == res_no) {
                res_no_lab.style.marginTop = "-" + "2" + "." + "3" + "%";
                res_no_lab.style.left = "27" + "." + "99" + "%";
                res_no_lab.style.fontSize = "14" + "px";
                res_no_lab.style.fontSize = "14" + "px";
                res_no_lab.style.fontWeight = "500";
            }
            if (sur_name_input == sur_name || sur_name_label == sur_name_lab) {
                sur_name_lab.style.marginTop = "-" + "2" + "." + "3" + "%";
                sur_name_lab.style.left = "27" + "." + "99" + "%";
                sur_name_lab.style.fontSize = "14" + "px";
                sur_name_lab.style.fontSize = "14" + "px";
                sur_name_lab.style.fontWeight = "500";
            }
            if (id_email_label == id_email_lab || id_email_input == id_email) {
                id_email_lab.style.marginTop = "-" + "2" + "." + "3" + "%";
                id_email_lab.style.left = "27" + "." + "99" + "%";
                id_email_lab.style.fontSize = "14" + "px";
                id_email_lab.style.fontSize = "14" + "px";
                id_email_lab.style.fontWeight = "500";
            }
            if (password_label == passowrd_lab || password == password_input) {
                passowrd_lab.style.marginTop = "-" + "2" + "." + "3" + "%";
                passowrd_lab.style.left = "27" + "." + "99" + "%";
                passowrd_lab.style.fontSize = "14" + "px";
                passowrd_lab.style.fontSize = "14" + "px";
                passowrd_lab.style.fontWeight = "500";
            }
            res_no_clicked = res_no_clicked.parentNode
        } while (res_no_clicked)
    })
    var guests_tab_btn = document.getElementById("guests_tab_btn")
    var customers_tab_btn = document.getElementById("customers_tab_btn")
    var guests = document.getElementById("guests")
    var customers = document.getElementById("customers")
    guests_tab_btn.addEventListener('click', function() {
        guests.style.display = "block";
        customers.style.display = "none";
        guests_tab_btn.style.background = "#ffda00";
        customers_tab_btn.style.background = "#d8d8d8";
    })
    customers_tab_btn.addEventListener('click', function() {
        customers.style.display = "block";
        guests.style.display = "none";
        guests_tab_btn.style.background = "#d8d8d8";
        customers_tab_btn.style.background = "#ffda00";
    })
    var width = window.innerWidth;
    var height = window.innerHeight;
    var input_labels = [res_no_lab, sur_name_lab, id_email_lab, passowrd_lab];
    var input_ = [res_no, sur_name, id_email, password];
    if (width <= 1330) {
        for (let i = 0; i < input_labels.length; i++) {
            input_labels[i].style.display = "none";
        }
        input_[0].setAttribute("placeholder", "Reservation No.");
        input_[1].setAttribute("placeholder", "Surname");
        input_[2].setAttribute("placeholder", "Email or Phone number");
        input_[3].setAttribute("placeholder", "Password");
    }
    if (width <= 1347) {
        menu_open_btn.addEventListener('click', () => {
            nav_menu.style.height = "55%";
            after_nav.style.top = "0%";
        })
        menu_close_btn.addEventListener('click', () => {
            nav_menu.style.height = "0%";
            after_nav.style.top = "-100%";
        })

    } else {
        menu_open_btn.addEventListener('click', () => {
            nav_menu.style.width = "40%";
            after_nav.style.width = "44.5%";
        })
        menu_close_btn.addEventListener('click', () => {
            nav_menu.style.width = "0%";
            after_nav.style.width = "0%";
        })
    }
</script>
<!-- Form validation Script -->
<script>
    function clearError() {
        var formerror = document.getElementsByClassName("formerror");
        for (let item of formerror) {
            item.innerHTML = "";
        }
    }

    function validateForm() {
        clearError();
        var returnval = true;
        var formerror0 = document.getElementsByClassName("formerror")[11];
        var formerror2 = document.getElementsByClassName("formerror")[10];
        var formerror3 = document.getElementsByClassName("formerror")[4];
        var user_password = document.getElementById("user_password");
        var confirm_password = document.getElementById("confirm_password");
        var user_email = document.getElementById("user_email");
        var confirm_email = document.getElementById("confirm_email");
        if (user_password.value.length < 8) {
            formerror2.innerHTML = "*Password must me minium of 8 charcters!";
            returnval = false;
        }
        if (user_email.value != confirm_email.value) {
            formerror3.innerHTML = "*Email and Confirm email must be same!";
            returnval = false;
        }
        if (user_password.value != confirm_password.value) {
            formerror0.innerHTML = "*Password and confirm password must be same!";
            returnval = false;
        }
        return returnval;
    }
</script>

</html>