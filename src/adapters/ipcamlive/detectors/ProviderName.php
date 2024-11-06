<?php

namespace spicyweb\embeddedassets\adapters\ipcamlive\detectors;

use Embed\Detectors\ProviderName as BaseProviderNameDetector;

/**
 * Embed provider name detector class for IPCamLive.
 *
 * @package spicyweb\embeddedassets\adapters\ipcamlive\detectors
 * @author Spicy Web <plugins@spicyweb.com.au>
 * @since 5.3.0
 */
class ProviderName extends BaseProviderNameDetector
{
    public function detect(): string
    {
        return 'IPCamLive';
    }
}
