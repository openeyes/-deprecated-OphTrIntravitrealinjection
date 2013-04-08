<?php
/**
 * OpenEyes
 *
 * (C) Moorfields Eye Hospital NHS Foundation Trust, 2008-2011
 * (C) OpenEyes Foundation, 2011-2013
 * This file is part of OpenEyes.
 * OpenEyes is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
 * OpenEyes is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License along with OpenEyes in a file titled COPYING. If not, see <http://www.gnu.org/licenses/>.
 *
 * @package OpenEyes
 * @link http://www.openeyes.org.uk
 * @author OpenEyes <info@openeyes.org.uk>
 * @copyright Copyright (c) 2008-2011, Moorfields Eye Hospital NHS Foundation Trust
 * @copyright Copyright (c) 2011-2013, OpenEyes Foundation
 * @license http://www.gnu.org/licenses/gpl-3.0.html The GNU General Public License V3.0
 */
?>


	<div class="eventDetail aligned">
		<div class="label"><?php echo $element->getAttributeLabel($side . '_complications') ?>:</div>
		<div class="data">
			<?php if (!$element->{$side . '_complications'}) {?>
				<h4>None</h4>
			<?php }else{?>
				<h4>
					<?php foreach ($element->{$side . '_complications'} as $item) {
						echo $item->et_ophtrintravitinjection_complicat_complicat->name?><br/>
					<?php }?>
				</h4>
			<?php }?>
		</div>
	</div>

	<?php if ($element->{$side . '_oth_descrip'}) { ?>
		<div class="eventDetail aligned">
			<div class="label"><?php echo $element->getAttributeLabel($side . '_oth_descrip') ?>:</div>
			<div class="data"><?php echo CHtml::encode($element->{$side . '_oth_descrip'}) ?></div>
		</div>
	<?php } ?>
