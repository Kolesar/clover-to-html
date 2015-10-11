<?php

/**
 * This file is part of the Clover to Html package.
 *
 * (c) Stéphane Demonchaux <demonchaux.stephane@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace CloverToHtml;

class ConverterFactory
{
    /**
     * @return \CloverToHtml\Converter
     */
    public static function getInstance()
    {
        return new Converter(new Hydrator(), RenderFactory::getInstance());
    }
}
