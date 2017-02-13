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

namespace SandeepGill\SocialShare;

use Illuminate\Support\ServiceProvider;

class SocialShareServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('social-share', function () {
            return new Share();
        });
    }

    public function provides()
    {
        return array_merge(parent::provides(), ['social-share']);
    }

    public function getPackageName()
    {
        return 'social-share';
    }
}
