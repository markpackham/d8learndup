<?php

namespace Drupal\drupalup_tabs\Controller;

/*
 * Example controller that we are using for our tabs
 */

class DrupalUpTabController {

	/*
	 * Main tab
	 */
	public function mainTab() {
		return [
			'#markup' => 'Main tab',
		];
	}

	/*
	 * Sub tab one
	 */
	public function subTabOne() {
		return [
			'#markup' => 'Sub tab one',
		];
	}

	/*
	 * Sub tab two
	 */
	public function subTabTwo() {
		return [
			'#markup' => 'Sub tab two',
		];
	}

}