define(["jquery"], function ($) {

        "use strict";

        var self;
        var active = "active";
        var valid;
        var $context = $('.updateSingleOrder');
        var nodes = {
            $orderLocation: $('#orderLocation'),
            $orderProgress: $('#orderProgress'),
            $btn: $('button'),
            $error: $('.error')
        }

        var errorMessage = {

            ORDER_LOCATION: "Please enter current order destination",
            ORDER_PROGRESS: "Enter order progress",
            ORDER_NUMBER: "Progress must be a percentage between 0 to 100%"
        }


        var init = function () {

            setEvents();
        }
        var setEvents = function () {


            $context.on('submit', handleClientFormValidation);
        }


        var handleClientFormValidation = function (e) {


            e.preventDefault();

            nodes.$error
                .removeClass(active)
                .html("");

            handleNodesValidation();


            if (handleNodesValidation()) {

                var convertOrderProgressToNumber = parseInt(nodes.$orderProgress.val());

                nodes.$orderProgress.val(convertOrderProgressToNumber);

                $context[0].submit();

            }

        }

        var handleNodesValidation = function () {


            valid = false;

            var regex = /^[0-9]+$/;


            if (nodes.$orderLocation.val() == "") {

                nodes.$error
                    .addClass(active)
                    .html(errorMessage.ORDER_LOCATION);

                return valid;
            }


            if (nodes.$orderProgress.val() == "") {

                nodes.$error
                    .addClass(active)
                    .html(errorMessage.ORDER_PROGRESS);

                return valid;
            } else if (!nodes.$orderProgress.val().match(regex)){

                nodes.$error
                    .addClass(active)
                    .html(errorMessage.ORDER_NUMBER);

                return valid;

            }

            valid = true;

            return valid;
        }

        return init;

    }
)