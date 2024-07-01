
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

        <form action="form_handlers/creat_acc_data_formhandler.php" method="POST" id="cre_acc_main">
            <div class="page_rem">
                <div class="page_rem_title">
                    <h3>Create Account</h3>
                </div>
                <div class="page_rem_main">
                    <div class="page_rem_one" style="background: #d8d8d8;">
                        1
                    </div>
                    <div class="page_rem_two" style="background: #ffda00;">
                        2
                    </div>
                    <!-- <div class="page_rem_three">
                        3
                    </div> -->
                </div>
            </div>
            <div class="page_rem_title">
                <h3>Profile Details</h3>
            </div>
            <div class="inputs_labels">
                <label>
                    <span>
                        Direction
                    </span>
                    <input type="text" name="user_direction" placeholder="Direction" required>
                </label>
                <label>
                    <span>
                        Town
                    </span>
                    <input type="text" name="user_town" placeholder="Town" required>
                </label>
                <label>
                    <span>
                        Condition
                    </span>
                    <input type="text" name="user_condition" placeholder="Condition" required>
                </label>
                <div class="creacc_country_data">
                    <label>
                        <span>
                            Country
                        </span>
                        <select id="return_office" name="user_country" required>
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
                    </label>
                </div>
                <label>
                    <span>
                        Telephone
                    </span>
                    <input type="text" name="user_telephone" placeholder="Telephone" required>
                </label>
                <label>
                    <span>
                        Postal Code
                    </span>
                    <input type="text" name="user_postal_code" placeholder="Postal Code" required>
                </label>
                <div class="forgot_pass_btn">
                    <a href="">Forgot your password?</a>
                </div>
                <input type="submit" class="submit_cre_acc_btn" name="create_account_submit" value="Create account">
            </div>
        </form>
    </section>
    <script>
        var width = window.innerWidth;
        var height = window.innerHeight;
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
</body>

</html>