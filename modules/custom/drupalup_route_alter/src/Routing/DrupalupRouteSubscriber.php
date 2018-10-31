<?php

namespace Drupal\drupalup_route_alter\Routing;

use Drupal\Core\Routing\RouteSubscriberBase;
use Symfony\Component\Routing\RouteCollection;

/*
 * Listens to the dynamic route events & enables us to alter them
 */

class DrupalupRouteSubscriber extends RouteSubscriberBase {

	/**
	 * Alters existing routes for a specific collection.
	 *
	 * @param \Symfony\Component\Routing\RouteCollection $collection
	 *   The route collection for adding routes.
	 */
	protected function alterRoutes( RouteCollection $collection ) {
		$user_login_route = $collection->get( 'user.login' );
		$user_login_route->setPath( '/drupalup/login' );

		$user_route = $collection->get( 'user.page' );
		$user_route->setPath( '/drupalup' );
	}
}