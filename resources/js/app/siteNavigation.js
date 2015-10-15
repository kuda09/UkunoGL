define(["jquery"], function ($) {


    "use strict";


    var self;
    var ACTIVE_CLASS = 'active';
    var $context = '.navigation';
    var nodes = {
        $menuIcon: $('.mobileMenu', $context),
        $mobileDropdown: $('.dropdownContainer a', $context)
    };


    var init = function () {

        setEvents();
    }

    var setEvents = function () {

        nodes.$menuIcon.on('click', handleMobileMenuByClick);
        nodes.$mobileDropdown.on('click', handleMobileDropdownByClick);
    }

    var handleMobileMenuByClick = function (e) {

        e.preventDefault();

        var $target = $(this);

        $target
            .toggleClass(ACTIVE_CLASS)
            .next()
            .toggleClass(ACTIVE_CLASS);

    };

    var handleMobileDropdownByClick = function (e) {

        if ($(window).width() < 520){

            e.preventDefault();

            var $target = $(e.target);

            $target
                .toggleClass(ACTIVE_CLASS)
                .next()
                .toggleClass(ACTIVE_CLASS)
                .parent('.dropdownContainer')
                .toggleClass(ACTIVE_CLASS);
        }


    }

    return init;

})