<?php

/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2018 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
 */
//no direct accees
defined('_JEXEC') or die('Restricted access');

class SppagebuilderAddonIcons_group extends SppagebuilderAddons {

    public function render() {

        //Addon Options
        $class = (isset($this->addon->settings->class) && $this->addon->settings->class) ? $this->addon->settings->class : '';
        $icon_items = (isset($this->addon->settings->sp_icons_group_item) && $this->addon->settings->sp_icons_group_item) ? $this->addon->settings->sp_icons_group_item : '';

        $alignment = (isset($this->addon->settings->icon_alignment) && $this->addon->settings->icon_alignment) ? ' ' . $this->addon->settings->icon_alignment : '';

        $output = '';
        $output .= '<div class="sppb-addon sppb-addon-icons-group ' . $class . '">';
        $output .= '<ul class="sppb-icons-group-list">';
        foreach ($icon_items as $key => $icon_item) {
            $key ++;

            $icon_class = (isset($icon_item->icon_class) && $icon_item->icon_class !== '') ? $icon_item->icon_class : ' ';

            $icon_id = $this->addon->id + $key;

            $output .= '<li id="icon-' . $icon_id . '" class="' . $icon_class . ' ' . $alignment . '">';
            $item_url = ((isset($icon_item->icon_link) && $icon_item->icon_link !== '')) ? $icon_item->icon_link : '#';

            if ($icon_item->icon_link) {
                $output .= '<a href="' . $icon_item->icon_link . '">';
            }
            if (isset($icon_item->label_position) && $icon_item->show_label !== 0 && $icon_item->label_position == 'top') {
                $output .= '<span class="sppb-icons-label-text">' . $icon_item->label_text . '</span>';
            }
            if (isset($icon_item->icon_name)) {
                $output .= '<i class="fa ' . $icon_item->icon_name . ' "></i>';
            }
            if (isset($icon_item->label_position) && $icon_item->show_label !== 0 && $icon_item->label_position == 'right') {
                $output .= '<span class="sppb-icons-label-text right">' . $icon_item->label_text . '</span>';
            }
            if (isset($icon_item->label_position) && $icon_item->show_label !== 0 && $icon_item->label_position == 'bottom') {
                $output .= '<span class="sppb-icons-label-text">' . $icon_item->label_text . '</span>';
            }
            if ($icon_item->icon_link) {
                $output .= '</a>';
            }

            $output .= '</li>';
        }
        $output .= '</ul>';
        $output .= '</div>';

        return $output;
    }

    public function css() {
        $addon_id = '#sppb-addon-' . $this->addon->id;

        $styles = array();
        foreach ($this->addon->settings->sp_icons_group_item as $key => $addon_item) {
            $key ++;

            // Normal
            $icon_style = '';
            $icon_style_sm = '';
            $icon_style_xs = '';

            $font_size = '';
            $font_size_sm = '';
            $font_size_xs = '';

            $gutter_reset = '';
            $gutter_reset_sm = '';
            $gutter_reset_xs = '';

            $label_style = '';
            $label_style_sm = '';
            $label_style_xs = '';

            //Label style margin
            if (isset($addon_item->label_margin) && trim($addon_item->label_margin) != "") {
                $margin_md = '';
                $margins = explode(' ', $addon_item->label_margin);
                foreach ($margins as $margin) {
                    if (empty(trim($margin))) {
                        $margin_md .= ' 0';
                    } else {
                        $margin_md .= ' ' . $margin;
                    }
                }
                $label_style .= "margin: " . $margin_md . ";\n";
            }
            if (isset($addon_item->label_margin_sm) && trim($addon_item->label_margin_sm) != "") {
                $margin_sm_full = '';
                $margins_sm = explode(' ', $addon_item->label_margin_sm);
                foreach ($margins_sm as $margin_sm) {
                    if (empty(trim($margin_sm))) {
                        $margin_sm_full .= ' 0';
                    } else {
                        $margin_sm_full .= ' ' . $margin_sm;
                    }
                }
                $label_style_sm .= "margin: " . $margin_sm_full . ";\n";
            }

            if (isset($addon_item->label_margin_xs) && trim($addon_item->label_margin_xs) != "") {
                $margin_xs_full = '';
                $margins_xs = explode(' ', $addon_item->label_margin_xs);
                foreach ($margins_xs as $margin_xs) {
                    if (empty(trim($margin_xs))) {
                        $margin_xs_full .= ' 0';
                    } else {
                        $margin_xs_full .= ' ' . $margin_xs;
                    }
                }
                $label_style_xs .= "margin: " . $margin_xs_full . ";\n";
            }


            $icon_style .= (isset($addon_item->height) && $addon_item->height) ? 'height: ' . $addon_item->height . 'px;' : '';
            $icon_style_sm .= (isset($addon_item->height_sm) && $addon_item->height_sm) ? 'height: ' . $addon_item->height_sm . 'px;' : '';
            $icon_style_xs .= (isset($addon_item->height_xs) && $addon_item->height_xs) ? 'height: ' . $addon_item->height_xs . 'px;' : '';

            $icon_style .= (isset($this->addon->settings->margin) && $this->addon->settings->margin) ? 'margin: ' . $this->addon->settings->margin . 'px;' : '';
            $icon_style_sm .= (isset($this->addon->settings->margin_sm) && $this->addon->settings->margin_sm) ? 'margin: ' . $this->addon->settings->margin_sm . 'px;' : '';
            $icon_style_xs .= (isset($this->addon->settings->margin_xs) && $this->addon->settings->margin_xs) ? 'margin: ' . $this->addon->settings->margin_xs . 'px;' : '';

            $gutter_reset .= (isset($this->addon->settings->margin) && $this->addon->settings->margin) ? 'margin: -' . $this->addon->settings->margin . 'px;' : '';
            $gutter_reset_sm .= (isset($this->addon->settings->margin_sm) && $this->addon->settings->margin_sm) ? 'margin: -' . $this->addon->settings->margin_sm . 'px;' : '';
            $gutter_reset_xs .= (isset($this->addon->settings->margin_xs) && $this->addon->settings->margin_xs) ? 'margin: -' . $this->addon->settings->margin_xs . 'px;' : '';

            $icon_style .= (isset($addon_item->padding) && $addon_item->padding) ? 'padding: ' . $addon_item->padding . ';' : '';
            $icon_style_sm .= (isset($addon_item->padding_sm) && $addon_item->padding_sm) ? 'padding: ' . $addon_item->padding_sm . ';' : '';
            $icon_style_xs .= (isset($addon_item->padding_xs) && $addon_item->padding_xs) ? 'padding: ' . $addon_item->padding_xs . ';' : '';

            $icon_style .= (isset($addon_item->width) && $addon_item->width) ? 'width: ' . $addon_item->width . 'px;' : '';
            $icon_style_sm .= (isset($addon_item->width_sm) && $addon_item->width_sm) ? 'width: ' . $addon_item->width_sm . 'px;' : '';
            $icon_style_xs .= (isset($addon_item->width_xs) && $addon_item->width_xs) ? 'width: ' . $addon_item->width_xs . 'px;' : '';

            $icon_style .= (isset($addon_item->color) && $addon_item->color) ? 'color: ' . $addon_item->color . ';' : '';
            $icon_style .= (isset($addon_item->background) && $addon_item->background) ? 'background-color: ' . $addon_item->background . ';' : '';
            $icon_style .= (isset($addon_item->border_color) && $addon_item->border_color) ? 'border-color: ' . $addon_item->border_color . ';' : '';
            $icon_style .= (isset($addon_item->border_style) && $addon_item->border_style) ? 'border-style: ' . $addon_item->border_style . ';' : '';

            $icon_style .= (isset($addon_item->border_width) && $addon_item->border_width) ? 'border-width: ' . $addon_item->border_width . 'px;' : '';
            $icon_style_sm .= (isset($addon_item->border_width_sm) && $addon_item->border_width_sm) ? 'border-width: ' . $addon_item->border_width_sm . 'px;' : '';
            $icon_style_xs .= (isset($addon_item->border_width_xs) && $addon_item->border_width_xs) ? 'border-width: ' . $addon_item->border_width_xs . 'px;' : '';

            $icon_style .= (isset($addon_item->border_radius) && $addon_item->border_radius) ? 'border-radius: ' . $addon_item->border_radius . 'px;' : '';
            $icon_style_sm .= (isset($addon_item->border_radius_sm) && $addon_item->border_radius_sm) ? 'border-radius: ' . $addon_item->border_radius_sm . 'px;' : '';
            $icon_style_xs .= (isset($addon_item->border_radius_xs) && $addon_item->border_radius_xs) ? 'border-radius: ' . $addon_item->border_radius_xs . 'px;' : '';

            $font_size .= (isset($this->addon->settings->size) && $this->addon->settings->size) ? 'font-size: ' . $this->addon->settings->size . 'px;' : '';
            $font_size_sm .= (isset($this->addon->settings->size_sm) && $this->addon->settings->size_sm) ? 'font-size: ' . $this->addon->settings->size_sm . 'px;' : '';
            $font_size_xs .= (isset($this->addon->settings->size_xs) && $this->addon->settings->size_xs) ? 'font-size: ' . $this->addon->settings->size_xs . 'px;' : '';

            $label_style .= (isset($addon_item->label_size) && $addon_item->label_size) ? 'font-size: ' . $addon_item->label_size . 'px; line-height: 1.2;' : '';
            $label_style_sm .= (isset($addon_item->label_size_sm) && $addon_item->label_size_sm) ? 'font-size: ' . $addon_item->label_size_sm . 'px; line-height: 1.2;' : '';
            $label_style_xs .= (isset($addon_item->label_size_xs) && $addon_item->label_size_xs) ? 'font-size: ' . $addon_item->label_size_xs . 'px; line-height: 1.2;' : '';

            $icon_id = $this->addon->id + $key;

            // Mouse Hover
            $icon_style_hover = '';
            $icon_style_hover_sm = '';
            $icon_style_hover_xs = '';

            $icon_style_hover .= (isset($addon_item->hover_color) && $addon_item->hover_color) ? 'color: ' . $addon_item->hover_color . ';' : '';
            $icon_style_hover .= (isset($addon_item->hover_background) && $addon_item->hover_background) ? 'background-color: ' . $addon_item->hover_background . ';' : '';
            $icon_style_hover .= (isset($addon_item->hover_border_color) && $addon_item->hover_border_color) ? 'border-color: ' . $addon_item->hover_border_color . ';' : '';

            $icon_style_hover .= (isset($addon_item->hover_border_width) && $addon_item->hover_border_width) ? 'border-width: ' . $addon_item->hover_border_width . 'px;' : '';
            $icon_style_hover_sm .= (isset($addon_item->hover_border_width_sm) && $addon_item->hover_border_width_sm) ? 'border-width: ' . $addon_item->hover_border_width_sm . 'px;' : '';
            $icon_style_hover_xs .= (isset($addon_item->hover_border_width_xs) && $addon_item->hover_border_width_xs) ? 'border-width: ' . $addon_item->hover_border_width_xs . 'px;' : '';

            $icon_style_hover .= (isset($addon_item->hover_border_radius) && $addon_item->hover_border_radius) ? 'border-radius: ' . $addon_item->hover_border_radius . 'px;' : '';
            $icon_style_hover_sm .= (isset($addon_item->hover_border_radius_sm) && $addon_item->hover_border_radius_sm) ? 'border-radius: ' . $addon_item->hover_border_radius_sm . 'px;' : '';
            $icon_style_hover_xs .= (isset($addon_item->hover_border_radius_xs) && $addon_item->hover_border_radius_xs) ? 'border-radius: ' . $addon_item->hover_border_radius_xs . 'px;' : '';


            $css = '';
            if ($icon_style) {
                $css .= $addon_id . ' .sppb-icons-group-list li#icon-' . $icon_id . ' a {';
                $css .= $icon_style;
                $css .= $font_size;
                $css .= "\n" . '}' . "\n";
            }

            if ($gutter_reset) {
                $css .= $addon_id . ' .sppb-icons-group-list {';
                $css .= $gutter_reset;
                $css .= "\n" . '}' . "\n";
            }

            if ($label_style) {
                $css .= $addon_id . ' .sppb-icons-group-list li#icon-' . $icon_id . ' .sppb-icons-label-text {';
                $css .= $label_style;
                $css .= "\n" . '}' . "\n";
            }


            // Hover
            if ($icon_style_hover) {
                $css .= $addon_id . ' .sppb-icons-group-list li#icon-' . $icon_id . ' a:hover {';
                $css .= $icon_style_hover;
                $css .= "\n" . '}' . "\n";
            }
            if (!empty($icon_style_hover_sm) || !empty($icon_style_sm) || !empty($font_size_sm)) {
                $css .= '@media (min-width: 768px) and (max-width: 991px) {';
                if ($icon_style_sm) {
                    $css .= $addon_id . ' .sppb-icons-group-list li#icon-' . $icon_id . ' a {';
                    $css .= $icon_style_sm;
                    $css .= $font_size_sm;
                    $css .= "\n" . '}' . "\n";
                }

                if ($gutter_reset_sm) {
                    $css .= $addon_id . ' .sppb-icons-group-list {';
                    $css .= $gutter_reset_sm;
                    $css .= "\n" . '}' . "\n";
                }

                if ($label_style_sm) {
                    $css .= $addon_id . ' .sppb-icons-group-list li#icon-' . $icon_id . ' .sppb-icons-label-text {';
                    $css .= $label_style_sm;
                    $css .= "\n" . '}' . "\n";
                }

                // Hover
                if ($icon_style_hover_sm) {
                    $css .= $addon_id . ' .sppb-icons-group-list li#icon-' . $icon_id . ' a:hover {';
                    $css .= $icon_style_hover_sm;
                    $css .= "\n" . '}' . "\n";
                }
                $css .= '}';
            }
            if (!empty($icon_style_hover_xs) || !empty($icon_style_xs) || !empty($font_size_xs)) {
                $css .= '@media (max-width: 767px) {';
                if ($icon_style_xs) {
                    $css .= $addon_id . ' .sppb-icons-group-list li#icon-' . $icon_id . ' a {';
                    $css .= $icon_style_xs;
                    $css .= $font_size_xs;
                    $css .= "\n" . '}' . "\n";
                }

                if ($gutter_reset_xs) {
                    $css .= $addon_id . ' .sppb-icons-group-list {';
                    $css .= $gutter_reset_xs;
                    $css .= "\n" . '}' . "\n";
                }

                if ($label_style_xs) {
                    $css .= $addon_id . ' .sppb-icons-group-list li#icon-' . $icon_id . ' .sppb-icons-label-text {';
                    $css .= $label_style_xs;
                    $css .= "\n" . '}' . "\n";
                }

                // Hover
                if ($icon_style_hover_xs) {
                    $css .= $addon_id . ' .sppb-icons-group-list li#icon-' . $icon_id . ' a:hover {';
                    $css .= $icon_style_hover_xs;
                    $css .= "\n" . '}' . "\n";
                }
                $css .= '}';
            }

            $styles[$key] = $css;
        }

        $styles_explode = implode("\n", $styles);

        return $styles_explode;
    }

    public static function getTemplate() {
        $output = '
        <style type="text/css">
        <#
            _.each (data.sp_icons_group_item, function(addon_item, key) {
                key ++;
                var icon_id = data.id + key;
        #>

                #sppb-addon-{{data.id}} .sppb-icons-group-list {
                    <# if(_.isObject(data.margin)){ #>
                        margin: -{{ data.margin.md }}px;
                    <# } else { #>
                        margin: -{{ data.margin }}px;
                    <# } #>
                }
                #sppb-addon-{{data.id}} .sppb-icons-group-list li#icon-{{icon_id}} {
                    <# if(_.isObject(data.margin)){ #>
                        margin: {{ data.margin.md }}px;
                    <# } else { #>
                        margin: {{ data.margin }}px;
                    <# } #>
                }
                #sppb-addon-{{data.id}} .sppb-icons-group-list li#icon-{{icon_id}} a {
                    color: {{ addon_item.color }};
                    background-color: {{ addon_item.background }};
                    border-color: {{ addon_item.border_color }};
                    border-style: {{ addon_item.border_style }};

                    <# if(_.isObject(addon_item.width)){ #>
                        width: {{ addon_item.width.md }}px;
                    <# } else { #>
                        width: {{ addon_item.width }}px;
                    <# } #>

                    <# if(_.isObject(addon_item.border_width)){ #>
                        border-width: {{ addon_item.border_width.md }}px;
                    <# } else { #>
                        border-width: {{ addon_item.border_width }}px;
                    <# } #>

                    <# if(_.isObject(addon_item.height)){ #>
                        height: {{ addon_item.height.md }}px;
                    <# } else { #>
                        height: {{ addon_item.height }}px;
                    <# } #>

                    <# if(_.isObject(data.size)){ #>
                        font-size: {{ data.size.md }}px;
                    <# } else { #>
                        font-size: {{ data.size }}px;
                    <# } #>
                    <# if(_.isObject(addon_item.border_radius)){ #>
                        border-radius: {{ addon_item.border_radius.md }}px;
                    <# } else { #>
                        border-radius: {{ addon_item.border_radius }}px;
                    <# } #>

                    <# if(_.isObject(addon_item.padding)){ #>
                        padding: {{ addon_item.padding.md }};
                    <# } else { #>
                        padding: {{ addon_item.padding }};
                    <# } #>


                }
                #sppb-addon-{{data.id}} .sppb-icons-group-list li#icon-{{icon_id}} .sppb-icons-label-text {
                    <# if(_.isObject(addon_item.label_size)){ #>
                        font-size: {{ addon_item.label_size.md }}px;
                    <# } else { #>
                        font-size: {{ addon_item.label_size }}px;
                    <# } #>

                    <# if(_.isObject(addon_item.label_margin)){ #>
                        margin: {{ addon_item.label_margin.md }};
                    <# } else { #>
                        margin: {{ addon_item.label_margin }};
                    <# } #>
                }
                #sppb-addon-{{data.id}} .sppb-icons-group-list li#icon-{{icon_id}} a:hover {
                    background-color: {{addon_item.hover_background}};
                    color: {{addon_item.hover_color}};
                    border-color: {{addon_item.hover_border_color}};
                    border-color: {{addon_item.hover_border_color}};
                    <# if(_.isObject(addon_item.hover_border_width)){ #>
                        border-width: {{ addon_item.hover_border_width.md }};
                    <# } else { #>
                        border-width: {{ addon_item.hover_border_width }};
                    <# } #>
                    <# if(_.isObject(addon_item.hover_border_radius)){ #>
                        border-radius: {{ addon_item.hover_border_radius.md }};
                    <# } else { #>
                        border-radius: {{ addon_item.hover_border_radius }};
                    <# } #>

                }
                @media (min-width: 768px) and (max-width: 991px) {
                    #sppb-addon-{{data.id}} .sppb-icons-group-list {
                        <# if(_.isObject(data.margin)){ #>
                            margin: -{{ data.margin.sm }}px;
                        <# } #>
                    }
                    #sppb-addon-{{data.id}} .sppb-icons-group-list li#icon-{{icon_id}} {
                        <# if(_.isObject(data.margin)){ #>
                            margin: {{ data.margin.sm }}px;
                        <# } #>
                    }
                    #sppb-addon-{{data.id}} .sppb-icons-group-list li#icon-{{icon_id}} a {
                        <# if(_.isObject(data.size)){ #>
                            font-size: {{ data.size.sm }}px;
                        <# } #>
                        <# if(_.isObject(addon_item.width)){ #>
                            width: {{ addon_item.width.sm }}px;
                        <# } #>
                        <# if(_.isObject(addon_item.height)){ #>
                            height: {{ addon_item.height.sm }}px;
                        <# } #>
                        <# if(_.isObject(addon_item.border_width)){ #>
                            border-width: {{ addon_item.border_width.sm }}px;
                        <# } #>
                        <# if(_.isObject(data.border_radius)){ #>
                            border-radius: {{ data.border_radius.sm }}px;
                        <# } #>
                        <# if(_.isObject(addon_item.padding)){ #>
                            padding: {{ addon_item.padding.sm }};
                        <# } #>
                    }
                    #sppb-addon-{{data.id}} .sppb-icons-group-list li#icon-{{icon_id}} .sppb-icons-label-text {
                        <# if(_.isObject(addon_item.label_size) && addon_item.show_label !=="0"){ #>
                            font-size: {{ addon_item.label_size.sm }}px;
                        <# } #>
                        <# if(_.isObject(addon_item.label_margin)){ #>
                            margin: {{ addon_item.label_margin.sm }};
                        <# } #>
                    }
                    #sppb-addon-{{data.id}} .sppb-icons-group-list li#icon-{{icon_id}} a:hover {
                        <# if(_.isObject(addon_item.hover_border_width)){ #>
                            border-width: {{ addon_item.hover_border_width.sm }};
                        <# } #>
                        <# if(_.isObject(addon_item.hover_border_radius)){ #>
                            border-radius: {{ addon_item.hover_border_radius.sm }};
                        <# } #>
                    }
                }
                @media (max-width: 767px) {
                    #sppb-addon-{{data.id}} .sppb-icons-group-list {
                        <# if(_.isObject(data.margin)){ #>
                            margin: -{{ data.margin.xs }}px;
                        <# } #>
                    }
                    #sppb-addon-{{data.id}} .sppb-icons-group-list li#icon-{{icon_id}} {
                        <# if(_.isObject(data.margin)){ #>
                            margin: {{ data.margin.xs }}px;
                        <# } #>
                    }
                    #sppb-addon-{{data.id}} .sppb-icons-group-list li#icon-{{icon_id}} a {
                        <# if(_.isObject(data.size)){ #>
                            font-size: {{ data.size.xs }}px;
                        <# } #>
                        <# if(_.isObject(addon_item.width)){ #>
                            width: {{ addon_item.width.xs }}px;
                        <# } #>
                        <# if(_.isObject(addon_item.height)){ #>
                            height: {{ addon_item.height.xs }}px;
                        <# } #>
                        <# if(_.isObject(addon_item.border_width)){ #>
                            border-width: {{ addon_item.border_width.xs }}px;
                        <# } #>
                        <# if(_.isObject(data.border_radius)){ #>
                            border-radius: {{ data.border_radius.xs }}px;
                        <# } #>
                        <# if(_.isObject(addon_item.padding)){ #>
                            padding: {{ addon_item.padding.xs }};
                        <# } #>
                    }
                    #sppb-addon-{{data.id}} .sppb-icons-group-list li#icon-{{icon_id}} .sppb-icons-label-text {
                        <# if(_.isObject(addon_item.label_size) && addon_item.show_label !=="0"){ #>
                            font-size: {{ addon_item.label_size.xs }}px;
                        <# } #>
                        <# if(_.isObject(addon_item.label_margin)){ #>
                            margin: {{ addon_item.label_margin.xs }};
                        <# } #>
                    }
                    #sppb-addon-{{data.id}} .sppb-icons-group-list li#icon-{{icon_id}} a:hover {
                        <# if(_.isObject(addon_item.hover_border_width)){ #>
                            border-width: {{ addon_item.hover_border_width.xs }};
                        <# } #>
                        <# if(_.isObject(addon_item.hover_border_radius)){ #>
                            border-radius: {{ addon_item.hover_border_radius.xs }};
                        <# } #>
                    }
                }

            <# })
        #>
        </style>

            <#
                let contentClass = (!_.isEmpty(data.class) && data.class) ? data.class : "";
                let icon_items = (!_.isEmpty(data.sp_icons_group_item) && data.sp_icons_group_item) ? data.sp_icons_group_item : "";
                let alignment = (!_.isEmpty(data.icon_alignment) && data.icon_alignment) ? \' \' + data.icon_alignment : "";
            #>
                <div class="sppb-addon sppb-addon-icons-group {{contentClass}}">
                <ul class="sppb-icons-group-list">
                <# _.each (icon_items, function(icon_item, key) {
                    key ++;
                    let icon_class = (!_.isEmpty(icon_item.icon_class) && icon_item.icon_class !== "") ? icon_item.icon_class : " ";
                    let icon_id = data.id + key;
                #>

                    <li id="icon-{{icon_id}}" class="{{icon_class}} {{alignment}}">

                    <#
                    let item_url = ((!_.isEmpty(icon_item.icon_link) && icon_item.icon_link !== "")) ? icon_item.icon_link : "#";

                    if (icon_item.icon_link) {
                    #>
                        <a href="{{icon_item.icon_link}}">
                    <# }
                    if (!_.isEmpty(icon_item.label_position) && icon_item.show_label !== 0 && icon_item.label_position == "top") {
                    #>
                        <span class="sppb-icons-label-text">{{icon_item.label_text}}</span>
                    <# }
                    if (!_.isEmpty(icon_item.icon_name)) {
                    #>
                        <i class="fa {{icon_item.icon_name}} "></i>
                    <# }
                    if (!_.isEmpty(icon_item.label_position) && icon_item.show_label !== 0 && icon_item.label_position == "right") {
                    #>
                        <span class="sppb-icons-label-text right">{{icon_item.label_text}}</span>
                    <# }
                    if (!_.isEmpty(icon_item.label_position) && icon_item.show_label !== 0 && icon_item.label_position == "bottom") {
                    #>
                        <span class="sppb-icons-label-text">{{icon_item.label_text}}</span>
                    <# }
                    if (icon_item.icon_link) {
                    #>
                        </a>
                    <# } #>

                    </li>
                <# }) #>
                </ul>
                </div>
                ';
        return $output;
    }

}
