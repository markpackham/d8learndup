<?php

namespace Drupal\drupalup_json_api\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;

/*
 * Json api controller class
 */

class JsonApiController {

	public function renderApi() {
		return new JsonResponse(
			[
				'data'   => $this->getResults(),
				'method' => 'GET',
			]
		);
	}

	private function getResults() {
		return [
			[
				"name"     => "A",
				"year"     => 1,
				"duration" => 1,
			],
			[
				"name"     => "B",
				"year"     => 2,
				"duration" => 2,
			],
			[
				"name"     => "C",
				"year"     => 3,
				"duration" => 3,
			],
			[
				"name"     => "D",
				"year"     => 4,
				"duration" => 4,
			],
		];
	}
}