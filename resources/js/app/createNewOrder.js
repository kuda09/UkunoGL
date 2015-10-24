define(["jquery"], function ($) {

        "use strict";

        var self;
        var active = "active";
        var valid;
        var $context = $('.createNewOrder');
        var nodes = {
            $orderName: $('#orderName'),
            $orderSender: $('#orderSender'),
            $orderPickup: $('#orderPickup'),
            $orderDestination: $('#orderDestination'),
            $orderArrival: $('#orderArrival'),
            $orderPrice: $('#orderPrice'),
            $orderCurrentDate: $('#currentDate'),
            $orderId: $('#orderId'),
            $orderDetails: $('#orderDetails'),
            $btn: $('button'),
            $error: $('.error')
        }

        var errorMessage = {

            ORDER_NAME: "Please enter an order name",
            ORDER_SENDER: "Please enter the order sender",
            ORDER_PICKUP: "Please enter the order pickup",
            ORDER_DESTINATION: "Please enter the order destination",
            ORDER_ARRIVAL: "Please enter the order arrival",
            ORDER_PRICE: "Please enter the order price",
            ORDER_DETAILS: "Please enter the order details"
        }


        var init = function () {

            setEvents();
        }
        var setEvents = function () {

            //generateOrderId();
            //computerOrderDate();
            $context.on('submit', handleClientFormValidation);
        }


        var handleClientFormValidation = function (e) {


            e.preventDefault();

            nodes.$error
                .removeClass(active)
                .html("");



            handleNodesValidation();

            if(handleNodesValidation()){

                $context[0].submit();
            }

        }

        var handleNodesValidation = function () {


            valid = false;

            if( nodes.$orderName.val() == ""){

                nodes.$error
                    .addClass(active)
                    .html(errorMessage.ORDER_NAME);

                return valid;
            }
            if( nodes.$orderSender.val() == ""){

                nodes.$error
                    .addClass(active)
                    .html(errorMessage.ORDER_SENDER);

                return valid;
            }
            if( nodes.$orderPickup.val() == ""){

                nodes.$error
                    .addClass(active)
                    .html(errorMessage.ORDER_PICKUP);

                return valid;
            }
            if( nodes.$orderDestination.val() == ""){

                nodes.$error
                    .addClass(active)
                    .html(errorMessage.ORDER_DESTINATION);

                return valid;
            }
            if( nodes.$orderArrival.val() == ""){

                nodes.$error
                    .addClass(active)
                    .html(errorMessage.ORDER_ARRIVAL);

                return valid;
            }
            if( nodes.$orderPrice.val() == ""){

                nodes.$error
                    .addClass(active)
                    .html(errorMessage.ORDER_PRICE);

                return valid;
            }

            if( nodes.$orderDetails.val() == ""){

                nodes.$error
                    .addClass(active)
                    .html(errorMessage.ORDER_DETAILS);

                return valid;
            }


            valid = true;

            return valid;
        }
        var generateOrderId = function () {

            var orderId = Math.floor(Math.random() * 100000);

            nodes.$orderId.val(orderId);
        }
        var computerOrderDate  = function () {

            var currentDate = new Date().toLocaleDateString();

            nodes.$orderCurrentDate.val(currentDate);

        }


        return init;

    }
)