<?php

namespace Drupal\drupalup_service;

/*
 * CowService is a simple example of a Drupal 8 service
 */

use Drupal\Core\Session\AccountProxyInterface;

class CowService
{

    private $sounds = ["moo", "meh"];
    private $currentUser;

    /*
     * use the current_user service from drupal.org
     * we want to do an injection into our service with the current user
     */
    public function __construct(AccountProxyInterface $currentUser)
    {
        $this->currentUser = $currentUser;
    }

    /*
     * Returns a cow sound
     */
    public function saySomething()
    {
        return $this->sounds[array_rand($this->sounds)];
    }

    /*
     * Returns the cow owner
     */
    public function whoIsYourOwner()
    {
        return ($this->currentUser->getDisplayName());
    }
}
