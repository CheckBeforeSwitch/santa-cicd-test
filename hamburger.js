function hamburgerClick() {
    document.getElementById("hamburgerNav").classList.toggle("in");
    document.getElementById("hamburgerIcon").classList.toggle("in");
}

window.addEventListener("load", function () {
    document.getElementById("hamburgerIcon").addEventListener("click", function() {
        hamburgerClick();
    });
});