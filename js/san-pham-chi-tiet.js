$(document).ready(function() {
    /* Thêm thư viện js/hitech/HTSlide.js */
    $('.s-main .b-slide-1').HTSlide();
    $('.s-main').on('click keyup blur', '[ht-trigger="s-cart"]', function(event) {
        var quantity = $(this).parent().find('input').val(),
            type = (event.type != 'keyup') ? $(this).attr('ht-type') : null;
        if (type) {
            switch(type) {
                case 'blur': if (quantity.match(/^[1-9][0-9]*$/) == null) { quantity = 1; } break;
                case 'plus': quantity++; break;
                case 'minus': if (quantity > 1) { quantity--; } break;
            }
            $(this).parent().find('input').val(quantity);
        }
    });
});
/* BEGIN s-home-2 */
/* Thêm thư viện js/vendor/slick/ */
$(document).ready(function() {
    $('.s-home-2-1 .slick-slider').slick({
        rows: 1,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        infinite: true,
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
/* BEGIN s-form-3 */
/* Thêm thư viện js/hitech/HTValidate.js */
$(document).ready(function(){
    $('#form_dathangnhanh').HTValidate({
        rules: {
            fullname: { required: 'Thông tin bắt buộc' },
            phone: { required: 'Thông tin bắt buộc', number: 'Vui lòng nhập số' },
            email: { required: 'Thông tin bắt buộc', email: 'Email không hợp lệ' }
        },
        // ajax: { url: 'dat-hang-nhanh-62.html' },
        setTemplate: { notify: 'Bạn đã đặt hàng thành công!', modal: 'notify_dathangnhanh' }
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
            $(this).closest('.s-form-3').find('input[name="total_price"]').val(sum);
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