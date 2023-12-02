
const visState = document.getElementsByClassName("hidden")[0];

document.getElementById("nav-button").onclick = function () {
    if (visState.style.display == "none") {
        visState.style.display = "flex"
    } else {
        visState.style.display = "none"
    }
}

console.log(visState)