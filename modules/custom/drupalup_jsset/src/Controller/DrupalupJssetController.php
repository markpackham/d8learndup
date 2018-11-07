<?php

namespace Drupal\drupalup_jsset\Controller;

use Drupal\Core\Controller\ControllerBase;

/*
 * Output of our JS page
 */

class DrupalJssetController extends ControllerBase {

	/*
	 * Rendering a js page
	 */
	public function jsPage() {
		$build            = [];
		$build['content'] = [
			'#markup' => '<div class="js-var"' . $this->t( 'Our JS page' ) . '</div>',
		];

		//add our library
		$build['#attached']['library'][] = 'drupalup_jsset/js_example';
		//We get system site's name from \core\modules\system\config\install\system.site.yml
		$build['#attached']['drupalSettings']['js_example']['title'] = $this->config( 'system.site' )
		                                                                    ->get( 'name' );
		return $build;
	}

}