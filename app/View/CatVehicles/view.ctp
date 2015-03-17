<div class="catVehicles view">
<h2><?php echo __('Cat Vehicle'); ?></h2>
	<dl>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($catVehicle['CatVehicle']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($catVehicle['Category']['name'], array('controller' => 'categories', 'action' => 'view', $catVehicle['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subcategory'); ?></dt>
		<dd>
			<?php echo $this->Html->link($catVehicle['Subcategory']['id'], array('controller' => 'subcategories', 'action' => 'view', $catVehicle['Subcategory']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Add Type'); ?></dt>
		<dd>
			<?php echo h($catVehicle['CatVehicle']['add_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Make'); ?></dt>
		<dd>
			<?php echo h($catVehicle['CatVehicle']['make']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Model'); ?></dt>
		<dd>
			<?php echo h($catVehicle['CatVehicle']['model']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($catVehicle['CatVehicle']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Engine Cappacity'); ?></dt>
		<dd>
			<?php echo h($catVehicle['CatVehicle']['engine_cappacity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Milage'); ?></dt>
		<dd>
			<?php echo h($catVehicle['CatVehicle']['milage']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mfg Year'); ?></dt>
		<dd>
			<?php echo h($catVehicle['CatVehicle']['mfg_year']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reg Year'); ?></dt>
		<dd>
			<?php echo h($catVehicle['CatVehicle']['reg_year']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fuel Type'); ?></dt>
		<dd>
			<?php echo h($catVehicle['CatVehicle']['fuel_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kms Driven'); ?></dt>
		<dd>
			<?php echo h($catVehicle['CatVehicle']['kms_driven']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($catVehicle['CatVehicle']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo h($catVehicle['CatVehicle']['location']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Seller Type'); ?></dt>
		<dd>
			<?php echo h($catVehicle['CatVehicle']['seller_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Premium Type'); ?></dt>
		<dd>
			<?php echo h($catVehicle['CatVehicle']['premium_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Can Message'); ?></dt>
		<dd>
			<?php echo h($catVehicle['CatVehicle']['can_message']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created At'); ?></dt>
		<dd>
			<?php echo h($catVehicle['CatVehicle']['created_at']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deleted At'); ?></dt>
		<dd>
			<?php echo h($catVehicle['CatVehicle']['deleted_at']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($catVehicle['CatVehicle']['id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cat Vehicle'), array('action' => 'edit', $catVehicle['CatVehicle']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cat Vehicle'), array('action' => 'delete', $catVehicle['CatVehicle']['id']), array(), __('Are you sure you want to delete # %s?', $catVehicle['CatVehicle']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cat Vehicles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cat Vehicle'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subcategories'), array('controller' => 'subcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subcategory'), array('controller' => 'subcategories', 'action' => 'add')); ?> </li>
	</ul>
</div>
