<?php

/**
 * Toolset_Condition_Plugin_The_Events_Calendar_Active
 *
 * @since 3.2.0
 */
class Toolset_Condition_Plugin_The_Events_Calendar_Active implements Toolset_Condition_Interface {

	public function is_met() {
		return did_action( 'tribe_plugins_loaded' );
	}
}
