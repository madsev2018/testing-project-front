<?php

/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2016 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
 */
//no direct accees
defined('_JEXEC') or die('restricted aceess');

SpAddonsConfig::addonConfig(
        array(
            'type' => 'content',
            'addon_name' => 'sp_flip_box',
            'title' => JText::_('COM_SPPAGEBUILDER_ADDON_FLIP_BOX'),
            'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_FLIP_BOX_DESC'),
            'category'=>'Content',
            'attr' => array(
                'general' => array(
                    'admin_label' => array(
                        'type' => 'text',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL_DESC'),
                        'std' => ''
                    ),
                    'flip_bhave' => array(
                        'type' => 'select',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_FLIPBOX_FLIP_BHAVE'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_FLIPBOX_FLIP_BHAVE_DESC'),
                        'values' => array(
                            'hover' => JText::_('COM_SPPAGEBUILDER_ADDON_FLIPBOX_FLIP_BHAVE_HOVER'),
                            'click' => JText::_('COM_SPPAGEBUILDER_ADDON_FLIPBOX_FLIP_BHAVE_CLICK'),
                        ),
                        'std' => 'hover',
                    ),
                    'class' => array(
                        'type' => 'text',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_CLASS'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_CLASS_DESC'),
                        'std' => ''
                    ),
                    'flip_style' => array(
                        'type' => 'select',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_FLIPBOX_STYLE'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_FLIPBOX_STYLE_DESC'),
                        'values' => array(
                            'rotate_style' => JText::_('COM_SPPAGEBUILDER_ADDON_FLIPBOX_ROTATE_STYLE'),
                            'slide_style' => JText::_('COM_SPPAGEBUILDER_ADDON_FLIPBOX_SLIDE_STYLE'),
                            'fade_style' => JText::_('COM_SPPAGEBUILDER_ADDON_FLIPBOX_FADE_STYLE'),
                            'threeD_style' => JText::_('COM_SPPAGEBUILDER_ADDON_FLIPBOX_3D_STYLE'),
                        ),
                        'std' => 'flat_style'
                    ),
                    'rotate' => array(
                        'type' => 'select',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_FLIPBOX_ROTATE'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_FLIPBOX_ROTATE_DESC'),
                        'values' => array(
                            'flip_top' => JText::_('COM_SPPAGEBUILDER_ADDON_FLIPBOX_ROTATE_FLIP_TOP'),
                            'flip_bottom' => JText::_('COM_SPPAGEBUILDER_ADDON_FLIPBOX_ROTATE_FLIP_BOTTOM'),
                            'flip_left' => JText::_('COM_SPPAGEBUILDER_ADDON_FLIPBOX_ROTATE_FLIP_LEFT'),
                            'flip_right' => JText::_('COM_SPPAGEBUILDER_ADDON_FLIPBOX_ROTATE_FLIP_RIGHT'),
                        ),
                        'std' => 'flip_right',
                        'depends' => array(array('flip_style', '!=', 'fade_style')),
                    ),
                    'height' => array(
                        'type' => 'slider',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_FLIPBOX_HEIGHT'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_FLIPBOX_HEIGHT_DESC'),
                        'std' => '',
                        'responsive' => true,
                        'max'=>1000,
                    ),
                    'text_align' => array(
                        'type' => 'select',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_FLIPBOX_ALIGN'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_FLIPBOX_ALIGN_DESC'),
                        'values' => array(
                            'left' => JText::_('COM_SPPAGEBUILDER_ADDON_FLIPBOX_ALIGN_LEFT'),
                            'center' => JText::_('COM_SPPAGEBUILDER_ADDON_FLIPBOX_ALIGN_CENTER'),
                            'right' => JText::_('COM_SPPAGEBUILDER_ADDON_FLIPBOX_ALIGN_RIGHT'),
                        ),
                        'std' => 'center',
                    ),
                    'border_styles' => array(
                        'type' => 'select',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_FLIPBOX_STYLES'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_FLIPBOX_STYLES_DESC'),
                        'values' => array(
                            'solid' => JText::_('COM_SPPAGEBUILDER_ADDON_FLIPBOX_STYLES_BORDER_SOLID'),
                            'dashed' => JText::_('COM_SPPAGEBUILDER_ADDON_FLIPBOX_STYLES_BORDER_DASHED'),
                            'dotted' => JText::_('COM_SPPAGEBUILDER_ADDON_FLIPBOX_STYLES_BORDER_DOTTED'),
                            'border_radius' => JText::_('COM_SPPAGEBUILDER_ADDON_FLIPBOX_STYLES_BORDER_RADIUS'),
                        ),
                        'multiple' => true,
                        'std' => '',
                    ),
                    'border_color' => array(
                        'type' => 'color',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_FLIPBOX_BORDER_COLOR'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_FLIPBOX_BORDER_COLOR_DESC'),
                        'std' => '#000',
                    ),
                ),
                'Front Style' => array(
                    'feature_type'=>array(
                        'type'=>'select',
                        'title'=>'Icon Enabled',
                        'values'=> array(
                            'icon'=>JText::_('Yes'),
                            'no'=>JText::_('No'),
                        ),
                        'std' => 'icon'
                    ),
                    'title'=>array(
                        'type'=>'text',
                        'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_PRICING_TITLE'),
                        'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_PRICING_TITLE_DESC'),
                        'std'=>'Professional',
                    ),

                    'heading_selector'=>array(
                        'type'=>'select',
                        'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS'),
                        'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_DESC'),
                        'values'=>array(
                            'h1'=>JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H1'),
                            'h2'=>JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H2'),
                            'h3'=>JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H3'),
                            'h4'=>JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H4'),
                            'h5'=>JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H5'),
                            'h6'=>JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H6'),
                            'div'=>JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_DIV'),
                        ),
                        'std'=>'h3',
                        'depends'=>array(array('title', '!=', '')),
                    ),
                    'title_text_color'=>array(
                        'type'=>'color',
                        'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_TEXT_COLOR'),
                        'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_TEXT_COLOR_DESC'),
                        'depends'=>array(array('title', '!=', '')),
                        'std'=>'#464855'
                    ),

                    'title_margin_top'=>array(
                        'type'=>'slider',
                        'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_MARGIN_TOP'),
                        'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_MARGIN_TOP_DESC'),
                        'placeholder'=>'10',
                        'max'=>500,
                        'std'=>array('md'=>0),
                        'responsive'=>true,
                        'depends'=>array(array('title', '!=', '')),
                    ),

                    'title_margin_bottom'=>array(
                        'type'=>'slider',
                        'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_MARGIN_BOTTOM'),
                        'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_MARGIN_BOTTOM_DESC'),
                        'placeholder'=>'10',
                        'max'=>500,
                        'std'=>array('md'=>20),
                        'responsive'=>true,
                        'depends'=>array(array('title', '!=', '')),
                    ),
                    'icon_name'=>array(
                        'type'=>'icon',
                        'title'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_ICON_NAME'),
                        'std'=> 'fa-trophy',
                        'depends'=>array('feature_type'=>'icon')
                    ),
                    'icon_size'=>array(
                        'type'=>'slider',
                        'title'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_ICON_SIZE'),
                        'placeholder'=>36,
                        'std'=>36,
                        'depends'=>array('feature_type'=>'icon')
                     ),
                    'icon_height'=>array(
                        'type'=>'slider',
                        'title'=>JText::_('Icon Height'),
                        'placeholder'=>36,
                        'max'=>500,
                        'std'=>36,
                        'depends'=>array('feature_type'=>'icon')
                     ),
                    'icon_width'=>array(
                        'type'=>'slider',
                        'title'=>JText::_('Icon Width'),
                        'placeholder'=>36,
                        'max'=>500,
                        'std'=>36,
                        'depends'=>array('feature_type'=>'icon')
                     ),

                    'icon_color'=>array(
                        'type'=>'color',
                        'title'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_COLOR'),
                        'std'=>'#0080FE',
                        'depends'=>array('feature_type'=>'icon')
                    ),

                    'icon_background'=>array(
                        'type'=>'color',
                        'title'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BACKGROUND_COLOR'),
                        'depends'=>array('feature_type'=>'icon')
                    ),

                    'icon_border_color'=>array(
                        'type'=>'color',
                        'title'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BORDER_COLOR'),
                        'depends'=>array('feature_type'=>'icon')
                    ),

                    'icon_border_width'=>array(
                        'type'=>'slider',
                        'title'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BORDER_WIDTH'),
                        'depends'=>array('feature_type'=>'icon')
                    ),

                    'icon_border_radius'=>array(
                        'type'=>'slider',
                        'title'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BORDER_RADIUS'),
                        'depends'=>array('feature_type'=>'icon')
                    ),

                    'icon_margin_top'=>array(
                        'type'=>'slider',
                        'title'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_MARGIN_TOP'),
                        'depends'=>array('feature_type'=>'icon')
                    ),

                    'icon_margin_bottom'=>array(
                        'type'=>'slider',
                        'title'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_MARGIN_BOTTOM'),
                        'depends'=>array('feature_type'=>'icon')
                    ),

                    'front_text' => array(
                        'type'=>'editor',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_FLIPBOX_TEXT'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_FLIPBOX_TEXT_DESC'),
                        'std' => ''
                    ),
                            //Button
                    'button_text'=>array(
                        'type'=>'text',
                        'title'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_TEXT'),
                        'desc'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_TEXT_DESC'),
                        'std'=>'Button Text',
                    ),

                    'button_font_family'=>array(
                        'type'=>'fonts',
                        'title'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_FONT_FAMILY'),
                        'selector'=> array(
                            'type'=>'font',
                            'font'=>'{{ VALUE }}',
                            'css'=>'.btn { font-family: {{ VALUE }}; }'
                        ),
                        'depends'=> array(
                            array('button_text', '!=', ''),
                        )
                    ),

                    'button_font_style'=>array(
                        'type'=>'fontstyle',
                        'title'=> JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_FONT_STYLE'),
                        'depends'=> array(
                            array('button_text', '!=', ''),
                        )
                    ),

                    'button_letterspace'=>array(
                        'type'=>'select',
                        'title'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_LETTER_SPACING'),
                        'values'=>array(
                            '0'=> 'Default',
                            '1px'=> '1px',
                            '2px'=> '2px',
                            '3px'=> '3px',
                            '4px'=> '4px',
                            '5px'=> '5px',
                            '6px'=> '6px',
                            '7px'=> '7px',
                            '8px'=> '8px',
                            '9px'=> '9px',
                            '10px'=> '10px'
                        ),
                        'std'=>'0',
                        'depends'=> array(
                            array('button_text', '!=', ''),
                        )
                    ),

                    'button_url'=>array(
                        'type'=>'media',
                        'format'=>'attachment',
                        'title'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_URL'),
                        'desc'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_URL_DESC'),
                        'placeholder'=>'http://',
                        'depends'=> array(
                            array('button_text', '!=', ''),
                        ),
                    ),

                    'button_target'=>array(
                        'type'=>'select',
                        'title'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_LINK_NEWTAB'),
                        'desc'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_LINK_NEWTAB_DESC'),
                        'values'=>array(
                            ''=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_TARGET_SAME_WINDOW'),
                            '_blank'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_TARGET_NEW_WINDOW'),
                        ),
                        'depends'=> array(
                            array('button_text', '!=', ''),
                        )
                    ),

                    'button_type'=>array(
                        'type'=>'select',
                        'title'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_STYLE'),
                        'desc'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_STYLE_DESC'),
                        'values'=>array(
                            'default'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_DEFAULT'),
                            'primary'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_PRIMARY'),
                            'secondary'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_SECONDARY'),
                            'success'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_SUCCESS'),
                            'info'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_INFO'),
                            'warning'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_WARNING'),
                            'danger'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_DANGER'),
                            'dark'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_DARK'),
                            'link'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_LINK'),
                            'custom'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_CUSTOM'),
                        ),
                        'std'=>'success',
                        'depends'=> array(
                            array('button_text', '!=', ''),
                        )
                    ),

                    'button_appearance'=>array(
                        'type'=>'select',
                        'title'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_APPEARANCE'),
                        'desc'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_APPEARANCE_DESC'),
                        'values'=>array(
                            ''=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_APPEARANCE_FLAT'),
                            'outline'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_APPEARANCE_OUTLINE'),
                            '3d'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_APPEARANCE_3D'),
                        ),
                        'std'=>'flat',
                        'depends'=> array(
                            array('button_text', '!=', ''),
                        )
                    ),

                    'button_background_color'=>array(
                        'type'=>'color',
                        'title'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_BACKGROUND_COLOR'),
                        'desc'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_BACKGROUND_COLOR_DESC'),
                        'std' => '#444444',
                        'depends'=> array(
                            array('button_type', '=', 'custom'),
                            array('button_text', '!=', ''),
                        )
                    ),

                    'button_color'=>array(
                        'type'=>'color',
                        'title'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_COLOR'),
                        'desc'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_COLOR_DESC'),
                        'std' => '#fff',
                        'depends'=> array(
                            array('button_type', '=', 'custom'),
                            array('button_text', '!=', ''),
                        )
                    ),

                    'button_background_color_hover'=>array(
                        'type'=>'color',
                        'title'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_BACKGROUND_COLOR_HOVER'),
                        'desc'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_BACKGROUND_COLOR_HOVER_DESC'),
                        'std' => '#222',
                        'depends'=> array(
                            array('button_type', '=', 'custom'),
                            array('button_text', '!=', ''),
                        )
                    ),

                    'button_color_hover'=>array(
                        'type'=>'color',
                        'title'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_COLOR_HOVER'),
                        'desc'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_COLOR_HOVER_DESC'),
                        'std' => '#fff',
                        'depends'=> array(
                            array('button_type', '=', 'custom'),
                            array('button_text', '!=', ''),
                        )
                    ),

                    'button_size'=>array(
                        'type'=>'select',
                        'title'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE'),
                        'desc'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE_DESC'),
                        'values'=>array(
                            ''=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE_DEFAULT'),
                            'lg'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE_LARGE'),
                            'xlg'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE_XLARGE'),
                            'sm'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE_SMALL'),
                            'xs'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE_EXTRA_SAMLL'),
                        ),
                        'depends'=> array(
                            array('button_text', '!=', ''),
                        )
                    ),

                    'button_shape'=>array(
                        'type'=>'select',
                        'title'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SHAPE'),
                        'desc'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SHAPE_DESC'),
                        'values'=>array(
                            'rounded'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SHAPE_ROUNDED'),
                            'square'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SHAPE_SQUARE'),
                            'round'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SHAPE_ROUND'),
                        ),
                        'depends'=> array(
                            array('button_text', '!=', ''),
                        )
                    ),

                    'button_block'=>array(
                        'type'=>'select',
                        'title'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_BLOCK'),
                        'desc'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_BLOCK_DESC'),
                        'values'=>array(
                            ''=>JText::_('JNO'),
                            'sppb-btn-block'=>JText::_('JYES'),
                        ),
                        'depends'=> array(
                            array('button_text', '!=', ''),
                        )
                    ),

                    'button_icon'=>array(
                        'type'=>'icon',
                        'title'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_ICON'),
                        'desc'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_ICON_DESC'),
                        'depends'=> array(
                            array('button_text', '!=', ''),
                        )
                    ),

                    'button_icon_position'=>array(
                        'type'=>'select',
                        'title'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_ICON_POSITION'),
                        'values'=>array(
                            'left'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_LEFT'),
                            'right'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_RIGHT'),
                        ),
                        'depends'=> array(
                            array('button_text', '!=', ''),
                        ),
                    ),
                    'button_margin_top'=>array(
                        'type'=>'slider',
                        'title'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_MARGIN_TOP'),
                        'max'=>400,
                        'depends'=> array(
                            array('button_text', '!=', ''),
                        ),
                    ),
                    'front_bgcolor' => array(
                        'type' => 'color',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_FLIPBOX_BG_COLOR_FRONT'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_FLIPBOX_BG_COLOR_FRONT_DESC'),
                        'std' => '',
                    ),
                    'front_bgimg' => array(
                        'type' => 'media',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_FLIPBOX_FRONT_BG_IMG'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_FLIPBOX_FRONT_BG_IMG_DESC'),
                        'std' => 'https://sppagebuilder.com/addons/flipbox/flipbox-bg-1.jpg',
                    ),
                    'front_textcolor' => array(
                        'type' => 'color',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_FLIPBOX_FRONT_TEXT_COLOR'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_FLIPBOX_FRONT_TEXT_COLOR_DESC'),
                        'std' => '#fff',
                    ),
                ),
                'Flip Style' => array(
                    'feature2_type'=>array(
                        'type'=>'select',
                        'title'=>'Icon Enabled',
                        'values'=> array(
                            'icon'=>JText::_('Yes'),
                            'no'=>JText::_('No'),
                        ),
                        'std' => 'icon'
                    ),
                    'title2'=>array(
                        'type'=>'text',
                        'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_PRICING_TITLE'),
                        'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_PRICING_TITLE_DESC'),
                        'std'=>'Professional',
                    ),

                    'heading_selector2'=>array(
                        'type'=>'select',
                        'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS'),
                        'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_DESC'),
                        'values'=>array(
                            'h1'=>JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H1'),
                            'h2'=>JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H2'),
                            'h3'=>JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H3'),
                            'h4'=>JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H4'),
                            'h5'=>JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H5'),
                            'h6'=>JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H6'),
                            'div'=>JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_DIV'),
                        ),
                        'std'=>'h3',
                        'depends'=>array(array('title2', '!=', '')),
                    ),
                    'title_text_color2'=>array(
                        'type'=>'color',
                        'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_TEXT_COLOR'),
                        'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_TEXT_COLOR_DESC'),
                        'depends'=>array(array('title2', '!=', '')),
                        'std'=>'#464855'
                    ),

                    'title_margin_top2'=>array(
                        'type'=>'slider',
                        'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_MARGIN_TOP'),
                        'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_MARGIN_TOP_DESC'),
                        'placeholder'=>'10',
                        'max'=>500,
                        'std'=>array('md'=>0),
                        'responsive'=>true,
                        'depends'=>array(array('title2', '!=', '')),
                    ),

                    'title_margin_bottom2'=>array(
                        'type'=>'slider',
                        'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_MARGIN_BOTTOM'),
                        'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_MARGIN_BOTTOM_DESC'),
                        'placeholder'=>'10',
                        'max'=>500,
                        'std'=>array('md'=>20),
                        'responsive'=>true,
                        'depends'=>array(array('title2', '!=', '')),
                    ),
                    'icon2_name'=>array(
                        'type'=>'icon',
                        'title'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_ICON_NAME'),
                        'std'=> 'fa-trophy',
                        'depends'=>array('feature2_type'=>'icon')
                    ),
                    'icon2_size'=>array(
                        'type'=>'slider',
                        'title'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_ICON_SIZE'),
                        'placeholder'=>36,
                        'std'=>36,
                        'depends'=>array('feature2_type'=>'icon')
                     ),
                    'icon2_height'=>array(
                        'type'=>'slider',
                        'title'=>JText::_('Icon Height'),
                        'placeholder'=>36,
                        'max'=>500,
                        'std'=>36,
                        'depends'=>array('feature2_type'=>'icon')
                     ),
                    'icon2_width'=>array(
                        'type'=>'slider',
                        'title'=>JText::_('Icon Width'),
                        'placeholder'=>36,
                        'max'=>500,
                        'std'=>36,
                        'depends'=>array('feature2_type'=>'icon')
                     ),

                    'icon2_color'=>array(
                        'type'=>'color',
                        'title'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_COLOR'),
                        'std'=>'#0080FE',
                        'depends'=>array('feature2_type'=>'icon')
                    ),

                    'icon2_background'=>array(
                        'type'=>'color',
                        'title'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BACKGROUND_COLOR'),
                        'depends'=>array('feature2_type'=>'icon')
                    ),

                    'icon2_border_color'=>array(
                        'type'=>'color',
                        'title'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BORDER_COLOR'),
                        'depends'=>array('feature2_type'=>'icon')
                    ),

                    'icon2_border_width'=>array(
                        'type'=>'slider',
                        'title'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BORDER_WIDTH'),
                        'depends'=>array('feature2_type'=>'icon')
                    ),

                    'icon2_border_radius'=>array(
                        'type'=>'slider',
                        'title'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BORDER_RADIUS'),
                        'depends'=>array('feature2_type'=>'icon')
                    ),

                    'icon2_margin_top'=>array(
                        'type'=>'slider',
                        'title'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_MARGIN_TOP'),
                        'depends'=>array('feature2_type'=>'icon')
                    ),

                    'icon2_margin_bottom'=>array(
                        'type'=>'slider',
                        'title'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_MARGIN_BOTTOM'),
                        'depends'=>array('feature2_type'=>'icon')
                    ),

                    'front2_text' => array(
                        'type'=>'editor',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_FLIPBOX_TEXT'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_FLIPBOX_TEXT_DESC'),
                        'std' => ''
                    ),
                            //Button
                    'button2_text'=>array(
                        'type'=>'text',
                        'title'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_TEXT'),
                        'desc'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_TEXT_DESC'),
                        'std'=>'Button Text',
                    ),

                    'button2_font_family'=>array(
                        'type'=>'fonts',
                        'title'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_FONT_FAMILY'),
                        'selector'=> array(
                            'type'=>'font',
                            'font'=>'{{ VALUE }}',
                            'css'=>'.btn { font-family: {{ VALUE }}; }'
                        ),
                        'depends'=> array(
                            array('button2_text', '!=', ''),
                        )
                    ),

                    'button2_font_style'=>array(
                        'type'=>'fontstyle',
                        'title'=> JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_FONT_STYLE'),
                        'depends'=> array(
                            array('button2_text', '!=', ''),
                        )
                    ),

                    'button2_letterspace'=>array(
                        'type'=>'select',
                        'title'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_LETTER_SPACING'),
                        'values'=>array(
                            '0'=> 'Default',
                            '1px'=> '1px',
                            '2px'=> '2px',
                            '3px'=> '3px',
                            '4px'=> '4px',
                            '5px'=> '5px',
                            '6px'=> '6px',
                            '7px'=> '7px',
                            '8px'=> '8px',
                            '9px'=> '9px',
                            '10px'=> '10px'
                        ),
                        'std'=>'0',
                        'depends'=> array(
                            array('button2_text', '!=', ''),
                        )
                    ),

                    'button2_url'=>array(
                        'type'=>'media',
                        'format'=>'attachment',
                        'title'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_URL'),
                        'desc'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_URL_DESC'),
                        'placeholder'=>'http://',
                        'depends'=> array(
                            array('button2_text', '!=', ''),
                        ),
                    ),

                    'button2_target'=>array(
                        'type'=>'select',
                        'title'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_LINK_NEWTAB'),
                        'desc'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_LINK_NEWTAB_DESC'),
                        'values'=>array(
                            ''=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_TARGET_SAME_WINDOW'),
                            '_blank'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_TARGET_NEW_WINDOW'),
                        ),
                        'depends'=> array(
                            array('button2_text', '!=', ''),
                        )
                    ),

                    'button2_type'=>array(
                        'type'=>'select',
                        'title'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_STYLE'),
                        'desc'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_STYLE_DESC'),
                        'values'=>array(
                            'default'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_DEFAULT'),
                            'primary'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_PRIMARY'),
                            'secondary'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_SECONDARY'),
                            'success'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_SUCCESS'),
                            'info'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_INFO'),
                            'warning'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_WARNING'),
                            'danger'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_DANGER'),
                            'dark'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_DARK'),
                            'link'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_LINK'),
                            'custom'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_CUSTOM'),
                        ),
                        'std'=>'success',
                        'depends'=> array(
                            array('button2_text', '!=', ''),
                        )
                    ),

                    'button2_appearance'=>array(
                        'type'=>'select',
                        'title'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_APPEARANCE'),
                        'desc'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_APPEARANCE_DESC'),
                        'values'=>array(
                            ''=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_APPEARANCE_FLAT'),
                            'outline'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_APPEARANCE_OUTLINE'),
                            '3d'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_APPEARANCE_3D'),
                        ),
                        'std'=>'flat',
                        'depends'=> array(
                            array('button2_text', '!=', ''),
                        )
                    ),

                    'button2_background_color'=>array(
                        'type'=>'color',
                        'title'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_BACKGROUND_COLOR'),
                        'desc'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_BACKGROUND_COLOR_DESC'),
                        'std' => '#444444',
                        'depends'=> array(
                            array('button2_type', '=', 'custom'),
                            array('button2_text', '!=', ''),
                        )
                    ),

                    'button2_color'=>array(
                        'type'=>'color',
                        'title'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_COLOR'),
                        'desc'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_COLOR_DESC'),
                        'std' => '#fff',
                        'depends'=> array(
                            array('button2_type', '=', 'custom'),
                            array('button2_text', '!=', ''),
                        )
                    ),

                    'button2_background_color_hover'=>array(
                        'type'=>'color',
                        'title'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_BACKGROUND_COLOR_HOVER'),
                        'desc'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_BACKGROUND_COLOR_HOVER_DESC'),
                        'std' => '#222',
                        'depends'=> array(
                            array('button2_type', '=', 'custom'),
                            array('button2_text', '!=', ''),
                        )
                    ),

                    'button2_color_hover'=>array(
                        'type'=>'color',
                        'title'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_COLOR_HOVER'),
                        'desc'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_COLOR_HOVER_DESC'),
                        'std' => '#fff',
                        'depends'=> array(
                            array('button2_type', '=', 'custom'),
                            array('button2_text', '!=', ''),
                        )
                    ),

                    'button2_size'=>array(
                        'type'=>'select',
                        'title'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE'),
                        'desc'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE_DESC'),
                        'values'=>array(
                            ''=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE_DEFAULT'),
                            'lg'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE_LARGE'),
                            'xlg'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE_XLARGE'),
                            'sm'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE_SMALL'),
                            'xs'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE_EXTRA_SAMLL'),
                        ),
                        'depends'=> array(
                            array('button2_text', '!=', ''),
                        )
                    ),

                    'button2_shape'=>array(
                        'type'=>'select',
                        'title'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SHAPE'),
                        'desc'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SHAPE_DESC'),
                        'values'=>array(
                            'rounded'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SHAPE_ROUNDED'),
                            'square'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SHAPE_SQUARE'),
                            'round'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SHAPE_ROUND'),
                        ),
                        'depends'=> array(
                            array('button2_text', '!=', ''),
                        )
                    ),

                    'button2_block'=>array(
                        'type'=>'select',
                        'title'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_BLOCK'),
                        'desc'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_BLOCK_DESC'),
                        'values'=>array(
                            ''=>JText::_('JNO'),
                            'sppb-btn-block'=>JText::_('JYES'),
                        ),
                        'depends'=> array(
                            array('button2_text', '!=', ''),
                        )
                    ),

                    'button2_icon'=>array(
                        'type'=>'icon',
                        'title'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_ICON'),
                        'desc'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_ICON_DESC'),
                        'depends'=> array(
                            array('button2_text', '!=', ''),
                        )
                    ),

                    'button2_icon_position'=>array(
                        'type'=>'select',
                        'title'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_ICON_POSITION'),
                        'values'=>array(
                            'left'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_LEFT'),
                            'right'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_RIGHT'),
                        ),
                        'depends'=> array(
                            array('button2_text', '!=', ''),
                        ),
                    ),
                    'button2_margin_top'=>array(
                        'type'=>'slider',
                        'title'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_MARGIN_TOP'),
                        'max'=>400,
                        'depends'=> array(
                            array('button2_text', '!=', ''),
                        ),
                    ),

                    'back_bgcolor' => array(
                        'type' => 'color',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_FLIPBOX_BACK_BG_COLOR'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_FLIPBOX_BACK_BG_COLOR_DESC'),
                        'std' => '#2E3B3E',
                    ),
                    'back_bgimg' => array(
                        'type' => 'media',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_FLIPBOX_BACK_BG_IMG'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_FLIPBOX_BACK_BG_IMG_DESC'),
                        'std' => '',
                    ),
                    'back_textcolor' => array(
                        'type' => 'color',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_FLIPBOX_BACK_TEXT_COLOR'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_FLIPBOX_BACK_TEXT_COLOR_DESC'),
                        'std' => '#fff',
                    ),
                ),
            )
        )
);
