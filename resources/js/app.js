    var swiper = new Swiper('#default-carousel', {
        loop: true, 
        autoplay: {
            delay: 3000, //detik
            disableOnInteraction: false, 
        },
        navigation: {
            nextEl: '[data-carousel-next]',
            prevEl: '[data-carousel-prev]',
        },
        pagination: {
            el: '[data-carousel-indicators]',
            clickable: true,
        },
    });

    const slides = document.querySelectorAll('.slider img');
        let currentSlide = 0;

        function changeSlide() {
            slides[currentSlide].classList.remove('active');
            currentSlide = (currentSlide + 1) % slides.length;
            slides[currentSlide].classList.add('active');
        }
        setInterval(changeSlide, 3000);


import './bootstrap';
import 'flowbite';

document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('myCartDropdownButton1').click();
  });

document.getElementById('contact-form').addEventListener('submit', function(event) {
    event.preventDefault();  
    alert("Your message has been sent!"); 
    this.reset();  
});

