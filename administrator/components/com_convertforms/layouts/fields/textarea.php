<?php

/**
 * @package         Convert Forms
 * @version         2.0.8 Free
 * 
 * @author          Tassos Marinos <info@tassos.gr>
 * @link            http://www.tassos.gr
 * @copyright       Copyright © 2018 Tassos Marinos All Rights Reserved
 * @license         GNU GPLv3 <http://www.gnu.org/licenses/gpl.html> or later
*/

defined('_JEXEC') or die('Restricted access');
extract($displayData);

?>

<textarea name="<?php echo $field->name ?>" id="<?php echo $field->id; ?>"
	<?php if (isset($field->required) && $field->required) { ?>
		required
	<?php } ?>

	<?php if (isset($field->placeholder)) { ?>
		placeholder="<?php echo htmlspecialchars($field->placeholder, ENT_COMPAT, 'UTF-8'); ?>"
	<?php } ?>

	class="<?php echo $field->class ?>"
	style="<?php echo $field->style ?>"
	rows="<?php echo $field->textareaheight ?>">
</textarea>