define(["jquery"], function ($) {

    var self;
    var ACTIVE_CLASS = 'active';
    var $context = '.faq-list';
    var nodes = {
        $header: $('dt', $context),
        $body: $('dd', $context)
    };


    var init = function () {

        setEvents();
    }

    var setEvents = function () {


        nodes.$header.on('click', handleToggle);
    }

    var handleToggle = function (e) {

        e.preventDefault();


        var $this = $(this);

        $this
            .find('i')
            .toggleClass('fa-chevron-down')
            .toggleClass('fa-chevron-up');

        $this
            .next()
            .toggleClass('hide');

    }


    return init;

})