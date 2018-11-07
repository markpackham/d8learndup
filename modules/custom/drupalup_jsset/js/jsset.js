/*
@file
Contains JS functions
 */

(function ($, Drupal, drupalSettings) {
    'use strict';
    Drupal.behaviors.jsDrupalupTest = {
        attach: function (context, settings) {
            //append to the js-var element
            $('.js-var').once('jsDrupalupTest').append('<button class="button">' + drupalSettings.js_example.title + '</button>');
            console.log('ping');
        }
    }
})(jQuery, Drupal, drupalSettings);