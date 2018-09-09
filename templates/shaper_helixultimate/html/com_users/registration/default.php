<?php
/**
 * @package Helix Ultimate Framework
 * @author JoomShaper https://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2018 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or Later
 */
defined('_JEXEC') or die();

JHtml::_('behavior.keepalive');
JHtml::_('behavior.formvalidator');
?>
<div class="registration<?php echo $this->pageclass_sfx; ?>">
  <div class="row justify-content-center">
    <div class="col-md-9 col-lg-6">
      <?php if ($this->params->get('show_page_heading')) : ?>
        <div class="page-header">
          <h1><?php echo $this->escape($this->params->get('page_heading')); ?></h1>
        </div>
      <?php endif; ?>
      <script type="text/javascript">
        jQuery(document).ready(function () {
          jQuery(function ($) {
            // your code goes here

            $("#cf2").on("submit", function (e) {
              e.preventDefault();
              form = this;
              aDatos = $(form).serializeArray();
              var i;
			  var name='';
              var cadena='{';
              for (i = 0; i < aDatos.length; i++) {
				  name=aDatos[i].name.replace("cf[", "").replace("]", "");
				  switch(name){
					  case 'firstname':name='jform[name]';break;
					  case 'email':name='jform[email1]';break;
					  case 'email_copy':name='jform[email2]';break;
				      case 'username':name='jform[username]';break;
					  case 'password1':name='jform[password1]';break;
					  case 'password2':name='jform[password2]';break;
					  default: name=name;break;
				  }
                if(i==aDatos.length-1){
                  cadena+='"'+name+'":"'+aDatos[i].value+'"';
                }else{
                	cadena+='"'+name+'":"'+aDatos[i].value+'",';
                }
              }
              cadena+='}';
              $.ajax({
                url: '<?php echo htmlspecialchars_decode(JRoute::_('index.php?option=com_users&task=registration.register')); ?>',
                type: 'post',
                data: JSON.parse(cadena),
                dataType: 'json',
                async: true,
                success: function (response) {
                  console.log('Usuario creado');
                }
              });
            });
          });
        });
      </script>

      <?php $module = JModuleHelper::getModule('convertforms', 'Nuevo usuario form'); ?>
      <?php echo JModuleHelper::renderModule($module); ?>
      <?php echo JHtml::_('form.token'); ?>
    </div>
  </div>
</div>
