<?php

namespace spicyweb\embeddedassets\actions;

use Craft;
use craft\base\ElementAction;
use craft\elements\Asset;

/**
 * Refresh element action.
 *
 * @package spicyweb\embeddedassets\actions
 * @author Spicy Web <plugins@spicyweb.com.au>
 * @since 4.2.0
 */
class Refresh extends ElementAction
{
    /**
     * @inheritdoc
     */
    public function getTriggerLabel(): string
    {
        return Craft::t('embeddedassets', 'Refresh');
    }

    /**
     * @inheritdoc
     */
    public function getTriggerHtml(): ?string
    {
        Craft::$app->getView()->registerJsWithVars(fn($type, $assetClassName) => <<<JS
(() => {
    new Craft.ElementActionTrigger({
        type: $type,
        bulk: true,
        validateSelection: \$selectedItems => \$selectedItems.find('.element[data-type=$assetClassName]').get().every(selectedItem => selectedItem.hasAttribute('data-embedded-asset')),
    });
})();
JS, [static::class, str_replace('\\', '\\\\', Asset::class)]);

        return null;
    }
}
