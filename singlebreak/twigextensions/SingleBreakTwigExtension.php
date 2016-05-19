<?php
/**
 * SingleBreak plugin for Craft CMS
 *
 * SingleBreak Twig Extension
 *
 * @author    Alexander Bech
 * @copyright Copyright (c) 2016 Alexander Bech
 * @link      http://vaersaagod.no
 * @package   SingleBreak
 * @since     1.0.0
 */

namespace Craft;

use Twig_Extension;
use Twig_Filter_Method;

class SingleBreakTwigExtension extends \Twig_Extension
{
    /**
     * @return string The extension name
     */
    public function getName()
    {
        return 'SingleBreak';
    }

    /**
     * @return array
     */
    public function getFilters()
    {
        return array(
            'singlebreak' => new \Twig_Filter_Method($this, 'singlebreak'),
        );
    }

    /**
    * @return array
     */
    public function getFunctions()
    {
        return array(
            'singlebreak' => new \Twig_Function_Method($this, 'singlebreak'),
        );
    }

    /**
     * @return string
     */
    public function singlebreak($value)
    {
      $string = str_replace("<p><br /></p>", "", $value);
      $string = preg_replace("/<p>(<br ?\/>)*/", "<p>", $string);
      $string = preg_replace("/(<br ?\/>)*<\/p>/", "</p>", $string);
      return TemplateHelper::getRaw($string);
    }
}