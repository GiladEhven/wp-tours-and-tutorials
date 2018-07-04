<?php

	namespace Ehven\Gilad\WordPress\Plugins\WpToursAndTutorials;

	if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

	if ( ! class_exists( __NAMESPACE__ . 'Gilad_Tours' ) ) {

		class Gilad_Tours {

            public static $object_counter = 0;

			public function __construct() {

                self::$object_counter++;

			}



		}

	}
