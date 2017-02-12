<?php

/*
 * This file is part of Laravel Social Share.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

/*
 * This file is part of Laravel Social Share.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SandeepGill\SocialShare\Services;

class Springpad extends Service
{
    public static function getUrl()
    {
        return 'https://springpadit.com/s?';
    }

    public static function getFields($link, $text, $media)
    {
        return [
            'url'  => $link,
            'name' => $text,
            'type' => 'lifemanagr.Bookmark',
        ];
    }
}
