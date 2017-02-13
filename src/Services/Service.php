<?php

/*
 * This file is part of Laravel Social Share.
 *
 * @author Sandeep Gill <sandeep.gill@justaboutmachines.com.au>
 *
 * Based on the package developed by: Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SandeepGill\SocialShare\Services;

abstract class Service
{
    public static function getSchema($link, $text = null, $media = null)
    {
        $query = urldecode(http_build_query(
            static::getFields($link, $text, $media)
        ));

        return static::getUrl().$query;
    }

    abstract public static function getUrl();

    abstract public static function getFields($link, $text, $media);
}
