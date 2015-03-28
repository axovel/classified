<div class="ads view">
<h2><?php echo __('Ad'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($ad['Ad']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ad['Category']['name'], array('controller' => 'categories', 'action' => 'view', $ad['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subcategory'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ad['Subcategory']['subcategory_name'], array('controller' => 'subcategories', 'action' => 'view', $ad['Subcategory']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ad Title'); ?></dt>
		<dd>
			<?php echo h($ad['Ad']['ad_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Video Url'); ?></dt>
		<dd>
			<?php echo h($ad['Ad']['video_url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($ad['Ad']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($ad['Ad']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Website Link'); ?></dt>
		<dd>
			<?php echo h($ad['Ad']['website_link']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Urgent'); ?></dt>
		<dd>
			<?php echo h($ad['Ad']['is_urgent']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Featured'); ?></dt>
		<dd>
			<?php echo h($ad['Ad']['is_featured']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Featured Plan Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ad['FeaturedPlanType']['id'], array('controller' => 'featured_plan_types', 'action' => 'view', $ad['FeaturedPlanType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Soptlight'); ?></dt>
		<dd>
			<?php echo h($ad['Ad']['is_soptlight']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Created'); ?></dt>
		<dd>
			<?php echo h($ad['Ad']['date_created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Updated'); ?></dt>
		<dd>
			<?php echo h($ad['Ad']['date_updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ad'), array('action' => 'edit', $ad['Ad']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ad'), array('action' => 'delete', $ad['Ad']['id']), array(), __('Are you sure you want to delete # %s?', $ad['Ad']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ads'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ad'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subcategories'), array('controller' => 'subcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subcategory'), array('controller' => 'subcategories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Featured Plan Types'), array('controller' => 'featured_plan_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Featured Plan Type'), array('controller' => 'featured_plan_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
