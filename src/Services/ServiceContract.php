<?php
/**
 * Created by PhpStorm.
 * User: sandeep
 * Date: 26/03/17
 * Time: 7:18 PM
 */

namespace SandeepGill\SocialShare\Services;


interface ServiceContract
{
	public static function getSchema($link, $text = null, $media = null);

	public static function getUrl();

	public static function getFields($link, $text, $media);
}