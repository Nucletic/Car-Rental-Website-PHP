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
                <div class="nav_services">
                    <li>
                        <h3>Other services</h3>
                    </li>
                    <li>
                        <a href="">Close session</a>
                    </li>
                </div>
            </ul>
        </nav>
        <div class="tab_form">
            <div class="tab_btn" style="display:block;">
                <!-- <button id="guests_tab_btn">GUESTS</button> -->
                <button id="customers_tab_btn" style="width:100%!important;">CUSTOMERS</button>
            </div>
            <form action="" id="guests">
                <div class="form_titles">
                    <h2>Welcome</h2>
                    <p>To view your reservation enter the following information</p>
                </div>
                <div class="inputs">
                    <input type="text" id="res_no">
                    <label for="res_no" id="res_no_lab">Email</label>
                    <input type="text" id="sur_name">
                    <label for="sur_name" id="sur_name_lab">Password</label>
                    <input type="submit" value="log in" class="submit_btn">
                </div>
            </form>
            <form action="" id="customers">
                <div class="form_titles">
                    <h2>Welcome</h2>
                    <p>To view your reservation enter the following information</p>
                </div>
                <div class="inputs">
                    <input type="text" id="id_email">
                    <label for="res_no" id="id_email_lab">Email or Phone number</label>
                    <input type="text" id="password">
                    <label for="sur_name" id="passowrd_lab">Password</label>
                    <div class="forgot_pass">
                        <a href="">Forgot your password?</a>
                    </div>
                    <input type="submit" value="log in" class="submit_btn">
                </div>
            </form>
        </div>
        <div class="dhaay">
            <div class="title">
                DON'T HAVE AN ACCOUNT YET?
            </div>
            <div class="create_acc_btn">
                <a href="creat_acc.php">Create Account</a>
            </div>
            <div class="cre_acc_offer">
                <div class="cre_acc_img">
                    <ul>
                        <li><img src="images/best_price.png" width="25"></li>
                        <li><img src="images/document.png" width="25"></li>
                        <li><img src="images/check_account.png" width="40"></li>
                    </ul>
                </div>
                <div class="cre_acc_desc">
                    <ul>
                        <li>
                            <p>Save</p>
                            <span>get 20% discount</span>
                        </li>
                        <li>
                            <p>Accumulate points</p>
                            <span>Redeem them for free rentals</span>
                        </li>
                        <li>
                            <p>Express Service</p>
                            <span>Save time and avoid queuing</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="cre_res">
            <a href="mainpage.php">Create a reservation</a>
        </div>
    </section>
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
</body>

</html>