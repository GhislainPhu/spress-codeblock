<?php

namespace GhislainPhu\Spress\Plugin\Codeblock;

use Yosymfony\Spress\Core\Plugin\PluginInterface;
use Yosymfony\Spress\Core\Plugin\EventSubscriber;
use Yosymfony\Spress\Core\Plugin\Event\EnvironmentEvent;
use Ramsey\Twig\CodeBlock\TokenParser\CodeBlockParser;

/**
 * Spress Plugin entry point
 *
 * @author Ghislain PHU <contact@ghislainphu.fr>
 */
class SpressCodeblock implements PluginInterface
{
    /**
     * Initialize plugin: subscribe to events
     *
     * @param EventSubscriber $subscriber
     */
    public function initialize(EventSubscriber $subscriber)
    {
        $subscriber->addEventListener('spress.start', 'onStart');
    }

    /**
     * Get plugin metadatas
     *
     * @return array
     */
    public function getMetas()
    {
        return [
            'name'        => 'ghislainphu/spress-codeblock',
            'description' => 'Add codeblock Twig function to Spress.',
            'author'      => 'Ghislain PHU',
            'license'     => 'MIT',
        ];
    }

    /**
     * Register the `codeblock` tag on startup
     *
     * @param EnvironmentEvent $event The start event
     */
    public function onStart(EnvironmentEvent $event)
    {
        $renderizer = $event->getRenderizer();

        if (method_exists($renderizer, 'addTwigTag')) {
            $renderizer->addTwigTag(new CodeBlockParser());
        }
    }
}
