(function($) {
    AOS.init();
    $('a.fluidbox').fluidbox();
    $('.slider').slick({
        infinite: true,
        slidesToShow: 1,
        autoPlay: true,
        autoplaySpeed: 1000,
        arrows: true,
        nextArrow: '<i class="fa fa-chevron-circle-right next" aria-hidden="true"></i>',
        prevArrow: '<i class="fa fa-chevron-circle-left prev" aria-hidden="true"></i>'
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

}(jQuery))
