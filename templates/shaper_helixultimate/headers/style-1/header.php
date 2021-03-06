<?php
/**
 * @package Helix Ultimate Framework
 * @author JoomShaper https://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2018 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or Later
*/

defined ('_JEXEC') or die();

$data = $displayData;
$offcanvs_position = $displayData->params->get('offcanvas_position', 'right');

$feature_folder_path     = JPATH_THEMES . '/' . $data->template->template . '/features/';

include_once $feature_folder_path.'logo.php';
include_once $feature_folder_path.'menu.php';

$output  = '';
//------------------POSICION DE SUBMENU--------------------------------------
$output .= '<div class="container" style="max-width: 1700px;"><div class="row sp-submenu style-1"><div class="col-lg-3"></div><div class="col-lg-7 submenu-container">';
$output .= '<a id="user-menu" aria-label="Navigation" class="offcanvas-toggler-right" href="#"><i class="fa fa-user-circle-o" aria-hidden="true" title="Navigation"></i></a>';
$output .= '<jdoc:include type="modules" name="submenu" style="sp_xhtml" />';
$output .= '</div><div class="col-lg-3"></div></div></div>';
//---------------------------------------------------------------------------
$output .= '<header id="sp-header" class="style-1">';
$output .= '<div class="header-box">';
$output .= '<div class="container">';
$output .= '<div class="container-inner">';

$output .= '<div class="row">';

$class1 = 'col-lg-3';
$class2 = 'col-lg-7';
if($offcanvs_position == 'left')
{
    $class1 = 'col-lg-3';
    $class2 = 'd-none d-lg-block col-lg-7';
}

$output .= '<div id="sp-logo" class="'. $class1 .'">';
$output .= '<div class="sp-column">';
$logo    = new HelixUltimateFeatureLogo($data->params);
if(isset($logo->load_pos) && $logo->load_pos == 'before')
{
    $output .= $logo->renderFeature();
    $output .= '<jdoc:include type="modules" name="logo" style="sp_xhtml" />';
}
else
{
    $output .= '<jdoc:include type="modules" name="logo" style="sp_xhtml" />';
    $output .= $logo->renderFeature();
}
$output .= '</div>';
$output .= '</div>';

$output .= '<div id="sp-menu" class="'. $class2 .'">';
$output .= '<div class="sp-column">';
$menu    = new HelixUltimateFeatureMenu($data->params);
if(isset($menu->load_pos) && $menu->load_pos == 'before')
{
    $output .= $menu->renderFeature();
    $output .= '<jdoc:include type="modules" name="menu" style="sp_xhtml" />';
}
else
{
    $output .= '<jdoc:include type="modules" name="menu" style="sp_xhtml" />';
    $output .= $menu->renderFeature();
}
$output .= '</div>';
$output .= '</div>';

$output .= '<div id="after-logo" class="col-lg-2">';
$output .= '<div class="sp-column">';
$output .= '<jdoc:include type="modules" name="after-logo" style="sp_xhtml" />';
$output .= '</div>';
$output .= '</div>';

$output .= '</div>';
$output .= '</div>';
$output .= '</div>';
$output .= '</div>';
$output .= '</header>';

echo $output;