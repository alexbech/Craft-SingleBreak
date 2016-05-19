<?php
/**
 * SingleBreak plugin for Craft CMS
 *
 * SingleBreak is a twig filter that removes leading, trailing and orphaned linebreaks in your paragraphs.
 *
 * @author    Alexander Bech
 * @copyright Copyright (c) 2016 Alexander Bech
 * @link      http://vaersaagod.no
 * @package   SingleBreak
 * @since     1.0.0
 */

namespace Craft;

class SingleBreakPlugin extends BasePlugin
{
    /**
     * @return mixed
     */
    public function init()
    {
    }

    /**
     * @return mixed
     */
    public function getName()
    {
         return Craft::t('SingleBreak');
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return Craft::t('SingleBreak is a twig filter that removes leading, trailing and orphaned linebreaks in your paragraphs.');
    }

    /**
     * @return string
     */
    public function getDocumentationUrl()
    {
        return 'https://github.com/alexbech/SingleBreak-Craft/blob/master/README.md';
    }

    /**
     * @return string
     */
    public function getReleaseFeedUrl()
    {
        return 'https://raw.githubusercontent.com/alexbech/SingleBreak-Craft/master/releases.json';
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return '1.0.0';
    }

    /**
     * @return string
     */
    public function getSchemaVersion()
    {
        return '1.0.0';
    }

    /**
     * @return string
     */
    public function getDeveloper()
    {
        return 'Alexander Bech';
    }

    /**
     * @return string
     */
    public function getDeveloperUrl()
    {
        return 'http://vaersaagod.no';
    }

    /**
     * @return bool
     */
    public function hasCpSection()
    {
        return false;
    }

    /**
     * @return mixed
     */
    public function addTwigExtension()
    {
        Craft::import('plugins.singlebreak.twigextensions.SingleBreakTwigExtension');

        return new SingleBreakTwigExtension();
    }
}