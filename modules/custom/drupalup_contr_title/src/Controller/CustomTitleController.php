<?php

namespace Drupal\drupalup_contr_title\Controller;

/*
 * Controller with custom title
 */

class CustomTitleController {

	/*
	 * {@inheritdoc}
	 */
	public function dummyPage() {
		return [
			'#type'   => 'markup',
			'#markup' => 'Hello from our custom page title controller. Refresh the page & see if the title changes using rand()',
		];
	}

	/*
 * {@inheritdoc}
 */
	public function titleCallback() {
		$randomTitleIndex = rand( 0, 2 );

		$randomTitles = [
			'This is a great page',
			'This is a terrible page',
			'Is this a page?',
		];

		return $randomTitles[ $randomTitleIndex ];
	}
}