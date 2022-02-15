/* BEGIN s-header-4 */
$(document).ready(function() {
    $('.s-header-4 [ht-trigger="hd-menu"]').click(function() {
        $(this).parent().find('[ht-target="hd-menu"], .fa-transformation').toggleClass('is-active');
    });
});
/* END s-header-4 */
/* BEGIN s-home-2 */
/* Thêm thư viện js/vendor/slick/ */
$(document).ready(function() {
    $('.s-home-2 .slick-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        infinite: false,
        responsive: [{
            breakpoint: 992,
            settings: { slidesToShow: 2 }
        },{
            breakpoint: 400,
            settings: { slidesToShow: 1 }
        }]
    });
});
/* END s-home-2 */
/* BEGIN s-icon-1 */
$(document).ready(function() {
    $('.s-icon-2 [data-detect-zalo]').attr('href', $('[data-detect-zalo]').data('detect-zalo')[_HTHelper.detect()]);
});
/* END s-icon-1 */
/* BEGIN s-sidebar-10 */
$(document).ready(function(){
    $('.s-sidebar-10 .s_heading i').click(function() {
        if ($(this).parent().siblings().css('display') == 'none') {
            $(this).parent().siblings().slideDown();
            $(this).removeClass('fa-plus').addClass('fa-minus');
        } else {
            $(this).parent().siblings().slideUp();
            $(this).removeClass('fa-minus').addClass('fa-plus');
        }
    });
});
/* END s-sidebar-10 */
/* BEGIN c-select-single */
$(document).ready(function() {
    $('.c-select .c-radio').find('.c_tick').remove();
    $('body').on('click', '[data-ht-trigger="c-select"]', function() {
        var focused = $(this).parent().hasClass('is-focused');
        $('[ht-close="c-select"]').click();
        if (!focused) {
            $(this).parent().addClass('is-focused');
            $('body').append('<div class="overlay-transparent" ht-close="c-select"></div>');
        }
    });
    $('body').on('click', '.c-select .c-radio', function() {
        var el_select = $(this).closest('.c-select');
        el_select.find('div.c_input').text($(this).find('span').text());
        el_select.find('div.c_input').removeClass('text--icon');
        el_select.find('.c-radio').removeClass('is-selected');
        $(this).addClass('is-selected');
        $('[ht-close="c-select"]').click();
    });
    $('body').on('click', '[ht-close="c-select"]', function() {
        $('.c-select').removeClass('is-focused');
        $('.overlay-transparent').remove();
    });
});
/* END c-select-single */
