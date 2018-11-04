<?php

namespace Drupal\drupalup_controller\Controller;

/*
 *
 */

class ArticleController {

	/*
	 * The page is where we render the page of our controller
	 */
	public function page() {

		$items = [
			[ 'name' => 'Article one' ],
			[ 'name' => 'Article two' ],
			[ 'name' => 'Article three' ],
			[ 'name' => 'Article four' ],
		];


		return [
			'#theme' => 'article_list',
			'#items' => $items,
			'#title' => 'Our article list',
		];
	}

}
