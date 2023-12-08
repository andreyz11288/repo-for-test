define(['jquery'], function ($) {
    'use strict';

    return function (target) {
        return target.extend({
            initialize: function () {
                this._super();

                $.ajax({
                    url: '/rest/all/V1/greeting',
                    type: 'GET',
                    dataType: 'json'
                }).done(function (response) {
                    const greetingMessage = response;

                    if (greetingMessage) {
                        const greetingElement = $('<div style="background-color: red; color: white;">' + greetingMessage + '</div>');
                        $('#opc-shipping_method').before(greetingElement);
                    }
                }).fail(function (jqXHR, textStatus, errorThrown) {
                    console.error('AJAX request failed:', textStatus, errorThrown);
                });
            }
        });
    };
});
