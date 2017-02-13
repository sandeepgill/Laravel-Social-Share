<?php

/*
 * This file is part of Laravel Social Share.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/*
 * This file is part of Laravel Social Share.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SandeepGill\SocialShare\Services;

class Pinterest extends Service
{
    public static function getUrl()
    {
        return 'http://pinterest.com/pin/create/button/?';
    }

    public static function getFields($link, $text, $media)
    {
        return [
            'url'         => $link,
            'media'       => $text,
            'description' => $text,
        ];
    }
}
