<div class="subcategories form">
<?php echo $this->Form->create('Subcategory'); ?>
	<fieldset>
		<legend><?php echo __('Add Subcategory'); ?></legend>
	<?php
		echo $this->Form->input('category_id');
		echo $this->Form->input('subcategory_name');
		echo $this->Form->input('subcategory_url');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Subcategories'), array('action' => 'admin_index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'admin_index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'admin_add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ads'), array('controller' => 'ads', 'action' => 'admin_index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ad'), array('controller' => 'ads', 'action' => 'admin_add')); ?> </li>
	</ul>
</div>
