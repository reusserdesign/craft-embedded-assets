<?php

namespace spicyweb\embeddedassets\adapters\ipcamlive;

use spicyweb\embeddedassets\adapters\default\Extractor as BaseExtractor;
use spicyweb\embeddedassets\adapters\ipcamlive\detectors\Code;
use spicyweb\embeddedassets\adapters\ipcamlive\detectors\ProviderName;
use spicyweb\embeddedassets\adapters\ipcamlive\detectors\ProviderUrl;
use spicyweb\embeddedassets\adapters\ipcamlive\detectors\Type;

/**
 * Embed extractor class for IPCamLive.
 *
 * @package spicyweb\embeddedassets\adapters\ipcamlive
 * @author Spicy Web <plugins@spicyweb.com.au>
 * @since 5.3.0
 */
class Extractor extends BaseExtractor
{
    public function createCustomDetectors(): array
    {
        return [
            'code' => new Code($this),
            'providerName' => new ProviderName($this),
            'providerUrl' => new ProviderUrl($this),
            'type' => new Type($this),
        ] + parent::createCustomDetectors();
    }
}
