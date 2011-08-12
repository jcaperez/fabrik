<?php /*
 * @package Joomla.Administrator
 * @subpackage Fabrik
 * @since		1.6
 * @copyright Copyright (C) 2005 Rob Clayburn. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
*/

// no direct access
defined('_JEXEC') or die;

JHtml::_('behavior.formvalidation');
$db = FabrikWorker::getDbo();
?>

<form action="<?php JRoute::_('index.php?option=com_fabrik'); ?>" method="post" name="adminForm" id="adminForm" class="form-validate">
	<ul style="list-style:none;font-weight:bold;color:#0055BB;background:#C3D2E5 url(templates/khepri/images/notice-info.png) no-repeat scroll 4px center;padding:10px;margin-bottom:10px;border-top:3px solid #84A7DB;border-bottom:3px solid #84A7DB">
	<?php if($db->NameQuote($this->item->name) !== $this->oldName){ ?>
		<li style="padding-left:30px"><?php echo JText::sprintf('COM_FABRIK_UPDATE_ELEMENT_NAME', $this->oldName, $db->NameQuote($this->item->name)  )?></li>
	<?php }?>
	<?php if (strtolower($this->origDesc ) !== strtolower($this->newDesc)) {?>
  		<li style="padding-left:30px"><?php echo JText::sprintf('COM_FABRIK_UPDATE_ELEMENT_STRUCTURE', $this->origDesc, $this->newDesc )?></li>
 	<?php }?>
	</ul>
	<?php echo JText::_('COM_FABRIK_UPDATE_FIELD_STRUCTURE_DESC')?>
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="id" value="<?php echo $this->item->id?>" />
	<input type="hidden" name="origtask" value="<?php echo $this->origtask?>" />
  <input type="hidden" name="oldname" value="<?php echo $this->oldName?>" />
	<input type="hidden" name="origplugin" value="<?php echo $this->origPlugin?>" />
  	<?php echo JHTML::_( 'form.token');
	echo JHTML::_('behavior.keepalive'); ?>
</form>