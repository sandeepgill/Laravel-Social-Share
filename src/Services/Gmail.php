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

class Gmail extends Service implements ServiceContract
{
    public static function getUrl()
    {
        return 'https://mail.google.com/mail/?';
    }

    public static function getFields($link, $text, $media)
    {
        return [
            'u'    => $link,
            'body' => $text,
            'view' => 'cm',
            'fs'   => '1',
            'to'   => null,
            'ui'   => '2',
            'tf'   => '1',
        ];
    }
}
