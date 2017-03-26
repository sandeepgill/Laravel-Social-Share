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

class LinkedIn extends Service implements ServiceContract
{
    public static function getUrl()
    {
        return 'http://www.linkedin.com/shareArticle?';
    }

    public static function getFields($link, $text, $media)
    {
        return [
            'url'   => $link,
            'title' => $text,
            'mini'  => 'true',
        ];
    }
}
