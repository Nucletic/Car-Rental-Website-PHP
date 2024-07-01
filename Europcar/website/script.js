// var menu_open_btn = document.getElementById("menu_open_btn")
// var menu_close_btn = document.getElementById("menu_close_btn")
// var after_nav = document.getElementById("after_nav")
// var nav_menu = document.getElementById("nav_menu")
// var main_body = document.getElementById("main_body")

// menu_open_btn.addEventListener('click', () => {
//     nav_menu.style.width = "40%";
//     after_nav.style.width = "44.5%";
// })
// menu_close_btn.addEventListener('click', () => {
//     nav_menu.style.width = "0%";
//     after_nav.style.width = "0%";
// })

// var res_no_lab = document.getElementById("res_no_lab")
// var res_no = document.getElementById("res_no")
// var sur_name_lab = document.getElementById("sur_name_lab")
// var sur_name = document.getElementById("sur_name")
// var id_email_lab = document.getElementById("id_email_lab")
// var id_email = document.getElementById("id_email")
// var passowrd_lab = document.getElementById("passowrd_lab")
// var password = document.getElementById("password")

// document.addEventListener('click', (e) => {
//     let res_no_clicked = e.target
//     let res_no_input = e.target
//     let sur_name_input = e.target
//     let sur_name_label = e.target
//     let id_email_label = e.target
//     let id_email_input = e.target
//     let password_label = e.target
//     let password_input = e.target
//     do {
//         if (res_no_clicked == res_no_lab || res_no_input == res_no) {
//             res_no_lab.style.marginTop = "-" + "2" + "." + "3" + "%";
//             res_no_lab.style.left = "27" + "." + "99" + "%";
//             res_no_lab.style.fontSize = "14" + "px";
//             res_no_lab.style.fontSize = "14" + "px";
//             res_no_lab.style.fontWeight = "500";

//         } if (sur_name_input == sur_name || sur_name_label == sur_name_lab) {
//             sur_name_lab.style.marginTop = "-" + "2" + "." + "3" + "%";
//             sur_name_lab.style.left = "27" + "." + "99" + "%";
//             sur_name_lab.style.fontSize = "14" + "px";
//             sur_name_lab.style.fontSize = "14" + "px";
//             sur_name_lab.style.fontWeight = "500";

//         } if (id_email_label == id_email_lab || id_email_input == id_email) {
//             id_email_lab.style.marginTop = "-" + "2" + "." + "3" + "%";
//             id_email_lab.style.left = "27" + "." + "99" + "%";
//             id_email_lab.style.fontSize = "14" + "px";
//             id_email_lab.style.fontSize = "14" + "px";
//             id_email_lab.style.fontWeight = "500";

//         } if (password_label == passowrd_lab || password == password_input) {
//             passowrd_lab.style.marginTop = "-" + "2" + "." + "3" + "%";
//             passowrd_lab.style.left = "27" + "." + "99" + "%";
//             passowrd_lab.style.fontSize = "14" + "px";
//             passowrd_lab.style.fontSize = "14" + "px";
//             passowrd_lab.style.fontWeight = "500";
//         }
//         res_no_clicked = res_no_clicked.parentNode
//     } while (res_no_clicked)
// })

// var guests_tab_btn = document.getElementById("guests_tab_btn")
// var customers_tab_btn = document.getElementById("customers_tab_btn")
// var guests = document.getElementById("guests")
// var customers = document.getElementById("customers")

// guests_tab_btn.addEventListener('click', function () {
//     guests.style.display = "block";
//     customers.style.display = "none";
//     guests_tab_btn.style.background = "#ffda00";
//     customers_tab_btn.style.background = "#d8d8d8";
// })
// customers_tab_btn.addEventListener('click', function () {
//     customers.style.display = "block";
//     guests.style.display = "none";
//     guests_tab_btn.style.background = "#d8d8d8";
//     customers_tab_btn.style.background = "#ffda00";
// })

// var width = window.innerWidth;
// var height = window.innerHeight;
// var input_labels = [res_no_lab, sur_name_lab, id_email_lab, passowrd_lab];
// var input_ = [res_no, sur_name, id_email, password];


// if (width <= 1330) {
//     for (let i = 0; i < input_labels.length; i++) {
//         input_labels[i].style.display = "none";
//     }
//     input_[0].setAttribute("placeholder", "Reservation No.");
//     input_[1].setAttribute("placeholder", "Surname");
//     input_[2].setAttribute("placeholder", "Email or Phone number");
//     input_[3].setAttribute("placeholder", "Password");
// }


// if (width <= 1347) {
//     menu_open_btn.addEventListener('click', () => {
//         nav_menu.style.height = "55%";
//         after_nav.style.top = "0%";
//     })
//     menu_close_btn.addEventListener('click', () => {
//         nav_menu.style.height = "0%";
//         after_nav.style.top = "-100%";
//     })

// } else {
//     menu_open_btn.addEventListener('click', () => {
//         nav_menu.style.width = "40%";
//         after_nav.style.width = "44.5%";
//     })
//     menu_close_btn.addEventListener('click', () => {
//         nav_menu.style.width = "0%";
//         after_nav.style.width = "0%";
//     })
// }









// var drop_mobile_nav_btn1 = document.getElementById("drop_mobile_nav_btn1");
// var drop_mobile_nav_btn2 = document.getElementById("drop_mobile_nav_btn2");
// var drop_mobile_nav_btn3 = document.getElementById("drop_mobile_nav_btn3");
// var drop_mobile_nav1 = document.getElementById("drop_mobile_nav1");
// var drop_mobile_nav2 = document.getElementById("drop_mobile_nav2");
// var drop_mobile_nav3 = document.getElementById("drop_mobile_nav3");
// var fa_chevron_down1 = document.getElementById("fa_chevron_down1");
// var fa_chevron_down2 = document.getElementById("fa_chevron_down2");
// var fa_chevron_down3 = document.getElementById("fa_chevron_down3");
// drop_mobile_nav_btn1.addEventListener('click', () => {
//     drop_mobile_nav1.classList.toggle("openspemenu1");
//     fa_chevron_down1.classList.toggle("rotatechevronmenu1");
// })
// drop_mobile_nav_btn2.addEventListener('click', () => {
//     drop_mobile_nav2.classList.toggle("openspemenu2");
//     fa_chevron_down2.classList.toggle("rotatechevronmenu1");
// })
// drop_mobile_nav_btn3.addEventListener('click', () => {
//     drop_mobile_nav3.classList.toggle("openspemenu3");
//     fa_chevron_down3.classList.toggle("rotatechevronmenu1");
// })


// var close_nav_btn = document.getElementById("close_nav_btn");
// var open_nav_btn = document.getElementById("open_nav_btn");
// var mobile_nav_main = document.getElementById("mobile_nav_main");
// open_nav_btn.addEventListener('click', () => {
//     mobile_nav_main.style.right = "0%";
// })
// close_nav_btn.addEventListener('click', () => {
//     mobile_nav_main.style.right = "-100%";
// })


// var ope_sea_btn = document.getElementById("ope_sea_btn");
// var op_se_che = document.getElementById("op_se_che");
// var open_search = document.getElementById("open_search");
// var crwdcbg_h1 = document.getElementById("crwdcbg_h1");
// open_search_open = false;
// ope_sea_btn.addEventListener('click', () => {
//     op_se_che.classList.toggle("rotate_open_search_fa");
//     open_search.classList.toggle("open_search_open");
//     crwdcbg_h1.classList.toggle("crwdcbg_h1_cl");
// })




// var sideblur = document.getElementById('sideblur');
// var openbtn = document.getElementById("openbtn");
// var closebtn = document.getElementById('closebtn');
// var navbar = document.getElementById('navbar');
// var speical_offer = document.getElementById('speical_offer');
// var second_nav = document.getElementById('second_nav');
// var secondnavlogo = document.getElementById('secondnavlogo');
// menuopen = false;
// secondnavopen = false;
// openbtn.addEventListener('click', function () {
//     console.log("Menu Open");
//     navbar.style.transition = "0.6s";
//     navbar.style.right = "0" + "%";
//     sideblur.style.right = "50" + "%";
//     menuopen = true;
// });
// speical_offer.addEventListener('click', () => {
//     navbar.style.right = "50" + "%";
//     sideblur.style.right = "100" + "%";
//     second_nav.style.right = "0" + "%";
//     console.log("secondnavopen");
//     menuopen = true;
//     secondnavopen = true;
//     if (secondnavopen == true) {
//         closebtn.addEventListener('click', () => {
//             navbar.style.right = "0" + "%";
//             navbar.style.transition = "0.6s";
//             sideblur.style.right = "50" + "%";
//             second_nav.style.right = "-" + "50" + "%";
//             console.log("secondnavclose");
//             menuopen = true;
//             secondnavopen = false;
//         });
//     };
// });
// if (menuopen == true) {
//     window.addEventListener('keyup', (e) => {
//         if (e.keyCode === 27) {
//             console.log("escape pressed");
//             navbar.style.right = "-" + "50" + "%";
//             sideblur.style.right = "-" + "50" + "%";
//             menuopen = false;
//         }
//     })
// }

// var all_cities = document.getElementById('all_cities');
// var all_cities_child = document.getElementById('all_cities_child');

// all_cities.addEventListener('click', function () {
//     all_cities_child.classList.toggle("all_cities_toggle");
// })