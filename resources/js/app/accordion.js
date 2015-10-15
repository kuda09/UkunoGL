define(["jquery"], function ($) {

    var self;
    var ACTIVE_CLASS = 'active';
    var $context = '.servicesMain';
    var nodes = {
        $servicesMenuList: $('.servicesMenu', $context),
        $servicesMenu: $('.servicesMenu', $context),
        $service: $('.service', $context)
    };


    var init = function () {

        setEvents();
    }

    var setEvents = function () {

        nodes.$servicesMenu.find('li').on('click', handleServiceMenuByClick)

    }

    var handleServiceMenuByClick = function (e) {

        e.preventDefault();

        var $this = $(this);

        nodes.$servicesMenu.find('li').attr('data-state', 'closed');


        $this
            .attr('data-state', $this.attr('data-state') == 'closed' ? 'open' : 'closed');


        if ($this.attr('data-state') === 'open') {

            var getList = $this.attr('data-service');
            nodes.$service.attr('data-state', 'closed');

            nodes.$service.each(function (index, value) {

                if (getList == index) {

                    nodes.$service
                        .eq(index)
                        .attr('data-state', 'open')

                }

            })
        }

    }

    return init;

})