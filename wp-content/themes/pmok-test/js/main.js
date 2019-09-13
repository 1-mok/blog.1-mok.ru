$(document).ready(
    function () {
        var oHeader = document.getElementById('header-menu'),
            oToggler = document.getElementById('menu-toggler'),
            oInner = $(oHeader).find('.inner'),
            header_H = $(oHeader).outerHeight(),
            inner_H = oInner.outerHeight();

        $(oToggler).on('click', function () {
            $(this).toggleClass('active');

            oInner.slideToggle(300);
        });
        $('.callMe').on('click', function () {
            $('.popup').show();
        });
        $('.js-popup-close').on('click', function () {
            $('.popup').hide();
        });
    }

)
