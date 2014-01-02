<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_contact
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<?php if (JPluginHelper::isEnabled('user', 'profile')) :
	$fields = $this->item->profile->getFieldset('profile'); ?>
<ul>
	<?php foreach ($fields as $profile) :
		if ($profile->value) :
			$profile->text = htmlspecialchars($profile->value, ENT_COMPAT, 'UTF-8');

			switch ($profile->id) :
				case "profile_website":
					$v_http = substr($profile->value, 0, 4);

					if ($v_http == "http") :
						echo '<li><a href="'.$profile->text.'">'.$profile->text.'</a></li>';
					else :
						echo '<li><a href="http://'.$profile->text.'">'.$profile->text.'</a></li>';
					endif;
					break;

				default:
					echo '<li>'.$profile->text.'</li>';
					break;
			endswitch;
		endif;
	endforeach; ?>
</ul>
<?php endif; ?>
