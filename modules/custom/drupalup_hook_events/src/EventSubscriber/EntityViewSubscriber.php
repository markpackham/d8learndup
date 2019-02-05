<?php

namespace Drupal\drupalup_hook_events\EventSubscriber;

use Drupal\hook_event_dispatcher\HookEventDispatcherInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/*
Entity View Subscriber class
 */
class EntityViewSubscriber implements EventSubscriberInterface
{
    /**
     *{@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            //We get the Constant event "ENTITY_VIEW" from the contrib module "hook_event_dispatcher"
            HookEventDispatcherInterface::ENTITY_VIEW => 'entityViewCallback',
        ];
    }

    /*
    Our callback function
     */
    public function entityViewCallback($event)
    {
        //kint($event);die;
        $build = $event->getBuild();
        $build['new_renderable'] = [
            '#type' => 'markup',
            '#markup' => 'Hello from our changed renderable!',
        ];
        $event->setBuild($build);
    }
}
