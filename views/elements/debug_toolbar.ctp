<?php
/* SVN FILE: $Id$ */
/**
 * Debug Toolbar Element
 *
 * Renders all of the other panel elements.
 *
 * PHP versions 4 and 5
 *
 * CakePHP :  Rapid Development Framework <http://www.cakephp.org/>
 * Copyright 2006-2008, Cake Software Foundation, Inc.
 *								1785 E. Sahara Avenue, Suite 490-204
 *								Las Vegas, Nevada 89104
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright		Copyright 2006-2008, Cake Software Foundation, Inc.
 * @link			http://www.cakefoundation.org/projects/info/cakephp CakePHP Project
 * @package			cake
 * @subpackage		cake.cake.libs.
 * @since			CakePHP v 1.2.0.4487
 * @version			$Revision$
 * @modifiedby		$LastChangedBy$
 * @lastmodified	$Date$
 * @license			http://www.opensource.org/licenses/mit-license.php The MIT License
 */
?>
<div id="debug-kit-toolbar">
	<?php if (empty($debugToolbarPanels)) :?>
		<p class="warning"><?php __('There are no active panels. You must enable a panel to see its output.'); ?></p>
	<?php else: ?>
		<?php foreach ($debugToolbarPanels as $panelName => $panelInfo) : ?>
			<div class="panel-tab"><?php echo Inflector::humanize(Inflector::underscore($panelName)); ?></div>
			<div class="panel-content"><?php echo $this->element($panelInfo['elementName'], $panelInfo); ?></div>
		<?php endforeach; ?>
	<?php endif; ?>
</div>