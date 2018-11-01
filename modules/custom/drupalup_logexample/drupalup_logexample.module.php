<?php

/*
 * @file
 * Out hooks here
 */


function drupalup_logexample_node_insert(
	Drupal\Core\Entity\EntityChangedInterface $entity
) {
	\Drupal::logger( 'my_module' )->info( 'log test, a new node is created' );
}