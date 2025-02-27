<?php
/**
 * Craft3 Forms plugin
 *
 * @author    Lucas Weijers
 * @copyright Copyright (c) 2017 Dolphiq
 * @link      https://dolphiq.nl/
 */

namespace plugins\starfish01\iconpicker;

use Craft;
use plugins\starfish01\iconpicker\fields\Iconpicker;
use craft\events\RegisterComponentTypesEvent;
use craft\services\Fields;
use yii\base\Event;
use yii\web\View;

class Plugin extends \craft\base\Plugin
{
    public function init()
    {
        parent::init();

        // Register field type
        Event::on(Fields::class, Fields::EVENT_REGISTER_FIELD_TYPES, function (RegisterComponentTypesEvent $event) {
            $event->types[] = Iconpicker::class;
        });
    }
}
