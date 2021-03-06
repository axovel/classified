<div class="ads index">
   
	<h2><?php echo __('Ads'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>

			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('category_id'); ?></th>
			<th><?php echo $this->Paginator->sort('subcategory_id'); ?></th>
			<th><?php echo $this->Paginator->sort('ad_title'); ?></th>
			<th><?php echo $this->Paginator->sort('video_url'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th><?php echo $this->Paginator->sort('website_link'); ?></th>
			<th><?php echo $this->Paginator->sort('is_urgent'); ?></th>
			<th><?php echo $this->Paginator->sort('is_featured'); ?></th>
			<th><?php echo $this->Paginator->sort('featured_plan_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('is_soptlight'); ?></th>
			<th><?php echo $this->Paginator->sort('date_created'); ?></th>
			<th><?php echo $this->Paginator->sort('date_updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($ads as $ad): 
           // pr($ad)?>
	<tr>
		<td><?php echo h($ad['Ad']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($ad['Category']['name'], array('controller' => 'categories', 'action' => 'view', $ad['Category']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($ad['Subcategory']['subcategory_name'], array('controller' => 'subcategories', 'action' => 'view', $ad['Subcategory']['id'])); ?>
		</td>
		<td><?php echo h($ad['Ad']['ad_title']); ?>&nbsp;</td>
		<td><?php echo h($ad['Ad']['video_url']); ?>&nbsp;</td>
		<td><?php echo h($ad['Ad']['description']); ?>&nbsp;</td>
		<td><?php echo h($ad['Ad']['price']); ?>&nbsp;</td>
		<td><?php echo h($ad['Ad']['website_link']); ?>&nbsp;</td>
		<td><?php echo h($ad['Ad']['is_urgent']); ?>&nbsp;</td>
		<td><?php echo h($ad['Ad']['is_featured']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($ad['FeaturedPlanType']['id'], array('controller' => 'featured_plan_types', 'action' => 'view', $ad['FeaturedPlanType']['id'])); ?>
		</td>
		<td><?php echo h($ad['Ad']['is_soptlight']); ?>&nbsp;</td>
		<td><?php echo h($ad['Ad']['date_created']); ?>&nbsp;</td>
		<td><?php echo h($ad['Ad']['date_updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $ad['Ad']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $ad['Ad']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $ad['Ad']['id']), array(), __('Are you sure you want to delete # %s?', $ad['Ad']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Ad'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subcategories'), array('controller' => 'subcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subcategory'), array('controller' => 'subcategories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Featured Plan Types'), array('controller' => 'featured_plan_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Featured Plan Type'), array('controller' => 'featured_plan_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
