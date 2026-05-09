const menuBtn = document.querySelector(".menu-btn");
const navbar = document.querySelector(".navbar");

menuBtn.onclick = () => {
    navbar.classList.toggle("active");
};


// function openForm() {
//     document.querySelector(".Appointment-button").style.display = "block";
//     document.getElementById("formPage").classList.add("active");
// }

// function goBack() {
//     document.getElementById("formPage").classList.remove("active");
//     document.querySelector(".Appointment-button").style.display = "inline-block";
// }


function openForm() {
    document.querySelector(".Appointment-button").style.display = "block";
    document.getElementById("formPage").classList.toggle("active");
}

function goBack() {
    document.getElementById("formPage").classList.remove("active");
    document.querySelector(".Appointment-button").style.display = "inline-block";
}

