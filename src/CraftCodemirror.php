<?php
/**
 * Craft Codemirror plugin for Craft CMS 3.x
 *
 * ...
 *
 * @link      https://lj.io
 * @copyright Copyright (c) 2020 Lewis Jenkins
 */

namespace lewisjenkins\craftcodemirror;


use Craft;
use craft\base\Plugin;
use craft\services\Plugins;
use craft\events\PluginEvent;

use yii\base\Event;

/**
 * Class CraftCodemirror
 *
 * @author    Lewis Jenkins
 * @package   CraftCodemirror
 * @since     1.0.4
 *
 */
class CraftCodemirror extends Plugin
{
    // Static Properties
    // =========================================================================

    /**
     * @var CraftCodemirror
     */
    public static $plugin;

    // Public Properties
    // =========================================================================

    /**
     * @var string
     */
    public $schemaVersion = '1.0.4';

    /**
     * @var bool
     */
    public $hasCpSettings = false;

    /**
     * @var bool
     */
    public $hasCpSection = false;

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        self::$plugin = $this;

        Event::on(
            Plugins::class,
            Plugins::EVENT_AFTER_INSTALL_PLUGIN,
            function (PluginEvent $event) {
                if ($event->plugin === $this) {
                }
            }
        );

        Craft::info(
            Craft::t(
                'craft-codemirror',
                '{name} plugin loaded',
                ['name' => $this->name]
            ),
            __METHOD__
        );
    }

    // Protected Methods
    // =========================================================================

}
