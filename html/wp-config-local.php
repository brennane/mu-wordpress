<?php

// See "WORDPRESS_DEBUG" in mu.yml to configure WP_DEBUG,
// so that it can be set per environment.
// -- DO NOT SET WP_DEBUG HERE --
//define('WP_DEBUG', true);

// Tell WordPress to log everything to /wp-content/debug.log
define('WP_DEBUG_LOG', true);

// Turn off the display of error messages on your site
define('WP_DEBUG_DISPLAY', true);

@ini_set('display_errors', 1);
