<?php
/**
 * @package Helix Ultimate Framework
 * @author JoomShaper https://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2018 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or Later
*/

defined ('_JEXEC') or die();
JHtml::_('jquery.framework', true, null, true);
JHtml::_('bootstrap.framework');
JHtml::_('formbehavior.chosen', 'select');
$doc = JFactory::getDocument();
$app = JFactory::getApplication();
$template = $this->template;
$helix_path = JPATH_PLUGINS . '/system/helixultimate/core/helixultimate.php';

if (file_exists($helix_path)) {
    require_once($helix_path);
    $theme = new helixUltimate;
} else {
    die('Install and activate <a target="_blank" href="https://www.joomshaper.com/helix">Helix Ultimate Framework</a>.');
}
 $webfonts = array();
 if ($this->params->get('enable_navigation_fonts'))
    {
        $webfonts['.sp-megamenu-parent li  a'] = $this->params->get('navigation_fonts');
    }
 if ($this->params->get('enable_custom_font2') && $this->params->get('custom_font_selectors2'))
{
    $webfonts[$this->params->get('custom_font_selectors2')] = $this->params->get('custom_font2');
}
if ($this->params->get('enable_btn_font'))
{
 $webfonts['.btn , .sppb-btn'] = $this->params->get('btn_font');
}
if ($this->params->get('enable_form_font'))
{
 $webfonts['.body-wrapper .sppb-form-control,.body-wrapper .controls .input-prepend input,.body-wrapper .sppb-form-group .sppb-form-control,.body-wrapper select,.body-wrapper textarea,.body-wrapper input[type="text"],.body-wrapper input[type="password"],.body-wrapper input[type="datetime"],.body-wrapper input[type="datetime-local"],.body-wrapper input[type="date"],.body-wrapper input[type="dates"],.body-wrapper input[type="month"],.body-wrapper input[type="time"],.body-wrapper input[type="times"],.body-wrapper input[type="week"],.body-wrapper input[type="number"],.body-wrapper input[type="email"],.body-wrapper input[type="url"],.body-wrapper input[type="search"],.body-wrapper input[type="tel"],.body-wrapper input[type="color"],.body-wrapper .uneditable-input'] = $this->params->get('form_font');
}

$theme->addGoogleFont($webfonts);
//Coming Soon
if ($this->params->get('comingsoon'))
{
  header("Location: " . $this->baseUrl . "?tmpl=comingsoon");
}

$custom_style = $this->params->get('custom_style');
$preset = $this->params->get('preset');
//print_r($this->params->get('global_color'));
if($custom_style || !$preset)
{
$scssVars = array(
    'preset' => 'default',
    'global_color' => $this->params->get('global_color'),
    'text_colors' => $this->params->get('text_colors'),
    'bg_color' => $this->params->get('bg_color'),
    'header_bg_color' => $this->params->get('header_bg_color'),
    'logo_text_color' => $this->params->get('logo_text_color'),
    'menu_text_color' => $this->params->get('menu_text_color'),
    'menu_text_hover_color' => $this->params->get('menu_text_hover_color'),
    'menu_text_active_color' => $this->params->get('menu_text_active_color'),
    'menu_dropdown_bg_color' => $this->params->get('menu_dropdown_bg_color'),
    'menu_dropdown_text_color' => $this->params->get('menu_dropdown_text_color'),
    'menu_dropdown_text_hover_color' => $this->params->get('menu_dropdown_text_hover_color'),
    'menu_dropdown_text_active_color' => $this->params->get('menu_dropdown_text_active_color'),
    'footer_bg_color' => $this->params->get('footer_bg_color'),
    'footer_text_color' => $this->params->get('footer_text_color'),
    'footer_link_color' => $this->params->get('footer_link_color'),
    'footer_link_hover_color' => $this->params->get('footer_link_hover_color'),
    'topbar_bg_color' => $this->params->get('topbar_bg_color'),
    'topbar_text_color' => $this->params->get('topbar_text_color')
);
}
else
{
    $scssVars = (array) json_decode($this->params->get('preset'));
}
$scssVars['header_height'] = $this->params->get('header_height', '60px');

//Body Background Image
if ($bg_image = $this->params->get('body_bg_image'))
{
    $body_style = 'background-image: url(' . JURI::base(true) . '/' . $bg_image . ');';
    $body_style .= 'background-repeat: ' . $this->params->get('body_bg_repeat') . ';';
    $body_style .= 'background-size: ' . $this->params->get('body_bg_size') . ';';
    $body_style .= 'background-attachment: ' . $this->params->get('body_bg_attachment') . ';';
    $body_style .= 'background-position: ' . $this->params->get('body_bg_position') . ';';
    $body_style = 'body.site {' . $body_style . '}';
    $doc->addStyledeclaration($body_style);
}

//Custom CSS
if ($custom_css = $this->params->get('custom_css'))
{
    $doc->addStyledeclaration($custom_css);
}

//Custom JS
if ($custom_js = $this->params->get('custom_js'))
{
    $doc->addScriptdeclaration($custom_js);
}

?>
<?php $this->setGenerator('DominionDigital'); ?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="<?php echo $this->baseurl ?>/templates/<?php echo $template ?>/favicon.ico" type="image/x-icon"/>

        <link rel="canonical" href="<?php echo JUri::current(); ?>">
        <?php

       $theme->head();
        
        $theme->add_css('font-awesome.min.css,custom.css');
        $theme->add_js('jquery.sticky.js, main.js');

        $theme->add_scss('master', $scssVars, 'template');
        $theme->add_scss('presets', $scssVars, 'presets/' . $scssVars['preset']);
        $theme->add_css('custom');

        //Before Head
        if ($before_head = $this->params->get('before_head'))
        {
            echo $before_head . "\n";
        }
        ?>
    </head>
    <body class="<?php echo $theme->bodyClass(); ?>">
    <?php if($this->params->get('preloader')) : ?>
        <div class="sp-preloader"><div>
            
        </div></div>
    <?php endif; ?>

    <div class="body-wrapper">
        <div class="body-innerwrapper">
            <?php echo $theme->getHeaderStyle(); ?>
            <?php $theme->render_layout(); ?>
        </div>
    </div>

    <!-- Off Canvas Menu -->
    <div class="offcanvas-overlay"></div>
    <div class="offcanvas-menu">
        <a href="#" class="close-offcanvas"><span class="fa fa-remove"></span></a>
        <div class="offcanvas-inner">
            <?php if ($this->countModules('offcanvas')) : ?>
                <jdoc:include type="modules" name="offcanvas" style="sp_xhtml" />
            <?php else: ?>
                <p class="alert alert-warning">
                    <?php echo JText::_('HELIX_ULTIMATE_NO_MODULE_OFFCANVAS'); ?>
                </p>
            <?php endif; ?>
        </div>
    </div>

    <?php $theme->after_body(); ?>

    <jdoc:include type="modules" name="debug" style="none" />
    
    <!-- Go to top -->
    <?php if ($this->params->get('goto_top', 0)) : ?>
        <a href="#" class="sp-scroll-up" aria-label="Scroll Up"><span class="fa fa-chevron-up" aria-hidden="true"></span></a>
    <?php endif; ?>

    </body>
</html>