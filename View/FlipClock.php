<?php

namespace Modules\FlipClock\View;

use Lightning\View\CSS;
use Lightning\View\JS;

class FlipClock {
    public static function render($options = []) {
        CSS::add('/css/flipclock.css');
        $start_time = 0;
        if (!empty($options['start'])) {
            $start_time = $options['start'];
            unset ($options['start']);
        }
        JS::startup('var clock = new FlipClock($("#flipclock"), ' . $start_time . ', ' . json_encode($options) . ');', '/js/flipclock.min.js');
        return '<div id="flipclock"></div>';
    }

    /**
     * @param $options
     *   integer start - Starting time in seconds.
     *   boolean countdown - True to count backwards to 0.
     *
     * @param $vars
     *
     * @return string
     */
    public static function renderMarkup($options, $vars) {
        return static::render($options);
    }
}
