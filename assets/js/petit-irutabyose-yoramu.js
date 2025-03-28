
$(document).ready(function(){
       
        
    // Initialize slider with both auto and manual controls
var slider = $('.ys_ban_slick').slick({
dots: true,
arrows: true,
infinite: true,
speed: 1000,
autoplay: true,
autoplaySpeed: 3000, // 3 seconds between slides
fade: false,
cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
slidesToShow: 1,
slidesToScroll: 1,
touchThreshold: 15,
swipe: true,
draggable: true,
waitForAnimate: true,
pauseOnHover: false,
responsive: [{
    breakpoint: 768,
    settings: {
        arrows: false
    }
}]
});

// Pause on user interaction
slider.on('beforeChange', function(event, slick, currentSlide, nextSlide){
$(this).slick('slickPause');
});

// Resume auto-play after manual interaction
slider.on('afterChange', function(event, slick, currentSlide){
clearTimeout(window.sliderTimeout);
window.sliderTimeout = setTimeout(function(){
    slider.slick('slickPlay');
}, 1000); // Resume autoplay after 1 second of inactivity
});

// Add touch/swipe support
slider.on('swipe', function(event, slick, direction){
$(this).slick('slickPause');
});
    // Handle video playback
    $('.ys_ban_slick').on('beforeChange', function(event, slick, currentSlide, nextSlide){
        // Pause all videos
        $('video').each(function(){
            this.pause();
            this.currentTime = 0;
        });
        
        // Play video in upcoming slide
        const $nextSlide = $(slick.$slides[nextSlide]);
        const video = $nextSlide.find('video')[0];
        if(video) {
            video.play().catch(error => {
                console.log('Video autoplay blocked:', error);
            });
        }
    });
});