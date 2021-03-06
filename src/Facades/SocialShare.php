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

namespace SandeepGill\SocialShare\Facades;

use Illuminate\Support\Facades\Facade;

class SocialShare extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'social-share';
    }
}
