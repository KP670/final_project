
const visState = document.getElementById("mobile-nav");

function __init__() {
    document.getElementById("nav-button").onclick = function () {
        if (visState.style.display == "none") {
            visState.style.display = "flex";
        } else {
            visState.style.display = "none";
        };
    };
}

__init__()