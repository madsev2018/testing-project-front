<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2016 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('restricted aceess');

class SppagebuilderAddonAnimated_number extends SppagebuilderAddons{

	public function render() {

		$number = (isset($this->addon->settings->number) && $this->addon->settings->number) ? $this->addon->settings->number : 0;
		$duration = (isset($this->addon->settings->duration) && $this->addon->settings->duration) ? $this->addon->settings->duration : 0;
		$text = (isset($this->addon->settings->text) && $this->addon->settings->text) ? $this->addon->settings->text : '';
		$bgcolor = (isset($this->addon->settings->bgcolor) && $this->addon->settings->bgcolor) ? $this->addon->settings->bgcolor : '';
		$color2 = (isset($this->addon->settings->color2) && $this->addon->settings->color2) ? $this->addon->settings->color2 : '';
		$bordercolor = (isset($this->addon->settings->bordercolor) && $this->addon->settings->bordercolor) ? $this->addon->settings->bordercolor : '';

		$counter_title = (isset($this->addon->settings->counter_title) && $this->addon->settings->counter_title) ? $this->addon->settings->counter_title : '';
		$alignment = (isset($this->addon->settings->alignment) && $this->addon->settings->alignment) ? $this->addon->settings->alignment : '';
		$class = (isset($this->addon->settings->class) && $this->addon->settings->class) ? $this->addon->settings->class : '';
		if($bgcolor) {
			$bg = 'background-color:'.$bgcolor.'';

		}else {
			$bg = '';
		}
		if($bordercolor) {
			$border = 'border-color:'.$bordercolor.'';
		}else {
			$border = '';
		}
		if($bgcolor || $bordercolor ){
		    $pad = ' pad';
		}
		if($color2) {
			$color2 = 'color:'.$color2.'';
		}else {
			$color2 = '';
		}
		$output  = '<div class="sppb-addon sppb-addon-animated-number '. $alignment . ' ' . $class .'">';
		$output .= '<div style="'.$bg.';'.$border.'" class="sppb-addon-content '. $pad .'">';
		$output .= '<div class="animated-number"><span class="sppb-animated-number" data-digit="'. $number.'" data-duration="' . $duration.'">0</span><span>' . $text . '</span></div>';
		if($counter_title) {
			$output .= '<div style="'.$color2.'" class="sppb-animated-number-title">' . $counter_title . '</div>';
		}
		$output .= '</div>';
		$output .= '</div>';

		return $output;
	}

	public function css() {
		$addon_id = '#sppb-addon-' . $this->addon->id;
		$number_style  = (isset($this->addon->settings->color) && $this->addon->settings->color) ? "\tcolor: " . $this->addon->settings->color  . ";\n" : '';
		$number_style_sm  = '';
		$number_style_xs  = '';

		$number_style .= (isset($this->addon->settings->font_size) && $this->addon->settings->font_size) ? 'font-size:' . (int) $this->addon->settings->font_size . 'px!important;line-height:' . (int) $this->addon->settings->font_size . 'px;' : '';
		$number_style_sm .= (isset($this->addon->settings->font_size_sm) && $this->addon->settings->font_size_sm) ? 'font-size:' . (int) $this->addon->settings->font_size_sm . 'px!important;line-height:' . (int) $this->addon->settings->font_size_sm . 'px;' : '';
		$number_style_xs .= (isset($this->addon->settings->font_size_xs) && $this->addon->settings->font_size_xs) ? 'font-size:' . (int) $this->addon->settings->font_size_xs . 'px!important;line-height:' . (int) $this->addon->settings->font_size_xs . 'px;' : '';

		$text_style = (isset($this->addon->settings->counter_color) && $this->addon->settings->counter_color) ? "\tcolor: " . $this->addon->settings->counter_color  . "px;\n" : '';
		$text_style_sm = '';
		$text_style_xs = '';

		$text_style .= (isset($this->addon->settings->title_font_size) && $this->addon->settings->title_font_size) ? 'font-size:' . (int) $this->addon->settings->title_font_size . 'px!important;line-height:' . (int) $this->addon->settings->title_font_size . 'px;': '';
		$text_style_sm .= (isset($this->addon->settings->title_font_size_sm) && $this->addon->settings->title_font_size_sm) ? 'font-size:' . (int) $this->addon->settings->title_font_size_sm . 'px!important;line-height:' . (int) $this->addon->settings->title_font_size_sm . 'px;': '';
		$text_style_xs .= (isset($this->addon->settings->title_font_size_xs) && $this->addon->settings->title_font_size_xs) ? 'font-size:' . (int) $this->addon->settings->title_font_size_xs . 'px!important;line-height:' . (int) $this->addon->settings->title_font_size_xs . 'px;': '';

		$css = '';

		if($number_style) {
			$css .= $addon_id . ' .animated-number {';
			$css .= $number_style;
			$css .= '}';
		}

		if($text_style) {
			$css .= $addon_id . ' .sppb-animated-number-title {';
			$css .= $text_style;
			$css .= '}';
		}

		$css .= '@media (min-width: 768px) and (max-width: 991px) {';
			if($number_style_sm) {
				$css .= $addon_id . ' .sppb-animated-number {';
					$css .= $number_style_sm;
				$css .= '}';
			}

			if($text_style_sm) {
				$css .= $addon_id . ' .sppb-animated-number-title {';
					$css .= $text_style_sm;
				$css .= '}';
			}
		$css .= '}';

		$css .= '@media (max-width: 767px) {';
			if($number_style_xs) {
				$css .= $addon_id . ' .sppb-animated-number {';
					$css .= $number_style_xs;
				$css .= '}';
			}

			if($text_style_xs) {
				$css .= $addon_id . ' .sppb-animated-number-title {';
					$css .= $text_style_xs;
				$css .= '}';
			}
		$css .= '}';

		return $css;
	}

	public static function getTemplate(){
		$output = '
		<#
			var addonId = "sppb-addon-"+data.id;
		#>
		<style type="text/css">
			#{{ addonId }} .sppb-animated-number{
				color: {{ data.color }};
				<# if(_.isObject(data.font_size)){ #>
					font-size: {{ data.font_size.md }}px;
					line-height: {{ data.font_size.md }}px;
				<# } else { #>
					font-size: {{ data.font_size }}px;
					line-height: {{ data.font_size }}px;
				<# } #>
			}
			#{{ addonId }} .sppb-animated-number-title{
				color: {{ data.counter_color }};
				<# if(_.isObject(data.title_font_size)){ #>
					font-size: {{ data.title_font_size.md }}px;
					line-height: {{ data.title_font_size.md }}px;
				<# } else { #>
					font-size: {{ data.title_font_size }}px;
					line-height: {{ data.title_font_size }}px;
				<# } #>
			}
			@media (min-width: 768px) and (max-width: 991px) {
				#{{ addonId }} .sppb-animated-number{
					<# if(_.isObject(data.font_size)){ #>
						font-size: {{ data.font_size.sm }}px;
						line-height: {{ data.font_size.sm }}px;
					<# } #>
				}
				#{{ addonId }} .sppb-animated-number-title{
					<# if(_.isObject(data.title_font_size)){ #>
						font-size: {{ data.title_font_size.sm }}px;
						line-height: {{ data.title_font_size.sm }}px;
					<# } #>
				}
			}
			@media (max-width: 767px) {
				#{{ addonId }} .sppb-animated-number{
					<# if(_.isObject(data.font_size)){ #>
						font-size: {{ data.font_size.xs }}px;
						line-height: {{ data.font_size.xs }}px;
					<# } #>
				}
				#{{ addonId }} .sppb-animated-number-title{
					<# if(_.isObject(data.title_font_size)){ #>
						font-size: {{ data.title_font_size.xs }}px;
						line-height: {{ data.title_font_size.xs }}px;
					<# } #>
				}
			}
		</style>
		<div class="sppb-addon sppb-addon-animated-number {{ data.alignment }} {{ data.class }}">
			<div class="sppb-addon-content">
				<div class="sppb-animated-number" data-digit="{{ data.number }}" data-duration="{{ data.duration }}">0</div>
				<# if(data.counter_title){ #>
					<div class="sppb-animated-number-title">{{ data.counter_title }}</div>
				<# } #>
			</div>
		</div>';

		return $output;
	}
}
