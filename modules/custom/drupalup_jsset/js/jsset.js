/*
@file
Contains JS functions
 */

(function ($, Drupal, drupalSettings) {
    'use strict';
    Drupal.behaviors.jsDrupalupTest = {
        attach: function (context, settings) {
            //append to the js-var element
            $('.js-var').once('jsDrupalupTest').append('' +
                '<p>The button changes based on the site name: /admin/config/system/site-information</p>' +
                '<button class="button">' + drupalSettings.js_example.title + '</button>'
                + '<p>We have a console.log "ping" message to prove the .once from jquery.once works</p>'
            );
            console.log('ping');
        }
    }
})(jQuery, Drupal, drupalSettings);