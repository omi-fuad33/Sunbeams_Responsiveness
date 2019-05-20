// Main Menu Functions
function main_menu_open(){
    var leftMenu = document.getElementById("o_left_menu");
    var hamburger_button = document.getElementById("o_hamburger_container");
    var allMenuWrap = document.getElementById("o_all_menu_wrap");
    if (leftMenu.style.marginLeft === "0px") {
        leftMenu.style.marginLeft = "-1500px";
        allMenuWrap.style.backgroundColor = "rgba(0,0,0,0)"
        allMenuWrap.style.zIndex = "0";
    } else {
        leftMenu.style.marginLeft = "0";
        allMenuWrap.style.backgroundColor = "rgba(0,0,0,0.4)"
        allMenuWrap.style.zIndex = "5";
    }
    hamburger_button.classList.toggle("o_hamburger_menu_change");
}

// Top Quick menu Functions
function main_quick_menu_open(){
    var quickMenuWrap = document.getElementById("o_top_quick_menu");
    var quickMenuButton = document.getElementById("o_top_quick_menu_button");
    var callMenu = document.getElementById("o_top_call_menu");
    var callMenuButton = document.getElementById("o_top_call_menu_button");
    var visitMenuWrap = document.getElementById("o_top_visit_menu");
    var visitMenuButton = document.getElementById("o_top_visit_menu_button");
    var topWrapper = document.getElementById("o_top_nav_wrapper");
    var allMenuWrap = document.getElementById("o_all_menu_wrap");
    if (quickMenuWrap.style.marginTop === "80px") {
        quickMenuWrap.style.marginTop = "-1500px";
        quickMenuButton.style.color = "#ffffff";
        allMenuWrap.style.backgroundColor = "rgba(0,0,0,0.0)";
        allMenuWrap.style.zIndex = "0";
        topWrapper.style.backgroundColor = "rgba(0,0,0,0.4)";
    } else {
        quickMenuWrap.style.marginTop = "80px";
        quickMenuButton.style.color = "#ED1D24";
        allMenuWrap.style.backgroundColor = "rgba(0,0,0,0.4)";
        allMenuWrap.style.zIndex = "5";
        topWrapper.style.backgroundColor = "rgba(0,0,0,0.2)";
        callMenu.style.marginTop = "-1500px";
        callMenuButton.style.color = "#ffffff";
        visitMenuWrap.style.marginTop = "-1500px";
        visitMenuButton.style.color = "#ffffff";
    }
}

// Top Call menu functions
function main_call_menu_open(){
    var callMenuWrap = document.getElementById("o_top_call_menu");
    var callMenuButton = document.getElementById("o_top_call_menu_button");
    var quickMenuWrap = document.getElementById("o_top_quick_menu");
    var quickMenuButton = document.getElementById("o_top_quick_menu_button");
    var visitMenuWrap = document.getElementById("o_top_visit_menu");
    var visitMenuButton = document.getElementById("o_top_visit_menu_button");
    var topWrapper = document.getElementById("o_top_nav_wrapper");
    var allMenuWrap = document.getElementById("o_all_menu_wrap");
    if (callMenuWrap.style.marginTop === "80px") {
        callMenuWrap.style.marginTop = "-1500px";
        callMenuButton.style.color = "#ffffff";
        allMenuWrap.style.backgroundColor = "rgba(0,0,0,0.0)";
        allMenuWrap.style.zIndex = "0";
        topWrapper.style.backgroundColor = "rgba(0,0,0,0.4)";
    } else {
        callMenuWrap.style.marginTop = "80px";
        callMenuButton.style.color = "#ED1D24";
        allMenuWrap.style.backgroundColor = "rgba(0,0,0,0.4)";
        allMenuWrap.style.zIndex = "5";
        topWrapper.style.backgroundColor = "rgba(0,0,0,0.2)";
        quickMenuWrap.style.marginTop = "-1500px";
        quickMenuButton.style.color = "#ffffff";
        visitMenuWrap.style.marginTop = "-1500px";
        visitMenuButton.style.color = "#ffffff";
    }
}

// Top visit menu functions
function main_visit_menu_open(){
    var visitMenuWrap = document.getElementById("o_top_visit_menu");
    var visitMenuButton = document.getElementById("o_top_visit_menu_button");
    var callMenuWrap = document.getElementById("o_top_call_menu");
    var callMenuButton = document.getElementById("o_top_call_menu_button");
    var quickMenuWrap = document.getElementById("o_top_quick_menu");
    var quickMenuButton = document.getElementById("o_top_quick_menu_button");
    var topWrapper = document.getElementById("o_top_nav_wrapper");
    var allMenuWrap = document.getElementById("o_all_menu_wrap");
    if (visitMenuWrap.style.marginTop === "80px") {
        visitMenuWrap.style.marginTop = "-1500px";
        visitMenuButton.style.color = "#ffffff";
        allMenuWrap.style.backgroundColor = "rgba(0,0,0,0.0)";
        allMenuWrap.style.zIndex = "0";
        topWrapper.style.backgroundColor = "rgba(0,0,0,0.4)";
    } else {
        visitMenuWrap.style.marginTop = "80px";
        visitMenuButton.style.color = "#ED1D24";
        allMenuWrap.style.backgroundColor = "rgba(0,0,0,0.4)";
        allMenuWrap.style.zIndex = "5";
        topWrapper.style.backgroundColor = "rgba(0,0,0,0.2)";
        quickMenuWrap.style.marginTop = "-1500px";
        quickMenuButton.style.color = "#ffffff";
        callMenuWrap.style.marginTop = "-1500px";
        callMenuButton.style.color = "#ffffff";
    }
}