<?php
/**
 * @package Helix Ultimate Framework
 * @author JoomShaper https://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2018 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or Later
*/

defined ('_JEXEC') or die();

class HelixUltimateFeatureTitle
{

	private $params;

	public function __construct($params)
	{
		$this->position = 'title';
	}

	public function renderFeature()
	{

		$app = \JFactory::getApplication();
		$menuitem   = $app->getMenu()->getActive();

		if($menuitem)
		{

			$params = $menuitem->params;

			if($params->get('helixultimate_enable_page_title', 0))
			{

				$page_title 		 = $menuitem->title;
				$page_title_alt 	 = $params->get('helixultimate_page_title_alt');
				$page_subtitle 		 = $params->get('helixultimate_page_subtitle');
				$page_title_bg_color = $params->get('helixultimate_page_title_bg_color');
				$page_title_bg_image = $params->get('helixultimate_page_title_bg_image');

				$style = '';

				if($page_title_bg_color)
				{
					$style .= 'background-color: ' . $page_title_bg_color . ';';
				}

				if($page_title_bg_image)
				{
					$style .= 'background-image: url(' . \JURI::root(true) . '/' . $page_title_bg_image . ');';
				}

				if($style)
				{
					$style = 'style="' . $style . '"';
				}

				if($page_title_alt)
				{
					$page_title 	 = $page_title_alt;
				}

				$output = '';
				if($page_title_bg_image)
				{
					$output .= '<div class="sp-page-title bg"'. $style .'>';
				}else {
					$output .= '<div class="sp-page-title"'. $style .'>';
				}
				
				$output .= '<div class="container"><div class="row"><div class="col-lg-12 ">';
				$output .= ''. $page_title .'';

				if($page_subtitle)
				{
					$output .= '<p>'. $page_subtitle .'</p>';
				}

				$output .= '<jdoc:include type="modules" name="breadcrumb" style="none" />';

				$output .= '</div></div></div>';
				$output .= '</div>';

				return $output;

			}

		}

	}
}
