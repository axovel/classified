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