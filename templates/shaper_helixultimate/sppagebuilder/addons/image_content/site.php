<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2016 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('restricted access');

class SppagebuilderAddonImage_content extends SppagebuilderAddons{

	public function render() {

		$class = (isset($this->addon->settings->class) && $this->addon->settings->class) ? $this->addon->settings->class : '';
		$title = (isset($this->addon->settings->title) && $this->addon->settings->title) ? $this->addon->settings->title : '';
		$subtitle = (isset($this->addon->settings->subtitle) && $this->addon->settings->subtitle) ? $this->addon->settings->subtitle : '';

		$heading_selector = (isset($this->addon->settings->heading_selector) && $this->addon->settings->heading_selector) ? $this->addon->settings->heading_selector : 'h3';

		//Options
		$image = (isset($this->addon->settings->image) && $this->addon->settings->image) ? $this->addon->settings->image : '';
		$image_width = (isset($this->addon->settings->image_width) && $this->addon->settings->image_width) ? $this->addon->settings->image_width : '';
		$image_alignment = (isset($this->addon->settings->image_alignment) && $this->addon->settings->image_alignment) ? $this->addon->settings->image_alignment : '';
		$text = (isset($this->addon->settings->text) && $this->addon->settings->text) ? $this->addon->settings->text : '';
		$button_text = (isset($this->addon->settings->button_text) && $this->addon->settings->button_text) ? $this->addon->settings->button_text : '';
		$button_url = (isset($this->addon->settings->button_url) && $this->addon->settings->button_url) ? $this->addon->settings->button_url : '';
		$button_classes = (isset($this->addon->settings->button_size) && $this->addon->settings->button_size) ? ' sppb-btn-' . $this->addon->settings->button_size : '';
		$button_classes .= (isset($this->addon->settings->button_type) && $this->addon->settings->button_type) ? ' sppb-btn-' . $this->addon->settings->button_type : '';
		$button_classes .= (isset($this->addon->settings->button_shape) && $this->addon->settings->button_shape) ? ' sppb-btn-' . $this->addon->settings->button_shape: ' sppb-btn-rounded';
		$button_classes .= (isset($this->addon->settings->button_appearance) && $this->addon->settings->button_appearance) ? ' sppb-btn-' . $this->addon->settings->button_appearance : '';
		$button_classes .= (isset($this->addon->settings->button_block) && $this->addon->settings->button_block) ? ' ' . $this->addon->settings->button_block : '';
		$button_icon = (isset($this->addon->settings->button_icon) && $this->addon->settings->button_icon) ? $this->addon->settings->button_icon : '';
		$button_icon_position = (isset($this->addon->settings->button_icon_position) && $this->addon->settings->button_icon_position) ? $this->addon->settings->button_icon_position: 'left';
		$button_position = (isset($this->addon->settings->button_position) && $this->addon->settings->button_position) ? $this->addon->settings->button_position : '';
		$button_attribs = (isset($this->addon->settings->button_target) && $this->addon->settings->button_target) ? ' target="' . $this->addon->settings->button_target . '"' : '';
		$button_attribs .= (isset($this->addon->settings->button_url) && $this->addon->settings->button_url) ? ' href="' . $this->addon->settings->button_url . '"' : '';

		if($button_icon_position == 'left') {
			$button_text = ($button_icon) ? '<i class="fa ' . $button_icon . '"></i> ' . $button_text : $button_text;
		} else {
			$button_text = ($button_icon) ? $button_text . ' <i class="fa ' . $button_icon . '"></i>' : $button_text;
		}

		$button_output = '<a' . $button_attribs . ' id="btn-'. $this->addon->id .'" class="sppb-btn' . $button_classes . '">' . $button_text . '</a>';

		if($image_alignment=='left') {
			$content_class = ' sppb-col-sm-offset-6';
		} else {
			$content_class = '';
		}

		if($image && $text) {

			$output  = '<div class="sppb-addon sppb-addon-image-content aligment-'. $image_alignment .' clearfix ' . $class . '">';
			//Content
			$output .= '<div class="container-inner">';
			$output .= '<div class="sppb-row">';
			if($image_alignment=='center' || $image_alignment=='absolute') {
				$output .= '<div class="sppb-col-sm-12'. $content_class .'">';
			}else {
				$output .= '<div class="sppb-col-sm-4'. $content_class .'">';
			}
			$output  .= '<img class="sppb-image-holders" src="'. JURI::base(true) . '/' . $image . '" alt="'. $title .'" title="'.$title.'">';
			$output .= '</div>';
			if($image_alignment=='center' || $image_alignment=='absolute') {
				$output .= '<div class="sppb-col-sm-12'. $content_class .'">';
			}else {
				$output .= '<div class="sppb-col-sm-8'. $content_class .'">';
			}
			$output .= '<div class="sppb-content-holders">';
			$output .= ($title) ? '<'.$heading_selector.' class="sppb-image-content-title sppb-addon-title">' . $title . '</'.$heading_selector.'>' : '';
			$output .= ($subtitle) ? '<span class="sppb-content-sub-title">' . $subtitle . '</span>' : '';
			$output .= ($text) ? '<p class="sppb-image-content-text">' . $text . '</p>' : '';
			if($button_text){
				$output .= $button_output;
			}
			$output .= '</div>';
			$output .= '</div>';
			$output .= '</div>';
			$output .= '</div>';

			$output .= '</div>';

			return $output;
		}

		return;
	}

	public function css() {
		$addon_id = '#sppb-addon-' . $this->addon->id;
		$layout_path = JPATH_ROOT . '/components/com_sppagebuilder/layouts';
		$css_path = new JLayoutFile('addon.css.button', $layout_path);
		return $css_path->render(array('addon_id' => $addon_id, 'options' => $this->addon->settings, 'id' => 'btn-' . $this->addon->id));
	}

}
