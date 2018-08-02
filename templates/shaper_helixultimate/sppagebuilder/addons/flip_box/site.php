<?php

/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2016 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
 */
//no direct accees
defined('_JEXEC') or die('restricted aceess');

class SppagebuilderAddonFlip_box extends SppagebuilderAddons {

    public function render() {
        //get data
        $class = (isset($this->addon->settings->class) && $this->addon->settings->class) ? $this->addon->settings->class : '';
        $front_text = (isset($this->addon->settings->front_text) && $this->addon->settings->front_text) ? $this->addon->settings->front_text : '';
        $front2_text = (isset($this->addon->settings->front2_text) && $this->addon->settings->front2_text) ? $this->addon->settings->front2_text : '';
        $title = (isset($this->addon->settings->title) && $this->addon->settings->title) ? $this->addon->settings->title : '';
        $heading_selector = (isset($this->addon->settings->heading_selector) && $this->addon->settings->heading_selector) ? $this->addon->settings->heading_selector : 'div';



        $title2 = (isset($this->addon->settings->title2) && $this->addon->settings->title2) ? $this->addon->settings->title2 : '';
        $heading_selector2 = (isset($this->addon->settings->heading_selector2) && $this->addon->settings->heading_selector2) ? $this->addon->settings->heading_selector2 : 'div';
        $title_text_color2 = (isset($this->addon->settings->title_text_color2) && $this->addon->settings->title_text_color2) ? $this->addon->settings->title_text_color2 : '';
        $title_margin_top2 = (isset($this->addon->settings->title_margin_top2) && $this->addon->settings->title_margin_top2) ? $this->addon->settings->title_margin_top2 : '';
        $title_margin_bottom2 = (isset($this->addon->settings->title_margin_bottom2) && $this->addon->settings->title_margin_bottom2) ? $this->addon->settings->title_margin_bottom2 : '';

        $flip_text = (isset($this->addon->settings->flip_text) && $this->addon->settings->flip_text) ? $this->addon->settings->flip_text : '';
        $rotate = (isset($this->addon->settings->rotate) && $this->addon->settings->rotate) ? $this->addon->settings->rotate : 'flip_right';
        $flip_bhave = (isset($this->addon->settings->flip_bhave) && $this->addon->settings->flip_bhave) ? $this->addon->settings->flip_bhave : 'hover';
        $text_align = (isset($this->addon->settings->text_align) && $this->addon->settings->text_align) ? $this->addon->settings->text_align : 'hover';
        $name = (isset($this->addon->settings->icon_name) && $this->addon->settings->icon_name) ? $this->addon->settings->icon_name : '';
        $name2 = (isset($this->addon->settings->icon2_name) && $this->addon->settings->icon2_name) ? $this->addon->settings->icon2_name : '';

        $buttontext = (isset($this->addon->settings->button_text) && $this->addon->settings->button_text) ? $this->addon->settings->button_text : '';
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
        $button_attribs .= (isset($this->addon->settings->button_margin_top) && $this->addon->settings->button_margin_top) ? ' style="margin-top:' . $this->addon->settings->button_margin_top . 'px"' : '';

        if($button_icon_position == 'left') {
            $button_text = ($button_icon) ? '<i class="fa ' . $button_icon . '"></i> ' . $buttontext : $buttontext;
        } else {
            $button_text = ($button_icon) ? $buttontext . ' <i class="fa ' . $buttonicon . '"></i>' : $buttontext;
        }

        $button_output = !empty($button_text) ? '<a' . $button_attribs . ' id="btn-'. $this->addon->id .'" class="sppb-btn' . $button_classes . '">' . $button_text . '</a>' : '';

        $button2text = (isset($this->addon->settings->button2_text) && $this->addon->settings->button2_text) ? $this->addon->settings->button2_text : '';
        $button2_url = (isset($this->addon->settings->button2_url) && $this->addon->settings->button2_url) ? $this->addon->settings->button2_url : '';
        $button2_classes = (isset($this->addon->settings->button2_size) && $this->addon->settings->button2_size) ? ' sppb-btn-' . $this->addon->settings->button2_size : '';
        $button2_classes .= (isset($this->addon->settings->button2_type) && $this->addon->settings->button2_type) ? ' sppb-btn-' . $this->addon->settings->button2_type : '';
        $button2_classes .= (isset($this->addon->settings->button2_shape) && $this->addon->settings->button2_shape) ? ' sppb-btn-' . $this->addon->settings->button2_shape: ' sppb-btn-rounded';
        $button2_classes .= (isset($this->addon->settings->button2_appearance) && $this->addon->settings->button2_appearance) ? ' sppb-btn-' . $this->addon->settings->button2_appearance : '';
        $button2_classes .= (isset($this->addon->settings->button2_block) && $this->addon->settings->button2_block) ? ' ' . $this->addon->settings->button2_block : '';
        $button2_icon = (isset($this->addon->settings->button2_icon) && $this->addon->settings->button2_icon) ? $this->addon->settings->button2_icon : '';
        $button2_icon_position = (isset($this->addon->settings->button2_icon_position) && $this->addon->settings->button2_icon_position) ? $this->addon->settings->button2_icon_position: 'left';
        $button2_position = (isset($this->addon->settings->button2_position) && $this->addon->settings->button2_position) ? $this->addon->settings->button2_position : '';
        $button2_attribs = (isset($this->addon->settings->button2_target) && $this->addon->settings->button2_target) ? ' target="' . $this->addon->settings->button2_target . '"' : '';
        $button2_attribs .= (isset($this->addon->settings->button2_url) && $this->addon->settings->button2_url) ? ' href="' . $this->addon->settings->button2_url . '"' : '';
        $button2_attribs .= (isset($this->addon->settings->button2_margin_top) && $this->addon->settings->button2_margin_top) ? ' style="margin-top:' . $this->addon->settings->button2_margin_top . 'px"' : '';

        if($button2_icon_position == 'left') {
            $button2_text = ($button2_icon) ? '<i class="fa ' . $button2_icon . '"></i> ' . $button2text : $button2text;
        } else {
            $button2_text = ($button2_icon) ? $button2text . ' <i class="fa ' . $button2icon . '"></i>' : $button2text;
        }

        $button2_output = !empty($button2_text) ? '<a' . $button2_attribs . ' id="btn-'. $this->addon->id .'" class="sppb-btn' . $button2_classes . '">' . $button2_text . '</a>' : '';

        //Flip Style
        $flip_style = (isset($this->addon->settings->flip_style) && $this->addon->settings->flip_style) ? $this->addon->settings->flip_style : 'rotate_style';

        if ($flip_style != '') {
            if ($flip_style == 'slide_style') {
                $flip_style = 'slide-flipbox';
            } elseif ($flip_style == 'fade_style') {
                $flip_style = 'fade-flipbox';
            } elseif ($flip_style == 'threeD_style') {
                $flip_style = 'threeD-flipbox';
            }
        }
        $feature_type = (isset($this->addon->settings->feature_type) && $this->addon->settings->feature_type) ? $this->addon->settings->feature_type : '';
        $feature2_type = (isset($this->addon->settings->feature2_type) && $this->addon->settings->feature2_type) ? $this->addon->settings->feature2_type : '';

        $output = '';
        $output .= '<div class="sppb-addon sppb-addon-sppb-flibox ' . $class . ' ' . $flip_style . ' ' . $rotate . ' flipon-' . $flip_bhave . ' sppb-text-' . $text_align . '">';
        if ($flip_style == 'threeD-flipbox') {

            $output .= '<div class="threeD-content-wrap">';
            $output .= '<div class="threeD-item">';
            $output .= '<div class = "threeD-flip-front">';
            $output .= '<div class = "threeD-content-inner">';
            if($feature_type == 'icon'){
                $output  .= '<span class="sppb-icon-inner">';
                $output  .= '<i class="fa ' . $name . '"></i>';
                $output  .= '</span>';
            }
            $output .= ($title) ? '<'.$heading_selector.' class="sppb-addon-title sppb-flip-title">' . $title . '</'.$heading_selector.'>' : '';
            $output .= $front_text;
            if($buttontext !== ""){
                $output .= '<div class="btn-box">';
                $output .= $button_output;
                $output .= '</div>';
            }
            $output .= '</div>';
            $output .= '</div>';
            $output .= '<div class = "threeD-flip-back">';
            $output .= '<div class = "threeD-content-inner">';
            if($feature2_type == 'icon'){
                $output  .= '<span class="sppb-icon2-inner">';
                $output  .= '<i class="fa ' . $name2 . '"></i>';
                $output  .= '</span>';
            }
            $output .= ($title2) ? '<'.$heading_selector2.' class="sppb-addon-title sppb-flip-title2">' . $title2 . '</'.$heading_selector2.'>' : '';
            $output .= $front2_text;
            if($button2text !== ""){
                $output .= '<div class="btn2-box">';
                $output .= $button2_output;
                $output .= '</div>';
            }
            $output .= '</div>';
            $output .= '</div >';
            $output .= '</div>'; //.threeD-item
            $output .= '</div>'; //.threeD-content-wrap
        } else {

            $output .= '<div class="sppb-flipbox-panel">';
            $output .= '<div class="sppb-flipbox-front flip-box">';
            $output .= '<div class="flip-box-inner">';
            if($feature_type == 'icon'){
                $output  .= '<span class="sppb-icon-inner">';
                $output  .= '<i class="fa ' . $name . '"></i>';
                $output  .= '</span>';
            }
            $output .= ($title) ? '<'.$heading_selector.' class="sppb-addon-title sppb-flip-title">' . $title . '</'.$heading_selector.'>' : '';
            $output .= $front_text;
            if($buttontext !== ""){
            $output .= '<div class="btn-box">';
            $output .= $button_output;
            $output .= '</div>';
            }
            $output .= '</div>'; //.flip-box-inner
            $output .= '</div>'; //.front
            $output .= '<div class="sppb-flipbox-back flip-box">';
            $output .= '<div class="flip-box-inner">';
            if($feature2_type == 'icon'){
                $output  .= '<span class="sppb-icon2-inner">';
                $output  .= '<i class="fa ' . $name2 . '"></i>';
                $output  .= '</span>';
            }
            $output .= ($title2) ? '<'.$heading_selector2.' class="sppb-addon-title sppb-flip-title2">' . $title2 . '</'.$heading_selector2.'>' : '';
            $output .= $front2_text;
            if($button2text !== ""){
                $output .= '<div class="btn2-box">';
                $output .= $button2_output;
                $output .= '</div>';
            }    
            $output .= '</div>'; //.flip-box-inner
            $output .= '</div>'; //.back
            $output .= '</div>'; //.sppb-flipbox-panel
        }
        $output .= '</div>'; //.sppb-addon-sppb-flibox
        return $output;
    }

    public function css() {
        $addon_id = '#sppb-addon-' . $this->addon->id;

        //flip style
        $flip_syles = '';
        $flip_syles_sm = '';
        $flip_syles_xs = '';
        //$flip_syles .= (isset($this->addon->settings->text_align) && $this->addon->settings->text_align) ? "text-align: " . $this->addon->settings->text_align  . ";" : "text-align: center";
        $flip_syles .= (isset($this->addon->settings->height) && $this->addon->settings->height) ? "height: " . $this->addon->settings->height . "px;" : "";
        $flip_syles_sm .= (isset($this->addon->settings->height_sm) && $this->addon->settings->height_sm) ? "height: " . $this->addon->settings->height_sm . "px;" : "";
        $flip_syles_xs .= (isset($this->addon->settings->height_xs) && $this->addon->settings->height_xs) ? "height: " . $this->addon->settings->height_xs . "px;" : "";

        $border_styles = (isset($this->addon->settings->border_styles) && $this->addon->settings->border_styles) ? $this->addon->settings->border_styles : "";
        // Normal
        $icon_style  = '';
        $icon2_style  = '';
        $icon_style_sm  = '';
        $icon_style_xs  = '';

        $font_size = '';
        $font_size_sm = '';
        $font_size_xs = '';

        if(isset($this->addon->settings->margin) && trim($this->addon->settings->margin) != ""){
            $margin_md = '';
            $margins = explode(' ', $this->addon->settings->margin);
            foreach($margins as $margin){
                if(empty(trim($margin))){
                    $margin_md .= ' 0';
                } else {
                    $margin_md .= ' '.$margin;
                }

            }
            $icon_style .= "margin: " . $margin_md . ";\n";
        }

        if(isset($this->addon->settings->margin_sm) && trim($this->addon->settings->margin_sm) != ""){
            $margin_sm_full = '';
            $margins_sm = explode(' ', $this->addon->settings->margin_sm);
            foreach($margins_sm as $margin_sm){
                if(empty(trim($margin_sm))){
                    $margin_sm_full .= ' 0';
                } else {
                    $margin_sm_full .= ' '.$margin_sm;
                }

            }
            $icon_style_sm .= "margin: " . $margin_sm_full . ";\n";
        }

        if(isset($this->addon->settings->margin_xs) && trim($this->addon->settings->margin_xs) != ""){
            $margin_xs_full = '';
            $margins_xs = explode(' ', $this->addon->settings->margin_xs);
            foreach($margins_xs as $margin_xs){
                if(empty(trim($margin_xs))){
                    $margin_xs_full .= ' 0';
                } else {
                    $margin_xs_full .= ' '.$margin_xs;
                }

            }
            $icon_style_xs .= "margin: " . $margin_xs_full . ";\n";
        }

        if (is_array($border_styles) && count($border_styles)) {
            if (in_array('border_radius', $border_styles)) {
                $flip_syles .= 'border-radius: 8px;';
            }
            if (in_array('dashed', $border_styles)) {
                $flip_syles .= 'border-style: dashed;';
            } else if (in_array('solid', $border_styles)) {
                $flip_syles .= 'border-style: solid;';
            } else if (in_array('dotted', $border_styles)) {
                $flip_syles .= 'border-style: dotted;';
            }

            if (in_array('dashed', $border_styles) || in_array('solid', $border_styles) || in_array('dotted', $border_styles)) {
                $flip_syles .= 'border-width: 2px;';
                $flip_syles .= 'border-color:' . $this->addon->settings->border_color . ';';
            }
        }

        //front style
        $front_style = '';
        if(isset($this->addon->settings->front_bgimg) && $this->addon->settings->front_bgimg){
          if(strpos($this->addon->settings->front_bgimg, "http://") !== false || strpos($this->addon->settings->front_bgimg, "https://") !== false){
                $front_bgimg = $this->addon->settings->front_bgimg;
        	} else {
                $front_bgimg = JURI::root() . $this->addon->settings->front_bgimg;
        	}
          $front_style .= "background-image: url(" . $front_bgimg . ");";
        }

        $front_style .= (isset($this->addon->settings->front_textcolor) && $this->addon->settings->front_textcolor) ? "color: " . $this->addon->settings->front_textcolor . ";" : "";

        //back style
        $back_style = '';
        if(isset($this->addon->settings->back_bgimg) && $this->addon->settings->back_bgimg){
          if(strpos($this->addon->settings->back_bgimg, "http://") !== false || strpos($this->addon->settings->back_bgimg, "https://") !== false){
                $back_bgimg = $this->addon->settings->back_bgimg;
        	} else {
                $back_bgimg = JURI::root() . $this->addon->settings->back_bgimg;
        	}
          $back_style .= "background-image: url(" . $back_bgimg . ");";
        }

        $back_style .= (isset($this->addon->settings->back_textcolor) && $this->addon->settings->back_textcolor) ? "color: " . $this->addon->settings->back_textcolor . ";" : "";

        //front bg color
        $front_bg_color = '';
        $front_bg_color .= (isset($this->addon->settings->front_bgcolor) && $this->addon->settings->front_bgcolor) ? "background-color: " . $this->addon->settings->front_bgcolor . ";" : "";
        //Bg color back
        $back_bg_color = '';
        $back_bg_color .= (isset($this->addon->settings->back_bgcolor) && $this->addon->settings->back_bgcolor) ? "background-color: " . $this->addon->settings->back_bgcolor . ";" : "";


        $css = '';

        if ($flip_syles) {
            $css .= $addon_id . ' .sppb-flipbox-panel {';
            $css .= $flip_syles;
            $css .= '}';
        }
        if ($flip_syles) {
            $css .= $addon_id . ' .threeD-item {';
            $css .= $flip_syles;
            $css .= '}';
        }

        if ($front_style) {
            $css .= $addon_id . ' .sppb-flipbox-front {';
            $css .= $front_style;
            $css .= '}';
        }
        if ($front_style) {
            $css .= $addon_id . ' .threeD-flip-front {';
            $css .= $front_style;
            $css .= '}';
        }

        if ($back_style) {
            $css .= $addon_id . ' .sppb-flipbox-back {';
            $css .= $back_style;
            $css .= '}';
        }
        if ($back_style) {
            $css .= $addon_id . ' .threeD-flip-back {';
            $css .= $back_style;
            $css .= '}';
        }
        //front bg color
        if ($front_bg_color) {
            $css .= $addon_id . ' .threeD-flip-front:before{';
            $css .= $front_bg_color;
            $css .= '}';
        }
        if ($front_bg_color) {
            $css .= $addon_id . ' .sppb-flipbox-front.flip-box:before{';
            $css .= $front_bg_color;
            $css .= '}';
        }
        //Back bg color
        if ($back_bg_color) {
            $css .= $addon_id . ' .threeD-flip-back:before{';
            $css .= $back_bg_color;
            $css .= '}';
        }
        if ($back_bg_color) {
            $css .= $addon_id . ' .sppb-flipbox-back.flip-box:before{';
            $css .= $back_bg_color;
            $css .= '}';
        }

        if ($flip_syles_sm) {
          $css .= '@media (min-width: 768px) and (max-width: 991px) {';
            $css .= $addon_id . ' .sppb-flipbox-panel {';
              $css .= $flip_syles_sm;
            $css .= '}';

            $css .= $addon_id . ' .threeD-item {';
              $css .= $flip_syles_sm;
            $css .= '}';
          $css .= '}';
        }

        if ($flip_syles_xs) {
          $css .= '@media (max-width: 767px) {';
            $css .= $addon_id . ' .sppb-flipbox-panel {';
              $css .= $flip_syles_xs;
            $css .= '}';

            $css .= $addon_id . ' .threeD-item {';
              $css .= $flip_syles_xs;
            $css .= '}';
          $css .= '}';
        }
        $icon_height_ = (int) $this->addon->settings->icon_height-4 ;
        $icon_style .= (isset($this->addon->settings->icon_height) && $this->addon->settings->icon_height) ? 'height: ' . (int) $this->addon->settings->icon_height . 'px;' : '';

        $icon_style .= (isset($this->addon->settings->icon_height) && $this->addon->settings->icon_height) ? 'line-height: ' . $icon_height_ . 'px;' : '';
        $icon_style .= (isset($this->addon->settings->icon_size) && $this->addon->settings->icon_size) ? 'font-size: ' . (int) $this->addon->settings->icon_size . 'px;' : '';

        $icon_style .= (isset($this->addon->settings->icon_width) && $this->addon->settings->icon_width) ? 'width: ' . (int) $this->addon->settings->icon_width . 'px;' : '';

        $icon_style .= (isset($this->addon->settings->icon_color) && $this->addon->settings->icon_color) ? 'color: ' . $this->addon->settings->icon_color . ';' : '';
        $icon_style .= (isset($this->addon->settings->icon_background) && $this->addon->settings->icon_background) ? 'background-color: ' . $this->addon->settings->icon_background . ';' : '';
        $icon_style .= (isset($this->addon->settings->icon_border_color) && $this->addon->settings->icon_border_color) ? 'border-style: solid; border-color: ' . $this->addon->settings->icon_border_color . ';' : '';

        $icon_style .= (isset($this->addon->settings->icon_border_width) && $this->addon->settings->icon_border_width) ? 'border-width: ' . (int) $this->addon->settings->icon_border_width . 'px;' : '';

        $icon_style .= (isset($this->addon->settings->icon_border_radius) && $this->addon->settings->icon_border_radius) ? 'border-radius: ' . (int) $this->addon->settings->icon_border_radius . 'px;' : '';
        $icon_style .= (isset($this->addon->settings->icon_margin_top) && $this->addon->settings->icon_margin_top) ? 'margin-top: ' . (int) $this->addon->settings->icon_margin_top . 'px;' : '';
        $icon_style .= (isset($this->addon->settings->icon_margin_bottom) && $this->addon->settings->icon_margin_bottom) ? 'margin-bottom: ' . (int) $this->addon->settings->icon_margin_bottom . 'px;' : '';


        $icon2_height_ = (int) $this->addon->settings->icon2_height-4 ;
        $icon2_style .= (isset($this->addon->settings->icon2_height) && $this->addon->settings->icon2_height) ? 'height: ' . (int) $this->addon->settings->icon2_height . 'px;' : '';

        $icon2_style .= (isset($this->addon->settings->icon2_height) && $this->addon->settings->icon2_height) ? 'line-height: ' . $icon2_height_ . 'px;' : '';
        $icon2_style .= (isset($this->addon->settings->icon2_size) && $this->addon->settings->icon2_size) ? 'font-size: ' . (int) $this->addon->settings->icon2_size . 'px;' : '';

        $icon2_style .= (isset($this->addon->settings->icon2_width) && $this->addon->settings->icon2_width) ? 'width: ' . (int) $this->addon->settings->icon2_width . 'px;' : '';

        $icon2_style .= (isset($this->addon->settings->icon2_color) && $this->addon->settings->icon2_color) ? 'color: ' . $this->addon->settings->icon2_color . ';' : '';
        $icon2_style .= (isset($this->addon->settings->icon2_background) && $this->addon->settings->icon2_background) ? 'background-color: ' . $this->addon->settings->icon2_background . ';' : '';
        $icon2_style .= (isset($this->addon->settings->icon2_border_color) && $this->addon->settings->icon2_border_color) ? 'border-style: solid; border-color: ' . $this->addon->settings->icon2_border_color . ';' : '';

        $icon2_style .= (isset($this->addon->settings->icon2_border_width) && $this->addon->settings->icon2_border_width) ? 'border-width: ' . (int) $this->addon->settings->icon2_border_width . 'px;' : '';

        $icon2_style .= (isset($this->addon->settings->icon2_border_radius) && $this->addon->settings->icon2_border_radius) ? 'border-radius: ' . (int) $this->addon->settings->icon2_border_radius . 'px;' : '';
        $icon2_style .= (isset($this->addon->settings->icon2_margin_top) && $this->addon->settings->icon2_margin_top) ? 'margin-top: ' . (int) $this->addon->settings->icon2_margin_top . 'px;' : '';
        $icon2_style .= (isset($this->addon->settings->icon2_margin_bottom) && $this->addon->settings->icon2_margin_bottom) ? 'margin-bottom: ' . (int) $this->addon->settings->icon2_margin_bottom . 'px;' : '';


        $head_title = '';
        $head_title .= (isset($this->addon->settings->text_color2) && $this->addon->settings->text_color2) ? 'border-style: solid; border-color: ' . $this->addon->settings->text_color2 . ';' : '';
        $head_title .= (isset($this->addon->settings->$title_margin_top2) && $this->addon->settings->$title_margin_top2) ? 'margin-top: ' . (int) $this->addon->settings->$title_margin_top2 . 'px;' : '';
        $head_title .= (isset($this->addon->settings->title_margin_bottom2) && $this->addon->settings->title_margin_bottom2) ? 'margin-bottom: ' . (int) $this->addon->settings->title_margin_bottom2 . 'px;' : '';

        
        //$css = '';
        if( $head_title) {
            $css .= $addon_id . ' .sppb-flip-title2 {';
            $css .= $head_title;
            $css .= "\n" . '}' . "\n"   ;
        }
        if($icon_style || $icon2_style) {
            $css .= $addon_id . ' .sppb-icon-inner {';
            $css .= $icon_style;
            $css .= "\n" . '}' . "\n"   ;
            $css .= $addon_id . ' .sppb-icon2-inner {';
            $css .= $icon2_style.'display:inline-block';
            $css .= "\n" . '}' . "\n"   ;
        }

        return $css;
    }

    public static function getTemplate() {
        $output = '
        <#
            var flip_style = (data.flip_style) ? data.flip_style : "rotate_style";

            if (flip_style != "") {
                if (flip_style == "slide_style") {
                    flip_style = "slide-flipbox";
                } else if (flip_style == "fade_style") {
                    flip_style = "fade-flipbox";
                } else if (flip_style == "threeD_style") {
                    flip_style = "threeD-flipbox";
                }
            }

            var border_styles = (data.border_styles) ? data.border_styles : "";

            var flip_syles = "";

            if(_.isObject(data.height)){
                flip_syles += (data.height.md) ? "height: " + data.height.md + "px;" : "";
            } else {
                flip_syles += (data.height) ? "height: " + data.height + "px;" : "";
            }


            if(_.isArray(border_styles)) {
                if(border_styles.indexOf("border_radius") !== -1){
                    flip_styles += "border-radius: 8px;";
                }

                if(border_styles.indexOf("dashed") !== -1){
                    flip_styles += "border-style: dashed;";
                } else if(border_styles.indexOf("solid") !== -1){
                    flip_styles += "border-style: solid;";
                } else if(border_styles.indexOf("dotted") !== -1){
                    flip_styles += "border-style: dotted;";
                }

                if(border_styles.indexOf("dashed") !== -1 || border_styles.indexOf("solid") !== -1 || border_styles.indexOf("dotted") !== -1){
                    flip_styles += "border-width: 2px;";
                    flip_styles += "border-color:"+data.border_color+";";
                }
            }

            let front_bgimg = "";
            if(data.front_bgimg.indexOf("http://") !== -1 || data.front_bgimg.indexOf("https://") !== -1){
                front_bgimg = data.front_bgimg;
            } else {
                front_bgimg = pagebuilder_base + data.front_bgimg;
            }

            let back_bgimg = "";
            if(data.back_bgimg.indexOf("http://") !== -1 || data.back_bgimg.indexOf("https://") !== -1){
                back_bgimg = data.back_bgimg;
            } else {
                back_bgimg = pagebuilder_base + data.back_bgimg;
            }
        #>
        <style type="text/css">
            #sppb-addon-{{ data.id }} .sppb-flipbox-panel,
            #sppb-addon-{{ data.id }} .threeD-item{
                {{ flip_syles }}
            }

            #sppb-addon-{{ data.id }} .sppb-flipbox-front,
            #sppb-addon-{{ data.id }} .threeD-flip-front{
                background-image: url({{ front_bgimg }});
                color: {{ data.front_textcolor }};
            }

            #sppb-addon-{{ data.id }} .sppb-flipbox-back,
            #sppb-addon-{{ data.id }} .threeD-flip-back{
                background-image: url({{ back_bgimg }});
                color: {{ data.back_textcolor }};
            }

            #sppb-addon-{{ data.id }} .threeD-flip-front:before,
            #sppb-addon-{{ data.id }} .sppb-flipbox-front.flip-box:before{
                background-color: {{ data.front_bgcolor }};
            }

            #sppb-addon-{{ data.id }} .threeD-flip-back:before,
            #sppb-addon-{{ data.id }} .sppb-flipbox-back.flip-box:before{
                background-color: {{ data.back_bgcolor }};
            }

            @media (min-width: 768px) and (max-width: 991px) {
                #sppb-addon-{{ data.id }} .sppb-flipbox-panel,
                #sppb-addon-{{ data.id }} .threeD-item{
                    <# if(_.isObject(data.height)){ #>
                        height: {{ data.height.sm }}px;
                    <# } #>
                }
            }

            @media (max-width: 767px) {
                #sppb-addon-{{ data.id }} .sppb-flipbox-panel,
                #sppb-addon-{{ data.id }} .threeD-item{
                    <# if(_.isObject(data.height)){ #>
                        height: {{ data.height.xs }}px;
                    <# } #>
                }
            }
        </style>
        <div class="sppb-addon sppb-addon-sppb-flibox {{ data.class }} {{ flip_style }} {{ data.rotate }} flipon-{{ data.flip_bhave }} sppb-text-{{ data.text_align }}">
            <# if (flip_style == "threeD-flipbox") { #>
                <div class="threeD-content-wrap">
                    <div class="threeD-item">
                        <div class = "threeD-flip-front">
                            <div class = "threeD-content-inner">{{{ data.front_text }}}</div>
                        </div>
                        <div class = "threeD-flip-back">
                            <div class = "threeD-content-inner">{{{ data.flip_text }}}</div>
                        </div >
                    </div>
                </div>
            <# } else { #>
                <div class="sppb-flipbox-panel">
                    <div class="sppb-flipbox-front flip-box">
                        <div class="flip-box-inner">{{{ data.front_text }}}</div>
                    </div>
                    <div class="sppb-flipbox-back flip-box">
                        <div class="flip-box-inner">{{{ data.flip_text }}}</div>
                    </div>
                </div>
            <# } #>
        </div>
        ';

        return $output;
    }

}
