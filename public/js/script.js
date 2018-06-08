menu.onclick = function myFunction() {
    var myTopNav = document.getElementById('myTopNav');
    if (myTopNav.className === "top-nav") {
        myTopNav.className += " responsive";
    } else {
        myTopNav.className = "top-nav";
    }
};