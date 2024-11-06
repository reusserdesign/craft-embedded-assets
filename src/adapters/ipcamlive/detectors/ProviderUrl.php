<?php

namespace spicyweb\embeddedassets\adapters\ipcamlive\detectors;

use Embed\Detectors\ProviderUrl as BaseProviderUrlDetector;
use Psr\Http\Message\UriInterface;

/**
 * Embed provider URL detector class for IPCamLive.
 *
 * @package spicyweb\embeddedassets\adapters\ipcamlive\detectors
 * @author Spicy Web <plugins@spicyweb.com.au>
 * @since 5.3.0
 */
class ProviderUrl extends BaseProviderUrlDetector
{
    public function detect(): UriInterface
    {
        return $this->extractor->resolveUri('https://www.ipcamlive.com/');
    }
}
