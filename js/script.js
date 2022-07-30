$(document).ready(function() {
    $(window).scroll(function() {
        if (this.scrollY > 20) {
            $('.navbar').addClass("sticky");
        } else {
            $('.navbar').removeClass("sticky");
        }
        if (this.scrollY > 5000) {
            $('.scroll-up-btn').addClass("show");
        } else {
            $('.scroll-up-btn').removeClass("show");
        }
    });
    $('.scroll-up-btn').click(function() {
        $('html').animate({ scrollTop: 0 });
    });
    var typed = new Typed(".typing", {
        strings: ["Desenvolvedor Web"],
        typeSpeed: 140,
        backSpeed: 70,
        loop: true
    });
    var typed = new Typed(".typing-2", {
        strings: ["HTML", "CSS", "JavaScript", "PHP", "TypeScript"],
        typeSpeed: 140,
        backSpeed: 60,
        loop: true
    });
    $('.carousel').owlCarousel({
        margin: 20,
        loop: true,
        autoplayTimeOut: 2000,
        autoplayHoverPauser: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 3,
                nav: false
            }
        }
    });

    //Botão do menu
    document.querySelector(".menu-btn").addEventListener('click', function() {
        document.querySelector(".menu").classList.toggle("active");
    });

    //Evento para Link
    document.querySelector(".link-menu1").addEventListener('click', function() {
        document.querySelector(".menu").classList.toggle("active");
    });
    document.querySelector(".link-menu2").addEventListener('click', function() {
        document.querySelector(".menu").classList.toggle("active");
    });
    document.querySelector(".link-menu3").addEventListener('click', function() {
        document.querySelector(".menu").classList.toggle("active");
    });
    document.querySelector(".link-menu4").addEventListener('click', function() {
        document.querySelector(".menu").classList.toggle("active");
    });
});