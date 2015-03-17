<div class="catVehicles index">
	<h2><?php echo __('Cat Vehicles'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('category_id'); ?></th>
			<th><?php echo $this->Paginator->sort('subcategory_id'); ?></th>
			<th><?php echo $this->Paginator->sort('add_type'); ?></th>
			<th><?php echo $this->Paginator->sort('make'); ?></th>
			<th><?php echo $this->Paginator->sort('model'); ?></th>
			<th><?php echo $this->Paginator->sort('type'); ?></th>
			<th><?php echo $this->Paginator->sort('engine_cappacity'); ?></th>
			<th><?php echo $this->Paginator->sort('milage'); ?></th>
			<th><?php echo $this->Paginator->sort('mfg_year'); ?></th>
			<th><?php echo $this->Paginator->sort('reg_year'); ?></th>
			<th><?php echo $this->Paginator->sort('fuel_type'); ?></th>
			<th><?php echo $this->Paginator->sort('kms_driven'); ?></th>
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th><?php echo $this->Paginator->sort('location'); ?></th>
			<th><?php echo $this->Paginator->sort('seller_type'); ?></th>
			<th><?php echo $this->Paginator->sort('premium_type'); ?></th>
			<th><?php echo $this->Paginator->sort('can_message'); ?></th>
			<th><?php echo $this->Paginator->sort('created_at'); ?></th>
			<th><?php echo $this->Paginator->sort('deleted_at'); ?></th>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($catVehicles as $catVehicle): ?>
	<tr>
		<td><?php echo h($catVehicle['CatVehicle']['title']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($catVehicle['Category']['name'], array('controller' => 'categories', 'action' => 'view', $catVehicle['Category']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($catVehicle['Subcategory']['id'], array('controller' => 'subcategories', 'action' => 'view', $catVehicle['Subcategory']['id'])); ?>
		</td>
		<td><?php echo h($catVehicle['CatVehicle']['add_type']); ?>&nbsp;</td>
		<td><?php echo h($catVehicle['CatVehicle']['make']); ?>&nbsp;</td>
		<td><?php echo h($catVehicle['CatVehicle']['model']); ?>&nbsp;</td>
		<td><?php echo h($catVehicle['CatVehicle']['type']); ?>&nbsp;</td>
		<td><?php echo h($catVehicle['CatVehicle']['engine_cappacity']); ?>&nbsp;</td>
		<td><?php echo h($catVehicle['CatVehicle']['milage']); ?>&nbsp;</td>
		<td><?php echo h($catVehicle['CatVehicle']['mfg_year']); ?>&nbsp;</td>
		<td><?php echo h($catVehicle['CatVehicle']['reg_year']); ?>&nbsp;</td>
		<td><?php echo h($catVehicle['CatVehicle']['fuel_type']); ?>&nbsp;</td>
		<td><?php echo h($catVehicle['CatVehicle']['kms_driven']); ?>&nbsp;</td>
		<td><?php echo h($catVehicle['CatVehicle']['city']); ?>&nbsp;</td>
		<td><?php echo h($catVehicle['CatVehicle']['location']); ?>&nbsp;</td>
		<td><?php echo h($catVehicle['CatVehicle']['seller_type']); ?>&nbsp;</td>
		<td><?php echo h($catVehicle['CatVehicle']['premium_type']); ?>&nbsp;</td>
		<td><?php echo h($catVehicle['CatVehicle']['can_message']); ?>&nbsp;</td>
		<td><?php echo h($catVehicle['CatVehicle']['created_at']); ?>&nbsp;</td>
		<td><?php echo h($catVehicle['CatVehicle']['deleted_at']); ?>&nbsp;</td>
		<td><?php echo h($catVehicle['CatVehicle']['id']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $catVehicle['CatVehicle']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $catVehicle['CatVehicle']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $catVehicle['CatVehicle']['id']), array(), __('Are you sure you want to delete # %s?', $catVehicle['CatVehicle']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Cat Vehicle'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subcategories'), array('controller' => 'subcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subcategory'), array('controller' => 'subcategories', 'action' => 'add')); ?> </li>
	</ul>
</div>
