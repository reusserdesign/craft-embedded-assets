<?php

namespace spicyweb\embeddedassets\adapters\ipcamlive\detectors;

use Embed\Detectors\Detector;

/**
 * Embed type detector class for IPCamLive.
 *
 * @package spicyweb\embeddedassets\adapters\ipcamlive\detectors
 * @author Spicy Web <plugins@spicyweb.com.au>
 * @since 5.3.0
 */
class Type extends Detector
{
    public function detect(): ?string
    {
        return $this->extractor->getUri()->getPath() === '/player/player.php'
            ? 'rich'
            : 'link';
    }
}
