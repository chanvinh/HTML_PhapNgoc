/* BEGIN s-slide-6 */
/* Thêm thư viện js/vendor/vegas-slider/ */
$(document).ready(function() {
    $(".s-slide-6 .vegas-wrapper").vegas({
        timer: false,
        delay: 10000,
        transition: 'fade',
        animation: 'random',
        animationDuration: 20000,
        transitionDuration: 4000,
        slides: [
            { src: "images/home/1.jpg" },
            { src: "images/home/2.jpg" },
        ]
    });
});
/* END s-slide-6 */

/* BEGIN s-sidebar-4 */
$(document).ready(function() {

    $('.s-sidebar-4>ul li>div span').click(function() {
        $(this).closest('li').find('ul').slideToggle(400);
        $(this).closest('li').addClass('is-active');
        $(this).closest('li').siblings().find('ul').slideUp(400);
        $(this).closest('li').siblings().removeClass('is-active');
    });
    $('.s-sidebar-4 .s_heading').click(function() {
        $(this).parent().find('.s_menu').slideToggle(400);
    });

});
/* END s-sidebar-5 */