<style>    
    .span_label{float:left;min-width:200px;}
    .span_value{}
</style>
<div class="ads view">
<h2><?php echo __('Ad'); ?></h2>
                <p>
		<span class="span_label"><strong><?php echo __('Id'); ?></strong></span>
		<span class="span_value"><?php echo h($ad['Ad']['id']); ?>	&nbsp;</span>
                </p> <br>
                
                <p>
		<span class="span_label"><strong><?php echo __('Category'); ?></strong></span>
		<span class="span_value"><?php echo $this->Html->link($ad['Category']['name'], array('controller' => 'categories', 'action' => 'admin_view', $ad['Category']['id'])); ?>&nbsp;</span>
                </p> <br>
                <p>
		<span class="span_label"><strong><?php echo __('Subcategory'); ?></strong></span>
		<span class="span_value"><?php echo $this->Html->link($ad['Subcategory']['subcategory_name'], array('controller' => 'subcategories', 'action' => 'view', $ad['Subcategory']['id'])); ?>&nbsp;</span>
                </p> <br>
                <p>
		<span class="span_label"><strong><?php echo __('Ad Title'); ?></strong></span>
		<span class="span_value"><?php echo h($ad['Ad']['ad_title']); ?>&nbsp;</span>
                </p> <br>
                <p>
		<span class="span_label"><strong><?php echo __('Video Url'); ?></strong></span>
		<span class="span_value"><?php echo h($ad['Ad']['video_url']); ?>&nbsp;</span>
                </p> <br>
                <p>
		<span class="span_label"><strong><?php echo __('Description'); ?></strong></span>
		<span class="span_value"><?php echo h($ad['Ad']['description']); ?>&nbsp;</span>
                </p> <br>
                <p>
		<span class="span_label"><strong><?php echo __('Price'); ?></strong></span>
		<span class="span_value"><?php echo "$".h($ad['Ad']['price']); ?>&nbsp;</span>
                </p> <br>
                <p>
		<span class="span_label"><strong><?php echo __('Website Link'); ?></strong></span>
		<span class="span_value"><?php echo h($ad['Ad']['website_link']); ?>&nbsp;</span>
                </p> <br>
               
                <p>
		<span class="span_label"><strong><?php echo __('Is Urgent'); ?></strong></span>
		<span class="span_value"><?php echo h($ad['Ad']['is_urgent']); ?>&nbsp;</span>
                </p> <br>
                <p>
		<span class="span_label"><strong><?php echo __('Is Featured'); ?></strong></span>
		<span class="span_value"><?php echo h($ad['Ad']['is_featured']); ?>&nbsp;</span>
                </p> <br>
                <p>
		<span class="span_label"><strong><?php echo __('Featured Plan Type'); ?></strong></span>
		<span class="span_value"><?php echo $this->Html->link($ad['FeaturedPlanType']['id'], array('controller' => 'featured_plan_types', 'action' => 'view', $ad['FeaturedPlanType']['id'])); ?>&nbsp;</span>
                </p> <br>
		
		 <p>
		<span class="span_label"><strong><?php echo __('Is Soptlight'); ?></strong></span>
		<span class="span_value"><?php echo h($ad['Ad']['is_soptlight']); ?>&nbsp;</span>
                </p> <br>
		 <p>
		<span class="span_label"><strong><?php echo __('Date Created'); ?></strong></span>
		<span class="span_value"><?php echo h($ad['Ad']['date_created']); ?>&nbsp;</span>
                </p> <br>
		
		 <p>
		<span class="span_label"><strong><?php echo __('Date Updated'); ?></strong></span>
		<span class="span_value"><?php echo h($ad['Ad']['date_updated']); ?>&nbsp;</span>
                </p> <br>
	
</div>