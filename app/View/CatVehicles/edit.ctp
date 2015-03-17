<div class="catVehicles form">
<?php echo $this->Form->create('CatVehicle'); ?>
	<fieldset>
		<legend><?php echo __('Edit Cat Vehicle'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('category_id');
		echo $this->Form->input('subcategory_id');
		echo $this->Form->input('add_type');
		echo $this->Form->input('make');
		echo $this->Form->input('model');
		echo $this->Form->input('type');
		echo $this->Form->input('engine_cappacity');
		echo $this->Form->input('milage');
		echo $this->Form->input('mfg_year');
		echo $this->Form->input('reg_year');
		echo $this->Form->input('fuel_type');
		echo $this->Form->input('kms_driven');
		echo $this->Form->input('city');
		echo $this->Form->input('location');
		echo $this->Form->input('seller_type');
		echo $this->Form->input('premium_type');
		echo $this->Form->input('can_message');
		echo $this->Form->input('created_at');
		echo $this->Form->input('deleted_at');
		echo $this->Form->input('id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CatVehicle.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('CatVehicle.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Cat Vehicles'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subcategories'), array('controller' => 'subcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subcategory'), array('controller' => 'subcategories', 'action' => 'add')); ?> </li>
	</ul>
</div>
