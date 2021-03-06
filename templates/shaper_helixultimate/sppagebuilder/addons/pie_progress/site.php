<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2016 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('restricted aceess');

class SppagebuilderAddonPie_progress extends SppagebuilderAddons{

	public function render() {

		$class = (isset($this->addon->settings->class) && $this->addon->settings->class) ? $this->addon->settings->class : '';
		$title = (isset($this->addon->settings->title) && $this->addon->settings->title) ? $this->addon->settings->title : '';
		$heading_selector = (isset($this->addon->settings->heading_selector) && $this->addon->settings->heading_selector) ? $this->addon->settings->heading_selector : 'h3';
        $heading_color = (isset($this->addon->settings->heading_color) && $this->addon->settings->heading_color) ? $this->addon->settings->heading_color : '';
        if($heading_color){
            $color = 'color:'.$heading_color.'';
        }
        $style = (isset($this->addon->settings->size) && $this->addon->settings->size) ? 'height: '. (int) $this->addon->settings->size .'px; width: '. (int) $this->addon->settings->size .'px;' : '';
        if($style){
            $styleteg = "style='$style'";
        }else {
            $styleteg ="";
        }


		//Options
		$percentage = (isset($this->addon->settings->percentage) && $this->addon->settings->percentage) ? $this->addon->settings->percentage : '';
		$border_color = (isset($this->addon->settings->border_color) && $this->addon->settings->border_color) ? $this->addon->settings->border_color : '#eeeeee';
		$border_active_color = (isset($this->addon->settings->border_active_color) && $this->addon->settings->border_active_color) ? $this->addon->settings->border_active_color : '';
		$border_width = (isset($this->addon->settings->border_width) && $this->addon->settings->border_width) ? $this->addon->settings->border_width : '';
		$size = (isset($this->addon->settings->size) && $this->addon->settings->size) ? $this->addon->settings->size : '';
		$icon_name = (isset($this->addon->settings->icon_name) && $this->addon->settings->icon_name) ? $this->addon->settings->icon_name : '';
		$icon_size = (isset($this->addon->settings->icon_size) && $this->addon->settings->icon_size) ? $this->addon->settings->icon_size : '';
		$text = (isset($this->addon->settings->text) && $this->addon->settings->text) ? $this->addon->settings->text : '';
        if($icon_name) {
            $iconclass = ' iconclass';
        }
		$output  = '<div class="sppb-addon sppb-addon-pie-progress '. $class . $iconclass .'">';
		$output .= '<div class="sppb-addon-content sppb-text-center">';
		$output .= '<div class="sppb-pie-chart" '.$styleteg.' data-size="'. (int) $size .'" data-percent="'.$percentage.'" data-width="'.$border_width.'"  data-gradient="#4d63a2,#4d75a9" data-barcolor="'.$border_active_color.'" data-trackcolor="'.$border_color.'">';

		if($icon_name) {
			$output .= '<div class="sppb-chart-icon"><span><i class="fa '. $icon_name . ' ' .  $icon_size .'"></i></span></div>';
			$output .= ($title) ? '<'.$heading_selector.' class="sppb-addon-title" style="'.$color.'">' . $title . '</'.$heading_selector.'>' : '';

		} else {
			$output .= '<div class="sppb-chart-percent"><span></span></div>';
			$output .= ($title) ? '<'.$heading_selector.' class="sppb-addon-title" style="'.$color.'">' . $title . '</'.$heading_selector.'>' : '';

		}

		$output .= '</div>';
		$output .= '<div class="sppb-addon-text">';
		$output .= $text;
		$output .= '</div>';

		$output .= '</div>';
		$output .= '</div>';

		return $output;
	}

	public function scripts() {
		$scripts[] = JURI::base(true) . '/components/com_sppagebuilder/assets/js/jquery.easypiechart.min.js';
		return $scripts;
	}
	public function css() {
		$addon_id = '#sppb-addon-' . $this->addon->id;
		$css = '';
		$style = (isset($this->addon->settings->size) && $this->addon->settings->size) ? 'height: '. (int) $this->addon->settings->size .'px; width: '. (int) $this->addon->settings->size .'px;' : '';
		$heading_color = (isset($this->addon->settings->heading_color) && $this->addon->settings->heading_color) ? $this->addon->settings->heading_color : '';

		if($style) {
			$css .= $addon_id . ' .sppb-pie-chart {';
			$css .= $style;
			$css .= '}';
		}
		//print_r($heading_color);

		return $css;
	}

	public static function getTemplate(){

		$output = '
			<#
				let border_color = data.border_color || "#eeeeee"
			#>

			<style type="text/css">
				#sppb-addon-{{ data.id }} .sppb-pie-chart {
					height: {{ data.size }}px;
					width: {{ data.size }}px;
				}
			</style>

			<div class="sppb-addon sppb-addon-pie-progress {{ data.class }}">
				<div class="sppb-addon-content sppb-text-center">
					<div class="sppb-pie-chart" data-size="{{ data.size }}" data-percent="{{ data.percentage }}" data-width="{{ data.border_width }}" data-barcolor="{{ data.border_active_color }}" data-trackcolor="{{ border_color }}">

					<# if(!_.isEmpty(data.icon_name)) { #>
						<div class="sppb-chart-icon"><span><i class="fa {{ data.icon_name }} {{ data.icon_size }}"></i></span></div>
					<# } else { #>
						<div class="sppb-chart-percent"><span></span></div>
					<# } #>

					</div>
					<# if(!_.isEmpty(data.title)) { #>
					<h3 class="sppb-addon-title">{{ data.title }}</h3>
					<# } #>

					<div class="sppb-addon-text">
						{{{ data.text }}}
					</div>
				</div>
			</div>
			';

			return $output;
	}

}
