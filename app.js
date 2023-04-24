let navbar = document.querySelector(".navbar-collapse");
let navbarBtn = document.getElementById("btn");

navbarBtn.addEventListener("click", myFunction);

function myFunction(){

    if(!navbar.classList.contains("set-align-start"))
        navbar.classList.add("set-align-start");
    else
        navbar.classList.remove("set-align-start");
}