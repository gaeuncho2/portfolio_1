$('html, body').stop().animate({
    scrollTop : 0
}, 1000)

$('.mobile').on('click', function(){
    if ( !$('#header').hasClass('mobile') ){
        $('#header').addClass('mobile')
    } else {
        $('#header').removeClass('mobile')
    }
})

$('#sect1 .slideInner').slick({
    autoplay:true,
    autoplaySpeed:5000,
    pauseOnHover:true,
    dots:true,
    arrows:false
})

var sct = 0;

$('#section > #sect1, #section > #sect2, #section > #sect3, #section > #sect5').on('mousewheel', function(event, delta){
    if (delta>0){           // 마우스 휠을 위로 굴리면 양수(1)
        $('html, body').stop().animate({
            scrollTop: $(this).prev().offset().top
        }, 600)
    } else if (delta<0){    // 마우스 휠을 아래로 굴리면 음수(-1)
        $('html, body').stop().animate({
            scrollTop: $(this).next().offset().top
        }, 600)
    }
}) 

$(window).on('scroll', function(){
    sct = $(this).scrollTop()
    if ( sct >= 300 ){
        $('#header').addClass('on')
        $('#header h1').addClass('on')
        $('#header .depth1').addClass('on')
    } else {
        $('#header').removeClass('on')
        $('#header h1').removeClass('on')
        $('#header .depth1').removeClass('on')
    }
})

$('#sect3 .slideInner').slick({
    autoplay:true,
    autoplaySpeed:2000,
    slidesToShow:3,
    dots:false,
    centerMode:true,
    centerPadding:'70px',
    arrows:true,
    prevArrow : '<button><i class="fas fa-angle-left"></i></button>',
    nextArrow : '<button><i class="fas fa-angle-right"></i></button>',
    responsive: [{
        breakpoint:599,
        settings:{
            slidesToShow:3,
            centerMode:true,
            centerPadding:"10px",
            arrows:false,
        }
    }]
})


// var skroll = new Skroll()
// .add(".sk1", {animation:"fadeInRight", duration:5000, wait:1000})
// .add(".sk2", {animation:"fadeInLeft", duration:5000, wait:1000})
// .init()
 
