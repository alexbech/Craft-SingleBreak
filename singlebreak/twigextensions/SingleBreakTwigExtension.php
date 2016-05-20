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
    public function singlebreak($string)
    {
      // Remove duplicates
      $string = preg_replace("#(<br\s*/?>\s*)+#","<br />", $string);

      // Remove orphan
      $string = str_replace("<p><br /></p>", "", $string);

      // Remove leading
      $string = preg_replace("#<p>(<br\s*/?>\s*)+#", "<p>", $string);

      // Remove trailing
      $string = preg_replace("#(<br\s*/?>\s*)+</p>#", "</p>", $string);
      
      return TemplateHelper::getRaw($string);
    }
}