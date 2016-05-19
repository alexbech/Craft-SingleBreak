<?php

namespace Craft;

class SingleBreakTwigExtension extends \Twig_Extension
{
	protected $env;

	public function getName()
	{
		return 'Single Break';
	}

	public function getFilters()
	{
		return array('singlebreak' => new \Twig_Filter_Method($this, 'singlebreak'));
	}

	public function initRuntime(\Twig_Environment $env)
	{
		$this->env = $env;
	}

	public function singlebreak($value)
	{
    $string = str_replace("<p><br /></p>", "", $value);
    $string = preg_replace("/<p>(<br ?\/>)*/", "<p>", $string);
    $string = preg_replace("/(<br ?\/>)*<\/p>/", "</p>", $string);
    return TemplateHelper::getRaw($string);
	}
	
}