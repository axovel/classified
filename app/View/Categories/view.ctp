<div class="categories view">
<h2><?php echo __('Category'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($category['Category']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($category['Category']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($category['Category']['url']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Category'), array('action' => 'edit', $category['Category']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Category'), array('action' => 'delete', $category['Category']['id']), array(), __('Are you sure you want to delete # %s?', $category['Category']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ads'), array('controller' => 'ads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ad'), array('controller' => 'ads', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subcategories'), array('controller' => 'subcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subcategory'), array('controller' => 'subcategories', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Ads'); ?></h3>
	<?php if (!empty($category['Ad'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('Subcategory Id'); ?></th>
		<th><?php echo __('Ad Title'); ?></th>
		<th><?php echo __('Video Url'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Website Link'); ?></th>
		<th><?php echo __('Is Urgent'); ?></th>
		<th><?php echo __('Is Featured'); ?></th>
		<th><?php echo __('Featured Plan Type Id'); ?></th>
		<th><?php echo __('Is Soptlight'); ?></th>
		<th><?php echo __('Date Created'); ?></th>
		<th><?php echo __('Date Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($category['Ad'] as $ad): ?>
		<tr>
			<td><?php echo $ad['id']; ?></td>
			<td><?php echo $ad['category_id']; ?></td>
			<td><?php echo $ad['subcategory_id']; ?></td>
			<td><?php echo $ad['ad_title']; ?></td>
			<td><?php echo $ad['video_url']; ?></td>
			<td><?php echo $ad['description']; ?></td>
			<td><?php echo $ad['price']; ?></td>
			<td><?php echo $ad['website_link']; ?></td>
			<td><?php echo $ad['is_urgent']; ?></td>
			<td><?php echo $ad['is_featured']; ?></td>
			<td><?php echo $ad['featured_plan_type_id']; ?></td>
			<td><?php echo $ad['is_soptlight']; ?></td>
			<td><?php echo $ad['date_created']; ?></td>
			<td><?php echo $ad['date_updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'ads', 'action' => 'view', $ad['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'ads', 'action' => 'edit', $ad['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'ads', 'action' => 'delete', $ad['id']), array(), __('Are you sure you want to delete # %s?', $ad['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Ad'), array('controller' => 'ads', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Subcategories'); ?></h3>
	<?php if (!empty($category['Subcategory'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('Subcategory Name'); ?></th>
		<th><?php echo __('Subcategory Url'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($category['Subcategory'] as $subcategory): ?>
		<tr>
			<td><?php echo $subcategory['id']; ?></td>
			<td><?php echo $subcategory['category_id']; ?></td>
			<td><?php echo $subcategory['subcategory_name']; ?></td>
			<td><?php echo $subcategory['subcategory_url']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'subcategories', 'action' => 'view', $subcategory['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'subcategories', 'action' => 'edit', $subcategory['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'subcategories', 'action' => 'delete', $subcategory['id']), array(), __('Are you sure you want to delete # %s?', $subcategory['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Subcategory'), array('controller' => 'subcategories', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
