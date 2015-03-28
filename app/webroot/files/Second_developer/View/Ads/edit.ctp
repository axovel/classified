<div class="ads form">
<?php echo $this->Form->create('Ad'); ?>
	<fieldset>
		<legend><?php echo __('Edit Ad'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('category_id');
		echo $this->Form->input('subcategory_id');
		echo $this->Form->input('ad_title');
		echo $this->Form->input('video_url');
		echo $this->Form->input('description');
		echo $this->Form->input('price');
		echo $this->Form->input('website_link');
		echo $this->Form->input('is_urgent');
		echo $this->Form->input('is_featured');
		echo $this->Form->input('featured_plan_type_id');
		echo $this->Form->input('is_soptlight');
		echo $this->Form->input('date_created');
		echo $this->Form->input('date_updated');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Ad.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Ad.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Ads'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subcategories'), array('controller' => 'subcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subcategory'), array('controller' => 'subcategories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Featured Plan Types'), array('controller' => 'featured_plan_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Featured Plan Type'), array('controller' => 'featured_plan_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
