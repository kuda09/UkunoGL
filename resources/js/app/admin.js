define(["jquery"], function ($) {

        "use strict";

        var self;
        var active = "active";
        var valid;
        var $context = '.adminLogin form';
        var nodes = {

            $email: $('input[type=text]', $context),
            $password: $('input[type=password]', $context),
            $btn: $('button', $context),
            $error: $('.error', $context)
        }

        var errorMessage = {

            NO_EMAIL: 'Please enter an email',
            IN_VALID_EMAIL: 'Invalid email address please enter a correct email address',
            NO_PASSWORD: 'Please enter an password',
            IN_VALID: "Invalid details please enter a correct details"
        }


        var init = function () {

            setEvents();
        }

        var setEvents = function () {


            nodes.$btn.on('click', handleClientFormValidation)
        }


        var handleClientFormValidation = function (e) {


            e.preventDefault();

            nodes.$error
                .removeClass(active)
                .html("");

            handleClientEmailValidation();
            handleClientPasswordValidation()


        }

        var handleClientEmailValidation = function () {

            valid = false;

            var validateEmail = function (email) {

                var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;

                return re.test(email);

            }

            if (nodes.$email.val() === '') {

                nodes.$error
                    .addClass(active)
                    .html(errorMessage.IN_VALID_EMAIL);

                return valid;

            } else if (!validateEmail(nodes.$email.val())) {


                nodes.$error
                    .addClass(active)
                    .html(errorMessage.NO_EMAIL);

                return valid;
            }

            valid = true;

            return valid;

        }

        var handleClientPasswordValidation = function () {

            valid = false;

            if (nodes.$password.val() === '') {


                nodes.$error
                    .addClass(active)
                    .html(nodes.$error.html() + "<br>" + errorMessage.NO_PASSWORD);

                return valid;
            }

            valid = true;

            return valid;
        }


        return init;

    }
)