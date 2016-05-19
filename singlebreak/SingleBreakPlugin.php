<?php

namespace Craft;

class SingleBreakPlugin extends BasePlugin
{
	public function getName()
	{
		return Craft::t('Single Break');
	}

	public function getVersion()
	{
		return '1.0.0';
	}

	public function getDeveloper()
	{
		return 'Alexander Bech';
	}

	public function getDeveloperUrl()
	{
		return 'http://www.vaersaagod.no';
	}

	public function addTwigExtension()
	{
		Craft::import('plugins.douche.twigextensions.SingleBreakTwigExtension');
		return new SingleBreakTwigExtension();
	}
}
