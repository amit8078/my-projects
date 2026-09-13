const slide = document.querySelector("#slider .slide");
const dots = document.querySelectorAll(".dots span");

if (slide) {

    let currentSlide = 0;

    function showSlide() {

        slide.style.transform =
            `translateX(-${currentSlide * 100}vw)`;

        dots.forEach(dot => {
            dot.classList.remove("active");
        });

        if (dots[currentSlide]) {
            dots[currentSlide].classList.add("active");
        }
    }

    function nextSlide() {

        currentSlide++;

        if (currentSlide > 3) {
            currentSlide = 0;
        }

        showSlide();
    }

    function previousSlide() {

        currentSlide--;

        if (currentSlide < 0) {
            currentSlide = 3;
        }

        showSlide();
    }

    function goToSlide(number) {

        currentSlide = number;
        showSlide();

    }

    showSlide();

    setInterval(nextSlide, 3000);
}


const menuBtn = document.getElementById("menuBtn");
const navItems = document.getElementById("navItems");

menuBtn.addEventListener("click", function(){
    navItems.classList.toggle("active");
});
