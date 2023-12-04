const mobileNav = document.getElementById("mobile-nav");
const navBtn = document.getElementById("nav-button");

navBtn.onclick = function () {
    navBtn.classList.toggle("opened")

    if(mobileNav.style.height == "0%") {
        mobileNav.style.height = "100%";
    } else {
        mobileNav.style.height = "0%";
    }
}