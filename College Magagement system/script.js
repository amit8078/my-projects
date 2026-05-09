const menubtn = document.querySelector(".menu-btn");
const navbar = document.querySelector(".navbar");

menubtn.onclick = () => { 
    navbar.classList.toggle("active");
};
