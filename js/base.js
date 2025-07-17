const bar = document.getElementById('bar');
const ul = document.querySelector('nav ul');
const navLinkElements = document.getElementsByClassName('nav-item');

$(document).ready(function(){
    var myParam = location.search.split('success=')[1];
    
    if(myParam){
        $("#button").click(function(){
            $('.toast').toast('show');
        });
        //$('.toast').toast('show');
    }
});

bar.addEventListener('click', () => {
	bar.classList.toggle('show-x');
});

for (element of navLinkElements) {
    element.addEventListener('click', () => [
        bar.classList.remove('show-x')
    ])
}

$('.navbar-nav .nav-link').click(function(){
    $(".navbar-collapse").collapse('hide');
});

$(".patient").owlCarousel({
    loop:true,
    nav:true,
    autoplay:true,
    center: true,
    autoplaySpeed:300,
    responsive:{
        0:{
            items:1,
        },
        767:{
            items:2,
            margin:100,
        },
        1280:{
            items:2,
            margin:100,
        }
    }
});

function ReviewsNavResize(){
    $('.patient .owl-nav').css({'width' : $('.patient .owl-item').width() + 'px'});
}
$(window).on("resize", ReviewsNavResize);
$(document).on("ready", ReviewsNavResize);