<?php

namespace spicyweb\embeddedassets\adapters\ipcamlive\detectors;

use craft\helpers\Html;
use Embed\Detectors\Code as BaseCodeDetector;
use Embed\EmbedCode;

/**
 * Embed code detector class for IPCamLive.
 *
 * @package spicyweb\embeddedassets\adapters\ipcamlive\detectors
 * @author Spicy Web <plugins@spicyweb.com.au>
 * @since 5.3.0
 */
class Code extends BaseCodeDetector
{
    public function detect(): ?EmbedCode
    {
        $uri = $this->extractor->getUri();

        if ($uri->getPath() !== '/player/player.php') {
            return null;
        }

        $iframe = Html::tag('iframe', '', [
            'src' => (string)$uri,
        ]);
        
        return new EmbedCode(htmlspecialchars_decode($iframe, ENT_QUOTES | ENT_HTML5));
    }
}
