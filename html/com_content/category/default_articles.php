<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.beez3
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$app = JFactory::getApplication();


JHtml::addIncludePath(JPATH_COMPONENT.'/helpers/html');
JHtml::_('behavior.framework');

$n = count($this->items);
$listOrder	= $this->escape($this->state->get('list.ordering'));
$listDirn	= $this->escape($this->state->get('list.direction'));
?>

<?php if (empty($this->items)) : ?>

	<?php if ($this->params->get('show_no_articles', 1)) : ?>
		<p><?php echo JText::_('COM_CONTENT_NO_ARTICLES'); ?></p>
	<?php endif; ?>

<?php else : ?>

	<table class="category">
		<tbody>
			<?php foreach ($this->items as $i => &$article) : ?>
			<tr class="cat-list-row<?php echo $i % 2; ?>">

				<td class="list-title">
					<a href="<?php echo JRoute::_(ContentHelperRoute::getArticleRoute($article->slug, $article->catid)); ?>">
						<?php echo $this->escape($article->title); ?> </a>
				</td>

				<td>&nbsp;</td>

				<?php if ($this->params->get('list_show_date')) : ?>
				<td class="list-date">
					<?php
					echo JHtml::_(
						'date', $article->displayDate, $this->escape(
							$this->params->get('date_format', JText::_('DATE_FORMAT_LC3'))
						)
					); ?>
				</td>
				<?php endif; ?>

				<?php if ($this->params->get('list_show_author', 1)) : ?>
				<td class="list-author">
					<?php if (!empty($article->author) || !empty($article->created_by_alias)) : ?>
						<?php $author = $article->author ?>
						<?php $author = ($article->created_by_alias ? $article->created_by_alias : $author);?>

						<?php if (!empty($article->contactid ) &&  $this->params->get('link_author') == true):?>
							<?php echo JHtml::_(
									'link',
									JRoute::_('index.php?option=com_contact&view=contact&id='.$article->contactid),
									$author
							); ?>

						<?php else :?>
							<?php echo JText::sprintf('COM_CONTENT_WRITTEN_BY', $author); ?>
						<?php endif; ?>
					<?php endif; ?>
				</td>
				<?php endif; ?>

			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

<?php endif; ?>
