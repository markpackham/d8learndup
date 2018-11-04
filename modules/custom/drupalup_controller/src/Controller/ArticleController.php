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

		$items = array(
			array( 'name' => 'Article one' ),
			array( 'name' => 'Article two' ),
			array( 'name' => 'Article three' ),
			array( 'name' => 'Article four' ),
		);


		return [
			'#theme' => 'article_list',
			'#items' => $items,
			'#title' => 'Our article list',
		];
	}

}
