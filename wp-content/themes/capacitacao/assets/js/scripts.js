(function($) {
    AOS.init();
    //$('a.fluidbox').fluidbox();
    $('.slider').slick({
        infinite: true,
        slidesToShow: 1,
        autoPlay: true,
        autoplaySpeed: 1000,
        arrows: true,
        nextArrow: '<img class="next" src="'+ options.url +'/assets/img/arrow-slider.png" alt=">" >',
        prevArrow: '<img class="prev" src="'+ options.url +'/assets/img/arrow-slider.png" alt=">" >',
    });
    $('.galeria').on('setPosition', function () {
        $(this).find('.slick-slide').height('auto');
        var slickTrack = $(this).find('.slick-track');
        var slickTrackHeight = $(slickTrack).height();
        $(this).find('.slick-slide').css('height', slickTrackHeight + 'px');
    });
    $('#icon-search').click(function() {
        $('#form-search').removeClass('hide');
        $('.nav-wrapper').addClass('hide');
        $('#search').focus();
    });
    $('#icon-close').click(function() {
        $('#form-search').addClass('hide');
        $('.nav-wrapper').removeClass('hide');
    });
    $(document).ready(function(){
      $('.parallax').parallax();
    });

}(jQuery))
