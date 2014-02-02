<?php

/*
 * This file is part of PHP-FFmpeg.
 *
 * (c) Alchemy <info@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FFMpeg\Format\Video;

/**
 * The FLV video format
 * @author Jakub Roszkiewicz <j.roszkiewicz@vaka.pl>
 */
class FLV extends DefaultVideo
{
    public function __construct($audioCodec = 'libmp3lame', $videoCodec = 'flv')
    {
        $this
            ->setAudioCodec($audioCodec)
            ->setVideoCodec($videoCodec);
    }

    /**
     * {@inheritDoc}
     */
    public function supportBFrames()
    {
        return true;
    }

    /**
     * {@inheritDoc}
     */
    public function getExtraParams()
    {
        return array('-f', 'flv');
    }

    /**
     * {@inheritDoc}
     */
    public function getAvailableAudioCodecs()
    {
        return array('libmp3lame', 'pcm_u8', 'pcm_s16be', 'pcm_s16le', 'adpcm_swf', 'nellymoser', 'libspeex');
    }

    /**
     * {@inheritDoc}
     */
    public function getAvailableVideoCodecs()
    {
        return array('flv', 'h263', 'mpeg4', 'flashsv', 'flashsv2', 'libx264');
    }
}
