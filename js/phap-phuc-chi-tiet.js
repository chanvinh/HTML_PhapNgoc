/* BEGIN p-detail-2 */
/* Thêm thư viện js/vendor/slick/ */
$(document).ready(function() {
    $('.p-detail-2 .slider-for').slick({
        dots: false,
        arrows: false,
        fade: true,
        autoplay: false,
        asNavFor: '.slider-nav'
    });
    $('.p-detail-2 .slider-nav').slick({
        slidesToShow: 10,
        slidesToScroll: 1,
        arrows: false,
        infinite: false,
        asNavFor: '.slider-for',
        centerMode: false,
        focusOnSelect: true,
    });
});
/* END p-detail-2 */
/* BEGIN s-form-3 */
/* Thêm thư viện js/hitech/HTValidate.js */
$(document).ready(function(){
    $('#form_s-form-3').HTValidate({
        rules: {
            fullname: { required: 'Thông tin bắt buộc' },
            phone: { required: 'Thông tin bắt buộc', number: 'Vui lòng nhập số' },
            address: { required: 'Thông tin bắt buộc'},
            district: { required: 'Thông tin bắt buộc'}
        },
        // ajax: { url: 'dat-hang-nhanh-62.html' },
        setTemplate: { notify: 'Bạn đã đặt hàng thành công!', modal: 'notify_s-form-3' }
    });

    $('.s-form-3').on('click keyup blur', '[ht-trigger="s-cart"]', function(event) {
        var quantity = $(this).parent().find('input').val(),
            price = _HTHelper.number($(this).closest('tr').find('.td-price span').text()),
            sum = _HTHelper.number($(this).closest('tr').find('.td-sum span').text()),
            type = (event.type != 'keyup') ? $(this).attr('ht-type') : null;

        textWidth($(this).parent());
        if (type) {
            switch(type) {
                case 'blur': if (quantity.match(/^[1-9][0-9]*$/) == null) { quantity = 1; } break;
                case 'plus': quantity++; break;
                case 'minus': if (quantity > 1) { quantity--; } break;
            }
            if (quantity !== undefined) { sum = price * quantity; }
            // Xuất dữ liệu ra màng hình
            $(this).parent().find('input').val(quantity);
            $(this).closest('tr').find('.td-sum span').text(_HTHelper.money(sum));
            $(this).closest('.s-form-3').find('input[name="sum_price"]').val(sum);
        }
    });

    function textWidth(node) { // Thiết lập lại width cho input[name="quantity"]
        node.each(function(index, el) {
            var span = document.createElement('span');
            span.appendChild(document.createTextNode($(el).find('input').val()));
            span.style.position = "fixed";
            span.style['z-index'] = "-1";
            document.body.appendChild(span);
            $(el).children().css('width', (span.offsetWidth + 2));
            span.remove();
        });
    }
});
/* END s-form-3 */
$(document).ready(function(){
    $('.p-detail-2 .p_content .size ul li').click(function() {
        $(this).addClass('is-select');
        $(this).siblings().removeClass('is-select');
    });
    $('body').on('click', 'input[name="district"]', function(){
        var ship = $(this).val();
        var sum = $('.s-form-3').find('input[name="sum_price"]').val();
        var total = parseFloat(ship) + parseFloat(sum);
        $('.s-cart-1 .td-sum span').text(_HTHelper.money(total));
        $('.s-form-3').find('input[name="total_price"]').val(total);
    });
});

/* BEGIN s-form-2 */
/* Thêm thư viện js/hitech/HTValidate.js */
$(document).ready(function() {
    var defaults = {
        fullname: { required: 'Thông tin bắt buộc' },
        phone: { required: 'Thông tin bắt buộc', number: 'Vui lòng nhập số' },
        email: { required: 'Thông tin bắt buộc', email: 'Email không hợp lệ' }
    };
    $('#form_order').HTValidate({
        rules: defaults,
        setTemplate: { notify: 'Bạn đã đặt hàng thành công!', modal: 'notify_order' }
    });
    $('.s-form-2 [ht-trigger="recipient"]').click(function() {
        $('#form_order').unbind();
        $('.c-form-ship').toggleClass('hidden');
        $('.s-form-2 .s_info-recipient').toggleClass('hidden');
        if ($('.s-form-2 .s_info-pay').hasClass('col-sm-6')) {
            $('.s-form-2 .s_info-pay').removeClass('col-sm-6').addClass('col-sm-12');
            $('.s-form-2 .s_info-recipient').find('[name!="district"]').val('');
            $('#form_order').HTValidate({ rules: defaults });
        } else {
            $('.s-form-2 .s_info-pay').addClass('col-sm-6').removeClass('col-sm-12');
            $('#form_order').HTValidate({ rules: $.extend({}, defaults, {
                'recipient_data[fullname]': { required: 'Thông tin bắt buộc' },
                'recipient_data[phone]': { required: 'Thông tin bắt buộc', number: 'Vui lòng nhập số' },
                'recipient_data[email]': { required: 'Thông tin bắt buộc', email: 'Email không hợp lệ' }
            })});
        }
    });
    $('body').on('click', 'input[name="district"]', function(){
        var ship = $(this).val();
        var sum = $('.s-form-2').find('input[name="sum_price"]').val();
        var total = parseFloat(ship) + parseFloat(sum);
        $('.s-cart-2 .td-total span span').text(_HTHelper.money(total));
        $('.s-form-2').find('input[name="total_price"]').val(total);
    });
});
/* ENd s-form-2 */